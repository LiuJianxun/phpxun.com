<div class="side_list" id="{$module.HtmlID}">
{if (!$module.IsHideTitle)&&($module.Name)}
<div class="side_title"><h4>{$module.Name}</h4></div>
{/if}
<div class="side_con">
{if $module.Type=='div'}
<div>{$module.Content}</div>
{/if}
{if $module.Type=='ul'}
<ul>{$module.Content}</ul>
{/if}
</div>
</div>