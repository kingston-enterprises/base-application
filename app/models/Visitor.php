<?php
/** created by : kingston-5 @ 8/01/23 **/

namespace kingstonenterprises\app\models;

class Visitor extends DbModel
{
    public int $id = 0;
    public string $ip = '';
    public string $datetime = '';
    public string $agent = '';

    public function __construct(){
        $this->setIp();
    }

    public static function tableName(): string
    {
        return 'visitors';
    }

    public function attributes(): array
    {
        return ['ip', 'agent'];
    }

    public function labels(): array
    {
        return [];
    }

    public function rules()
    {
        return [
            'ip' => [self::RULE_REQUIRED],
            'agent' => [self::RULE_REQUIRED]
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
    
    public function setIP() {
		
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
        
        return;
	}
}
