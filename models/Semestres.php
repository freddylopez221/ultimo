<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "semestres".
 *
 * @property integer $id
 * @property string $semestre
 *
 * @property Usuarios[] $usuarios
 * @property Usuarios[] $usuarios0
 */
class Semestres extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'semestres';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['semestre'], 'required'],
            [['semestre'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'semestre' => Yii::t('app', 'Semestre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['nu_semestres' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios0()
    {
        return $this->hasMany(Usuarios::className(), ['nu_semestres' => 'id']);
    }
    
    public static function getALL() {
        $semestres[] = 'Selecciona el semestre';
       
        foreach (Semestres::find()->all() as $registro){
        $semestres[$registro->id] = $registro->semestre;
    }
    
    return $semestres;
}
}
