<?php echo initialize_tinymce(); ?>
<div class="post">
		<div class="post_title">
			<h1><?php echo lang('create_post'); ?></h1>
		</div>
		<div class="post_body">
			<p><?php echo lang('create_post_description'); ?></p>
			
			<?php if (validation_errors()): ?>
				<div class="error">
				<?php echo validation_errors(); ?>
				</div>
			<?php endif; ?>
			
				<table width="100%">
				<tr>
					 <td colspan="2">
					 	<fieldset id="main">
					 		<legend><?php echo lang('form_main'); ?></legend>
					 		<table>
					 			<tr>
					 				<?php echo form_open('admin/posts/create'); ?>
					 				<td width="150px"><?php echo lang('form_title'); ?></td>
					 				<td><?php echo form_input(array('name' => 'title', 'id' => 'title', 'class' => 'styled', 'size' => '50', 'value' => set_value('title'))); ?></td>
					 			</tr>
					 			<tr>
					 				<td width="150px" valign="top"><?php echo lang('form_excerpt'); ?></td>
					 				<td><?php echo form_textarea(array('name' => 'excerpt', 'id' => 'excerpt', 'rows' => '10', 'cols' => '100', 'value' => set_value('excerpt'))); ?></td>
					 			</tr>
					 			<tr>
					 				<td width="150px" valign="top"><?php echo lang('form_content'); ?></td>
					 				<td><?php echo form_textarea(array('name' => 'content', 'id' => 'content', 'rows' => '20', 'cols' => '100', 'value' => set_value('content'))); ?></td>
					 			</tr>
					 		</table>
					 	</fieldset>
					 </td>
				</tr>
				<tr>
					 <td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					 <td colspan="2">
					 	<fieldset id="settings">
					 		<legend><?php echo lang('form_categories'); ?></legend>
					 		<table>
					 			<?php foreach ($categories as $key => $value): ?>
					 			<tr>
					 				<td width="150px"><?php echo form_checkbox(array('name' => 'categories[]', 'id' => 'categories', 'value' => $key)); ?> <?php echo $value; ?></td>
					 			</tr>
					 			<?php endforeach; ?>
					 		</table>
					 	</fieldset>
					 </td>
				</tr>
				<tr>
					 <td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					 <td colspan="2">
					 	<fieldset id="settings">
					 		<legend><?php echo lang('form_tags'); ?></legend>
					 		<table>
					 			<tr>
					 				<td width="150px" valign="top"><?php echo lang('form_tags'); ?></td>
					 				<td><?php echo form_input(array('name' => 'tags', 'id' => 'tags', 'class' => 'styled', 'size' => '30', 'value' => set_value('tags'))); ?> <a title="<?php echo lang('form_tags_title'); ?>|<?php echo lang('form_tags_hint'); ?>" class="tip">[?]</a></td>
					 			</tr>
					 		</table>
					 	</fieldset>
					 </td>
				</tr>
				<tr>
					 <td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					 <td colspan="2">
					 	<fieldset id="settings">
					 		<legend><?php echo lang('form_settings'); ?></legend>
					 		<table>
					 			<tr>
					 				<td width="150px" valign="top"><?php echo lang('form_publish_date'); ?></td>
					 				<td><?php echo form_input(array('name' => 'publish_date', 'id' => 'publish_date', 'class' => 'styled date_current', 'size' => '30', 'value' => set_value('publish_date'))); ?> <a title="<?php echo lang('form_publish_date_title'); ?>|<?php echo lang('form_publish_date_hint'); ?>" class="tip">[?]</a></td>
					 			</tr>
					 			<tr>
					 				<td width="150px" valign="top"><?php echo lang('form_status'); ?></td>
					 				<td><?php echo form_dropdown('status', array('published' => lang('published'), 'draft' => lang('draft')), set_value('status')); ?> <a title="<?php echo lang('form_status_title'); ?>|<?php echo lang('form_status_hint'); ?>" class="tip">[?]</a></td>
					 			</tr>
					 			<tr>
					 				<td width="150px" valign="top"><?php echo lang('form_allow_comments'); ?></td>
					 				<td><?php echo form_checkbox('allow_comments', 1, set_value('allow_comments', isset($settings['allow_comments']) ? $settings['allow_comments'] : '')); ?> <a title="<?php echo lang('form_allow_comments_title'); ?>|<?php echo lang('form_allow_comments_hint'); ?>" class="tip">[?]</a></td>
					 			</tr>
					 			<tr>
					 				<td width="150px" valign="top"><?php echo lang('form_sticky'); ?></td>
					 				<td><?php echo form_checkbox('sticky', 1, set_value('sticky')); ?> <a title="<?php echo lang('form_sticky_title'); ?>|<?php echo lang('form_sticky_hint'); ?>" class="tip">[?]</a></td>
					 			</tr>
					 		</table>
					 	</fieldset>
					 </td>
				</tr>
				<tr>
					 <td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="submit" value="<?php echo lang('button_create'); ?>" class="styled" />
						<?php echo form_close(); ?>
					</td>
				</tr>
				</table>
		</div>
</div>