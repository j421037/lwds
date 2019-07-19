
var lan=getCookie('language');
target=document.getElementById('tj');
alert(target);
if(lan=='China')
{target.innerHTML="推荐景点"}
if(lan=='English')
{target.innerHTML="Recommended scenic spots"}
if(lan=='Japan')
{target.innerHTML="推薦スポット"}
if(lan=='Korea')
{target.innerHTML="여행지 추천"}

var lan=getCookie('language');
target=document.getElementById('more');
alert(target);
if(lan=='China')
{target.innerHTML="更多"}
if(lan=='English')
{target.innerHTML="More"}
if(lan=='Japan')
{target.innerHTML="もっと"}
if(lan=='Korea')
{target.innerHTML="더"}
