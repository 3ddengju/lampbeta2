<div class="categoryClassifications view">
<h2><?php  echo __('Category Classification');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoryClassification['CategoryClassification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryClassification['Category']['name'], array('controller' => 'categories', 'action' => 'view', $categoryClassification['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Classification'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryClassification['Classification']['name'], array('controller' => 'classifications', 'action' => 'view', $categoryClassification['Classification']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category Classification'), array('action' => 'edit', $categoryClassification['CategoryClassification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category Classification'), array('action' => 'delete', $categoryClassification['CategoryClassification']['id']), null, __('Are you sure you want to delete # %s?', $categoryClassification['CategoryClassification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Classifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Classification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classifications'), array('controller' => 'classifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classification'), array('controller' => 'classifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
