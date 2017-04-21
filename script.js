$(document).ready( function(){

	setInterval(blinker, 1000);

	setTimeout(function () {
			$(".loading-screen").fadeOut();
			$(".loading-screen p").remove();
	}, 3000);

	SameHeight();

});

function blinker() {
    $(".loading-screen p").fadeOut(500);
    $('.loading-screen p').fadeIn(500);
}


$(document).load( function(){




});

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
