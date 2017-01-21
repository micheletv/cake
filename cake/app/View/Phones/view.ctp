<div class="phones view">
<h2><?php echo __('Phone'); ?></h2>
	<dl>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($phone['User']['name'], array('controller' => 'users', 'action' => 'view', $phone['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($phone['Phone']['home_phone']); ?> &nbsp;
            <?php echo h($phone['Phone']['cell_phone']); ?> &nbsp;
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Phone'), array('action' => 'edit', $phone['Phone']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Phone'), array('action' => 'delete', $phone['Phone']['id']), array(), __('Are you sure you want to delete # %s?', $phone['Phone']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Phones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Phone'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
