<?php

use Illuminate\Database\Seeder;

class SubCatogorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'category_id' => 1, 'sub_category' => 'TVs', 'created_by_id' => 1,],

        ];

        foreach ($items as $item) {
            \App\SubCatogory::create($item);
        }
    }
}
