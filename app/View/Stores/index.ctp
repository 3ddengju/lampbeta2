	<h1 style="padding:0px;"><?php echo __('商铺列表');?></h1>

	<hr></hr>
		<br>
	<table cellpadding="0" cellspacing="0" id="product-table">
	<tr>
	      	<th class="table-header-check"><?php echo $this->Paginator->sort('id');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('市场');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('市场名称');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('市场url');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('老板');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('开店时间');?></th>
			<th class="table-header-options line-left"><?php echo __('操作');?></th>
			
	</tr>
	<?php
	foreach ($stores as $store): ?>
	<tr>
		<td><?php echo h($store['Store']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($store['Market']['name'], array('controller' => 'markets', 'action' => 'view', $store['Market']['id'])); ?>
		</td>
		<td><?php echo h($store['Store']['name']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['store_url']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['store_boss']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['created']); ?>&nbsp;</td>
		<td class="actions">
					<?php echo $this->Html->link(__('修改'), array('action' => 'edit', $store['Store']['id'])); ?>
			<?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $store['Store']['id']), null, __('Are you sure you want to delete # %s?', $store['Store']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>	</table>

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

