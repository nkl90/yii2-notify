<?php

namespace yii2lab\notify\admin\forms;

use Yii;
use yii2woop\account\domain\forms\RestorePasswordForm as ApiRestorePasswordForm;

class MessageForm extends ApiRestorePasswordForm {
	
	public $address;
	public $subject;
	public $content;
	
	public function attributeLabels()
	{
		return [
			'address' => Yii::t('notify/main', 'address'),
			'subject' => Yii::t('notify/main', 'subject'),
			'content' => Yii::t('notify/main', 'content'),
		];
	}
}
