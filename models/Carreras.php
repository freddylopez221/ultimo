<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carreras".
 *
 * @property integer $id
 * @property string $carrera
 *
 * @property Usuarios[] $usuarios
 * @property Usuarios[] $usuarios0
 */
class Carreras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carreras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['carrera'], 'required'],
            [['carrera'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'carrera' => Yii::t('app', 'Carrera'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['nu_carreras' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios0()
    {
        return $this->hasMany(Usuarios::className(), ['nu_carreras' => 'id']);
    }
    
    public static function getALL() {
        $carreras[] = 'Selecciona la carrera';
        
        foreach (Carreras::find()->all() as $registro){
        $carreras[$registro->id] = $registro->carrera;
    }
    
    return $carreras;
}
}
 