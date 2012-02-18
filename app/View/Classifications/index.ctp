<div id="related-activities" style="float:right">
<div id="related-act-top">
<img height="43" width="271" alt="" src="images/forms/header_related_act.gif">
</div>
<div id="related-act-bottom">
<div id="related-act-inner">
<ul>
		<li><?php echo $this->Html->link(__('添加新小分类'), array('action' => 'add')); ?></li>
	</ul>
<div class="clear"></div>
</div>
</div>
</div>
	<h2><?php echo __('小分类列表');?></h2>
	<table cellpadding="0" cellspacing="0" id="product-table">
	<tr>

			<th class="table-header-check"><?php echo $this->Paginator->sort('id');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('小分类名称');?></th>
			<th class="table-header-options line-left"><?php echo __('操作');?></th>
		
	
	</tr>
	<?php
	foreach ($classifications as $classification): ?>

	<tr>
			
	<td><?php echo h($classification['Classification']['id']); ?>&nbsp;</td>
		<td><?php echo h($classification['Classification']['name']); ?>&nbsp;</td>
		<td class="actions">
				<?php echo $this->Html->link(__('修改'), array('action' => 'edit', $classification['Classification']['id'])); ?>
			<?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $classification['Classification']['id']), null, __('Are you sure you want to delete # %s?', $classification['Classification']['id'])); ?>
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

