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

    <title>2018 Ford F-150 Smart Features | Fairway Ford, Evans</title>
    <meta name="description" content="The 2018 Ford F-150 is the smartest F-150 yet. Smart technologies cover this Ford F-150 from bumper to bumper, inside and out, to make driving easier, safer, and way more fun. Highlights include 8 in. LCD productivity screen, SYNC powered by FordPass, 360 degree camera, pre-collision assist &amp; lane-keeping system. Visit Fairway Ford in Evans, proudly serving Augusta, GA, and the entire CSRA, to test drive the 2018 Ford F-150.">

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
                            This Ford F-150 Works Smarter &amp; Harder
                        </h1>
                        <p class="half-gutter-top">
                            The engineers at Ford went to great lengths to make the 2018 Ford F-150 the smartest and easiest F-150 to operate yet. Controls and truck-vitals are at your fingertips whether you're in the cab or away from your truck thanks to SYNC Connect&reg; powered by FordPass&trade;. Smart technologies cover this Ford F-150 from bumper to bumper, inside and out, to make driving easier, safer, and way more fun.
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
        'header' => '8" LCD Productivity Screen',
        'body' => 'The available 8" LCD productivity screen puts important information right in front of you on the instrument cluster. Information such as fuel economy, towing data, engine vitals, and navigation is only a glance away, all easily customizable, giving you more views, information, and control of your Ford F-150 than ever before.',
        'image' => 'img/ford-productivity-screen.jpg'
    ],
    [
        'header' => 'Control from Your Phone',
        'body' => 'The 2018 Ford F-150 features FordPass, an app for smart phones, that puts vehicle controls and information directly at your fingertips regardless of whether you\'re feet or miles away from your truck. Powerful features include remote start/lock/unlock, fuel price comparison along your route, and locating/reserving/paying for parking ahead of time. FordPass is available for download within the App Store &amp; Google Play store.',
        'image' => 'img/ford-app.jpg'
    ],
    [
        'header' => 'Full 360 Degree from the Cab',
        'body' => 'See all four sides around the truck without ever leaving the cab. The available 360 degree camera gives a birds eye view of your surroundings making maneuvering in tight spaces as simple as it gets. The included hitch assist feature provides a dynamic sight line to help direct your hitch ball to the trainer receiver, making a spotter or jumping in and out of your cab obsolete.',
        'image' => 'img/360-in-cab-display.jpg'
    ],
    [
        'header' => 'Smarter = Safer',
        'body' => 'Available BLIS&reg; (Blind Spot Information System) will alert you when a vehicle is detected in your blind spot or in your path while backing of your driveway or parking place. BLIS is also smart enough to detect when other vehicles are in the way of your trailer. Smart features that help keep you and those around you safer. That\'s Ford Smart.',
        'image' => 'img/collision-detection.jpg'
    ],
    [
        'header' => 'Pre-Collision &amp; Lane Assist System',
        'body' => 'The 2018 Ford F-150 is constantly scanning to help keep you safe as it watches for potential obstacles in your path, such as pedestrians and other vehicles, and notifies you audibly and via feedback in the steering wheel if you begin to veer out of your traffic lane. If the sensors detect a potential collision, a visual warning is displayed on the windshield along with an audible alert, with automatic braking if a collision becomes imminent, bringing you to a complete stop if necessary.',
        'image' => 'img/blind-spot-detection.jpg'
    ],
    [
        'header' => 'Adaptive Cruise Control with Stop &amp; Go',
        'body' => 'Adaptive cruise control brings a whole new level of "set it and forget it" to cruise control. When activated, the stop-and-go feature automatically accelerates &amp; brakes your truck while maintaining the preset distance between you and the next car. It can even bring the truck to a complete stop and resume as soon as traffic begins to move.',
        'image' => 'img/f-150-pulling-trailer.jpg'
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
