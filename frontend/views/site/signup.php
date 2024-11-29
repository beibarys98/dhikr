<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Тіркелу';
?>
<div class="site-signup" style="margin: 0 auto; width: 500px;">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <br>

    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Логин'])->label(false) ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Құпия сөз'])->label(false) ?>

        <?= $form->field($model, 'code')->textInput(['placeholder' => 'Рұқсат коды'])->label(false) ?>

        <div class="form-group text-center">
            <?= Html::submitButton('Тіркелу', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
