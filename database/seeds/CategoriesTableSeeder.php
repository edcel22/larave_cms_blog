<?php

user Carbon\Carbon;
use Illuminate\Database\Seeder;
user Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('categories')->insert([
    		[
    			'user_id' => '1',
    			'name' => 'Laravel',
    			'slug' => 'laravel',
    			'is_published' => '1',
    			'created_at' => Carbon::now(),
    			'updated_at' => Carbon::now()
    		],
    		[
    			'user_id' => '2',
    			'name' => 'CodeIgniter',
    			'slug' => 'CodeIgniter',
    			'is_published' => '1',
    			'created_at' => Carbon::now(),
    			'updated_at' => Carbon::now()
    		],
    		[
    			'user_id' => '3',
    			'name' => 'Yii',
    			'slug' => 'Yii',
    			'is_published' => '1',
    			'created_at' => Carbon::now(),
    			'updated_at' => Carbon::now()
    		],
    		[
    			'user_id' => '4',
    			'name' => 'Sympfony',
    			'slug' => 'Sympfony',
    			'is_published' => '1',
    			'created_at' => Carbon::now(),
    			'updated_at' => Carbon::now()
    		],
    		[
    			'user_id' => '5',
    			'name' => 'Python',
    			'slug' => 'Python',
    			'is_published' => '1',
    			'created_at' => Carbon::now(),
    			'updated_at' => Carbon::now()
    		],
    	]);

    }
}
