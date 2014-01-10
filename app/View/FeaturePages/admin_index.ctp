<div id="content">
	<div class="container" id="featurePage">
		<div class="featurePages index">
			<h2 class="title-divider">
				<span>
					<?php echo __('FeaturePages'); ?>					<span class="de-em">
						list
					</span>
				</span>
			</h2>
			<table cellpadding="0" cellspacing="0">
			<tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('link'); ?></th>
                <th><?php echo $this->Paginator->sort('byline'); ?></th>
                <th><?php echo $this->Paginator->sort('description'); ?></th>
                <th><?php echo $this->Paginator->sort('content'); ?></th>
                <th><?php echo $this->Paginator->sort('image'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($featurePages as $featurePage): ?>
	<tr>
		<td><?php echo h($featurePage['FeaturePage']['id']); ?>&nbsp;</td>
		<td><?php echo h($featurePage['FeaturePage']['name']); ?>&nbsp;</td>
		<td><?php echo h($featurePage['FeaturePage']['link']); ?>&nbsp;</td>
		<td><?php echo h($featurePage['FeaturePage']['byline']); ?>&nbsp;</td>
		<td><?php echo h($featurePage['FeaturePage']['description']); ?>&nbsp;</td>
		<td><?php echo h($featurePage['FeaturePage']['content']); ?>&nbsp;</td>
		<td><?php echo h($featurePage['FeaturePage']['image']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $featurePage['FeaturePage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $featurePage['FeaturePage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $featurePage['FeaturePage']['id']), null, __('Are you sure you want to delete # %s?', $featurePage['FeaturePage']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
			</table>
			<p>
			<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?>			</p>
			<div class="paging">
			<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
			</div>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('New FeaturePage'), array('action' => 'add')); ?></li>
			</ul>
		</div>
	</div>
</div>
