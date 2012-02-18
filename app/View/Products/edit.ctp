<div class="products form">
<?php echo $this->Form->create('Product');?>
	
		<h1><?php echo __('修改产品'); ?></h1>
		<hr></hr>
	<?php
			echo $this->Form->input('name',array('class'=>'inp-form','label'=>'产品名称：'));
		echo $this->Form->input('product_size',array('class'=>'inp-form','label'=>"产品尺寸："));
		echo $this->Form->input('product_power',array('class'=>'inp-form','label'=>"功率："));
		echo $this->Form->input('product_voltage',array('class'=>'inp-form','label'=>"电压："));
		echo $this->Form->input('product_bulbnumber',array('class'=>'inp-form','label'=>"灯泡个数："));
//echo $this->Form->input('is_established');
		echo $this->Form->input('store_id',array('class'=>'styledselect_form_1','label'=>"商店："));
		echo $this->Form->input('category_id',array('class'=>'styledselect_form_1','label'=>"产品目录："));
		echo $this->Form->input('description',array('label'=>"商品描述："));
	?>
<h1>细节修改</h1>
<hr></hr>
	 <?php	 
	   echo $this->Form->input('product_id',array('value'=>$productid,'type'=>'hidden'));
		$names=$this->requestAction(array('controller'=>'classifications','action'=>'getname')); 
		$number=$this->requestAction(array('controller'=>'classifications','action'=>'getnumber'));
		$options=$this->requestAction(array('controller'=>'details','action'=>'lists'));
	 for($i=1;$i<=$number;$i++)
{      
echo "<fieldset>
     <legend>".$names[$i]."</legend>";
	
	$optioned=$this->requestAction(array('controller'=>'ProductDetails','action'=>'getselected'),array('pass'=>array($productid)));
	echo @$this->Form->input('classification_'.$i,array('options'=>$options[$i],'multiple'=>'checkbox','type'=>'select','label'=>'','class'=>'chooseitem',
     'selected'=>$optioned	
	));
    echo "</fieldset>";
}
?>
<?php echo $this->Form->end(__('Submit'));?>

<br/>
<h1>图片略缩图</h1>
<hr></hr>	
		<?php
		
		$productsrc=$this->requestAction(array('controller'=>'ProductSrcs','action'=>'getsrcs'),array('pass'=>array($productid)));
   // print_r($productsrc);	
		foreach ($productsrc as $key =>$value): ?>
    <?php 
	  echo $this->Html->image($value,array('alt'=>'picture','width'=>'200','height'=>'300'));
	echo $this->Form->postLink(__('删除'), array('controller' => 'product_srcs', 'action' => 'delete', $key), null, __('Are you sure you want to delete # %s?', $key)); 
	?>
	<?php endforeach; ?>
	
<br>
<?php echo $this->Html->link(__('添加新图片'), array('controller' => 'product_srcs', 'action' => 'addnew',$productid));?>
</div>
