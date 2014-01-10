<div id="content">
	<div class="container" id="splash">
		<div class="splashes index">
			<h2 class="title-divider">
				<span>
					<?php echo __('Splashes'); ?>					<span class="de-em">
						list
					</span>
				</span>
			</h2>
			<table cellpadding="0" cellspacing="0">
			<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('byline'); ?></th>
							<th><?php echo $this->Paginator->sort('shortdesc'); ?></th>
							<th><?php echo $this->Paginator->sort('link'); ?></th>
							<th><?php echo $this->Paginator->sort('image'); ?></th>
							<th><?php echo $this->Paginator->sort('video'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($splashes as $splash): ?>
	<tr>
		<td><?php echo h($splash['Splash']['id']); ?>&nbsp;</td>
		<td><?php echo h($splash['Splash']['name']); ?>&nbsp;</td>
		<td><?php echo h($splash['Splash']['byline']); ?>&nbsp;</td>
		<td><?php echo h($splash['Splash']['shortdesc']); ?>&nbsp;</td>
		<td><?php echo h($splash['Splash']['link']); ?>&nbsp;</td>
		<td><?php echo h($splash['Splash']['image']); ?>&nbsp;</td>
		<td><?php echo h($splash['Splash']['video']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $splash['Splash']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $splash['Splash']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $splash['Splash']['id']), null, __('Are you sure you want to delete # %s?', $splash['Splash']['id'])); ?>
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
				<li><?php echo $this->Html->link(__('New Splash'), array('action' => 'add')); ?></li>
					</ul>
		</div>
	</div>
</div>
