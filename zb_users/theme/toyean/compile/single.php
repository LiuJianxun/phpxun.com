<?php  include $this->GetTemplate('header');  ?>
<body class="<?php  echo $type;  ?>">
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="roll_bottom"></div></div>
<?php  include $this->GetTemplate('navbar');  ?>
<div class="box">
<div class="main">
<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
<?php  include $this->GetTemplate('post-single');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-page');  ?>
<?php } ?>
</div>
<?php  include $this->GetTemplate('footer');  ?>