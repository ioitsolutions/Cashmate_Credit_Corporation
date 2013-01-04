<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<div id="form">
    <?php $errors = isset($errors) ? $errors : array(); ?>
    <?php echo Form::open('bulletin_announcement/save/'. $announcement->id); ?>	
        <fieldset id="borrower">
            <legend><?php echo $title_form; ?></legend>
            <div id="edit_body">
                <div id="edit_header">
                        <p><?php echo $title_form; ?></p>
                </div>
                <table class="edit_content_table">
                    <tr>
                        <td>Branch Target: </td>
                        <td class="edit_align">
                          <?php echo Form::select('branch_id', $branches, $announcement->branch_id,array('class' => 'selectbox_edit')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'title');?></span></td>
                    </tr>
                    <tr>
                        <td>Title:</td>
                        <td class="edit_align">
                            <input type="text" name="title" value="<?= $announcement->title ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'content');?></span></td>
                    </tr>
                    <tr>
                        <td>Content:</td>
                        <td class="edit_align">
                            <textarea name="content"><?= $announcement->content ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'start_date');?></span></td>
                    </tr>
                    <tr>
                        <td>Start Date:</td>
                        <td class="edit_align">
                            <input class="datepicker" type="text" name="start_date" value="<?= $announcement->start_date ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'end_date');?></span></td>
                    </tr>
                    <tr>
                        <td>End Date:</td>
                        <td class="edit_align">
                            <input class="datepicker" type="text" name="end_date" value="<?= $announcement->end_date ?>"/>
                        </td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td class="edit_align">
                                <input type="submit" name="submit" value="<?= $btn_title?>"/>
                                <input type="submit" value="Cancel"/>
                        </td>
                    </tr>
                </table>
            </div>   
        </fieldset>
        <?php echo Form::hidden('task', $task) ?>
    <?php echo Form::close(); ?>
</div>
