<div id="content">
	<div class="container" id="aboutPage">
		<div class="aboutPages view">
		<h2><?php echo __('About Page'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aboutPage['AboutPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($aboutPage['AboutPage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($aboutPage['AboutPage']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Byline'); ?></dt>
		<dd>
			<?php echo h($aboutPage['AboutPage']['byline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($aboutPage['AboutPage']['content']); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit About Page'), array('action' => 'edit', $aboutPage['AboutPage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete About Page'), array('action' => 'delete', $aboutPage['AboutPage']['id']), null, __('Are you sure you want to delete # %s?', $aboutPage['AboutPage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List About Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New About Page'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
			</div>
</div>