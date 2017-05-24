<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "objetivodelplan".
 *
 * @property integer $id
 * @property string $plan_accion
 */
class Objetivodelplan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'objetivodelplan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plan_accion'], 'required'],
            [['plan_accion'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'plan_accion' => Yii::t('app', 'Plan Accion'),
        ];
    }
}
