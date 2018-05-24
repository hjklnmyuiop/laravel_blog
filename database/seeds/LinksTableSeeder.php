<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'link_name' => '果果学习',
                'link_title' => '国内口碑最好的PHP学习站点',
                'link_url' => 'http://www.58keke.cn',
                'link_order' => 1,
            ],
            [
                'link_name' => '果果学习论坛',
                'link_title' => '果果学习网，人人都学习',
                'link_url' => 'http://blog.58keke.com',
                'link_order' => 2,
            ]
        ];
        DB::table('links')->insert($data);
    }
}
