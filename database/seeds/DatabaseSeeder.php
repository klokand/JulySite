<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentry\Facades\Laravel\Sentry as Sentry;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('InitialGroups');
		 $this->command->info('Group is created');
	}

}

class InitialGroups extends Seeder{
	public function run(){
		try
{
    // Create the group
   Sentry::createGroup(array(
        'name'        => 'Admin',
        'permissions' => array(
            'createAdmin' => 0,
            'updateAdmin' => 0,
			'banAdmin' => 0,
            'createProperty' => 1,
			'updateProperty' => 1,
			'createNews' => 1,
            'updateNews' => 1,
        ),
    ));
	Sentry::createGroup(array(
        'name'        => 'superAdmin',
        'permissions' => array(
            'createAdmin' => 1,
            'updateAdmin' => 1,
			'banAdmin' => 1,
            'createProperty' => 1,
			'updateProperty' => 1,
			'createNews' => 1,
            'updateNews' => 1,
        ),
    ));
}
catch (Cartalyst\Sentry\Groups\NameRequiredException $e)
{
    echo 'Name field is required';
}
catch (Cartalyst\Sentry\Groups\GroupExistsException $e)
{
    echo 'Group already exists';
}
}
}

