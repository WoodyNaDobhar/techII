<div id="content">
	<div class="container" id="process">
		<div class="processes view">
		<h2><?php echo __('Process'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($process['Process']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($process['Process']['name']); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Process'), array('action' => 'edit', $process['Process']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Process'), array('action' => 'delete', $process['Process']['id']), null, __('Are you sure you want to delete # %s?', $process['Process']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Processes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Process'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Containers'), array('controller' => 'containers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Container'), array('controller' => 'containers', 'action' => 'add')); ?> </li>
			</ul>
		</div>
				<div class="related">
			<h3><?php echo __('Related Containers'); ?></h3>
			<?php if (!empty($process['Container'])): ?>
			<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Line Id'); ?></th>
		<th><?php echo __('Ctype Id'); ?></th>
		<th><?php echo __('Diameter'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Volume'); ?></th>
		<th><?php echo __('Resin Id'); ?></th>
		<th><?php echo __('Process Id'); ?></th>
		<th><?php echo __('Decoration Id'); ?></th>
		<th><?php echo __('O2barrier'); ?></th>
		<th><?php echo __('Case Count'); ?></th>
		<th><?php echo __('Case Weight'); ?></th>
		<th><?php echo __('Case Pallet'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($process['Container'] as $container): ?>
		<tr>
			<td><?php echo $container['id']; ?></td>
			<td><?php echo $container['name']; ?></td>
			<td><?php echo $container['line_id']; ?></td>
			<td><?php echo $container['ctype_id']; ?></td>
			<td><?php echo $container['diameter']; ?></td>
			<td><?php echo $container['height']; ?></td>
			<td><?php echo $container['volume']; ?></td>
			<td><?php echo $container['resin_id']; ?></td>
			<td><?php echo $container['process_id']; ?></td>
			<td><?php echo $container['decoration_id']; ?></td>
			<td><?php echo $container['o2barrier']; ?></td>
			<td><?php echo $container['case_count']; ?></td>
			<td><?php echo $container['case_weight']; ?></td>
			<td><?php echo $container['case_pallet']; ?></td>
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