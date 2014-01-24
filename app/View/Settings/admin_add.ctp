<div id="content">
	<div class="container" id="setting">
		<div class="settings form">
		<?php echo $this->Form->create('Setting'); ?>
			<fieldset>
				<h2 class="title-divider">
					<span>
						<?php echo __('Add'); ?>						<span class="de-em">
							<?php echo __('Setting'); ?>						</span>
					</span>
				</h2>
			<?php
		echo $this->Form->input('about', array('class'=>'form-control placeholder'));
		echo $this->Form->input('phone', array('class'=>'form-control placeholder'));
		echo $this->Form->input('email', array('class'=>'form-control placeholder'));
		echo $this->Form->input('address', array('class'=>'form-control placeholder'));
	?>
			</fieldset>
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Settings'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
</div>
