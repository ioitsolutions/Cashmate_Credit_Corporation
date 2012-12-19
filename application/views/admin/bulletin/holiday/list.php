<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <div id="list_display">				
        <fieldset id="borrower">
            <legend>List of Holidays</legend>                   
            <a href="create">Add Holiday</a>                   
            <table id="branch_table_display" cellspacing="0">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th></th>
                    <th></th>
                </tr>                       
                <tr>
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