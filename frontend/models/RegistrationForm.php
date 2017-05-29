<?php

namespace app\models;

use dektrium\user\models\RegistrationForm as BaseRegistrationForm;
use dektrium\user\models\User;
use dektrium\user\models\Profile;


class RegistrationForm extends BaseRegistrationForm
{
	  public $name;

		/**
     * @inheritdoc
     */
    public function rules()
    {
    	$rules = parent::rules();
        unset($rules['usernameRequired']);
        unset($rules['usernameTrim']);
        unset($rules['usernameLength']);
        unset($rules['usernamePattern']);
        unset($rules['usernameUnique']);        
     	$rules[] = ['name', 'required'];        
      return $rules;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
    		$labels = parent::attributeLabels();
    		$labels['name'] = \Yii::t('user', 'Full Name');
        return $labels;
    }

    /**
     * Loads attributes to the user model. You should override this method if you are going to add new fields to the
     * registration form. You can read more in special guide.
     *
     * By default this method set all attributes of this model to the attributes of User model, so you should properly
     * configure safe attributes of your User model.
     *
     * @param User $user
     */
    public function loadAttributes(User $user)
    {
        $user->setAttributes($this->attributes);

        $profile = \Yii::createObject(Profile::className());
        $profile->setAttributes([
        	'name' => $this->name,
        ]);

        $user->setProfile($profile);
    }
}