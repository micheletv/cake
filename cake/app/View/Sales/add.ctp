<div class="sales form">
<?php echo $this->Form->create('Sale'); ?>
	<fieldset>
		
        
         <legend><?php echo __('Add Sale'); 
		
		 
		 echo $this->Form->input('product_id');
		
		
		?></legend>
	
    
    
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Purchases'), array('controller' => 'purchases', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('New Purchase'), array('controller' => 'purchases','action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('List Sales Products'), array('controller' => 'salesproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Products'), array('controller' => 'salesproducts', 'action' => 'add')); ?> </li>
	</ul>
</div>
