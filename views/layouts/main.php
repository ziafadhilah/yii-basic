<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<?php $this->beginBody() ?>
<!-- <div class="container">
    <div class="d-flex">
        <div class="mr-auto p-2 dropdown">
            <ul class="bar-links">
            <?php if (isset($_SESSION['logged_in']) and $_SESSION['role'] =='user') { ?>
              <div class="dropdown">
                <button class="btn dropdown-toggle" style="background-color: transparent;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span><i class="fa fa-user"></i> Akun Saya</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <label style="text-align: center;" class="dropdown-item" href="#">Halo, Selamat Datang.</label>
                  <hr>
                  <span style="margin-left: 20px"><a onclick="return confirm('Apakah anda yakin ingin keluar ?')" href="<?= Yii::getAlias('@web/site/index') ?>"><i class="fa fa-sign-out"></i>&nbsp Keluar</a></span>
                </div>
              </div>
            <?php }else{ ?>
              <div class="dropdown">
                <button class="btn dropdown-toggle" style="background-color: transparent;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span><i class="fa fa-user"></i> Masuk / Daftar</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="<?= Yii::getAlias('@web/index.php?r=site/login')?>">Masuk</a>
                  <a class="dropdown-item" href="<?= Yii::getAlias('@web/site/sign-up')?>">Daftar</a>
                </div>
              </div>
            <?php } ?>
            </ul>
        </div>
    </div>
</div> -->
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar sticky-top navbar-expand-lg navbar-light bg-light',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Gudang Kami', 'url' => ['site/gudang']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login / Daftar', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <!-- <div class="container"> -->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    <!-- </div> -->
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= date('Y') ?> KayuOnline v2.0 - All Right Reserved!</p>

        <!-- <p class="ml-auto"><?= Yii::powered() ?></p> -->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
