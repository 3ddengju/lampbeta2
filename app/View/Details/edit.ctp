<div class="details form">
<?php echo $this->Form->create('Detail');?>

		<legend><h1><?php echo __('修改细节'); ?></h1></legend>
		<hr></hr>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('class'=>'inp-form','label'=>'细节名称:'));
		echo $this->Form->input('classification_id',array('class'=>'inp-form','label'=>'属于小分类:'));
	?>
<?php echo $this->Form->end(__('提交'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Detail.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Detail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Details'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Classifications'), array('controller' => 'classifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classification'), array('controller' => 'classifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
