
<?php

$name=$this->requestAction(array('controller'=>'categories','action'=>'getList'));

foreach($name as $key=>$result)
{
  echo $this->Html->link("$result",array('controller'=>'categories','action'=>'view',$key));
  echo "|";

  }

?>
<div class="categoryClassifications index">
	<h2><?php echo __('附属小分类');?></h2>
	<hr></hr>
	<br>
	<table cellpadding="0" cellspacing="0" id="product-table">
	<tr>
			<th class="table-header-check"><?php echo $this->Paginator->sort('id');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('大分类');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('小分类');?></th>
			<th class="table-header-options line-left"><?php echo __('操作');?></th>
	</tr>
	<?php
	foreach ($categoryClassifications as $categoryClassification): ?>
	<tr>
		<td><?php echo h($categoryClassification['CategoryClassification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($categoryClassification['Category']['name'], array('controller' => 'categories', 'action' => 'view', $categoryClassification['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($categoryClassification['Classification']['name'], array('controller' => 'classifications', 'action' => 'view', $categoryClassification['Classification']['id'])); ?>
		</td>
		<td class="actions">
				<?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $categoryClassification['CategoryClassification']['id']), null, __('Are you sure you want to delete # %s?', $categoryClassification['CategoryClassification']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('添加附属小分类'), array('action' => 'add')); ?></li>
		</ul>
</div>
