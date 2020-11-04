<?php

namespace App\Util;

use App\Models\Models\Category;
use Illuminate\Support\Str;

class Util
{
    public static function htmlReq()
    {
        return '<span style="color: #d44950">*</span>';
    }

    public static function getCData($components, $slug, $col, $default = null)
    {
        $s = Str::slug($slug);
        $msg = is_null($default) ? 'Coming Soon...' : $default;
        return $components[$s][0][$col] ?? $msg;
    }

    public static function getCategories()
    {
        $categories = Category::all();
        return $categories;
    }
}
