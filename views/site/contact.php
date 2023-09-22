<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        
            <div class="col-lg-12">
                <h1 class="headingTitle">Contact Us!</h1>
            </div>
        

        <div class="row">
            <div class="col-lg-6">
                <p>
                    <i class="fas fa-map-marker-alt"></i>
                    Tanzania,Dodoma Martin's House Dodoma.
                </p>
                <p>
                    <i class="fas fa-envelope"></i>
                    martinshouse@gmai.com.
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d126773.636762776!2d39.256063999999995!3d-6.8091904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2stz!4v1695269044516!5m2!1sen!2stz" width="350"; height="200"; style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="col-lg-4 contactUs">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->label(false)->textInput(['placeholder' => 'Name']) ?>

                    <?= $form->field($model, 'email')->label(false)->textInput(['placeholder' => 'Email'])?>

                    <!-- <?= $form->field($model, 'subject') ?> -->

                    <?= $form->field($model, 'body')->label(false)->textarea(['rows' => 5,'placeholder' => 'Message'])?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                        'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-wide', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
