<?php
/***************************************************************************
 *                     lang_admin_smiley_categories.php [English]
 *                            -------------------
 *   begin                : Sunday, April 27th, 2004
 *   copyright            : (C) 2004 Afkamm
 *   email                : phpbb@afkamm.co.uk
 *   website		  : http://mods.afkamm.co.uk
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// Category Configuration Utility Page
//
$lang['smiley_title_main'] = 'Category Configuration Utility';
$lang['smile_desc_main'] = 'From this page you can add and edit categories. Once you have enough, you can then put them into an order as to how you wish them to appear below the bbcode buttons on the Post Reply page, though remember that you need <b>%s</b> or more unhidden categories before the buttons will be displayed. A hidden category will not be seen by the forum users and the smilies within will not appear in any posts.'; // %s gets replaced with the $board_config['smilie_cat_min'] value.

$lang['smiley_cat_add'] = 'Add Category';
$lang['smiley_cat_add_description'] = 'You can add a new category with this form, just enter a name and a description and then click the submit button. By default the category will be hidden and placed last until you make it otherwise.<br /><span style="color: red;">*Use letters and numbers only!</span>';
$lang['smiley_cat_add_success'] = 'Category added successfully';
$lang['smile_desc_first'] = 'It would appear that there aren\'t any categories. So the first thing you want to do is create one. Use the form below.';
$lang['smiley_cat_edit'] = 'Edit Category';
$lang['smiley_cat_edit_description'] = 'Select the category that you wish to edit from the dropdown menu. The details should appear in the boxes below, edit them to your liking and click the submit button to save the changes.';
$lang['smiley_cat_edit_success'] = 'Category edited successfully';
$lang['smilies_per_page'] = 'Smilies Per Page';
$lang['smilies_no_limit'] = 'Enter 0 for no limit.';

$lang['smilies_unused'] = 'View Smilies';
$lang['smilies_unused_title'] = 'View Unused Smilies';
$lang['smilies_unused_desc'] = 'If you can\'t be bothered creating a *.pak file, then use this option. Upload all your smilies to the smiles folder and then click the button below. You\'ll only see the smilies that are not already installed. This way you wont get duplicates. You can then go on to add them to a category.';
$lang['smilies_unused_num'] = 'Smilies not installed';
$lang['smiley_filename_code'] = 'Use filename for code';
$lang['select_cat'] = 'Select a category:';

$lang['cat_order_title'] = 'Order Categories';
$lang['cat_hidden_title'] = 'Hide Categories';
$lang['cat_order'] = 'Order the categories by selecting them one at a time and moving them up or down. The category at the top is number 1. The smilies in the 1st unhidden category will be the ones display to the left of the Post Reply form.';
$lang['cat_hidden'] = 'Hide the categories that you do not wish your forum users to see. (CTRL+LEFT CLICK sets/clears selections). Smilies in hidden categories will not appear in posts even if their codes are used.';
$lang['cat_order_hide_success'] = 'Categories have been ordered and hidden successfully.';
$lang['cat_view'] = 'View Categories';
$lang['cat_view_title'] = 'View Categories';
$lang['cat_view_desc'] = 'Select the categories that you wish to view. (CTRL+LEFT CLICK sets/clears selections). If you have a hundred smilies or less, or fast broadband, viewing all the categories at once shouldn\'t be a problem. If you have a few hundred smilies, you may wish to view a couple of categories at a time.';
$lang['category_create'] = 'Please create at least one category before clicking this button.';

$lang['count_smilies'] = 'Count Smilies';
$lang['up'] = ' Up ';
$lang['down'] = ' Down ';
$lang['submit'] = 'Submit';


//
// Category Viewing Utility Page
//
$lang['smiley_cat_title'] = 'Category Viewing Utility';
$lang['smiley_cat_description'] = 'Click any smiley to edit those details. Click the edit link for any given category to view a detailed list of the smilies that are inside and to be able to add more. Only categories that are empty have a delete link available, so to delete a category first delete or more all the smilies that are inside it. Hidden categories cannot be seen by forum members and any smiley inside will not appear in the forum posts.';
$lang['smiley_category'] = 'Category Name';
$lang['smiley_category_description'] = 'Category Description';
$lang['smiley_count'] = 'Count';
$lang['smiley_cat_status'] = 'Status';
$lang['smiley_cat_options'] = 'Options';
$lang['smiley_cat_del_ok'] = 'Category deleted successfully';
$lang['smiley_cat_del_bad'] = 'Couldn\'t delete category. It either doesn\'t exist, or it still contains smilies.';
$lang['category_hidden2'] = 'Hidden';
$lang['category_not_hidden2'] = 'Viewable';
$lang['smiley_cat_empty'] = 'There are no smilies in this category.';
$lang['smiley_cat_select'] = 'Select a Category';

//
// Smiley List Utility Page
//
$lang['smiley_cat_list_title'] = 'Smiley List Utility';
$lang['smiley_cat_list_description'] = 'From here you can edit multiple smilies at once instead of just one at a time. If you should see a pink background in the code section, this means that the code for this smiley has been matched elsewhere, either in this category or another. No two smilies must have the same code so please change them until all are unique.<br /><br /><span style="color: red;">Warning: The Order dropdown menu uses javascript which will submit the new order value as soon as it\'s selected. They are not part of the main form so don\'t go editing codes etc. and then try and change an order as you\'ll lose your changes.</span>';
$lang['smiley_cat_move'] = 'Move';
$lang['category_hidden'] = 'Category is currently hidden.';
$lang['category_not_hidden'] = 'Category is currently viewable.';
$lang['multi_edit_submit'] = 'Submit Changes';
$lang['multi_delete1'] = '%s smiley was deleted.';
$lang['multi_delete2'] = '%s smilies were deleted.';
$lang['multi_updated1'] = '%s smiley was updated. ';
$lang['multi_updated2'] = '%s smilies were updated. ';
$lang['smiley_code_match'] = '2 or more smilies have the same code, please edit these.';
$lang['order_num'] = '#';
$lang['order'] = 'Order';
$lang['smiley_order_success'] = 'The smiley was successfully moved from position %s to %s.';


//
// Unused Smiley List Page
//
$lang['smiley_unused_title'] = 'Unused Smiley List';
$lang['smiley_unused_desc'] = 'This is the list of smilies that are in the smiley folder, but are not installed. Enter a code and emoticon for the smiley you wish to install, not forgetting to tick the box, select a category and then when finished, click the submit button. If you try to add a smiley with an empty code box, then that smiley will not get installed.';
$lang['smile_tick_add'] = 'Add Smiley';
$lang['tick_all'] = 'Tick all';
$lang['untick_all'] = 'Untick all';
$lang['smiley_multi_add_success1'] = '%s smiley was successfully added.';
$lang['smiley_multi_add_success2'] = '%s smilies were successfully added.';


//
// Smiley Add/Edit Utility Page
//
$lang['smiley_add_title'] = 'Smiley Add Utility';
$lang['smiley_edit_title'] = 'Smiley Edit Utility';
$lang['smiley_edit'] = 'Edit Smiley';
$lang['smiley_delete'] = 'Delete this smiley';


//
// Import/Export Smiley Utility Page
//
$lang['smiley_import_title'] = 'Import/Export Smiley Utility';
$lang['export'] = 'Export Smilies';
$lang['export_all'] = 'Export All';
$lang['export_description'] = 'Export just one category at a time by selecting it from the list below, or you can leave it as is and export them all as one.';
$lang['choose_cat_export'] = 'Export the following Category';
$lang['choose_cat_import'] = 'Import to the following Category';
$lang['smiley_export'] = 'Smiley Pack Export';
$lang['import_export'] = 'Import/Export a Smiley pack';


//
// Return Links
//
$lang['Click_return_listadmin'] = 'Click %sHere%s to return to the Smiley List Utility Page';
$lang['Click_return_catadmin'] = 'Click %sHere%s to return to the Category Configuration Utility Page';
$lang['Click_return_catlistadmin'] = 'Click %sHere%s to return to the Category Viewing Utility Page';
$lang['Click_return_unusedadmin'] = 'Click %sHere%s to return to the Unused Smiley List Page';


//
// Errors
//
$lang['smiley_errors1'] = 'There was %s error out of a possible %s.';
$lang['smiley_errors2'] = 'There were %s errors out of a possible %s.';


//
// This is the end, beautiful friend,
// This is the end, my only friend,
// The end. -- The Doors
//
?>