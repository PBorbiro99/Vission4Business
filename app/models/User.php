<?php 


/**
 * User class
 */
class User
{
	
	use Model;

	protected $table = 'users';

	protected $allowedColumns = [
        'username',
        'units_now',
	];

	public function validate($data):bool
	{
		$this->errors = [];

		if(empty($data['username']))
		{   print_r('spanac user');
			$this->errors['username'] = "Username is required";
		}else
		if(empty($data['units_now']))
		{print_r('spanac units');
			$this->errors['units_now'] = "units_now is required";
		}
		if(empty($this->errors))
		{print_r($this->errors);
			return true;
		}
        print_r('spanac fals');
		return false;
	}
}