<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="http://www.aesseal.com/sites/all/themes/aesseal_classic/js/html5.js"></script>
  <![endif]-->
<!--IE7 conditional stylesheet-->
<!--[if lte IE 7]> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_path(); ?>sites/all/themes/aesseal_classic/css/ie7-and-down.css" />

<![endif]-->

  <?php print $scripts; ?> 

  <script type="text/javascript">

$( document ).ready(function() {
  $(".form-select").chosen({
    disable_search_threshold: 10,
    no_results_text: "Sorry, no results found."
  })
});


</script>



<!--<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>-->

 
   
 
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>


</body>
</html>