<?php
 echo $this->Html->css("uploadify");
$name= $this->requestAction(array('controller'=>'stores','action'=>'getStoreName'),array('pass'=>array($id)));
print_r($name['Store']['store_url']);
$dir="uploads/".$name['Store']['store_url'];
if(file_exists($dir))
{
echo "success";
}
else 
mkdir($dir,0777);
?>
<div class="storeSrcs form">
<?php echo $this->Form->create('StoreSrc');?>
	<fieldset>
		<legend><?php echo __('Add Store Src'); ?></legend>
	<?php
		echo $this->Form->input('store_id');
		echo $this->Form->input('position_id');
		echo $this->Form->input('src',array('id'=>'file_upload','label'=>'商家图片:','type'=>'file'));
 	?>
	</fieldset>
	<input type="submit" onclick="uploadify()" />
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Store Srcs'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
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
	    'folder'   :'<?php echo $this->Html->url("/app/webroot/$dir/");?>',
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