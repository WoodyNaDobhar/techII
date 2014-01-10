<div id="content">
	<div class="container" id="productsPage">
		<div class="productsPages index">
            <h2 class="title-divider">
                <span>
                    <?php echo __('Product Pages'); ?>                    <span class="de-em">
                        list
                    </span>
                </span>
            </h2>
			<table cellpadding="0" cellspacing="0">
			<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('link'); ?></th>
							<th><?php echo $this->Paginator->sort('byline'); ?></th>
							<th><?php echo $this->Paginator->sort('description'); ?></th>
							<th><?php echo $this->Paginator->sort('content'); ?></th>
							<th><?php echo $this->Paginator->sort('nav_image'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($productsPages as $productsPage): ?>
	<tr>
		<td><?php echo h($productsPage['ProductsPage']['id']); ?>&nbsp;</td>
		<td><?php echo h($productsPage['ProductsPage']['name']); ?>&nbsp;</td>
		<td><?php echo h($productsPage['ProductsPage']['link']); ?>&nbsp;</td>
		<td><?php echo h($productsPage['ProductsPage']['byline']); ?>&nbsp;</td>
		<td><?php echo h($productsPage['ProductsPage']['description']); ?>&nbsp;</td>
		<td><?php echo h($productsPage['ProductsPage']['content']); ?>&nbsp;</td>
		<td><?php echo h($productsPage['ProductsPage']['nav_image']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productsPage['ProductsPage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productsPage['ProductsPage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productsPage['ProductsPage']['id']), null, __('Are you sure you want to delete # %s?', $productsPage['ProductsPage']['id'])); ?>
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
				<li><?php echo $this->Html->link(__('New Product Page'), array('action' => 'add')); ?></li>
			</ul>
		</div>
	</div>
</div>