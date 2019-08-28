var flag=1;
jjq('#rightArrow').click(function(){
	if(flag==1){
		jjq("#floatDivBoxs").animate({right: '-175px'},300);
		jjq(this).animate({right: '-5px'},300);
		jjq(this).css('background-position','-50px 0');
		flag=0;
	}else{
		jjq("#floatDivBoxs").animate({right: '0'},300);
		jjq(this).animate({right: '170px'},300);
		jjq(this).css('background-position','0px 0');
		flag=1;
	}
});