<script type="text/javascript">
function SetCookie( name, value)//两个参数，一个是cookie的名子，一个是值  
{  
    var Days = 1; //此 cookie 将被保存 1 天  
    var exp  = new Date();    //new Date("December 31, 9998");  
    exp.setTime(exp.getTime() + Days*24*60*60*1000);  
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString(); 
}  
function getCookie(name)//取cookies函数          
{  
    var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));  
    if(arr != null)  
        return unescape(arr[2]);   
       
    return null;  
  
}  
function delCookie(name)//删除cookie  
{  
    var exp = new Date();  
    exp.setTime(exp.getTime() - 1);  
    var cval=getCookie(name);  
    if(cval!=null) document.cookie= name + "="+cval+";expires="+exp.toGMTString();  
}

function set_menu(){
	if(getCookie('language')=='China'){
	var menu1="<ul id='css3menu1' class='topmenu'><li ><a id='menu_1' href='#' class='a'>{lang Menu_portal}</a><span>{lang Menu_portal_English}</span></li><li ><a href='#' class='a'>{lang Menu_view}</a></li><li ><a href='#' class='a'>{lang Menu_activities}</a></li><li ><a href='#' class='a'>{lang Menu_raiders}</a></li><li ><a href='#' class='a'>{lang Menu_tourism}</a></li></ul>";
	
	var target = document.getElementById('nav');
	target.innerHTML = menu1;
	alert(menu1);
	}
}

</script>