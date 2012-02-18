	<h1><?php echo __('市场列表');?></h1>
	<hr></hr>	
	<br>
	<table cellpadding="0" cellspacing="0" id="product-table">
	<tr>

		
			<th class="table-header-check"><?php echo $this->Paginator->sort('id');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('市场名称');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('市场地址');?></th>
			<th class="table-header-options line-left"><?php echo __('操作');?></th>
	
			
	</tr>
	<?php
	foreach ($markets as $market): ?>

	<tr>
			
	<td><?php echo h($market['Market']['id']); ?>&nbsp;</td>
		<td><?php echo h($market['Market']['name']); ?>&nbsp;</td>
		<td><?php echo h($market['Market']['address']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('修改'), array('action' => 'edit', $market['Market']['id'])); ?>
			<?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $market['Market']['id']), null, __('Are you sure you want to delete # %s?', $market['Market']['id'])); ?>
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

