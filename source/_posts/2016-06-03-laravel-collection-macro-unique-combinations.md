---
title: "Laravel Collection Macro: Find all Unique Combinations of Two Collections"
slug: "laravel-collection-macro-unique-combinations"
date: "2016-07-05"
description: "This Laravel collection macro can easily get the combination of two collections so you don't need a nested foreach loop"
imgpath: "/img/posts/2016-07-05-laravel-collection-macro-unique-combinations/"
img: "code.png"
tags:
    - software
    - laravel
---

In rafactoring some old code at work, a frequent idiomatic batch of code was something like what follows:

```php
$results = [];

foreach ($locations as $location) {
    foreach ($businessNames as $businessName) {
        $results[]= func($location, $businessName);
    }
}
```

Essentially, it was just a `map`, but it was doing the map using every unique combination of two arrays. I wanted to 
take a more functional approach to this, so I built a Laravel collection macro to do it!

Now, with the new macro, my code looks more like

```php
collect($locations)
    ->combinations(collect($businessNames), ['location', 'businessName'])
    ->map(function ($tuple) {
        return func($tuple['location'], $tuple['businessName']);
    });
```

I like this setup a lot better, because it fits in nicely with the collection-pipeline-style programming that much of
the other code in the project uses, and is much more declarative in nature than two arbitrary foreach loops.

If you'd like to use this macro, the code is below!

```php
Collection::macro('combinations', function($combineWith, $keys = [0, 1]) {
    return $this->reduce(function ($combinations, $originalItem) use ($combineWith, $keys) {
        return $combinations->push($combineWith->map(function ($otherItem) use ($originalItem, $keys) {
            return [ $keys[0] => $originalItem, $keys[1] => $otherItem ];
        }));
    }, new static)
        ->flatten(1);
});
```
