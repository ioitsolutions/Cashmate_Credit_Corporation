<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <?php echo $styles; ?>
    </head>
    <body>
        <div id="banner">
            <div id="c_logo">
                <?php echo HTML::image('media/images/cashmate_logo.png',array('alt' => 'logo','class' => 'img_logo','id' => 'logo_img')); ?>
                <pre class="banner_name"><br/><br/><b>Cashmate</b><br/>Credit Corporation</pre>
            </div>
        </div>
        
        <hr>
        
        <div id="site_map">
            <pre><?php echo $title_content; ?></pre>
        </div>
        
        <div id="container">
            <?php echo $content; ?>
        </div>
        
        <div id="footer">
            <pre>Copyright&copy; 2012 Cashmate Credit Corporation</pre>
        </div>
    </body>
</html>
