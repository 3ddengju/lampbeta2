<h1>上传图片</h1>
<hr></hr>
<br>
<div class="products form">
<div id="step-holder">
<div class="step-no-off">1</div>
<div class="step-light-left">
<a href="">基本信息</a>
</div>
<div class="step-light-right">&nbsp;</div>
<div class="step-no-off">2</div>
<div class="step-light-left">添加细节</div>
<div class="step-light-right">&nbsp;</div>
<div class="step-no">3</div>
<div class="step-dark-left">添加图片</div>
<div class="clear"></div>
</div>
<?php
 echo $this->Html->css("uploadify");
$name= $this->requestAction(array('controller'=>'stores','action'=>'getStoreName'),array('pass'=>array($id)));
//print_r($name['Store']['store_url']);
$dir="uploads/".$name['Store']['store_url'];
if(file_exists($dir))
{
//echo "success";
}
else 
mkdir($dir,0777);
?>
<?php
    echo $this->Html->Script("uploadify/swfobject");
    echo $this->Html->Script("uploadify/jquery.uploadify.v2.1.4.min");
?>
<script type="text/javascript">
var count=1;
var random=Math.ceil(10000000*Math.random());
$(document).ready(function(){ 
 	  $('#file_upload').uploadify({
	    'uploader' :'<?php echo $this->Html->url('/app/webroot/uploadify/uploadify.swf');?>',
	    'script'   :'<?php echo $this->Html->url(array('controller'=>'ProductSrcs','action'=>'savesrcs',$id));?>',
	    'cancelImg':'<?php echo $this->Html->url('/app/webroot/uploadify/cancel.png');?>',
	    'folder'   :'<?php echo $this->Html->url("/app/webroot/img/$dir/");?>',
		'multi'    :true,
		'auto'     :false,
		'scriptData':{'fid':random},
		'onSelect' :function(e, queueId, fileObj){
		fileObj.name=random+fileObj.name;
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
<div class="productPics form">
<?php echo $this->Form->create('ProductSrc',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('添加图片'); ?></legend>
		<?php	
		echo $this->Form->input('store_url',array('type'=>'hidden','value'=>$dir."/"));
		echo $this->Form->input('product_id',array('value'=>$id,'type'=>'hidden'));
		echo $this->Form->input('position_id',array('label'=>'添加位置：'));
		echo $this->Form->input('src',array('type'=>'file','id'=>'file_upload','label'=>'图片:'));
         	
	?>
	</fieldset>
	
	<input type="button" value="提交" onclick="uploadify();"/>
</div>
	