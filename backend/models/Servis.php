<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servis".
 *
 * @property int $servis_no
 * @property string $istikamet
 *
 * @property KisiBilgi[] $kisiBilgis
 * @property ServisDurak[] $servisDuraks
 * @property ServisSaat[] $servisSaats
 */
class Servis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['servis_no'], 'required'],
            [['servis_no'], 'integer'],
            [['istikamet'], 'string', 'max' => 30],
            [['servis_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'servis_no' => 'Servis No',
            'istikamet' => 'Istikamet',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKisiBilgis()
    {
        return $this->hasMany(KisiBilgi::className(), ['servis_no' => 'servis_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServisDuraks()
    {
        return $this->hasMany(ServisDurak::className(), ['servis_no' => 'servis_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServisSaats()
    {
        return $this->hasMany(ServisSaat::className(), ['servis_no' => 'servis_no']);
    }
}
