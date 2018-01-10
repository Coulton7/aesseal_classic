


<div id="wrap">
  <?php include 'header.php'; ?>

  <div class="main-container container">

   <div class="row-fluid">
    


    <div class="span12" >

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
            <div class="breadcrumb-container">
              <?php if (!empty($breadcrumb)): print t("You are here") . $breadcrumb; endif;?> 
            </div>
    
        <?php print render($page['content']); ?>

      </div>
    </div>
  </div>


  <!-- /////////////////////////////// WIDGETS -->

  <div class="widget-wrap">
     
    <div class="main-container  container">
           <div class="section-shadow"></div>

            <div class="row-fluid">
             <div class="span12 widgetblock">
               <?php print render($page['widget_block']); ?>
             </div>     

      </div> <!--Row-->
      


    </div><!--greyblock finished -->
  </div> <!-- ///////////////////////////// WIDGET FINISHES -->











<div class="footer-offset"></div>
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




