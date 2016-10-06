---
title: New Theory: Security by Insecurity
imgpath: "/img/posts/2011-10-11-security-by-insecurity/"
img: 'horse-fan.jpg'
tags:
    - programming
    - php
---
{%include 'image.html.twig' with {'name': '/horse-fan.jpg', 'inline': 'true'} %}

The last few weeks have been a non-stop mad-dash to get the rewrite of my site done (over at 
<a href="http://depotwarehouse.net/">http://depotwarehouse.net</a>). The primary goal behind the rewrite was to make the 
PHP completely modular, object-oriented and -- dare I say this about anything to do with PHP -- properly written. 
After deploying the beta version of the rewrite tonight, two things have become abundantly clear: firstly, I don't 
really fully understand proper object-oriented development, and certain aspects of the rewrite could definitely have 
been better done, but secondly, and more interestingly, my security now that my code is "properly written" has completely 
gone down the shitter.

I'll explain. It should be noted that all my evidence is completely anecdotal but here's what happened: the registration 
process on my old site involved you authenticating with Google's openid server and you do the whole login process with them. 
However, I was lazy in the initial setup, and instead of doing registration/login properly, after you authenticate with 
google it passed a GET variable (&login=1) with the email of the user in GET also. This told the server to login 
the user account associated with that email. Yes, that meant you could just authenticate as any user (including me, the 
admin) just by knowing their email. Needless to say it was a giant security hole: but here's the interesting thing. 
Not once in that time did a spammer or any sort of bot show up on my site and post.

Fast forward a couple weeks later, I've finished the rewrite, and openid now works properly (it uses a combination of 
POST, sessions and a bit of PHP magic to do the authentication with google <i>properly</i>). Within five minutes of the 
site being deployed I got my first spambot. This shocked me to my core, but my knee-jerk explanation was that it was 
obvious. Clearly the spam-bots are coded for maximum efficiency spamming a wide array of sites. These sites are coded 
properly and authenticate users with some semblance of security. One could say, in effect, by securing my site, I've 
compromised the security of my site.

It's an interesting concept to say the least, but I think it's one that warrants looking into. I mean honestly, what 
could go wrong if google decided to pass all it's login data through a GET variable for a few days?
