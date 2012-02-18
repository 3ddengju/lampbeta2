<?php  echo $this->Html->script('tiny_mce/tiny_mce')?>
<script type="text/javascript">
    tinyMCE.init({
	theme : "advanced",
        mode : "textareas",
        convert_urls : false
    });
</script> 
<div class="markets form">

		<h2><?php echo __('添加市场'); ?></h2>
		<hr></hr>

<?php echo $this->Form->create('Market');?>
	<?php
		echo $this->Form->input('name',array('class'=>'inp-form','label'=>'市场名称:'));
		echo $this->Form->input('address',array('class'=>'inp-form','label'=>'地址:'));
		echo $this->Form->input('description',array('class'=>'','label'=>'简介:'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('添加'));?>
</div>