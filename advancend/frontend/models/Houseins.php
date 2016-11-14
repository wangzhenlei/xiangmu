<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;
/**
 * This is the model class for table "houseins".
 *
 * @property string $hou_id
 * @property string $res_id
 * @property string $hou_time
 * @property string $rption_time
 * @property string $inspector
 * @property string $user_id
 * @property integer $isone_qualified
 * @property integer $istwo_qualified
 * @property string $repair_time
 * @property string $remarks
 * @property string $problem
 * @property string $hou_path
 */
    
class Houseins extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'houseins';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['res_id', 'hou_time', 'rption_time', 'user_id'], 'required'],
            [['res_id', 'hou_time', 'rption_time', 'user_id', 'isone_qualified', 'istwo_qualified', 'repair_time'], 'integer'],
            [['inspector'], 'string', 'max' => 50],
            [['remarks', 'problem'], 'string', 'max' => 1000],
            [['hou_path'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hou_id' => '验房表主键id',
            'res_id' => '房源id',
            'hou_time' => '验房时间',
            'rption_time' => '复验时间',
            'inspector' => '验房师',
            'user_id' => '用户id',
            'isone_qualified' => '一次验房是否合格0：合格1：不合格',
            'istwo_qualified' => '二次验房是否合格0：合格1：不合格2:已合格3：待验',
            'repair_time' => '维修时间',
            'remarks' => '备注',
            'problem' => '房屋待修问题',
            'hou_path' => '验房单路径',
        ];
    }

   
    /**
     * 与Users表联查1:1
     */

    public function getUsers()
    {
        // 客户和订单通过 Order.customer_id -> id 关联建立一对多关系
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);

    }

    /**
     * 与Users表联查1:1
     */

    public function getRoom()
    {
        // 客户和订单通过 Order.customer_id -> id 关联建立一对多关系
        return $this->hasOne(Room::className(), ['room_id' => 'room_id']);

    }
}
