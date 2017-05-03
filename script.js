$(window).load( function(){

	setInterval(blinker, 1000);

});

$(document).ready( function(){

		SameHeight();




		    $('#test-click-hola').click(function(){

					var ajaxpagination = {"ajaxurl":"http:\/\/wordpress.local\/wp-admin\/admin-ajax.php"};

		           $.ajax({
		               url: ajaxpagination.ajaxurl,
		               type: 'post',
		               data: {
										 	action:'ajax_pagination'
		               },
		               success: function(response){
		                  console.log(response);
		               }
		           })

		    });


				lightsliderTest();
				
			
$("body").on("click",".morePost",function(){
	//mostrar cargando
	console.log("click clicka");
	$.post(urlBase+"/ajax/",{offset:postOffset,category:postCategory},function(data){
	//quitar cargando
	data=data.replace(/\r?\n|\r/g,"").replace(/\t/g,'');
	
	data= $(data.trim());
	
  $blocks.append( data );
  SameHeight();
    $blocks.masonry( 'appended', data );
	
	});
	//if data=="" --> quitar boton de cargar más post
	postOffset+=10;
});

});

$(window).bind('load', function()
{

	setTimeout(function () {
			$(".loading-screen").fadeOut();
			$(".loading-screen p").remove();
	}, 500);

});


function blinker() {
    $(".loading-screen p").fadeOut(500);
    $('.loading-screen p').fadeIn(500);
}



function SameHeight(){
  //console.log("entra same height");

  var auxId=1;
  while($( "[hid="+auxId+"]" ).length||auxId<20){
    var hidHeight=0;
    //ResetHeight();
    $("[hid="+auxId+"]").each(function(){
      if($(this).innerHeight()>hidHeight){
        hidHeight= $(this).innerHeight();
      }

    });
    //console.log(hidHeight);
    $("[hid="+auxId+"]").css("height",hidHeight+"px");
    auxId++;
  }
}


function ResetHeight(){
  var id=1;
  while($( "[hid="+id+"]" ).length||id<20){

    $("[hid="+id+"]").css("height","auto");
    id++;
}
}

function lightsliderTest(){

    $("#lightSlider").lightSlider({
        item: 2,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 20,

        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////

        speed: 1000, //ms'
        auto: true,
        loop: true,
        slideEndAnimation:false,
        pause: 2000,

        keyPress: false,
        controls: true,
        prevHtml: '',
        nextHtml: '',

        rtl:false,
        adaptiveHeight:false,

        vertical:false,
        verticalHeight:500,
        vThumbWidth:100,

        thumbItem:10,
        pager: true,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: 'middle',

        enableTouch:false,
        enableDrag:false,
        freeMove:true,
        swipeThreshold: 40,

        responsive : [],

        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {}
    });
	
	





}


	var postOffset=10;
var postCategory=0;
