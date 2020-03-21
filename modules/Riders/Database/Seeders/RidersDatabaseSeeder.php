<?php

namespace Modules\Riders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RidersDatabaseSeeder extends Seeder
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
