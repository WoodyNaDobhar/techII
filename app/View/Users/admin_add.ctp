<div id="content">
	<div class="container" id="user">
		<div class="users form">
		<?php echo $this->Form->create('User'); ?>
			<fieldset>
				<h2 class="title-divider">
					<span>
						<?php echo __('Add'); ?>						<span class="de-em">
							<?php echo __('User'); ?>						</span>
					</span>
				</h2>
			<?php
		echo $this->Form->input('username', array('class'=>'form-control placeholder'));
		echo $this->Form->input('password', array('class'=>'form-control placeholder'));
		echo $this->Form->password('repass', array('class'=>'form-control placeholder'));
		echo $this->Form->input('role', array('class'=>'form-control placeholder'));
		echo $this->Form->input('validated', array('class'=>'form-control placeholder'));
	?>
			</fieldset>
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
</div>
