<?php
namespace frontend\models;
use Yii;
use yii\base\Model;

/**
 * ContractForm is the model behind the contact form.
 */
class ContractForm extends Model
{
    public $u_id;
    public $con_status;
    public $con_type;
    public $con_title;
    public $con_content;
    public $con_addtime;
    public $con_offecttime;
    public $con_endtime;
    public $con_id;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['u_id', 'con_status', 'con_type', 'con_title','con_content','con_addtime','con_offecttime','con_endtime','con_content'], 'required'],
            ['con_id','int'],
           ];
        
    }
}




?>