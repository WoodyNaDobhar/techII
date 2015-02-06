<div id="content">
	<div class="container" id="ltype">
		<div class="ltypes view">
		<h2><?php echo __('Ltype'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ltype['Ltype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($ltype['Ltype']['name']); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Edit Ltype'), array('action' => 'edit', $ltype['Ltype']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Ltype'), array('action' => 'delete', $ltype['Ltype']['id']), null, __('Are you sure you want to delete # %s?', $ltype['Ltype']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Ltypes'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Ltype'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Lids'), array('controller' => 'lids', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Lid'), array('controller' => 'lids', 'action' => 'add')); ?> </li>
			</ul>
		</div>
				<div class="related">
			<h3><?php echo __('Related Lids'); ?></h3>
			<?php if (!empty($ltype['Lid'])): ?>
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
		<th><?php echo __('Ltype Id'); ?></th>
		<th><?php echo __('Resin Id'); ?></th>
		<th><?php echo __('Mold'); ?></th>
		<th><?php echo __('Image'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($ltype['Lid'] as $lid): ?>
		<tr>
			<td><?php echo $lid['id']; ?></td>
			<td><?php echo $lid['name']; ?></td>
			<td><?php echo $lid['diameter']; ?></td>
			<td><?php echo $lid['height']; ?></td>
			<td><?php echo $lid['printable']; ?></td>
			<td><?php echo $lid['case_count']; ?></td>
			<td><?php echo $lid['case_weight']; ?></td>
			<td><?php echo $lid['case_pallet']; ?></td>
			<td><?php echo $lid['ltype_id']; ?></td>
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