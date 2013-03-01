<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $signature
 * @property string $avatar_small
 * @property string $avatar_middle
 * @property string $avatar_large
 * @property string $twitter
 * @property string $github
 * @property string $google
 * @property string $weibo
 * @property string $qq
 * @property integer $crerated_at
 * @property integer $updated_at
 * @property integer $last_posted_at
 */
class User extends ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('crerated_at, updated_at, last_posted_at', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>20),
			array('email, password, signature, avatar_small, avatar_middle, avatar_large, twitter, github, google, weibo, qq', 'length', 'max'=>255),

            array('name, email', 'unique'),

			array('id, name, email, password, signature, avatar_small, avatar_middle, avatar_large, twitter, github, google, weibo, qq, crerated_at, updated_at, last_posted_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'email' => 'Email',
			'password' => 'Password',
			'signature' => 'Signature',
			'avatar_small' => 'Avatar Small',
			'avatar_middle' => 'Avatar Middle',
			'avatar_large' => 'Avatar Large',
			'twitter' => 'Twitter',
			'github' => 'Github',
			'google' => 'Google',
			'weibo' => 'Weibo',
			'qq' => 'Qq',
			'crerated_at' => 'Crerated At',
			'updated_at' => 'Updated At',
			'last_posted_at' => 'Last Posted At',
		);
	}

    /**
     * Find user by name or email
     *
     * @param string $id
     * @return User
     */
    public function findById($id)
    {
        $attribute = 'name';
        if(strpos($id, '@') !== false)
        {
            $id = strtolower($id);
            $attribute = 'email';
        }
        return $this->find("{$attribute}=:id", array(':id' => $id));
    }

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('signature',$this->signature,true);
		$criteria->compare('avatar_small',$this->avatar_small,true);
		$criteria->compare('avatar_middle',$this->avatar_middle,true);
		$criteria->compare('avatar_large',$this->avatar_large,true);
		$criteria->compare('twitter',$this->twitter,true);
		$criteria->compare('github',$this->github,true);
		$criteria->compare('google',$this->google,true);
		$criteria->compare('weibo',$this->weibo,true);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('crerated_at',$this->crerated_at);
		$criteria->compare('updated_at',$this->updated_at);
		$criteria->compare('last_posted_at',$this->last_posted_at);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
