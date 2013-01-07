  /**
  * scrolling the page in the home section to the next/previeus post.
  * each scroll moves the margin-top position in 470px.
  * varskey: "+", scrolling to the next post.
  * varskey: "-", scrolling to the previeus post.
  */
	function scroller(operator){
		if(operator=="-" || operator=="+"){
      		$(".header-widget-contnet .left-side").animate({"marginTop": operator+ "=470px"}, "500");
      		$(".header-widget-contnet .right-side").animate({"marginTop": operator+ "=470px"}, "500");
      	}
	}

  $("a.scroll-up").click( function(){
  	scroller("-");
  });
  $("a.scroll-down").click( function(){
  	scroller("+");
  });
