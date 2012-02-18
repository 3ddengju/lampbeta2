<div class="details form">
<?php echo $this->Form->create('Detail');?>
	
		<legend><h1><?php echo __('添加细节'); ?></h1></legend>
		<hr></hr>
		<br>
	<?php
		echo $this->Form->input('name',array('class'=>'inp-form','label'=>'细节名称:'));
		echo $this->Form->input('classification_id',array('class'=>'inp-form','label'=>'属于小分类:'));
	?>
<?php echo $this->Form->end(__('提交'));?>
</div>
