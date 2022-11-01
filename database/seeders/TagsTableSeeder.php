<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'tag_name' => '家事',
        ];
        Tag::create($param);
        $param = [
            'tag_name' => '勉強',
        ];
        Tag::create($param);
        $param = [
            'tag_name' => '運動',
        ];
        Tag::create($param);
        $param = [
            'tag_name' => '食事',
        ];
        Tag::create($param);
        $param = [
            'tag_name' => '移動',
        ];
        Tag::create($param);
    }
}
