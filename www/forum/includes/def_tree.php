<?php
/***************************************************************************
 *						def_tree_def.php
 *						----------------
 *	begin			: 12/11/2003
 *	copyright		: Ptirhiik
 *	email			: admin@rpgnet-fr.com
 *
 *	version			: 1.0.0 - 12/11/2003
 *
 *	last update		: 2022-11-29 16:16:27 (GMT) by Hidden *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
	exit;
}

//--------------------------------------------------------------------------------------------------
//
// $tree : designed to get all the hierarchy
// ------
//
//	indexes :
//		- id : full designation : ie Root, f3, c20
//		- idx : rank order
//
//	$tree['keys'][id]			=> idx,
//	$tree['type'][idx]			=> type of the row, can be 'c' for categories or 'f' for forums,
//	$tree['id'][idx]			=> value of the row id : cat_id for cats, forum_id for forums,
//	$tree['data'][idx]			=> db table row,
//	$tree['main'][idx]			=> parent id,
//	$tree['sub'][id]			=> array of sub-level ids,
//--------------------------------------------------------------------------------------------------

$tree = array(
			'keys'	=> array('c2' => 0, 'f3' => 1, 'f2' => 2, 'f4' => 3, 'f5' => 4),
			'type'	=> array('c', 'f', 'f', 'f', 'f'),
			'id'	=> array('2', '3', '2', '4', '5'),
			'data'	=> array(
								array(
										'cat_id'	=> '2',
										'cat_title'	=> 'Общий',
										'cat_order'	=> '10',
										'cat_main_type'	=> 'c',
										'cat_main'	=> '0',
										'cat_desc'	=> '',
										'icon'	=> '',
										'main'	=> 'Root',
									),
								array(
										'forum_id'	=> '3',
										'cat_id'	=> '2',
										'forum_name'	=> 'Эротика',
										'forum_desc'	=> '',
										'forum_status'	=> '0',
										'forum_order'	=> '20',
										'forum_posts'	=> '30',
										'forum_topics'	=> '3',
										'forum_last_post_id'	=> '84',
										'prune_next'	=> '',
										'prune_enable'	=> '0',
										'auth_view'	=> '0',
										'auth_read'	=> '0',
										'auth_post'	=> '1',
										'auth_reply'	=> '1',
										'auth_edit'	=> '0',
										'auth_delete'	=> '0',
										'auth_sticky'	=> '3',
										'auth_announce'	=> '3',
										'auth_global_announce'	=> '0',
										'auth_vote'	=> '1',
										'auth_pollcreate'	=> '1',
										'auth_attachments'	=> '1',
										'forum_link'	=> '',
										'forum_link_internal'	=> '0',
										'forum_link_hit_count'	=> '0',
										'forum_link_hit'	=> '0',
										'icon'	=> '',
										'main_type'	=> 'c',
										'auth_download'	=> '0',
										'auth_cal'	=> '0',
										'auth_news'	=> '0',
										'auth_ban'	=> '3',
										'auth_greencard'	=> '5',
										'auth_bluecard'	=> '1',
										'count_posts'	=> '1',
										'main'	=> 'c2',
									),
								array(
										'forum_id'	=> '2',
										'cat_id'	=> '2',
										'forum_name'	=> 'Технические вопросы',
										'forum_desc'	=> '',
										'forum_status'	=> '0',
										'forum_order'	=> '30',
										'forum_posts'	=> '8',
										'forum_topics'	=> '2',
										'forum_last_post_id'	=> '82',
										'prune_next'	=> '',
										'prune_enable'	=> '0',
										'auth_view'	=> '0',
										'auth_read'	=> '0',
										'auth_post'	=> '1',
										'auth_reply'	=> '1',
										'auth_edit'	=> '1',
										'auth_delete'	=> '1',
										'auth_sticky'	=> '3',
										'auth_announce'	=> '3',
										'auth_global_announce'	=> '0',
										'auth_vote'	=> '1',
										'auth_pollcreate'	=> '1',
										'auth_attachments'	=> '1',
										'forum_link'	=> '',
										'forum_link_internal'	=> '0',
										'forum_link_hit_count'	=> '0',
										'forum_link_hit'	=> '0',
										'icon'	=> '',
										'main_type'	=> 'c',
										'auth_download'	=> '1',
										'auth_cal'	=> '0',
										'auth_news'	=> '2',
										'auth_ban'	=> '3',
										'auth_greencard'	=> '5',
										'auth_bluecard'	=> '1',
										'count_posts'	=> '1',
										'main'	=> 'c2',
									),
								array(
										'forum_id'	=> '4',
										'cat_id'	=> '2',
										'forum_name'	=> 'Болталка',
										'forum_desc'	=> '',
										'forum_status'	=> '0',
										'forum_order'	=> '40',
										'forum_posts'	=> '41',
										'forum_topics'	=> '9',
										'forum_last_post_id'	=> '93',
										'prune_next'	=> '',
										'prune_enable'	=> '0',
										'auth_view'	=> '0',
										'auth_read'	=> '0',
										'auth_post'	=> '1',
										'auth_reply'	=> '1',
										'auth_edit'	=> '1',
										'auth_delete'	=> '1',
										'auth_sticky'	=> '3',
										'auth_announce'	=> '3',
										'auth_global_announce'	=> '0',
										'auth_vote'	=> '1',
										'auth_pollcreate'	=> '1',
										'auth_attachments'	=> '1',
										'forum_link'	=> '',
										'forum_link_internal'	=> '0',
										'forum_link_hit_count'	=> '0',
										'forum_link_hit'	=> '0',
										'icon'	=> '',
										'main_type'	=> 'c',
										'auth_download'	=> '1',
										'auth_cal'	=> '0',
										'auth_news'	=> '2',
										'auth_ban'	=> '3',
										'auth_greencard'	=> '5',
										'auth_bluecard'	=> '1',
										'count_posts'	=> '1',
										'main'	=> 'c2',
									),
								array(
										'forum_id'	=> '5',
										'cat_id'	=> '0',
										'forum_name'	=> 'ПЕЧАЛЬ ВОРУЕТ!',
										'forum_desc'	=> 'В}{o&#595; &#8869;0&#923;ь|<o FOR С&#596;В0nМ',
										'forum_status'	=> '0',
										'forum_order'	=> '50',
										'forum_posts'	=> '4',
										'forum_topics'	=> '1',
										'forum_last_post_id'	=> '94',
										'prune_next'	=> '',
										'prune_enable'	=> '0',
										'auth_view'	=> '0',
										'auth_read'	=> '0',
										'auth_post'	=> '1',
										'auth_reply'	=> '1',
										'auth_edit'	=> '1',
										'auth_delete'	=> '1',
										'auth_sticky'	=> '3',
										'auth_announce'	=> '3',
										'auth_global_announce'	=> '0',
										'auth_vote'	=> '1',
										'auth_pollcreate'	=> '1',
										'auth_attachments'	=> '1',
										'forum_link'	=> '',
										'forum_link_internal'	=> '0',
										'forum_link_hit_count'	=> '0',
										'forum_link_hit'	=> '0',
										'icon'	=> '',
										'main_type'	=> 'c',
										'auth_download'	=> '1',
										'auth_cal'	=> '0',
										'auth_news'	=> '2',
										'auth_ban'	=> '3',
										'auth_greencard'	=> '5',
										'auth_bluecard'	=> '1',
										'count_posts'	=> '1',
										'main'	=> 'Root',
									),
							),
			'main'	=> array('Root', 'c2', 'c2', 'c2', 'Root'),
			'sub'	=> array(
								'Root'	=> array('c2', 'f5'),
								'c2'	=> array('f3', 'f2', 'f4'),
							),
			'mods'	=> array(
							),
);
?>