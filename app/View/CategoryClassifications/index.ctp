<h1>大分类：</h1>
<?php

$name=$this->requestAction(array('controller'=>'categories','action'=>'getList'));
foreach($name as $key=>$result)
{
  echo $this->Html->link("$result",array('action'=>'homepage',$key));
  echo " | ";
}

?>