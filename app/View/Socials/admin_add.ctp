<div id="content">
	<div class="container" id="social">
		<div class="socials form">
		<?php echo $this->Form->create('Social'); ?>
			<fieldset>
				<h2 class="title-divider">
					<span>
						<?php echo __('Add'); ?>						<span class="de-em">
							<?php echo __('Social'); ?>						</span>
					</span>
				</h2>
			<?php
		echo $this->Form->input('service', array('class'=>'form-control placeholder'));
		echo $this->Form->input('service_identity', array('class'=>'form-control placeholder'));
		echo $this->Form->input('url', array('class'=>'form-control placeholder'));
	?>
			</fieldset>
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Socials'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
</div>
