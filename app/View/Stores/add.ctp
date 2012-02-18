<h1><?php
    echo "添加商铺";
?></h1>
<hr></hr>
<div class="stores form">

<?php echo $this->Form->create('Store');?>
	<?php
		echo $this->Form->input('market_id',array('label'=>'市场:'));
		echo $this->Form->input('name',array('class'=>'inp-form','label'=>'商铺名称:'));
		echo $this->Form->input('store_url',array('class'=>'inp-form','label'=>'商铺URL:'));
		echo $this->Form->input('store_address',array('class'=>'inp-form','label'=>'商铺地址:'));
		echo $this->Form->input('store_boss',array('class'=>'inp-form','label'=>'商铺老板:'));
		echo $this->Form->input('store_mobile',array('class'=>'inp-form','label'=>'联系方式:'));
		echo $this->Form->input('description',array('class'=>'inp-form','label'=>'描述:'));
		echo $this->Form->input('service',array('class'=>'inp-form','label'=>'商铺服务:'));
	   ?>
    	
	
<?php echo $this->Form->end(__('添加'));?>
</div>
<?php
    echo $this->Html->Script("uploadify/swfobject");
    echo $this->Html->Script("uploadify/jquery.uploadify.v2.1.4.min");
?>
<script type="text/javascript">
var count=1;
$(document).ready(function(){ 
 	  $('#file_upload').uploadify({
	    'uploader' :'<?php echo $this->Html->url('/app/webroot/uploadify/uploadify.swf');?>',
	    'script'   :'<?php echo $this->Html->url('/app/webroot/uploadify/uploadify.php');?>',
	    'cancelImg':'<?php echo $this->Html->url('/app/webroot/uploadify/cancel.png');?>',
	    'folder'   :'<?php //echo $this->Html->url("/app/webroot/$dir/");?>',
		'multi'    :true,
		'auto'     :false,
		'onSelect' :function(e, queueId, fileObj){
	
		$child=$("<input type='hidden' value="+fileObj.name+" name=data[ProductSrc][src1]["+count+"]/>")
		$parent=$("#file_upload");
		$parent.append($child);
		count++;
		}
		
	  });
	});
	function uploadify()
	{
	$('#file_upload').uploadifyUpload();

	
	}
</script>