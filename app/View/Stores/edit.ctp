<div class="stores form">
<?php echo $this->Form->create('Store');?>
	
		<legend><?php echo __('修改商铺资料'); ?></legend>
		<hr></hr>
		<br>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('market_id',array('label'=>'市场:'));
		echo $this->Form->input('name',array('class'=>'inp-form','label'=>'商铺名称:'));
		echo $this->Form->input('store_url',array('class'=>'inp-form','label'=>'商铺URL:'));
		echo $this->Form->input('store_address',array('class'=>'inp-form','label'=>'商铺地址:'));
		echo $this->Form->input('store_boss',array('class'=>'inp-form','label'=>'商铺老板:'));
		echo $this->Form->input('store_mobile',array('class'=>'inp-form','label'=>'联系方式:'));
		echo $this->Form->input('description',array('class'=>'inp-form','label'=>'描述:'));
		echo $this->Form->input('service',array('class'=>'inp-form','label'=>'商铺服务:'));
	   ?>
    	
<?php echo $this->Form->end(__('Submit'));?>
</div>

