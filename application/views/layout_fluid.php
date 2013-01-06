<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo $meta['keywords'] ?>">
    <meta name="description" content="<?php echo $meta['description'] ?>">

    <link rel="shortcut icon" href="<?php echo URL::site('favicon.png') ?>">

    <!-- Le styles -->
    <?php foreach ($styles as $style => $media): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $style ?>"
          media="<?php echo $media ?>"/>
    <?php endforeach; ?>
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse"
               data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">StatusLoger</a>

            <div class="nav-collapse">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <p class="pull-right">Logged in as <a href="#">ehad</a></p>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
            <?php echo $sidebar ?>
        </div>
        <div class="span10">
            <?php echo Message::display(); //display flash_message ?>
            <?php echo $content ?>
            
        </div>
    </div>
    <hr>
      <div class="alert-message block-message info" style="text-align:center;">
        <p><strong>copyright@ehad co Ltd.</strong></p>      
      </div>

</div>
<!--/.fluid-container-->

<!-- Load Javascripts -->
<script type="text/javascript">var BASEURL = "<?php echo URL::base() ?>";</script>
<?php foreach ($scripts as $script): ?>
<script type="text/javascript" src="<?php echo $script ?>"></script>
    <?php endforeach; ?>

</body>
</html>
