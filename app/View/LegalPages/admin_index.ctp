<div id="content">
	<div class="container" id="legalPage">
		<div class="legalPages index">
			<h2 class="title-divider">
				<span>
					<?php echo __('Legal Pages'); ?>					<span class="de-em">
						list
					</span>
				</span>
			</h2>
			<table cellpadding="0" cellspacing="0">
			<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('byline'); ?></th>
							<th><?php echo $this->Paginator->sort('description'); ?></th>
							<th><?php echo $this->Paginator->sort('link'); ?></th>
							<th><?php echo $this->Paginator->sort('content'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($legalPages as $legalPage): ?>
	<tr>
		<td><?php echo h($legalPage['LegalPage']['id']); ?>&nbsp;</td>
		<td><?php echo h($legalPage['LegalPage']['name']); ?>&nbsp;</td>
		<td><?php echo h($legalPage['LegalPage']['byline']); ?>&nbsp;</td>
		<td><?php echo h($legalPage['LegalPage']['description']); ?>&nbsp;</td>
		<td><?php echo h($legalPage['LegalPage']['link']); ?>&nbsp;</td>
		<td><?php echo h($legalPage['LegalPage']['content']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $legalPage['LegalPage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $legalPage['LegalPage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $legalPage['LegalPage']['id']), null, __('Are you sure you want to delete # %s?', $legalPage['LegalPage']['id'])); ?>
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
				<li><?php echo $this->Html->link(__('New Legal Page'), array('action' => 'add')); ?></li>
			</ul>
		</div>
	</div>
</div>
