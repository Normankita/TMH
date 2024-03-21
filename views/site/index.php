<?php

/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Welcome to the Martin House';
?>


<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">WELCOME TO THE MARTIN'S HOUSE DODOMA</h1>

        <p class="lead">The place you may find your inner peace,<br> we are here to serve you</p>

        <p><?= Html::a('Jump to Business &raquo; &raquo;', ['house/index'],['class'=>'btn btn-lg btn-secondary']);?>

    </div>

    <div class="body-content ">
        <p><?= Html::a('Go to Gallery &raquo;', ['site/gallery'],['class'=>' btn btn-lg btn-outline-secondary']);?>
        </p>
        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Our services</h2>

                <p>As The Martin Houses, we offer one service as our major with few among to offer our customers with
                    better and quality
                    assured customs. inclusively
                <ol>
                    <li>
                        Rest rooms
                    </li>
                    <li>

                        Breakfast

                    </li>
                    <li>
                        indoor services
                    </li>
                </ol>
                </p>

                <p><a class="btn btn-outline-secondary" href="#">Read Terms and Agreements &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Our motive</h2>

                <p>
                    As The Martin Houses, we are driven toward provision of better and quality services for our
                    customers. we are emerged from the fastly developing City of Dodoma,
                    expecting that customers will need well assured apartments for the time being
                </p>
                <p>
                    <?php if(Yii::$app->user->isGuest){
                       echo Html::a('Check Apartments &raquo;', ['house/listhouse'],['class'=>' btn btn-outline-secondary']);
                    }else echo Html::a('Check Apartments &raquo;', ['house/index'],['class'=>' btn btn-outline-secondary']); ?>
                </p>

            </div>
            <div class="col-lg-4">
                <h2>As our customer</h2>

                <p>
                    as our customer we assure you of our quality services, and well established environments to handle
                    all case scenarios. you are warmely welcomed to the Martin's houses Dodoma
                </p>

                <p><a class="btn btn-outline-secondary" href="#">Make your Reservations &raquo;</a></p>
            </div>
        </div>

    </div>
</div>