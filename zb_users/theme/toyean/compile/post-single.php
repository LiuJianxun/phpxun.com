<div class="adbanner"><?php  echo $zbp->Config('toyean')->PostADS;  ?></div>
<div class="toyean_single cate<?php  echo $article->Category->ID;  ?> auth<?php  echo $article->Author->ID;  ?>">
<div class="toyean_top"></div>
<div class="toyean_conbox">
<div class="toyean_contitle"><h2><?php  echo $article->Title;  ?></h2><span class="toyean_date"><?php  echo $article->Time('Y-m-d');  ?></span> <span class="read_num">浏览:<?php  echo $article->ViewNums;  ?></span><div class="toyean_next"><img alt="<?php  echo $article->Title;  ?>" src="http://qr.liantu.com/api.php?&bg=ffffff&m=5&w=100&text=<?php  echo $article->Url;  ?>"></div>
<div class="toyean_confunction"><a href="#comment" class="toyean_commentlink"><span></span>评论:(<?php  echo $article->CommNums;  ?>)</a>
<!-- Share Button BEGIN -->
<?php  echo $zbp->Config('toyean')->PostSHARE;  ?>
<!-- Share Button END -->
</div>
</div>
<div class="toyean_content">
<?php  echo $article->Content;  ?>
</div>
<div class="toyean_confunction"><a href="#comment" class="toyean_commentlink"><span></span>评论:(<?php  echo $article->CommNums;  ?>)</a>
<!-- Share Button BEGIN -->
<?php  echo $zbp->Config('toyean')->PostSHARE;  ?>
<!-- Share Button END -->
</div>
<div class="toyean_coninfo">发布:<a href="<?php  echo $article->Author->Url;  ?>"><?php  echo $article->Author->Name;  ?></a> | 分类:<a href="<?php  echo $article->Category->Url;  ?>"><?php  echo $article->Category->Name;  ?></a> | Tags:<?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" title="<?php  echo $tag->Name;  ?>"><?php  echo $tag->Name;  ?></a> <?php }   ?></div>
<div class="toyean_related"><?php if ($article->Prev) { ?>
		<a class="l" href="<?php  echo $article->Prev->Url;  ?>" title="上一篇">上一篇：<?php  echo $article->Prev->Title;  ?></a>
	<?php } ?>
	<?php if ($article->Next) { ?>
		<a class="r" href="<?php  echo $article->Next->Url;  ?>" title="下一篇">下一篇：<?php  echo $article->Next->Title;  ?></a>
	<?php } ?></div>
</div>

<div class="toyean_comment">
<div class="toyean_coninfo"><h4>相关文章</h4></div>
<div class="toyean_mutuality">
	<?php  foreach ( GetList(10,null,null,null,null,null,array('is_related'=>$article->ID)) as $related) { ?>
	<p><a href="<?php  echo $related->Url;  ?>"><?php  echo $related->Title;  ?></a><span><?php  echo $related->Time('Y-m-d');  ?></span></p>
	<?php }   ?>
</div>
</div>

<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php } ?>

</div>


