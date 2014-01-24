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
		<dt><?php echo __('Printable'); ?></dt>
		<dd>
			<?php echo h($container['Container']['printable']); ?>
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
		<dt><?php echo __('Ctype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($container['Ctype']['name'], array('controller' => 'ctypes', 'action' => 'view', $container['Ctype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resin'); ?></dt>
		<dd>
			<?php echo $this->Html->link($container['Resin']['name'], array('controller' => 'resins', 'action' => 'view', $container['Resin']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mold'); ?></dt>
		<dd>
			<?php echo h($container['Container']['mold']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($container['Container']['image']); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Form->postLink(__('Delete Container'), array('action' => 'delete', $container['Container']['id']), null, __('Are you sure you want to delete # %s?', $container['Container']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Containers'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Container'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Ctypes'), array('controller' => 'ctypes', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Ctype'), array('controller' => 'ctypes', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Resins'), array('controller' => 'resins', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Resin'), array('controller' => 'resins', 'action' => 'add')); ?> </li>
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
		<th><?php echo __('Diameter'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Printable'); ?></th>
		<th><?php echo __('Case Count'); ?></th>
		<th><?php echo __('Case Weight'); ?></th>
		<th><?php echo __('Case Pallet'); ?></th>
		<th><?php echo __('Ctype Id'); ?></th>
		<th><?php echo __('Resin Id'); ?></th>
		<th><?php echo __('Mold'); ?></th>
		<th><?php echo __('Image'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($container['Lid'] as $lid): ?>
		<tr>
			<td><?php echo $lid['id']; ?></td>
			<td><?php echo $lid['name']; ?></td>
			<td><?php echo $lid['diameter']; ?></td>
			<td><?php echo $lid['height']; ?></td>
			<td><?php echo $lid['printable']; ?></td>
			<td><?php echo $lid['case_count']; ?></td>
			<td><?php echo $lid['case_weight']; ?></td>
			<td><?php echo $lid['case_pallet']; ?></td>
			<td><?php echo $lid['ctype_id']; ?></td>
			<td><?php echo $lid['resin_id']; ?></td>
			<td><?php echo $lid['mold']; ?></td>
			<td><?php echo $lid['image']; ?></td>
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