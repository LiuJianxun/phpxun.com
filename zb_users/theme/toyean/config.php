<?php
$DEFALUT_FLASH="5qyi6L+O5L2/55So5ouT5rqQWkJQ5Li76aKYdG95ZWFuIXx6Yl91c2Vycy90aGVtZS90b3llYW4vc3R5bGUvaW1hZ2VzL3NsaWRlLmpwZ3xodHRwOi8vd3d3LnRveWVhbi5jb20v";
$toyean_Table='%pre%toyean';
$toyean_DataInfo=array(
	'ID'=>array('t_ID','integer','',0),
	'Type'=>array('t_Type','integer','',0),
	'Title'=>array('t_Title','string',255,''),
	'Url'=>array('t_Url','string',255,''),
	'Img'=>array('t_Img','string',255,''),
	'Order'=>array('t_Order','integer','',99),
	'Code'=>array('t_Code','string',255,''),
	'IsUsed'=>array('t_IsUsed','boolean','',true),
	'Intro'=>array('t_Intro','string',255,''),
	'Addtime'=>array('t_Addtime','integer','',0),
	'Endtime'=>array('t_Endtime','integer','',0),
);
$toyean_Default_Data = array('new','hot','comm','rand');

function toyean_SubMenu($id){
	$arySubMenu = array(
		0 => array('网站设置', 'base', 'left', false),
		1 => array('幻灯设置', 'flash', 'left', false),
	);
	foreach($arySubMenu as $k => $v){
		echo '<a href="?act='.$v[1].'"><span class="m-'.$v[2].' '.($id==$v[1]?'m-now':'').'">'.$v[0].'</span></a>';
	}
}

function toyean_Get_Flash($toyean_Table,$toyean_DataInfo){
	global $zbp;
	$where = array(array('=','t_Type','0'),array('=','t_IsUsed','1'));
	$order = array('t_IsUsed'=>'DESC','t_Order'=>'ASC');
	$sql= $zbp->db->sql->Select($toyean_Table,'*',$where,$order,null,null);
	$array=$zbp->GetListCustom($toyean_Table,$toyean_DataInfo,$sql);
	$str = "";
	foreach ($array as $key => $reg) {
		$str .= "<li><a href='".$reg->Url."' target='_blank'><img alt='".$reg->Title."' src='".$reg->Img."' /></a></li>";
	}
	@file_put_contents($zbp->usersdir . 'theme/toyean/include/slide.php', $str);
}



function toyean_Get_Content($str){
	global $zbp;
	$strContent = @file_get_contents($zbp->usersdir . $str);
	echo $strContent;
}
?>