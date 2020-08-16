<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            
            'content'=>'aaaa',
            'title'=>'atitle',
            'status'=>'comp'
            
            ]);
            
        DB::table('tasks')->insert([
            'content'=>'bbbb',
            'title'=>'btitle',
            'status'=>'yet'
            ]);
            
    }
}
