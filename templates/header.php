  <header id="navbar" role="banner" class="navbar">
    <a title="<?php print t('Home'); ?>" class="logo-link" href="<?php print $front_page; ?>"><div class="waveupper">
    </div></a>

    <div class="navbar-inner" >
      <div class="container">
       <?php if (!empty($logo)): ?>
       <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->

    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="hidden-desktop" style="float:right;">
      <a class="btn btn-header" id="icon-globe" href="<?php echo base_path(); ?>en/language-selection">
        <i class="icon-globe"></i>
      </a>
    </div>

  <?php if (!empty($site_name)): ?>
    <h1 id="site-name">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
    </h1>
  <?php endif; ?>

  <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
  <div class="nav-collapse collapse primary-nav">
    <nav role="navigation">
      <?php if (!empty($page['navigation'])): ?>
      <?php print render($page['navigation']); ?>
    <?php endif; ?>
  </nav>
  <div class="spacer"></div>
</div>
<?php endif; ?> 

</div>

<div class="secondary-nav">
  <?php print render($page['secondary_navigation']); ?>
  <div class="spacer"></div>
</div>

</div>
</header>

<!-- ///////////////////////////CAROUSEL -->

  <div class="carousel-container">
    <header role="banner" id="page-header">
      <?php if (!empty($site_slogan)): ?>
        <p class="lead"><?php print $site_slogan; ?></p>
      <?php endif; ?>
      <?php print render($page['header']); ?>
    </header> <!-- /#header -->

    <div class="wave-back container">
      <div class="row-fluid">
        <div class="span6 contact-icons offset6"> 
         <!-- <?php print render($page['social_links']); ?> -->
         <?php print render($page['wave_title']); ?>

    
        </div>
      </div>
    </div>
  </div>

  <!--////////////////////////END CAROUSEL -->