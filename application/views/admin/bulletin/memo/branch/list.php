<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
	<div id="list_display">
               
        <div>
            <ul id="nav">
                <li><?php echo html::anchor('bulletin_memo_employee', 'Employee Memos') ?></li>
                <li><?php echo html::anchor('bulletin_memo_branch', 'Branch Memos', array('style' => 'background-color: #ffffff;padding: 10px 20px;text-decoration: none;line-height: 2.8em;color:#339900')) ?></li>
            </ul>
		</div>
        <fieldset id="borrower">
            <legend>List of Branch Memos</legend>
                  
            <a href="create">Add Branch Memo</a>
                   
            <table id="branch_table_display" cellspacing="0">
				<tr>
                    <th>Branch</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Expiration Date</th>
                    <th>Date Posted</th>
                    <th>Creator</th>
                    <th></th>
                    <th></th>
                </tr>
                      
                <tr>
                    <td class="table_content"></td>
                    <td class="table_content"></td>
                    <td class="table_content"></td>
                    <td class="table_content"></td>
                    <td class="table_content"></td>
                    <td class="table_content"></td>
                    <td class="table_content"></td>
                    <td class="table_content"><a href="update">Edit</a></td>
                    <td class="table_content"><a href="delete">Delete</a></td>
                </tr>
            </table>
        </fieldset>
    </div>
</div>