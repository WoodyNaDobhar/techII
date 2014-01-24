<div id="content">
	<div class="container" id="container">
		<div class="containers index">
            <h2 class="title-divider">
                <span>
                    <?php echo __('Containers'); ?>                    <span class="de-em">
                        list
                    </span>
                </span>
            </h2>
			<table cellpadding="0" cellspacing="0">
			<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('diameter'); ?></th>
							<th><?php echo $this->Paginator->sort('height'); ?></th>
							<th><?php echo $this->Paginator->sort('volume'); ?></th>
							<th><?php echo $this->Paginator->sort('printable'); ?></th>
							<th><?php echo $this->Paginator->sort('case_count'); ?></th>
							<th><?php echo $this->Paginator->sort('case_weight'); ?></th>
							<th><?php echo $this->Paginator->sort('case_pallet'); ?></th>
							<th><?php echo $this->Paginator->sort('ctype_id'); ?></th>
							<th><?php echo $this->Paginator->sort('resin_id'); ?></th>
							<th><?php echo $this->Paginator->sort('mold'); ?></th>
							<th><?php echo $this->Paginator->sort('image'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($containers as $container): ?>
	<tr>
		<td><?php echo h($container['Container']['id']); ?>&nbsp;</td>
		<td><?php echo h($container['Container']['name']); ?>&nbsp;</td>
		<td><?php echo h($container['Container']['diameter']); ?>&nbsp;</td>
		<td><?php echo h($container['Container']['height']); ?>&nbsp;</td>
		<td><?php echo h($container['Container']['volume']); ?>&nbsp;</td>
		<td><?php echo h($container['Container']['printable']); ?>&nbsp;</td>
		<td><?php echo h($container['Container']['case_count']); ?>&nbsp;</td>
		<td><?php echo h($container['Container']['case_weight']); ?>&nbsp;</td>
		<td><?php echo h($container['Container']['case_pallet']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($container['Ctype']['name'], array('controller' => 'ctypes', 'action' => 'view', $container['Ctype']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($container['Resin']['name'], array('controller' => 'resins', 'action' => 'view', $container['Resin']['id'])); ?>
		</td>
		<td><?php echo h($container['Container']['mold']); ?>&nbsp;</td>
		<td><?php echo h($container['Container']['image']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $container['Container']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $container['Container']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $container['Container']['id']), null, __('Are you sure you want to delete # %s?', $container['Container']['id'])); ?>
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
				<li><?php echo $this->Html->link(__('New Container'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('List Ctypes'), array('controller' => 'ctypes', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Ctype'), array('controller' => 'ctypes', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Resins'), array('controller' => 'resins', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Resin'), array('controller' => 'resins', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Lids'), array('controller' => 'lids', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Lid'), array('controller' => 'lids', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
