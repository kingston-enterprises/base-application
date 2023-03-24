<?php
/**
 * @category models
 * @author kingston-5 <qhawe@kingston-enterprises.net>
 * @license For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace kingstonenterprises\app\models;

use kingston\icarus\DbModel;
use kingston\icarus\Application;

/**
 * User class used to represent unregistered users entities in the system
 * mainly used to interact with the visitors table in the database
 * 
 * @extends \kingston\icarus\DbModel
 */
class Visitor extends DbModel
{
    /** @var integer id */
    public int $id = 0;

    /** @var string ip */
    public string $ip = '';

    /** @var string date time of visit  */
    public string $datetime = '';

    /** @var string agent */
    public string $agent = '';

    public function __construct(){
        $this->setIp();
    }

    /**
     * @return string
     */
    public static function tableName(): string
    {
        return 'visitors';
    }

    /**
     * @return array
     */
    public function attributes(): array
    {
        return ['ip', 'agent'];
    }

    /**
     * @return array
     */
    public function labels(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'ip' => [self::RULE_REQUIRED],
            'agent' => [self::RULE_REQUIRED]
            ];
    }

    /**
     * @return bool
     */
    public function save() : bool
    {
    	return parent::save();
    }
    
    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return 'visitor #'. $this->id . ' ip:' . $this->ip;
    }
    
/**
 * set visitor IP
 *
 * @return void
 */
    public function setIP() : void {
		
        if (!empty($_SERVER['REMOTE_ADDR'])) {
            $ip = $_SERVER['REMOTE_ADDR'];
        } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		    $ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
            $ip = "0.0.0.0";
        }
        
        try {
            $this->agent = $_SERVER['HTTP_USER_AGENT'];
            $this->ip = $ip;
        } catch (\Exception $e){
            echo Application::$app->router->renderView('_error', [
                'exception' => $e,
            ]);
        }
        
	}
}
