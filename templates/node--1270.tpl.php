<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="/sites/all/themes/aesseal_classic/js/modernizr.custom.26633.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script type="text/javascript" src="/sites/all/themes/aesseal_classic/js/jquery.gridrotator.js"></script>
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
  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <footer>
      <?php print render($content['field_tags']); ?>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article> <!-- /.node -->
