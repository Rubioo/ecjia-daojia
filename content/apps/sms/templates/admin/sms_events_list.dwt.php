<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.admin.sms_events_list.init();
</script>
<!-- {/block} -->

<!-- {block name="main_content"} -->
<div>
	<h3 class="heading">
		<!-- {if $ur_here}{$ur_here}{/if} -->
		{if $action_link} 
		<a class="btn plus_or_reply data-pjax" href="{$action_link.href}" id="sticky_a"><i class="fontello-icon-reply"></i>{$action_link.text}</a>
		{/if}
		<a class="all_close plus_or_reply" data-msg="您确定要关闭全部短信事件吗？" data-href='{url path="sms/admin_events/all_close"}'><button class="btn" type="button">全部关闭</button></a>     
	    <a class="all_open plus_or_reply"  data-msg="您确定要开启全部短信事件吗？" data-href='{url path="sms/admin_events/all_open"}'><button class="btn btn-gebo" type="button">全部开启</button></a>     
	</h3>
</div>

<div class="row-fluid search_page">
	<div class="span12">
         <div class="search_panel clearfix">
		   <!-- {foreach from=$data item=val} -->
           	 <div class="search_item clearfix">
           	  	<div class="pull-right">
	                <a class="change_status" style="cursor: pointer;"  data-msg="{if $val.status eq 'open'}您确定要关闭该短信事件吗？{else}您确定要开启该短信事件吗？{/if}" data-href='{if $val.status eq "open"}{url path="sms/admin_events/close" args="code={$val.code}&id={$val.id}"}{else}{url path="sms/admin_events/open" args="code={$val.code}&id={$val.id}"}{/if}' >
                       {if $val.status eq 'open'}
                       <button class="btn" type="button" style="margin-top: 20px;">点击关闭</button>  
                       {else}
                       <button class="btn btn-gebo" type="button" style="margin-top: 20px;">点击开启</button> 
                       {/if}
	                </a>        
                </div>
                
                <div class="search_content" style="padding-left: 0px;">
                    <h4>
                        <a class="sepV_a" style="text-decoration:none;">{$val.name}</a>{if $val.status eq 'open'}<span class="label label-info">开启中</span>{else}<span class="label">已关闭</span>{/if}    
                    </h4>
                    <p class="sepH_a"><strong>{$val.code}</strong></p>
                    <p class="sepH_b item_description">{$val.description}</p>
                </div>
                
             </div>
         <!-- {/foreach} -->  
        </div>
	</div>
</div>
<!-- {/block} -->