<?php

use Illuminate\Database\Seeder;
use App\Community;
use Illuminate\Support\Facades\Schema;

class CommunitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('communities')->truncate();
        $comunities = [
            ['name' => 'PHP', 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'Android', 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'Web', 'created_at' => date("Y-m-d H:i:s")],
            ['name' => 'Database', 'created_at' => date("Y-m-d H:i:s")],
        ];
        Community::insert($comunities);
        
        Schema::enableForeignKeyConstraints();
    }
}
