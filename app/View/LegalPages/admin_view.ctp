<div id="content">
	<div class="container" id="legalPage">
		<div class="legalPages view">
		<h2><?php echo __('Legal Page'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legalPage['LegalPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($legalPage['LegalPage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Byline'); ?></dt>
		<dd>
			<?php echo h($legalPage['LegalPage']['byline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($legalPage['LegalPage']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($legalPage['LegalPage']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($legalPage['LegalPage']['content']); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Legal Page'), array('action' => 'edit', $legalPage['LegalPage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Legal Page'), array('action' => 'delete', $legalPage['LegalPage']['id']), null, __('Are you sure you want to delete # %s?', $legalPage['LegalPage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Page'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
			</div>
</div>