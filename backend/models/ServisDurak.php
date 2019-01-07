<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servis_durak".
 *
 * @property int $servis_no
 * @property string $durak1
 * @property string $durak2
 * @property string $durak3
 *
 * @property Servis $servisNo
 */
class ServisDurak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servis_durak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['servis_no'], 'integer'],
            [['durak1', 'durak2', 'durak3'], 'string', 'max' => 10],
            [['servis_no'], 'exist', 'skipOnError' => true, 'targetClass' => Servis::className(), 'targetAttribute' => ['servis_no' => 'servis_no']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'servis_no' => 'Servis No',
            'durak1' => 'Durak1',
            'durak2' => 'Durak2',
            'durak3' => 'Durak3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServisNo()
    {
        return $this->hasOne(Servis::className(), ['servis_no' => 'servis_no']);
    }
}
