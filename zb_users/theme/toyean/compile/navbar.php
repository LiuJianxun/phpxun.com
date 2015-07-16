<div class="header">

<div class="nav_bar">
<div class="logo"><h1><a href="<?php  echo $host;  ?>" title="<?php  echo $subname;  ?>"><?php  echo $name;  ?></a></h1></div>
<div class="nav"><ul><?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?></ul></div>
<div class="nav_float">
<!--
<div class="guanzhu"><?php  echo $zbp->Config('toyean')->PostBLOG;  ?></div>
-->
<div class="search"><form method="post" name="search" action="<?php  echo $host;  ?>zb_system/cmd.php?act=search"><input type="text" name="q" speech x-webkit-speech  class="txt" /><input type="submit" value="" class="btn" /></form></div>
</div>
</div>

</div>