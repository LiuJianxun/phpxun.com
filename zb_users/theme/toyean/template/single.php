{template:header}
<body class="{$type}">
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="roll_bottom"></div></div>
{template:navbar}
<div class="box">
<div class="main">
{if $article.Type==ZC_POST_TYPE_ARTICLE}
{template:post-single}
{else}
{template:post-page}
{/if}
</div>
{template:footer}