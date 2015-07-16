{if $socialcomment}
{$socialcomment}
{else}

{if $article.CommNums>0}
<div class="toyean_comment">
<div class="comment_title">
	<h4>评论列表:</h4>
</div>
</div>
{/if}

<label id="AjaxCommentBegin"></label>
<!--评论输出-->
{foreach $comments as $key => $comment}
{template:comment}
{/foreach}

<!--评论翻页条输出-->
<div class="pagebar commentpagebar">
{template:pagebar}
</div>
<label id="AjaxCommentEnd"></label>

<!--评论框-->
{template:commentpost}

{/if}