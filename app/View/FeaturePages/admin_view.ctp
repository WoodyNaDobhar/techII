<div id="content">
	<div class="container" id="featurePage">
		<div class="featurePages view">
		<h2><?php echo __('Feature Page'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($featurePage['FeaturePage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($featurePage['FeaturePage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($featurePage['FeaturePage']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Byline'); ?></dt>
		<dd>
			<?php echo h($featurePage['FeaturePage']['byline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($featurePage['FeaturePage']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($featurePage['FeaturePage']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nav Image'); ?></dt>
		<dd>
			<?php echo h($featurePage['FeaturePage']['image']); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Feature Page'), array('action' => 'edit', $featurePage['FeaturePage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Feature Page'), array('action' => 'delete', $featurePage['FeaturePage']['id']), null, __('Are you sure you want to delete # %s?', $featurePage['FeaturePage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Feature Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature Page'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
			</div>
</div>