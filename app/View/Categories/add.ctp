<h1>添加大分类</h1>
<hr></hr>
<br>
<div class="categories form">
<?php echo $this->Form->create('Category');?>



	<?php
		echo $this->Form->input('name',array('label'=>'大分类名称:','class'=>'inp-form'));
	?>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
