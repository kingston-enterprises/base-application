<?php
/** created by : kingston-5 @ 8/01/23 **/

namespace kingstonenterprises\application\models;

class Message extends DbModel
{
    public int $id = 0;
    public string $name = '';
    public string $email = '';
    public string $message = '';
    public string $datetime = '';
    public int $visitor_id = 0;

    public static function tableName(): string
    {
        return 'messages';
    }

    public function attributes(): array
    {
        return ['name', 'email', 'message', 'visitor_id'];
    }

    public function labels(): array
    {
        return [];
    }

    public function rules()
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'email'=> [self::RULE_REQUIRED],
            'message' => [self::RULE_REQUIRED], 
            'visitor_id' => [self::RULE_REQUIRED]
            ];
    }

    public function save()
    {
    	return parent::save();
    }
    
    public function getIp() : string
    {
    	return $this->ip;
    }  
    
    public function getDisplayName(): string
    {
        return $this->name . ' wrote:' . $this->message;
    }
}
