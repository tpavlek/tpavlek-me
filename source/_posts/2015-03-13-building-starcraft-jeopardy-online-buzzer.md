---
title: "Building Starcraft Jeopardy: Creating a real-time online buzzer system"
date: "2015-03-13"
tags:
    - starcraft
    - jeopardy
    - php
    - programming
    - software
imgpath: "/img/posts/2015-03-13-jeopardy-buzzer-system/"
img: "jeopardy.png"
---

*This is part of a series of posts covering the building of an online Jeopardy system for use with my project
[starcraft jeopardy](https://sc2ctl.com/jeopardy). The code for this Jeopardy system is available on [GitHub](https://github.com/tpavlek/jeopardy).*

One of the critical pieces of infrastructure required to play Jeopardy is a buzzer; Ken Jennings has said that he did
as well as he did on Jeopardy not because of incredible knowledge - he says most contestants know most answers anyway - but
rather he had a mastery over the buzzer and that lent him incredible advantage. Buzzers are worth getting right.

So lets look at some of the features of the Jeopardy buzzer and what we need to implement to make this system work like
we want it to.

* The buzz-in period starts based on a light that turns on. When Alex finishes reading the question, a light turns on, then
contestants can buzz in.
* If a contestant buzzes in before the light turns on, they are given a penalty (250ms in the live show)
* The first one to buzz in shorts out the rest of the buzzes until the light turns back on again.

It seems simple enough to implement a buzzer like this - most of us have likely done something similar in Jr. High School!
You just need a battery or power source that is on a circuit. Each contestant has an indicator light that can be connected to
the circuit with a switch, and you have a master switch to energize the loop. Penalties are slightly more complex, but some 
messing with a potentiometer and a motor is one way to easily solve that.

This problem becomes a slight bit more complex when you connect it to the internet, however. Lets look at one of the biggest
problems:

### Network Latency

Lag on the network is the biggest problem with implementing a solution. Consider two players, Alice and Bob. Alice has 20ms
one-way ping to the server, Bob has 210ms one-way ping to the server. The first thing we need to do is communicate to the client
that the buzzer is active; we send a `buzzer_active` message to both clients. Alice receives it 190ms before Bob. They both take 90ms
to react, and registering the button click events and sending the message takes an additional 10ms. Then they both send a `buzz_in`
message to the server. 

Alice: 20ms (server -> client) + 100ms (buzzing in) + 20ms (client -> server) = 140ms

Bob: 210ms (server -> client) + 100ms (buzzing in) + 210ms (client -> server) = 520ms

This means that with equal skill on the buzzer, Alice will always win! Worse even, Alice can buzz in over three times slower
than Bob and still win in the buzzer match. This is a very realistic ping scenario as we're playing with people all over
the world. Servers are in the US, so a US-based player would have incredible advantage over an Australian-based player.

But how can we eliminate lag? Well, short story is, we can't without buying some plane tickets. Network latency will
always exist, and will be a huge problem for apps that necessitate *very* realtime communication. However, we do have options
for eliminating latencies effect on the game itself. After a lot of brainstorming and whiteboarding, I cam up with one solution
that works well for my application, and it's a very simple one to boot: **trust**.

> Put trust in the client that they won't cheat.

This is something that often makes web-developers balk. We're taught to always sanitize our database inputs. Always assume
the client is sending you garbage and prepare for the worst. And in general, it's good advice. That's how you build robust
web systems that can scale to billions of users. But what if your software has a requirement that you will only have *three* users
and if one of them is being a dick you can just *punch them in the face*? Too often we ignore this possibility. My first
solution to the buzzer problem was to mess around with encrypted code and try and get the client side to run signed code
that was checked for validity, and then I had to worry about certificate signing and ensuring that secrets stayed secret, etc.
But this solution ignored reality, this software was built to enable me to do something with my friends, all of whom I can
ensure, through social means, that they aren't giant tools.

So I trusted the client. The solution is fairly elegant, the server sends a `buzzer_active` to the client, and the client
records the timestamp at which this event was received. Then the client records the timestamp that the user buzzed in and computes
the difference. If the user tried to buzz in before the buzzer went active, it will add a penalty to this delta. Then it
simply sends the difference in time to the server. Sure, the user *could* modify the javascript, do some dickery with their
system time or perform all manner of exploits on this code. But they *won't*, and that trust is far stronger than anything
a certificate authority could offer.

The only small issue with this implementation comes on the server side - how do you choose a winner? We may get one or many
buzzes for a single question. And in the example presented above, Bob's buzzes will always arrive at the server at least 180ms after
Alice's if they buzzed in at the same time. The solution I used here is as follows:

* The server opens the buzzer and waits for a `buzz` event.
* After one is received, it will wait for a timeout period (currently 500ms) to see if it receives any additional buzzes
* Once the timeout period expires, it will compute which buzz has the shortest difference, and then send a message to all clients
declaring that user the winner.

The timeout period is the important part of the solution and it's a balancing act. You need the buzzer to still feel snappy and responsive,
so you can't wait multiple seconds before declaring a winner. However, the timeout period *must* be greater than the one-way latency of the
network, or else we will start having the same issues as before that Alice is winning with inferior skill. In testing I've found
that 500ms leads to an unnoticeable amount of delay, while still being a good deal higher than the highest amount of network latency
to most clients around the world.

### Implementing the Solution

Now that we've generated a solution to our problem domain, it's actually fairly trivial to implement this in code. The 
project [Ratchet](http://socketo.me/) built off of [React PHP](http://reactphp.org/) has documentation to easily implement a WAMP server and [connect to the client
via websockets](http://socketo.me/docs/push). 

```php
// WampConnector.php
function onPublish(ConnectionInterface $conn, $topic, $event, array $exclude, array $eligible)
    {
        switch ((string)$topic) {
            case self::BUZZER_TOPIC:
                $contestant = new Contestant($event['name']);
                $this->emitter->emit(new BuzzReceivedEvent($contestant, $event['difference']));
                break;
        }
    }
```

```php
// Server.php

    $emitter->addListener(BuzzReceivedEvent::class, function(BuzzReceivedEvent $event) use ($board, $emitter) {
        if (!$board->getBuzzerStatus()->isActive()) {
            // The buzzer isn't active, so there's nothing to do.
            return;
        }
        if ($board->getResolver()->isEmpty()) {
            // If this is the first buzz, then we want to resolve it after the timeout.
            $this->eventLoop->addTimer($this->buzzer_resolve_timeout, function() use ($board, $emitter) {
                $resolution = $board->resolveBuzzes();
                $emitter->emit(new BuzzerResolutionEvent($resolution));
            });
        }
        $board->getResolver()->addBuzz($event);
    });

```

All of this code is available in the [GitHub Respository](https://github.com/tpavlek/jeopardy) but those are the interesting
twiddly bits.

And it worked! The [first episode of Starcraft Jeopardy](http://vods.sc2ctl.com/vod/2015/03/10/jeopardy-one-fenner-jackson-gemini/)
went off without a hitch and included participants from Canada, the United States and Australia.
