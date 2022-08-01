<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Administrator (can create other users)',],
            ['id' => 2, 'title' => 'Seller',],
            ['id' => 3, 'title' => 'Bidder',],

        ];

        foreach ($items as $item) {
            \App\Role::create($item);
        }
    }
}
