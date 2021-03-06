<div id="content">
	<div class="container" id="testimonial">
		<div class="testimonials form">
		<?php echo $this->Form->create(null, array('type' => 'file'));?>
			<fieldset>
				<h2 class="title-divider">
					<span>
						<?php echo __('Edit'); ?>						<span class="de-em">
							<?php echo __('Testimonial'); ?>						</span>
					</span>
				</h2>
			<?php
		echo $this->Form->input('id', array('class'=>'form-control placeholder'));
		echo $this->Form->input('testament', array('class'=>'form-control placeholder'));
		echo $this->Form->input('testifier', array('class'=>'form-control placeholder'));
		echo $this->Form->input('link', array('class'=>'form-control placeholder'));
		echo $this->Form->input('image', array('type' => 'file'));
	?>
			</fieldset>
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Testimonial.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Testimonial.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Testimonials'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
</div>
