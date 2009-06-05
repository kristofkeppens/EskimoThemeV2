<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="content-language" content="<?php print $language->language ?>" />
  <?php print $meta; ?>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts;?>

  
  <!--[if lte IE 7]>
    <link rel="stylesheet" href="<?php print $path; ?>blueprint/ie.css" type="text/css" media="screen, projection">
    <link href="<?php print $path; ?>css/ie.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->  
  <!--[if lte IE 6]>
    <link href="<?php print $path; ?>css/ie6.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->  
</head>
<body id="body" class="<?php print $body_classes;?>">

  <div class="container" id="main-container">
   <div class="container" id="header-container">
      <div class="span-12" id="logo">
        <a href="/"><img src="<?php print $path;?>images/logo-inuits-non3D.png" alt="Inuits.be" /></a>
      </div>
      <div class="span-12 last" id="menu">
      <div class="span-4">
        <ul>
          <li>
            <a href="/blog">News</a>
          </li>
          <li>
            <a href="/content/vision">Vision</a>
          </li>
          <li>
            <a href="/content/believers">Believers</a>
          </li>
        </ul>
      </div>
      <div class="span-4">
        <ul>
          <li>
            <a href="/content/benefits">Benefits</a>
          </li>
          <li>
            <a href="/content/people">People</a>
          </li>
          <li>
            <a href="/content/jobs">Jobs</a>
          </li>
        </ul>
      </div>
      <div class="span-4 last">
        <ul>

          <li>
            <a href="/contact">Contact</a>
          </li>
        </ul>
      </div>
      </div>
    </div>

    <div class="span-24 last" id="viewanker">
      <?php if($viewanker):?>
      <?php print $viewanker?>
      <?php endif;?>
    </div>
    <div class="container">
    <div class="span-16" id="rightcontainer">
      <div class="span-16" id="news">
        <?php if($news):?>
        <?php print $news?>
        <?php endif;?>
      </div>
      <div class="span-16">
        <div class="span-8" id="recentblog">
        <?php if($recent):?>
        <?php print $recent?>
        <?php endif;?>
        </div>
        <div class="span-8 last" id="expertise">
          <?php if($expertise):?>
          <?php print $expertise?>
          <?php endif;?>
        </div>
      </div>
      <div class="span-16">
        <div class="span-8" id="recentplanet">
          <?php if($latestplanet):?>
          <?php print $latestplanet?>
          <?php endif;?>
        </div>
        <div class="span-8 last" id="twitter">
          <?php if($twitter):?>
          <?php print $twitter?>
          <?php endif;?>
        </div>      
      </div>

      </div>
    <div class="span-8 last" id="links">
    <ul>
      <li id="planet">
        <a href="/aggregator/categories/2"></a>
      </li>
      <li id="floss">
        <a href="/calendar"></a>
      </li>
      <li id="technical">
        <a href="/content/technical"></a>
      `</li>
    </ul>
    <div id="identica">
      <a href="http://identi.ca/inuits"><img src="/sites/default/files/logoidentica.png"></a>
      <a href="http://twitter.com/inuits"><img src="/sites/default/files/twitterlogo.png"></img></a>
    </div>
    </div>
    <div class="span-8 last">
    </div>
    </div>
  </div>
  <div class="container">
    <div class="span-24 last" id="footer">
      <?php print $footer?>
    </div>
  </div>
<?php print $closure;?>

</body>
</html>
