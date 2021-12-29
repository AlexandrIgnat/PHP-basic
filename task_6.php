<?php
$people = [

    [
        'img' => 'sunny.png',
        'alt' => 'Sunny A.',
        'content' => 'Sunny A. (UI/UX Expert)',
        'jobContent' => 'Lead Author',
        'hrefTwiter' => 'https://twitter.com/@myplaneticket',
        'twiterEmail' => '@myplaneticket',
        'projectLink' => 'myorange',
        'contactLink' => 'Contact Sunny',
        'mailLinkText' => '<i class="fal fa-envelope"></i>',
        'status' => 'isActive',
    ],
    [
        'img' => 'josh.png',
        'alt' => 'Jos K.',
        'content' => 'Jos K. (ASP.NET Developer)',
        'jobContent' => 'Partner &amp; Contributor',
        'hrefTwiter' => 'https://twitter.com/@atlantez',
        'twiterEmail' => '@atlantez',
        'projectLink' => 'Walapa',
        'contactLink' => 'Contact Jos',
        'mailLinkText' => '<i class="fal fa-envelope"></i>',
        'status' => 'isActive',
    ],
    [
        'img' => 'jovanni.png',
        'alt' => 'Jovanni Lo',
        'content' => 'Jovanni L. (PHP Developer)',
        'jobContent' => 'Partner &amp; Contributor',
        'hrefTwiter' => 'https://twitter.com/@lodev09',
        'twiterEmail' => '@lodev09',
        'projectLink' => 'lodev09',
        'contactLink' => 'Contact Jovanni',
        'mailLinkText' => '<i class="fal fa-envelope"></i>',
        'status' => 'banned',
    ],
    [
        'img' => 'roberto.png',
        'alt' => 'Jovanni Lo',
        'content' => 'Roberto R. (Rails Developer)',
        'jobContent' => 'Partner &amp; Contributor',
        'hrefTwiter' => 'https://twitter.com/@sildur',
        'twiterEmail' => '@sildur',
        'projectLink' => 'sildur',
        'contactLink' => 'Contact Roberto',
        'mailLinkText' => '<i class="fal fa-envelope"></i>',
        'status' => 'banned',
    ],

]
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                           <?php foreach($people as $item) :?>
                            <div class="<?php echo $item['status'] == 'banned'? 'banned' : '';?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/<?php echo $item['img']?>" alt="<?php echo $item['alt']?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                    <?php echo $item['content']?>
                                        <small class="m-0 fw-300">
                                        <?php echo $item['jobContent']?>
                                        </small>
                                    </h5>
                                    <a href="<?php echo $item['hrefTwiter']?>" class="text-info fs-sm" target="_blank"><?php echo $item['twiterEmail']?></a> -
                                    <a href="https://wrapbootstrap.com/user/<?php echo $item['projectLink']?>" class="text-info fs-sm" target="_blank" title="<?php echo $item['contactLink']?>"><?php echo $item['mailLinkText']?></a>
                                </div>
                            </div>
                                <!-- <?php if(!$item['isBan']) :?>
                                    <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                        <img src="img/demo/authors/<?php echo $item['img']?>" alt="<?php echo $item['alt']?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                        <div class="ml-2 mr-3">
                                            <h5 class="m-0">
                                            <?php echo $item['content']?>
                                                <small class="m-0 fw-300">
                                                <?php echo $item['jobContent']?>
                                                </small>
                                            </h5>
                                            <a href="<?php echo $item['hrefTwiter']?>" class="text-info fs-sm" target="_blank"><?php echo $item['twiterEmail']?></a> -
                                            <a href="https://wrapbootstrap.com/user/<?php echo $item['projectLink']?>" class="text-info fs-sm" target="_blank" title="<?php echo $item['contactLink']?>"><?php echo $item['mailLinkText']?></a>
                                        </div>
                                    </div>
                                <?php else :?>
                                    <div class="banned rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                        <img src="img/demo/authors/<?php echo $item['img']?>" alt="<?php echo $item['alt']?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                        <div class="ml-2 mr-3">
                                            <h5 class="m-0">
                                            <?php echo $item['content']?>
                                                <small class="m-0 fw-300">
                                                <?php echo $item['jobContent']?>
                                                </small>
                                            </h5>
                                            <a href="<?php echo $item['hrefTwiter']?>" class="text-info fs-sm" target="_blank"><?php echo $item['twiterEmail']?></a> -
                                            <a href="https://wrapbootstrap.com/user/<?php echo $item['projectLink']?>" class="text-info fs-sm" target="_blank" title="<?php echo $item['contactLink']?>"><?php echo $item['mailLinkText']?></a>
                                        </div>
                                    </div>
                                <?php endif?> -->
                            <?php endforeach?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
