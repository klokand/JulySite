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
class InitialGroups extends Seeder{
	public function run(){
		try
{
    // Create the user
    $user = Sentry::createUser(array(
        'email'     => 'xjz520223@gmail.com',
        'password'  => '123456',
        'activated' => true,
    ));

    // Find the group using the group id
    $adminGroup = Sentry::findGroupById(1);

    // Assign the group to the user
    $user->addGroup($adminGroup);
}
catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
{
    echo 'Login field is required.';
}
catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
{
    echo 'Password field is required.';
}
catch (Cartalyst\Sentry\Users\UserExistsException $e)
{
    echo 'User with this login already exists.';
}
catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
{
    echo 'Group was not found.';
}
}
}

