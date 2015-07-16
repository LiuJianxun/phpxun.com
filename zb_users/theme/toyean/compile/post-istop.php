<div class="blog_list cate<?php  echo $article->Category->ID;  ?> auth<?php  echo $article->Author->ID;  ?>">
<div class="blog_list_main">
<div class="blog_list_title"><h3><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>">[置顶]<?php  echo $article->Title;  ?></a></h3></div>
<div class="blog_list_con"><?php  echo $article->Intro;  ?></div>
<div class="blog_list_info">发布:<?php  echo $article->Author->Name;  ?> | <a href="<?php  echo $article->Url;  ?>">查看全文</a> | 浏览(<?php  echo $article->ViewNums;  ?>) | 分类:<a href="<?php  echo $article->Category->Url;  ?>"><?php  echo $article->Category->Name;  ?></a> | 评论(<?php  echo $article->CommNums;  ?>) |  <?php  echo $article->Time('Y年m月d日');  ?></div>
</div>
<div class="blog_list_btm"></div>
</div>