<?php echo 'Theme by Jeaviking  http://www.jeavi.name';exit;?>

<script type="text/javascript" src="js/jquery.js"></script>

<style>
/*nav-main*/
.nav{overflow:visible;}

.nav-main{
    width: 100%;
    height: 100%;
    list-style-type: none;
}

.sub_menu_view{display: block;}	
	
.sub_menu_view{float:left;font-size: 15px;}

</style>


<div class="nav">
	<!--导航条-->
	<ul class="nav-main">
        <li><a href="" class="a" title="Portal">{lang Menu_portal}<span>{lang Menu_portal_English}</span></a></li>
		<li class="menu_view"><a href="" class="a" title="View">{lang Menu_view}<span>{lang Menu_view_English}</span></a</li>
		<li><a href="" class="a" title="Portal">{lang Menu_activities}<span>{lang Menu_activities_English}</span></a></li>
		<li class="menu_raiders"><a href="" class="a" title="Portal">{lang Menu_raiders}<span>{lang Menu_raiders_English}</span></a></li>
		<li><a href="" class="a" title="Portal">{lang Menu_fesitival}<span>{lang Menu_fesitival_English}</span></a></li>
		<li><a href="" class="a" title="Portal">{lang Menu_tourism}<span>{lang Menu_tourism_English}</span></a></li>
		<li class="menu_language"><a href="" class="a" title="Portal">{lang Menu_languages}<span>{lang Menu_languages_English}</span></a></li>
	</ul>	
	


	<!--弹出导航部分-->
	
	<div class="sub_menu_view" style="display: none">
		<ul  style="list-style:none;">
				<li><a class="a" href="">{lang Menu_portal}</a></li>
				<li><a class="a" href="">{lang Menu_portal}</a></li>
				<li><a class="a" href="">{lang Menu_portal}</a></li>
				<li><a class="a" href="">{lang Menu_portal}</a></li>
			</ul>
	</div>
	<div style="display: none">
		<ul class="sub_menu_activities" style="list-style: none;">
		<li><a class="b" href="">{lang Menu_portal}</a></li>
		<li><a class="b" href="">{lang Menu_portal}</a></li>
		</ul>
		
	</div>
	<div style="display: none">
		<ul class="sub_menu_language" style="list-style: none">
				<li><a class="b" href="">{lang Menu_portal}</a></li>
				<li><a class="b" href="">{lang Menu_portal}</a></li>
				<li><a class="b" href="">{lang Menu_portal}</a></li>
				<li><a class="b" href="">{lang Menu_portal}</a></li>
			</ul>
	</div>
	

</div>
