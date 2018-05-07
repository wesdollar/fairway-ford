<?php

require_once ('Classes/Helpers.php');
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

    <title>The 2018 Ford F-150 | Fairway Ford, Evans, Augusta</title>
    <meta name="description" content="The 2018 Ford F-150 is the standard by which all other trucks are measured. Fairway Ford in Evans is proud to serve Augusta, GA, and the entire CSRA. Come see our large inventory and schedule your test drive today. The 2018 Ford F-150 is the smartest, toughest, most capable, and most powerful Ford F-150 built yet.">

    <link href="<?= $helpers->url('css/styles.css') ?>" rel="stylesheet">
</head>

<body id="home">

<div id="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Augusta's Ford F-150 Dealer</h1>
            </div>
        </div>
    </div>
</div>

<header id="hero" class="parallax" data-parallaxie='{ "offset": -100 }'>

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

<section id="feature-smart" class="container-fluid">
    <div class="row">
        <div class="col-md-6 feature-box">
            <h2>
                <span>Ford F-150</span>
                Smart
            </h2>

            <?php
            $features = [
                ['headline' => '8" LCD Productivity Screen'],
                ['headline' => 'SYNC Connect&reg; Powered by FordPass&trade;'],
                ['headline' => 'Remote Tailgate Release'],
                ['headline' => '360 Degree Camera with Split-View Display'],
                ['headline' => 'BLIS&reg; (Blind Spot Information System) with Cross-Traffic Alert &amp; Trailer Coverage'],
                ['headline' => 'Pre-Collision Assist &amp; Lane-Keeping System'],
                ['headline' => 'Adaptive Cruise Control with Stop &amp; Go'],
            ];
            ?>

            <ul class="features">
                <?php
                    foreach ($features as $feature):
                ?>

                    <li><?= $feature['headline'] ?></li>

                <?php
                    endforeach;
                ?>
            </ul>

            <a href="<?= $helpers->url('ford/f-150/smart-features.php') ?>" class="btn btn-primary">
                Learn More
            </a>
        </div>
        <div class="col-md-6 no-gutters feature-image sm-gutter-top">
            <!-- feature image -->
        </div>
    </div>
</section>

<section id="feature-tough" class="container-fluid">
    <div class="row">
        <div class="col-md-6 feature-box">
            <h2>
                <span>Ford F-150</span>
                Tough
            </h2>

            <?php
            $features = [
                ['headline' => 'High-Strength Military-Grade Aluminum Alloy Body'],
                ['headline' => 'Full-Boxed High-Strength Steel Frame'],
                ['headline' => 'Auto Start-Stop Engine Technology'],
                ['headline' => 'F-150 Off-Road: Electronic Shift-on-the-Fly (ESOF) System'],
            ];
            ?>

            <ul class="features">
                <?php
                foreach ($features as $feature):
                    ?>

                    <li><?= $feature['headline'] ?></li>

                <?php
                endforeach;
                ?>
            </ul>

            <a href="<?= $helpers->url('ford/f-150/more-features.php') ?>" class="btn btn-primary">
                Learn More
            </a>
        </div>
        <div class="col-md-6 no-gutters feature-image sm-gutter-top order-md-first">
            <!-- full-bleed background image with parallax -->
        </div>
    </div>
</section>

<section id="feature-capability" class="container-fluid">
    <div class="row">
        <div class="col-md-6 feature-box">
            <h2>
                <span>Ford F-150</span>
                Capability
            </h2>

            <?php
            $features = [
                ['headline' => 'Best in Class Payload &amp; Tow Ratings<sup>*</sup>'],
                ['headline' => 'Pro Trailer Backup Assist'],
                ['headline' => 'Smart Towing'],
                ['headline' => 'Pickup Bed Made to Make Life Easier &amp; Maximize Productivity'],
                ['headline' => 'Maximum In-Cab Storage &amp; Full-Flat Load Floor'],
                ['headline' => 'LED Lighting Inside &amp; Out'],
            ];
            ?>

            <ul class="features">
                <?php
                foreach ($features as $feature):
                    ?>

                    <li><?= $feature['headline'] ?></li>

                <?php
                endforeach;
                ?>
            </ul>

            <p>
                <small>
                    <sup>*</sup>When properly configured. Class is Full-Size Pickups under 8,500 lbs. GVWR based on Ford segmentation.
                </small>
            </p>

            <a href="<?= $helpers->url('ford/f-150/more-features.php') ?>" class="btn btn-primary">
                Learn More
            </a>
        </div>
        <div class="col-md-6 no-gutters feature-image sm-gutter-top">
            <!-- full-bleed background image with parallax -->
        </div>
    </div>
</section>

<section id="feature-power" class="container-fluid">
    <div class="row">
        <div class="col-md-6 feature-box">
            <h2>
                <span>Ford F-150</span>
                Power
            </h2>

            <?php
            $features = [
                ['headline' => 'Five Engine Choices'],
                ['headline' => '10-Speed Automatic Transmission'],
            ];
            ?>

            <ul class="features">
                <?php
                foreach ($features as $feature):
                    ?>

                    <li><?= $feature['headline'] ?></li>

                <?php
                endforeach;
                ?>
            </ul>

            <a href="<?= $helpers->url('ford/f-150/more-features.php') ?>" class="btn btn-primary">
                Learn More
            </a>
        </div>
        <div class="col-md-6 no-gutters feature-image sm-gutter-top order-md-first">
            <!-- full-bleed background image with parallax -->
        </div>
    </div>
</section>

<?php include($helpers->root('partials/section.truck-of-the-year.php')) ?>

<?php include($helpers->root('partials/section.video.php')) ?>

<?php include($helpers->root('partials/section.gallery.php')) ?>

<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?= $helpers->url('js/parallaxie.js') ?>"></script>

<script>
    $('.parallax').parallaxie();
</script>

</body>
</html>
