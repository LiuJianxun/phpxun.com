<?php
include 'config.php';
RegisterPlugin("toyean","ActivePlugin_toyean");

function ActivePlugin_toyean(){
	Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','toyean_AddMenu');
}

function toyean_AddMenu(&$m){
	global $zbp;
	array_unshift($m, MakeTopMenu("root",'主题配置',$zbp->host . "zb_users/theme/toyean/main.php?act=base","","topmenu_toyean"));
}

function InstallPlugin_toyean(){
	global $zbp;
	if(!$zbp->Config('toyean')->HasKey('Version')){
		$zbp->Config('toyean')->Version = '1.0';
		$zbp->Config('toyean')->PostBLOG = '<iframe width="125" height="24" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" scrolling="no" border="0" src="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&width=136&height=24&uid=1787516913&style=2&btn=red&dpc=1"></iframe>';
		$zbp->Config('toyean')->PostADS = '<a href="http://www.toyean.com/" target="_blank"><img src="/zb_users/theme/toyean/style/images/ads.jpg" /></a>';
		$zbp->Config('toyean')->PostSHARE = '<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
<a class="bds_qzone">QQ空间</a>
<a class="bds_tsina">新浪微博</a>
<a class="bds_tqq">腾讯微博</a>
<a class="bds_renren">人人网</a>
<a class="bds_t163">网易微博</a>
<span class="bds_more">更多</span>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=738551" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>';
		$zbp->SaveConfig('toyean');
		toyean_CreateTable();
		toyean_DefaultCode();
	}
}

function toyean_CreateTable(){
	global $zbp;
	$s=$zbp->db->sql->CreateTable($GLOBALS['toyean_Table'],$GLOBALS['toyean_DataInfo']);
	$zbp->db->QueryMulit($s);
}

function toyean_DefaultCode(){
	global $zbp;
	$Arr_DF = explode('|',base64_decode($GLOBALS['DEFALUT_FLASH']));
	$r = new Base($GLOBALS['toyean_Table'],$GLOBALS['toyean_DataInfo']);
	$r->Title=$Arr_DF[0];
	$r->Img=$Arr_DF[1];
	$r->Url=$Arr_DF[2];
	$r->Save();
	$s = new Base($GLOBALS['toyean_Table'],$GLOBALS['toyean_DataInfo']);
	$s->Type=99;
	$s->Code='';
	$s->Save();
}


function UninstallPlugin_toyean(){
	global $zbp;
	toyean_EmptyCode();
	$zbp->DelConfig('toyean');
}

function toyean_EmptyCode(){
	global $zbp;
	$s=$zbp->db->sql->Delete($GLOBALS['toyean_Table'],'');
	$zbp->db->QueryMulit($s);
}
?>