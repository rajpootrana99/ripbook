<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => '2 Day Plan',
                'slug' => '2-day-plan',
                'stripe_plan' => 'price_1MeCA1IcXctpcziENLdSUBMs',
                'price' => 10,
                'description' => '2 Day Plan',
            ],
            [
                'name' => '3 Day Plan',
                'slug' => '3-day-plan',
                'stripe_plan' => 'price_1MeCAOIcXctpcziE9gpfcaAW',
                'price' => 30,
                'description' => '3 Day Plan',
            ],
            [
                'name' => '4 Day Plan',
                'slug' => '4-day-plan',
                'stripe_plan' => 'price_1MeCAlIcXctpcziE6qWeVofO',
                'price' => 60,
                'description' => '3 Day Plan',
            ],
            [
                'name' => '5 Day Plan',
                'slug' => '5-day-plan',
                'stripe_plan' => 'price_1MeCB8IcXctpcziE0Y0rQRK7',
                'price' => 90,
                'description' => '5 Day Plan',
            ],
            [
                'name' => '6 Day Plan',
                'slug' => '6-day-plan',
                'stripe_plan' => 'price_1MeCBdIcXctpcziEFliSLgo5',
                'price' => 120,
                'description' => '6 Day Plan',
            ],
            [
                'name' => '7 Day Plan',
                'slug' => '7-day-plan',
                'stripe_plan' => 'price_1MeCBvIcXctpcziEOXO5SyLD',
                'price' => 150,
                'description' => '7 Day Plan',
            ],
            [
                'name' => '8 Day Plan',
                'slug' => '8-day-plan',
                'stripe_plan' => 'price_1MeCCGIcXctpcziEMkKatxec',
                'price' => 200,
                'description' => '8 Day Plan',
            ]
        ];

        foreach($plans as $plan){
            Plan::create($plan);
        }
    }
}
