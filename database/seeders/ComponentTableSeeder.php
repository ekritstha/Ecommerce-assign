<?php

namespace Database\Seeders;

use App\Models\Models\Component;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Logo',
            'Facebook Link',
            'Twitter Link',
            'Instagram Link',
            'Newsletter Text'
        ];
        foreach ($data as $d) {
            if (!Component::where('slug', Str::slug($d))->first()) {
                Component::create([
                    'title' => $d,
                    'slug' => Str::slug($d),
                    'image' => null,
                    'description' => $d
                ]);
            }
        }
    }
}
