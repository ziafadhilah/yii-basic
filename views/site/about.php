<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
?>
<style>
    .img-hover-zoom {
    height: 250px;
    /* [1.1] Set it as per your need */
    overflow: hidden;
    /* [1.2] Hide the overflowing of child elements */
    }

    /* [2] Transition property for smooth transformation of images */
    .img-hover-zoom img {
    -webkit-transition: -webkit-transform .5s ease;
    transition: -webkit-transform .5s ease;
    transition: transform .5s ease;
    transition: transform .5s ease, -webkit-transform .5s ease;
    }

    /* [3] Finally, transforming the image when container gets hovered */
    .img-hover-zoom:hover img {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
    cursor: pointer;
    }

    .img-hover {
    height: 250px;
    width: 100%;
    }
</style>
<div class="container">
    <div class="col-sm-12">
        <h4>Tentang kami</h4>
    </div>
</div>
    <!-- akhir title -->
<section class="title">
    <div class="container">
       <div class="row">
            <div class="col-sm-12">
                <h4 style="text-align: center; font-weight: bold;">Kayuonline</h4>
                <hr style="border-top: 4px solid #c60f13; width: 80px;">
            </div>
        </div>
    </div>
</section>
    <!-- tentang kami -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4 style="justify-content: center; text-align: center;">Siapa kami ?</h4>
            <br>
            <p style="justify-content: center; text-align: center; font-size: 15px;">Kami adalah perusahaan supplier kayu terbaik diindonesia yang telah berpengalaman selama beberapa tahun dalam industri kayu.
                <span>Dengan dukungan tim yang solid dan sumber daya serta lingkungan yang mendukung, kami yakin apapun kebutuhan yang Anda inginkan dapat kami penuhi.
                </span>
            </p>
        </div>
        <div class="col-md-6">
            <img width="100%" src="<?=Yii::getAlias('@web/img/slider-1.png')?>" alt="">
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img width="100%" src="<?=Yii::getAlias('@web/img/slider-1.png')?>" alt="">
            </div>

            <div class="col-md-6">
                <h4 style="justify-content: center; text-align: center;">Mengapa harus memilih kami ?</h4>
                <br>
                <p style="justify-content: center; text-align: center; font-size: 15px;">Kami adalah perusahaan supplier
                    Pengalaman, sumber daya dan tim kami yang telah berpengalaman di industri ini selama bertahun tahun
                    dan
                    produk kayu kami yang berkualitas, variatif serta harga bersaing juga kemudahan dalam melakukan
                    transaksi menjadi kelebihan kami dalam industri ini.
                    Kami siap melayani segala kebutuhan kayu Anda
                </p>
            </div>
        </div>
    </div>
    <!-- akhir tentang kami -->
    <hr style="width: 82%;">
<div class="container">
    <div style="margin-top:15px;" class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-hover-zoom img-hover-zoom--xyz">
                        <img class="img-hover" src="<?= Yii::getAlias('@web/img/slider-1.png') ?>" alt="Another Image zoom-on-hover effect">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-hover-zoom img-hover-zoom--xyz">
                        <img class="img-hover" src="<?= Yii::getAlias('@web/img/slider-2.png') ?>" alt="Another Image zoom-on-hover effect">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
