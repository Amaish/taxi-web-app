<?php namespace Modules\Users\Database\Seeders;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class SentinelGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $groups = Sentinel::getRoleRepository();

        // Create an Admin group
        $groups->createModel()->create(
            [
                'name' => 'Admin',
                'slug' => 'admin',
            ]
        ); 
        // Save the permissions
        $group = Sentinel::findRoleBySlug('admin');
        $group->permissions = [
            /* Dashboard */
            'dashboard.index' => true,

            /* Roles */
            'users.roles.index'   => true,
            'users.roles.create'  => true,
            'users.roles.store'   => true,
            'users.roles.edit'    => true,
            'users.roles.update'  => true,
            'users.roles.destroy' => true,
            /* Users */
            'users.index'   => true,
            'users.create'  => true,
            'users.store'   => true,
            'users.edit'    => true,
            'users.update'  => true,
            'users.destroy' => true,

            'drivers.index'   => true,
            'drivers.create'  => true,
            'drivers.view'  => true,
            'drivers.store'   => true,
            'drivers.edit'    => true,
            'drivers.update'  => true,
            'drivers.destroy' => true,

            'riders.index'   => true,
            'riders.create'  => true,
            'riders.store'   => true,
            'riders.view'   => true,
            'riders.edit'    => true,
            'riders.update'  => true,
            'riders.destroy' => true,
             /* Settings */
            'settings.index' => true,
            'settings.store' => true,
        ];
        $group->save();
    }
}
