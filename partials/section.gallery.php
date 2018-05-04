<?php

if (!isset($helpers)) {

    require_once('../Classes/Helpers.php');

    $helpers = new Helpers();
}

?>

<section id="grid-images" class="container-fluid no-gutters">
    <div class="row no-gutters">
        <div class="col-6 col-sm-4 col-md-2">
            <img src="<?= $helpers->url('img/grid/001.jpg') ?>" class="zoom" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <img src="<?= $helpers->url('img/grid/002.jpg') ?>" class="zoom" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <img src="<?= $helpers->url('img/grid/003.jpg') ?>" class="zoom" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <img src="<?= $helpers->url('img/grid/004.jpg') ?>" class="zoom" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <img src="<?= $helpers->url('img/grid/005.jpg') ?>" class="zoom" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <img src="<?= $helpers->url('img/grid/006.jpg') ?>" class="zoom" alt="">
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-6 col-sm-4 col-md-2">
            <img src="<?= $helpers->url('img/grid/007.jpg') ?>" class="zoom" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <img src="<?= $helpers->url('img/grid/008.jpg') ?>" class="zoom" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <img src="<?= $helpers->url('img/grid/009.jpg') ?>" class="zoom" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <img src="<?= $helpers->url('img/grid/010.jpg') ?>" class="zoom" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <img src="<?= $helpers->url('img/grid/011.jpg') ?>" class="zoom" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <img src="<?= $helpers->url('img/grid/012.jpg') ?>" class="zoom" alt="">
        </div>
    </div>
</section>