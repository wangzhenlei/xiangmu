<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "check".
 *
 * @property string $ren_id
 * @property string $user_id
 * @property string $res_id
 * @property string $sub_time
 * @property string $start_time
 * @property string $end_time
 * @property integer $rent
 * @property integer $ren_status
 * @property integer $is_delete
 */
class Check extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'check';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'res_id', 'sub_time', 'start_time', 'end_time', 'rent'], 'required'],
            [['user_id', 'res_id', 'sub_time', 'start_time', 'end_time', 'rent', 'ren_status', 'is_delete'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ren_id' => '主键id',
            'user_id' => '用户id',
            'res_id' => '房源id',
            'sub_time' => '提交续租合同日期',
            'start_time' => '续租合同生效起始日期',
            'end_time' => '续租合同终止时间',
            'rent' => '预交租金',
            'ren_status' => '续租合同状态 0：审核中 1：生效 2：作废',
            'is_delete' => '是否移除 0：否 1：是',
        ];
    }

    /**
     * 与Contract表联查1:1
     */

    public function getContract()
    {
        // 客户和订单通过 Order.customer_id -> id 关联建立一对多关系
        return $this->hasOne(Contract::className(), ['con_id' => 'con_id']);

    }

    /**
     * 与Users表联查1:1
     */

    public function getRoom()
    {
        // 客户和订单通过 Order.customer_id -> id 关联建立一对多关系
        return $this->hasOne(Room::className(), ['room_id' => 'room_id']);

    }
    /**
     * 与Users表联查1:1
     */

    public function getUsers()
    {
        // 客户和订单通过 Order.customer_id -> id 关联建立一对多关系
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);

    }
}
