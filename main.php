<?php
/**
 * Learning WiKi Template
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

include(DOKU_TPLINC.'tpl_functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>" lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php echo strip_tags($conf['title'])?> | <?php tpl_pagetitle()?>
  </title>

  <?php tpl_metaheaders()?>

  <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
</head>

<body>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>

  <div class="dokuwiki">

    <?php html_msgarea()?>

    <!-- left column start -->
    <div class="left_column">
      &nbsp;
    </div>
    <!-- left column stop -->

    <!-- content start -->
    <div class="center_column">
      <div class="top">
        <?php if($conf['breadcrumbs']){?>
        <div class="breadcrumbs floatleft">
          <?php tpl_breadcrumbs()?>
          <?php //tpl_youarehere() //(some people prefer this)?>
        </div>
        <?php }?>

        <?php if($conf['youarehere']){?>
        <div class="breadcrumbs floatleft">
          <?php tpl_youarehere() ?>
        </div>
        <?php }?>

        <div class="userinfo floatright">
          <?php if(tpl_userinfo()){} else { print("You are not logged in"); } ?> | 
          <?php tpl_actionlink('login')?>
        </div>
      </div>

      <div class="clearer"></div>

      <div class="header">
        <div class="logo">
          <?php tpl_link(wl(),$conf['title'],'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[H]"')?>
        </div>
        <div class="searchform">
          <?php tpl_searchform()?>
        </div>
      </div>

      <div class="clearer"></div>

      <div id="navbar">
        <?php tpl_navbar() ?>
      </div>
      <div class="clearer"></div>

      <!-- wikipage start -->
      <div class="wiki_page">
        <?php tpl_content()?>
      </div>
      <!-- wikipage stop -->

      <div class="clearer"></div>

      <br />
      <div class="pageinfo floatright">
        <?php tpl_pageinfo()?>
      </div>

      <div class="clearer"></div>

      <hr />
      <div class="actions">
        <div class="floatleft">
          <?php tpl_actionlink('edit')?>
          <?php tpl_actionlink('history')?>
          <?php tpl_actionlink('subscription')?>
        </div>
        <div class="floatright">
          <?php tpl_actionlink('admin')?>
          <?php tpl_actionlink('index')?>
          <?php tpl_actionlink('recent')?>
        </div>
      </div>

      <div class="clearer"></div>

      <?php /*old includehook*/ @include(dirname(__FILE__).'/footer.html')?>
    </div>
    <!-- content stop -->

    <!-- right column start -->
    <div class="right_column">
      &nbsp;
    </div>
    <!-- right column stop -->

    <div class="clearer"></div>

  </div>

  <div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
