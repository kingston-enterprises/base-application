<?php
/** created by : kingston-5 @ 17/01/23 **/

namespace kingstonenterprises\app\models;

use kingston\icarus\DbModel;

/**
* User class used to represent user entities in the system
* mainly used to interact with the users table in the database
* and also create user registration form
*/
class User extends DbModel
{
	// private attributes
    public int $id = 0;
    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';
    public string $passwordConfirm = '';
    public string $joined = '';
    

    public function __construct()
    {
        $this->setAttributes(
            ['firstname', 'lastname', 'email', 'password']
        );
	// form submission rules
        $this->setRules(
            [
                'firstname' => [self::RULE_REQUIRED],
                'lastname' => [self::RULE_REQUIRED],
                'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [
                    self::RULE_UNIQUE, 'class' => self::class
                ]],
                'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]],
                'passwordConfirm' => [[self::RULE_MATCH, 'match' => 'password']]
            ]
                );
    }

    public static function tableName(): string
    {
        return 'users';
    }

	// Form labels
    public function labels(): array
    {
        return [
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'passwordConfirm' => 'Password Confirm',
       ];
    }


	// we need to hash the user password before we save the user to the database
    public function save(): bool
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);

        return parent::save();
    }

    // methods to get attributes    
    public function getId() : string
    {
    	return $this->id;
    }

    
    public function getDisplayName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }
    
    public function login()
    {
        $user = User::findOne(['email' => $this->email]);
        if (!$user) {
            $this->addError('email', 'User does not exist with this email address');
            return false;
        }
        if (!password_verify($this->password, $user->password)) {
            $this->addError('password', 'Password is incorrect');
            return false;
        }

        return true;
    }
    
}
