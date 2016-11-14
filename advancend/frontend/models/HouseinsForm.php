<?php
namespace frontend\models;
use Yii;
use yii\base\Model;

/**
 * ContractForm is the model behind the contact form.
 */
class HouseinsForm extends Model
{
    public $room_id;
    public $hou_time;
    public $rption_time;
    public $user_id;
    public $isone_qualified;
    public $istwo_qualified;
    public $repair_time;
    public $inspector;
    public $hou_path;
    public $problem;
    public $remarks;

    
     /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'hou_time', 'rption_time', 'user_id'], 'required'],
            [['room_id', 'hou_time', 'rption_time', 'user_id', 'isone_qualified', 'istwo_qualified', 'repair_time'], 'integer'],
            [['inspector'], 'string', 'max' => 50],
            [['remarks', 'problem'], 'string', 'max' => 1000],
            [['hou_path'], 'string', 'max' => 100],
        ];
    }
}

