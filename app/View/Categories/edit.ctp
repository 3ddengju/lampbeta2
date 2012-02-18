<div class="categories form">
<?php echo $this->Form->create('Category');?>

		<legend><h1><?php echo __('大分类修改'); ?></h1></legend>
	  <hr></hr>
	  <br>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label'=>'大分类名称:','class'=>'inp-form'));
	?>
<?php echo $this->Form->end(__('提交'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Category.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Category.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
