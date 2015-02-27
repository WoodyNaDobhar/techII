<div id="content">
	<div class="container" id="container">
		<div class="containers form">
		<?php echo $this->Form->create('Container'); ?>
			<fieldset>
				<h2 class="title-divider">
					<span>
						<?php echo __('Add'); ?>						<span class="de-em">
							<?php echo __('Container'); ?>						</span>
					</span>
				</h2>
			<?php
		echo $this->Form->input('name', array('class'=>'form-control placeholder'));
		echo $this->Form->input('line_id', array('class'=>'form-control placeholder'));
		echo $this->Form->input('ctype_id', array('class'=>'form-control placeholder'));
		echo $this->Form->input('diameter', array('class'=>'form-control placeholder'));
		echo $this->Form->input('height', array('class'=>'form-control placeholder'));
		echo $this->Form->input('volume', array('class'=>'form-control placeholder'));
		echo $this->Form->input('resin_id', array('class'=>'form-control placeholder'));
		echo $this->Form->input('process_id', array('class'=>'form-control placeholder'));
		echo $this->Form->input('decoration_id', array('class'=>'form-control placeholder'));
		echo $this->Form->input('o2barrier', array('class'=>'form-control placeholder'));
		echo $this->Form->input('case_count', array('class'=>'form-control placeholder'));
		echo $this->Form->input('case_weight', array('class'=>'form-control placeholder'));
		echo $this->Form->input('case_pallet', array('class'=>'form-control placeholder'));
		echo $this->Form->input('Lid', array('class'=>'form-control placeholder'));
	?>
			</fieldset>
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
		
						<li><?php echo $this->Html->link(__('List Containers'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Lines'), array('controller' => 'lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Line'), array('controller' => 'lines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ctypes'), array('controller' => 'ctypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ctype'), array('controller' => 'ctypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resins'), array('controller' => 'resins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resin'), array('controller' => 'resins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processes'), array('controller' => 'processes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Process'), array('controller' => 'processes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decorations'), array('controller' => 'decorations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decoration'), array('controller' => 'decorations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lids'), array('controller' => 'lids', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lid'), array('controller' => 'lids', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
