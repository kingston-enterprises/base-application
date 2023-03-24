<?php
/**
 * @category models
 * @author kingston-5 <qhawe@kingston-enterprises.net>
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace kingstonenterprises\app\models;

use kingstonenterprises\app\controllers\AuthController;
use kingston\icarus\Model;

/**
 * User class used to represent login form
 * 
 * @extends \kingston\icarus\DbModel
 */
class LoginForm extends Model
{
    /** 
     *  email
     * @var string
     */
    public string $email = '';

    /** 
     *  password
     * @var string
     */
    public string $password = '';

    /**
     * return array or form validation rules
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED],
        ];
    }

     /**
     * return array of form field labels
     *
     * @return array
     */
    public function labels()
    {
        return [
            'email' => 'Your Email address',
            'password' => 'Password'
        ];
    }

    /**
     * check if user has provided valid login details
     *
     * @deprecated 24.03.22
     * @return mixed
     */
    public function login() : mixed
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

        return AuthController::login($user);
    }
}
