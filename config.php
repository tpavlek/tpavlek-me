<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Troy Pavlek',
    'siteDescription' => 'Software developer, podcast host, and unelectable Edmonton City Council fringe candidate',
    'siteAuthor' => 'Troy Pavlek',
    'email' => 'troy@tpavlek.me',
    'twitter_url' => 'https://twitter.com/troypavlek',

    // Style configuration hooks
    'nav_color_class' => 'bg-secondary',
    'body_color_class' => 'bg-primary',

    // collections
    'collections' => [
        'posts' => [
            'author' => 'Troy Pavlek', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{date|Y/m/d}/{-slug}',
            'extends' => '_layouts.post',
            'section' => 'post_content',
        ],
        'dessert_people' => [
            'author' => 'Troy Pavlek', // Default author, if not provided in a post
            'sort' => 'date',
            'path' => 'dessert-people/{-slug}',
            'extends' => '_layouts.dessert-people-post',
            'section' => 'post_content',
        ]
        /*
        'categories' => [
            'path' => '/blog/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],*/
    ],

    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'google_analytics_tracking_id' => "UA-56297933-1",
    'tagged' => function($page, Collection $collection, $tag) {
        return $collection->filter(function ($post) use ($tag) { return in_array($tag, ($post->tags) ? $post->tags : []); });
    },
];
