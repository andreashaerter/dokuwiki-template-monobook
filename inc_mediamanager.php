<?php

/**
 * Content for the media manager popup
 *
 * See "mediamanager.php" if you don't know how this is getting included
 * within the "main.php".
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Andreas Haerter <development@andreas-haerter.com>
 * @link http://andreas-haerter.com/projects/dokuwiki-template-monobook
 * @link http://www.dokuwiki.org/template:monobook
 * @link http://www.dokuwiki.org/devel:templates
 */

//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

?>
<div id="media__manager" class="dokuwiki">
  <?php html_msgarea() ?>
  <div id="mediamgr__aside"><div class="pad">
  <h1><?php echo hsc($lang['mediaselect'])?></h1>

  <?php /* keep the id! additional elements are inserted via JS here */?>
  <div id="media__opts"></div>

  <?php tpl_mediaTree() ?>
  </div></div>

  <div id="mediamgr__content"><div class="pad">
    <?php tpl_mediaContent() ?>
  </div></div>
</div>

