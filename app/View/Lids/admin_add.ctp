<div id="content">
	<div class="container" id="lid">
		<div class="lids form">
		<?php echo $this->Form->create(null, array('type' => 'file'));?>
			<fieldset>
				<h2 class="title-divider">
					<span>
						<?php echo __('Add'); ?>						<span class="de-em">
							<?php echo __('Lid'); ?>						</span>
					</span>
				</h2>
			<?php
		echo $this->Form->input('name', array('class'=>'form-control placeholder'));
		echo $this->Form->input('diameter', array('class'=>'form-control placeholder'));
		echo $this->Form->input('height', array('class'=>'form-control placeholder'));
		echo $this->Form->input('printable', array('class'=>'form-control placeholder'));
		echo $this->Form->input('case_count', array('class'=>'form-control placeholder'));
		echo $this->Form->input('case_weight', array('class'=>'form-control placeholder'));
		echo $this->Form->input('case_pallet', array('class'=>'form-control placeholder'));
		echo $this->Form->input('ctype_id', array('class'=>'form-control placeholder'));
		echo $this->Form->input('resin_id', array('class'=>'form-control placeholder'));
		echo $this->Form->input('mold', array('class'=>'form-control placeholder'));
		echo $this->Form->input('image', array('type' => 'file'));
		echo $this->Form->input('Container', array('class'=>'form-control placeholder'));
	?>
			</fieldset>
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Lids'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Ctypes'), array('controller' => 'ctypes', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Ctype'), array('controller' => 'ctypes', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Resins'), array('controller' => 'resins', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Resin'), array('controller' => 'resins', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Container'), array('controller' => 'containers', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
