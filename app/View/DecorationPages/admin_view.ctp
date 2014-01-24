<div id="content">
	<div class="container" id="decorationPage">
		<div class="decorationPages view">
		<h2><?php echo __('Decoration Page'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($decorationPage['DecorationPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($decorationPage['DecorationPage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($decorationPage['DecorationPage']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Byline'); ?></dt>
		<dd>
			<?php echo h($decorationPage['DecorationPage']['byline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($decorationPage['DecorationPage']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($decorationPage['DecorationPage']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nav Image'); ?></dt>
		<dd>
			<?php echo h($decorationPage['DecorationPage']['nav_image']); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Edit Decoration Page'), array('action' => 'edit', $decorationPage['DecorationPage']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Decoration Page'), array('action' => 'delete', $decorationPage['DecorationPage']['id']), null, __('Are you sure you want to delete # %s?', $decorationPage['DecorationPage']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Decoration Pages'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Decoration Page'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
			</div>
</div>