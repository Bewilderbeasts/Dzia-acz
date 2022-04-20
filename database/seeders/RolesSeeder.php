<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Models\Rola();
        $role->role = 'Działacz';
        $role->save();

        $role = new \App\Models\Rola();
        $role->role = 'Piłkarz';
        $role->save();
    }
}
