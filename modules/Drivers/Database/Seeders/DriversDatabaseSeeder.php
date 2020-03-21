<?php

namespace Modules\Drivers;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DriversDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
