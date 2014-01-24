<div id="content">
	<div class="container" id="productsPage">
		<div class="productsPages view">
		<h2><?php echo __('Product Page'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productsPage['ProductsPage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($productsPage['ProductsPage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($productsPage['ProductsPage']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Byline'); ?></dt>
		<dd>
			<?php echo h($productsPage['ProductsPage']['byline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($productsPage['ProductsPage']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($productsPage['ProductsPage']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nav Image'); ?></dt>
		<dd>
			<?php echo h($productsPage['ProductsPage']['nav_image']); ?>
			&nbsp;
		</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Admin Home'), array('controller' => 'Settings', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Edit Product Page'), array('action' => 'edit', $productsPage['ProductsPage']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Product Page'), array('action' => 'delete', $productsPage['ProductsPage']['id']), null, __('Are you sure you want to delete # %s?', $productsPage['ProductsPage']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Product Pages'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Product Page'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
			</div>
</div>