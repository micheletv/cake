<div class="products index">
	<h2><?php echo __('Purchases'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('date_purchases'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($purchases as $purchase): ?>
	<tr>
		<td><?php echo h($product['Purchase']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Purchase']['price']); ?>&nbsp;</td>
		<td><?php echo h($product['Purchase']['amount']); ?>&nbsp;</td>
		<td><?php echo h($product['Purchase']['date_purchases']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($purchase['Product']['description'], array('controller' => 'products', 'action' => 'view', $purchase['Product']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $purchase['Purchase']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $purchase['Purchase']['id']), array(), __('Are you sure you want to delete # %s?', $product['Purchase']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
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
		<li><?php echo $this->Html->link(__('New Purchase'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>
