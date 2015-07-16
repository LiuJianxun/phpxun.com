{template:header}
<body class="{$type}">
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="roll_bottom"></div></div>
{template:navbar}
<div class="box">
<div class="main">

<div class="content">

<div id="tslide">
<ul>
{module:slide}
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

{foreach $articles as $article}

{if $article.IsTop}
{template:post-istop}
{else}
{template:post-multi}
{/if}

{/foreach}
<div class="page">
<span class="pagebar-previous"><a href="{$pagebar.prevbutton}">« 之后的文章</a></span><span class="page_text">{$name}<br /><<  向左走，向右走  >></span> <span class="pagebar-next"><a href="{$pagebar.nextbutton}">更早的文章 »</a></span>
</div>
</div>

<div class="sidebar">
{template:sidebar}
</div>

</div>
{template:footer}