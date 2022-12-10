<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ActivityRelatedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_relateds')->insert([
            [  
                'activity_id'=>1,
                'activity_related_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [  
                'activity_id'=>1,
                'activity_related_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ], 
            [  
                'activity_id'=>2,
                'activity_related_id' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [  
                'activity_id'=>3,
                'activity_related_id' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [  
                'activity_id'=>4,
                'activity_related_id' => 5,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [  
                'activity_id'=>5,
                'activity_related_id' => 4,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
        ]);

        
    }
}
