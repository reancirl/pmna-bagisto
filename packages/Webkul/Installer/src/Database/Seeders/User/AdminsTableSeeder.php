<?php

namespace Webkul\Installer\Database\Seeders\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        DB::table('admins')->delete();

        // $defaultLocale = $parameters['default_locale'] ?? config('app.locale');
        // DB::table('admins')->insert([
        //     'id'         => 1,
        //     'name'       => trans('installer::app.seeders.user.users.name', [], $defaultLocale),
        //     'email'      => 'admin@example.com',
        //     'password'   => bcrypt('admin123'),
        //     'api_token'  => Str::random(80),
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        //     'status'     => 1,
        //     'role_id'    => 1,
        // ]);

        DB::table('admins')->insert([
            [
                'id'         => 1,
                'name'       => 'Reancirl',
                'email'      => 'reancirl@pmna.store',
                'password'   => bcrypt('admin123'),
                'api_token'  => Str::random(80),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status'     => 1,
                'role_id'    => 1,
            ],
            [
                'id'         => 2,
                'name'       => 'Jefferson',
                'email'      => 'jefferson@pmna.store',
                'password'   => bcrypt('admin123'),
                'api_token'  => Str::random(80),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status'     => 1,
                'role_id'    => 1,
            ],
            [
                'id'         => 3,
                'name'       => 'Sharmaine',
                'email'      => 'sharmaine@pmna.store',
                'password'   => bcrypt('admin123'),
                'api_token'  => Str::random(80),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status'     => 1,
                'role_id'    => 1,
            ],
            [
                'id'         => 4,
                'name'       => 'Russel',
                'email'      => 'russel@pmna.store',
                'password'   => bcrypt('admin123'),
                'api_token'  => Str::random(80),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status'     => 1,
                'role_id'    => 1,
            ],
            [
                'id'         => 5,
                'name'       => 'Jan Jorille',
                'email'      => 'jan@pmna.store',
                'password'   => bcrypt('admin123'),
                'api_token'  => Str::random(80),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status'     => 1,
                'role_id'    => 1,
            ],
            [
                'id'         => 6,
                'name'       => 'Chermae',
                'email'      => 'chermae@pmna.store',
                'password'   => bcrypt('admin123'),
                'api_token'  => Str::random(80),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status'     => 1,
                'role_id'    => 1,
            ],
            [
                'id'         => 7,
                'name'       => 'Fritz',
                'email'      => 'fritz@pmna.store',
                'password'   => bcrypt('admin123'),
                'api_token'  => Str::random(80),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status'     => 1,
                'role_id'    => 1,
            ],
            [
                'id'         => 8,
                'name'       => 'Rex',
                'email'      => 'rex@pmna.store',
                'password'   => bcrypt('admin123'),
                'api_token'  => Str::random(80),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status'     => 1,
                'role_id'    => 1,
            ],
        ]);        
    }
}
