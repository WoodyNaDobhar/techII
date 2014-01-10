<div id="content">
	<div class="container" id="splash">
		<div class="splashes form">
		<?php echo $this->Form->create(null, array('type' => 'file'));?>
			<fieldset>
				<h2 class="title-divider">
					<span>
						<?php echo __('Add'); ?>						<span class="de-em">
							<?php echo __('Splash'); ?>						</span>
					</span>
				</h2>
			<?php
		echo $this->Form->input('name', array('class'=>'form-control placeholder'));
		echo $this->Form->input('byline', array('class'=>'form-control placeholder'));
		echo $this->Form->input('shortdesc', array('class'=>'form-control placeholder'));
		echo $this->Form->input('link', array('class'=>'form-control placeholder'));
		echo $this->Form->input('image', array('type' => 'file'));
		echo $this->Form->input('video', array('class'=>'form-control placeholder'));
	?>
			</fieldset>
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
		
						<li><?php echo $this->Html->link(__('List Splashes'), array('action' => 'index')); ?></li>
					</ul>
		</div>
	</div>
</div>
