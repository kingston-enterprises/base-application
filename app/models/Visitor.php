<?php
/** created by : kingston-5 @ 8/01/23 **/

namespace kingstonenterprises\app\models;

class Visitor extends DbModel
{
    public int $id = 0;
    public string $ip = '';
    public string $datetime = '';

    public function __construct(){
        $this->setIp();
    }

    public static function tableName(): string
    {
        return 'visitors';
    }

    public function attributes(): array
    {
        return ['ip'];
    }

    public function labels(): array
    {
        return [];
    }

    public function rules()
    {
        return [
            'ip' => [self::RULE_REQUIRED]
            ];
    }

    public function save()
    {
    	return parent::save();
    }
    
    public function getDisplayName(): string
    {
        return 'visitor #'. $this->id . ' ip:' . $this->ip;
    }
    
    public function setIp() {
		$ip = $_SERVER['REMOTE_ADDR'];
	 
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		    $ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} 
	 
		return  $this->ip = $ip;
	}
}
