<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="login-box">

    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username', ['template' => "<div 
class='form-group has-feedback'>{input} <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
<div>{error}</div></div>",])->textInput(['placeholder' => 'Login']) ?>

        <?= $form->field($model, 'password', ['template' => "<div 
class='form-group has-feedback'>{input} <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
<div>{error}</div></div>",])->passwordInput(['placeholder' => 'Password']) ?>

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox2">
                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "{label} {input}"
                    ], false) ?>

                </div>
            </div>

            <div class="col-xs-4">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'Login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>


        <!--        <form action="../../index2.html" method="post">-->
        <!--            <div class="form-group has-feedback">-->
        <!--                <input type="email" class="form-control" placeholder="Email">-->
        <!--                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
        <!--            </div>-->
        <!--            <div class="form-group has-feedback">-->
        <!--                <input type="password" class="form-control" placeholder="Password">-->
        <!--                <span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
        <!--            </div>-->
        <!--            <div class="row">-->
        <!--                <div class="col-xs-8">-->
        <!--                    <div class="checkbox icheck">-->
        <!--                        <label>-->
        <!--                            <input type="checkbox"> Remember Me-->
        <!--                        </label>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!-- /.col -->
        <!--                <div class="col-xs-4">-->
        <!--                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>-->
        <!--                </div>-->
        <!-- /.col -->
        <!--            </div>-->
        <!--        </form>-->

        <!--        <div class="social-auth-links text-center">-->
        <!--            <p>- OR -</p>-->
        <!--            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using-->
        <!--                Facebook</a>-->
        <!--            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using-->
        <!--                Google+</a>-->
        <!--        </div>-->
        <!-- /.social-auth-links -->
        <!---->
        <!--        <a href="#">I forgot my password</a><br>-->
        <!--        <a href="register.html" class="text-center">Register a new membership</a>-->

    </div>
</div>
<!-- /.login-box-body -->


