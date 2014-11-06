<?php

use EDM\Roles\Role;

class RolesTableSeeder extends Seeder {

	public function run()
	{
        //DB::table('roles')->truncate();

        Role::create(array('role' => 'Member'));
        Role::create(['role' => 'Artist']);
        Role::create(array('role' => 'Moderator'));
        Role::create(array('role' => 'Administrator'));
	}

}