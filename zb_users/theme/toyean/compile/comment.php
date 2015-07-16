<div id="cmt<?php  echo $comment->ID;  ?>" class="toyean_coninfo">
<div class="toyean_headimg"><a target="_blank" rel="nofollow" href="<?php  echo $comment->Author->HomePage;  ?>"><img class="avatar" src="<?php  echo $comment->Author->Avatar;  ?>" alt="" width="32"/></a></div>
<div class="toyean_commentcon">
<div class="toyean_commentcontit"><h4><?php  echo $comment->Author->Name;  ?></h4><span>评论于<?php  echo $comment->Time();  ?></span></div>
<div class="toyean_commentcontent">
<?php  echo $comment->Content;  ?>
<?php  foreach ( $comment->Comments as $comment) { ?>
<?php  include $this->GetTemplate('comment');  ?>
<?php }   ?>
 - <a href="#comment" onclick="RevertComment('<?php  echo $comment->ID;  ?>')">回复该评论</a></div>
</div>
</div>