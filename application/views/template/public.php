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
                <div id="logo_container">
                    <?php echo HTML::image('media/images/cashmate_logo.png',array('alt' => 'logo','class' => 'img_logo','id' => 'logo_img')); ?>
                </div>
                <p id="title" class="banner_name">Cashmate</p>
                <p id="sub_title" class="banner_name">Credit Corporation</p>
                <div id="branch_container">
                    <p id="branch" class="banner_name"><?php echo Cookie::get('branch_name');?></p>
		</div>
                <p id="position" class="banner_info first_row first_column">Position:</p>
                <p id="emp_name" class="banner_info first_row second_column">Employee Name:</p>
                <p id="date" class="banner_info first_row third_column">Date:</p>
                <p id="time" class="banner_info first_row fourth_column">Time:</p>
                <p id="laf" class="banner_info third_row first_column">LAF:</p>
                <p id="lrq" class="banner_info third_row second_column">LRQ:</p>
                <p id="lap" class="banner_info third_row third_column">LAP:</p>
                <p id="lrl" class="banner_info third_row fourth_column">LRL:</p>
                <p id="" class="banner_info_record second_row first_column"><?php echo Cookie::get('role_info')?></p>
                <p id="" class="banner_info_record second_row second_column"><?php echo Cookie::get('first_name');echo" ";echo Cookie::get('middle_name');echo" ";echo Cookie::get('last_name');?></p>
                <p id="" class="banner_info_record second_row third_column"><?php echo date("F jS, Y");?></p>
                <p id="Time" onload="Timer()" class="banner_info_record second_row fourth_column"></p>
                <div id="banner_link_container">
                    <a href="" id="branch_change_password" class="banner_link banner_info">Branch Change Password</a>
                    <a href="" id="employee_change_password" class="banner_link banner_info">Employee Change Password</a>
                    <a href="<?php echo url::site().'logout/branch' ?>" id="branch_log_out" class="banner_link banner_info">Branch Log Out</a>
                    <a href="<?php echo url::site().'logout/employee' ?>" id="employee_log_out" class="banner_link banner_info">Employee Log Out</a>
                </div> 
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
