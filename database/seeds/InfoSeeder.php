<?php

use Illuminate\Database\Seeder;

class php artisan key:generateInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('info')->insert([
            'userid'=>1,
            'job'=>'Php Developer',
            'school'=>'SDÜ',
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);
    }
}
