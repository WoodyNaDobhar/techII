<div id="content">
	<div class="container" id="processesPage">
		<div class="processesPages view">
		<h2><?php echo __('Process Page'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($processesPage['ProcessesPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($processesPage['ProcessesPage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($processesPage['ProcessesPage']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Byline'); ?></dt>
		<dd>
			<?php echo h($processesPage['ProcessesPage']['byline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($processesPage['ProcessesPage']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($processesPage['ProcessesPage']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nav Image'); ?></dt>
		<dd>
			<?php echo h($processesPage['ProcessesPage']['nav_image']); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Edit Process Page'), array('action' => 'edit', $processesPage['ProcessesPage']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Process Page'), array('action' => 'delete', $processesPage['ProcessesPage']['id']), null, __('Are you sure you want to delete # %s?', $processesPage['ProcessesPage']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Process Pages'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Process Page'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>