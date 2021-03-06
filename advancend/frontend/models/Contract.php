<?php
	namespace frontend\models;

	use yii\db\ActiveRecord;
	use yii\db\ActiveQuery;
	class Contract extends ActiveRecord
	{


	    public function scenarios()
	    {
	        return [
	            'login' => ['username', 'password'],
	            'register' => ['username', 'email', 'password'],
	        ];
	    }


	    /**
	     * 与Users表联查1:1
	     */

	    public function getUsers()
	    {
	        // 客户和订单通过 Order.customer_id -> id 关联建立一对多关系
	        return $this->hasOne(Users::className(), ['user_id' => 'u_id']);

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
	     * 与check表联查1:1
	     */

	    public function getCheck()
	    {
	        // 客户和订单通过 Order.customer_id -> id 关联建立一对多关系
	        return $this->hasMany(Check::className(), ['con_id' => 'con_id']);

	    }

	}






?>