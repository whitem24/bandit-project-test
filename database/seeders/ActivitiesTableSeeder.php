<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;



class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            [  
                'title'=>'Deporte',
                'description' => 'Actividad deportiva',
                'start_date' => Carbon::create('2022', '12', '01'),
                'end_date' => Carbon::create('2022', '12', '31'),
                'price' => 50,
                'popularity_id' => 5,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ], 
            [  
                'title'=>'Música',
                'description' => 'Actividad musical',
                'start_date' => Carbon::create('2022', '12', '10'),
                'end_date' => Carbon::create('2022', '12', '20'),
                'price' => 30,
                'popularity_id' => 4,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ], 
            [  
                'title'=>'Cultura',
                'description' => 'Actividad cultural',
                'start_date' => Carbon::create('2022', '12', '10'),
                'end_date' => Carbon::create('2022', '12', '17'),
                'price' => 30,
                'popularity_id' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ], 
            [  
                'title'=>'Educación',
                'description' => 'Actividad educativa',
                'start_date' => Carbon::create('2022', '12', '10'),
                'end_date' => Carbon::create('2022', '12', '20'),
                'price' => 20,
                'popularity_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [  
                'title'=>'Arte',
                'description' => 'Actividad artística',
                'start_date' => Carbon::create('2022', '12', '10'),
                'end_date' => Carbon::create('2022', '12', '15'),
                'price' => 20,
                'popularity_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
        
        ]);
    }
}
