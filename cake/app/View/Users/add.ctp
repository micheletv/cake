<div class="users form">
<?php echo $this->Form->create(array('enctype' => 'multipart/form-data'));?>
	<fieldset>
		<legend><?php echo __('Cadastro de Usuário'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('born_date');
		echo $this->Form->input('password');
		
		echo $this->Form->input('image', array ('type' => 'file'));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Phones'), array('controller' => 'phones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Phone'), array('controller' => 'phones', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Sales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Purchases'), array('controller' => 'purchases', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('New Purchase'), array('controller' => 'purchases','action' => 'index')); ?> </li>
	</ul>
</div>
