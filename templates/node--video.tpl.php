<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<script type="text/javascript" src="../js/hubspot-progressive-profile.js"></script>

<script>
$("#content-gate-entityform-edit-form").submit(function() {
    $(this).submit(function() {
        return false;
    });
    return true;
});
</script>

<script>
$( document ).ready(function() {
  $('.field-name-field-thumbnail').hide();

  if($('.field-name-field-download-form').length>0){
    $('.oembed').hide();
    $('.field-name-field-thumbnail').show();
  }

  // Read a page's GET URL variables and return them as an associative array.
  function getUrlVars()
  {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
      hash = hashes[i].split('=');
      vars.push(hash[0]);
      vars[hash[0]] = hash[1];
    }
    return vars;
  }

  var submitString = getUrlVars()["fs"];

  if(submitString=='y'){
    $('.oembed').show();
    $('.field-name-field-thumbnail').hide();
    $('.field-name-field-download-form').hide();
    $('#block-sharethis-sharethis-block').hide();
    $('.field-label').hide();
  }
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
        <?php print $user_picture; ?>
        <?php print $submitted; ?>
      </span>
    <?php endif; ?>
  </header>


<div class="row-fluid">

<div class="span12">
  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    hide($content['field_document']);
    hide($content['field_reference']);
    hide($content['field_thumbnail']);
    hide($content['field_download_form']);
    print render($content);
  ?>



</div>

</div>

<div class="row-fluid">
  <div class="span6">



    <div class="download-field-wrapper">
      <?php print render($content['field_thumbnail']);?>
  </div>

  </div>

  <div class="span6">

  <?php print render($content['field_download_form']);?>

  </DIV>


</div>



<div class="row-fluid">
<div class="span12 resources-related-products">
<?php

print render($content['field_reference']);
?>
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
