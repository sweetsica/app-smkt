<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('samples')->insert([
            'user_id' => '2',
            'name' => 'Nguyễn Vân Anh',
            'type' => '0',
            'url' => 'https://www.facebook.com/va.nggggg',
            'age' => '29',
            'sex' => '1',
            'job' => 'Kiểm toán',
            'note' => '',
            'rate' => 8
        ]);
        DB::table('samples')->insert([
            'user_id' => '2',
            'name' => 'Kết nối nhà nông',
            'type' => '1',
            'url' => 'https://www.facebook.com/groups/ketnoinhanong',
            'theme' => 'Nông nghiệp',
            'note' => 'group 26k người, tương tác tốt',
            'rate' => 8
        ]);
        DB::table('samples')->insert([
            'user_id' => '2',
            'name' => 'Nông nghiệp',
            'type' => '2',
            'note' => 'Sản phẩm phù hợp cho nông dân sử dụng',
            'rate' => 8
        ]);
    }
}
