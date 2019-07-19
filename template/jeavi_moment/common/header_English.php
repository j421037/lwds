<?php echo 'Theme by Jeaviking  http://www.jeavi.name';exit;?>
<style>
* nav */

.nav { width:700px; height: 60px;float:left; overflow:hidden;}
.nav ul{white-space: nowrap;}
.nav li {float: left; }
.nav li span{ display: block;position: relative;top: -100px;font-size: 12px;color: #999;}
.nav li a {overflow:hidden;display: inline; padding:0 15px;height: 60px;text-align: center;line-height:80px;font-size: 16px;color:#7E7D7D;display: block; float:left; text-decoration:none;}
.nav li a:hover, .nav li.hover a{color:{MENUHOVERTEXT};}
.nav li.hover a{ color:{ALLCOL};}

/* subnav */

.sub_nav .h_pop{ background:#FFF; background-color: rgba(254,254,253,.95);_background:#FFF;border:none;box-shadow:2px 2px 6px rgba(0,0,0,.2);min-width: 100px; padding:5px;}
.sub_nav .h_pop li a{ height:24px; line-height:24px; color:#828282; font-size:14px; border:none; border-radius:0!important;}
.sub_nav .h_pop li a:hover{  background-color:{ALLCOL}; color:#FFF;}
</style>

<script type="text/javascript">
function getCookie(name)//取cookies函数          
{  
    var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));  
    if(arr != null)  
        return unescape(arr[2]);   
       
    return null;  
}
</script>

