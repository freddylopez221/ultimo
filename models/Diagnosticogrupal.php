<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diagnosticogrupal".
 *
 * @property integer $id
 * @property string $descripcion_general_inicial
 */
class Diagnosticogrupal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diagnosticogrupal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion_general_inicial'], 'required'],
            [['descripcion_general_inicial'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'descripcion_general_inicial' => Yii::t('app', 'Descripcion General Inicial'),
        ];
    }
}
