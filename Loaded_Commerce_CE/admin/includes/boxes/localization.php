<?php
/*
  $Id: localization.php,v 1.1 2008/06/11 00:18:17 datazen Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2008 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
?>
<!-- localization //-->
<?php
$heading = array();
$contents = array();
$heading[] = array('text'  => BOX_HEADING_LOCALIZATION,
                   'link'  => tep_href_link(FILENAME_CURRENCIES, 'selected_box=localization'));
  //RCI to include links  
  $returned_rci_top = $cre_RCI->get('localization', 'boxestop');
  $returned_rci_bottom = $cre_RCI->get('localization', 'boxesbottom');
  $returned_rci_bottom .= lc_addon_load_side_links('localization');
  $contents[] = array('text'  => $returned_rci_top .
                                 tep_admin_files_boxes(FILENAME_CURRENCIES, BOX_LOCALIZATION_CURRENCIES, 'SSL','selected_box=localization','2') .
                                 tep_admin_files_boxes(FILENAME_LANGUAGES, BOX_LOCALIZATION_LANGUAGES, 'SSL','selected_box=localization','2') .
                                 tep_admin_files_boxes(FILENAME_ORDERS_STATUS, BOX_LOCALIZATION_ORDERS_STATUS, 'SSL','selected_box=localization','2') .
                                 $returned_rci_bottom);
  $box = new box;
  echo $box->menuBox($heading, $contents);
?>
<!-- localization_eof //-->