<div id="content">
	<div class="container" id="process">
		<div class="processes form">
		<?php echo $this->Form->create('Process'); ?>
			<fieldset>
				<h2 class="title-divider">
					<span>
						<?php echo __('Edit'); ?>						<span class="de-em">
							<?php echo __('Process'); ?>						</span>
					</span>
				</h2>
			<?php
		echo $this->Form->input('id', array('class'=>'form-control placeholder'));
		echo $this->Form->input('name', array('class'=>'form-control placeholder'));
	?>
			</fieldset>
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
		
						<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Process.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Process.id'))); ?></li>
						<li><?php echo $this->Html->link(__('List Processes'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Container'), array('controller' => 'containers', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
