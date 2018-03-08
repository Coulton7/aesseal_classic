<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="../js/modernizr.custom.26633.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script type="text/javascript" src="../js/jquery.gridrotator.js"></script>
   <script type="text/javascript">
     $(function() {

       $( '#ri-grid' ).gridrotator( {
         rows : 3,
         columns : 4,
         animType	: 'slideBottom',
         animSpeed	: 1000,
         interval	: 600,
         step		: 1,
         interval : 2000,
         w1024 : {
           rows : 3,
           columns : 4
         },
         w768 : {
           rows : 4,
           columns : 3
         },
         w480 : {
           rows : 4,
           columns : 3
         },
         w320 : {
           rows : 2,
           columns : 4
         },
         w240 : {
           rows : 1,
           columns : 7
         },
       } );

     });
</script>



  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page && $title): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
      <span class="submitted">
       <?php
            print t("Published") . " " . format_date($node->created, 'custom', 'd/m/Y');
        ?>
      </span>
    <?php endif; ?>
  </header>

  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);
  ?>

  <div class="container">

			<section class="main">

				<div id="ri-grid" class="ri-grid ri-grid-size-4 gallery">
					<img class="ri-loading-image" src="images/loading.gif"/>
					<ul>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/1t.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-twitter"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/2t.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-twitter"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/3t.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-article"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/4t.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-article"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/5t.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
            <li><a class="gallery-box" href="#"><img class="" src="images/medium/6t.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
            <li><a class="gallery-box" href="#"><img class="" src="images/medium/7t.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
            <li><a class="gallery-box" href="#"><img class="" src="images/medium/8t.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
            <li><a class="gallery-box" href="#"><img class="" src="images/medium/9t.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
            <li><a class="gallery-box" href="#"><img class="" src="images/medium/10t.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/1a.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/2a.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-twitter"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/3a.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-twitter"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/4a.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-article"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/5a.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-article"</span></p></div></div></a></li>
            <li><a class="gallery-box" href="#"><img class="" src="images/medium/6a.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-article"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/1i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/2i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/3i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-twitter"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/4i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-twitter"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/5i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-article"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/6i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-article"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/7i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
						<li><a class="gallery-box" href="#"><img class="" src="images/medium/8i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
            <li><a class="gallery-box" href="#"><img class="" src="images/medium/9i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
            <li><a class="gallery-box" href="#"><img class="" src="images/medium/10i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
            <li><a class="gallery-box" href="#"><img class="" src="images/medium/11i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
            <li><a class="gallery-box" href="#"><img class="" src="images/medium/12i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
            <li><a class="gallery-box" href="#"><img class="" src="images/medium/13i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>
            <li><a class="gallery-box" href="#"><img class="" src="images/medium/14i.jpg"/><div class="overlay-red"><div class="icon-frame"><p><span class="icon-instagram"</span></p></div></div></a></li>

					</ul>
				</div>

			</section>

        </div>

  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <footer>
      <?php print render($content['field_tags']); ?>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article> <!-- /.node -->
