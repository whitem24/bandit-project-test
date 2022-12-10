<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PopularitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('popularities')->insert([
            [  
                'title'=>'Nada popular',
                'level' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ], 
            [  
                'title'=>'Algo popular',
                'level' =>2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ], 
            [  
                'title'=>'Popular',
                'level' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ], 
            [  
                'title'=>'Muy popular',
                'level' => 4,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [  
                'title'=>'Actividad top',
                'level' => 5,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
        ]);
    }
}
