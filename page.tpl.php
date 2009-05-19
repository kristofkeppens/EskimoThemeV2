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

  <div class="container">
    <div class="container">
      <div class="span-12" id="logo">
      </div>
      <div class="span-12 last" id="menu">
      <div class="span-4">
        <ul>
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="/blog">News</a>
          </li>
          <li>
            <a href="/content/vision">Vision</a>
          </li>
        </ul>
      </div>
      <div class="span-4">
        <ul>
          <li>
            <a href="/content/believers">Believers</a>
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
            <a href="/content/rolling-out-open-source-masses">benefits</a>
          </li>
        </ul>
      </div>
      </div>
    </div>
    <div class="span-24 last" id="wolfseyes">
    </div>
    <div class="span-24 last" id="viewanker">
    </div>
    <div class="container">
    <div class="span-16" id="rightcontainer">
      <div class="span-16" id="news"></div>
      <div class="span-8" id="recentblog"></div>
      <div class="span-8" id="middlecontainer">
        <div class="span-8" id="expertise"></div>
        <div class="span-8" id="twitter"></div>
      </div>
    </div>
    <div class="span-8 last" id="links">
    </div>
    <div class="span-8 last">
    </div>
    </div>
  </div>


</body>
</html>