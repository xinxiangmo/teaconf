<?php

/**
 * This is the model class for table "User".
 *
 * The followings are the available columns in table 'User':
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $secret_key
 * @property string $signature
 * @property string $avatar_small
 * @property string $avatar_middle
 * @property string $avatar_large
 * @property string $twitter
 * @property string $github
 * @property string $google
 * @property string $weibo
 * @property string $qq
 */
class User extends ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'User';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'length', 'max'=>20),
			array('email, password, secret_key, signature, avatar_small, avatar_middle, avatar_large, twitter, github, google, weibo, qq', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, email, password, secret_key, signature, avatar_small, avatar_middle, avatar_large, twitter, github, google, weibo, qq', 'safe', 'on'=>'search'),
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
			'secret_key' => 'Secret Key',
			'signature' => 'Signature',
			'avatar_small' => 'Avatar Small',
			'avatar_middle' => 'Avatar Middle',
			'avatar_large' => 'Avatar Large',
			'twitter' => 'Twitter',
			'github' => 'Github',
			'google' => 'Google',
			'weibo' => 'Weibo',
			'qq' => 'Qq',
		);
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
		$criteria->compare('secret_key',$this->secret_key,true);
		$criteria->compare('signature',$this->signature,true);
		$criteria->compare('avatar_small',$this->avatar_small,true);
		$criteria->compare('avatar_middle',$this->avatar_middle,true);
		$criteria->compare('avatar_large',$this->avatar_large,true);
		$criteria->compare('twitter',$this->twitter,true);
		$criteria->compare('github',$this->github,true);
		$criteria->compare('google',$this->google,true);
		$criteria->compare('weibo',$this->weibo,true);
		$criteria->compare('qq',$this->qq,true);

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
