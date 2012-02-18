<?php  echo $this->Html->script('tiny_mce/tiny_mce')?>
<script type="text/javascript">
    tinyMCE.init({
        theme : "simple",
        mode : "textareas",
        convert_urls : false
    });
</script>
<div class="markets form">
<?php echo $this->Form->create('Market');?>
		<legend><h1><?php echo __('修改市场'); ?></h1></legend>
		<hr></hr>
		<br>
	<?php
		echo $this->Form->input('id');	
		echo $this->Form->input('name',array('class'=>'inp-form','label'=>'市场名称:'));
		echo $this->Form->input('address',array('class'=>'inp-form','label'=>'地址:'));
		echo $this->Form->input('description',array('class'=>'','label'=>'简介:'));
	?>
	
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Market.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Market.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Markets'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>
