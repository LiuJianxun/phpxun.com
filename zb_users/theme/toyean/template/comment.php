<div id="cmt{$comment.ID}" class="toyean_coninfo">
<div class="toyean_headimg"><a target="_blank" rel="nofollow" href="{$comment.Author.HomePage}"><img class="avatar" src="{$comment.Author.Avatar}" alt="" width="32"/></a></div>
<div class="toyean_commentcon">
<div class="toyean_commentcontit"><h4>{$comment.Author.Name}</h4><span>评论于{$comment.Time()}</span></div>
<div class="toyean_commentcontent">
{$comment.Content}
{foreach $comment.Comments as $comment}
{template:comment}
{/foreach}
 - <a href="#comment" onclick="RevertComment('{$comment.ID}')">回复该评论</a></div>
</div>
</div>