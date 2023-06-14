<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Plan Libre', 
                'slug' => 'business-plan', 
                'stripe_plan' => 'price_1NIcv1CnORvHtawHEBcqH4lM', 
                'price' => 50, 
                'description' => 'Business Plan'
            ],
            [
                'name' => 'Plan Prepago', 
                'slug' => 'premium', 
                'stripe_plan' => 'price_1NIcwhCnORvHtawH7JNK9S1k', 
                'price' => 100, 
                'description' => 'Premium'
            ]
        ];
   
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
