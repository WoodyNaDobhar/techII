<div id="content">
	<div class="container" id="setting">
		<div class="settings index">
			<h2 class="title-divider">
				<span>
					<?php echo __('Settings'); ?>
				</span>
			</h2>
			<table cellpadding="0" cellspacing="0">
			<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('about'); ?></th>
							<th><?php echo $this->Paginator->sort('phone'); ?></th>
							<th><?php echo $this->Paginator->sort('email'); ?></th>
							<th><?php echo $this->Paginator->sort('address'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($settings as $setting): ?>
	<tr>
		<td><?php echo h($setting['Setting']['id']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['about']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['phone']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['email']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['address']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $setting['Setting']['id'])); ?>
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
				<li><?php echo $this->Html->link(__('Socials'), array('controller' => 'Socials', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Splash Items'), array('controller' => 'Splashes', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Testimonials'), array('controller' => 'Testimonials', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Feature Pages'), array('controller' => 'FeaturePages', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('News Articles'), array('controller' => 'News', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('About Pages'), array('controller' => 'AboutPages', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Decoration Pages'), array('controller' => 'DecorationPages', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Processes Pages'), array('controller' => 'ProcessesPages', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Products Pages'), array('controller' => 'ProductsPages', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Legals Pages'), array('controller' => 'LegalPages', 'action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
</div>
