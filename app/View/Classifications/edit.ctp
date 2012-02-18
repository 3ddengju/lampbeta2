<div class="classifications form">
<?php echo $this->Form->create('Classification');?>

		<legend><h1><?php echo __('修改小分类'); ?></h1></legend>
		<hr></hr>
	<?php
		echo $this->Form->input('id');	
			echo $this->Form->input('name',array('class'=>'inp-form','label'=>'小分类名称:'));

	?>
<?php echo $this->Form->end(__('提交'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Classification.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Classification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Classifications'), array('action' => 'index'));?></li>
	</ul>
</div>
