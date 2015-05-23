			<!-- column 2 -->	
			<h3><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h3>              
			<hr />
			<div class="row">				
				<!-- center left-->	
				<div class="col-md-12">
					<{if $xo_sys_breadcrumb}>
						<div class="row">
							<div class="col-lg-12">						
								<ul class="breadcrumb">							
								<{foreach item=item from=$xo_sys_breadcrumb}>
									<li><{if $item.link}><a href="<{$item.link}>" title="<{$item.title}>"><{$item.title}></a><{else}><{$item.title}><{/if}></li>								
								<{/foreach}>
								</ul>					
							</div>
						</div><{* /.row <hr /> *}>						
					<{/if}> 					            
					<{if $xoops_contents && $admin_warnings_enable !== false}>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">						
								<div class="panel-body">                                
									<{* Display Admin menu *}>
									<{if $xo_system_menu}><{$xo_system_menu}><{/if}>
									<{$xoops_contents}>
								</div>
							</div>
						</div>
					</div><{* /.row *}>
					<hr />
					<{/if}>
					<{if $modules}>
					<div class="row">
						<div class="col-lg-9">
							<div class="panel panel-default">						
								<div class="panel-body">
									<{includeq file="$theme_tpl/theme_modules.tpl"}>
								</div>
							</div>
						</div>
						<!--center-right-->
						<div class="col-md-3">
							<{includeq file="$theme_tpl/theme_tabs.tpl"}>
						<hr />
							<{includeq file="$theme_tpl/theme_accordion.tpl"}>					
						</div><!--/col-->
					</div><{* /.row *}><hr />
					<{/if}>										
				</div><!--/col-span-12-->
			</div><!--/row-->