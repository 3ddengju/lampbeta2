<div id='postform'>
<h1>发布新品</h1>
<hr></hr>
<br>
<div class="products form">
<div id="step-holder">
<div class="step-no">1</div>
<div class="step-dark-left">
<a href="">基本信息</a>
</div>
<div class="step-dark-right">&nbsp;</div>
<div class="step-no-off">2</div>
<div class="step-light-left">添加细节</div>
<div class="step-light-right">&nbsp;</div>
<div class="step-no-off">3</div>
<div class="step-light-left">添加图片</div>
<div class="step-light-round">&nbsp;</div>
<div class="clear"></div>
</div>
<?php echo $this->Ajax->form(array('type'=>'post',
                  'options'=>array('model'=>'Product',
									'update'=>'postform',
									'url'=>array('controller'=>'Products','action'=>'add'),
									'conform'=>'R U sure?'
									)));?>
									
	<?php
		echo $this->Form->input('name',array('class'=>'inp-form','label'=>'产品名称：'));
		echo $this->Form->input('product_size',array('class'=>'inp-form','label'=>"产品尺寸："));
		echo $this->Form->input('product_power',array('class'=>'inp-form','label'=>"功率："));
		echo $this->Form->input('product_voltage',array('class'=>'inp-form','label'=>"电压："));
		echo $this->Form->input('product_bulbnumber',array('class'=>'inp-form','label'=>"灯泡个数："));
//echo $this->Form->input('is_established');
		echo $this->Form->input('store_id',array('class'=>'styledselect_form_1','label'=>"商店：",'empty'=>'（请选择....）'));
		echo $this->Form->input('category_id',array('class'=>'styledselect_form_1','label'=>"产品目录："));
		
		$options=array('0'=>'下架',1=>'上架');
		
		echo $this->Form->input('status',array('class'=>'styledselect_form_1','label'=>"上下架:",'options'=>$options));
		//print_r($stores);
		echo $this->Form->input('order',array('type'=>'hidden'));
		echo $this->Form->input('description',array('label'=>"商品描述："));
	?>
	<input type="submit"  class="form-submit" value="下一步"/>
</div>
</div>
<?php
    echo $this->Ajax->observeField('ProductStoreId',
	array(
	  'url'=>array('controller'=>'Products','action'=>'getmaxnumber'),
	  'complete'=>"$('#ProductOrder').val(request.responseText)"
	)
	);
?>
