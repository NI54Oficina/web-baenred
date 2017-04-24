<div class="share-social">
    <p>Compartir</p>
    <a class="twitter-share-button"
      href="https://twitter.com/share"
      data-size="large"
      data-text=""
      data-url=
      data-hashtags=
      data-via=""
      data-related=""
      target="_blank">
        <img src="<?php echo site_url(); ?>/wp-content/themes/baskerville-child/images/facebook.svg" alt="">
    </a>

    <a class="twitter-share-button"
      href="https://twitter.com/share"
      data-size="large"
      data-text="custom share text"
      data-url=<?php echo home_url(add_query_arg(array(),$wp->request)); ?>
      data-hashtags=
      data-via=""
      data-related=""
      target="_blank">
        <img src="<?php echo site_url(); ?>/wp-content/themes/baskerville-child/images/twitter.svg" alt="">
    </a>

</div>

<?php echo  the_tags( '#', '#', '' ); ?>
<style >

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
  .share-social a img{
    height: 17px;
    width: auto;
    position: relative;
    margin-left:5px;
    margin-right: 5px;
  }

  .share-social p{
    width: auto;
    display: inline-flex;
  }

</style>
