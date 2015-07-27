<div class="adbanner">{$zbp->Config('toyean')->PostADS}</div>
<div class="toyean_single cate{$article.Category.ID} auth{$article.Author.ID}">
<div class="toyean_top"></div>
<div class="toyean_conbox">
<div class="toyean_contitle"><h2>{$article.Title}</h2><span class="toyean_date">{$article.Time('Y-m-d')}</span> <span class="read_num">浏览:{$article.ViewNums}</span><div class="toyean_next"><img alt="{$article.Title}" src="http://www.phpxun.com/zb_users/upload/2015/07/phpxun.png"></div>
<div class="toyean_confunction"><a href="#comment" class="toyean_commentlink"><span></span>评论:({$article.CommNums})</a>
<!-- Share Button BEGIN -->
{$zbp->Config('toyean')->PostSHARE}
<!-- Share Button END -->
</div>
</div>
<div class="toyean_content">
{$article.Content}
</div>
<div class="toyean_confunction"><a href="#comment" class="toyean_commentlink"><span></span>评论:({$article.CommNums})</a>
<!-- Share Button BEGIN -->
{$zbp->Config('toyean')->PostSHARE}
<!-- Share Button END -->
</div>
<div class="toyean_coninfo">发布:<a href="{$article.Author.Url}">{$article.Author.Name}</a> | 分类:<a href="{$article.Category.Url}">{$article.Category.Name}</a> | Tags:{foreach $article.Tags as $tag}<a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}</a> {/foreach}</div>
<div class="toyean_related">{if $article.Prev}
		<a class="l" href="{$article.Prev.Url}" title="上一篇">上一篇：{$article.Prev.Title}</a>
	{/if}
	{if $article.Next}
		<a class="r" href="{$article.Next.Url}" title="下一篇">下一篇：{$article.Next.Title}</a>
	{/if}</div>
</div>

<div class="toyean_comment">
<div class="toyean_coninfo"><h4>相关文章</h4></div>
<div class="toyean_mutuality">
	{foreach GetList(10,null,null,null,null,null,array('is_related'=>$article.ID)) as $related}
	<p><a href="{$related.Url}">{$related.Title}</a><span>{$related.Time('Y-m-d')}</span></p>
	{/foreach}
</div>
</div>

{if !$article.IsLock}
{template:comments}
{/if}

</div>


