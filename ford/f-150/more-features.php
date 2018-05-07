<?php

require_once('../../Classes/Helpers.php');
$helpers = new Helpers();

$fordF150InventoryURL = 'https://www.fairwayfordaugusta.com/new-inventory/index.htm?gvModel=F-150';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="TranterGrey">
    <!--<link rel="icon" href="../../../../favicon.ico">-->

    <title>2018 Ford F-150 Features | Fairway Ford, Augusta</title>
    <meta name="description" content="The 2018 Ford F-150 boasts best in class payload &amp; tow ratings and is built to be the strongest Ford F-150 yet. It can tow more, haul more, and do it all while burning less gas thanks to its lighter but stronger high-strength, military-grade aluminum alloy body. Visit Fairway Ford in Evans, proudly serving Augusta, GA, and the entire CSRA, to test drive your F-150 today!">

    <link href="<?= $helpers->url('css/styles.css') ?>" rel="stylesheet">
</head>

<body id="page-smart">

<div id="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Augusta's Ford F-150 Dealer</h1>
            </div>
        </div>
    </div>
</div>

<header id="hero" class="parallax">

    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php
                    $logoTitle = 'Fairway Ford Augusta &amp; Evans, GA Logo'
                    ?>
                    <a href="//www.fairwayfordaugusta.com" title="Fairway Ford Augusta, GA">
                        <img src="<?= $helpers->url('img/logo-white-text.png') ?>" class="logo" alt="<?= $logoTitle ?>" title="<?= $logoTitle ?>">
                    </a>
                </div>
                <div class="col-md-6 text-right sm-text-left" id="header-contact">
                    <p>
                        4333 Washington Rd <br>
                        Evans, GA 30809 <br>
                        <span class="tel-link">(706) 854-9200</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="action-buttons" class="container-fluid">
        <div class="row">
            <div class="col-md-12 center">
                <a href="https://www.fairwayfordaugusta.com/contact.htm" class="btn btn-primary" title="Contact Fairward Ford">
                    Contact Fairway Ford
                </a>
                <a href="<?= $fordF150InventoryURL ?>" class="btn btn-primary xs-half-gutter-top" title="View F-150 Inventory">
                    View F-150 Inventory
                </a>
            </div>
        </div>
    </div>
</header>

<section class="lead-in parallax">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-overlay">

                <div class="row">
                    <div class="col-12">
                        <h1>
                            Build Ford Tough. Forever.
                        </h1>
                        <p class="half-gutter-top">
                            The 2018 Ford F-150 is made to be the best, which is why it has so many awards to its name. Every aspect of the F-150 is carefully crafted to deliver a truck that can work just as hard as you. If it's power, versatility, safety, and comfort that you're looking for, look no further than the 2018 Ford F-150. Schedule your test-drive today at Augusta's leading Ford dealer,
                            <a href="//www.fairwayfordaugusta.com">Fairway Ford</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$sections = [
    [
        'header' => 'Strongest Body Ever',
        'body' => 'The F-150 body has been made lighter while increasing its overall strength thanks to high-strength aluminum alloy. This isn\'t your run-of-the-mill, soda can aluminum we\'re talking about, but rather military-grade aluminum that has been heat-treated and hardened, making for a stronger body that is up to 700 lbs. lighter than previous generations.',
        'image' => 'img/f-150-truck-bed.jpg'
    ],
    [
        'header' => 'Find Your Adventure Off-Road',
        'body' => 'The 2018 F-150 with the FX4 Off-Road Package begs to be taken off the everyday asphalt to find adventure and thrills. Shifting into four-wheel drive is as easy as turning a dial with the electronic shift-on-the-fly (ESOF) system. Choose between two 4-wheel-drive modes (4x4 low or high) as well as 2-wheel drive, with some models featuring automatic 4WD mode.',
        'image' => 'img/raptor-in-mud.jpg'
    ],
    [
        'header' => 'Best in Class',
        'body' => 'The Ford F-150 is the standard by which all other trucks are measured, and we like to keep it that way. The 2018 Ford F-150 delivers best-in-class payload and tow rating. Tow anywhere from 5,000 lbs. to 13,200 lbs. depending on how you configure your truck. Go ahead and hook up or load down and go.',
        'image' => 'img/f-150-recreation.jpg'
    ],
];

$i = 1;

foreach ($sections as $section): ?>
<section class="full-width <?= !($helpers->isOdd($i)) ? 'alternate-bg': null ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?= $section['header'] ?></h2>

                <p class="half-gutter-top"><?= $section['body'] ?></p>
            </div>
            <div class="col-md-6 xs-gutter-top <?= !($helpers->isOdd($i)) ? 'order-md-first': null ?>">

                <img src="<?= $helpers->url($section['image']) ?>" alt="Ford F-150 8 inch Productivity Screen" class="box-shadow">
            </div>
        </div>
    </div>
</section>
<?php $i++; endforeach; ?>

<?php include($helpers->root('partials/section.truck-of-the-year.php')) ?>

<?php include($helpers->root('partials/section.video.php')) ?>

<?php include($helpers->root('partials/section.gallery.php')) ?>

<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?= $helpers->url('js/parallaxie.js') ?>"></script>

<script>
    $('.parallax').parallaxie({
        offset: -290,
        pos_x: 'left',
    });
</script>

</body>
</html>
