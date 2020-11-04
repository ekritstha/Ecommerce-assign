<?php

use Illuminate\Support\Str;

return [
    'menu' => [
        ['name' => 'Component', 'slug' => 'component'],
        ['name' => 'Category', 'slug' => 'category'],
        ['name' => 'Products', 'slug' => 'products'],
        ['name' => 'Orders', 'slug' => 'orders'],
    ],
    'add-exclude' => ['Component', 'Orders'],
    'list-exclude' => []
];
