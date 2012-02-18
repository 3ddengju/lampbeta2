<div class="products view">
<h2><?php  echo __('Product');?></h2>
	<?php
	echo $this->Html->link('基本信息修改',array('controller'=>'products','action'=>'edit',$product['Product']['id']));
	
	?>
	<dl>
		<dt><?php echo __('名称:'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<br>
		<dt><?php echo __('产品规格:'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_size']); ?>
			&nbsp;
		</dd>
			<br>
		<dt><?php echo __('功率:'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_power']); ?>
			&nbsp;
		</dd>	<br>
		<dt><?php echo __('电压:'); ?></dt>
		<dd>	<br>
			<?php echo h($product['Product']['product_voltage']); ?>
			&nbsp;
		</dd>	<br>
		<dt><?php echo __('灯泡个数:'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_bulbnumber']); ?>
			&nbsp;
		</dd>	<br>
		<dt><?php echo __('创建时间:'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>	<br>
		<dt><?php echo __('Is Established'); ?></dt>
		<dd>
			<?php echo h($product['Product']['is_established']); ?>
			&nbsp;
		</dd>	<br>
				<dt><?php echo __('状态：'); ?></dt>
		<dd>
			<?php 
            if($product['Product']['status']==0)
            { echo "下架 	";
			echo $this->Html->link("商品上架",array('action'=>'productson',$product['Product']['id']));
}else
{echo "在架上 ";			 
echo $this->Html->link("商品下架",array('action'=>'productsoff',$product['Product']['id']));

}		//	echo h($product['Product']['status']); ?>
			&nbsp;   
		</dd>	<br>
		<dt><?php echo __('商店名称:'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Store']['name'], array('controller' => 'stores', 'action' => 'view', $product['Store']['id'])); ?>
			&nbsp;
		</dd>
		<dt>
		
		<h2><?php echo __('分类:'); ?></h2></dt>
		<dd>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
			&nbsp;
		</dd>
			<br>
		<dt><?php echo __('产品顺序:'); ?></dt>
		<dd>
			<?php echo h($product['Product']['order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Product Details');?></h3>
	<?php if (!empty($product['ProductDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
	</tr>
	<?php
			
		?>
	<?php
		$i = 0;
		
		foreach ($product['ProductDetail'] as $productDetail): ?>
		<tr>
		
		<?php
			$name=$this->requestAction(array('controller'=>'Details','action'=>'getName'),array('pass'=>array($productDetail['detail_id'])));
           echo $name[$productDetail['detail_id']];	 
	//	   print_r($productDetail);
     echo $this->Form->postLink(__('删除'), array('controller'=>'ProductDetails','action' => 'delete', $productDetail['id']), null, __('确定删除 # %s?', $productDetail['id'])); ?>	
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('添加商品细节'), array('controller' => 'product_details', 'action' => 'detailadd',$product['Product']['id']));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('商品图片');?></h3>
	<?php if (!empty($product['ProductSrc'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductSrc'] as $productSrc): ?>
     <?php
	 
	  echo $this->Html->image($productSrc['src'],array('alt'=>'picture'));
	echo $this->Form->postLink(__('删除'), array('controller' => 'product_srcs', 'action' => 'delete', $productSrc['id']), null, __('Are you sure you want to delete # %s?', $productSrc['id'])); 
	?>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('添加新图片'), array('controller' => 'product_srcs', 'action' => 'addnew',$product['Product']['id']));?> </li>
		</ul>
	</div>
</div>
