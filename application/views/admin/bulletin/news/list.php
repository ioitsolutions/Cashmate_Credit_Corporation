<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <div id="list_display">				
        <fieldset id="borrower">
            <legend>List of News</legend>                    
            <a href="create">Add News</a>                   
            <table id="branch_table_display" cellspacing="0">
                <tr>
                    <th>Branch</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Type</th>
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
                    <td class="table_content"><a href="update">Edit</a></td>
                    <td class="table_content"><a href="delete">Delete</a></td>
                </tr>
            </table>
        </fieldset>
    </div>
</div>