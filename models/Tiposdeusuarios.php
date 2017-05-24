<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tiposdeusuarios".
 *
 * @property integer $id
 * @property string $administrador
 * @property string $docente
 * @property string $alumno
 *
 * @property Usuarios[] $usuarios
 * @property Usuarios[] $usuarios0
 */
class Tiposdeusuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tiposdeusuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['administrador', 'docente', 'alumno'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'administrador' => Yii::t('app', 'Administrador'),
            'docente' => Yii::t('app', 'Docente'),
            'alumno' => Yii::t('app', 'Alumno'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['nu_usuario' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios0()
    {
        return $this->hasMany(Usuarios::className(), ['nu_usuario' => 'id']);
   
        }
 public static function getALL() {
        $tiposdeusuarios[] = 'Selecciona la carrera';
        
        foreach (Tiposdeusuarios::find()->all() as $registro){
        $tiposdeusuarios[$registro->id] = $registro->administrador;
    }
    
    return $tiposdeusuarios;
}       
}
