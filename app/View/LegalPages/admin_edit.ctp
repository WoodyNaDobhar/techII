<div id="content">
	<div class="container" id="legalPage">
		<div class="legalPages form">
		<?php echo $this->Form->create('LegalPage'); ?>
			<fieldset>
				<h2 class="title-divider">
					<span>
						<?php echo __('Edit'); ?>						<span class="de-em">
							<?php echo __('Legal Page'); ?>						</span>
					</span>
				</h2>
			<?php
		echo $this->Form->input('id', array('class'=>'form-control placeholder'));
		echo $this->Form->input('name', array('class'=>'form-control placeholder'));
		echo $this->Form->input('byline', array('class'=>'form-control placeholder'));
		echo $this->Form->input('description', array('class'=>'form-control placeholder'));
		echo $this->Form->input('link', array('class'=>'form-control placeholder'));
		echo $this->Form->input('content', array('class'=>'form-control placeholder ckeditor'));
	?>
			</fieldset>
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LegalPage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LegalPage.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Legal Pages'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
</div>
