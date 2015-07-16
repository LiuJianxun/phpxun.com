<?php  include $this->GetTemplate('header');  ?>
<body class="<?php  echo $type;  ?>">
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="roll_bottom"></div></div>
<?php  include $this->GetTemplate('navbar');  ?>
<div class="box">
<div class="main">

<div class="content">

<div id="tslide">
<ul>
<?php  if(isset($modules['slide'])){echo $modules['slide']->Content;}  ?>
</ul>
</div>
<div class="blog_list_btm slide_btm"></div>
<script type="text/javascript">
$(function(){
	var tslide = new HtmlSlidePlayer("#tslide",{autosize:1,fontsize:12,time:3000});
	var slidenum = $(".slidebtn a").length;
	if(slidenum<2){
		$(".slidebtn").hide();
	}
	var $slidewidth = $(".slidebtn").width();
	$(".slidebtn").css("margin-left",-$slidewidth/2);
	var slidelinum = $("#tslide ul li").length;
	if(slidelinum==0){
		$("#tslide,.slide_btm").hide();
	}
	//页面载入中
	$(".blog_list_main .blog_list_title h3 a").click(function(){
		$(this).html("页面载入中... ...");	
	})
});
</script>

<?php  foreach ( $articles as $article) { ?>

<?php if ($article->IsTop) { ?>
<?php  include $this->GetTemplate('post-istop');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-multi');  ?>
<?php } ?>

<?php }   ?>
<div class="page">
<span class="pagebar-previous"><a href="<?php  echo $pagebar->prevbutton;  ?>">« 之后的文章</a></span><span class="page_text"><?php  echo $name;  ?><br /><<  向左走，向右走  >></span> <span class="pagebar-next"><a href="<?php  echo $pagebar->nextbutton;  ?>">更早的文章 »</a></span>
</div>
</div>

<div class="sidebar">
<?php  include $this->GetTemplate('sidebar');  ?>
</div>

</div>
<?php  include $this->GetTemplate('footer');  ?>