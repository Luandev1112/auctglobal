<?php

use Illuminate\Database\Seeder;

class UserActionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'user_id' => 1, 'action' => 'created', 'action_model' => 'categories', 'action_id' => 1,],
            ['id' => 2, 'user_id' => 1, 'action' => 'created', 'action_model' => 'sub_catogories', 'action_id' => 1,],
            ['id' => 3, 'user_id' => 1, 'action' => 'created', 'action_model' => 'content_pages', 'action_id' => 2,],
            ['id' => 4, 'user_id' => 1, 'action' => 'created', 'action_model' => 'content_pages', 'action_id' => 3,],
            ['id' => 5, 'user_id' => 1, 'action' => 'created', 'action_model' => 'content_pages', 'action_id' => 4,],

        ];

        foreach ($items as $item) {
            \App\UserAction::create($item);
        }
    }
}
