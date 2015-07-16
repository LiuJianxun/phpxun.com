<div class="side_list" id="<?php  echo $module->HtmlID;  ?>">
<?php if ((!$module->IsHideTitle)&&($module->Name)) { ?>
<div class="side_title"><h4><?php  echo $module->Name;  ?></h4></div>
<?php } ?>
<div class="side_con">
<?php if ($module->Type=='div') { ?>
<div><?php  echo $module->Content;  ?></div>
<?php } ?>
<?php if ($module->Type=='ul') { ?>
<ul><?php  echo $module->Content;  ?></ul>
<?php } ?>
</div>
</div>