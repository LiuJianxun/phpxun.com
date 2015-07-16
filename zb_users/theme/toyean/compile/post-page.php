<div class="adbanner"><?php  echo $zbp->Config('toyean')->PostADS;  ?></div>
<div class="toyean_single">
<div class="toyean_top"></div>
<div class="toyean_conbox">
<div class="toyean_contitle"><h2><?php  echo $article->Title;  ?></h2></div>
<div class="toyean_content">
<?php  echo $article->Content;  ?>
</div>
</div>
<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php } ?>

</div>


