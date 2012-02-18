	<h1><?php echo __('商品列表');?></h1>
	<hr></hr>
	<br>
	<table cellpadding="0" cellspacing="0" id="product-table">
	<tr>
	<th class="table-header-check"><?php echo $this->Paginator->sort('id');?></th>
			<th class="table-header-repeat line-left minwidth-1" ><?php echo $this->Paginator->sort('商品名称');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('创建时间');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('商铺');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('大分类');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('顺序');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('上下架状态');?></th>
			<th class="table-header-options line-left"><?php echo __('操作');?></th>
			
	</tr>
	<?php
	foreach ($products as $product): ?>

	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['Store']['name'], array('controller' => 'stores', 'action' => 'view', $product['Store']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
		</td>
		<td><?php echo h($product['Product']['order']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('修改'), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
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

