<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<script type="text/javascript" src="<?php echo base_path(); ?>sites/all/themes/aesseal_classic/js/hubspot-progressive-profile.js"></script>

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
 

  <div class="row-fluid">

    <div class="span9">
<?php print render($content['body']); ?>
    </div>

    <div class="span3">
      <?php print render($content['field_logo']); ?>

  </div>
</div>

<div class="row-fluid">
    <?php print render($content['employees_block']); ?>

  </div>

 <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    hide($content['field_location']);
    hide($content['body']);
     hide($content['field_logo']);
      hide($content['employees_block']);
      hide($content['location_map_field']);
      hide($content['field_website']);
      hide($content['field_opening_hours']);
    print render($content);
  ?>

<div class="row-fluid location-details">
<div class="span8">
<?php print render($content['location_map_field'])?>

</div>
  <div class="span4">

<?php print render($content['field_location'])?>
 <?php print render($content['field_website']); ?>
 <?php print render($content['field_opening_hours']); ?>

</div>


</div>


  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <footer>
      <?php print render($content['field_tags']); ?>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article> <!-- /.node -->
