<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use dektrium\user\widgets\Connect;
use dektrium\user\models\LoginForm;
use yii\widgets\ActiveForm;

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Calm</title>
  
     <link rel = "stylesheet" href = "<?= Url::to('@web/calm/css/style.css')?>">  

</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>Bienvenido</h1>
		
		<?php $form = ActiveForm::begin([
                    'class' => 'form',
                    'enableAjaxValidation' => true,
                    'enableClientValidation' => false,
                    'validateOnBlur' => false,
                    'validateOnType' => false,
                    'validateOnChange' => false,
                ]) ?>

                <?php if ($module->debug): ?>
                    <?= $form->field($model, 'login', [
                        'inputOptions' => [
                            'autofocus' => 'autofocus',
                            
                            'tabindex' => '1']])->dropDownList(LoginForm::loginList());
                    ?>
                <?php else: ?>

                    <?= $form->field($model, 'login',
                        ['inputOptions' => ['autofocus' => 'autofocus', 'tabindex' => '1']]
                    );
                    ?>
                <?php endif ?>
                <?php if ($module->debug): ?>
                    <div class="alert alert-warning">
                        <?= Yii::t('user', 'Password is not necessary because the module is in DEBUG mode.'); ?>
                    </div>
                <?php else: ?>
                    <?= $form->field(
                        $model,
                        'password',
                        ['inputOptions' => ['tabindex' => '2']])
                        ->passwordInput()
                        ->label(
                            Yii::t('user', 'Password')
                            . ($module->enablePasswordRecovery ?
                                ' (' . Html::a(
                                    Yii::t('user', 'Forgot password?'),
                                    ['/user/recovery/request'],
                                    ['tabindex' => '5']
                                )
                                . ')' : '')
                        ) ?>
                <?php endif ?>
                <?= Html::submitButton(
                    Yii::t('user', 'Sign in'),
                    ['id' => 'login-button', 'tabindex' => '4']
                ) ?>

                <?php ActiveForm::end(); ?>   
                
	</div>	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <?php // echo Html::jsFile('@web/calm/js/index.js') ?>
</body>
</html>