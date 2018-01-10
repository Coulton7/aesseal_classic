<script type="text/javascript" src="<?php echo base_path(); ?>sites/all/themes/aesseal_classic/js/hubspot-progressive-profile.js"></script>
 

 <div id="wrap">
  <?php include 'header.php'; ?>

  <div class="main-container content-wrapper container">
    <div class="row-fluid">

      <?php if (!empty($page['sidebar_first'])): ?>
                 <aside class="span3 title-spacer" role="complementary"></aside>
         
        <section class="span9">
            <?php endif; ?>    
  <?php if (empty($page['sidebar_first'])): ?>
<section class="span12">
<?php endif; ?>

            <h1 class="page-header"><?php print $title; ?></h1>
            <div class="breadcrumb-container">
              <?php if (!empty($breadcrumb)): print t("You are here") . $breadcrumb; endif;?> 
            </div>
        </section>
 
    </div>

    <div class="row-fluid">
      <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="span3" role="complementary">
          <?php print render($page['sidebar_first']); ?>
        </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>  

    
 <div class="tablet-fix">
      <section id="main-content" class="<?php print _bootstrap_content_span($columns); ?>">
        
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php endif; ?>
        
        <?php if (!empty($page['help'])): ?>
          <div class="well">
              <?php print render($page['help']); ?>
          </div>
        <?php endif; ?>
        
        <?php if (!empty($action_links)): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
      </section>



      <?php if (!empty($page['sidebar_second'])): ?>
         <aside class="span3 hidden-tablet" role="complementary">
            <?php print render($page['sidebar_second']); ?>
        </aside>  <!-- /#sidebar-second -->
      <?php endif; ?>
      </div> <!--tab fix -->
    </div> <!-- Row-->
  </div> <!--Main Container-->

  <div class="footer-offset"></div>
</div>
 <!--wrap finishes -->



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



