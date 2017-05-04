<?php

return [
    'baseUrl' => '',
    'production' => false,
    'author' => 'Troy Pavlek',
    'email' => 'troy@tpavlek.me',

    'tagged' => function($page, \Illuminate\Support\Collection $collection, $tag) {
        return $collection->filter(function ($post) use ($tag) { return in_array($tag, ($post->tags) ? $post->tags : []); });
    },

    'collections' => [
        'posts' => [
            'path' => 'blog/{filename}',
            'extends' => '_layouts.post',
            'section' => 'post_content',
            'sort' => '-date',
        ]
    ],
];
