<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('tasks')->insert([
          'period' => '2022-02-13',
          'check' => '1',
          'task' => 'homework',
          'user_id' => '1', 
          'created_at' => $now,
          'updated_at' => $now
        ]);
         DB::table('tasks')->insert([
          'period' => '2022-02-14',
          'check' => '1',
          'task' => 'game',
          'user_id' => '1', 
          'created_at' => $now,
          'updated_at' => $now
        ]);
         DB::table('tasks')->insert([
          'period' => '2022-02-15',
          'check' => '1',
          'task' => 'housework',
          'user_id' => '1', 
          'created_at' => $now,
          'updated_at' => $now
        ]);
         DB::table('tasks')->insert([
          'period' => '2022-02-16',
          'check' => '1',
          'task' => 'japanese',
          'user_id' => '1', 
          'created_at' => $now,
          'updated_at' => $now
        ]);
         DB::table('tasks')->insert([
          'period' => '2022-02-17',
          'check' => '1',
          'task' => 'english',
          'user_id' => '1', 
          'created_at' => $now,
          'updated_at' => $now
        ]);
    }
}
