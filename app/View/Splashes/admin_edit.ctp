<div id="content">
	<div class="container" id="splash">
		<div class="splashes form">
		<?php echo $this->Form->create(null, array('type' => 'file'));?>
			<fieldset>
				<h2 class="title-divider">
					<span>
						<?php echo __('Edit'); ?>						<span class="de-em">
							<?php echo __('Splash'); ?>						</span>
					</span>
				</h2>
			<?php
		echo $this->Form->input('id', array('class'=>'form-control placeholder'));
		echo $this->Form->input('name', array('class'=>'form-control placeholder'));
		echo $this->Form->input('byline', array('class'=>'form-control placeholder'));
		echo $this->Form->input('shortdesc', array('class'=>'form-control placeholder'));
		echo $this->Form->input('link', array('class'=>'form-control placeholder'));
		echo $this->Form->input('image', array('type' => 'file'));
		echo $this->Form->input('video', array('class'=>'form-control placeholder', 'between'=>'<br><span>you MUST add ?wmode=transparent to the link in the youTube embedding url to prevent it from covering the nav menu.</span>'));
	?>
			</fieldset>
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Splash.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Splash.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Splashes'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
</div>
