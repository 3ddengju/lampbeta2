
	<h2><?php echo __('大分类列表');?></h2>
	<hr></hr>
	<br>
	<table cellpadding="0" cellspacing="0" id="product-table">
	<tr>
			<th class="table-header-check"><?php echo $this->Paginator->sort('id');?></th>
			<th  class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('大分类名称');?></th>
			<th class="table-header-options line-left"><?php echo __('操作');?></th>
	</tr>	 
	<?php
	foreach ($categories as $category): ?>
	<tr>
		<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('修改'), array('action' => 'edit', $category['Category']['id'])); ?>
			<?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
<div id="related-activities">
<div id="related-act-top">	
<img height="43" width="271" alt="" src="images/forms/header_related_act.gif">
</div>
<div id="related-act-bottom" style="float:right">
<div class="clear"></div>
<div id="related-act-inner">
<div class="clear"></div>
<ul>
		<li><?php echo $this->Html->link(__('添加大分类'), array('action' => 'add')); ?></li>
	</ul>
<div class="lines-dotted-short"></div>
</div>
</div>
</div>
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
