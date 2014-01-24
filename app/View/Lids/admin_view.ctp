<div id="content">
	<div class="container" id="lid">
		<div class="lids view">
		<h2><?php echo __('Lid'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lid['Lid']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($lid['Lid']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diameter'); ?></dt>
		<dd>
			<?php echo h($lid['Lid']['diameter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($lid['Lid']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Printable'); ?></dt>
		<dd>
			<?php echo h($lid['Lid']['printable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Count'); ?></dt>
		<dd>
			<?php echo h($lid['Lid']['case_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Weight'); ?></dt>
		<dd>
			<?php echo h($lid['Lid']['case_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Pallet'); ?></dt>
		<dd>
			<?php echo h($lid['Lid']['case_pallet']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lid['Ctype']['name'], array('controller' => 'ctypes', 'action' => 'view', $lid['Ctype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resin'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lid['Resin']['name'], array('controller' => 'resins', 'action' => 'view', $lid['Resin']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mold'); ?></dt>
		<dd>
			<?php echo h($lid['Lid']['mold']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($lid['Lid']['image']); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Edit Lid'), array('action' => 'edit', $lid['Lid']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Lid'), array('action' => 'delete', $lid['Lid']['id']), null, __('Are you sure you want to delete # %s?', $lid['Lid']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Lids'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Lid'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Ctypes'), array('controller' => 'ctypes', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Ctype'), array('controller' => 'ctypes', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Resins'), array('controller' => 'resins', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Resin'), array('controller' => 'resins', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Container'), array('controller' => 'containers', 'action' => 'add')); ?> </li>
			</ul>
		</div>
				<div class="related">
			<h3><?php echo __('Related Containers'); ?></h3>
			<?php if (!empty($lid['Container'])): ?>
			<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Diameter'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Volume'); ?></th>
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
			<?php foreach ($lid['Container'] as $container): ?>
		<tr>
			<td><?php echo $container['id']; ?></td>
			<td><?php echo $container['name']; ?></td>
			<td><?php echo $container['diameter']; ?></td>
			<td><?php echo $container['height']; ?></td>
			<td><?php echo $container['volume']; ?></td>
			<td><?php echo $container['printable']; ?></td>
			<td><?php echo $container['case_count']; ?></td>
			<td><?php echo $container['case_weight']; ?></td>
			<td><?php echo $container['case_pallet']; ?></td>
			<td><?php echo $container['ctype_id']; ?></td>
			<td><?php echo $container['resin_id']; ?></td>
			<td><?php echo $container['mold']; ?></td>
			<td><?php echo $container['image']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'containers', 'action' => 'view', $container['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'containers', 'action' => 'edit', $container['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'containers', 'action' => 'delete', $container['id']), null, __('Are you sure you want to delete # %s?', $container['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			<div class="actions">
				<ul>
					<li><?php echo $this->Html->link(__('New Container'), array('controller' => 'containers', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
			</div>
</div>