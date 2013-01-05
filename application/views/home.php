<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="bodyContent">
    <div id="left_content">
        <div id="div_announcement">
           <table id="tbl_home" cellspacing="0">
                <tr>
                    <th class="tbl_header">Announcements</th>
                </tr>
                <?php foreach ($announcements as $announcement) : ?>
                <tr>
                    <td class="table_content">
                        <div class="table_content"><b><?php echo $announcement->title; ?></b></div>
                        <div class="table_content"><?php echo $announcement->content; ?></div>
                        <div class="table_content"><?php echo 'posted on ' . date('M d, Y', strtotime($announcement->date_created)); ?></div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    
    <div id="right_content" >
        <div id="div_memos">
            <table id="tbl_home" cellspacing="0">
                <tr>
                    <th class="tbl_header">Memos</th>
                </tr>
                <?php foreach ($memos as $memo) : ?>
                <tr>
                    <td class="table_content">
                        <div class="table_content"><b><?php echo $memo->title; ?></b></div>
                        <div class="table_content"><?php echo $memo->description; ?></div>
                        <div class="table_content"><?php echo 'posted on ' . date('M d, Y', strtotime($memo->date_created)); ?></div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    
    <div id="left_content">
        <div id="">
            <table id="tbl_home" cellspacing="0">
                <tr>
                    <th class="tbl_header" colspan="4">Branch Production</th>
                </tr>
                    <th>Branch</th>
                    <th>Minimum Quota</th>
                    <th>Total Production</th>
                    <th>Total New Accounts</th>
                </tr>
                <?php foreach($branches as $branch): ?>
                <tr>
                    <td class="table_content"><?php echo $branch->name; ?></td>
                    <td class="table_content"><?php echo number_format($branch->minimum_quota); ?></td>
                    <td class="table_content"></td>
                    <td class="table_content"></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    
    <div id="right_content" >
        <div id="">
            <table id="tbl_home" cellspacing="0">
                <tr>
                    <th class="tbl_header" colspan="3">Top Performers</th>
                </tr>
                <?php foreach($performers as $performer): ?>
                <tr>
                    <td class="table_content">
                        <div class="table_content"><b><?php echo $performer->content; ?></b></div>
                        <div class="table_content"><?php echo $performer->employee->last_name .', '. $performer->employee->first_name.' '.$performer->employee->middle_name; ?></div>
                        <div class="table_content"><?php echo date("F", mktime(0, 0, 0,$performer->month)). ' '.$performer->year; ?></div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    
    <div id="left_content">
        <div id="">
            <table id="tbl_home" cellspacing="0">
                <tr>
                    <th class="tbl_header" colspan="3">Branch Top Grosser</th>
                </tr>
                    <th>Branch</th>
                    <th>Total New Accounts</th>
                </tr>
                <tr>
                    <td class="table_content"></td>
                    <td class="table_content"></td>
                </tr>
                
            </table>
        </div>
    </div>
    
    <div id="right_content" >
        <div id="">
            <table id="tbl_home" cellspacing="0">
                <tr>
                    <th class="tbl_header" colspan="4">Quotes</th>
                </tr>
                <?php foreach($quotes as $quote): ?>
                <tr>
                    <td class="table_content">
                        <div class="table_content"><b><?php echo $quote->value; ?></b></div>
                        <div class="table_content"><?php echo $quote->explanation; ?></div>
                        <div class="table_content"></div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    
    <div id="left_content" >
        <div id="">
            <table id="tbl_home" cellspacing="0">
                <tr>
                    <th class="tbl_header" colspan="4">News Feeds</th>
                </tr>
                <?php foreach($news as $data): ?>
                <tr>
                    <td class="table_content">
                        <div class="table_content"><b><?php echo $data->title; ?></b></div>
                        <div class="table_content"><?php echo $data->description; ?></div>
                        <div class="table_content"><?php echo 'Posted on '.$data->date_created; ?></div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

