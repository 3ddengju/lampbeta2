<div class="categoryClassifications form">
<?php echo $this->Form->create('CategoryClassification');?>
	<fieldset>
		<legend><?php echo __('Edit Category Classification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('classification_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CategoryClassification.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CategoryClassification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Category Classifications'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classifications'), array('controller' => 'classifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classification'), array('controller' => 'classifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
