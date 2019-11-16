<?php

use Illuminate\Database\Seeder;
use App\Topic;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Schema::disableForeignKeyConstraints();

        DB::table('topics')->truncate();
        $topics = [
            ['name' => 'html', 'community_id' => 3 , 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'css', 'community_id' => 3 , 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'javascript', 'community_id' => 3 , 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'java', 'community_id' => 2 , 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'kotlin', 'community_id' => 2 , 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'codeigniter', 'community_id' => 1 , 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'laravel', 'community_id' => 1 , 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'cakephp', 'community_id' => 1 , 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'vue', 'community_id' => 3 , 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'angular', 'community_id' => 3 , 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'mongodb', 'community_id' => 4 , 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'mysql', 'community_id' => 4 , 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'graphql', 'community_id' => 4 , 'created_at' => date("Y-m-d H:i:s")]
        ];
        Topic::insert($topics);

        Schema::enableForeignKeyConstraints();
    }
}
