<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 * @property integer $edad
 * @property string $genero
 * @property string $direccion
 * @property string $telefono
 * @property string $estado
 * @property string $ciudad
 * @property integer $nu_carreras
 * @property integer $nu_semestres
 * @property string $redessociales
 * @property integer $nu_usuario
 *
 * @property Carreras $nuCarreras
 * @property Carreras $nuCarreras0
 * @property Semestres $nuSemestres
 * @property Semestres $nuSemestres0
 * @property Tiposdeusuarios $nuUsuario
 * @property Tiposdeusuarios $nuUsuario0
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'paterno', 'materno', 'edad', 'genero', 'direccion', 'telefono', 'estado', 'ciudad'], 'required'],
            [['nombre', 'paterno', 'materno', 'genero', 'direccion', 'telefono', 'estado', 'ciudad', 'redessociales'], 'string'],
            [['edad', 'nu_carreras', 'nu_semestres', 'nu_usuario'], 'integer'],
            [['nu_carreras'], 'exist', 'skipOnError' => true, 'targetClass' => Carreras::className(), 'targetAttribute' => ['nu_carreras' => 'id']],
            [['nu_carreras'], 'exist', 'skipOnError' => true, 'targetClass' => Carreras::className(), 'targetAttribute' => ['nu_carreras' => 'id']],
            [['nu_semestres'], 'exist', 'skipOnError' => true, 'targetClass' => Semestres::className(), 'targetAttribute' => ['nu_semestres' => 'id']],
            [['nu_semestres'], 'exist', 'skipOnError' => true, 'targetClass' => Semestres::className(), 'targetAttribute' => ['nu_semestres' => 'id']],
            [['nu_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Tiposdeusuarios::className(), 'targetAttribute' => ['nu_usuario' => 'id']],
            [['nu_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Tiposdeusuarios::className(), 'targetAttribute' => ['nu_usuario' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'paterno' => Yii::t('app', 'Paterno'),
            'materno' => Yii::t('app', 'Materno'),
            'edad' => Yii::t('app', 'Edad'),
            'genero' => Yii::t('app', 'Genero'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
            'estado' => Yii::t('app', 'Estado'),
            'ciudad' => Yii::t('app', 'Ciudad'),
            'nu_carreras' => Yii::t('app', 'Nu Carreras'),
            'nu_semestres' => Yii::t('app', 'Nu Semestres'),
            'redessociales' => Yii::t('app', 'Redessociales'),
            'nu_usuario' => Yii::t('app', 'Nu Usuario'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuCarreras()
    {
        return $this->hasOne(Carreras::className(), ['id' => 'nu_carreras']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuCarreras0()
    {
        return $this->hasOne(Carreras::className(), ['id' => 'nu_carreras']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuSemestres()
    {
        return $this->hasOne(Semestres::className(), ['id' => 'nu_semestres']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuSemestres0()
    {
        return $this->hasOne(Semestres::className(), ['id' => 'nu_semestres']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuUsuario()
    {
        return $this->hasOne(Tiposdeusuarios::className(), ['id' => 'nu_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuUsuario0()
    {
        return $this->hasOne(Tiposdeusuarios::className(), ['id' => 'nu_usuario']);
    }
}
