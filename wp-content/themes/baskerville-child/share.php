<div class="share-social">
    <p>Compartir</p>
	<?php if(false){ ?>
    <a class="facebook-share-button"
      href="https://twitter.com/share"
      target="_blank">
        <img src="<?php echo site_url(); ?>/wp-content/themes/baskerville-child/images/facebook.svg" alt="">
    </a>
	<?php } ?>
	<p class="facebook-share-button" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo wp_get_shortlink(get_the_ID()); ?>','','width=500,height=400')" >
         <img src="<?php echo site_url(); ?>/wp-content/themes/baskerville-child/images/facebook.svg" alt="">
    </p>
	<?php if(false){ ?>
    <a class="twitter-share-button"
      href="https://twitter.com/share"
      data-size="large"
      data-text=""
      data-url=<?php echo wp_get_shortlink(get_the_ID()); ?>
      data-hashtags=<?php
      $posttags = get_the_tags();
      if ($posttags) {
		  $tagText="";
        foreach($posttags as $tag) {
          $tagText.=$tag->name.", ";
        }
		echo $tagText;
      }
      ?>
      data-via=""
      data-related=""
      target="_blank">
        <img src="<?php echo site_url(); ?>/wp-content/themes/baskerville-child/images/twitter.svg" alt="">
    </a>
	<?php } ?>
	  <p class="twitter-custom" onclick="window.open('https://twitter.com/intent/tweet?url=<?php echo wp_get_shortlink(get_the_ID()); ?>&original_referer=<?php 
	  echo home_url(add_query_arg(array(),$wp->request)); 
	  ?>&hashtags=<?php echo $tagText; 
	  ?>&text=<?php echo the_title(); ?>','','width=500,height=400')" >
        <img src="<?php echo site_url(); ?>/wp-content/themes/baskerville-child/images/twitter.svg" alt="">
    </p>
	

</div>

<style >

blockquotea.twitter-timeline {
  /* Buttonish */
  display: inline-block;
  padding: 6px 12px 6px 30px;
  margin: 10px 0;
  border: #ccc solid 1px;
  border-radius: 3px;
  background: red; url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNy4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNzIgNzIiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDcyIDcyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IHg9IjAiIGZpbGw9Im5vbmUiIHdpZHRoPSI3MiIgaGVpZ2h0PSI3MiIvPg0KPHBhdGggZmlsbD0iIzU1YWNlZSIgZD0iTTY4LjgxMiwxNS4xNDFjLTIuMzQ4LDEuMDM5LTQuODY5LDEuNzQzLTcuNTE5LDIuMDZjMi43MDMtMS42Miw0Ljc3OC00LjE4Nyw1Ljc1Ni03LjI0NGMtMi41MjksMS41LTUuMzMsMi41OTItOC4zMTMsMy4xNzYNCglDNTYuMzQ5LDEwLjU5MSw1Mi45NDgsOSw0OS4xODIsOWMtNy4yMjksMC0xMy4wOTIsNS44NjEtMTMuMDkyLDEzLjA5M2MwLDEuMDI2LDAuMTE4LDIuMDIxLDAuMzM4LDIuOTgxDQoJYy0xMC44ODUtMC41NDgtMjAuNTI4LTUuNzU3LTI2Ljk4Ny0xMy42NzljLTEuMTI2LDEuOTM2LTEuNzcxLDQuMTg0LTEuNzcxLDYuNTgxYzAsNC41NDIsMi4zMTIsOC41NTEsNS44MjQsMTAuODk4DQoJYy0yLjE0Ni0wLjA2OS00LjE2NS0wLjY1Ny01LjkzLTEuNjM4Yy0wLjAwMiwwLjA1NS0wLjAwMiwwLjExLTAuMDAyLDAuMTYyYzAsNi4zNDUsNC41MTMsMTEuNjM4LDEwLjUwNCwxMi44NA0KCWMtMS4xMDEsMC4yOTgtMi4yNTYsMC40NTctMy40NDksMC40NTdjLTAuODQ2LDAtMS42NjctMC4wNzgtMi40NjUtMC4yMzFjMS42NjcsNS4yLDYuNDk5LDguOTg2LDEyLjIzLDkuMDkNCgljLTQuNDgyLDMuNTEyLTEwLjEyOSw1LjYwNi0xNi4yNiw1LjYwNmMtMS4wNTUsMC0yLjA5Ni0wLjA2MS0zLjEyMi0wLjE4NGM1Ljc5NCwzLjcxNywxMi42NzYsNS44ODIsMjAuMDY3LDUuODgyDQoJYzI0LjA4MywwLDM3LjI1MS0xOS45NDksMzcuMjUxLTM3LjI0OWMwLTAuNTY2LTAuMDE0LTEuMTM0LTAuMDM5LTEuNjk0QzY0LjgzOCwyMC4wNjgsNjcuMDU4LDE3Ljc2NSw2OC44MTIsMTUuMTQxeiIvPg0KPC9zdmc+DQo=") 8px 8px no-repeat;
  background-size: 1em 1em;

  /* Text */
  font: normal 12px/18px Helvetica, Arial, sans-serif;
  color: #333;
  white-space: nowrap;
}

  .share-social{
    width: 50%;
    display: inline;
    border: 1px solid black;
    font-size: 20px;
    font-family: 'Caveat';
    padding: 0;
  }

  .share-social p{
    color:white;
    background-color: black;
    margin:0;
    padding:3px;
  }
  .share-social a img,.share-social .twitter-custom img,.share-social .facebook-share-button img{
    height: 17px;
    width: auto;
    position: relative;
	top:2px;
    margin-left:5px;
    margin-right: 5px;
  }

  .share-social p{
    width: auto;
    display: inline-flex;
  }
  .share-social .twitter-custom,.share-social .facebook-share-button{background:transparent; cursor:pointer;}
	
</style>
