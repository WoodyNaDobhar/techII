<div id="content">
	<div class="container" id="resin">
		<div class="resins view">
		<h2><?php echo __('Resin'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resin['Resin']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($resin['Resin']['name']); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Resin'), array('action' => 'edit', $resin['Resin']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Resin'), array('action' => 'delete', $resin['Resin']['id']), null, __('Are you sure you want to delete # %s?', $resin['Resin']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Resins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resin'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Container'), array('controller' => 'containers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lids'), array('controller' => 'lids', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lid'), array('controller' => 'lids', 'action' => 'add')); ?> </li>
			</ul>
		</div>
				<div class="related">
			<h3><?php echo __('Related Containers'); ?></h3>
			<?php if (!empty($resin['Container'])): ?>
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
			<?php foreach ($resin['Container'] as $container): ?>
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
				<div class="related">
			<h3><?php echo __('Related Lids'); ?></h3>
			<?php if (!empty($resin['Lid'])): ?>
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
			<?php foreach ($resin['Lid'] as $lid): ?>
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