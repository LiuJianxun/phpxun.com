<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('toyean')) {$zbp->ShowError(48);die();}

if($_GET['type'] == 'flash' ){
	global $zbp;
	
	if(!$_POST["title"] or !$_POST["img"] or !$_POST["url"]){
		$zbp->SetHint('bad','标题或图片或链接不能为空');
		Redirect('./main.php?act=flash');
		exit();
	}
	
	$DataArr = array(
		't_Title'=>$_POST["title"],
		't_Img'=>$_POST["img"],
		't_Url'=>$_POST["url"],
		't_Order'=>$_POST["order"],
		't_IsUsed'=>$_POST["IsUsed"]
	);

	if($_POST["editid"]){
		$where = array(array('=','t_ID',$_POST["editid"]));
		$sql= $zbp->db->sql->Update($toyean_Table,$DataArr,$where);
		$zbp->db->Update($sql);
	}else{
		$sql= $zbp->db->sql->Insert($toyean_Table,$DataArr);
		$zbp->db->Insert($sql);
	}
	toyean_Get_Flash($toyean_Table,$toyean_DataInfo);
	$zbp->SetHint('good','幻灯保存成功');
	Redirect('./main.php?act=flash');
}

if($_GET['type'] == 'flashdel' ){
	global $zbp;
	$where = array(array('=','t_ID',$_GET['id']));
	$sql= $zbp->db->sql->Delete($toyean_Table,$where);
	$zbp->db->Delete($sql);
	toyean_Get_Flash($toyean_Table,$toyean_DataInfo);
	$zbp->SetHint('good','删除成功');
	Redirect('./main.php?act=flash');
}


?>