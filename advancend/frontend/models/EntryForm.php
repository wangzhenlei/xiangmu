<?php
 
namespace app\models;
 
use yii\base\Model;
// 表单验证
class EntryForm extends Model
{
    public $name;
    public $email;
 
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}