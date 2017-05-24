<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estudiantessituacion".
 *
 * @property integer $id
 * @property string $nombre_alumno
 * @property string $situacion_academica
 */
class Estudiantessituacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estudiantessituacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_alumno', 'situacion_academica'], 'required'],
            [['nombre_alumno', 'situacion_academica'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre_alumno' => Yii::t('app', 'Nombre Alumno'),
            'situacion_academica' => Yii::t('app', 'Situacion Academica'),
        ];
    }
}
