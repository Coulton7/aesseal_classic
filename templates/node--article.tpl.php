<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<script>


$(document).ajaxSuccess(function(){

if($('#general-contact-entityform-edit-form').length==0 && $('.alert-error').length==0){
     $('#general-contact-entityform-edit-form').hide();
     $('.entity-entityform-type h2').text('Thankyou for your message, we will be in touch shortly');
      $('.entity-entityform-type h2').show()
}}); 


</script>

<div class="span8 offset2">

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

</div>

</article> <!-- /.node -->
