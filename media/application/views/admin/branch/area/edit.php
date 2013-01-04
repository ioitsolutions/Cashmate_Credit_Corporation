<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <?php $errors = isset($errors) ? $errors : array(); ?>
    <?php echo Form::open('branch_area/save/'. $area->id); ?>	
    <div id="edit_body">
            <div id="edit_header">
                    <p><?php echo $title_form; ?></p>
            </div>
            <table class="edit_content_table">
                    <tr>
                            <td><p>Branch Name</p></td>
                            <td width=177 style="text-align:right">
                                <?php echo Form::select('branch_id', $branches, $area->branch_id,array('class' => 'selectbox_edit')); ?>
                            </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'code');?></span></td>
                    </tr>
                    <tr>
                            <td><p>Area Code</p></td>
                            <td style="text-align:right"><input type="text" name="code" value="<?php echo $area->code; ?>"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'name');?></span></td>
                    </tr>
                    <tr>
                            <td><p>Area Name</p></td>
                            <td style="text-align:right"><input type="text" name="name" value="<?php echo $area->name; ?>"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'effectivity_date');?></span></td>
                    </tr>
                    <tr>
                            <td><p>Default Date</p></td>
                            <td style="text-align:right"><input type="text" class="datepicker" name="effectivity_date" value="<?php echo $area->effectivity_date; ?>"/></td>
                    </tr>			
            </table>
            <input type ="submit" value="<?php echo $btn_title; ?>"/>
            <input type ="button" value="Cancel" onclick="history.back();" />	
    </div>
    <?php echo Form::hidden('task', $task) ?>
    <?php echo Form::close(); ?>
</div>	