---
title: "Laravel Packages, PSR-4 and Me"
date: "2014-10-31"
imgpath: "/img/posts/2014-10-31-laravel-packages-and-psr4/"
img: 'code.png'
tags:
    - laravel
    - php
    - programming
    - software
   
---
**tl;dr**: I'm telling a story, jump to the bottom of this post if you're from Google and your PSR-4-autoloaded package isn't loading it's configuration properly in Laravel ~4.2

Today was an adventure. My day-job for the past while has been primarily building and unifying a lot of enterprisey functionality like APIs, authorization servers and authentication packages for a campus with over 200 000 users. Generally I try to refactor common functionality into packages, then open source and test wherever possible. Trying to get some cool features off the ground for a time-pressed demo, however, I had accumulated a fair bit of technical debt fairly rapidly, and it began to show.

So I set about refactoring the packages I'd written, removing some of the janky demo code and generally just trying to make things better wherever possible. Laravel Workbench - which I had used when making many of the packages - defaults to `PSR-0` when creating the `composer.json` for packages.  Of course, `PSR-0` has been recently [officially deprecated](https://github.com/php-fig/fig-standards/commit/master), so it made sense to, in the spirit of cleaning up some of my technical debt, make the packages `PSR-4`-compliant. I hadn't written tests yet, so I figured I'd write those too. Some (most) of my code wasn't testable, because it was a hackathon "get shit done" mindset, so I reorganized a lot of the architecture. I covered my package in unit tests, included a ServiceProvider in my `FrameworkIntegration` folder and decided it was time to reintegrate it into the main project.

If a shiver went down your spine, that's logical and expected. It should. I went from "no tests" to rewriting and completely changing *everything*. Now I'm throwing the module back into it's parent and hoping everything is kosher. 

It, of course, wasn't. Something was broken. I fired up my debugger, and after a solid few frustrating minutes, I tracked down the broken piece to the Configuration of my class - in the ServiceProvider I load configuration from a Laravel configuration file into a `Configuration` object, which I then inject into my client code.

```php
$this->package('u-alberta/authentication');
$ldap_config = \Config::get('authentication::ldap');
        $this->app->bind('\UAlberta\IST\Authentication\Configuration', function() use ($ldap_config) {
            $configuration = new Configuration();
            $configuration->setLDAP(
                $ldap_config['host'],
                $ldap_config['port'],
                $ldap_config['service_username'],
                $ldap_config['service_password']
            );
            return $configuration;
        });
```

Seems like it should work, no? The `$ldap_config` variable wasn't getting populated - it was an empty array. Not a null - the configuration wasn't **failing**, it was just saying "I've searched the provided directories and have concluded that the configuration you're requesting is empty array. You're welcome."

I tried all manner of things: maybe another package was conflicting with the name "authentication"? Seemed probable. Maybe another ServiceProvider was preventing this from operating properly? Maybe some permissions on the files were just messed up. I deleted as many other service providers as I was able to. I modified their order. On inspecting the debug parameters I was finding that my service provider *was* loading and it *was* being registered with Laravel so what gives?

Googling was a fairly ineffective. I didn't know what the **problem** was. My ServiceProvider *was* loading correctly, and executing the functions as expected. The configuration just wasn't loading properly. And "Laravel package configuration doesn't work" yields as good of results as you might expect. I scoured the Laravel docs, and they did not shed any light on what might be causing this (though I have since sent a [pull request](https://github.com/laravel/docs/pull/964) to hopefully fix this). Eventually, on some IRC log somewhere way back, I found a guy asking about his configuration not loading, and the suggestion was to specify the configuration directory manually with the additional options on the `$app->package()` function.

And by golly it fixed it.

If you're having the problem with loading your Laravel packages using PSR-4, you must use all the arguments in `$app->package()`:

`package_name, alternate_namespace (null), __DIR__`

The last parameter is the important one, it tells Laravel where exactly to look for the configuration (and other assets) that Laravel expects. The problem makes sense - Laravel *expects* `PSR-0`, so if you use `PSR-4` and don't have a physical folder for every step along your namespace, then Laravel will be looking in the wrong place for your files.

Hope this at least helps some traveller on Google avoid this problem. Several hours of my day (and countless amount of frustration) was spent on this issue. I'm sure my colleagues on the other side of my office wall were growing rather sick of the countless "fuck"s by hour four. 
