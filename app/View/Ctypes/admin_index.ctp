<div id="content">
	<div class="container" id="ctype">
		<div class="ctypes index">
            <h2 class="title-divider">
                <span>
                    <?php echo __('Ctypes'); ?>                    <span class="de-em">
                        list
                    </span>
                </span>
            </h2>
			<table cellpadding="0" cellspacing="0">
			<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($ctypes as $ctype): ?>
	<tr>
		<td><?php echo h($ctype['Ctype']['id']); ?>&nbsp;</td>
		<td><?php echo h($ctype['Ctype']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ctype['Ctype']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ctype['Ctype']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ctype['Ctype']['id']), null, __('Are you sure you want to delete # %s?', $ctype['Ctype']['id'])); ?>
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
				<li><?php echo $this->Html->link(__('New Ctype'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('List Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Container'), array('controller' => 'containers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lids'), array('controller' => 'lids', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lid'), array('controller' => 'lids', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
