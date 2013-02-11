<div id="container">
  <header id="header">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
    
    <?php if ($site_name): ?>
      <h1 id="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
      </h1>
    <?php endif; ?>
    
    <?php if ($site_slogan): ?>
      <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> 
  
  <section id="main">
    <?php print $messages; ?>
    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
  </section>
  
  <?php if ($page['sidebar']): ?>
    <aside id="sidebar">
      <?php print render($page['sidebar']); ?>
    </aside>
  <?php endif; ?>

  <footer id="footer">
    <?php print render($page['footer']) ?>
    <?php print $feed_icons ?>
  </footer>
</div>