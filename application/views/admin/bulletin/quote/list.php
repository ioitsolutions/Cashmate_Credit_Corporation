<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
	<div id="list_display">
		<fieldset id="borrower">
            <legend>List of Quotes</legend>             
            <a href="create">Add Quote</a>
            <table id="branch_table_display" cellspacing="0">
                <tr>
                    <th>Quote Value</th>
					<th>Quote Explanation</th>
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
                    <td class="table_content"><a href="update">Edit</a></td>
                    <td class="table_content"><a href="delete">Delete</a></td>
                </tr>
            </table>
        </fieldset>
    </div>
</div>