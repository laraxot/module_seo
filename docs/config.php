<?php

declare(strict_types=1);

use Illuminate\Support\Str;

return [
    'baseUrl' => 'https://laraxot.github.io/module_seo',
    'production' => false,
    'siteName' => 'Modulo Seo',
    'siteDescription' => '',

    'languages' => ['it', 'en'],
    'path' => 'module_seo/{language}/docs/{filename}',
    'route' => 'module_seo/{language}/docs/{filename}',

    // 'path' => '{language}/{type}/{-title}',
    // 'collections' => [
    //     'docs-it' => [
    //         'type' => 'docs',
    //         'language' => 'it',
    //     ],

    //     'docs-en' => [
    //         'type' => 'docs',
    //         'language' => 'en',
    //     ],
    // ],

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/'.trimPath($path);
    },
];