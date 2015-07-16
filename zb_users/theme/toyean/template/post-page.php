<div class="adbanner">{$zbp->Config('toyean')->PostADS}</div>
<div class="toyean_single">
<div class="toyean_top"></div>
<div class="toyean_conbox">
<div class="toyean_contitle"><h2>{$article.Title}</h2></div>
<div class="toyean_content">
{$article.Content}
</div>
</div>
{if !$article.IsLock}
{template:comments}
{/if}

</div>


