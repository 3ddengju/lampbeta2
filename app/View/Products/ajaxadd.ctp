
	Hello test <br><br>
	
<div id='posttest'>
<?php echo $this->Ajax->form(array('type'=>'post',
                  'options'=>array('model'=>'Product',
									'update'=>'posttest',
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
		echo $this->Form->input('store_id',array('class'=>'styledselect_form_1','label'=>"商店："));
		echo $this->Form->input('category_id',array('class'=>'styledselect_form_1','label'=>"产品目录："));
		echo $this->Form->input('order',array('class'=>'inp-form','label'=>"商店序号："));
		echo $this->Form->input('description',array('label'=>"商品描述："));
	?>
	<input type="submit"  class="form-submit" value="下一步"/>
</div>

	                                 								   


