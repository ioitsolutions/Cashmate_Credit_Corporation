<?php defined('SYSPATH') or die('No direct access allowed.');?>

<table>
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
    </tr>
    <?php foreach($datas as $data): ?>
    <tr>
        <td><?php echo $data->id; ?></td>
        <td><?php echo $data->first_name; ?></td>
        <td><?php echo $data->last_name; ?></td>
    </tr>
    <?php endforeach; ?>
    
    
    <?php
    foreach($relationships as $relationship)
    {
        echo $relationship->relationship_id . ' ';
        echo $relationship->relationship_value . '<br/>';
    }
    
    
    
    foreach($top_performers as $performer)
    {
        echo 'Top Performer:<br/>';
        echo 'Employee ID: ' . $performer->employee_id . '<br/>';
        echo 'First Name: ' . $performer->employee->first_name . '<br/>';
        echo 'Creator: ' . $performer->creator->first_name . ' ' . $performer->creator->last_name;
    }
    
    ?>
    
    <?php
    
    foreach($infos as $info)
    {
        echo $info->role->name .' ' . $info->menu->menu_name . ' '. $info->privilege->privilege_name.'<br/>'; 
    }
    ?>
    
    
    <?php
    foreach($joins as $join)
    {
        echo $join->name. '<br/>';
    }
    
    ?>
</table>
