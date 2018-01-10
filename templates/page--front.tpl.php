
  <!-- <script src="sites/all/themes/aesseal_classic/js/lib/greensock/TweenMax.min.js" type=
    "text/javascript"></script>
    <script src="sites/all/themes/aesseal_classic/js/scrollmagic/minified/ScrollMagic.min.js" type=
    "text/javascript"></script>
    <script src="sites/all/themes/aesseal_classic/js/scrollmagic/minified/plugins/animation.gsap.min.js"
    type="text/javascript"></script> -->

<link rel="stylesheet" href="sites/all/libraries/flexslider/flexslider.css" type="text/css">
<script src="sites/all/libraries/flexslider/jquery.flexslider.js"></script>

<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
      controlNav: false,
      directionNav: false
    });
  });
</script>


<div id="wrap">
  <?php include 'header.php'; ?>


  <div class="main-container container">

   <div class="row-fluid">
    


    <div class="span12 front-content" id="main-content">

   <?php if (!empty($page['highlighted'])): ?>
          <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
        <?php endif; ?>
        <?php if (!empty($page['help'])): ?>
          <div class="well"><?php print render($page['help']); ?></div>
        <?php endif; ?>
        <?php if (!empty($action_links)): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <h1 class=""><?php print $title; ?></h1>
    
        <?php print render($page['content']); ?>

      </div>
    </div>
  </div>


  <!-- /////////////////////////////// WIDGETS -->

  <div class="widget-wrap">
    <div class="main-container front-page container">
           <div class="section-shadow"></div>

            <div class="row-fluid">
             <div class="span10 offset1 widgetblock">
               <?php print render($page['widget_block']); ?>
             </div>     

      </div> 
    </div>
  </div> <!-- ///////////////////////////// WIDGET FINISHES -->

  <?php if (!empty($page['tab_first']) || !empty($page['tab_second'])): ?>

  <div class="tab-region">
    <div class="tab-header">
        <div class="container main-container">
            <div class="row-fluid tab-row">
                <div class="span7">
                    <h1><?php print t('News & Events'); ?></h1>
                </div>
                <div class="span5">
                    <ul class="nav nav-tabs pull-right" data-tabs="tabs" id="tabs">
                        <?php if (!empty($page['tab_first'])): ?>
                        <li class="active"><a href="#tab1" data-toggle="tab"><?php print t('Group News');?></a></li> 
                        <?php endif; ?>
                        <?php if (!empty($page['tab_second'])): ?>
                        <li <?php if (empty($page['tab_first'])): ?> class="active"<?php endif; ?>><a href="#tab2" data-toggle="tab"><?php print t('Local News');?></a></li> 
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main-container container tab-container">
        <div class="row-fluid">
        <div class="tab-content">
            <?php if (!empty($page['tab_first'])): ?>
                <div class="tab-pane active" id="tab1">  <?php print render($page['tab_first']); ?></div>
            <?php endif; ?>
        <?php if (!empty($page['tab_second'])): ?>
                <div <?php if (empty($page['tab_first'])): ?> class="active tab-pane"<?php else: ?>class="tab-pane" <?php endif; ?> id="tab2">
                    <?php print render($page['tab_second']); ?>
                </div>
                <?php endif; ?>
        </div>
        </div>
    </div>
 </div> <!--TAB REGION ENDS -->
 <?php endif; ?>

    <div class="main-container container visible-desktop">
        <!-- <div class="row-fluid">
        <div class="span12">
            <?php print render($page['front_bottom_banner']); ?>
        </div>
        </div> -->
        <div class="row-fluid">
            <div class="span6">
                <?php print render($page['front_bottom_left']); ?>
            </div>
            <div class="span3">
                <?php print render($page['front_bottom_phone']); ?>
            </div>
            <div class="span2">     
                <?php print render($page['front_bottom_email']); ?>
        </div>
        </div>
    </div>
    
    <div class="footer-offset front"></div>
</div> <!-- WRAP -->

<footer class="footer container">
  <div class="row-fluid footer-top">
    <div class="span12">
      <?php print render($page['trademark']); ?>
    </div>
  </div>
   
  <div class="row-fluid footer-bottom">
    <div class="span4" >
      <?php print render($page['footer_left']); ?>
    </div>
    <div class="span8" >
      <?php print render($page['footer_right']); ?>
    </div>
  </div>
</footer>

<!-- <script type="text/javascript">

                var controller = new ScrollMagic.Controller({
                        loglevel: 3
                    }); //initialize scrollmagic


                  var scene = new ScrollMagic.Scene({ // Upper Wave out 
                    triggerElement:".widgetblock",
                    duration:500

                    })
                    .setTween('.panel-pane',{ backgroundColor:'#1c2f55'})
                   // .addIndicators({name: "wavein------"})
                    .addTo(controller);
</script> -->

