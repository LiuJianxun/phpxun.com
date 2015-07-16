<div class="blog_list cate{$article.Category.ID} auth{$article.Author.ID}">
<div class="blog_list_main">
<div class="blog_list_title"><h3><a href="{$article.Url}" title="{$article.Title}">[置顶]{$article.Title}</a></h3></div>
<div class="blog_list_con">{$article.Intro}</div>
<div class="blog_list_info">发布:{$article.Author.Name} | <a href="{$article.Url}">查看全文</a> | 浏览({$article.ViewNums}) | 分类:<a href="{$article.Category.Url}">{$article.Category.Name}</a> | 评论({$article.CommNums}) |  {$article.Time('Y年m月d日')}</div>
</div>
<div class="blog_list_btm"></div>
</div>