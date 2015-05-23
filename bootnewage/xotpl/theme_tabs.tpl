<!-- the tabs -->
<ul id="tabNav" class="nav nav-tabs">
	<li class="active" role="presentation"><a href="#" title="<{$smarty.const._AM_SYSTEM_HELP}>" data-toggle="tab"><i class="glyphicon glyphicon-earphone"></i></a></li>
	<li role="presentation"><a href="#" title="<{block id=4 display='title'}>" data-toggle="tab"><i class="glyphicon glyphicon-time"></i></a></li>
	<li role="presentation"><a href="#" title="<{block id=9 display='title'}>" data-toggle="tab"><i class="glyphicon glyphicon-edit"></i></a></li>
	<li role="presentation"><a href="#" title="<{block id=8 display='title'}>" data-toggle="tab"><i class="glyphicon glyphicon-user"></i></a></li>
	<li role="presentation"><a href="#" title="<{block id=10 display='title'}>" data-toggle="tab"><i class="glyphicon glyphicon-comment"></i></a></li>
</ul>
<!-- tab "panes" -->
<div id="tabContent" class="panes">
	<div>
		<div class="help">
			<a href="#" ><{$smarty.const._OXYGEN_HELP_1}></a>
			<p><{$smarty.const._OXYGEN_HELP_DESC_1}></p>
		</div>
		<div class="help">
			<a href="#" ><{$smarty.const._OXYGEN_HELP_2}></a>
			<p><{$smarty.const._OXYGEN_HELP_DESC_2}></p>
		</div>
		<div class="help">
			<a href="#" ><{$smarty.const._OXYGEN_HELP_3}></a>
			<p><{$smarty.const._OXYGEN_HELP_DESC_3}></p>
		</div>
	</div>
	<div><{block id=4}></div>
	<div><{block id=9}></div>
	<div><{block id=8}></div>
	<div><{block id=10}></div>
</div>