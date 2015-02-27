<div id="content">
	<div class="container" id="container">
		<div class="containers view">
		<h2><?php echo __('Container'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($container['Container']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($container['Container']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Line'); ?></dt>
		<dd>
			<?php echo $this->Html->link($container['Line']['name'], array('controller' => 'lines', 'action' => 'view', $container['Line']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($container['Ctype']['name'], array('controller' => 'ctypes', 'action' => 'view', $container['Ctype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diameter'); ?></dt>
		<dd>
			<?php echo h($container['Container']['diameter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($container['Container']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volume'); ?></dt>
		<dd>
			<?php echo h($container['Container']['volume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resin'); ?></dt>
		<dd>
			<?php echo $this->Html->link($container['Resin']['name'], array('controller' => 'resins', 'action' => 'view', $container['Resin']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Process'); ?></dt>
		<dd>
			<?php echo $this->Html->link($container['Process']['name'], array('controller' => 'processes', 'action' => 'view', $container['Process']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Decoration'); ?></dt>
		<dd>
			<?php echo $this->Html->link($container['Decoration']['name'], array('controller' => 'decorations', 'action' => 'view', $container['Decoration']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('O2barrier'); ?></dt>
		<dd>
			<?php echo h($container['Container']['o2barrier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Count'); ?></dt>
		<dd>
			<?php echo h($container['Container']['case_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Weight'); ?></dt>
		<dd>
			<?php echo h($container['Container']['case_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Pallet'); ?></dt>
		<dd>
			<?php echo h($container['Container']['case_pallet']); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Container'), array('action' => 'edit', $container['Container']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Container'), array('action' => 'delete', $container['Container']['id']), null, __('Are you sure you want to delete # %s?', $container['Container']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Containers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Container'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lines'), array('controller' => 'lines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Line'), array('controller' => 'lines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ctypes'), array('controller' => 'ctypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ctype'), array('controller' => 'ctypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resins'), array('controller' => 'resins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resin'), array('controller' => 'resins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processes'), array('controller' => 'processes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Process'), array('controller' => 'processes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decorations'), array('controller' => 'decorations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Decoration'), array('controller' => 'decorations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lids'), array('controller' => 'lids', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lid'), array('controller' => 'lids', 'action' => 'add')); ?> </li>
			</ul>
		</div>
				<div class="related">
			<h3><?php echo __('Related Lids'); ?></h3>
			<?php if (!empty($container['Lid'])): ?>
			<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Ltype Id'); ?></th>
		<th><?php echo __('Diameter'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Ctype Id'); ?></th>
		<th><?php echo __('Resin Id'); ?></th>
		<th><?php echo __('Print'); ?></th>
		<th><?php echo __('Case Count'); ?></th>
		<th><?php echo __('Case Weight'); ?></th>
		<th><?php echo __('Case Pallet'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($container['Lid'] as $lid): ?>
		<tr>
			<td><?php echo $lid['id']; ?></td>
			<td><?php echo $lid['name']; ?></td>
			<td><?php echo $lid['ltype_id']; ?></td>
			<td><?php echo $lid['diameter']; ?></td>
			<td><?php echo $lid['height']; ?></td>
			<td><?php echo $lid['ctype_id']; ?></td>
			<td><?php echo $lid['resin_id']; ?></td>
			<td><?php echo $lid['print']; ?></td>
			<td><?php echo $lid['case_count']; ?></td>
			<td><?php echo $lid['case_weight']; ?></td>
			<td><?php echo $lid['case_pallet']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lids', 'action' => 'view', $lid['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lids', 'action' => 'edit', $lid['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lids', 'action' => 'delete', $lid['id']), null, __('Are you sure you want to delete # %s?', $lid['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			<div class="actions">
				<ul>
					<li><?php echo $this->Html->link(__('New Lid'), array('controller' => 'lids', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
			</div>
</div>