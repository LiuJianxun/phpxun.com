<div class="toyean_comment" id="comment">
<div class="comment_title"><h4>{if $user.ID>0}{$user.Name}{/if}发表评论:</h4></div>
<div class="comment_form">
<form id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}" >
	<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
{if $user.ID>0}
	<input type="hidden" name="inpName" id="inpName" value="{$user.Name}" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />	
{else}
<div>
<label for="inpName">名称(*)</label>
<input type="text" name="inpName" id="inpName" class="textbox" value="{$user.Name}" tabindex="1" />
<label for="inpEmail">邮箱</label>
<input type="text" name="inpEmail" id="inpEmail" class="textbox" value="{$user.Email}" tabindex="2" />
</div>
<div>
<label for="inpHomePage">网址</label>
<input type="text" name="inpHomePage" id="inpHomePage" class="textbox" value="{$user.HomePage}" tabindex="3" />
{if $option['ZC_COMMENT_VERIFY_ENABLE']}
<label for="inpVerify">验证码(*)</label><input type="text" name="inpVerify" id="inpVerify" class="textcode" value="" size="28" tabindex="4" /><img src="{$article.ValidCodeUrl}" alt="" title="看不清，换一张" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();" class="imgcode" />
{/if}
</div>
{/if}

<div><label for="txaArticle">正文(*)</label>
<textarea name="txaArticle" id="txaArticle" onchange="GetActiveText(this.id);" onclick="GetActiveText(this.id);" onfocus="GetActiveText(this.id);" rows="5" class="textbox" tabindex="5"></textarea>
</div>
<div><input type="button" name="btnSumbit" value="提交" onclick="return VerifyMessage()" class="submit_btn" tabindex="6" /><span><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;"><small>取消回复</small></a></span></div>
</form>
<div class="comment_label"><div>◎欢迎参与讨论，请在这里发表您的看法、交流您的观点。</div></div>
<script language="JavaScript" type="text/javascript">
var txaArticle = document.getElementById('txaArticle');
txaArticle.onkeydown = function quickSubmit(e) {
if (!e) var e = window.event;
if (e.ctrlKey && e.keyCode == 13){
return VerifyMessage();
}
}
</script>
</div>
</div>