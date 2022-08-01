<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$XGfAoq8xDoaigaK8bR3kveRcOvZucUPpFZFmTYZdHP2hfMZ0EgABW', 'remember_token' => '', 'approved' => 1,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
