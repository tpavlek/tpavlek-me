<?php

return [
    'baseUrl' => 'https://tpavlek.me',
    'production' => false,
    'author' => 'Troy Pavlek',
    'email' => 'troy@tpavlek.me',
    'description' => "Software developer, podcast host, and unelectable fringe candidate in the 2017 election",
    'facebook_url' => 'https://facebook.com/troydoesstuff',
    'twitter_url' => 'https://twitter.com/troypavlek',

    'tagged' => function($page, \Illuminate\Support\Collection $collection, $tag) {
        return $collection->filter(function ($post) use ($tag) { return in_array($tag, ($post->tags) ? $post->tags : []); });
    },

    'google_analytics_tracking_id' => "UA-56297933-1",

    'collections' => [
        'posts' => [
            'path' => 'blog/{filename}',
            'extends' => '_layouts.post',
            'section' => 'post_content',
            'sort' => '-date',
        ]
    ],
];
