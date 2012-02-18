<div class="categoryClassifications form">
<?php echo $this->Form->create('CategoryClassification');?>
	<fieldset>
		<legend><?php echo __('Add Category Classification'); ?></legend>
	<?php
		echo $this->Form->input('category_id',array('label'=>'大分类列表：'));
		echo $this->Form->input('classification_id',array('options'=>$classifications,'multiple'=>'checkbox','type'=>'select','label'=>'分类列表：'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
