$(window).load( function(){

	// setInterval(tipear(), 1000);

	tipear();

});

$(document).ready( function(){

	change_class();

		SameHeight();
		unic_height();



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
	// $(".morePost").toggleClass( "bg-gif" );

	$(".morePost").fadeOut("400", function(){});
$(".load-post").fadeIn();
	console.log("click clicka");

	$.post(urlBase+"/ajax/",{offset:postOffset,category:postCategory},function(data){
		$("img.load-post").fadeOut();
		$(".morePost").fadeIn();


	data=data.replace(/\r?\n|\r/g,"").replace(/\t/g,'');

	data= $(data.trim());
	console.log(data);

  $blocks.append( data );
  SameHeight();
    $blocks.masonry( 'appended', data );
	setTimeout(function(){$blocks.masonry();},500);
	setTimeout(function(){$blocks.masonry();},1000);
	setTimeout(function(){$blocks.masonry();},2000);
	setTimeout(function(){$blocks.masonry();},5000);
	setTimeout(function(){$blocks.masonry();},10000);

		if(data.length==0){
			$(".morePost").fadeOut();
		}
	});



	postOffset+=10;
});
// $("img.load-post").fadeOut();
});

$(window).bind('load', function()
{

	setTimeout(function () {
			$(".loading-screen").fadeOut();
			$(".loading-screen p").remove();
	}, 5000);

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

function unic_height(){
  //console.log("entra same height");

  // var auxId=1;
  // while($( ".listTercio" ).length){
    var hidHeight=0;
    //ResetHeight();
    $(".listTercio").each(function(){
      if($(this).innerHeight()>hidHeight){
        hidHeight= $(this).innerHeight();
      }

    });
    //console.log(hidHeight);
    $(".listTercio").css("height",hidHeight+"px");
    // auxId++;
  // }
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
        autoWidth: true,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 20,

        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////

        speed: 900, //ms'
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


function tipear(){
 $(function(){
     $("#dinamic-content").typed({
       strings: ["ENTERATE", "SABELO", "CONECTATE"],
       typeSpeed: 100
     });
 });
}

function add_link(link){
	$(location).attr('href', link);
}


function change_class(){
		$(".nav-toggle").click(function(){
			if($( ".nav-toggle span").is( ".glyphicon-menu-hamburger" )){

				$( ".nav-toggle span" ).removeClass( "glyphicon-menu-hamburger" );
				$( ".nav-toggle span" ).addClass( "glyphicon-remove");
			}else{

					$( ".nav-toggle span" ).removeClass("glyphicon-remove" );
				  $( ".nav-toggle span" ).addClass( "glyphicon-menu-hamburger");


			}
		});
}
