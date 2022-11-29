-- MySQL dump 10.13  Distrib 5.7.40, for Linux (x86_64)
--
-- Host: localhost    Database: b7_9629569_erosite
-- ------------------------------------------------------
-- Server version	5.7.40-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `phpbb2_acronyms`
--

DROP TABLE IF EXISTS `phpbb2_acronyms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_acronyms` (
  `acronym_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `acronym` varchar(80) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`acronym_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_acronyms`
--

LOCK TABLES `phpbb2_acronyms` WRITE;
/*!40000 ALTER TABLE `phpbb2_acronyms` DISABLE KEYS */;
INSERT INTO `phpbb2_acronyms` (`acronym_id`, `acronym`, `description`) VALUES (1,'phpBB2','phpBB2.de');
/*!40000 ALTER TABLE `phpbb2_acronyms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_album`
--

DROP TABLE IF EXISTS `phpbb2_album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_album` (
  `pic_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pic_filename` varchar(255) NOT NULL,
  `pic_thumbnail` varchar(255) DEFAULT NULL,
  `pic_title` varchar(255) NOT NULL,
  `pic_desc` text,
  `pic_user_id` mediumint(8) NOT NULL,
  `pic_username` varchar(32) DEFAULT NULL,
  `pic_user_ip` char(8) NOT NULL,
  `pic_time` int(11) unsigned NOT NULL,
  `pic_cat_id` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `pic_view_count` int(11) unsigned NOT NULL,
  `pic_lock` tinyint(3) NOT NULL,
  `pic_approval` tinyint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pic_id`),
  KEY `pic_cat_id` (`pic_cat_id`),
  KEY `pic_user_id` (`pic_user_id`),
  KEY `pic_time` (`pic_time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_album`
--

LOCK TABLES `phpbb2_album` WRITE;
/*!40000 ALTER TABLE `phpbb2_album` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_album_cat`
--

DROP TABLE IF EXISTS `phpbb2_album_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_album_cat` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) NOT NULL,
  `cat_desc` text,
  `cat_order` mediumint(8) NOT NULL,
  `cat_view_level` tinyint(3) NOT NULL DEFAULT '-1',
  `cat_upload_level` tinyint(3) NOT NULL,
  `cat_rate_level` tinyint(3) NOT NULL,
  `cat_comment_level` tinyint(3) NOT NULL,
  `cat_edit_level` tinyint(3) NOT NULL,
  `cat_delete_level` tinyint(3) NOT NULL DEFAULT '2',
  `cat_view_groups` varchar(255) DEFAULT NULL,
  `cat_upload_groups` varchar(255) DEFAULT NULL,
  `cat_rate_groups` varchar(255) DEFAULT NULL,
  `cat_comment_groups` varchar(255) DEFAULT NULL,
  `cat_edit_groups` varchar(255) DEFAULT NULL,
  `cat_delete_groups` varchar(255) DEFAULT NULL,
  `cat_moderator_groups` varchar(255) DEFAULT NULL,
  `cat_approval` tinyint(3) NOT NULL,
  `cat_parent` mediumint(8) unsigned DEFAULT NULL,
  `cat_user_id` mediumint(8) unsigned DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `cat_order` (`cat_order`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_album_cat`
--

LOCK TABLES `phpbb2_album_cat` WRITE;
/*!40000 ALTER TABLE `phpbb2_album_cat` DISABLE KEYS */;
INSERT INTO `phpbb2_album_cat` (`cat_id`, `cat_title`, `cat_desc`, `cat_order`, `cat_view_level`, `cat_upload_level`, `cat_rate_level`, `cat_comment_level`, `cat_edit_level`, `cat_delete_level`, `cat_view_groups`, `cat_upload_groups`, `cat_rate_groups`, `cat_comment_groups`, `cat_edit_groups`, `cat_delete_groups`, `cat_moderator_groups`, `cat_approval`, `cat_parent`, `cat_user_id`) VALUES (1,'Test category','',10,-1,0,0,0,0,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
/*!40000 ALTER TABLE `phpbb2_album_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_album_comment`
--

DROP TABLE IF EXISTS `phpbb2_album_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_album_comment` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comment_pic_id` int(11) unsigned NOT NULL,
  `comment_cat_id` int(11) NOT NULL,
  `comment_user_id` mediumint(8) NOT NULL,
  `comment_username` varchar(32) DEFAULT NULL,
  `comment_user_ip` char(8) NOT NULL,
  `comment_time` int(11) unsigned NOT NULL,
  `comment_text` text,
  `comment_edit_time` int(11) unsigned DEFAULT NULL,
  `comment_edit_count` smallint(5) unsigned NOT NULL,
  `comment_edit_user_id` mediumint(8) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `comment_pic_id` (`comment_pic_id`),
  KEY `comment_user_id` (`comment_user_id`),
  KEY `comment_user_ip` (`comment_user_ip`),
  KEY `comment_time` (`comment_time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_album_comment`
--

LOCK TABLES `phpbb2_album_comment` WRITE;
/*!40000 ALTER TABLE `phpbb2_album_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_album_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_album_config`
--

DROP TABLE IF EXISTS `phpbb2_album_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_album_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_album_config`
--

LOCK TABLES `phpbb2_album_config` WRITE;
/*!40000 ALTER TABLE `phpbb2_album_config` DISABLE KEYS */;
INSERT INTO `phpbb2_album_config` (`config_name`, `config_value`) VALUES ('album_category_sorting','cat_order'),('album_category_sorting_direction','ASC'),('album_debug_mode','0'),('album_version','.0.53'),('cols_per_page','4'),('comment','1'),('desc_length','512'),('fullpic_popup','0'),('gd_version','2'),('gif_allowed','0'),('hotlink_allowed','smartor.is-root.com'),('hotlink_prevent','0'),('index_enable_supercells','1'),('jpg_allowed','1'),('line_break_subcats','0'),('max_file_size','128000'),('max_height','600'),('max_pics','1024'),('max_width','800'),('mod_pics_limit','250'),('new_pic_check_interval','1M'),('personal_allow_gallery_mod','1'),('personal_allow_sub_categories','1'),('personal_gallery','0'),('personal_gallery_limit','10'),('personal_gallery_private','0'),('personal_gallery_view','-1'),('personal_show_recent_instead_of_nopics','1'),('personal_show_recent_in_subcats','1'),('personal_show_subcats_in_index','1'),('personal_sub_category_limit','10'),('png_allowed','1'),('rate','1'),('rate_scale','10'),('rows_per_page','3'),('show_all_in_personal_gallery','0'),('show_index_comments','0'),('show_index_last_comment','0'),('show_index_last_pic','0'),('show_index_pics','0'),('show_index_subcats','1'),('show_index_thumb','0'),('show_index_total_comments','0'),('show_index_total_pics','0'),('show_personal_gallery_link','1'),('show_recent_instead_of_nopics','1'),('show_recent_in_subcats','1'),('sort_method','pic_time'),('sort_order','DESC'),('thumbnail_cache','1'),('thumbnail_quality','50'),('thumbnail_size','125'),('user_pics_limit','50');
/*!40000 ALTER TABLE `phpbb2_album_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_album_rate`
--

DROP TABLE IF EXISTS `phpbb2_album_rate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_album_rate` (
  `rate_pic_id` int(11) unsigned NOT NULL,
  `rate_user_id` mediumint(8) NOT NULL,
  `rate_user_ip` char(8) NOT NULL,
  `rate_point` tinyint(3) unsigned NOT NULL,
  `rate_hon_point` tinyint(3) NOT NULL,
  KEY `rate_pic_id` (`rate_pic_id`),
  KEY `rate_user_id` (`rate_user_id`),
  KEY `rate_user_ip` (`rate_user_ip`),
  KEY `rate_point` (`rate_point`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_album_rate`
--

LOCK TABLES `phpbb2_album_rate` WRITE;
/*!40000 ALTER TABLE `phpbb2_album_rate` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_album_rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_album_sp_config`
--

DROP TABLE IF EXISTS `phpbb2_album_sp_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_album_sp_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_album_sp_config`
--

LOCK TABLES `phpbb2_album_sp_config` WRITE;
/*!40000 ALTER TABLE `phpbb2_album_sp_config` DISABLE KEYS */;
INSERT INTO `phpbb2_album_sp_config` (`config_name`, `config_value`) VALUES ('disp_high','1'),('disp_late','1'),('disp_rand','1'),('disp_watermark_at','3'),('hon_rate_sep','1'),('hon_rate_times','1'),('hon_rate_users','1'),('hon_rate_where',''),('img_cols','4'),('img_rows','2'),('midthumb_cache','1'),('midthumb_height','600'),('midthumb_use','1'),('midthumb_width','800'),('rate_type','2'),('use_watermark','0'),('wut_users','0');
/*!40000 ALTER TABLE `phpbb2_album_sp_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_anti_robotic_reg`
--

DROP TABLE IF EXISTS `phpbb2_anti_robotic_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_anti_robotic_reg` (
  `session_id` char(32) NOT NULL,
  `reg_key` char(5) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_anti_robotic_reg`
--

LOCK TABLES `phpbb2_anti_robotic_reg` WRITE;
/*!40000 ALTER TABLE `phpbb2_anti_robotic_reg` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_anti_robotic_reg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_attach_quota`
--

DROP TABLE IF EXISTS `phpbb2_attach_quota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_attach_quota` (
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  `quota_type` smallint(2) NOT NULL,
  `quota_limit_id` mediumint(8) unsigned NOT NULL,
  KEY `quota_type` (`quota_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_attach_quota`
--

LOCK TABLES `phpbb2_attach_quota` WRITE;
/*!40000 ALTER TABLE `phpbb2_attach_quota` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_attach_quota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_attachments`
--

DROP TABLE IF EXISTS `phpbb2_attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_attachments` (
  `attach_id` mediumint(8) unsigned NOT NULL,
  `post_id` mediumint(8) unsigned NOT NULL,
  `privmsgs_id` mediumint(8) unsigned NOT NULL,
  `user_id_1` mediumint(8) NOT NULL,
  `user_id_2` mediumint(8) NOT NULL,
  KEY `attach_id_post_id` (`attach_id`,`post_id`),
  KEY `attach_id_privmsgs_id` (`attach_id`,`privmsgs_id`),
  KEY `post_id` (`post_id`),
  KEY `privmsgs_id` (`privmsgs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_attachments`
--

LOCK TABLES `phpbb2_attachments` WRITE;
/*!40000 ALTER TABLE `phpbb2_attachments` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_attachments_config`
--

DROP TABLE IF EXISTS `phpbb2_attachments_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_attachments_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_attachments_config`
--

LOCK TABLES `phpbb2_attachments_config` WRITE;
/*!40000 ALTER TABLE `phpbb2_attachments_config` DISABLE KEYS */;
INSERT INTO `phpbb2_attachments_config` (`config_name`, `config_value`) VALUES ('allow_ftp_upload','0'),('allow_pm_attach','1'),('attachment_quota','52428800'),('attachment_topic_review','0'),('attach_version','2.4.3'),('default_pm_quota','0'),('default_upload_quota','0'),('disable_mod','0'),('display_order','0'),('download_path',''),('flash_autoplay','0'),('ftp_pass',''),('ftp_pasv_mode','1'),('ftp_path',''),('ftp_server',''),('ftp_user',''),('img_create_thumbnail','0'),('img_display_inlined','1'),('img_imagick',''),('img_link_height','0'),('img_link_width','0'),('img_max_height','0'),('img_max_width','0'),('img_min_thumb_filesize','12000'),('max_attachments','3'),('max_attachments_pm','1'),('max_filesize','262144'),('max_filesize_pm','262144'),('show_apcp','0'),('topic_icon','images/icon_clip.gif'),('upload_dir','files'),('upload_img','images/icon_clip.gif'),('use_gd2','0'),('wma_autoplay','0');
/*!40000 ALTER TABLE `phpbb2_attachments_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_attachments_desc`
--

DROP TABLE IF EXISTS `phpbb2_attachments_desc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_attachments_desc` (
  `attach_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `physical_filename` varchar(255) NOT NULL,
  `real_filename` varchar(255) NOT NULL,
  `download_count` mediumint(8) unsigned NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `extension` varchar(100) DEFAULT NULL,
  `mimetype` varchar(100) DEFAULT NULL,
  `filesize` int(20) NOT NULL,
  `filetime` int(11) NOT NULL,
  `thumbnail` tinyint(1) NOT NULL,
  PRIMARY KEY (`attach_id`),
  KEY `filetime` (`filetime`),
  KEY `physical_filename` (`physical_filename`),
  KEY `filesize` (`filesize`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_attachments_desc`
--

LOCK TABLES `phpbb2_attachments_desc` WRITE;
/*!40000 ALTER TABLE `phpbb2_attachments_desc` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_attachments_desc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_auth_access`
--

DROP TABLE IF EXISTS `phpbb2_auth_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_auth_access` (
  `group_id` mediumint(8) NOT NULL,
  `forum_id` smallint(5) unsigned NOT NULL,
  `auth_view` tinyint(1) NOT NULL,
  `auth_read` tinyint(1) NOT NULL,
  `auth_post` tinyint(1) NOT NULL,
  `auth_reply` tinyint(1) NOT NULL,
  `auth_edit` tinyint(1) NOT NULL,
  `auth_delete` tinyint(1) NOT NULL,
  `auth_sticky` tinyint(1) NOT NULL,
  `auth_announce` tinyint(1) NOT NULL,
  `auth_global_announce` tinyint(1) NOT NULL,
  `auth_vote` tinyint(1) NOT NULL,
  `auth_pollcreate` tinyint(1) NOT NULL,
  `auth_attachments` tinyint(1) NOT NULL,
  `auth_mod` tinyint(1) NOT NULL,
  `auth_download` tinyint(1) NOT NULL,
  `auth_cal` tinyint(1) NOT NULL,
  `auth_news` tinyint(1) NOT NULL,
  `auth_ban` tinyint(1) NOT NULL,
  `auth_greencard` tinyint(1) NOT NULL,
  `auth_bluecard` tinyint(1) NOT NULL,
  KEY `group_id` (`group_id`),
  KEY `forum_id` (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_auth_access`
--

LOCK TABLES `phpbb2_auth_access` WRITE;
/*!40000 ALTER TABLE `phpbb2_auth_access` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_auth_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_banlist`
--

DROP TABLE IF EXISTS `phpbb2_banlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_banlist` (
  `ban_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ban_userid` mediumint(8) NOT NULL,
  `ban_ip` char(8) NOT NULL,
  `ban_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ban_id`),
  KEY `ban_ip_user_id` (`ban_ip`,`ban_userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_banlist`
--

LOCK TABLES `phpbb2_banlist` WRITE;
/*!40000 ALTER TABLE `phpbb2_banlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_banlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_banner`
--

DROP TABLE IF EXISTS `phpbb2_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_banner` (
  `banner_id` mediumint(8) unsigned NOT NULL,
  `banner_name` text NOT NULL,
  `banner_spot` smallint(1) unsigned NOT NULL,
  `banner_forum` mediumint(8) unsigned NOT NULL,
  `banner_description` varchar(30) NOT NULL,
  `banner_url` varchar(90) NOT NULL,
  `banner_owner` mediumint(8) NOT NULL,
  `banner_click` mediumint(8) unsigned NOT NULL,
  `banner_view` mediumint(8) unsigned NOT NULL,
  `banner_weigth` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `banner_active` tinyint(1) NOT NULL,
  `banner_timetype` tinyint(1) NOT NULL,
  `time_begin` int(11) NOT NULL,
  `time_end` int(11) NOT NULL,
  `date_begin` int(11) NOT NULL,
  `date_end` int(11) NOT NULL,
  `banner_level` tinyint(1) NOT NULL,
  `banner_level_type` tinyint(1) NOT NULL,
  `banner_comment` varchar(50) NOT NULL,
  `banner_type` mediumint(5) NOT NULL,
  `banner_width` mediumint(5) unsigned NOT NULL,
  `banner_height` mediumint(5) NOT NULL,
  `banner_filter` tinyint(1) NOT NULL,
  `banner_filter_time` mediumint(5) NOT NULL DEFAULT '600',
  KEY `banner_id` (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_banner`
--

LOCK TABLES `phpbb2_banner` WRITE;
/*!40000 ALTER TABLE `phpbb2_banner` DISABLE KEYS */;
INSERT INTO `phpbb2_banner` (`banner_id`, `banner_name`, `banner_spot`, `banner_forum`, `banner_description`, `banner_url`, `banner_owner`, `banner_click`, `banner_view`, `banner_weigth`, `banner_active`, `banner_timetype`, `time_begin`, `time_end`, `date_begin`, `date_end`, `banner_level`, `banner_level_type`, `banner_comment`, `banner_type`, `banner_width`, `banner_height`, `banner_filter`, `banner_filter_time`) VALUES (1,'images/banner/phpbb2_banner_486.gif',0,0,'phpBB2.de - Your No.1 Source','http://www.phpbb2.de',2,0,12,50,1,0,0,0,0,0,-1,2,'phpBB2.de Banner 468 * 60',0,468,60,0,600),(2,'images/banner/phpbb2_de_logo.gif',16,0,'phpBB2.de - Your No.1 Source','http://www.phpbb2.de',2,0,11,50,1,0,0,0,0,0,-1,2,'phpBB2.de Portal Button 88 * 31',0,88,31,0,0),(3,'images/banner/smartorsite_logo.gif',17,0,'Smartors Site','http://smartor.is-root.com',2,0,7,50,1,0,0,0,0,0,-1,2,'Smartor Portal Button 88 * 31',0,88,31,0,600),(4,'images/banner/phpBB_88a.gif',18,0,'phpBB.com - Home of phpBB','http://www.phpbb.com',2,0,5,50,1,0,0,0,0,0,-1,2,'phpBB.com Portal Button 88 * 31',0,88,31,0,600),(5,'images/banner/forumstyles_button.gif',19,0,'Forumstyles','http://www.forumstyles.de',2,0,3,50,1,0,0,0,0,0,-1,2,'Forumstyles.de Portal Button 88 * 31',0,88,31,0,600);
/*!40000 ALTER TABLE `phpbb2_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_banner_stats`
--

DROP TABLE IF EXISTS `phpbb2_banner_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_banner_stats` (
  `banner_id` mediumint(8) unsigned NOT NULL,
  `click_date` int(11) NOT NULL,
  `click_ip` char(8) NOT NULL,
  `click_user` mediumint(8) NOT NULL,
  `user_duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_banner_stats`
--

LOCK TABLES `phpbb2_banner_stats` WRITE;
/*!40000 ALTER TABLE `phpbb2_banner_stats` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_banner_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_bookmarks`
--

DROP TABLE IF EXISTS `phpbb2_bookmarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_bookmarks` (
  `topic_id` mediumint(8) unsigned NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  KEY `topic_id` (`topic_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_bookmarks`
--

LOCK TABLES `phpbb2_bookmarks` WRITE;
/*!40000 ALTER TABLE `phpbb2_bookmarks` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_bookmarks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_captcha_config`
--

DROP TABLE IF EXISTS `phpbb2_captcha_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_captcha_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(100) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_captcha_config`
--

LOCK TABLES `phpbb2_captcha_config` WRITE;
/*!40000 ALTER TABLE `phpbb2_captcha_config` DISABLE KEYS */;
INSERT INTO `phpbb2_captcha_config` (`config_name`, `config_value`) VALUES ('arcs','0'),('background_color','#E5ECF9'),('chess','0'),('ellipses','1'),('font','0'),('foreground_lattice_x','15'),('foreground_lattice_y','15'),('gammacorrect','0.8'),('height','60'),('image','0'),('jpeg','0'),('jpeg_quality','50'),('lattice_color','#FFFFFF'),('lines','1'),('pre_letters','0'),('pre_letters_great','0'),('width','320');
/*!40000 ALTER TABLE `phpbb2_captcha_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_categories`
--

DROP TABLE IF EXISTS `phpbb2_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_categories` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(100) DEFAULT NULL,
  `cat_order` mediumint(8) unsigned NOT NULL,
  `cat_main_type` char(1) DEFAULT NULL,
  `cat_main` mediumint(8) unsigned NOT NULL,
  `cat_desc` text NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `cat_order` (`cat_order`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_categories`
--

LOCK TABLES `phpbb2_categories` WRITE;
/*!40000 ALTER TABLE `phpbb2_categories` DISABLE KEYS */;
INSERT INTO `phpbb2_categories` (`cat_id`, `cat_title`, `cat_order`, `cat_main_type`, `cat_main`, `cat_desc`, `icon`) VALUES (1,'Test category 1',10,NULL,0,'',NULL);
/*!40000 ALTER TABLE `phpbb2_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_color_groups`
--

DROP TABLE IF EXISTS `phpbb2_color_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_color_groups` (
  `group_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  `group_color` varchar(50) NOT NULL,
  `hidden` tinyint(1) NOT NULL,
  `order_num` mediumint(9) NOT NULL,
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `group_name` (`group_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_color_groups`
--

LOCK TABLES `phpbb2_color_groups` WRITE;
/*!40000 ALTER TABLE `phpbb2_color_groups` DISABLE KEYS */;
INSERT INTO `phpbb2_color_groups` (`group_id`, `group_name`, `group_color`, `hidden`, `order_num`) VALUES (1,'Administrator','red',0,1),(2,'Super Mod','blue',0,2),(3,'Moderator','green',0,3);
/*!40000 ALTER TABLE `phpbb2_color_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_config`
--

DROP TABLE IF EXISTS `phpbb2_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_config`
--

LOCK TABLES `phpbb2_config` WRITE;
/*!40000 ALTER TABLE `phpbb2_config` DISABLE KEYS */;
INSERT INTO `phpbb2_config` (`config_name`, `config_value`) VALUES ('absent_button','1'),('allow_autologin','1'),('allow_avatar_local','0'),('allow_avatar_remote','0'),('allow_avatar_upload','0'),('allow_bbcode','1'),('allow_html','0'),('allow_html_tags','b,i,u,pre'),('allow_namechange','0'),('allow_news','1'),('allow_rss','1'),('allow_sig','1'),('allow_smilies','1'),('allow_theme_create','0'),('announcement_date_display','1'),('announcement_date_display_over','0'),('announcement_display','1'),('announcement_display_forum','1'),('announcement_display_forum_over','0'),('announcement_display_over','0'),('announcement_duration','7'),('announcement_forum','1'),('announcement_forum_over','0'),('announcement_last_prune','1669755599'),('announcement_prune_strategy','0'),('announcement_split','1'),('announcement_split_over','0'),('avatar_filesize','6144'),('avatar_gallery_path','images/avatars/gallery'),('avatar_max_height','80'),('avatar_max_width','80'),('avatar_path','images/avatars'),('birthday_check_day','7'),('birthday_greeting','1'),('birthday_required','0'),('block_time','15'),('bluecard_limit','3'),('bluecard_limit_2','1'),('board_disable','0'),('board_disable_msg','Rebuild Search in progress...'),('board_email',''),('board_email_form','0'),('board_email_sig','Thanks, The Management'),('board_startdate','1411831130'),('board_timezone','0'),('calendar_birthday','1'),('calendar_birthday_over','0'),('calendar_display_open','0'),('calendar_display_open_over','0'),('calendar_forum','1'),('calendar_forum_over','0'),('calendar_header_cells','7'),('calendar_header_cells_over','0'),('calendar_nb_row','5'),('calendar_nb_row_over','0'),('calendar_text_length','200'),('calendar_title_length','30'),('calendar_week_start','1'),('calendar_week_start_over','0'),('config_id','1'),('cookie_domain',''),('cookie_name','phpbb2mysql'),('cookie_path','/'),('cookie_secure','0'),('coppa_fax',''),('coppa_mail',''),('default_dateformat','D M d, Y g:i a'),('default_lang','russian'),('default_style','1'),('display_viewonline','2'),('display_viewonline_over','0'),('enable_confirm','1'),('flood_interval','15'),('force_complex_password','0'),('google_visit_counter','1'),('gzip_compress','0'),('hidde_last_logon','0'),('hot_threshold','25'),('icon_per_row','10'),('last_topic_title','1'),('last_topic_title_length','24'),('last_topic_title_over','0'),('login_reset_time','30'),('max_autologin_time','0'),('max_inbox_privmsgs','50'),('max_link_bookmarks','0'),('max_login_attempts','5'),('max_login_error','3'),('max_password_age','730'),('max_poll_options','10'),('max_posts','1'),('max_savebox_privmsgs','50'),('max_sentbox_privmsgs','25'),('max_sig_chars','255'),('max_topics','1'),('max_users','1'),('max_user_age','100'),('max_user_bancard','10'),('min_password_len','6'),('min_user_age','5'),('mod_able_sent_absent','0'),('news_base_url',''),('news_index_file','portal.php'),('news_item_num','10'),('news_item_trim','0'),('news_path','images/news'),('news_rss_cat',''),('news_rss_desc',''),('news_rss_image',''),('news_rss_image_desc',''),('news_rss_item_count','15'),('news_rss_language','en_us'),('news_rss_show_abstract','1'),('news_rss_ttl','60'),('news_title_trim','0'),('override_user_style','0'),('password_not_login','1'),('posts_per_page','15'),('privmsg_disable','0'),('prune_enable','1'),('prune_shouts','0'),('rand_seed','1c430096082ca128bb3cbf2c2489b23a'),('record_online_date','1669724396'),('record_online_users','1'),('registration_closed',''),('registration_status','0'),('report_forum','0'),('require_activation','0'),('script_path',''),('search_flood_interval','15'),('search_min_chars','3'),('sendmail_fix','0'),('server_name',''),('server_port','80'),('session_length','3600'),('sitename','yourdomain.com'),('site_desc','A _little_ text to describe your forum'),('smilies_path','images/smiles'),('smtp_delivery','0'),('smtp_host',''),('smtp_password',''),('smtp_username',''),('split_announce','1'),('split_announce_over','0'),('split_cat','1'),('split_cat_over','0'),('split_global_announce','1'),('split_global_announce_over','0'),('split_news','1'),('split_news_over','0'),('split_sticky','1'),('split_sticky_over','0'),('split_topic_split','0'),('split_topic_split_over','0'),('sub_forum','1'),('sub_forum_over','0'),('sub_level_links','2'),('sub_level_links_over','0'),('topics_per_page','50'),('users_allow_absence','0'),('use_ajax_edit','1'),('use_ajax_edit_over','0'),('use_ajax_preview','1'),('use_ajax_preview_over','0'),('version','.0.22'),('xs_add_comments','0'),('xs_auto_compile','1'),('xs_auto_recompile','1'),('xs_check_switches','1'),('xs_def_template','subSilver'),('xs_downloads_count','0'),('xs_downloads_default','0'),('xs_ftp_host',''),('xs_ftp_login',''),('xs_ftp_path',''),('xs_php','php'),('xs_shownav','1'),('xs_template_time','1669724395'),('xs_use_cache','1'),('xs_version','8'),('xs_warn_includes','1');
/*!40000 ALTER TABLE `phpbb2_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_confirm`
--

DROP TABLE IF EXISTS `phpbb2_confirm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_confirm` (
  `confirm_id` char(32) NOT NULL,
  `session_id` char(32) NOT NULL,
  `code` char(6) NOT NULL,
  PRIMARY KEY (`session_id`,`confirm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_confirm`
--

LOCK TABLES `phpbb2_confirm` WRITE;
/*!40000 ALTER TABLE `phpbb2_confirm` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_confirm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_ct_filter`
--

DROP TABLE IF EXISTS `phpbb2_ct_filter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_ct_filter` (
  `id` mediumint(8) unsigned NOT NULL,
  `list` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_ct_filter`
--

LOCK TABLES `phpbb2_ct_filter` WRITE;
/*!40000 ALTER TABLE `phpbb2_ct_filter` DISABLE KEYS */;
INSERT INTO `phpbb2_ct_filter` (`id`, `list`) VALUES (1,'WebStripper'),(2,'NetMechanic'),(3,'CherryPicker'),(4,'EmailCollector'),(5,'EmailSiphon'),(6,'WebBandit'),(7,'EmailWolf'),(8,'ExtractorPro'),(9,'SiteSnagger'),(10,'CheeseBot'),(11,'ia_archiver/1.6'),(12,'Website Quester'),(13,'WebZip'),(14,'moget/2.1'),(15,'WebSauger'),(16,'WebCopier'),(17,'WWW-Collector-E'),(18,'InfoNaviRobot'),(19,'Harvest/1.5'),(20,'Bullseye/1.0'),(21,'lwp-trivial/1.34'),(22,'lwp-trivial'),(23,'LinkWalker'),(24,'LinkextractorPro'),(25,'Offline Explorer'),(26,'BlowFish/1.0'),(27,'WebEnhancer'),(28,'TightTwatBot'),(29,'LinkScan/8.1a Unix'),(30,'WebDownloader'),(31,'lwp-trivial/1.33'),(32,'lwp-trivial/1.38'),(33,'BruteForce'),(34,'lwp');
/*!40000 ALTER TABLE `phpbb2_ct_filter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_ct_viskey`
--

DROP TABLE IF EXISTS `phpbb2_ct_viskey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_ct_viskey` (
  `confirm_id` char(32) NOT NULL,
  `session_id` char(32) NOT NULL,
  `code` char(6) NOT NULL,
  PRIMARY KEY (`session_id`,`confirm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_ct_viskey`
--

LOCK TABLES `phpbb2_ct_viskey` WRITE;
/*!40000 ALTER TABLE `phpbb2_ct_viskey` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_ct_viskey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_ctrack`
--

DROP TABLE IF EXISTS `phpbb2_ctrack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_ctrack` (
  `name` varchar(50) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_ctrack`
--

LOCK TABLES `phpbb2_ctrack` WRITE;
/*!40000 ALTER TABLE `phpbb2_ctrack` DISABLE KEYS */;
INSERT INTO `phpbb2_ctrack` (`name`, `value`) VALUES ('lastreg','0'),('version','4.1.7'),('footer','3'),('floodlog','100'),('proxylog','100'),('filter','1'),('floodprot','1'),('maxsearch','4'),('searchtime','16'),('regblock','1'),('regtime','10'),('autoban','1'),('posttimespan','200'),('postintime','10'),('lastreg_ip','000.000.000.000'),('mailfeature','1'),('pwreset','1'),('loginfeature','1');
/*!40000 ALTER TABLE `phpbb2_ctrack` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_disallow`
--

DROP TABLE IF EXISTS `phpbb2_disallow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_disallow` (
  `disallow_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `disallow_username` varchar(25) NOT NULL,
  PRIMARY KEY (`disallow_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_disallow`
--

LOCK TABLES `phpbb2_disallow` WRITE;
/*!40000 ALTER TABLE `phpbb2_disallow` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_disallow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_extension_groups`
--

DROP TABLE IF EXISTS `phpbb2_extension_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_extension_groups` (
  `group_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `group_name` char(20) NOT NULL,
  `cat_id` tinyint(2) NOT NULL,
  `allow_group` tinyint(1) NOT NULL,
  `download_mode` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `upload_icon` varchar(100) DEFAULT NULL,
  `max_filesize` int(20) NOT NULL,
  `forum_permissions` varchar(255) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_extension_groups`
--

LOCK TABLES `phpbb2_extension_groups` WRITE;
/*!40000 ALTER TABLE `phpbb2_extension_groups` DISABLE KEYS */;
INSERT INTO `phpbb2_extension_groups` (`group_id`, `group_name`, `cat_id`, `allow_group`, `download_mode`, `upload_icon`, `max_filesize`, `forum_permissions`) VALUES (1,'Images',1,1,1,'',0,''),(2,'Archives',0,1,1,'',0,''),(3,'Plain Text',0,0,1,'',0,''),(4,'Documents',0,0,1,'',0,''),(5,'Real Media',0,0,2,'',0,''),(6,'Streams',2,0,1,'',0,''),(7,'Flash Files',3,0,1,'',0,'');
/*!40000 ALTER TABLE `phpbb2_extension_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_extensions`
--

DROP TABLE IF EXISTS `phpbb2_extensions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_extensions` (
  `ext_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL,
  `extension` varchar(100) NOT NULL,
  `comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ext_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_extensions`
--

LOCK TABLES `phpbb2_extensions` WRITE;
/*!40000 ALTER TABLE `phpbb2_extensions` DISABLE KEYS */;
INSERT INTO `phpbb2_extensions` (`ext_id`, `group_id`, `extension`, `comment`) VALUES (1,1,'gif',''),(2,1,'png',''),(3,1,'jpeg',''),(4,1,'jpg',''),(5,1,'tif',''),(6,1,'tga',''),(7,2,'gtar',''),(8,2,'gz',''),(9,2,'tar',''),(10,2,'zip',''),(11,2,'rar',''),(12,2,'ace',''),(13,3,'txt',''),(14,3,'c',''),(15,3,'h',''),(16,3,'cpp',''),(17,3,'hpp',''),(18,3,'diz',''),(19,4,'xls',''),(20,4,'doc',''),(21,4,'dot',''),(22,4,'pdf',''),(23,4,'ai',''),(24,4,'ps',''),(25,4,'ppt',''),(26,5,'rm',''),(27,6,'wma',''),(28,7,'swf','');
/*!40000 ALTER TABLE `phpbb2_extensions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_flags`
--

DROP TABLE IF EXISTS `phpbb2_flags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_flags` (
  `flag_id` int(10) NOT NULL AUTO_INCREMENT,
  `flag_name` varchar(25) DEFAULT NULL,
  `flag_image` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`flag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_flags`
--

LOCK TABLES `phpbb2_flags` WRITE;
/*!40000 ALTER TABLE `phpbb2_flags` DISABLE KEYS */;
INSERT INTO `phpbb2_flags` (`flag_id`, `flag_name`, `flag_image`) VALUES (1,'afghanistan','afghanistan.gif'),(2,'albania','albania.gif'),(3,'algeria','algeria.gif'),(4,'andorra','andorra.gif'),(5,'angola','angola.gif'),(6,'antigua and barbuda','antiguabarbuda.gif'),(7,'argentina','argentina.gif'),(8,'armenia','armenia.gif'),(9,'australia','australia.gif'),(10,'austria','austria.gif'),(11,'azerbaijan','azerbaijan.gif'),(12,'bahamas','bahamas.gif'),(13,'bahrain','bahrain.gif'),(14,'bangladesh','bangladesh.gif'),(15,'barbados','barbados.gif'),(16,'belarus','belarus.gif'),(17,'belgium','belgium.gif'),(18,'belize','belize.gif'),(19,'benin','benin.gif'),(20,'bhutan','bhutan.gif'),(21,'bolivia','bolivia.gif'),(22,'bosnia herzegovina','bosnia_herzegovina.gif'),(23,'botswana','botswana.gif'),(24,'brazil','brazil.gif'),(25,'brunei','brunei.gif'),(26,'bulgaria','bulgaria.gif'),(27,'burkinafaso','burkinafaso.gif'),(28,'burma','burma.gif'),(29,'burundi','burundi.gif'),(30,'cambodia','cambodia.gif'),(31,'cameroon','cameroon.gif'),(32,'canada','canada.gif'),(33,'central african rep','centralafricanrep.gif'),(34,'chad','chad.gif'),(35,'chile','chile.gif'),(36,'china','china.gif'),(37,'columbia','columbia.gif'),(38,'comoros','comoros.gif'),(39,'congo','congo.gif'),(40,'costarica','costarica.gif'),(41,'croatia','croatia.gif'),(42,'cuba','cuba.gif'),(43,'cyprus','cyprus.gif'),(44,'czech republic','czechrepublic.gif'),(45,'demrepcongo','demrepcongo.gif'),(46,'denmark','denmark.gif'),(47,'djibouti','djibouti.gif'),(48,'dominica','dominica.gif'),(49,'dominican rep','dominicanrep.gif'),(50,'ecuador','ecuador.gif'),(51,'egypt','egypt.gif'),(52,'elsalvador','elsalvador.gif'),(53,'eq guinea','eq_guinea.gif'),(54,'eritrea','eritrea.gif'),(55,'estonia','estonia.gif'),(56,'ethiopia','ethiopia.gif'),(57,'fiji','fiji.gif'),(58,'finland','finland.gif'),(59,'france','france.gif'),(60,'gabon','gabon.gif'),(61,'gambia','gambia.gif'),(62,'georgia','georgia.gif'),(63,'germany','germany.gif'),(64,'ghana','ghana.gif'),(65,'greece','greece.gif'),(66,'grenada','grenada.gif'),(67,'grenadines','grenadines.gif'),(68,'guatemala','guatemala.gif'),(69,'guinea','guinea.gif'),(70,'guineabissau','guineabissau.gif'),(71,'guyana','guyana.gif'),(72,'haiti','haiti.gif'),(73,'honduras','honduras.gif'),(74,'hong kong','hong_kong.gif'),(75,'hungary','hungary.gif'),(76,'iceland','iceland.gif'),(77,'india','india.gif'),(78,'indonesia','indonesia.gif'),(79,'iran','iran.gif'),(80,'iraq','iraq.gif'),(81,'ireland','ireland.gif'),(82,'israel','israel.gif'),(83,'italy','italy.gif'),(84,'ivory coast','ivorycoast.gif'),(85,'jamaica','jamaica.gif'),(86,'japan','japan.gif'),(87,'jordan','jordan.gif'),(88,'kazakhstan','kazakhstan.gif'),(89,'kenya','kenya.gif'),(90,'kiribati','kiribati.gif'),(91,'kuwait','kuwait.gif'),(92,'kyrgyzstan','kyrgyzstan.gif'),(93,'laos','laos.gif'),(94,'latvia','latvia.gif'),(95,'lebanon','lebanon.gif'),(96,'liberia','liberia.gif'),(97,'libya','libya.gif'),(98,'liechtenstein','liechtenstein.gif'),(99,'lithuania','lithuania.gif'),(100,'luxembourg','luxembourg.gif'),(101,'macadonia','macadonia.gif'),(102,'macau','macau.gif'),(103,'madagascar','madagascar.gif'),(104,'malawi','malawi.gif'),(105,'malaysia','malaysia.gif'),(106,'maldives','maldives.gif'),(107,'mali','mali.gif'),(108,'malta','malta.gif'),(109,'mauritania','mauritania.gif'),(110,'mauritius','mauritius.gif'),(111,'mexico','mexico.gif'),(112,'micronesia','micronesia.gif'),(113,'moldova','moldova.gif'),(114,'monaco','monaco.gif'),(115,'mongolia','mongolia.gif'),(116,'morocco','morocco.gif'),(117,'mozambique','mozambique.gif'),(118,'namibia','namibia.gif'),(119,'nauru','nauru.gif'),(120,'nepal','nepal.gif'),(121,'neth antilles','neth_antilles.gif'),(122,'netherlands','netherlands.gif'),(123,'new zealand','newzealand.gif'),(124,'nicaragua','nicaragua.gif'),(125,'niger','niger.gif'),(126,'nigeria','nigeria.gif'),(127,'north korea','north_korea.gif'),(128,'norway','norway.gif'),(129,'oman','oman.gif'),(130,'pakistan','pakistan.gif'),(131,'panama','panama.gif'),(132,'papua newguinea','papuanewguinea.gif'),(133,'paraguay','paraguay.gif'),(134,'peru','peru.gif'),(135,'philippines','philippines.gif'),(136,'poland','poland.gif'),(137,'portugal','portugal.gif'),(138,'puertorico','puertorico.gif'),(139,'qatar','qatar.gif'),(140,'rawanda','rawanda.gif'),(141,'romania','romania.gif'),(142,'russia','russia.gif'),(143,'sao tome','sao_tome.gif'),(144,'saudiarabia','saudiarabia.gif'),(145,'senegal','senegal.gif'),(146,'serbia','serbia.gif'),(147,'seychelles','seychelles.gif'),(148,'sierraleone','sierraleone.gif'),(149,'singapore','singapore.gif'),(150,'slovakia','slovakia.gif'),(151,'slovenia','slovenia.gif'),(152,'solomon islands','solomon_islands.gif'),(153,'somalia','somalia.gif'),(154,'south_korea','south_korea.gif'),(155,'south africa','southafrica.gif'),(156,'spain','spain.gif'),(157,'srilanka','srilanka.gif'),(158,'stkitts nevis','stkitts_nevis.gif'),(159,'stlucia','stlucia.gif'),(160,'sudan','sudan.gif'),(161,'suriname','suriname.gif'),(162,'sweden','sweden.gif'),(163,'switzerland','switzerland.gif'),(164,'syria','syria.gif'),(165,'taiwan','taiwan.gif'),(166,'tajikistan','tajikistan.gif'),(167,'tanzania','tanzania.gif'),(168,'thailand','thailand.gif'),(169,'togo','togo.gif'),(170,'tonga','tonga.gif'),(171,'trinidad and tobago','trinidadandtobago.gif'),(172,'tunisia','tunisia.gif'),(173,'turkey','turkey.gif'),(174,'turkmenistan','turkmenistan.gif'),(175,'tuvala','tuvala.gif'),(176,'uae','uae.gif'),(177,'uganda','uganda.gif'),(178,'uk','uk.gif'),(179,'ukraine','ukraine.gif'),(180,'uruguay','uruguay.gif'),(181,'usa','usa.gif'),(182,'ussr','ussr.gif'),(183,'uzbekistan','uzbekistan.gif'),(184,'vanuatu','vanuatu.gif'),(185,'venezuela','venezuela.gif'),(186,'vietnam','vietnam.gif'),(187,'western samoa','western_samoa.gif'),(188,'yemen','yemen.gif'),(189,'yugoslavia','yugoslavia.gif'),(190,'zaire','zaire.gif'),(191,'zambia','zambia.gif'),(192,'zimbabwe','zimbabwe.gif');
/*!40000 ALTER TABLE `phpbb2_flags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_forbidden_extensions`
--

DROP TABLE IF EXISTS `phpbb2_forbidden_extensions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_forbidden_extensions` (
  `ext_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `extension` varchar(100) NOT NULL,
  PRIMARY KEY (`ext_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_forbidden_extensions`
--

LOCK TABLES `phpbb2_forbidden_extensions` WRITE;
/*!40000 ALTER TABLE `phpbb2_forbidden_extensions` DISABLE KEYS */;
INSERT INTO `phpbb2_forbidden_extensions` (`ext_id`, `extension`) VALUES (1,'php'),(2,'php3'),(3,'php4'),(4,'phtml'),(5,'pl'),(6,'asp'),(7,'cgi');
/*!40000 ALTER TABLE `phpbb2_forbidden_extensions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_forum_prune`
--

DROP TABLE IF EXISTS `phpbb2_forum_prune`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_forum_prune` (
  `prune_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` smallint(5) unsigned NOT NULL,
  `prune_days` smallint(5) unsigned NOT NULL,
  `prune_freq` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`prune_id`),
  KEY `forum_id` (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_forum_prune`
--

LOCK TABLES `phpbb2_forum_prune` WRITE;
/*!40000 ALTER TABLE `phpbb2_forum_prune` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_forum_prune` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_forums`
--

DROP TABLE IF EXISTS `phpbb2_forums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_forums` (
  `forum_id` smallint(5) unsigned NOT NULL,
  `cat_id` mediumint(8) unsigned NOT NULL,
  `forum_name` varchar(150) DEFAULT NULL,
  `forum_desc` text,
  `forum_status` tinyint(4) NOT NULL,
  `forum_order` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `forum_posts` mediumint(8) unsigned NOT NULL,
  `forum_topics` mediumint(8) unsigned NOT NULL,
  `forum_last_post_id` mediumint(8) unsigned NOT NULL,
  `prune_next` int(11) DEFAULT NULL,
  `prune_enable` tinyint(1) NOT NULL,
  `auth_view` tinyint(2) NOT NULL,
  `auth_read` tinyint(2) NOT NULL,
  `auth_post` tinyint(2) NOT NULL,
  `auth_reply` tinyint(2) NOT NULL,
  `auth_edit` tinyint(2) NOT NULL,
  `auth_delete` tinyint(2) NOT NULL,
  `auth_sticky` tinyint(2) NOT NULL,
  `auth_announce` tinyint(2) NOT NULL,
  `auth_global_announce` tinyint(2) NOT NULL,
  `auth_vote` tinyint(2) NOT NULL,
  `auth_pollcreate` tinyint(2) NOT NULL,
  `auth_attachments` tinyint(2) NOT NULL,
  `forum_link` varchar(255) DEFAULT NULL,
  `forum_link_internal` tinyint(1) NOT NULL,
  `forum_link_hit_count` tinyint(1) NOT NULL,
  `forum_link_hit` bigint(20) unsigned NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `main_type` char(1) DEFAULT NULL,
  `auth_download` tinyint(2) NOT NULL,
  `auth_cal` tinyint(2) NOT NULL,
  `auth_news` tinyint(2) NOT NULL DEFAULT '2',
  `auth_ban` tinyint(2) NOT NULL DEFAULT '3',
  `auth_greencard` tinyint(2) NOT NULL DEFAULT '5',
  `auth_bluecard` tinyint(2) NOT NULL DEFAULT '1',
  `count_posts` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`forum_id`),
  KEY `forums_order` (`forum_order`),
  KEY `cat_id` (`cat_id`),
  KEY `forum_last_post_id` (`forum_last_post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_forums`
--

LOCK TABLES `phpbb2_forums` WRITE;
/*!40000 ALTER TABLE `phpbb2_forums` DISABLE KEYS */;
INSERT INTO `phpbb2_forums` (`forum_id`, `cat_id`, `forum_name`, `forum_desc`, `forum_status`, `forum_order`, `forum_posts`, `forum_topics`, `forum_last_post_id`, `prune_next`, `prune_enable`, `auth_view`, `auth_read`, `auth_post`, `auth_reply`, `auth_edit`, `auth_delete`, `auth_sticky`, `auth_announce`, `auth_global_announce`, `auth_vote`, `auth_pollcreate`, `auth_attachments`, `forum_link`, `forum_link_internal`, `forum_link_hit_count`, `forum_link_hit`, `icon`, `main_type`, `auth_download`, `auth_cal`, `auth_news`, `auth_ban`, `auth_greencard`, `auth_bluecard`, `count_posts`) VALUES (1,1,'Test Forum 1','This is just a test forum.',0,10,1,1,1,NULL,0,0,0,0,0,1,1,3,3,5,1,1,3,NULL,0,0,0,NULL,NULL,0,3,2,3,5,1,'1');
/*!40000 ALTER TABLE `phpbb2_forums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_groups`
--

DROP TABLE IF EXISTS `phpbb2_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_groups` (
  `group_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `group_type` tinyint(4) NOT NULL DEFAULT '1',
  `group_name` varchar(40) NOT NULL,
  `group_description` varchar(255) NOT NULL,
  `group_moderator` mediumint(8) NOT NULL,
  `group_single_user` tinyint(1) NOT NULL DEFAULT '1',
  `group_color_group` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`group_id`),
  KEY `group_single_user` (`group_single_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_groups`
--

LOCK TABLES `phpbb2_groups` WRITE;
/*!40000 ALTER TABLE `phpbb2_groups` DISABLE KEYS */;
INSERT INTO `phpbb2_groups` (`group_id`, `group_type`, `group_name`, `group_description`, `group_moderator`, `group_single_user`, `group_color_group`) VALUES (1,1,'Anonymous','Personal User',0,1,0),(2,1,'Admin','Personal User',0,1,0);
/*!40000 ALTER TABLE `phpbb2_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_hacks_list`
--

DROP TABLE IF EXISTS `phpbb2_hacks_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_hacks_list` (
  `hack_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `hack_add_date` int(10) unsigned NOT NULL,
  `hack_name` varchar(255) NOT NULL,
  `hack_desc` varchar(255) NOT NULL,
  `hack_author` varchar(255) NOT NULL,
  `hack_author_email` varchar(255) NOT NULL,
  `hack_author_website` tinytext NOT NULL,
  `hack_version` varchar(32) NOT NULL,
  `hack_hide` enum('Yes','No') NOT NULL DEFAULT 'No',
  `hack_download_url` text NOT NULL,
  `hack_file` varchar(255) NOT NULL,
  `hack_file_mtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`hack_id`),
  UNIQUE KEY `hack_name` (`hack_name`),
  KEY `hack_hide` (`hack_hide`),
  KEY `hack_file` (`hack_file`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_hacks_list`
--

LOCK TABLES `phpbb2_hacks_list` WRITE;
/*!40000 ALTER TABLE `phpbb2_hacks_list` DISABLE KEYS */;
INSERT INTO `phpbb2_hacks_list` (`hack_id`, `hack_add_date`, `hack_name`, `hack_desc`, `hack_author`, `hack_author_email`, `hack_author_website`, `hack_version`, `hack_hide`, `hack_download_url`, `hack_file`, `hack_file_mtime`) VALUES (3,0,'Admin Account Actions','Displays all users which expect an account activation on an extra site inside the admin panel (admin activation and user activation). You can activate or delete them.','Acid','','','1.2.1','No','','',0),(6,0,'Supercharged Album Pack 1','A series of modification for Album version 2 by Smartor ( http://smartor.is-root.com )','Volodymyr (CLowN) Skoryk','','','1.5.1','No','','',0),(7,0,'Photo Album Addon v2 for phpBB2','This is a phpBB-based photo album/gallery management system.','Smartor','smartor_xp@hotmail.com','http://smartor.is-root.com','','No','','',0),(8,0,'Align text BBcode Mod','Adds a text alignment bbcode tag to your forum','davidls','davidls14@yahoo.com.au','http://www27.brinkster.com/bb2c','2.0.6','No','','',0),(9,0,'Anti Robotic Register Flood','This will add a Random-graphical-text Vadiation field in Registration form to protect your phpBB from being flooded of robotic-member-registration (like many free webhost signup form...)','Smartor','smartor_xp@hotmail.com','http://smartor.is-root.com','1.1.4','No','','',0),(12,0,'File Attachment Mod v2','This Mod adds the ability to attach files in phpBB2.','Acyd Burn','','http://www.opentools.de','2.4.3','No','','',0),(13,0,'BBCode Buttons Organizer','Allows for neater display of additional quick BBCode buttons.','Nuttzy','nospam@blizzhackers.com','http://www.blizzhackers.com','1.2.1','No','','',0),(14,0,'Birthday Mod','This mod will add a birthday field into your user\\\'s profile and make users age viewable to others when viewing posts.','Niels','ncr@db9.dk','http://mods.db9.dk','1.5.4','No','','',0),(15,0,'Birthday ADD-ON Chinese zodiac\\\'s in viewtopic','if the user have filled a birthday date, a chinese zodiac image will be displayed in the viewtopic. this is a ADD-ON and will require Birthday mod to be installed before it will work','Niels','ncr@db9.dk','http://mods.db9.dk','1.0.0','No','','',0),(16,0,'Birthday ADD-ON Chinese zodiac','if the user have filled a birthday date, a chinese zodiac image will be displayed in the users profile. this is a ADD-ON and will require Birthday mod to be installed before it will work','Niels','ncr@db9.dk','http://mods.db9.dk','1.0.1','No','','',0),(17,0,'Birthday ADD-ON zodiac\\\'s','if the user have filled a birthday date, a zodiac image will be displayed in the users profile/beside users posts. this is a ADD-ON and will require Birthday mod to be installed before it will work','Niels','ncr@db9.dk','http://mods.db9.dk','1.0.5','No','','',0),(18,0,'Bookmarks Mod','Keeps an internal list of bookmarks set by the user','PhilippK','phpBB2004@kordowich.net','http://phpbb.kordowich.net/','1.1.1a','No','','',0),(19,0,'Slash News Mod','Allows you to assign a news category to any new topic. The topic can then be displayed as news with a category graphic like Slashdot','CodeMonkeyX','nickyoungso@yahoo.com','http://www.codemonkeyx.net','1.0.1','No','','',0),(20,0,'Color Groups Mod','This mod will replace the current name colorization with a group system.  You may define your group name, group color, and group members','Nivisec','support@nivisec.com','http://www.nivisec.com','1.2.0','No','','',0),(21,0,'Complete banner Mod','This mod makes it posible to add banners to your phpbb2 pages, by default banners are placed in top/botton but you may place the tags, inside any template file','Niels','ncr@db9.dk','http://mods.db9.dk','1.3.5','No','','',0),(22,0,'Country Flags','This mod allows your registered board members to select the flag of their country.  Their flag will then display thoughout the phpBB system','Nuttzy99','pktoolkit@blizzhackers.com','http://www.blizzhackers.com','2.2.0','No','','',0),(23,0,'ezPortal Admin for phpBB2','This mod will add a small administration menu for the ezPortal from Smartor','Marcus Thiel','thundercat@die-pretorianer.de','http://www.die-pretorianer.de','1.0.5','No','','',0),(24,0,'ezPortal','This Mod explains you how to create a portal for phpBB2 as simple as possible. This MOD is not exactly a full functional portal system (content management system) but it looks like a portal. You should customize/modify/improve it to fit your fantasy ;) It','Smartor','smartor_xp@hotmail.com','http://smartor.is-root.com','2.1.8','No','','',0),(28,0,'Gender Mod','This mod will add a Gender field into users\\\' profile, and display \\\"Gender: |image|\\\" in posts too','Niels','ncr@db9.dk','http://mods.db9.dk','1.2.6','No','','',0),(30,0,'Glow and Shadow effects BBcode Mod','adds a glow and shadow bbcode tags to your forum','davidls','davidls14@yahoo.com.au','http://www27.brinkster.com/bb2c','2.0.6','No','','',0),(32,0,'Junior Admin Mod','This will allow you to define any and all users you\\\'d like to have access to whatever admin modules you\\\'d like','Nivisec','support@nivisec.com','http://www.nivisec.com','2.0.5','No','','',0),(33,0,'Last visit Mod','This mod will register when the user last logged in, allong with the info about how many users have visited the board','Niels','ncr@db9.dk','http://mods.db9.dk','1.2.8','No','','',0),(34,0,'Announces Suite','This mod allows you to display the announces from the forum on the index page, and above the forum pages for the announce coming from forums of the same categories. It adds also a duration to each announcement, and global announcement','Ptirhiik','admin@rpgnet-fr.com','http://rpgnet.clanmckeen.com','3.0.2','No','','',0),(35,0,'Categories hierarchy Mod','This mod allows to attach a categorie to a higher level categorie, keeping all the forum visible on the index page (vBulletin-like view), or have a sub-forum view.','Ptirhiik','ptirhiik@clanmckeen.com','http://rpgnet.clanmckeen.com','2.0.4','No','','',0),(36,0,'Post Icons Mod','This mod will allow to add an icon in front of each topic title. This part is common to all board setup.','Ptirhiik','ptirhiik@clanmckeen.com','http://rpgnet.clanmckeen.com','1.0.1','No','','',0),(38,0,'Ranks summarize','This mod displays all the ranks available on your board','Ptirhiik','admin@rpgnet-fr.com','http://www.rpgnet-fr.com','1.0.4','No','','',0),(40,0,'Split topic type','This mod splits the topic per type in the viewform display','Ptirhiik','admin@rpgnet-fr.com','http://rpgnet.clanmckeen.com','2.0.1','No','','',0),(41,0,'Topic calendar Mod','This mod adds a calendar to your board, working with natural phpBB auth.','Ptirhiik','ptirhiik@clanmckeen.com','http://rpgnet.clanmckeen.com','1.0.1','No','','',0),(42,0,'Multiple BBCode MOD','Allows you to install BBCode MODs that add quick BBCode buttons in post edits.  Without this MOD, there is no standard way of installing BBCode MODs.\n','Nuttzy99','nospam@blizzhackers.com','http://www.blizzhackers.com','1.2.1','No','','',0),(43,0,'Online/Offline Indicator','This MOD outputs graphically a user\\\'s online status in Topics and the Memberlist','romans1423','romans1423@hotmail.com','http://www.beckman-ministries.com','1.3.2','No','','',0),(44,0,'Download Mod pafiledb with MX Addon','Integration of pafiledb (Database download manager) with phpbb. pafiledb use header, footer, session, template, and database system of phpbb','mohd + mx-system','mohdalbasri@yahoo.com','http://mohd.vraag-en-antwoord.nl/main/','0.0.9d','No','','',0),(46,0,'Printtopic Mod','Generates printable Versions of Topics','Unknown','','','','No','','',0),(48,0,'Advanced Quick Reply Mod','Adds a Quick Reply Box to the Topic View','Unknown','','','','No','','',0),(49,0,'Fully integrated shoutbox','A fully phpBB2 enabled shoutbox witch support: database abstration layer, timezones, languages, templates, smilies, BBcode and censored words','Niels','ncr@db9.dk','http://mods.db9.dk','1.1.5','No','','',0),(50,0,'Smartor Album Add-On: Random or Recent Photo','Display a random or recent photo on your forum main page or chosen from a category only.','SeekIdeas','cfsilent@yahoo.com','http://www.seekideas.com','1.0.0','No','','',0),(52,0,'Smilie Creator Mod','This Mod adds a BBCode [schild=1]text[/schild] to your phpBB2 whick allows Users to post Smilies with own Text in their postings','esperitox','bockelmann@powerforum.de','http://www.powerforum.de','1.0.3','No','','',0),(54,0,'Staff Site Mod','An external site to display who is Mod or Admin on your board. Some additional infos. (see optional part to add other columns)','Acid','','','2.2.0','No','','',0),(56,0,'Tell a Friend Mod','Adds a function to sent Topics as EMail to Friends','Unknown','','','1.0.0','No','','',0),(58,0,'Today At/Yesterday At Mod','Will show Today At if the post was posted today, Will show Yesterday At if the post was posted yesterday','akzhaiyk','phpbb2xp@myrunet.com','http://phpbb2xp.myrunet.com','1.0.0','No','','',0),(59,0,'Who viewed a topic Mod','This MOD will add the ability to logged users to see who has already viewed the topic they\\\'re watching. A small image is added to the viewtopic page for this','Niels','ncr@db9.dk','http://mods.db9.dk','1.0.3','No','','',0),(62,0,'Recent Topics (third version)','Shows recent topics on an extra site (last 24 hour, last week,yesterday, last x days, today)','Acid','','','1.2.0','No','','',0),(66,0,'FI SubSilver Template','Template FI Subsilver Shadow 2.1.1 - Wonderful Template done by Darren Burnhill from http://www.forumimages.com','Darren Burnhill','','http://www.forumimages.com','2.1.1','No','','',0),(68,0,'FI Navslices','Adds Navslices to the Viewtopic View with several Actions like EMail to Friend, Printtopic etc..','Darren Burnhill','','http://www.forumimages.com','','No','','',0),(69,0,'Private Message Info in Browser Status Bar','This MODification adds PM info (you have no new messages, etc..) to the browser status bar.','Darren Burnhill','','http://www.forumimages.com','1.0.0','No','','',0),(71,0,'FI SubSilver CodeExpand','This MODification changes the Code formatting in posts to use resizable DIVs as well as making it so that the code is automatically selected','Darren Burnhill','','http://www.forumimages.com','1.1.0','No','','',0),(76,0,'BBCode Fade Mod','This takes the text between the tags and makes it fade away! Starts off normal then as the line continues until it just disappears','Brewjah','blackhash@rogers.com','http://forums.gotdns.com','1.2.0','No','','',0),(78,0,'BBCode Scroll aka Marquee Mod','Displays scrolling text using the marquee tag','Nuttzy99','pktoolkit@blizzhackers.com','http://www.blizzhackers.com','1.2.1','No','','',0),(81,0,'BBcode Highlight Mod','Adds a highlight bbcode tag to your forum','David Smith','davidls14@yahoo.com.au','http://www27.brinkster.com/bb2c','1.2.0','No','','',0),(83,0,'Macromedia Flash Player BBcode MOD','This mod adds a flash tag to your forum, this version removes the need to use the loop param, and if you want you can remove the width and height params as well','davidls','davidls14@yahoo.com.au','http://www27.brinkster.com/bb2c','2.0.6','No','','',0),(87,0,'BBCode FlipV / FlipH Mod','[flipv]some text[/flipv] and [fliph]some text[/fliph]','Brewjah','blackhash@rogers.com','','1.6.0','No','','',0),(88,0,'Streaming audio BBcode Mod','adds a stream bbcode tag to your forum for the windows media player plugin','David Smith','davidls14@yahoo.com.au','http://www27.brinkster.com/bb2c','2.0.0','No','','',0),(91,0,'Left and Right IMG tags','Adds BBCode to let you align your Pics left and right','Nuttzy','pktoolkit@blizzhackers.com','http://www.blizzhackers.com','1.6.0','No','','',0),(94,0,'PHP Syntax Highlighter BBCode','Highlights PHP specific code when used','Fubonis','php_fubonis@yahoo.com','http://www.fubonis.com','3.0.3','No','','',0),(97,0,'Board Statistics Mod','The Statistics Mod is a complete statistics core for your phpBB 2 board','Acyd Burn, Nivisec','acyd.burn@gmx.de','http://www.opentools.de/board','2.1.5','No','','',0),(98,0,'Admin Hacks List','Adds a list of Hacks/Mods to your phpBB2','Nivisec','support@nivisec.com','http://www.nivisec.com','1.20','No','','',0),(101,0,'Advanced Links Mod','Display links (with logo) on the forum index page','stefan2k1, CRLin','','http://www.phpbb2.de','1.2.2','No','','',0),(104,0,'Full Database Backup Mod','Now you can use the Backup Function in phpBB2 Admin Panel to Backup ALL Tables, even those from your MODs, you make a FULL backup now','Unknown','','','1.0.0','No','','',0),(110,0,'Topic View Page Bottom Link','This MODification adds a link that takes you to the bottom of the topic view pages','Darren Burnhill','','http://www.forumimages.com','1.0.0','No','','',0),(113,0,'Smartors Photo Album Addon 2.x View Topic Link','This MODification adds a link to the members personal photo gallery for Smartors Photo Album Addon version 2.x on the View Topic pages','Darren Burnhill','','http://www.forumimages.com','1.0.0','No','','',0),(114,0,'Smartors Photo Album Addon 2.x Member List Link','This MODification adds a link to the members personal photo gallery for Smartors Photo Album Addon version 2.x on the Member List pages','Darren Burnhill','','http://www.forumimages.com','1.0.0','No','','',0),(115,0,'Smartors Photo Album Addon 2.x View Profile Link','This MODification replaces the link to the members personal photo gallery for Smartors Photo Album Addon version 2.x on the View Profile pages','Darren Burnhill','','http://www.forumimages.com','1.0.0','No','','',0),(118,0,'Google Search BBCode','Allows you put make strings in your post be searched for in Google. ([google]string to search for[/google])','wGEric','eric@egcnetwork.com','http://eric.best-1.biz ','1.1.2','No','','',0),(121,0,'Yellow Card Mod','Also known as \\\"card system\\\" This mod will make 4 colored buttons beside users post (red,yellow,green and blue)','Niels','ncr@db9.dk','http://mods.db9.dk','1.4.11','No','','',0),(122,0,'Protect user account','This mod will prevent hacking on users password, and give the admin the posibilty to specify witch types of passwords are accepted','Niels','ncr@db9.dk','http://mods.db9.dk','1.2.9','No','','',0),(125,0,'BBCode Line-through Mod','Adds BBCode with Line-Through words [s] [/s]','Acid','','','1.0.2','No','','',0),(128,0,'Topic Description Mod','This MOD allow you to add a little description of the topic that you have posted','Morpheus2matrix','morpheus2matrix@caramail.com','http://morpheus.2037.biz','1.0.5','No','','',0),(129,0,'Prune users Mod','Admin plug-in that makes it posible to delete users who are inactive/haven\\\'t posted or like.','Niels','ncr@db9.dk','http://mods.db9.dk','1.4.3','No','','',0),(133,0,'Admin Add Users Mod','Admin can now create a new user, using admin panel user management.','Niels','ncr@db9.dk','http://mods.db9.dk','0.10.4','No','','',0),(140,0,'Count posts Mod','Allows you to select if posts in forum are counted upon creation','Antony Bailey','','','1.0.0','No','','',0),(142,0,'Topic in Who is online','This mod will make it possible to view exactly witch topic a user is looking at. The information is applyed in the Who-is-online list','Niels','','http://mods.db9.dk','1.2.9','No','','',0),(145,0,'Admin Userlist','This MOD will add an userlist into your AdminCP','Smartor','smartor_xp@hotmail.com','http://smartor.is-root.com','1.1.0','No','','',0),(146,0,'Admin Email List','This mod will list all email addresses from your phpbb database, within the admin cp','Jamer','','http://www.jamer.co.uk/scripts/phpbb2','1.0.2','No','','',0),(147,0,'Bottom aligned signature','This mod will align signatures at the bottom of posts','-=ET=-','space_et@tiscali.fr','http://www.golfexpert.net/phpbb','1.0.3','No','','',0),(150,0,'Kontakt Mod','Adds a contact Form to your Forum','Carsten Schaefer','','','1.0.0','No','','',0),(151,0,'Mini Cal','Provides a mini calendar on your forum index page','netclectic','phpbb@netclectic.com','http://www.netclectic.com','2.0.4','No','','',0),(152,0,'Moved Folder Mod','Adds a Moved Folder Image to your Forum','Darren Burnhill','','http://www.forumimages.com','1.0.0','No','http://www.forumimages.com/info/mods/moved_folder.php','',0),(155,0,'Acronym Mod','Provides automatic acroymn additions to posts','CodeMonkeyX','nickyoungso@yahoo.com','http://www.codemonkeyx.net','0.9.5','No','','',0),(156,0,'Disable Board Message','Customize disable board message','Sko22','webmaste@quellicheilpc.com','http://www.quellicheilpc.com','1.0.0','No','','',0),(159,0,'Signature Editor/Preview Deluxe','This mod adds a really cool Signature Editor to your Board, included Preview & Save & BBCodes','Ego2000','','','1.0.0','No','','',0),(162,0,'Absent User Mod','If an user is on holidays, ill or simply not on the board for a longer time, he/she can set to be absent with this mod','Oxpus','webmaster@oxpus.de','http://www.oxpus.de','1.1.7','No','','',0),(163,0,'Album Hierarchy Mod','This mod allows to create multiple sub categories of each (sub) categories in the Photo Album Addon','IdleVoid','idlevoid@slater.dk','','1.1.0','No','','',0),(164,0,'Portal Polls Upgrade','Alters the display and behavior of the Poll Block','vgan','transflux@msn.com','','2.0.0','No','','',0),(165,0,'Modcp Extension','Extend the moderators control panel to include Sticky / Announce / Normal of topics','netclectic','adrian@netclectic.com','http://www.netclectic.com','1.1.3','No','','',0),(166,0,'Simply Merge Threads','This mod allows to merge two topics','Ptirhiik','admin@rpgnet-fr.com','http://www.rpgnet-fr.com','1.0.1','No','','',0),(167,0,'Dates for Humans Mod','Allows users to select their date format from a pre-defined selection of examples','Lars Janssen','lars.dfh@ukmix.net','http://www.ukmix.org/','1.0.1','No','','',0),(168,0,'eXtreme Styles mod 2','This mod is heavily optimized version of phpBB templates system ','CyberAlien','','http://www.phpbbstyles.com/','2.3.1','No','','',0),(169,0,'Google Visit Counter','Adds a google bot visit counter on index ','Dr DLP','','http://www.web-lapin.levillage.org/forum/','1.0.0','No','','',0),(170,0,'Fix message_die for multiple errors MOD','This MOD replaces the message_die was called multiple times message with something more useful','markus_petrux','','http://www.phpmix.com','1.0.3','No','','',0),(171,0,'Search Engine ShortURLs Mod','This MOD replaces the Forum Links from .php to static .html Links','larsneo','','','1.0.0','No','','',0),(172,0,'Cracker Tracker Professional 2nd Ed.','A fully integrated Security System for your Forum. Blocks known Worm Attacks and Floods.','cback','','http://www.cback.de','4.1.7','No','http://www.cback.de','',0),(173,0,'Run stats','Gives stats and details about page time generation, sql requests, indexes used, etc.','Ptirhiik','','http://ptifo.clanmckeen.com','1.0.2','No','','',0),(174,0,'Visual Confirmation for Guests','Adds visual confirmation for guest posts, eliminating spam.','Kanuck','','http://kanuck.net','1.0.1','No','','',0),(175,0,'Custom Profile Fields','Allows administrators to add fields to registration/profile/memberlist/topics, plus admin-only fields','Blankety Blank Man','','http://edos.siteburg.com/phpBB2/index.php','1.1.0','No','','',0),(176,0,'AJAX features','This MOD introduces a lot of features based on the AJAX technology','alcaeus','','http://www.alcaeus.org','1.0.4','No','','',0),(177,0,'Advanced Visual Confirmation','This MOD replaces the original CAPTCHA of the phpBB Visual Confirmation.','AmigaLink','','http://www.EssenMitFreude.info','1.1.0','No','','',0);
/*!40000 ALTER TABLE `phpbb2_hacks_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_jr_admin_users`
--

DROP TABLE IF EXISTS `phpbb2_jr_admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_jr_admin_users` (
  `user_id` mediumint(9) NOT NULL,
  `user_jr_admin` longtext NOT NULL,
  `start_date` int(10) unsigned NOT NULL,
  `update_date` int(10) unsigned NOT NULL,
  `admin_notes` text NOT NULL,
  `notes_view` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_jr_admin_users`
--

LOCK TABLES `phpbb2_jr_admin_users` WRITE;
/*!40000 ALTER TABLE `phpbb2_jr_admin_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_jr_admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_kb_articles`
--

DROP TABLE IF EXISTS `phpbb2_kb_articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_kb_articles` (
  `article_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `article_category_id` mediumint(8) unsigned NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_description` varchar(255) NOT NULL,
  `article_date` varchar(255) NOT NULL,
  `article_author_id` mediumint(8) unsigned NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `bbcode_uid` varchar(10) NOT NULL,
  `article_body` text NOT NULL,
  `article_type` mediumint(8) unsigned NOT NULL,
  `approved` tinyint(1) unsigned NOT NULL,
  `topic_id` mediumint(8) unsigned NOT NULL,
  `views` bigint(8) NOT NULL,
  `article_rating` double(6,4) NOT NULL DEFAULT '0.0000',
  `article_totalvotes` int(255) NOT NULL,
  KEY `article_id` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_kb_articles`
--

LOCK TABLES `phpbb2_kb_articles` WRITE;
/*!40000 ALTER TABLE `phpbb2_kb_articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_kb_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_kb_categories`
--

DROP TABLE IF EXISTS `phpbb2_kb_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_kb_categories` (
  `category_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_details` varchar(255) NOT NULL,
  `number_articles` mediumint(8) unsigned NOT NULL,
  `parent` mediumint(8) unsigned DEFAULT NULL,
  `cat_order` mediumint(8) unsigned NOT NULL,
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_kb_categories`
--

LOCK TABLES `phpbb2_kb_categories` WRITE;
/*!40000 ALTER TABLE `phpbb2_kb_categories` DISABLE KEYS */;
INSERT INTO `phpbb2_kb_categories` (`category_id`, `category_name`, `category_details`, `number_articles`, `parent`, `cat_order`) VALUES (1,'Test Category 1','This is a test category',1,0,10);
/*!40000 ALTER TABLE `phpbb2_kb_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_kb_config`
--

DROP TABLE IF EXISTS `phpbb2_kb_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_kb_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_kb_config`
--

LOCK TABLES `phpbb2_kb_config` WRITE;
/*!40000 ALTER TABLE `phpbb2_kb_config` DISABLE KEYS */;
INSERT INTO `phpbb2_kb_config` (`config_name`, `config_value`) VALUES ('admin_id','2'),('allow_anon','0'),('allow_anonymos_rating','0'),('allow_edit','1'),('allow_new','1'),('allow_rating','0'),('approve_edit','1'),('approve_new','1'),('art_pagination','5'),('bump_post','1'),('comments','1'),('comments_pagination','5'),('comments_show','1'),('del_topic','1'),('forum_id','1'),('header_banner','1'),('mod_group','0'),('news_sort','Alphabetic'),('news_sort_par','ASC'),('notify','1'),('pt_body','Please check your references and include as much information as you can.'),('pt_header','Article Submission Instructions'),('show_pretext','0'),('stats_list','1'),('votes_check_ip','1'),('votes_check_userid','1');
/*!40000 ALTER TABLE `phpbb2_kb_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_kb_results`
--

DROP TABLE IF EXISTS `phpbb2_kb_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_kb_results` (
  `search_id` int(11) unsigned NOT NULL,
  `session_id` varchar(32) NOT NULL,
  `search_array` text NOT NULL,
  PRIMARY KEY (`search_id`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_kb_results`
--

LOCK TABLES `phpbb2_kb_results` WRITE;
/*!40000 ALTER TABLE `phpbb2_kb_results` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_kb_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_kb_types`
--

DROP TABLE IF EXISTS `phpbb2_kb_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_kb_types` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_kb_types`
--

LOCK TABLES `phpbb2_kb_types` WRITE;
/*!40000 ALTER TABLE `phpbb2_kb_types` DISABLE KEYS */;
INSERT INTO `phpbb2_kb_types` (`id`, `type`) VALUES (1,'Test Type 1');
/*!40000 ALTER TABLE `phpbb2_kb_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_kb_votes`
--

DROP TABLE IF EXISTS `phpbb2_kb_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_kb_votes` (
  `votes_ip` varchar(50) NOT NULL,
  `votes_userid` int(50) NOT NULL,
  `votes_file` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_kb_votes`
--

LOCK TABLES `phpbb2_kb_votes` WRITE;
/*!40000 ALTER TABLE `phpbb2_kb_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_kb_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_kb_wordlist`
--

DROP TABLE IF EXISTS `phpbb2_kb_wordlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_kb_wordlist` (
  `word_text` varchar(50) NOT NULL,
  `word_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `word_common` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`word_text`),
  KEY `word_id` (`word_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_kb_wordlist`
--

LOCK TABLES `phpbb2_kb_wordlist` WRITE;
/*!40000 ALTER TABLE `phpbb2_kb_wordlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_kb_wordlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_kb_wordmatch`
--

DROP TABLE IF EXISTS `phpbb2_kb_wordmatch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_kb_wordmatch` (
  `article_id` mediumint(8) unsigned NOT NULL,
  `word_id` mediumint(8) unsigned NOT NULL,
  `title_match` tinyint(1) NOT NULL,
  KEY `post_id` (`article_id`),
  KEY `word_id` (`word_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_kb_wordmatch`
--

LOCK TABLES `phpbb2_kb_wordmatch` WRITE;
/*!40000 ALTER TABLE `phpbb2_kb_wordmatch` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_kb_wordmatch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_link_categories`
--

DROP TABLE IF EXISTS `phpbb2_link_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_link_categories` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(100) NOT NULL,
  `cat_order` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `cat_order` (`cat_order`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_link_categories`
--

LOCK TABLES `phpbb2_link_categories` WRITE;
/*!40000 ALTER TABLE `phpbb2_link_categories` DISABLE KEYS */;
INSERT INTO `phpbb2_link_categories` (`cat_id`, `cat_title`, `cat_order`) VALUES (1,'Arts',1),(2,'Business',2),(3,'Children and Teens',3),(4,'Computers',4),(5,'Games',5),(6,'Health',6),(7,'Home',7),(8,'News',8);
/*!40000 ALTER TABLE `phpbb2_link_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_link_config`
--

DROP TABLE IF EXISTS `phpbb2_link_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_link_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_link_config`
--

LOCK TABLES `phpbb2_link_config` WRITE;
/*!40000 ALTER TABLE `phpbb2_link_config` DISABLE KEYS */;
INSERT INTO `phpbb2_link_config` (`config_name`, `config_value`) VALUES ('width','88'),('height','31'),('linkspp','10'),('display_interval','6000'),('display_logo_num','10'),('display_links_logo','1'),('email_notify','1'),('pm_notify ','0'),('lock_submit_site','0'),('allow_no_logo','0'),('site_logo','http://images/links/web_logo88a.gif'),('site_url','http://');
/*!40000 ALTER TABLE `phpbb2_link_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_links`
--

DROP TABLE IF EXISTS `phpbb2_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_links` (
  `link_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `link_title` varchar(100) NOT NULL,
  `link_desc` varchar(255) DEFAULT NULL,
  `link_category` mediumint(8) unsigned NOT NULL,
  `link_url` varchar(100) NOT NULL,
  `link_logo_src` varchar(120) DEFAULT NULL,
  `link_joined` int(11) NOT NULL,
  `link_active` tinyint(1) NOT NULL,
  `link_hits` int(10) unsigned NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `user_ip` varchar(8) NOT NULL,
  `last_user_ip` varchar(8) NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_links`
--

LOCK TABLES `phpbb2_links` WRITE;
/*!40000 ALTER TABLE `phpbb2_links` DISABLE KEYS */;
INSERT INTO `phpbb2_links` (`link_id`, `link_title`, `link_desc`, `link_category`, `link_url`, `link_logo_src`, `link_joined`, `link_active`, `link_hits`, `user_id`, `user_ip`, `last_user_ip`) VALUES (1,'phpBB Official Website','Official phpBB Website',4,'http://www.phpbb.com/','images/links/phpBB_88a.gif',1411831216,1,0,2,'',''),(2,'phpbb-tw.net','Unofficial phpBB Chinese Support Centre',4,'http://phpbb-tw.net','images/links/phpbb-tw_logo88a.gif',1411831216,1,0,2,'',''),(3,'phpbb2.de','Your Source for phpBB2 Stuff',4,'http://www.phpbb2.de','images/links/phpbb2_de_logo.gif',1411831216,1,0,2,'',''),(4,'Forumstyles.de','Forumstyles.de',4,'http://www.forumstyles.de','images/links/forumstyles_button.gif',1411831216,1,0,2,'',''),(5,'Oxpus','Oxpus.de',4,'http://www.oxpus.de','images/links/oxpus_banner.gif',1411831216,1,0,2,'','');
/*!40000 ALTER TABLE `phpbb2_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_news`
--

DROP TABLE IF EXISTS `phpbb2_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_news` (
  `news_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `news_category` varchar(70) NOT NULL,
  `news_image` varchar(70) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_news`
--

LOCK TABLES `phpbb2_news` WRITE;
/*!40000 ALTER TABLE `phpbb2_news` DISABLE KEYS */;
INSERT INTO `phpbb2_news` (`news_id`, `news_category`, `news_image`) VALUES (1,'News','topicnews.gif'),(2,'Announcements','announcements.gif');
/*!40000 ALTER TABLE `phpbb2_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_pa_auth`
--

DROP TABLE IF EXISTS `phpbb2_pa_auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_pa_auth` (
  `group_id` mediumint(8) NOT NULL,
  `cat_id` smallint(5) unsigned NOT NULL,
  `auth_view` tinyint(1) NOT NULL,
  `auth_read` tinyint(1) NOT NULL,
  `auth_view_file` tinyint(1) NOT NULL,
  `auth_edit_file` tinyint(1) NOT NULL,
  `auth_delete_file` tinyint(1) NOT NULL,
  `auth_upload` tinyint(1) NOT NULL,
  `auth_download` tinyint(1) NOT NULL,
  `auth_rate` tinyint(1) NOT NULL,
  `auth_email` tinyint(1) NOT NULL,
  `auth_view_comment` tinyint(1) NOT NULL,
  `auth_post_comment` tinyint(1) NOT NULL,
  `auth_edit_comment` tinyint(1) NOT NULL,
  `auth_delete_comment` tinyint(1) NOT NULL,
  `auth_mod` tinyint(1) NOT NULL,
  `auth_search` tinyint(1) NOT NULL DEFAULT '1',
  `auth_stats` tinyint(1) NOT NULL DEFAULT '1',
  `auth_toplist` tinyint(1) NOT NULL DEFAULT '1',
  `auth_viewall` tinyint(1) NOT NULL DEFAULT '1',
  KEY `group_id` (`group_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_pa_auth`
--

LOCK TABLES `phpbb2_pa_auth` WRITE;
/*!40000 ALTER TABLE `phpbb2_pa_auth` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_pa_auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_pa_cat`
--

DROP TABLE IF EXISTS `phpbb2_pa_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_pa_cat` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` text,
  `cat_desc` text,
  `cat_parent` int(50) DEFAULT NULL,
  `parents_data` text NOT NULL,
  `cat_order` int(50) DEFAULT NULL,
  `cat_allow_file` tinyint(2) NOT NULL,
  `cat_allow_ratings` tinyint(2) NOT NULL DEFAULT '1',
  `cat_allow_comments` tinyint(2) NOT NULL DEFAULT '1',
  `cat_files` mediumint(8) NOT NULL DEFAULT '-1',
  `cat_last_file_id` mediumint(8) unsigned NOT NULL,
  `cat_last_file_name` varchar(255) NOT NULL,
  `cat_last_file_time` int(50) unsigned NOT NULL,
  `auth_view` tinyint(2) NOT NULL,
  `auth_read` tinyint(2) NOT NULL,
  `auth_view_file` tinyint(2) NOT NULL,
  `auth_edit_file` tinyint(1) NOT NULL,
  `auth_delete_file` tinyint(1) NOT NULL,
  `auth_upload` tinyint(2) NOT NULL,
  `auth_download` tinyint(2) NOT NULL,
  `auth_rate` tinyint(2) NOT NULL,
  `auth_email` tinyint(2) NOT NULL,
  `auth_view_comment` tinyint(2) NOT NULL,
  `auth_post_comment` tinyint(2) NOT NULL,
  `auth_edit_comment` tinyint(2) NOT NULL,
  `auth_delete_comment` tinyint(2) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_pa_cat`
--

LOCK TABLES `phpbb2_pa_cat` WRITE;
/*!40000 ALTER TABLE `phpbb2_pa_cat` DISABLE KEYS */;
INSERT INTO `phpbb2_pa_cat` (`cat_id`, `cat_name`, `cat_desc`, `cat_parent`, `parents_data`, `cat_order`, `cat_allow_file`, `cat_allow_ratings`, `cat_allow_comments`, `cat_files`, `cat_last_file_id`, `cat_last_file_name`, `cat_last_file_time`, `auth_view`, `auth_read`, `auth_view_file`, `auth_edit_file`, `auth_delete_file`, `auth_upload`, `auth_download`, `auth_rate`, `auth_email`, `auth_view_comment`, `auth_post_comment`, `auth_edit_comment`, `auth_delete_comment`) VALUES (1,'My Category','',0,'',1,0,0,0,0,0,'0',0,0,0,0,0,0,0,0,0,0,0,0,0,0),(2,'Test Cagegory','Just a test category',1,'',2,1,0,0,0,0,'0',0,0,0,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `phpbb2_pa_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_pa_comments`
--

DROP TABLE IF EXISTS `phpbb2_pa_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_pa_comments` (
  `comments_id` int(10) NOT NULL AUTO_INCREMENT,
  `file_id` int(10) NOT NULL,
  `comments_text` text NOT NULL,
  `comments_title` text NOT NULL,
  `comments_time` int(50) NOT NULL,
  `comment_bbcode_uid` varchar(10) DEFAULT NULL,
  `poster_id` mediumint(8) NOT NULL,
  PRIMARY KEY (`comments_id`),
  KEY `comments_id` (`comments_id`),
  KEY `comment_bbcode_uid` (`comment_bbcode_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_pa_comments`
--

LOCK TABLES `phpbb2_pa_comments` WRITE;
/*!40000 ALTER TABLE `phpbb2_pa_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_pa_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_pa_config`
--

DROP TABLE IF EXISTS `phpbb2_pa_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_pa_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_pa_config`
--

LOCK TABLES `phpbb2_pa_config` WRITE;
/*!40000 ALTER TABLE `phpbb2_pa_config` DISABLE KEYS */;
INSERT INTO `phpbb2_pa_config` (`config_name`, `config_value`) VALUES ('allow_bbcode','1'),('allow_comment_images','0'),('allow_comment_links','1'),('allow_html','1'),('allow_smilies','1'),('auth_search','0'),('auth_stats','0'),('auth_toplist','0'),('auth_viewall','0'),('forbidden_extensions','php, php3, php4, phtml, pl, asp, aspx, cgi'),('hotlink_allowed',''),('hotlink_prevent','1'),('max_comment_chars','5000'),('max_file_size','262144'),('need_validation','0'),('no_comment_image_message','[No image please]'),('no_comment_link_message','[No links please]'),('pm_notify','0'),('screenshots_dir','pafiledb/images/screenshots/'),('settings_dbdescription',''),('settings_dbname','Download Database'),('settings_disable','0'),('settings_file_page','20'),('settings_newdays','1'),('settings_stats',''),('settings_topnumber','10'),('settings_viewall','1'),('sort_method','file_time'),('sort_order','DESC'),('tpl_php','0'),('upload_dir','pafiledb/uploads/'),('validator','validator_admin');
/*!40000 ALTER TABLE `phpbb2_pa_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_pa_custom`
--

DROP TABLE IF EXISTS `phpbb2_pa_custom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_pa_custom` (
  `custom_id` int(50) NOT NULL AUTO_INCREMENT,
  `custom_name` text NOT NULL,
  `custom_description` text NOT NULL,
  `data` text NOT NULL,
  `field_order` int(20) NOT NULL,
  `field_type` tinyint(2) NOT NULL,
  `regex` varchar(255) NOT NULL,
  PRIMARY KEY (`custom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_pa_custom`
--

LOCK TABLES `phpbb2_pa_custom` WRITE;
/*!40000 ALTER TABLE `phpbb2_pa_custom` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_pa_custom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_pa_customdata`
--

DROP TABLE IF EXISTS `phpbb2_pa_customdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_pa_customdata` (
  `customdata_file` int(50) NOT NULL,
  `customdata_custom` int(50) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_pa_customdata`
--

LOCK TABLES `phpbb2_pa_customdata` WRITE;
/*!40000 ALTER TABLE `phpbb2_pa_customdata` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_pa_customdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_pa_download_info`
--

DROP TABLE IF EXISTS `phpbb2_pa_download_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_pa_download_info` (
  `file_id` mediumint(8) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `downloader_ip` varchar(8) NOT NULL,
  `downloader_os` varchar(255) NOT NULL,
  `downloader_browser` varchar(255) NOT NULL,
  `browser_version` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_pa_download_info`
--

LOCK TABLES `phpbb2_pa_download_info` WRITE;
/*!40000 ALTER TABLE `phpbb2_pa_download_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_pa_download_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_pa_files`
--

DROP TABLE IF EXISTS `phpbb2_pa_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_pa_files` (
  `file_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) NOT NULL,
  `poster_ip` varchar(8) NOT NULL,
  `file_name` text,
  `file_size` int(20) NOT NULL,
  `unique_name` varchar(255) NOT NULL,
  `real_name` varchar(255) NOT NULL,
  `file_dir` varchar(255) NOT NULL,
  `file_desc` text,
  `file_creator` text,
  `file_version` text,
  `file_longdesc` text,
  `file_ssurl` text,
  `file_sshot_link` tinyint(2) NOT NULL,
  `file_dlurl` text,
  `file_time` int(50) DEFAULT NULL,
  `file_update_time` int(50) NOT NULL,
  `file_catid` int(10) DEFAULT NULL,
  `file_posticon` text,
  `file_license` int(10) DEFAULT NULL,
  `file_dls` int(10) DEFAULT NULL,
  `file_last` int(50) DEFAULT NULL,
  `file_pin` int(2) DEFAULT NULL,
  `file_docsurl` text,
  `file_approved` tinyint(1) NOT NULL DEFAULT '1',
  `file_broken` tinyint(1) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_pa_files`
--

LOCK TABLES `phpbb2_pa_files` WRITE;
/*!40000 ALTER TABLE `phpbb2_pa_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_pa_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_pa_license`
--

DROP TABLE IF EXISTS `phpbb2_pa_license`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_pa_license` (
  `license_id` int(10) NOT NULL AUTO_INCREMENT,
  `license_name` text,
  `license_text` text,
  PRIMARY KEY (`license_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_pa_license`
--

LOCK TABLES `phpbb2_pa_license` WRITE;
/*!40000 ALTER TABLE `phpbb2_pa_license` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_pa_license` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_pa_mirrors`
--

DROP TABLE IF EXISTS `phpbb2_pa_mirrors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_pa_mirrors` (
  `mirror_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `file_id` int(10) NOT NULL,
  `unique_name` varchar(255) NOT NULL,
  `file_dir` varchar(255) NOT NULL,
  `file_dlurl` varchar(255) NOT NULL,
  `mirror_location` varchar(255) NOT NULL,
  PRIMARY KEY (`mirror_id`),
  KEY `file_id` (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_pa_mirrors`
--

LOCK TABLES `phpbb2_pa_mirrors` WRITE;
/*!40000 ALTER TABLE `phpbb2_pa_mirrors` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_pa_mirrors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_pa_votes`
--

DROP TABLE IF EXISTS `phpbb2_pa_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_pa_votes` (
  `user_id` mediumint(8) NOT NULL,
  `votes_ip` varchar(50) NOT NULL,
  `votes_file` int(50) NOT NULL,
  `rate_point` tinyint(3) unsigned NOT NULL,
  `voter_os` varchar(255) NOT NULL,
  `voter_browser` varchar(255) NOT NULL,
  `browser_version` varchar(8) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_pa_votes`
--

LOCK TABLES `phpbb2_pa_votes` WRITE;
/*!40000 ALTER TABLE `phpbb2_pa_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_pa_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_plus`
--

DROP TABLE IF EXISTS `phpbb2_plus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_plus` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_plus`
--

LOCK TABLES `phpbb2_plus` WRITE;
/*!40000 ALTER TABLE `phpbb2_plus` DISABLE KEYS */;
INSERT INTO `phpbb2_plus` (`config_name`, `config_value`) VALUES ('cols_per_page','4'),('contact_email','webmaster@yourdomain'),('default_avatar','1'),('disable_sid','0'),('enable_antirobot','1'),('enable_banners','1'),('enable_confirm_post','0'),('enable_fulltextsearch','0'),('enable_gentime','0'),('enable_shorturls','0'),('index_layout','index_body_plus.tpl'),('plus_version','1.53'),('show_boardstats','1'),('show_last_visit','1'),('show_links','1'),('show_quickreply','1'),('show_recent_photo','1'),('show_recent_topics','1'),('show_shoutbox','1');
/*!40000 ALTER TABLE `phpbb2_plus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_portal`
--

DROP TABLE IF EXISTS `phpbb2_portal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_portal` (
  `portal_name` varchar(255) NOT NULL,
  `portal_value` text NOT NULL,
  PRIMARY KEY (`portal_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_portal`
--

LOCK TABLES `phpbb2_portal` WRITE;
/*!40000 ALTER TABLE `phpbb2_portal` DISABLE KEYS */;
INSERT INTO `phpbb2_portal` (`portal_name`, `portal_value`) VALUES ('cat_id','0'),('exceptional_forums',''),('last_seen','5'),('news_forum','1'),('news_length','200'),('number_of_news','5'),('number_recent_files','5'),('number_recent_topics','5'),('number_top_posters','5'),('pics_all','0'),('pics_number','1'),('pics_sort','0'),('pics_thumbsize','100'),('poll_forum','1'),('welcome_text','<center>Welcome to <b>phpBB2 Plus 1.53</b><br /><br />Your new Forum is waiting for you now,<br /><br />Have a good time! ^_^<br><br>');
/*!40000 ALTER TABLE `phpbb2_portal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_posts`
--

DROP TABLE IF EXISTS `phpbb2_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_posts` (
  `post_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` mediumint(8) unsigned NOT NULL,
  `forum_id` smallint(5) unsigned NOT NULL,
  `poster_id` mediumint(8) NOT NULL,
  `post_time` int(11) NOT NULL,
  `poster_ip` char(8) NOT NULL,
  `post_username` varchar(25) DEFAULT NULL,
  `enable_bbcode` tinyint(1) NOT NULL DEFAULT '1',
  `enable_html` tinyint(1) NOT NULL,
  `enable_smilies` tinyint(1) NOT NULL DEFAULT '1',
  `enable_sig` tinyint(1) NOT NULL DEFAULT '1',
  `post_edit_time` int(11) DEFAULT NULL,
  `post_edit_count` smallint(5) unsigned NOT NULL,
  `post_attachment` tinyint(1) NOT NULL,
  `post_icon` tinyint(2) DEFAULT NULL,
  `post_bluecard` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_id` (`topic_id`),
  KEY `poster_id` (`poster_id`),
  KEY `post_time` (`post_time`),
  KEY `post_icon` (`post_icon`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_posts`
--

LOCK TABLES `phpbb2_posts` WRITE;
/*!40000 ALTER TABLE `phpbb2_posts` DISABLE KEYS */;
INSERT INTO `phpbb2_posts` (`post_id`, `topic_id`, `forum_id`, `poster_id`, `post_time`, `poster_ip`, `post_username`, `enable_bbcode`, `enable_html`, `enable_smilies`, `enable_sig`, `post_edit_time`, `post_edit_count`, `post_attachment`, `post_icon`, `post_bluecard`) VALUES (1,1,1,2,972086460,'7F000001',NULL,1,0,1,1,NULL,0,0,10,NULL),(2,2,1,2,1084742471,'7f000001','',1,0,1,0,NULL,0,0,10,NULL);
/*!40000 ALTER TABLE `phpbb2_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_posts_text`
--

DROP TABLE IF EXISTS `phpbb2_posts_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_posts_text` (
  `post_id` mediumint(8) unsigned NOT NULL,
  `bbcode_uid` char(10) NOT NULL,
  `post_subject` char(60) DEFAULT NULL,
  `post_text` text,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_posts_text`
--

LOCK TABLES `phpbb2_posts_text` WRITE;
/*!40000 ALTER TABLE `phpbb2_posts_text` DISABLE KEYS */;
INSERT INTO `phpbb2_posts_text` (`post_id`, `bbcode_uid`, `post_subject`, `post_text`) VALUES (1,'9e48a9b705',NULL,'If you can read this Topic it seems that you have successfully installed your new Forum using [b:9e48a9b705]phpBB2 Plus 1.53[/b:9e48a9b705]. You should now visit the Admin Control Panel to configure some Settings. Since everything seems to work fine you are now free to delete this Topic, this Forum and also the Category.'),(2,'a0ade7ddce','Sample News Post in Portal','As you can see this Topic is Attached to a News Category which is displayed in the Portal Index. You can simply create News Postings in the Portal by Posting a Topic and select the News Category into which the News Message should be posted.\n\nHave Fun...');
/*!40000 ALTER TABLE `phpbb2_posts_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_privmsgs`
--

DROP TABLE IF EXISTS `phpbb2_privmsgs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_privmsgs` (
  `privmsgs_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `privmsgs_type` tinyint(4) NOT NULL,
  `privmsgs_subject` varchar(255) NOT NULL,
  `privmsgs_from_userid` mediumint(8) NOT NULL,
  `privmsgs_to_userid` mediumint(8) NOT NULL,
  `privmsgs_date` int(11) NOT NULL,
  `privmsgs_ip` char(8) NOT NULL,
  `privmsgs_enable_bbcode` tinyint(1) NOT NULL DEFAULT '1',
  `privmsgs_enable_html` tinyint(1) NOT NULL,
  `privmsgs_enable_smilies` tinyint(1) NOT NULL DEFAULT '1',
  `privmsgs_attach_sig` tinyint(1) NOT NULL DEFAULT '1',
  `privmsgs_attachment` tinyint(1) NOT NULL,
  PRIMARY KEY (`privmsgs_id`),
  KEY `privmsgs_from_userid` (`privmsgs_from_userid`),
  KEY `privmsgs_to_userid` (`privmsgs_to_userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_privmsgs`
--

LOCK TABLES `phpbb2_privmsgs` WRITE;
/*!40000 ALTER TABLE `phpbb2_privmsgs` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_privmsgs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_privmsgs_text`
--

DROP TABLE IF EXISTS `phpbb2_privmsgs_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_privmsgs_text` (
  `privmsgs_text_id` mediumint(8) unsigned NOT NULL,
  `privmsgs_bbcode_uid` char(10) NOT NULL,
  `privmsgs_text` text,
  PRIMARY KEY (`privmsgs_text_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_privmsgs_text`
--

LOCK TABLES `phpbb2_privmsgs_text` WRITE;
/*!40000 ALTER TABLE `phpbb2_privmsgs_text` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_privmsgs_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_profile_fields`
--

DROP TABLE IF EXISTS `phpbb2_profile_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_profile_fields` (
  `field_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `field_name` varchar(255) NOT NULL,
  `field_description` varchar(255) DEFAULT NULL,
  `field_type` tinyint(4) unsigned NOT NULL,
  `text_field_default` varchar(255) DEFAULT NULL,
  `text_field_maxlen` int(255) unsigned NOT NULL DEFAULT '255',
  `text_area_default` text,
  `text_area_maxlen` int(255) unsigned NOT NULL DEFAULT '1024',
  `radio_button_default` varchar(255) DEFAULT NULL,
  `radio_button_values` text,
  `checkbox_default` text,
  `checkbox_values` text,
  `is_required` tinyint(2) unsigned NOT NULL,
  `users_can_view` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `view_in_profile` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `profile_location` tinyint(2) unsigned NOT NULL DEFAULT '2',
  `view_in_memberlist` tinyint(2) unsigned NOT NULL,
  `view_in_topic` tinyint(2) unsigned NOT NULL,
  `topic_location` tinyint(2) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`field_id`),
  UNIQUE KEY `field_name` (`field_name`),
  KEY `field_type` (`field_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_profile_fields`
--

LOCK TABLES `phpbb2_profile_fields` WRITE;
/*!40000 ALTER TABLE `phpbb2_profile_fields` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_profile_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_quota_limits`
--

DROP TABLE IF EXISTS `phpbb2_quota_limits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_quota_limits` (
  `quota_limit_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `quota_desc` varchar(20) NOT NULL,
  `quota_limit` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`quota_limit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_quota_limits`
--

LOCK TABLES `phpbb2_quota_limits` WRITE;
/*!40000 ALTER TABLE `phpbb2_quota_limits` DISABLE KEYS */;
INSERT INTO `phpbb2_quota_limits` (`quota_limit_id`, `quota_desc`, `quota_limit`) VALUES (1,'Low',262144),(2,'Medium',2097152),(3,'High',5242880);
/*!40000 ALTER TABLE `phpbb2_quota_limits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_ranks`
--

DROP TABLE IF EXISTS `phpbb2_ranks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_ranks` (
  `rank_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `rank_title` varchar(50) NOT NULL,
  `rank_min` mediumint(8) NOT NULL,
  `rank_special` tinyint(1) DEFAULT NULL,
  `rank_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_ranks`
--

LOCK TABLES `phpbb2_ranks` WRITE;
/*!40000 ALTER TABLE `phpbb2_ranks` DISABLE KEYS */;
INSERT INTO `phpbb2_ranks` (`rank_id`, `rank_title`, `rank_min`, `rank_special`, `rank_image`) VALUES (1,'Administrator',-1,1,'rank5_admin.gif'),(2,'Moderator',-1,1,'rank5_mod.gif'),(3,'Partner',-1,1,'rank5_partner.gif'),(4,'Spammer',-1,1,'rank0_spammer.gif');
/*!40000 ALTER TABLE `phpbb2_ranks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_search_results`
--

DROP TABLE IF EXISTS `phpbb2_search_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_search_results` (
  `search_id` int(11) unsigned NOT NULL,
  `session_id` char(32) NOT NULL,
  `search_time` int(11) NOT NULL,
  `search_array` mediumtext NOT NULL,
  PRIMARY KEY (`search_id`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_search_results`
--

LOCK TABLES `phpbb2_search_results` WRITE;
/*!40000 ALTER TABLE `phpbb2_search_results` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_search_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_search_wordlist`
--

DROP TABLE IF EXISTS `phpbb2_search_wordlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_search_wordlist` (
  `word_text` varchar(50) NOT NULL,
  `word_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `word_common` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`word_text`),
  KEY `word_id` (`word_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_search_wordlist`
--

LOCK TABLES `phpbb2_search_wordlist` WRITE;
/*!40000 ALTER TABLE `phpbb2_search_wordlist` DISABLE KEYS */;
INSERT INTO `phpbb2_search_wordlist` (`word_text`, `word_id`, `word_common`) VALUES ('delete',5,0),('everything',9,0),('example',1,0),('forum',7,0),('installation',4,0),('phpbb',3,0),('post',2,0),('seems',10,0),('since',8,0),('topic',6,0),('welcome',12,0),('working',11,0);
/*!40000 ALTER TABLE `phpbb2_search_wordlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_search_wordmatch`
--

DROP TABLE IF EXISTS `phpbb2_search_wordmatch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_search_wordmatch` (
  `post_id` mediumint(8) unsigned NOT NULL,
  `word_id` mediumint(8) unsigned NOT NULL,
  `title_match` tinyint(1) NOT NULL,
  KEY `post_id` (`post_id`),
  KEY `word_id` (`word_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_search_wordmatch`
--

LOCK TABLES `phpbb2_search_wordmatch` WRITE;
/*!40000 ALTER TABLE `phpbb2_search_wordmatch` DISABLE KEYS */;
INSERT INTO `phpbb2_search_wordmatch` (`post_id`, `word_id`, `title_match`) VALUES (1,1,0),(1,2,0),(1,3,0),(1,4,0),(1,5,0),(1,6,0),(1,7,0),(1,8,0),(1,9,0),(1,10,0),(1,11,0),(1,12,1),(1,3,1);
/*!40000 ALTER TABLE `phpbb2_search_wordmatch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_sessions`
--

DROP TABLE IF EXISTS `phpbb2_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_sessions` (
  `session_id` char(32) NOT NULL,
  `session_user_id` mediumint(8) NOT NULL,
  `session_start` int(11) NOT NULL,
  `session_time` int(11) NOT NULL,
  `session_ip` char(8) NOT NULL,
  `session_page` int(11) NOT NULL,
  `session_topic` int(11) NOT NULL,
  `session_logged_in` tinyint(1) NOT NULL,
  `session_admin` tinyint(2) NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `session_user_id` (`session_user_id`),
  KEY `session_id_ip_user_id` (`session_id`,`session_ip`,`session_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_sessions`
--

LOCK TABLES `phpbb2_sessions` WRITE;
/*!40000 ALTER TABLE `phpbb2_sessions` DISABLE KEYS */;
INSERT INTO `phpbb2_sessions` (`session_id`, `session_user_id`, `session_start`, `session_time`, `session_ip`, `session_page`, `session_topic`, `session_logged_in`, `session_admin`) VALUES ('1cea345cc7fa9a5d7ec383fa0d4ac2e6',-1,1669724395,1669724399,'ac44ee3c',-1035,0,0,0);
/*!40000 ALTER TABLE `phpbb2_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_sessions_keys`
--

DROP TABLE IF EXISTS `phpbb2_sessions_keys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_sessions_keys` (
  `key_id` varchar(32) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `last_ip` varchar(8) NOT NULL,
  `last_login` int(11) NOT NULL,
  PRIMARY KEY (`key_id`,`user_id`),
  KEY `last_login` (`last_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_sessions_keys`
--

LOCK TABLES `phpbb2_sessions_keys` WRITE;
/*!40000 ALTER TABLE `phpbb2_sessions_keys` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_sessions_keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_shout`
--

DROP TABLE IF EXISTS `phpbb2_shout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_shout` (
  `shout_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `shout_username` varchar(25) NOT NULL,
  `shout_user_id` mediumint(8) NOT NULL,
  `shout_group_id` mediumint(8) NOT NULL,
  `shout_session_time` int(11) NOT NULL,
  `shout_ip` varchar(8) NOT NULL,
  `shout_text` text NOT NULL,
  `shout_active` mediumint(8) NOT NULL,
  `enable_bbcode` tinyint(1) NOT NULL,
  `enable_html` tinyint(1) NOT NULL,
  `enable_smilies` tinyint(1) NOT NULL,
  `enable_sig` tinyint(1) NOT NULL,
  `shout_bbcode_uid` varchar(10) NOT NULL,
  KEY `shout_id` (`shout_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_shout`
--

LOCK TABLES `phpbb2_shout` WRITE;
/*!40000 ALTER TABLE `phpbb2_shout` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_shout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_smilies`
--

DROP TABLE IF EXISTS `phpbb2_smilies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_smilies` (
  `smilies_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `smile_url` varchar(100) DEFAULT NULL,
  `emoticon` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`smilies_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_smilies`
--

LOCK TABLES `phpbb2_smilies` WRITE;
/*!40000 ALTER TABLE `phpbb2_smilies` DISABLE KEYS */;
INSERT INTO `phpbb2_smilies` (`smilies_id`, `code`, `smile_url`, `emoticon`) VALUES (1,':D','icon_biggrin.gif','Very Happy'),(2,':-D','icon_biggrin.gif','Very Happy'),(3,':grin:','icon_biggrin.gif','Very Happy'),(4,':)','icon_smile.gif','Smile'),(5,':-)','icon_smile.gif','Smile'),(6,':smile:','icon_smile.gif','Smile'),(7,':(','icon_sad.gif','Sad'),(8,':-(','icon_sad.gif','Sad'),(9,':sad:','icon_sad.gif','Sad'),(10,':o','icon_surprised.gif','Surprised'),(11,':-o','icon_surprised.gif','Surprised'),(12,':eek:','icon_surprised.gif','Surprised'),(13,':shock:','icon_eek.gif','Shocked'),(14,':?','icon_confused.gif','Confused'),(15,':-?','icon_confused.gif','Confused'),(16,':???:','icon_confused.gif','Confused'),(17,'8)','icon_cool.gif','Cool'),(18,'8-)','icon_cool.gif','Cool'),(19,':cool:','icon_cool.gif','Cool'),(20,':lol:','icon_lol.gif','Laughing'),(21,':x','icon_mad.gif','Mad'),(22,':-x','icon_mad.gif','Mad'),(23,':mad:','icon_mad.gif','Mad'),(24,':P','icon_razz.gif','Razz'),(25,':-P','icon_razz.gif','Razz'),(26,':razz:','icon_razz.gif','Razz'),(27,':oops:','icon_redface.gif','Embarassed'),(28,':cry:','icon_cry.gif','Crying or Very sad'),(29,':evil:','icon_evil.gif','Evil or Very Mad'),(30,':twisted:','icon_twisted.gif','Twisted Evil'),(31,':roll:','icon_rolleyes.gif','Rolling Eyes'),(32,':wink:','icon_wink.gif','Wink'),(33,';)','icon_wink.gif','Wink'),(34,';-)','icon_wink.gif','Wink'),(35,':!:','icon_exclaim.gif','Exclamation'),(36,':?:','icon_question.gif','Question'),(37,':idea:','icon_idea.gif','Idea'),(38,':arrow:','icon_arrow.gif','Arrow'),(39,':|','icon_neutral.gif','Neutral'),(40,':-|','icon_neutral.gif','Neutral'),(41,':neutral:','icon_neutral.gif','Neutral'),(42,':mrgreen:','icon_mrgreen.gif','Mr. Green');
/*!40000 ALTER TABLE `phpbb2_smilies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_stats_config`
--

DROP TABLE IF EXISTS `phpbb2_stats_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_stats_config` (
  `config_name` varchar(50) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_stats_config`
--

LOCK TABLES `phpbb2_stats_config` WRITE;
/*!40000 ALTER TABLE `phpbb2_stats_config` DISABLE KEYS */;
INSERT INTO `phpbb2_stats_config` (`config_name`, `config_value`) VALUES ('install_date','1411831130'),('modules_dir','stat_modules'),('page_views','0'),('return_limit','10'),('version','2.1.5');
/*!40000 ALTER TABLE `phpbb2_stats_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_stats_modules`
--

DROP TABLE IF EXISTS `phpbb2_stats_modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_stats_modules` (
  `module_id` tinyint(8) NOT NULL,
  `name` varchar(150) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `installed` tinyint(1) NOT NULL,
  `display_order` mediumint(8) unsigned NOT NULL,
  `update_time` mediumint(8) unsigned NOT NULL,
  `auth_value` tinyint(2) NOT NULL,
  `module_info_cache` blob,
  `module_db_cache` blob,
  `module_result_cache` blob,
  `module_info_time` int(10) unsigned NOT NULL,
  `module_cache_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_stats_modules`
--

LOCK TABLES `phpbb2_stats_modules` WRITE;
/*!40000 ALTER TABLE `phpbb2_stats_modules` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_stats_modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_themes`
--

DROP TABLE IF EXISTS `phpbb2_themes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_themes` (
  `themes_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `template_name` varchar(30) NOT NULL,
  `style_name` varchar(30) NOT NULL,
  `head_stylesheet` varchar(100) DEFAULT NULL,
  `body_background` varchar(100) DEFAULT NULL,
  `body_bgcolor` varchar(6) DEFAULT NULL,
  `body_text` varchar(6) DEFAULT NULL,
  `body_link` varchar(6) DEFAULT NULL,
  `body_vlink` varchar(6) DEFAULT NULL,
  `body_alink` varchar(6) DEFAULT NULL,
  `body_hlink` varchar(6) DEFAULT NULL,
  `tr_color1` varchar(6) DEFAULT NULL,
  `tr_color2` varchar(6) DEFAULT NULL,
  `tr_color3` varchar(6) DEFAULT NULL,
  `tr_class1` varchar(25) DEFAULT NULL,
  `tr_class2` varchar(25) DEFAULT NULL,
  `tr_class3` varchar(25) DEFAULT NULL,
  `th_color1` varchar(6) DEFAULT NULL,
  `th_color2` varchar(6) DEFAULT NULL,
  `th_color3` varchar(6) DEFAULT NULL,
  `th_class1` varchar(25) DEFAULT NULL,
  `th_class2` varchar(25) DEFAULT NULL,
  `th_class3` varchar(25) DEFAULT NULL,
  `td_color1` varchar(6) DEFAULT NULL,
  `td_color2` varchar(6) DEFAULT NULL,
  `td_color3` varchar(6) DEFAULT NULL,
  `td_class1` varchar(25) DEFAULT NULL,
  `td_class2` varchar(25) DEFAULT NULL,
  `td_class3` varchar(25) DEFAULT NULL,
  `fontface1` varchar(50) DEFAULT NULL,
  `fontface2` varchar(50) DEFAULT NULL,
  `fontface3` varchar(50) DEFAULT NULL,
  `fontsize1` tinyint(4) DEFAULT NULL,
  `fontsize2` tinyint(4) DEFAULT NULL,
  `fontsize3` tinyint(4) DEFAULT NULL,
  `fontcolor1` varchar(6) DEFAULT NULL,
  `fontcolor2` varchar(6) DEFAULT NULL,
  `fontcolor3` varchar(6) DEFAULT NULL,
  `span_class1` varchar(25) DEFAULT NULL,
  `span_class2` varchar(25) DEFAULT NULL,
  `span_class3` varchar(25) DEFAULT NULL,
  `img_size_poll` smallint(5) unsigned DEFAULT NULL,
  `img_size_privmsg` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`themes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_themes`
--

LOCK TABLES `phpbb2_themes` WRITE;
/*!40000 ALTER TABLE `phpbb2_themes` DISABLE KEYS */;
INSERT INTO `phpbb2_themes` (`themes_id`, `template_name`, `style_name`, `head_stylesheet`, `body_background`, `body_bgcolor`, `body_text`, `body_link`, `body_vlink`, `body_alink`, `body_hlink`, `tr_color1`, `tr_color2`, `tr_color3`, `tr_class1`, `tr_class2`, `tr_class3`, `th_color1`, `th_color2`, `th_color3`, `th_class1`, `th_class2`, `th_class3`, `td_color1`, `td_color2`, `td_color3`, `td_class1`, `td_class2`, `td_class3`, `fontface1`, `fontface2`, `fontface3`, `fontsize1`, `fontsize2`, `fontsize3`, `fontcolor1`, `fontcolor2`, `fontcolor3`, `span_class1`, `span_class2`, `span_class3`, `img_size_poll`, `img_size_privmsg`) VALUES (1,'fisubsilversh','FI Subsilver Shadow','fisubsilversh.css','','','','','','','','','','','','','','','','','','','','','','','row1','row2','','','','',0,0,0,'','006600','ffa34f','','','',0,0);
/*!40000 ALTER TABLE `phpbb2_themes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_themes_name`
--

DROP TABLE IF EXISTS `phpbb2_themes_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_themes_name` (
  `themes_id` smallint(5) unsigned NOT NULL,
  `tr_color1_name` char(50) DEFAULT NULL,
  `tr_color2_name` char(50) DEFAULT NULL,
  `tr_color3_name` char(50) DEFAULT NULL,
  `tr_class1_name` char(50) DEFAULT NULL,
  `tr_class2_name` char(50) DEFAULT NULL,
  `tr_class3_name` char(50) DEFAULT NULL,
  `th_color1_name` char(50) DEFAULT NULL,
  `th_color2_name` char(50) DEFAULT NULL,
  `th_color3_name` char(50) DEFAULT NULL,
  `th_class1_name` char(50) DEFAULT NULL,
  `th_class2_name` char(50) DEFAULT NULL,
  `th_class3_name` char(50) DEFAULT NULL,
  `td_color1_name` char(50) DEFAULT NULL,
  `td_color2_name` char(50) DEFAULT NULL,
  `td_color3_name` char(50) DEFAULT NULL,
  `td_class1_name` char(50) DEFAULT NULL,
  `td_class2_name` char(50) DEFAULT NULL,
  `td_class3_name` char(50) DEFAULT NULL,
  `fontface1_name` char(50) DEFAULT NULL,
  `fontface2_name` char(50) DEFAULT NULL,
  `fontface3_name` char(50) DEFAULT NULL,
  `fontsize1_name` char(50) DEFAULT NULL,
  `fontsize2_name` char(50) DEFAULT NULL,
  `fontsize3_name` char(50) DEFAULT NULL,
  `fontcolor1_name` char(50) DEFAULT NULL,
  `fontcolor2_name` char(50) DEFAULT NULL,
  `fontcolor3_name` char(50) DEFAULT NULL,
  `span_class1_name` char(50) DEFAULT NULL,
  `span_class2_name` char(50) DEFAULT NULL,
  `span_class3_name` char(50) DEFAULT NULL,
  PRIMARY KEY (`themes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_themes_name`
--

LOCK TABLES `phpbb2_themes_name` WRITE;
/*!40000 ALTER TABLE `phpbb2_themes_name` DISABLE KEYS */;
INSERT INTO `phpbb2_themes_name` (`themes_id`, `tr_color1_name`, `tr_color2_name`, `tr_color3_name`, `tr_class1_name`, `tr_class2_name`, `tr_class3_name`, `th_color1_name`, `th_color2_name`, `th_color3_name`, `th_class1_name`, `th_class2_name`, `th_class3_name`, `td_color1_name`, `td_color2_name`, `td_color3_name`, `td_class1_name`, `td_class2_name`, `td_class3_name`, `fontface1_name`, `fontface2_name`, `fontface3_name`, `fontsize1_name`, `fontsize2_name`, `fontsize3_name`, `fontcolor1_name`, `fontcolor2_name`, `fontcolor3_name`, `span_class1_name`, `span_class2_name`, `span_class3_name`) VALUES (1,'The lightest row colour','The medium row color','The darkest row colour','','','','Border round the whole page','Outer table border','Inner table border','Silver gradient picture','Blue gradient picture','Fade-out gradient on index','Background for quote boxes','All white areas','','Background for topic posts','2nd background for topic posts','','Main fonts','Additional topic title font','Form fonts','Smallest font size','Medium font size','Normal font size (post body etc)','Quote & copyright text','Code text colour','Main table header text colour','','','');
/*!40000 ALTER TABLE `phpbb2_themes_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_topic_view`
--

DROP TABLE IF EXISTS `phpbb2_topic_view`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_topic_view` (
  `topic_id` mediumint(8) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `view_time` int(11) NOT NULL,
  `view_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_topic_view`
--

LOCK TABLES `phpbb2_topic_view` WRITE;
/*!40000 ALTER TABLE `phpbb2_topic_view` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_topic_view` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_topics`
--

DROP TABLE IF EXISTS `phpbb2_topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_topics` (
  `topic_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` smallint(8) unsigned NOT NULL,
  `topic_title` varchar(60) NOT NULL,
  `topic_desc` varchar(255) DEFAULT NULL,
  `topic_poster` mediumint(8) NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_views` mediumint(8) unsigned NOT NULL,
  `topic_replies` mediumint(8) unsigned NOT NULL,
  `topic_status` tinyint(3) NOT NULL,
  `topic_vote` tinyint(1) NOT NULL,
  `topic_type` tinyint(3) NOT NULL,
  `topic_first_post_id` mediumint(8) unsigned NOT NULL,
  `topic_last_post_id` mediumint(8) unsigned NOT NULL,
  `topic_moved_id` mediumint(8) unsigned NOT NULL,
  `topic_attachment` tinyint(1) NOT NULL,
  `topic_icon` tinyint(2) DEFAULT NULL,
  `topic_calendar_time` int(11) DEFAULT NULL,
  `topic_calendar_duration` int(11) DEFAULT NULL,
  `topic_announce_duration` mediumint(5) NOT NULL,
  `news_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_moved_id` (`topic_moved_id`),
  KEY `topic_status` (`topic_status`),
  KEY `topic_type` (`topic_type`),
  KEY `topic_calendar_time` (`topic_calendar_time`),
  KEY `news_id` (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_topics`
--

LOCK TABLES `phpbb2_topics` WRITE;
/*!40000 ALTER TABLE `phpbb2_topics` DISABLE KEYS */;
INSERT INTO `phpbb2_topics` (`topic_id`, `forum_id`, `topic_title`, `topic_desc`, `topic_poster`, `topic_time`, `topic_views`, `topic_replies`, `topic_status`, `topic_vote`, `topic_type`, `topic_first_post_id`, `topic_last_post_id`, `topic_moved_id`, `topic_attachment`, `topic_icon`, `topic_calendar_time`, `topic_calendar_duration`, `topic_announce_duration`, `news_id`) VALUES (1,1,'Welcome to phpBB 2 Plus 1.53','',2,972086460,0,0,0,0,0,1,1,0,0,NULL,NULL,NULL,0,0),(2,1,'Sample News Post in Portal','',2,1084742471,1,0,0,0,4,2,2,0,0,10,0,0,0,2);
/*!40000 ALTER TABLE `phpbb2_topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_topics_watch`
--

DROP TABLE IF EXISTS `phpbb2_topics_watch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_topics_watch` (
  `topic_id` mediumint(8) unsigned NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `notify_status` tinyint(1) NOT NULL,
  KEY `topic_id` (`topic_id`),
  KEY `user_id` (`user_id`),
  KEY `notify_status` (`notify_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_topics_watch`
--

LOCK TABLES `phpbb2_topics_watch` WRITE;
/*!40000 ALTER TABLE `phpbb2_topics_watch` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_topics_watch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_user_group`
--

DROP TABLE IF EXISTS `phpbb2_user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_user_group` (
  `group_id` mediumint(8) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `user_pending` tinyint(1) DEFAULT NULL,
  KEY `group_id` (`group_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_user_group`
--

LOCK TABLES `phpbb2_user_group` WRITE;
/*!40000 ALTER TABLE `phpbb2_user_group` DISABLE KEYS */;
INSERT INTO `phpbb2_user_group` (`group_id`, `user_id`, `user_pending`) VALUES (1,-1,0),(2,2,0);
/*!40000 ALTER TABLE `phpbb2_user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_users`
--

DROP TABLE IF EXISTS `phpbb2_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_users` (
  `user_id` mediumint(8) NOT NULL,
  `user_active` tinyint(1) DEFAULT '1',
  `username` varchar(25) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_session_time` int(11) NOT NULL,
  `user_session_page` smallint(5) NOT NULL,
  `user_session_topic` int(11) NOT NULL,
  `user_lastvisit` int(11) NOT NULL,
  `user_regdate` int(11) NOT NULL,
  `user_level` tinyint(4) DEFAULT NULL,
  `user_posts` mediumint(8) unsigned NOT NULL,
  `user_timezone` decimal(5,2) NOT NULL DEFAULT '0.00',
  `user_style` tinyint(4) DEFAULT NULL,
  `user_lang` varchar(255) DEFAULT NULL,
  `user_dateformat` varchar(14) NOT NULL DEFAULT 'd M Y H:i',
  `user_new_privmsg` smallint(5) unsigned NOT NULL,
  `user_unread_privmsg` smallint(5) unsigned NOT NULL,
  `user_last_privmsg` int(11) NOT NULL,
  `user_login_tries` smallint(5) unsigned NOT NULL,
  `user_last_login_try` int(11) NOT NULL,
  `user_emailtime` int(11) DEFAULT NULL,
  `user_viewemail` tinyint(1) DEFAULT NULL,
  `user_attachsig` tinyint(1) DEFAULT NULL,
  `user_setbm` tinyint(1) NOT NULL,
  `user_allowhtml` tinyint(1) DEFAULT '1',
  `user_allowbbcode` tinyint(1) DEFAULT '1',
  `user_allowsmile` tinyint(1) DEFAULT '1',
  `user_allowavatar` tinyint(1) NOT NULL DEFAULT '1',
  `user_allow_pm` tinyint(1) NOT NULL DEFAULT '1',
  `user_allow_viewonline` tinyint(1) NOT NULL DEFAULT '1',
  `user_notify` tinyint(1) NOT NULL DEFAULT '1',
  `user_notify_pm` tinyint(1) NOT NULL,
  `user_popup_pm` tinyint(1) NOT NULL,
  `user_rank` int(11) DEFAULT NULL,
  `user_avatar` varchar(100) DEFAULT NULL,
  `user_avatar_type` tinyint(4) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_icq` varchar(15) DEFAULT NULL,
  `user_website` varchar(100) DEFAULT NULL,
  `user_from` varchar(100) DEFAULT NULL,
  `user_from_flag` varchar(25) DEFAULT NULL,
  `user_sig` text,
  `user_sig_bbcode_uid` char(10) DEFAULT NULL,
  `user_aim` varchar(255) DEFAULT NULL,
  `user_yim` varchar(255) DEFAULT NULL,
  `user_msnm` varchar(255) DEFAULT NULL,
  `user_occ` varchar(100) DEFAULT NULL,
  `user_interests` varchar(255) DEFAULT NULL,
  `user_actkey` varchar(32) DEFAULT NULL,
  `user_newpasswd` varchar(32) DEFAULT NULL,
  `ct_postcount` varchar(10) NOT NULL,
  `ct_posttime` varchar(10) NOT NULL,
  `ct_searchcount` varchar(10) NOT NULL,
  `ct_searchtime` varchar(10) NOT NULL,
  `ct_mailcount` int(10) NOT NULL,
  `ct_pwreset` int(2) NOT NULL,
  `ct_unsucclogin` int(10) DEFAULT NULL,
  `ct_logintry` int(2) NOT NULL,
  `user_sub_forum` tinyint(1) NOT NULL DEFAULT '1',
  `user_split_cat` tinyint(1) NOT NULL DEFAULT '1',
  `user_last_topic_title` tinyint(1) NOT NULL DEFAULT '1',
  `user_sub_level_links` tinyint(1) NOT NULL DEFAULT '2',
  `user_display_viewonline` tinyint(1) NOT NULL DEFAULT '2',
  `user_birthday` int(11) NOT NULL DEFAULT '999999',
  `user_next_birthday_greeting` int(11) NOT NULL,
  `user_gender` tinyint(4) NOT NULL,
  `user_color_group` mediumint(8) unsigned NOT NULL,
  `user_lastlogon` int(11) NOT NULL,
  `user_totaltime` int(11) DEFAULT NULL,
  `user_totallogon` int(11) DEFAULT NULL,
  `user_totalpages` int(11) DEFAULT NULL,
  `user_calendar_display_open` tinyint(1) NOT NULL,
  `user_calendar_header_cells` tinyint(1) NOT NULL DEFAULT '7',
  `user_calendar_week_start` tinyint(1) NOT NULL DEFAULT '1',
  `user_calendar_nb_row` tinyint(2) unsigned NOT NULL DEFAULT '5',
  `user_calendar_birthday` tinyint(1) NOT NULL DEFAULT '1',
  `user_calendar_forum` tinyint(1) NOT NULL DEFAULT '1',
  `user_warnings` smallint(5) DEFAULT NULL,
  `user_passwd_change` int(11) NOT NULL,
  `user_badlogin` smallint(5) NOT NULL,
  `user_blocktime` int(11) NOT NULL,
  `user_block_by` varchar(8) DEFAULT NULL,
  `user_split_global_announce` tinyint(1) NOT NULL DEFAULT '1',
  `user_split_announce` tinyint(1) NOT NULL DEFAULT '1',
  `user_split_sticky` tinyint(1) NOT NULL DEFAULT '1',
  `user_split_news` tinyint(1) NOT NULL DEFAULT '1',
  `user_split_topic_split` tinyint(1) NOT NULL,
  `user_absence` tinyint(1) NOT NULL,
  `user_absence_mode` mediumint(8) NOT NULL,
  `user_absence_text` text NOT NULL,
  `user_announcement_date_display` tinyint(1) NOT NULL DEFAULT '1',
  `user_announcement_display` tinyint(1) NOT NULL DEFAULT '1',
  `user_announcement_display_forum` tinyint(1) NOT NULL DEFAULT '1',
  `user_announcement_split` tinyint(1) NOT NULL DEFAULT '1',
  `user_announcement_forum` tinyint(1) NOT NULL DEFAULT '1',
  `user_use_ajax_preview` tinyint(1) NOT NULL DEFAULT '1',
  `user_use_ajax_edit` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  KEY `user_session_time` (`user_session_time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_users`
--

LOCK TABLES `phpbb2_users` WRITE;
/*!40000 ALTER TABLE `phpbb2_users` DISABLE KEYS */;
INSERT INTO `phpbb2_users` (`user_id`, `user_active`, `username`, `user_password`, `user_session_time`, `user_session_page`, `user_session_topic`, `user_lastvisit`, `user_regdate`, `user_level`, `user_posts`, `user_timezone`, `user_style`, `user_lang`, `user_dateformat`, `user_new_privmsg`, `user_unread_privmsg`, `user_last_privmsg`, `user_login_tries`, `user_last_login_try`, `user_emailtime`, `user_viewemail`, `user_attachsig`, `user_setbm`, `user_allowhtml`, `user_allowbbcode`, `user_allowsmile`, `user_allowavatar`, `user_allow_pm`, `user_allow_viewonline`, `user_notify`, `user_notify_pm`, `user_popup_pm`, `user_rank`, `user_avatar`, `user_avatar_type`, `user_email`, `user_icq`, `user_website`, `user_from`, `user_from_flag`, `user_sig`, `user_sig_bbcode_uid`, `user_aim`, `user_yim`, `user_msnm`, `user_occ`, `user_interests`, `user_actkey`, `user_newpasswd`, `ct_postcount`, `ct_posttime`, `ct_searchcount`, `ct_searchtime`, `ct_mailcount`, `ct_pwreset`, `ct_unsucclogin`, `ct_logintry`, `user_sub_forum`, `user_split_cat`, `user_last_topic_title`, `user_sub_level_links`, `user_display_viewonline`, `user_birthday`, `user_next_birthday_greeting`, `user_gender`, `user_color_group`, `user_lastlogon`, `user_totaltime`, `user_totallogon`, `user_totalpages`, `user_calendar_display_open`, `user_calendar_header_cells`, `user_calendar_week_start`, `user_calendar_nb_row`, `user_calendar_birthday`, `user_calendar_forum`, `user_warnings`, `user_passwd_change`, `user_badlogin`, `user_blocktime`, `user_block_by`, `user_split_global_announce`, `user_split_announce`, `user_split_sticky`, `user_split_news`, `user_split_topic_split`, `user_absence`, `user_absence_mode`, `user_absence_text`, `user_announcement_date_display`, `user_announcement_display`, `user_announcement_display_forum`, `user_announcement_split`, `user_announcement_forum`, `user_use_ajax_preview`, `user_use_ajax_edit`) VALUES (-1,0,'Anonymous','',1669724399,-1035,0,1669724395,1411831130,0,0,0.00,NULL,'','',0,0,0,0,0,NULL,0,0,0,1,1,1,1,0,1,0,1,0,NULL,'',0,'','','','',NULL,'',NULL,'','','','','','','','0','0','0','0',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1669724395,4,1,3,0,7,1,5,1,1,0,1411831130,0,0,NULL,1,1,1,1,0,0,0,'',1,1,1,1,1,1,1),(2,1,'admin','32513bad826d6aa9bfef3e880c9bf7ce',0,0,0,0,1411831130,1,1,0.00,1,'russian','d M Y h:i a',0,0,0,0,0,NULL,1,0,0,0,1,1,1,1,1,0,1,1,1,'',0,'','','','',NULL,'',NULL,'','','','','','','','0','0','0','0',0,0,NULL,0,1,1,1,2,2,999999,0,0,1,0,0,0,0,0,7,1,5,1,1,0,1411831130,0,0,NULL,1,1,1,1,0,0,0,'',1,1,1,1,1,1,1);
/*!40000 ALTER TABLE `phpbb2_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_vote_desc`
--

DROP TABLE IF EXISTS `phpbb2_vote_desc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_vote_desc` (
  `vote_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` mediumint(8) unsigned NOT NULL,
  `vote_text` text NOT NULL,
  `vote_start` int(11) NOT NULL,
  `vote_length` int(11) NOT NULL,
  PRIMARY KEY (`vote_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_vote_desc`
--

LOCK TABLES `phpbb2_vote_desc` WRITE;
/*!40000 ALTER TABLE `phpbb2_vote_desc` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_vote_desc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_vote_results`
--

DROP TABLE IF EXISTS `phpbb2_vote_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_vote_results` (
  `vote_id` mediumint(8) unsigned NOT NULL,
  `vote_option_id` tinyint(4) unsigned NOT NULL,
  `vote_option_text` varchar(255) NOT NULL,
  `vote_result` int(11) NOT NULL,
  KEY `vote_option_id` (`vote_option_id`),
  KEY `vote_id` (`vote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_vote_results`
--

LOCK TABLES `phpbb2_vote_results` WRITE;
/*!40000 ALTER TABLE `phpbb2_vote_results` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_vote_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_vote_voters`
--

DROP TABLE IF EXISTS `phpbb2_vote_voters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_vote_voters` (
  `vote_id` mediumint(8) unsigned NOT NULL,
  `vote_user_id` mediumint(8) NOT NULL,
  `vote_user_ip` char(8) NOT NULL,
  KEY `vote_id` (`vote_id`),
  KEY `vote_user_id` (`vote_user_id`),
  KEY `vote_user_ip` (`vote_user_ip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_vote_voters`
--

LOCK TABLES `phpbb2_vote_voters` WRITE;
/*!40000 ALTER TABLE `phpbb2_vote_voters` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_vote_voters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb2_words`
--

DROP TABLE IF EXISTS `phpbb2_words`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb2_words` (
  `word_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `word` char(100) NOT NULL,
  `replacement` char(100) NOT NULL,
  PRIMARY KEY (`word_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb2_words`
--

LOCK TABLES `phpbb2_words` WRITE;
/*!40000 ALTER TABLE `phpbb2_words` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb2_words` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_acronyms`
--

DROP TABLE IF EXISTS `phpbb_acronyms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_acronyms` (
  `acronym_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `acronym` varchar(80) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`acronym_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_acronyms`
--

LOCK TABLES `phpbb_acronyms` WRITE;
/*!40000 ALTER TABLE `phpbb_acronyms` DISABLE KEYS */;
INSERT INTO `phpbb_acronyms` (`acronym_id`, `acronym`, `description`) VALUES (1,'phpBB2','phpBB2.de');
/*!40000 ALTER TABLE `phpbb_acronyms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_album`
--

DROP TABLE IF EXISTS `phpbb_album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_album` (
  `pic_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pic_filename` varchar(255) NOT NULL,
  `pic_thumbnail` varchar(255) DEFAULT NULL,
  `pic_title` varchar(255) NOT NULL,
  `pic_desc` text,
  `pic_user_id` mediumint(8) NOT NULL,
  `pic_username` varchar(32) DEFAULT NULL,
  `pic_user_ip` char(8) NOT NULL,
  `pic_time` int(11) unsigned NOT NULL,
  `pic_cat_id` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `pic_view_count` int(11) unsigned NOT NULL,
  `pic_lock` tinyint(3) NOT NULL,
  `pic_approval` tinyint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pic_id`),
  KEY `pic_cat_id` (`pic_cat_id`),
  KEY `pic_user_id` (`pic_user_id`),
  KEY `pic_time` (`pic_time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_album`
--

LOCK TABLES `phpbb_album` WRITE;
/*!40000 ALTER TABLE `phpbb_album` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_album_cat`
--

DROP TABLE IF EXISTS `phpbb_album_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_album_cat` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) NOT NULL,
  `cat_desc` text,
  `cat_order` mediumint(8) NOT NULL,
  `cat_view_level` tinyint(3) NOT NULL DEFAULT '-1',
  `cat_upload_level` tinyint(3) NOT NULL,
  `cat_rate_level` tinyint(3) NOT NULL,
  `cat_comment_level` tinyint(3) NOT NULL,
  `cat_edit_level` tinyint(3) NOT NULL,
  `cat_delete_level` tinyint(3) NOT NULL DEFAULT '2',
  `cat_view_groups` varchar(255) DEFAULT NULL,
  `cat_upload_groups` varchar(255) DEFAULT NULL,
  `cat_rate_groups` varchar(255) DEFAULT NULL,
  `cat_comment_groups` varchar(255) DEFAULT NULL,
  `cat_edit_groups` varchar(255) DEFAULT NULL,
  `cat_delete_groups` varchar(255) DEFAULT NULL,
  `cat_moderator_groups` varchar(255) DEFAULT NULL,
  `cat_approval` tinyint(3) NOT NULL,
  `cat_parent` mediumint(8) unsigned DEFAULT NULL,
  `cat_user_id` mediumint(8) unsigned DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `cat_order` (`cat_order`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_album_cat`
--

LOCK TABLES `phpbb_album_cat` WRITE;
/*!40000 ALTER TABLE `phpbb_album_cat` DISABLE KEYS */;
INSERT INTO `phpbb_album_cat` (`cat_id`, `cat_title`, `cat_desc`, `cat_order`, `cat_view_level`, `cat_upload_level`, `cat_rate_level`, `cat_comment_level`, `cat_edit_level`, `cat_delete_level`, `cat_view_groups`, `cat_upload_groups`, `cat_rate_groups`, `cat_comment_groups`, `cat_edit_groups`, `cat_delete_groups`, `cat_moderator_groups`, `cat_approval`, `cat_parent`, `cat_user_id`) VALUES (1,'Test category','',10,-1,0,0,0,0,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
/*!40000 ALTER TABLE `phpbb_album_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_album_comment`
--

DROP TABLE IF EXISTS `phpbb_album_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_album_comment` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comment_pic_id` int(11) unsigned NOT NULL,
  `comment_cat_id` int(11) NOT NULL,
  `comment_user_id` mediumint(8) NOT NULL,
  `comment_username` varchar(32) DEFAULT NULL,
  `comment_user_ip` char(8) NOT NULL,
  `comment_time` int(11) unsigned NOT NULL,
  `comment_text` text,
  `comment_edit_time` int(11) unsigned DEFAULT NULL,
  `comment_edit_count` smallint(5) unsigned NOT NULL,
  `comment_edit_user_id` mediumint(8) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `comment_pic_id` (`comment_pic_id`),
  KEY `comment_user_id` (`comment_user_id`),
  KEY `comment_user_ip` (`comment_user_ip`),
  KEY `comment_time` (`comment_time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_album_comment`
--

LOCK TABLES `phpbb_album_comment` WRITE;
/*!40000 ALTER TABLE `phpbb_album_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_album_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_album_config`
--

DROP TABLE IF EXISTS `phpbb_album_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_album_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_album_config`
--

LOCK TABLES `phpbb_album_config` WRITE;
/*!40000 ALTER TABLE `phpbb_album_config` DISABLE KEYS */;
INSERT INTO `phpbb_album_config` (`config_name`, `config_value`) VALUES ('album_category_sorting','cat_order'),('album_category_sorting_direction','ASC'),('album_debug_mode','0'),('album_version','.0.53'),('cols_per_page','4'),('comment','1'),('desc_length','512'),('fullpic_popup','0'),('gd_version','2'),('gif_allowed','1'),('hotlink_allowed','smartor.is-root.com'),('hotlink_prevent','0'),('index_enable_supercells','1'),('jpg_allowed','1'),('line_break_subcats','0'),('max_file_size','128000'),('max_height','600'),('max_pics','1024'),('max_width','800'),('mod_pics_limit','250'),('new_pic_check_interval','1M'),('personal_allow_gallery_mod','1'),('personal_allow_sub_categories','1'),('personal_gallery','0'),('personal_gallery_limit','10'),('personal_gallery_private','0'),('personal_gallery_view','-1'),('personal_show_recent_instead_of_nopics','1'),('personal_show_recent_in_subcats','1'),('personal_show_subcats_in_index','1'),('personal_sub_category_limit','10'),('png_allowed','1'),('rate','1'),('rate_scale','10'),('rows_per_page','3'),('show_all_in_personal_gallery','0'),('show_index_comments','0'),('show_index_last_comment','0'),('show_index_last_pic','0'),('show_index_pics','0'),('show_index_subcats','1'),('show_index_thumb','0'),('show_index_total_comments','0'),('show_index_total_pics','0'),('show_personal_gallery_link','1'),('show_recent_instead_of_nopics','1'),('show_recent_in_subcats','1'),('sort_method','pic_time'),('sort_order','DESC'),('thumbnail_cache','1'),('thumbnail_quality','50'),('thumbnail_size','125'),('user_pics_limit','50');
/*!40000 ALTER TABLE `phpbb_album_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_album_rate`
--

DROP TABLE IF EXISTS `phpbb_album_rate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_album_rate` (
  `rate_pic_id` int(11) unsigned NOT NULL,
  `rate_user_id` mediumint(8) NOT NULL,
  `rate_user_ip` char(8) NOT NULL,
  `rate_point` tinyint(3) unsigned NOT NULL,
  `rate_hon_point` tinyint(3) NOT NULL,
  KEY `rate_pic_id` (`rate_pic_id`),
  KEY `rate_user_id` (`rate_user_id`),
  KEY `rate_user_ip` (`rate_user_ip`),
  KEY `rate_point` (`rate_point`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_album_rate`
--

LOCK TABLES `phpbb_album_rate` WRITE;
/*!40000 ALTER TABLE `phpbb_album_rate` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_album_rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_album_sp_config`
--

DROP TABLE IF EXISTS `phpbb_album_sp_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_album_sp_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_album_sp_config`
--

LOCK TABLES `phpbb_album_sp_config` WRITE;
/*!40000 ALTER TABLE `phpbb_album_sp_config` DISABLE KEYS */;
INSERT INTO `phpbb_album_sp_config` (`config_name`, `config_value`) VALUES ('disp_high','1'),('disp_late','1'),('disp_rand','1'),('disp_watermark_at','3'),('hon_rate_sep','1'),('hon_rate_times','1'),('hon_rate_users','1'),('hon_rate_where',''),('img_cols','4'),('img_rows','2'),('midthumb_cache','1'),('midthumb_height','600'),('midthumb_use','1'),('midthumb_width','800'),('rate_type','2'),('use_watermark','0'),('wut_users','0');
/*!40000 ALTER TABLE `phpbb_album_sp_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_anti_robotic_reg`
--

DROP TABLE IF EXISTS `phpbb_anti_robotic_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_anti_robotic_reg` (
  `session_id` char(32) NOT NULL,
  `reg_key` char(5) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_anti_robotic_reg`
--

LOCK TABLES `phpbb_anti_robotic_reg` WRITE;
/*!40000 ALTER TABLE `phpbb_anti_robotic_reg` DISABLE KEYS */;
INSERT INTO `phpbb_anti_robotic_reg` (`session_id`, `reg_key`, `timestamp`) VALUES ('51df22da295e3c91a90720594cd4926c','xunqy',1323533201);
/*!40000 ALTER TABLE `phpbb_anti_robotic_reg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_attach_quota`
--

DROP TABLE IF EXISTS `phpbb_attach_quota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_attach_quota` (
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  `quota_type` smallint(2) NOT NULL,
  `quota_limit_id` mediumint(8) unsigned NOT NULL,
  KEY `quota_type` (`quota_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_attach_quota`
--

LOCK TABLES `phpbb_attach_quota` WRITE;
/*!40000 ALTER TABLE `phpbb_attach_quota` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_attach_quota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_attachments`
--

DROP TABLE IF EXISTS `phpbb_attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_attachments` (
  `attach_id` mediumint(8) unsigned NOT NULL,
  `post_id` mediumint(8) unsigned NOT NULL,
  `privmsgs_id` mediumint(8) unsigned NOT NULL,
  `user_id_1` mediumint(8) NOT NULL,
  `user_id_2` mediumint(8) NOT NULL,
  KEY `attach_id_post_id` (`attach_id`,`post_id`),
  KEY `attach_id_privmsgs_id` (`attach_id`,`privmsgs_id`),
  KEY `post_id` (`post_id`),
  KEY `privmsgs_id` (`privmsgs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_attachments`
--

LOCK TABLES `phpbb_attachments` WRITE;
/*!40000 ALTER TABLE `phpbb_attachments` DISABLE KEYS */;
INSERT INTO `phpbb_attachments` (`attach_id`, `post_id`, `privmsgs_id`, `user_id_1`, `user_id_2`) VALUES (2,5,0,2,0),(3,6,0,2,0),(4,7,0,3,0),(5,8,0,3,0),(6,8,0,3,0),(7,17,0,4,0),(8,17,0,4,0),(9,17,0,4,0),(10,20,0,4,0),(11,21,0,2,0),(12,21,0,2,0),(13,22,0,5,0),(14,23,0,5,0),(15,23,0,5,0),(16,24,0,2,0),(17,25,0,4,0),(18,36,0,2,0),(19,36,0,2,0),(20,37,0,5,0),(21,38,0,8,0),(22,38,0,8,0),(23,38,0,8,0),(24,39,0,9,0),(25,39,0,9,0),(26,39,0,9,0),(27,40,0,8,0),(28,40,0,8,0),(29,41,0,10,0),(30,64,0,11,0),(31,70,0,11,0),(32,70,0,11,0),(33,70,0,11,0),(34,73,0,4,0),(35,75,0,12,0),(36,75,0,12,0),(37,75,0,12,0),(38,77,0,3,0),(39,83,0,14,0);
/*!40000 ALTER TABLE `phpbb_attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_attachments_config`
--

DROP TABLE IF EXISTS `phpbb_attachments_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_attachments_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_attachments_config`
--

LOCK TABLES `phpbb_attachments_config` WRITE;
/*!40000 ALTER TABLE `phpbb_attachments_config` DISABLE KEYS */;
INSERT INTO `phpbb_attachments_config` (`config_name`, `config_value`) VALUES ('allow_ftp_upload','0'),('allow_pm_attach','1'),('attachment_quota','0'),('attachment_topic_review','1'),('attach_version','2.4.3'),('default_pm_quota','0'),('default_upload_quota','0'),('disable_mod','0'),('display_order','0'),('download_path','files'),('flash_autoplay','0'),('ftp_pass','NOTUSED'),('ftp_pasv_mode','1'),('ftp_path','/htdocs/forum/files'),('ftp_server','ftp.byethost7.com'),('ftp_user','b7_9629569'),('img_create_thumbnail','0'),('img_display_inlined','1'),('img_imagick',''),('img_link_height','0'),('img_link_width','0'),('img_max_height','0'),('img_max_width','0'),('img_min_thumb_filesize','12000'),('max_attachments','5'),('max_attachments_pm','2'),('max_filesize','0'),('max_filesize_pm','0'),('show_apcp','0'),('topic_icon','images/icon_clip.gif'),('upload_dir','files'),('upload_img','images/icon_clip.gif'),('use_gd2','0'),('wma_autoplay','0');
/*!40000 ALTER TABLE `phpbb_attachments_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_attachments_desc`
--

DROP TABLE IF EXISTS `phpbb_attachments_desc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_attachments_desc` (
  `attach_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `physical_filename` varchar(255) NOT NULL,
  `real_filename` varchar(255) NOT NULL,
  `download_count` mediumint(8) unsigned NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `extension` varchar(100) DEFAULT NULL,
  `mimetype` varchar(100) DEFAULT NULL,
  `filesize` int(20) NOT NULL,
  `filetime` int(11) NOT NULL,
  `thumbnail` tinyint(1) NOT NULL,
  PRIMARY KEY (`attach_id`),
  KEY `filetime` (`filetime`),
  KEY `physical_filename` (`physical_filename`),
  KEY `filesize` (`filesize`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_attachments_desc`
--

LOCK TABLES `phpbb_attachments_desc` WRITE;
/*!40000 ALTER TABLE `phpbb_attachments_desc` DISABLE KEYS */;
INSERT INTO `phpbb_attachments_desc` (`attach_id`, `physical_filename`, `real_filename`, `download_count`, `comment`, `extension`, `mimetype`, `filesize`, `filetime`, `thumbnail`) VALUES (2,'2e8b9ef233746129d8b5ceb16a7b6698_697.jpg','2e8b9ef233746129d8b5ceb16a7b6698.jpg',64,'ÐžÑ‡Ð°Ñ€Ð¾Ð²Ð°ÑˆÐºÐ¸','jpg','image/jpeg',557896,1323528383,0),(3,'0388b9e600a9b80e3d0f34449caf0e25_141.jpg','0388b9e600a9b80e3d0f34449caf0e25.JPG',53,'Ð¤ÐµÑ€Ð¼ÐµÑ€','jpg','image/jpeg',439990,1323528541,0),(4,'lsp_013a_085_169.jpg','lsp-013a-085.jpg',44,'Ð›Ð¾Ð»Ð¸Ñ‚ÐºÐ°','jpg','image/jpeg',338325,1323532143,0),(5,'13157073582185_145.jpg','13157073582185.jpg',61,'ÐŸÐ»ÑÐ¶Ð½Ð°Ñ Ð¼Ð¾Ð´Ð½Ð¸Ñ†Ð°','jpg','image/jpeg',393872,1323532359,0),(6,'12556936474675_390.jpg','12556936474675.jpg',61,'Ð¡Ð¾Ð±Ð°Ñ‡ÐµÐ½ÑŒÐºÐ¸','jpg','image/jpeg',735338,1323532322,0),(7,'12711903570498_173.jpg','12711903570498.jpg',54,'ÐšÐ¾Ð½ÑÑˆÐºÐ° Ð¸ Ð´Ñ€Ð°ÐºÐ¾Ð½Ñ‡Ð¸Ðº','jpg','image/jpeg',554476,1323536069,0),(8,'12896093353861_965.jpg','12896093353861.jpg',54,'ÐŸÑƒÑˆÐ¸ÑÑ‚Ð¸ÐºÐ¸','jpg','image/jpeg',480017,1323536020,0),(9,'13158537875892_678.jpg','13158537875892.jpg',54,'ÐÐ½ÑƒÐ±Ð¸Ñ','jpg','image/jpeg',251861,1323535973,0),(10,'seiken_densetsu_292.jpg','seiken_densetsu.jpg',39,'Riesz Ð½Ð°ÑÑ€Ð¸Ð²Ð°ÐµÑ‚','jpg','image/jpeg',436231,1323537021,0),(11,'4cae2235ef9b36b9d8b3fd6cf7bcf855_488.jpg','4cae2235ef9b36b9d8b3fd6cf7bcf855.jpg',37,'Ð¡ Ð¿Ð¾ÑÐ¾Ñ…Ð¾Ð¼','jpg','image/jpeg',187586,1323537173,0),(12,'riesz_171.jpg','Riesz.jpg',37,'Ð’ Ñ€ÐµÑ‡ÑƒÑˆÐºÐµ','jpg','image/jpeg',62728,1323537155,0),(13,'ca000540_237.jpg','ca000540.jpg',33,'Ð—Ð¾Ð»ÑƒÑˆÐºÐ°','jpg','image/jpeg',99545,1323537633,0),(14,'ce000039_565.jpg','ce000039.jpg',40,'ÐÐ°ÑˆÐ° Ð½ÑÑˆÐ°','jpg','image/jpeg',65546,1323537919,0),(15,'4786032_16075aec_108.jpg','4786032_16075aec.jpg',40,'ÐÐ·Ð¸Ð°Ñ‚ÑÐºÐ°Ñ Ð½ÑÑˆÐ°','jpg','image/jpeg',28329,1323537882,0),(16,'03859a9b68dd601bb1f05e5eada8c0ed_200.jpg','03859a9b68dd601bb1f05e5eada8c0ed.JPG',38,'Ð•Ñ‰Ñ‘ ÑÐµÐ»ÑŒÑÐºÐ¸Ð¹ Ð¿Ð°Ñ€ÐµÐ½Ñ‘Ðº','jpg','image/jpeg',164842,1323538062,0),(17,'12950622690496_690.jpg','12950622690496.jpg',12,'Ð›Ð¸ÑÐ¸Ñ‡ÐºÐ°','jpg','image/jpeg',406200,1323538192,0),(18,'13155921520134_210.jpg','13155921520134.jpg',37,'Ð”Ð²Ð¾Ð¹Ð½ÑÑˆÐºÐ¸','jpg','image/jpeg',71601,1323547215,0),(19,'13134814933021_195.jpg','13134814933021.jpg',37,'ÐœÐ¸Ð»Ð°ÑˆÐºÐ¸','jpg','image/jpeg',257827,1323547182,0),(20,'13120948941522_144.jpg','13120948941522.jpg',35,'ÐœÐ°Ð»ÑŒÑ‡Ð¾Ð½ÐºÐ°','jpg','image/jpeg',264773,1323547437,0),(21,'ladyboy_crush_1403_60_lg_128.jpg','ladyboy-crush_-1403-60-lg.jpg',19,'Ð—Ð°Ð¹Ñ‡Ð¸ÑˆÐºÐ°','jpg','image/jpeg',179815,1323606210,0),(22,'ladyboy_crush_1385_21_lg_170.jpg','ladyboy-crush_-1385-21-lg.jpg',19,'ÐÐ° Ð¿Ð¾ÑÑ‚ÐµÐ»ÑŒÐºÐµ','jpg','image/jpeg',159840,1323606178,0),(23,'ladyboy_crush_1383_54_lg_725.jpg','ladyboy-crush_-1383-54-lg.jpg',19,'Ð‘Ð¾Ð³Ð¸Ð½Ñ','jpg','image/jpeg',138630,1323606159,0),(24,'26029674meb_124.jpg','26029674meb.jpg',15,'ÐÐ° Ð¿Ð»ÑÐ¶Ðµ','jpg','image/jpeg',90318,1323614185,0),(25,'26029673sug_200.jpg','26029673sUG.jpg',15,'ÐÐ·Ð¸ÑÑ‚Ð¾Ñ‡ÐºÐ¸','jpg','image/jpeg',265673,1323614167,0),(26,'23552668xcn_129.jpg','23552668xCn.jpg',15,'Ð’ Ð´ÑƒÑˆÐµ','jpg','image/jpeg',52146,1323614126,0),(27,'206_212.jpg','206.jpg',13,'Ð’ Ð»ÐµÑÑƒ','jpg','image/jpeg',405585,1323614367,0),(28,'26061745npd_180.jpg','26061745NPd.jpg',13,'ÐÐ° Ð¿Ð¾Ð»ÑÐ½ÐºÐµ','jpg','image/jpeg',149812,1323614334,0),(29,'2865_122.jpg','2865.jpg',10,'ÐŸÐ¾Ð»Ñ‘Ñ‚','jpg','image/jpeg',121573,1323626747,0),(30,'i_391_146.jpg','i-39[1].jpg',27,'Ð—Ð²ÐµÑ€ÑÑ‚ÐºÐ¸:)','jpg','image/jpeg',57762,1323684906,0),(31,'9a1fff872d431e773433b72e7e546016_501.jpg','9a1fff872d431e773433b72e7e546016.jpg',38,'Ð—Ð°Ð³Ð°Ð´Ð¾Ñ‡Ð½Ð°Ñ','jpg','image/jpeg',323551,1323690429,0),(32,'2241826d7e78a1a7231ba756222e92ac_132.jpg','2241826d7e78a1a7231ba756222e92ac.jpg',38,'Ð’ Ð¿Ð°Ð»Ð°Ñ‚ÐºÐµ','jpg','image/jpeg',104416,1323690403,0),(33,'bd1ab8554f6ce3bf37adcdcdad046a1d_518.jpg','bd1ab8554f6ce3bf37adcdcdad046a1d.JPG',38,'ÐÐ° Ñ†ÐµÐ¿Ð¾Ñ‡ÐºÐµ','jpg','image/jpeg',214203,1323690375,0),(34,'9e98d28c98f0b124aa1ca15e00fc7029_466.jpg','9e98d28c98f0b124aa1ca15e00fc7029.jpg',28,'Ð“Ð°ÐµÑ‡ÐºÐ°','jpg','image/jpeg',72079,1323712054,0),(35,'mgca3_102.jpg','MGcA3.jpg',14,'Ð¡Ð¼ÑƒÑ‰ÐµÐ½Ð° :oops:','jpg','image/jpeg',165900,1324134526,0),(36,'uska7_571.jpg','USka7.jpg',14,'Ð›Ð¸ÑÐ¸Ñ‡ÐºÐ°','jpg','image/jpeg',345101,1324134496,0),(37,'xdul7_101.jpg','xDUL7.jpg',13,'Ð—Ð°Ð¹Ñ‡Ð¸Ðº','jpg','image/jpeg',232587,1324134294,0),(38,'1323295597_1322890064lovelybonez_maviealt_194.png','1323295597_1322890064.lovelybonez_maviealt.png',7,'Ð‘Ð¾Ð³Ð¸Ð½Ñ(Ð¼Ð¾Ñ)','png','image/png',878473,1324135716,0),(39,'x_ecc62832_208.jpg','x_ecc62832.jpg',34,'','jpg','image/jpeg',59602,1324225973,0);
/*!40000 ALTER TABLE `phpbb_attachments_desc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_auth_access`
--

DROP TABLE IF EXISTS `phpbb_auth_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_auth_access` (
  `group_id` mediumint(8) NOT NULL,
  `forum_id` smallint(5) unsigned NOT NULL,
  `auth_view` tinyint(1) NOT NULL,
  `auth_read` tinyint(1) NOT NULL,
  `auth_post` tinyint(1) NOT NULL,
  `auth_reply` tinyint(1) NOT NULL,
  `auth_edit` tinyint(1) NOT NULL,
  `auth_delete` tinyint(1) NOT NULL,
  `auth_sticky` tinyint(1) NOT NULL,
  `auth_announce` tinyint(1) NOT NULL,
  `auth_global_announce` tinyint(1) NOT NULL,
  `auth_vote` tinyint(1) NOT NULL,
  `auth_pollcreate` tinyint(1) NOT NULL,
  `auth_attachments` tinyint(1) NOT NULL,
  `auth_mod` tinyint(1) NOT NULL,
  `auth_download` tinyint(1) NOT NULL,
  `auth_cal` tinyint(1) NOT NULL,
  `auth_news` tinyint(1) NOT NULL,
  `auth_ban` tinyint(1) NOT NULL,
  `auth_greencard` tinyint(1) NOT NULL,
  `auth_bluecard` tinyint(1) NOT NULL,
  KEY `group_id` (`group_id`),
  KEY `forum_id` (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_auth_access`
--

LOCK TABLES `phpbb_auth_access` WRITE;
/*!40000 ALTER TABLE `phpbb_auth_access` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_auth_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_banlist`
--

DROP TABLE IF EXISTS `phpbb_banlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_banlist` (
  `ban_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ban_userid` mediumint(8) NOT NULL,
  `ban_ip` char(8) NOT NULL,
  `ban_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ban_id`),
  KEY `ban_ip_user_id` (`ban_ip`,`ban_userid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_banlist`
--

LOCK TABLES `phpbb_banlist` WRITE;
/*!40000 ALTER TABLE `phpbb_banlist` DISABLE KEYS */;
INSERT INTO `phpbb_banlist` (`ban_id`, `ban_userid`, `ban_ip`, `ban_email`) VALUES (3,13,'',NULL);
/*!40000 ALTER TABLE `phpbb_banlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_banner`
--

DROP TABLE IF EXISTS `phpbb_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_banner` (
  `banner_id` mediumint(8) unsigned NOT NULL,
  `banner_name` text NOT NULL,
  `banner_spot` smallint(1) unsigned NOT NULL,
  `banner_forum` mediumint(8) unsigned NOT NULL,
  `banner_description` varchar(30) NOT NULL,
  `banner_url` varchar(90) NOT NULL,
  `banner_owner` mediumint(8) NOT NULL,
  `banner_click` mediumint(8) unsigned NOT NULL,
  `banner_view` mediumint(8) unsigned NOT NULL,
  `banner_weigth` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `banner_active` tinyint(1) NOT NULL,
  `banner_timetype` tinyint(1) NOT NULL,
  `time_begin` int(11) NOT NULL,
  `time_end` int(11) NOT NULL,
  `date_begin` int(11) NOT NULL,
  `date_end` int(11) NOT NULL,
  `banner_level` tinyint(1) NOT NULL,
  `banner_level_type` tinyint(1) NOT NULL,
  `banner_comment` varchar(50) NOT NULL,
  `banner_type` mediumint(5) NOT NULL,
  `banner_width` mediumint(5) unsigned NOT NULL,
  `banner_height` mediumint(5) NOT NULL,
  `banner_filter` tinyint(1) NOT NULL,
  `banner_filter_time` mediumint(5) NOT NULL DEFAULT '600',
  KEY `banner_id` (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_banner`
--

LOCK TABLES `phpbb_banner` WRITE;
/*!40000 ALTER TABLE `phpbb_banner` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_banner_stats`
--

DROP TABLE IF EXISTS `phpbb_banner_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_banner_stats` (
  `banner_id` mediumint(8) unsigned NOT NULL,
  `click_date` int(11) NOT NULL,
  `click_ip` char(8) NOT NULL,
  `click_user` mediumint(8) NOT NULL,
  `user_duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_banner_stats`
--

LOCK TABLES `phpbb_banner_stats` WRITE;
/*!40000 ALTER TABLE `phpbb_banner_stats` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_banner_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_bookmarks`
--

DROP TABLE IF EXISTS `phpbb_bookmarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_bookmarks` (
  `topic_id` mediumint(8) unsigned NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  KEY `topic_id` (`topic_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_bookmarks`
--

LOCK TABLES `phpbb_bookmarks` WRITE;
/*!40000 ALTER TABLE `phpbb_bookmarks` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_bookmarks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_captcha_config`
--

DROP TABLE IF EXISTS `phpbb_captcha_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_captcha_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(100) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_captcha_config`
--

LOCK TABLES `phpbb_captcha_config` WRITE;
/*!40000 ALTER TABLE `phpbb_captcha_config` DISABLE KEYS */;
INSERT INTO `phpbb_captcha_config` (`config_name`, `config_value`) VALUES ('arcs','0'),('background_color','#E5ECF9'),('chess','0'),('ellipses','0'),('font','1'),('foreground_lattice_x','15'),('foreground_lattice_y','15'),('gammacorrect','0.8'),('height','60'),('image','0'),('jpeg','0'),('jpeg_quality','50'),('lattice_color','#FFFFFF'),('lines','0'),('pre_letters','0'),('pre_letters_great','1'),('width','320');
/*!40000 ALTER TABLE `phpbb_captcha_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_categories`
--

DROP TABLE IF EXISTS `phpbb_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_categories` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(100) DEFAULT NULL,
  `cat_order` mediumint(8) unsigned NOT NULL,
  `cat_main_type` char(1) DEFAULT NULL,
  `cat_main` mediumint(8) unsigned NOT NULL,
  `cat_desc` text NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `cat_order` (`cat_order`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_categories`
--

LOCK TABLES `phpbb_categories` WRITE;
/*!40000 ALTER TABLE `phpbb_categories` DISABLE KEYS */;
INSERT INTO `phpbb_categories` (`cat_id`, `cat_title`, `cat_order`, `cat_main_type`, `cat_main`, `cat_desc`, `icon`) VALUES (2,'ÐžÐ±Ñ‰Ð¸Ð¹',10,'c',0,'','');
/*!40000 ALTER TABLE `phpbb_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_color_groups`
--

DROP TABLE IF EXISTS `phpbb_color_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_color_groups` (
  `group_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  `group_color` varchar(50) NOT NULL,
  `hidden` tinyint(1) NOT NULL,
  `order_num` mediumint(9) NOT NULL,
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `group_name` (`group_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_color_groups`
--

LOCK TABLES `phpbb_color_groups` WRITE;
/*!40000 ALTER TABLE `phpbb_color_groups` DISABLE KEYS */;
INSERT INTO `phpbb_color_groups` (`group_id`, `group_name`, `group_color`, `hidden`, `order_num`) VALUES (1,'Administrator','lime',0,1),(2,'Super Mod','teal',0,2),(3,'Moderator','maroon',0,3);
/*!40000 ALTER TABLE `phpbb_color_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_config`
--

DROP TABLE IF EXISTS `phpbb_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_config`
--

LOCK TABLES `phpbb_config` WRITE;
/*!40000 ALTER TABLE `phpbb_config` DISABLE KEYS */;
INSERT INTO `phpbb_config` (`config_name`, `config_value`) VALUES ('absent_button','1'),('allow_autologin','1'),('allow_avatar_local','0'),('allow_avatar_remote','1'),('allow_avatar_upload','1'),('allow_bbcode','1'),('allow_html','1'),('allow_html_tags','b,i,u,pre,div,embed,scr,align,type,quality,span,color,a,style'),('allow_namechange','0'),('allow_news','1'),('allow_rss','1'),('allow_sig','1'),('allow_smilies','1'),('allow_theme_create','0'),('announcement_date_display','1'),('announcement_date_display_over','0'),('announcement_display','1'),('announcement_display_forum','1'),('announcement_display_forum_over','0'),('announcement_display_over','0'),('announcement_duration','7'),('announcement_forum','1'),('announcement_forum_over','0'),('announcement_last_prune','1669755599'),('announcement_prune_strategy','0'),('announcement_split','1'),('announcement_split_over','0'),('avatar_filesize','512961'),('avatar_gallery_path','images/avatars/gallery'),('avatar_max_height','300'),('avatar_max_width','300'),('avatar_path','images/avatars'),('birthday_check_day','1'),('birthday_greeting','1'),('birthday_required','0'),('block_time','600'),('bluecard_limit','3'),('bluecard_limit_2','1'),('board_disable','0'),('board_disable_msg','Rebuild Search in progress...'),('board_email','umka23gola@lenta.ru'),('board_email_form','0'),('board_email_sig','Thanks, The Management'),('board_startdate','1323526841'),('board_timezone','3'),('calendar_birthday','1'),('calendar_birthday_over','0'),('calendar_display_open','0'),('calendar_display_open_over','0'),('calendar_forum','1'),('calendar_forum_over','0'),('calendar_header_cells','7'),('calendar_header_cells_over','0'),('calendar_nb_row','5'),('calendar_nb_row_over','0'),('calendar_text_length','200'),('calendar_title_length','30'),('calendar_week_start','1'),('calendar_week_start_over','0'),('config_id','1'),('cookie_domain',''),('cookie_name','phpbb2mysql'),('cookie_path','/'),('cookie_secure','0'),('coppa_fax',''),('coppa_mail',''),('default_dateformat','D M d, Y g:i a'),('default_lang','english'),('default_style','1'),('display_viewonline','2'),('display_viewonline_over','0'),('enable_confirm','1'),('flood_interval','1'),('force_complex_password','1'),('google_visit_counter','2492'),('gzip_compress','0'),('hidde_last_logon','0'),('hot_threshold','25'),('icon_per_row','10'),('last_topic_title','1'),('last_topic_title_length','24'),('last_topic_title_over','0'),('login_reset_time','30'),('max_autologin_time','30'),('max_inbox_privmsgs','50'),('max_link_bookmarks','0'),('max_login_attempts','5'),('max_login_error','100'),('max_password_age','0'),('max_poll_options','25'),('max_posts','83'),('max_savebox_privmsgs','50'),('max_sentbox_privmsgs','25'),('max_sig_chars','2555'),('max_topics','15'),('max_users','36'),('max_user_age','500'),('max_user_bancard','100'),('min_password_len','3'),('min_user_age','1'),('mod_able_sent_absent','0'),('news_base_url',''),('news_index_file','portal.php'),('news_item_num','10'),('news_item_trim','0'),('news_path','images/news'),('news_rss_cat',''),('news_rss_desc',''),('news_rss_image',''),('news_rss_image_desc',''),('news_rss_item_count','15'),('news_rss_language','en_us'),('news_rss_show_abstract','1'),('news_rss_ttl','60'),('news_title_trim','0'),('override_user_style','1'),('password_not_login','0'),('posts_per_page','4'),('privmsg_disable','0'),('prune_enable','0'),('prune_shouts','0'),('rand_seed','e62c7d6014c15ae45d905cc943502c01'),('record_online_date','1333194225'),('record_online_users','7'),('registration_closed',''),('registration_status','0'),('report_forum','0'),('require_activation','0'),('script_path','/forum/'),('search_flood_interval','1'),('search_min_chars','3'),('sendmail_fix','1'),('server_name','1chna.ru'),('server_port','80'),('session_length','3600'),('sitename','Ð¡Ñ‹Ñ€Ñ‹Ðµ ÐšÑƒÐ»Ð°Ñ‡ÐºÐ¸'),('site_desc','ÐŸÑ€Ð¸ÑÑ‚Ð½Ñ‹Ð¹ Ñ„Ð¾Ñ€ÑƒÐ¼'),('smilies_path','images/smiles'),('smtp_delivery','0'),('smtp_host',''),('smtp_password','NOTUSED'),('smtp_username','Hidden'),('split_announce','1'),('split_announce_over','0'),('split_cat','1'),('split_cat_over','0'),('split_global_announce','1'),('split_global_announce_over','0'),('split_news','1'),('split_news_over','0'),('split_sticky','1'),('split_sticky_over','0'),('split_topic_split','0'),('split_topic_split_over','0'),('sub_forum','1'),('sub_forum_over','0'),('sub_level_links','2'),('sub_level_links_over','0'),('topics_per_page','50'),('users_allow_absence','1'),('use_ajax_edit','1'),('use_ajax_edit_over','0'),('use_ajax_preview','1'),('use_ajax_preview_over','0'),('version','.0.22'),('xs_add_comments','0'),('xs_auto_compile','1'),('xs_auto_recompile','1'),('xs_check_switches','1'),('xs_def_template','subSilver'),('xs_downloads_count','0'),('xs_downloads_default','0'),('xs_ftp_host',''),('xs_ftp_login',''),('xs_ftp_path',''),('xs_php','php'),('xs_shownav','1'),('xs_template_time','1411917560'),('xs_use_cache','1'),('xs_version','8'),('xs_warn_includes','1');
/*!40000 ALTER TABLE `phpbb_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_confirm`
--

DROP TABLE IF EXISTS `phpbb_confirm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_confirm` (
  `confirm_id` char(32) NOT NULL,
  `session_id` char(32) NOT NULL,
  `code` char(6) NOT NULL,
  PRIMARY KEY (`session_id`,`confirm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_confirm`
--

LOCK TABLES `phpbb_confirm` WRITE;
/*!40000 ALTER TABLE `phpbb_confirm` DISABLE KEYS */;
INSERT INTO `phpbb_confirm` (`confirm_id`, `session_id`, `code`) VALUES ('096090a2f84eecc6a22dcf4989c49ab2','c26fc3d0b5582e50eab1bddd102ed4b0','56ZBXF');
/*!40000 ALTER TABLE `phpbb_confirm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_ct_filter`
--

DROP TABLE IF EXISTS `phpbb_ct_filter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_ct_filter` (
  `id` mediumint(8) unsigned NOT NULL,
  `list` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_ct_filter`
--

LOCK TABLES `phpbb_ct_filter` WRITE;
/*!40000 ALTER TABLE `phpbb_ct_filter` DISABLE KEYS */;
INSERT INTO `phpbb_ct_filter` (`id`, `list`) VALUES (1,'WebStripper'),(2,'NetMechanic'),(3,'CherryPicker'),(4,'EmailCollector'),(5,'EmailSiphon'),(6,'WebBandit'),(7,'EmailWolf'),(8,'ExtractorPro'),(9,'SiteSnagger'),(10,'CheeseBot'),(11,'ia_archiver/1.6'),(12,'Website Quester'),(13,'WebZip'),(14,'moget/2.1'),(15,'WebSauger'),(16,'WebCopier'),(17,'WWW-Collector-E'),(18,'InfoNaviRobot'),(19,'Harvest/1.5'),(20,'Bullseye/1.0'),(21,'lwp-trivial/1.34'),(22,'lwp-trivial'),(23,'LinkWalker'),(24,'LinkextractorPro'),(25,'Offline Explorer'),(26,'BlowFish/1.0'),(27,'WebEnhancer'),(28,'TightTwatBot'),(29,'LinkScan/8.1a Unix'),(30,'WebDownloader'),(31,'lwp-trivial/1.33'),(32,'lwp-trivial/1.38'),(33,'BruteForce'),(34,'lwp');
/*!40000 ALTER TABLE `phpbb_ct_filter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_ct_viskey`
--

DROP TABLE IF EXISTS `phpbb_ct_viskey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_ct_viskey` (
  `confirm_id` char(32) NOT NULL,
  `session_id` char(32) NOT NULL,
  `code` char(6) NOT NULL,
  PRIMARY KEY (`session_id`,`confirm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_ct_viskey`
--

LOCK TABLES `phpbb_ct_viskey` WRITE;
/*!40000 ALTER TABLE `phpbb_ct_viskey` DISABLE KEYS */;
INSERT INTO `phpbb_ct_viskey` (`confirm_id`, `session_id`, `code`) VALUES ('0293ffa4fa52d50b4969f0b4713a48a0','41f5ffba8d77fd5fd5ce2a6d68431e27','827A87');
/*!40000 ALTER TABLE `phpbb_ct_viskey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_ctrack`
--

DROP TABLE IF EXISTS `phpbb_ctrack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_ctrack` (
  `name` varchar(50) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_ctrack`
--

LOCK TABLES `phpbb_ctrack` WRITE;
/*!40000 ALTER TABLE `phpbb_ctrack` DISABLE KEYS */;
INSERT INTO `phpbb_ctrack` (`name`, `value`) VALUES ('lastreg','1371712632'),('version','4.1.7'),('footer','3'),('floodlog','100'),('proxylog','100'),('filter','1'),('floodprot','1'),('maxsearch','4'),('searchtime','16'),('regblock','1'),('regtime','10'),('autoban','1'),('posttimespan','200'),('postintime','10'),('lastreg_ip','178.216.74.148'),('mailfeature','1'),('pwreset','1'),('loginfeature','1');
/*!40000 ALTER TABLE `phpbb_ctrack` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_disallow`
--

DROP TABLE IF EXISTS `phpbb_disallow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_disallow` (
  `disallow_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `disallow_username` varchar(25) NOT NULL,
  PRIMARY KEY (`disallow_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_disallow`
--

LOCK TABLES `phpbb_disallow` WRITE;
/*!40000 ALTER TABLE `phpbb_disallow` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_disallow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_extension_groups`
--

DROP TABLE IF EXISTS `phpbb_extension_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_extension_groups` (
  `group_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `group_name` char(20) NOT NULL,
  `cat_id` tinyint(2) NOT NULL,
  `allow_group` tinyint(1) NOT NULL,
  `download_mode` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `upload_icon` varchar(100) DEFAULT NULL,
  `max_filesize` int(20) NOT NULL,
  `forum_permissions` varchar(255) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_extension_groups`
--

LOCK TABLES `phpbb_extension_groups` WRITE;
/*!40000 ALTER TABLE `phpbb_extension_groups` DISABLE KEYS */;
INSERT INTO `phpbb_extension_groups` (`group_id`, `group_name`, `cat_id`, `allow_group`, `download_mode`, `upload_icon`, `max_filesize`, `forum_permissions`) VALUES (1,'Images',1,1,1,'',0,''),(2,'Archives',0,1,1,'',0,''),(3,'Plain Text',0,0,1,'',0,''),(4,'Documents',0,0,1,'',0,''),(5,'Real Media',0,0,2,'',0,''),(6,'Streams',2,0,1,'',0,''),(7,'Flash Files',3,0,1,'',0,'');
/*!40000 ALTER TABLE `phpbb_extension_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_extensions`
--

DROP TABLE IF EXISTS `phpbb_extensions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_extensions` (
  `ext_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL,
  `extension` varchar(100) NOT NULL,
  `comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ext_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_extensions`
--

LOCK TABLES `phpbb_extensions` WRITE;
/*!40000 ALTER TABLE `phpbb_extensions` DISABLE KEYS */;
INSERT INTO `phpbb_extensions` (`ext_id`, `group_id`, `extension`, `comment`) VALUES (1,1,'gif',''),(2,1,'png',''),(3,1,'jpeg',''),(4,1,'jpg',''),(5,1,'tif',''),(6,1,'tga',''),(7,2,'gtar',''),(8,2,'gz',''),(9,2,'tar',''),(10,2,'zip',''),(11,2,'rar',''),(12,2,'ace',''),(13,3,'txt',''),(14,3,'c',''),(15,3,'h',''),(16,3,'cpp',''),(17,3,'hpp',''),(18,3,'diz',''),(19,4,'xls',''),(20,4,'doc',''),(21,4,'dot',''),(22,4,'pdf',''),(23,4,'ai',''),(24,4,'ps',''),(25,4,'ppt',''),(26,5,'rm',''),(27,6,'wma',''),(28,7,'swf','');
/*!40000 ALTER TABLE `phpbb_extensions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_flags`
--

DROP TABLE IF EXISTS `phpbb_flags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_flags` (
  `flag_id` int(10) NOT NULL AUTO_INCREMENT,
  `flag_name` varchar(25) DEFAULT NULL,
  `flag_image` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`flag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_flags`
--

LOCK TABLES `phpbb_flags` WRITE;
/*!40000 ALTER TABLE `phpbb_flags` DISABLE KEYS */;
INSERT INTO `phpbb_flags` (`flag_id`, `flag_name`, `flag_image`) VALUES (1,'afghanistan','afghanistan.gif'),(2,'albania','albania.gif'),(3,'algeria','algeria.gif'),(4,'andorra','andorra.gif'),(5,'angola','angola.gif'),(6,'antigua and barbuda','antiguabarbuda.gif'),(7,'argentina','argentina.gif'),(8,'armenia','armenia.gif'),(9,'australia','australia.gif'),(10,'austria','austria.gif'),(11,'azerbaijan','azerbaijan.gif'),(12,'bahamas','bahamas.gif'),(13,'bahrain','bahrain.gif'),(14,'bangladesh','bangladesh.gif'),(15,'barbados','barbados.gif'),(16,'belarus','belarus.gif'),(17,'belgium','belgium.gif'),(18,'belize','belize.gif'),(19,'benin','benin.gif'),(20,'bhutan','bhutan.gif'),(21,'bolivia','bolivia.gif'),(22,'bosnia herzegovina','bosnia_herzegovina.gif'),(23,'botswana','botswana.gif'),(24,'brazil','brazil.gif'),(25,'brunei','brunei.gif'),(26,'bulgaria','bulgaria.gif'),(27,'burkinafaso','burkinafaso.gif'),(28,'burma','burma.gif'),(29,'burundi','burundi.gif'),(30,'cambodia','cambodia.gif'),(31,'cameroon','cameroon.gif'),(32,'canada','canada.gif'),(33,'central african rep','centralafricanrep.gif'),(34,'chad','chad.gif'),(35,'chile','chile.gif'),(36,'china','china.gif'),(37,'columbia','columbia.gif'),(38,'comoros','comoros.gif'),(39,'congo','congo.gif'),(40,'costarica','costarica.gif'),(41,'croatia','croatia.gif'),(42,'cuba','cuba.gif'),(43,'cyprus','cyprus.gif'),(44,'czech republic','czechrepublic.gif'),(45,'demrepcongo','demrepcongo.gif'),(46,'denmark','denmark.gif'),(47,'djibouti','djibouti.gif'),(48,'dominica','dominica.gif'),(49,'dominican rep','dominicanrep.gif'),(50,'ecuador','ecuador.gif'),(51,'egypt','egypt.gif'),(52,'elsalvador','elsalvador.gif'),(53,'eq guinea','eq_guinea.gif'),(54,'eritrea','eritrea.gif'),(55,'estonia','estonia.gif'),(56,'ethiopia','ethiopia.gif'),(57,'fiji','fiji.gif'),(58,'finland','finland.gif'),(59,'france','france.gif'),(60,'gabon','gabon.gif'),(61,'gambia','gambia.gif'),(62,'georgia','georgia.gif'),(63,'germany','germany.gif'),(64,'ghana','ghana.gif'),(65,'greece','greece.gif'),(66,'grenada','grenada.gif'),(67,'grenadines','grenadines.gif'),(68,'guatemala','guatemala.gif'),(69,'guinea','guinea.gif'),(70,'guineabissau','guineabissau.gif'),(71,'guyana','guyana.gif'),(72,'haiti','haiti.gif'),(73,'honduras','honduras.gif'),(74,'hong kong','hong_kong.gif'),(75,'hungary','hungary.gif'),(76,'iceland','iceland.gif'),(77,'india','india.gif'),(78,'indonesia','indonesia.gif'),(79,'iran','iran.gif'),(80,'iraq','iraq.gif'),(81,'ireland','ireland.gif'),(82,'israel','israel.gif'),(83,'italy','italy.gif'),(84,'ivory coast','ivorycoast.gif'),(85,'jamaica','jamaica.gif'),(86,'japan','japan.gif'),(87,'jordan','jordan.gif'),(88,'kazakhstan','kazakhstan.gif'),(89,'kenya','kenya.gif'),(90,'kiribati','kiribati.gif'),(91,'kuwait','kuwait.gif'),(92,'kyrgyzstan','kyrgyzstan.gif'),(93,'laos','laos.gif'),(94,'latvia','latvia.gif'),(95,'lebanon','lebanon.gif'),(96,'liberia','liberia.gif'),(97,'libya','libya.gif'),(98,'liechtenstein','liechtenstein.gif'),(99,'lithuania','lithuania.gif'),(100,'luxembourg','luxembourg.gif'),(101,'macadonia','macadonia.gif'),(102,'macau','macau.gif'),(103,'madagascar','madagascar.gif'),(104,'malawi','malawi.gif'),(105,'malaysia','malaysia.gif'),(106,'maldives','maldives.gif'),(107,'mali','mali.gif'),(108,'malta','malta.gif'),(109,'mauritania','mauritania.gif'),(110,'mauritius','mauritius.gif'),(111,'mexico','mexico.gif'),(112,'micronesia','micronesia.gif'),(113,'moldova','moldova.gif'),(114,'monaco','monaco.gif'),(115,'mongolia','mongolia.gif'),(116,'morocco','morocco.gif'),(117,'mozambique','mozambique.gif'),(118,'namibia','namibia.gif'),(119,'nauru','nauru.gif'),(120,'nepal','nepal.gif'),(121,'neth antilles','neth_antilles.gif'),(122,'netherlands','netherlands.gif'),(123,'new zealand','newzealand.gif'),(124,'nicaragua','nicaragua.gif'),(125,'niger','niger.gif'),(126,'nigeria','nigeria.gif'),(127,'north korea','north_korea.gif'),(128,'norway','norway.gif'),(129,'oman','oman.gif'),(130,'pakistan','pakistan.gif'),(131,'panama','panama.gif'),(132,'papua newguinea','papuanewguinea.gif'),(133,'paraguay','paraguay.gif'),(134,'peru','peru.gif'),(135,'philippines','philippines.gif'),(136,'poland','poland.gif'),(137,'portugal','portugal.gif'),(138,'puertorico','puertorico.gif'),(139,'qatar','qatar.gif'),(140,'rawanda','rawanda.gif'),(141,'romania','romania.gif'),(142,'russia','russia.gif'),(143,'sao tome','sao_tome.gif'),(144,'saudiarabia','saudiarabia.gif'),(145,'senegal','senegal.gif'),(146,'serbia','serbia.gif'),(147,'seychelles','seychelles.gif'),(148,'sierraleone','sierraleone.gif'),(149,'singapore','singapore.gif'),(150,'slovakia','slovakia.gif'),(151,'slovenia','slovenia.gif'),(152,'solomon islands','solomon_islands.gif'),(153,'somalia','somalia.gif'),(154,'south_korea','south_korea.gif'),(155,'south africa','southafrica.gif'),(156,'spain','spain.gif'),(157,'srilanka','srilanka.gif'),(158,'stkitts nevis','stkitts_nevis.gif'),(159,'stlucia','stlucia.gif'),(160,'sudan','sudan.gif'),(161,'suriname','suriname.gif'),(162,'sweden','sweden.gif'),(163,'switzerland','switzerland.gif'),(164,'syria','syria.gif'),(165,'taiwan','taiwan.gif'),(166,'tajikistan','tajikistan.gif'),(167,'tanzania','tanzania.gif'),(168,'thailand','thailand.gif'),(169,'togo','togo.gif'),(170,'tonga','tonga.gif'),(171,'trinidad and tobago','trinidadandtobago.gif'),(172,'tunisia','tunisia.gif'),(173,'turkey','turkey.gif'),(174,'turkmenistan','turkmenistan.gif'),(175,'tuvala','tuvala.gif'),(176,'uae','uae.gif'),(177,'uganda','uganda.gif'),(178,'uk','uk.gif'),(179,'ukraine','ukraine.gif'),(180,'uruguay','uruguay.gif'),(181,'usa','usa.gif'),(182,'ussr','ussr.gif'),(183,'uzbekistan','uzbekistan.gif'),(184,'vanuatu','vanuatu.gif'),(185,'venezuela','venezuela.gif'),(186,'vietnam','vietnam.gif'),(187,'western samoa','western_samoa.gif'),(188,'yemen','yemen.gif'),(189,'yugoslavia','yugoslavia.gif'),(190,'zaire','zaire.gif'),(191,'zambia','zambia.gif'),(192,'zimbabwe','zimbabwe.gif');
/*!40000 ALTER TABLE `phpbb_flags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_forbidden_extensions`
--

DROP TABLE IF EXISTS `phpbb_forbidden_extensions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_forbidden_extensions` (
  `ext_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `extension` varchar(100) NOT NULL,
  PRIMARY KEY (`ext_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_forbidden_extensions`
--

LOCK TABLES `phpbb_forbidden_extensions` WRITE;
/*!40000 ALTER TABLE `phpbb_forbidden_extensions` DISABLE KEYS */;
INSERT INTO `phpbb_forbidden_extensions` (`ext_id`, `extension`) VALUES (1,'php'),(2,'php3'),(3,'php4'),(4,'phtml'),(5,'pl'),(6,'asp'),(7,'cgi');
/*!40000 ALTER TABLE `phpbb_forbidden_extensions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_forum_prune`
--

DROP TABLE IF EXISTS `phpbb_forum_prune`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_forum_prune` (
  `prune_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` smallint(5) unsigned NOT NULL,
  `prune_days` smallint(5) unsigned NOT NULL,
  `prune_freq` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`prune_id`),
  KEY `forum_id` (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_forum_prune`
--

LOCK TABLES `phpbb_forum_prune` WRITE;
/*!40000 ALTER TABLE `phpbb_forum_prune` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_forum_prune` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_forums`
--

DROP TABLE IF EXISTS `phpbb_forums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_forums` (
  `forum_id` smallint(5) unsigned NOT NULL,
  `cat_id` mediumint(8) unsigned NOT NULL,
  `forum_name` varchar(150) DEFAULT NULL,
  `forum_desc` text,
  `forum_status` tinyint(4) NOT NULL,
  `forum_order` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `forum_posts` mediumint(8) unsigned NOT NULL,
  `forum_topics` mediumint(8) unsigned NOT NULL,
  `forum_last_post_id` mediumint(8) unsigned NOT NULL,
  `prune_next` int(11) DEFAULT NULL,
  `prune_enable` tinyint(1) NOT NULL,
  `auth_view` tinyint(2) NOT NULL,
  `auth_read` tinyint(2) NOT NULL,
  `auth_post` tinyint(2) NOT NULL,
  `auth_reply` tinyint(2) NOT NULL,
  `auth_edit` tinyint(2) NOT NULL,
  `auth_delete` tinyint(2) NOT NULL,
  `auth_sticky` tinyint(2) NOT NULL,
  `auth_announce` tinyint(2) NOT NULL,
  `auth_global_announce` tinyint(2) NOT NULL,
  `auth_vote` tinyint(2) NOT NULL,
  `auth_pollcreate` tinyint(2) NOT NULL,
  `auth_attachments` tinyint(2) NOT NULL,
  `forum_link` varchar(255) DEFAULT NULL,
  `forum_link_internal` tinyint(1) NOT NULL,
  `forum_link_hit_count` tinyint(1) NOT NULL,
  `forum_link_hit` bigint(20) unsigned NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `main_type` char(1) DEFAULT NULL,
  `auth_download` tinyint(2) NOT NULL,
  `auth_cal` tinyint(2) NOT NULL,
  `auth_news` tinyint(2) NOT NULL DEFAULT '2',
  `auth_ban` tinyint(2) NOT NULL DEFAULT '3',
  `auth_greencard` tinyint(2) NOT NULL DEFAULT '5',
  `auth_bluecard` tinyint(2) NOT NULL DEFAULT '1',
  `count_posts` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`forum_id`),
  KEY `forums_order` (`forum_order`),
  KEY `cat_id` (`cat_id`),
  KEY `forum_last_post_id` (`forum_last_post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_forums`
--

LOCK TABLES `phpbb_forums` WRITE;
/*!40000 ALTER TABLE `phpbb_forums` DISABLE KEYS */;
INSERT INTO `phpbb_forums` (`forum_id`, `cat_id`, `forum_name`, `forum_desc`, `forum_status`, `forum_order`, `forum_posts`, `forum_topics`, `forum_last_post_id`, `prune_next`, `prune_enable`, `auth_view`, `auth_read`, `auth_post`, `auth_reply`, `auth_edit`, `auth_delete`, `auth_sticky`, `auth_announce`, `auth_global_announce`, `auth_vote`, `auth_pollcreate`, `auth_attachments`, `forum_link`, `forum_link_internal`, `forum_link_hit_count`, `forum_link_hit`, `icon`, `main_type`, `auth_download`, `auth_cal`, `auth_news`, `auth_ban`, `auth_greencard`, `auth_bluecard`, `count_posts`) VALUES (2,2,'Ð¢ÐµÑ…Ð½Ð¸Ñ‡ÐµÑÐºÐ¸Ðµ Ð²Ð¾Ð¿Ñ€Ð¾ÑÑ‹','',0,30,8,2,82,NULL,0,0,0,1,1,1,1,3,3,0,1,1,1,'',0,0,0,'','c',1,0,2,3,5,1,'1'),(3,2,'Ð­Ñ€Ð¾Ñ‚Ð¸ÐºÐ°','',0,20,30,3,84,NULL,0,0,0,1,1,0,0,3,3,0,1,1,1,'',0,0,0,'','c',0,0,0,3,5,1,'1'),(4,2,'Ð‘Ð¾Ð»Ñ‚Ð°Ð»ÐºÐ°','',0,40,41,9,93,NULL,0,0,0,1,1,1,1,3,3,0,1,1,1,'',0,0,0,'','c',1,0,2,3,5,1,'1'),(5,0,'ÐŸÐ•Ð§ÐÐ›Ð¬ Ð’ÐžÐ Ð£Ð•Ð¢!','Ð’}{o&#595; &#8869;0&#923;ÑŒ|<o FOR Ð¡&#596;Ð’0nÐœ',0,50,4,1,94,NULL,0,0,0,1,1,1,1,3,3,0,1,1,1,'',0,0,0,'','c',1,0,2,3,5,1,'1');
/*!40000 ALTER TABLE `phpbb_forums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_groups`
--

DROP TABLE IF EXISTS `phpbb_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_groups` (
  `group_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `group_type` tinyint(4) NOT NULL DEFAULT '1',
  `group_name` varchar(40) NOT NULL,
  `group_description` varchar(255) NOT NULL,
  `group_moderator` mediumint(8) NOT NULL,
  `group_single_user` tinyint(1) NOT NULL DEFAULT '1',
  `group_color_group` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`group_id`),
  KEY `group_single_user` (`group_single_user`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_groups`
--

LOCK TABLES `phpbb_groups` WRITE;
/*!40000 ALTER TABLE `phpbb_groups` DISABLE KEYS */;
INSERT INTO `phpbb_groups` (`group_id`, `group_type`, `group_name`, `group_description`, `group_moderator`, `group_single_user`, `group_color_group`) VALUES (1,1,'Anonymous','Personal User',0,1,0),(2,1,'Admin','Personal User',0,1,0),(3,1,'','Personal User',0,1,0),(4,1,'','Personal User',0,1,0),(5,1,'','Personal User',0,1,0),(6,1,'','Personal User',0,1,0),(7,1,'','Personal User',0,1,0),(8,1,'','Personal User',0,1,0),(9,1,'','Personal User',0,1,0),(10,1,'','Personal User',0,1,0),(11,1,'','Personal User',0,1,0),(12,1,'','Personal User',0,1,0),(13,1,'','Personal User',0,1,0),(14,1,'','Personal User',0,1,0),(15,1,'','Personal User',0,1,0),(16,1,'','Personal User',0,1,0),(17,1,'','Personal User',0,1,0),(18,1,'','Personal User',0,1,0),(19,1,'','Personal User',0,1,0),(20,1,'','Personal User',0,1,0),(21,1,'','Personal User',0,1,0),(22,1,'','Personal User',0,1,0),(23,1,'','Personal User',0,1,0),(24,1,'','Personal User',0,1,0),(25,1,'','Personal User',0,1,0),(26,1,'','Personal User',0,1,0),(27,1,'','Personal User',0,1,0),(28,1,'','Personal User',0,1,0),(29,1,'','Personal User',0,1,0),(30,1,'','Personal User',0,1,0),(31,1,'','Personal User',0,1,0),(32,1,'','Personal User',0,1,0),(33,1,'','Personal User',0,1,0),(34,1,'','Personal User',0,1,0),(35,1,'','Personal User',0,1,0),(36,1,'','Personal User',0,1,0),(37,1,'','Personal User',0,1,0);
/*!40000 ALTER TABLE `phpbb_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_hacks_list`
--

DROP TABLE IF EXISTS `phpbb_hacks_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_hacks_list` (
  `hack_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `hack_add_date` int(10) unsigned NOT NULL,
  `hack_name` varchar(255) NOT NULL,
  `hack_desc` varchar(255) NOT NULL,
  `hack_author` varchar(255) NOT NULL,
  `hack_author_email` varchar(255) NOT NULL,
  `hack_author_website` tinytext NOT NULL,
  `hack_version` varchar(32) NOT NULL,
  `hack_hide` enum('Yes','No') NOT NULL DEFAULT 'No',
  `hack_download_url` text NOT NULL,
  `hack_file` varchar(255) NOT NULL,
  `hack_file_mtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`hack_id`),
  UNIQUE KEY `hack_name` (`hack_name`),
  KEY `hack_hide` (`hack_hide`),
  KEY `hack_file` (`hack_file`)
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_hacks_list`
--

LOCK TABLES `phpbb_hacks_list` WRITE;
/*!40000 ALTER TABLE `phpbb_hacks_list` DISABLE KEYS */;
INSERT INTO `phpbb_hacks_list` (`hack_id`, `hack_add_date`, `hack_name`, `hack_desc`, `hack_author`, `hack_author_email`, `hack_author_website`, `hack_version`, `hack_hide`, `hack_download_url`, `hack_file`, `hack_file_mtime`) VALUES (3,0,'Admin Account Actions','Displays all users which expect an account activation on an extra site inside the admin panel (admin activation and user activation). You can activate or delete them.','Acid','','','1.2.1','No','','',0),(6,0,'Supercharged Album Pack 1','A series of modification for Album version 2 by Smartor ( http://smartor.is-root.com )','Volodymyr (CLowN) Skoryk','','','1.5.1','No','','',0),(7,0,'Photo Album Addon v2 for phpBB2','This is a phpBB-based photo album/gallery management system.','Smartor','smartor_xp@hotmail.com','http://smartor.is-root.com','','No','','',0),(8,0,'Align text BBcode Mod','Adds a text alignment bbcode tag to your forum','davidls','davidls14@yahoo.com.au','http://www27.brinkster.com/bb2c','2.0.6','No','','',0),(9,0,'Anti Robotic Register Flood','This will add a Random-graphical-text Vadiation field in Registration form to protect your phpBB from being flooded of robotic-member-registration (like many free webhost signup form...)','Smartor','smartor_xp@hotmail.com','http://smartor.is-root.com','1.1.4','No','','',0),(12,0,'File Attachment Mod v2','This Mod adds the ability to attach files in phpBB2.','Acyd Burn','','http://www.opentools.de','2.4.3','No','','',0),(13,0,'BBCode Buttons Organizer','Allows for neater display of additional quick BBCode buttons.','Nuttzy','nospam@blizzhackers.com','http://www.blizzhackers.com','1.2.1','No','','',0),(14,0,'Birthday Mod','This mod will add a birthday field into your user\\\'s profile and make users age viewable to others when viewing posts.','Niels','ncr@db9.dk','http://mods.db9.dk','1.5.4','No','','',0),(15,0,'Birthday ADD-ON Chinese zodiac\\\'s in viewtopic','if the user have filled a birthday date, a chinese zodiac image will be displayed in the viewtopic. this is a ADD-ON and will require Birthday mod to be installed before it will work','Niels','ncr@db9.dk','http://mods.db9.dk','1.0.0','No','','',0),(16,0,'Birthday ADD-ON Chinese zodiac','if the user have filled a birthday date, a chinese zodiac image will be displayed in the users profile. this is a ADD-ON and will require Birthday mod to be installed before it will work','Niels','ncr@db9.dk','http://mods.db9.dk','1.0.1','No','','',0),(17,0,'Birthday ADD-ON zodiac\\\'s','if the user have filled a birthday date, a zodiac image will be displayed in the users profile/beside users posts. this is a ADD-ON and will require Birthday mod to be installed before it will work','Niels','ncr@db9.dk','http://mods.db9.dk','1.0.5','No','','',0),(18,0,'Bookmarks Mod','Keeps an internal list of bookmarks set by the user','PhilippK','phpBB2004@kordowich.net','http://phpbb.kordowich.net/','1.1.1a','No','','',0),(19,0,'Slash News Mod','Allows you to assign a news category to any new topic. The topic can then be displayed as news with a category graphic like Slashdot','CodeMonkeyX','nickyoungso@yahoo.com','http://www.codemonkeyx.net','1.0.1','No','','',0),(20,0,'Color Groups Mod','This mod will replace the current name colorization with a group system.  You may define your group name, group color, and group members','Nivisec','support@nivisec.com','http://www.nivisec.com','1.2.0','No','','',0),(21,0,'Complete banner Mod','This mod makes it posible to add banners to your phpbb2 pages, by default banners are placed in top/botton but you may place the tags, inside any template file','Niels','ncr@db9.dk','http://mods.db9.dk','1.3.5','No','','',0),(22,0,'Country Flags','This mod allows your registered board members to select the flag of their country.  Their flag will then display thoughout the phpBB system','Nuttzy99','pktoolkit@blizzhackers.com','http://www.blizzhackers.com','2.2.0','No','','',0),(23,0,'ezPortal Admin for phpBB2','This mod will add a small administration menu for the ezPortal from Smartor','Marcus Thiel','thundercat@die-pretorianer.de','http://www.die-pretorianer.de','1.0.5','No','','',0),(24,0,'ezPortal','This Mod explains you how to create a portal for phpBB2 as simple as possible. This MOD is not exactly a full functional portal system (content management system) but it looks like a portal. You should customize/modify/improve it to fit your fantasy ;) It','Smartor','smartor_xp@hotmail.com','http://smartor.is-root.com','2.1.8','No','','',0),(28,0,'Gender Mod','This mod will add a Gender field into users\\\' profile, and display \\\"Gender: |image|\\\" in posts too','Niels','ncr@db9.dk','http://mods.db9.dk','1.2.6','No','','',0),(30,0,'Glow and Shadow effects BBcode Mod','adds a glow and shadow bbcode tags to your forum','davidls','davidls14@yahoo.com.au','http://www27.brinkster.com/bb2c','2.0.6','No','','',0),(32,0,'Junior Admin Mod','This will allow you to define any and all users you\\\'d like to have access to whatever admin modules you\\\'d like','Nivisec','support@nivisec.com','http://www.nivisec.com','2.0.5','No','','',0),(33,0,'Last visit Mod','This mod will register when the user last logged in, allong with the info about how many users have visited the board','Niels','ncr@db9.dk','http://mods.db9.dk','1.2.8','No','','',0),(34,0,'Announces Suite','This mod allows you to display the announces from the forum on the index page, and above the forum pages for the announce coming from forums of the same categories. It adds also a duration to each announcement, and global announcement','Ptirhiik','admin@rpgnet-fr.com','http://rpgnet.clanmckeen.com','3.0.2','No','','',0),(35,0,'Categories hierarchy Mod','This mod allows to attach a categorie to a higher level categorie, keeping all the forum visible on the index page (vBulletin-like view), or have a sub-forum view.','Ptirhiik','ptirhiik@clanmckeen.com','http://rpgnet.clanmckeen.com','2.0.4','No','','',0),(36,0,'Post Icons Mod','This mod will allow to add an icon in front of each topic title. This part is common to all board setup.','Ptirhiik','ptirhiik@clanmckeen.com','http://rpgnet.clanmckeen.com','1.0.1','No','','',0),(38,0,'Ranks summarize','This mod displays all the ranks available on your board','Ptirhiik','admin@rpgnet-fr.com','http://www.rpgnet-fr.com','1.0.4','No','','',0),(40,0,'Split topic type','This mod splits the topic per type in the viewform display','Ptirhiik','admin@rpgnet-fr.com','http://rpgnet.clanmckeen.com','2.0.1','No','','',0),(41,0,'Topic calendar Mod','This mod adds a calendar to your board, working with natural phpBB auth.','Ptirhiik','ptirhiik@clanmckeen.com','http://rpgnet.clanmckeen.com','1.0.1','No','','',0),(42,0,'Multiple BBCode MOD','Allows you to install BBCode MODs that add quick BBCode buttons in post edits.  Without this MOD, there is no standard way of installing BBCode MODs.\n','Nuttzy99','nospam@blizzhackers.com','http://www.blizzhackers.com','1.2.1','No','','',0),(43,0,'Online/Offline Indicator','This MOD outputs graphically a user\\\'s online status in Topics and the Memberlist','romans1423','romans1423@hotmail.com','http://www.beckman-ministries.com','1.3.2','No','','',0),(44,0,'Download Mod pafiledb with MX Addon','Integration of pafiledb (Database download manager) with phpbb. pafiledb use header, footer, session, template, and database system of phpbb','mohd + mx-system','mohdalbasri@yahoo.com','http://mohd.vraag-en-antwoord.nl/main/','0.0.9d','No','','',0),(46,0,'Printtopic Mod','Generates printable Versions of Topics','Unknown','','','','No','','',0),(48,0,'Advanced Quick Reply Mod','Adds a Quick Reply Box to the Topic View','Unknown','','','','No','','',0),(49,0,'Fully integrated shoutbox','A fully phpBB2 enabled shoutbox witch support: database abstration layer, timezones, languages, templates, smilies, BBcode and censored words','Niels','ncr@db9.dk','http://mods.db9.dk','1.1.5','No','','',0),(50,0,'Smartor Album Add-On: Random or Recent Photo','Display a random or recent photo on your forum main page or chosen from a category only.','SeekIdeas','cfsilent@yahoo.com','http://www.seekideas.com','1.0.0','No','','',0),(52,0,'Smilie Creator Mod','This Mod adds a BBCode [schild=1]text[/schild] to your phpBB2 whick allows Users to post Smilies with own Text in their postings','esperitox','bockelmann@powerforum.de','http://www.powerforum.de','1.0.3','No','','',0),(54,0,'Staff Site Mod','An external site to display who is Mod or Admin on your board. Some additional infos. (see optional part to add other columns)','Acid','','','2.2.0','No','','',0),(56,0,'Tell a Friend Mod','Adds a function to sent Topics as EMail to Friends','Unknown','','','1.0.0','No','','',0),(58,0,'Today At/Yesterday At Mod','Will show Today At if the post was posted today, Will show Yesterday At if the post was posted yesterday','akzhaiyk','phpbb2xp@myrunet.com','http://phpbb2xp.myrunet.com','1.0.0','No','','',0),(59,0,'Who viewed a topic Mod','This MOD will add the ability to logged users to see who has already viewed the topic they\\\'re watching. A small image is added to the viewtopic page for this','Niels','ncr@db9.dk','http://mods.db9.dk','1.0.3','No','','',0),(62,0,'Recent Topics (third version)','Shows recent topics on an extra site (last 24 hour, last week,yesterday, last x days, today)','Acid','','','1.2.0','No','','',0),(66,0,'FI SubSilver Template','Template FI Subsilver Shadow 2.1.1 - Wonderful Template done by Darren Burnhill from http://www.forumimages.com','Darren Burnhill','','http://www.forumimages.com','2.1.1','No','','',0),(68,0,'FI Navslices','Adds Navslices to the Viewtopic View with several Actions like EMail to Friend, Printtopic etc..','Darren Burnhill','','http://www.forumimages.com','','No','','',0),(69,0,'Private Message Info in Browser Status Bar','This MODification adds PM info (you have no new messages, etc..) to the browser status bar.','Darren Burnhill','','http://www.forumimages.com','1.0.0','No','','',0),(71,0,'FI SubSilver CodeExpand','This MODification changes the Code formatting in posts to use resizable DIVs as well as making it so that the code is automatically selected','Darren Burnhill','','http://www.forumimages.com','1.1.0','No','','',0),(76,0,'BBCode Fade Mod','This takes the text between the tags and makes it fade away! Starts off normal then as the line continues until it just disappears','Brewjah','blackhash@rogers.com','http://forums.gotdns.com','1.2.0','No','','',0),(78,0,'BBCode Scroll aka Marquee Mod','Displays scrolling text using the marquee tag','Nuttzy99','pktoolkit@blizzhackers.com','http://www.blizzhackers.com','1.2.1','No','','',0),(81,0,'BBcode Highlight Mod','Adds a highlight bbcode tag to your forum','David Smith','davidls14@yahoo.com.au','http://www27.brinkster.com/bb2c','1.2.0','No','','',0),(83,0,'Macromedia Flash Player BBcode MOD','This mod adds a flash tag to your forum, this version removes the need to use the loop param, and if you want you can remove the width and height params as well','davidls','davidls14@yahoo.com.au','http://www27.brinkster.com/bb2c','2.0.6','No','','',0),(87,0,'BBCode FlipV / FlipH Mod','[flipv]some text[/flipv] and [fliph]some text[/fliph]','Brewjah','blackhash@rogers.com','','1.6.0','No','','',0),(88,0,'Streaming audio BBcode Mod','adds a stream bbcode tag to your forum for the windows media player plugin','David Smith','davidls14@yahoo.com.au','http://www27.brinkster.com/bb2c','2.0.0','No','','',0),(91,0,'Left and Right IMG tags','Adds BBCode to let you align your Pics left and right','Nuttzy','pktoolkit@blizzhackers.com','http://www.blizzhackers.com','1.6.0','No','','',0),(94,0,'PHP Syntax Highlighter BBCode','Highlights PHP specific code when used','Fubonis','php_fubonis@yahoo.com','http://www.fubonis.com','3.0.3','No','','',0),(97,0,'Board Statistics Mod','The Statistics Mod is a complete statistics core for your phpBB 2 board','Acyd Burn, Nivisec','acyd.burn@gmx.de','http://www.opentools.de/board','2.1.5','No','','',0),(98,0,'Admin Hacks List','Adds a list of Hacks/Mods to your phpBB2','Nivisec','support@nivisec.com','http://www.nivisec.com','1.20','No','','',0),(101,0,'Advanced Links Mod','Display links (with logo) on the forum index page','stefan2k1, CRLin','','http://www.phpbb2.de','1.2.2','No','','',0),(104,0,'Full Database Backup Mod','Now you can use the Backup Function in phpBB2 Admin Panel to Backup ALL Tables, even those from your MODs, you make a FULL backup now','Unknown','','','1.0.0','No','','',0),(110,0,'Topic View Page Bottom Link','This MODification adds a link that takes you to the bottom of the topic view pages','Darren Burnhill','','http://www.forumimages.com','1.0.0','No','','',0),(113,0,'Smartors Photo Album Addon 2.x View Topic Link','This MODification adds a link to the members personal photo gallery for Smartors Photo Album Addon version 2.x on the View Topic pages','Darren Burnhill','','http://www.forumimages.com','1.0.0','No','','',0),(114,0,'Smartors Photo Album Addon 2.x Member List Link','This MODification adds a link to the members personal photo gallery for Smartors Photo Album Addon version 2.x on the Member List pages','Darren Burnhill','','http://www.forumimages.com','1.0.0','No','','',0),(115,0,'Smartors Photo Album Addon 2.x View Profile Link','This MODification replaces the link to the members personal photo gallery for Smartors Photo Album Addon version 2.x on the View Profile pages','Darren Burnhill','','http://www.forumimages.com','1.0.0','No','','',0),(118,0,'Google Search BBCode','Allows you put make strings in your post be searched for in Google. ([google]string to search for[/google])','wGEric','eric@egcnetwork.com','http://eric.best-1.biz ','1.1.2','No','','',0),(121,0,'Yellow Card Mod','Also known as \\\"card system\\\" This mod will make 4 colored buttons beside users post (red,yellow,green and blue)','Niels','ncr@db9.dk','http://mods.db9.dk','1.4.11','No','','',0),(122,0,'Protect user account','This mod will prevent hacking on users password, and give the admin the posibilty to specify witch types of passwords are accepted','Niels','ncr@db9.dk','http://mods.db9.dk','1.2.9','No','','',0),(125,0,'BBCode Line-through Mod','Adds BBCode with Line-Through words [s] [/s]','Acid','','','1.0.2','No','','',0),(128,0,'Topic Description Mod','This MOD allow you to add a little description of the topic that you have posted','Morpheus2matrix','morpheus2matrix@caramail.com','http://morpheus.2037.biz','1.0.5','No','','',0),(129,0,'Prune users Mod','Admin plug-in that makes it posible to delete users who are inactive/haven\\\'t posted or like.','Niels','ncr@db9.dk','http://mods.db9.dk','1.4.3','No','','',0),(133,0,'Admin Add Users Mod','Admin can now create a new user, using admin panel user management.','Niels','ncr@db9.dk','http://mods.db9.dk','0.10.4','No','','',0),(140,0,'Count posts Mod','Allows you to select if posts in forum are counted upon creation','Antony Bailey','','','1.0.0','No','','',0),(142,0,'Topic in Who is online','This mod will make it possible to view exactly witch topic a user is looking at. The information is applyed in the Who-is-online list','Niels','','http://mods.db9.dk','1.2.9','No','','',0),(145,0,'Admin Userlist','This MOD will add an userlist into your AdminCP','Smartor','smartor_xp@hotmail.com','http://smartor.is-root.com','1.1.0','No','','',0),(146,0,'Admin Email List','This mod will list all email addresses from your phpbb database, within the admin cp','Jamer','','http://www.jamer.co.uk/scripts/phpbb2','1.0.2','No','','',0),(147,0,'Bottom aligned signature','This mod will align signatures at the bottom of posts','-=ET=-','space_et@tiscali.fr','http://www.golfexpert.net/phpbb','1.0.3','No','','',0),(150,0,'Kontakt Mod','Adds a contact Form to your Forum','Carsten Schaefer','','','1.0.0','No','','',0),(151,0,'Mini Cal','Provides a mini calendar on your forum index page','netclectic','phpbb@netclectic.com','http://www.netclectic.com','2.0.4','No','','',0),(152,0,'Moved Folder Mod','Adds a Moved Folder Image to your Forum','Darren Burnhill','','http://www.forumimages.com','1.0.0','No','http://www.forumimages.com/info/mods/moved_folder.php','',0),(155,0,'Acronym Mod','Provides automatic acroymn additions to posts','CodeMonkeyX','nickyoungso@yahoo.com','http://www.codemonkeyx.net','0.9.5','No','','',0),(156,0,'Disable Board Message','Customize disable board message','Sko22','webmaste@quellicheilpc.com','http://www.quellicheilpc.com','1.0.0','No','','',0),(159,0,'Signature Editor/Preview Deluxe','This mod adds a really cool Signature Editor to your Board, included Preview & Save & BBCodes','Ego2000','','','1.0.0','No','','',0),(162,0,'Absent User Mod','If an user is on holidays, ill or simply not on the board for a longer time, he/she can set to be absent with this mod','Oxpus','webmaster@oxpus.de','http://www.oxpus.de','1.1.7','No','','',0),(163,0,'Album Hierarchy Mod','This mod allows to create multiple sub categories of each (sub) categories in the Photo Album Addon','IdleVoid','idlevoid@slater.dk','','1.1.0','No','','',0),(164,0,'Portal Polls Upgrade','Alters the display and behavior of the Poll Block','vgan','transflux@msn.com','','2.0.0','No','','',0),(165,0,'Modcp Extension','Extend the moderators control panel to include Sticky / Announce / Normal of topics','netclectic','adrian@netclectic.com','http://www.netclectic.com','1.1.3','No','','',0),(166,0,'Simply Merge Threads','This mod allows to merge two topics','Ptirhiik','admin@rpgnet-fr.com','http://www.rpgnet-fr.com','1.0.1','No','','',0),(167,0,'Dates for Humans Mod','Allows users to select their date format from a pre-defined selection of examples','Lars Janssen','lars.dfh@ukmix.net','http://www.ukmix.org/','1.0.1','No','','',0),(168,0,'eXtreme Styles mod 2','This mod is heavily optimized version of phpBB templates system ','CyberAlien','','http://www.phpbbstyles.com/','2.3.1','No','','',0),(169,0,'Google Visit Counter','Adds a google bot visit counter on index ','Dr DLP','','http://www.web-lapin.levillage.org/forum/','1.0.0','No','','',0),(170,0,'Fix message_die for multiple errors MOD','This MOD replaces the message_die was called multiple times message with something more useful','markus_petrux','','http://www.phpmix.com','1.0.3','No','','',0),(171,0,'Search Engine ShortURLs Mod','This MOD replaces the Forum Links from .php to static .html Links','larsneo','','','1.0.0','No','','',0),(172,0,'Cracker Tracker Professional 2nd Ed.','A fully integrated Security System for your Forum. Blocks known Worm Attacks and Floods.','cback','','http://www.cback.de','4.1.7','No','http://www.cback.de','',0),(173,0,'Run stats','Gives stats and details about page time generation, sql requests, indexes used, etc.','Ptirhiik','','http://ptifo.clanmckeen.com','1.0.2','No','','',0),(174,0,'Visual Confirmation for Guests','Adds visual confirmation for guest posts, eliminating spam.','Kanuck','','http://kanuck.net','1.0.1','No','','',0),(175,0,'Custom Profile Fields','Allows administrators to add fields to registration/profile/memberlist/topics, plus admin-only fields','Blankety Blank Man','','http://edos.siteburg.com/phpBB2/index.php','1.1.0','No','','',0),(176,0,'AJAX features','This MOD introduces a lot of features based on the AJAX technology','alcaeus','','http://www.alcaeus.org','1.0.4','No','','',0),(179,0,'Hack Name','This is a short description of your hack.','Your Name','Author email','Author website','Hack Version such as 1.0.0','No','A link for downloading this hack','./hl/nivisec_hack_list_auto_insert.hl',1323520905);
/*!40000 ALTER TABLE `phpbb_hacks_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_jr_admin_users`
--

DROP TABLE IF EXISTS `phpbb_jr_admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_jr_admin_users` (
  `user_id` mediumint(9) NOT NULL,
  `user_jr_admin` longtext NOT NULL,
  `start_date` int(10) unsigned NOT NULL,
  `update_date` int(10) unsigned NOT NULL,
  `admin_notes` text NOT NULL,
  `notes_view` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_jr_admin_users`
--

LOCK TABLES `phpbb_jr_admin_users` WRITE;
/*!40000 ALTER TABLE `phpbb_jr_admin_users` DISABLE KEYS */;
INSERT INTO `phpbb_jr_admin_users` (`user_id`, `user_jr_admin`, `start_date`, `update_date`, `admin_notes`, `notes_view`) VALUES (15,'',1333192310,1333192310,'',0);
/*!40000 ALTER TABLE `phpbb_jr_admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_kb_articles`
--

DROP TABLE IF EXISTS `phpbb_kb_articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_kb_articles` (
  `article_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `article_category_id` mediumint(8) unsigned NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_description` varchar(255) NOT NULL,
  `article_date` varchar(255) NOT NULL,
  `article_author_id` mediumint(8) unsigned NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `bbcode_uid` varchar(10) NOT NULL,
  `article_body` text NOT NULL,
  `article_type` mediumint(8) unsigned NOT NULL,
  `approved` tinyint(1) unsigned NOT NULL,
  `topic_id` mediumint(8) unsigned NOT NULL,
  `views` bigint(8) NOT NULL,
  `article_rating` double(6,4) NOT NULL DEFAULT '0.0000',
  `article_totalvotes` int(255) NOT NULL,
  KEY `article_id` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_kb_articles`
--

LOCK TABLES `phpbb_kb_articles` WRITE;
/*!40000 ALTER TABLE `phpbb_kb_articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_kb_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_kb_categories`
--

DROP TABLE IF EXISTS `phpbb_kb_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_kb_categories` (
  `category_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_details` varchar(255) NOT NULL,
  `number_articles` mediumint(8) unsigned NOT NULL,
  `parent` mediumint(8) unsigned DEFAULT NULL,
  `cat_order` mediumint(8) unsigned NOT NULL,
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_kb_categories`
--

LOCK TABLES `phpbb_kb_categories` WRITE;
/*!40000 ALTER TABLE `phpbb_kb_categories` DISABLE KEYS */;
INSERT INTO `phpbb_kb_categories` (`category_id`, `category_name`, `category_details`, `number_articles`, `parent`, `cat_order`) VALUES (1,'Test Category 1','This is a test category',1,0,10);
/*!40000 ALTER TABLE `phpbb_kb_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_kb_config`
--

DROP TABLE IF EXISTS `phpbb_kb_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_kb_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_kb_config`
--

LOCK TABLES `phpbb_kb_config` WRITE;
/*!40000 ALTER TABLE `phpbb_kb_config` DISABLE KEYS */;
INSERT INTO `phpbb_kb_config` (`config_name`, `config_value`) VALUES ('admin_id','2'),('allow_anon','0'),('allow_anonymos_rating','0'),('allow_edit','1'),('allow_new','1'),('allow_rating','0'),('approve_edit','1'),('approve_new','1'),('art_pagination','5'),('bump_post','1'),('comments','1'),('comments_pagination','5'),('comments_show','1'),('del_topic','1'),('forum_id','1'),('header_banner','1'),('mod_group','0'),('news_sort','Alphabetic'),('news_sort_par','ASC'),('notify','1'),('pt_body','Please check your references and include as much information as you can.'),('pt_header','Article Submission Instructions'),('show_pretext','0'),('stats_list','1'),('votes_check_ip','1'),('votes_check_userid','1');
/*!40000 ALTER TABLE `phpbb_kb_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_kb_results`
--

DROP TABLE IF EXISTS `phpbb_kb_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_kb_results` (
  `search_id` int(11) unsigned NOT NULL,
  `session_id` varchar(32) NOT NULL,
  `search_array` text NOT NULL,
  PRIMARY KEY (`search_id`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_kb_results`
--

LOCK TABLES `phpbb_kb_results` WRITE;
/*!40000 ALTER TABLE `phpbb_kb_results` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_kb_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_kb_types`
--

DROP TABLE IF EXISTS `phpbb_kb_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_kb_types` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_kb_types`
--

LOCK TABLES `phpbb_kb_types` WRITE;
/*!40000 ALTER TABLE `phpbb_kb_types` DISABLE KEYS */;
INSERT INTO `phpbb_kb_types` (`id`, `type`) VALUES (1,'Test Type 1');
/*!40000 ALTER TABLE `phpbb_kb_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_kb_votes`
--

DROP TABLE IF EXISTS `phpbb_kb_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_kb_votes` (
  `votes_ip` varchar(50) NOT NULL,
  `votes_userid` int(50) NOT NULL,
  `votes_file` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_kb_votes`
--

LOCK TABLES `phpbb_kb_votes` WRITE;
/*!40000 ALTER TABLE `phpbb_kb_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_kb_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_kb_wordlist`
--

DROP TABLE IF EXISTS `phpbb_kb_wordlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_kb_wordlist` (
  `word_text` varchar(50) NOT NULL,
  `word_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `word_common` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`word_text`),
  KEY `word_id` (`word_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_kb_wordlist`
--

LOCK TABLES `phpbb_kb_wordlist` WRITE;
/*!40000 ALTER TABLE `phpbb_kb_wordlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_kb_wordlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_kb_wordmatch`
--

DROP TABLE IF EXISTS `phpbb_kb_wordmatch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_kb_wordmatch` (
  `article_id` mediumint(8) unsigned NOT NULL,
  `word_id` mediumint(8) unsigned NOT NULL,
  `title_match` tinyint(1) NOT NULL,
  KEY `post_id` (`article_id`),
  KEY `word_id` (`word_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_kb_wordmatch`
--

LOCK TABLES `phpbb_kb_wordmatch` WRITE;
/*!40000 ALTER TABLE `phpbb_kb_wordmatch` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_kb_wordmatch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_link_categories`
--

DROP TABLE IF EXISTS `phpbb_link_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_link_categories` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(100) NOT NULL,
  `cat_order` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `cat_order` (`cat_order`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_link_categories`
--

LOCK TABLES `phpbb_link_categories` WRITE;
/*!40000 ALTER TABLE `phpbb_link_categories` DISABLE KEYS */;
INSERT INTO `phpbb_link_categories` (`cat_id`, `cat_title`, `cat_order`) VALUES (1,'Arts',1),(2,'Business',2),(3,'Children and Teens',3),(4,'Computers',4),(5,'Games',5),(6,'Health',6),(7,'Home',7),(8,'News',8);
/*!40000 ALTER TABLE `phpbb_link_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_link_config`
--

DROP TABLE IF EXISTS `phpbb_link_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_link_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_link_config`
--

LOCK TABLES `phpbb_link_config` WRITE;
/*!40000 ALTER TABLE `phpbb_link_config` DISABLE KEYS */;
INSERT INTO `phpbb_link_config` (`config_name`, `config_value`) VALUES ('width','88'),('height','31'),('linkspp','10'),('display_interval','6000'),('display_logo_num','10'),('display_links_logo','1'),('email_notify','1'),('pm_notify ','0'),('lock_submit_site','0'),('allow_no_logo','0'),('site_logo','http://1chna.ru/forum/images/links/web_logo88a.gif'),('site_url','http://1chna.ru/forum/');
/*!40000 ALTER TABLE `phpbb_link_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_links`
--

DROP TABLE IF EXISTS `phpbb_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_links` (
  `link_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `link_title` varchar(100) NOT NULL,
  `link_desc` varchar(255) DEFAULT NULL,
  `link_category` mediumint(8) unsigned NOT NULL,
  `link_url` varchar(100) NOT NULL,
  `link_logo_src` varchar(120) DEFAULT NULL,
  `link_joined` int(11) NOT NULL,
  `link_active` tinyint(1) NOT NULL,
  `link_hits` int(10) unsigned NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `user_ip` varchar(8) NOT NULL,
  `last_user_ip` varchar(8) NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_links`
--

LOCK TABLES `phpbb_links` WRITE;
/*!40000 ALTER TABLE `phpbb_links` DISABLE KEYS */;
INSERT INTO `phpbb_links` (`link_id`, `link_title`, `link_desc`, `link_category`, `link_url`, `link_logo_src`, `link_joined`, `link_active`, `link_hits`, `user_id`, `user_ip`, `last_user_ip`) VALUES (1,'phpBB Official Website','Official phpBB Website',4,'http://www.phpbb.com/','images/links/phpBB_88a.gif',1323519532,1,3,2,'','42f94bc2'),(2,'phpbb-tw.net','Unofficial phpBB Chinese Support Centre',4,'http://phpbb-tw.net','images/links/phpbb-tw_logo88a.gif',1323519532,1,4,2,'','42f94bc2'),(3,'phpbb2.de','Your Source for phpBB2 Stuff',4,'http://www.phpbb2.de','images/links/phpbb2_de_logo.gif',1323519532,1,3,2,'','42f94bc2'),(4,'Forumstyles.de','Forumstyles.de',4,'http://www.forumstyles.de','images/links/forumstyles_button.gif',1323519532,1,6,2,'','42f94bc2'),(5,'Oxpus','Oxpus.de',4,'http://www.oxpus.de','images/links/oxpus_banner.gif',1323519532,1,5,2,'','42f94bc2');
/*!40000 ALTER TABLE `phpbb_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_news`
--

DROP TABLE IF EXISTS `phpbb_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_news` (
  `news_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `news_category` varchar(70) NOT NULL,
  `news_image` varchar(70) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_news`
--

LOCK TABLES `phpbb_news` WRITE;
/*!40000 ALTER TABLE `phpbb_news` DISABLE KEYS */;
INSERT INTO `phpbb_news` (`news_id`, `news_category`, `news_image`) VALUES (1,'News','topicnews.gif'),(2,'Announcements','announcements.gif');
/*!40000 ALTER TABLE `phpbb_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_pa_auth`
--

DROP TABLE IF EXISTS `phpbb_pa_auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_pa_auth` (
  `group_id` mediumint(8) NOT NULL,
  `cat_id` smallint(5) unsigned NOT NULL,
  `auth_view` tinyint(1) NOT NULL,
  `auth_read` tinyint(1) NOT NULL,
  `auth_view_file` tinyint(1) NOT NULL,
  `auth_edit_file` tinyint(1) NOT NULL,
  `auth_delete_file` tinyint(1) NOT NULL,
  `auth_upload` tinyint(1) NOT NULL,
  `auth_download` tinyint(1) NOT NULL,
  `auth_rate` tinyint(1) NOT NULL,
  `auth_email` tinyint(1) NOT NULL,
  `auth_view_comment` tinyint(1) NOT NULL,
  `auth_post_comment` tinyint(1) NOT NULL,
  `auth_edit_comment` tinyint(1) NOT NULL,
  `auth_delete_comment` tinyint(1) NOT NULL,
  `auth_mod` tinyint(1) NOT NULL,
  `auth_search` tinyint(1) NOT NULL DEFAULT '1',
  `auth_stats` tinyint(1) NOT NULL DEFAULT '1',
  `auth_toplist` tinyint(1) NOT NULL DEFAULT '1',
  `auth_viewall` tinyint(1) NOT NULL DEFAULT '1',
  KEY `group_id` (`group_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_pa_auth`
--

LOCK TABLES `phpbb_pa_auth` WRITE;
/*!40000 ALTER TABLE `phpbb_pa_auth` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_pa_auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_pa_cat`
--

DROP TABLE IF EXISTS `phpbb_pa_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_pa_cat` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` text,
  `cat_desc` text,
  `cat_parent` int(50) DEFAULT NULL,
  `parents_data` text NOT NULL,
  `cat_order` int(50) DEFAULT NULL,
  `cat_allow_file` tinyint(2) NOT NULL,
  `cat_allow_ratings` tinyint(2) NOT NULL DEFAULT '1',
  `cat_allow_comments` tinyint(2) NOT NULL DEFAULT '1',
  `cat_files` mediumint(8) NOT NULL DEFAULT '-1',
  `cat_last_file_id` mediumint(8) unsigned NOT NULL,
  `cat_last_file_name` varchar(255) NOT NULL,
  `cat_last_file_time` int(50) unsigned NOT NULL,
  `auth_view` tinyint(2) NOT NULL,
  `auth_read` tinyint(2) NOT NULL,
  `auth_view_file` tinyint(2) NOT NULL,
  `auth_edit_file` tinyint(1) NOT NULL,
  `auth_delete_file` tinyint(1) NOT NULL,
  `auth_upload` tinyint(2) NOT NULL,
  `auth_download` tinyint(2) NOT NULL,
  `auth_rate` tinyint(2) NOT NULL,
  `auth_email` tinyint(2) NOT NULL,
  `auth_view_comment` tinyint(2) NOT NULL,
  `auth_post_comment` tinyint(2) NOT NULL,
  `auth_edit_comment` tinyint(2) NOT NULL,
  `auth_delete_comment` tinyint(2) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_pa_cat`
--

LOCK TABLES `phpbb_pa_cat` WRITE;
/*!40000 ALTER TABLE `phpbb_pa_cat` DISABLE KEYS */;
INSERT INTO `phpbb_pa_cat` (`cat_id`, `cat_name`, `cat_desc`, `cat_parent`, `parents_data`, `cat_order`, `cat_allow_file`, `cat_allow_ratings`, `cat_allow_comments`, `cat_files`, `cat_last_file_id`, `cat_last_file_name`, `cat_last_file_time`, `auth_view`, `auth_read`, `auth_view_file`, `auth_edit_file`, `auth_delete_file`, `auth_upload`, `auth_download`, `auth_rate`, `auth_email`, `auth_view_comment`, `auth_post_comment`, `auth_edit_comment`, `auth_delete_comment`) VALUES (1,'My Category','',0,'a:0:{}',1,0,0,0,-1,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0),(2,'Test Cagegory','Just a test category',1,'a:1:{i:1;s:11:\"My Category\";}',2,1,0,0,1,1,'a',1376325952,0,0,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `phpbb_pa_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_pa_comments`
--

DROP TABLE IF EXISTS `phpbb_pa_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_pa_comments` (
  `comments_id` int(10) NOT NULL AUTO_INCREMENT,
  `file_id` int(10) NOT NULL,
  `comments_text` text NOT NULL,
  `comments_title` text NOT NULL,
  `comments_time` int(50) NOT NULL,
  `comment_bbcode_uid` varchar(10) DEFAULT NULL,
  `poster_id` mediumint(8) NOT NULL,
  PRIMARY KEY (`comments_id`),
  KEY `comments_id` (`comments_id`),
  KEY `comment_bbcode_uid` (`comment_bbcode_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_pa_comments`
--

LOCK TABLES `phpbb_pa_comments` WRITE;
/*!40000 ALTER TABLE `phpbb_pa_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_pa_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_pa_config`
--

DROP TABLE IF EXISTS `phpbb_pa_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_pa_config` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_pa_config`
--

LOCK TABLES `phpbb_pa_config` WRITE;
/*!40000 ALTER TABLE `phpbb_pa_config` DISABLE KEYS */;
INSERT INTO `phpbb_pa_config` (`config_name`, `config_value`) VALUES ('allow_bbcode','1'),('allow_comment_images','0'),('allow_comment_links','1'),('allow_html','1'),('allow_smilies','1'),('auth_search','0'),('auth_stats','0'),('auth_toplist','0'),('auth_viewall','0'),('forbidden_extensions','php, php3, php4, phtml, pl, asp, aspx, cgi'),('hotlink_allowed',''),('hotlink_prevent','1'),('max_comment_chars','5000'),('max_file_size','262144'),('need_validation','0'),('no_comment_image_message','[No image please]'),('no_comment_link_message','[No links please]'),('pm_notify','0'),('screenshots_dir','pafiledb/images/screenshots/'),('settings_dbdescription',''),('settings_dbname','Download Database'),('settings_disable','0'),('settings_file_page','20'),('settings_newdays','1'),('settings_stats',''),('settings_topnumber','10'),('settings_viewall','1'),('sort_method','file_time'),('sort_order','DESC'),('tpl_php','0'),('upload_dir','pafiledb/uploads/'),('validator','validator_admin');
/*!40000 ALTER TABLE `phpbb_pa_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_pa_custom`
--

DROP TABLE IF EXISTS `phpbb_pa_custom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_pa_custom` (
  `custom_id` int(50) NOT NULL AUTO_INCREMENT,
  `custom_name` text NOT NULL,
  `custom_description` text NOT NULL,
  `data` text NOT NULL,
  `field_order` int(20) NOT NULL,
  `field_type` tinyint(2) NOT NULL,
  `regex` varchar(255) NOT NULL,
  PRIMARY KEY (`custom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_pa_custom`
--

LOCK TABLES `phpbb_pa_custom` WRITE;
/*!40000 ALTER TABLE `phpbb_pa_custom` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_pa_custom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_pa_customdata`
--

DROP TABLE IF EXISTS `phpbb_pa_customdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_pa_customdata` (
  `customdata_file` int(50) NOT NULL,
  `customdata_custom` int(50) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_pa_customdata`
--

LOCK TABLES `phpbb_pa_customdata` WRITE;
/*!40000 ALTER TABLE `phpbb_pa_customdata` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_pa_customdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_pa_download_info`
--

DROP TABLE IF EXISTS `phpbb_pa_download_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_pa_download_info` (
  `file_id` mediumint(8) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `downloader_ip` varchar(8) NOT NULL,
  `downloader_os` varchar(255) NOT NULL,
  `downloader_browser` varchar(255) NOT NULL,
  `browser_version` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_pa_download_info`
--

LOCK TABLES `phpbb_pa_download_info` WRITE;
/*!40000 ALTER TABLE `phpbb_pa_download_info` DISABLE KEYS */;
INSERT INTO `phpbb_pa_download_info` (`file_id`, `user_id`, `downloader_ip`, `downloader_os`, `downloader_browser`, `browser_version`) VALUES (1,-1,'42f94bc2','Other','MOZILLA','5.0'),(1,-1,'42f94b9f','Other','MOZILLA','5.0');
/*!40000 ALTER TABLE `phpbb_pa_download_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_pa_files`
--

DROP TABLE IF EXISTS `phpbb_pa_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_pa_files` (
  `file_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) NOT NULL,
  `poster_ip` varchar(8) NOT NULL,
  `file_name` text,
  `file_size` int(20) NOT NULL,
  `unique_name` varchar(255) NOT NULL,
  `real_name` varchar(255) NOT NULL,
  `file_dir` varchar(255) NOT NULL,
  `file_desc` text,
  `file_creator` text,
  `file_version` text,
  `file_longdesc` text,
  `file_ssurl` text,
  `file_sshot_link` tinyint(2) NOT NULL,
  `file_dlurl` text,
  `file_time` int(50) DEFAULT NULL,
  `file_update_time` int(50) NOT NULL,
  `file_catid` int(10) DEFAULT NULL,
  `file_posticon` text,
  `file_license` int(10) DEFAULT NULL,
  `file_dls` int(10) DEFAULT NULL,
  `file_last` int(50) DEFAULT NULL,
  `file_pin` int(2) DEFAULT NULL,
  `file_docsurl` text,
  `file_approved` tinyint(1) NOT NULL DEFAULT '1',
  `file_broken` tinyint(1) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_pa_files`
--

LOCK TABLES `phpbb_pa_files` WRITE;
/*!40000 ALTER TABLE `phpbb_pa_files` DISABLE KEYS */;
INSERT INTO `phpbb_pa_files` (`file_id`, `user_id`, `poster_ip`, `file_name`, `file_size`, `unique_name`, `real_name`, `file_dir`, `file_desc`, `file_creator`, `file_version`, `file_longdesc`, `file_ssurl`, `file_sshot_link`, `file_dlurl`, `file_time`, `file_update_time`, `file_catid`, `file_posticon`, `file_license`, `file_dls`, `file_last`, `file_pin`, `file_docsurl`, `file_approved`, `file_broken`) VALUES (1,-1,'296b7bdd','a',0,'','','pafiledb/uploads/','a','a','a','a','http://1chna.ru/forum/pafiledb/images/screenshots/up.php.jpg',1,'a',1376325952,1376325952,2,'none',0,2,1380397601,0,'',1,0);
/*!40000 ALTER TABLE `phpbb_pa_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_pa_license`
--

DROP TABLE IF EXISTS `phpbb_pa_license`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_pa_license` (
  `license_id` int(10) NOT NULL AUTO_INCREMENT,
  `license_name` text,
  `license_text` text,
  PRIMARY KEY (`license_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_pa_license`
--

LOCK TABLES `phpbb_pa_license` WRITE;
/*!40000 ALTER TABLE `phpbb_pa_license` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_pa_license` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_pa_mirrors`
--

DROP TABLE IF EXISTS `phpbb_pa_mirrors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_pa_mirrors` (
  `mirror_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `file_id` int(10) NOT NULL,
  `unique_name` varchar(255) NOT NULL,
  `file_dir` varchar(255) NOT NULL,
  `file_dlurl` varchar(255) NOT NULL,
  `mirror_location` varchar(255) NOT NULL,
  PRIMARY KEY (`mirror_id`),
  KEY `file_id` (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_pa_mirrors`
--

LOCK TABLES `phpbb_pa_mirrors` WRITE;
/*!40000 ALTER TABLE `phpbb_pa_mirrors` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_pa_mirrors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_pa_votes`
--

DROP TABLE IF EXISTS `phpbb_pa_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_pa_votes` (
  `user_id` mediumint(8) NOT NULL,
  `votes_ip` varchar(50) NOT NULL,
  `votes_file` int(50) NOT NULL,
  `rate_point` tinyint(3) unsigned NOT NULL,
  `voter_os` varchar(255) NOT NULL,
  `voter_browser` varchar(255) NOT NULL,
  `browser_version` varchar(8) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_pa_votes`
--

LOCK TABLES `phpbb_pa_votes` WRITE;
/*!40000 ALTER TABLE `phpbb_pa_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_pa_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_plus`
--

DROP TABLE IF EXISTS `phpbb_plus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_plus` (
  `config_name` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_plus`
--

LOCK TABLES `phpbb_plus` WRITE;
/*!40000 ALTER TABLE `phpbb_plus` DISABLE KEYS */;
INSERT INTO `phpbb_plus` (`config_name`, `config_value`) VALUES ('cols_per_page','4'),('contact_email','webmaster@yourdomain'),('default_avatar','1'),('disable_sid','0'),('enable_antirobot','0'),('enable_banners','0'),('enable_confirm_post','0'),('enable_fulltextsearch','0'),('enable_gentime','0'),('enable_shorturls','0'),('index_layout','index_body_plus.tpl'),('plus_version','1.53'),('show_boardstats','1'),('show_last_visit','1'),('show_links','0'),('show_quickreply','1'),('show_recent_photo','1'),('show_recent_topics','1'),('show_shoutbox','0');
/*!40000 ALTER TABLE `phpbb_plus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_portal`
--

DROP TABLE IF EXISTS `phpbb_portal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_portal` (
  `portal_name` varchar(255) NOT NULL,
  `portal_value` text NOT NULL,
  PRIMARY KEY (`portal_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_portal`
--

LOCK TABLES `phpbb_portal` WRITE;
/*!40000 ALTER TABLE `phpbb_portal` DISABLE KEYS */;
INSERT INTO `phpbb_portal` (`portal_name`, `portal_value`) VALUES ('cat_id','0'),('exceptional_forums',''),('last_seen','5'),('news_forum','1'),('news_length','200'),('number_of_news','5'),('number_recent_files','5'),('number_recent_topics','5'),('number_top_posters','5'),('pics_all','0'),('pics_number','1'),('pics_sort','0'),('pics_thumbsize','100'),('poll_forum','1'),('welcome_text','<center>ÐŸÑ€Ð¸Ð²ÐµÑ‚ÑÑ‚Ð²ÑƒÐµÐ¼ Ð’Ð°Ñ Ð½Ð° Ñ„Ð¾Ñ€ÑƒÐ¼Ðµ <a href=\"http://1chna.ru\" target=\"_blank\" class=\"postlink\"><span style=\"font-weight:bold\">Ð¡Ñ‹Ñ€Ñ‹Ñ… ÐšÑƒÐ»Ð°Ñ‡ÐºÐ¾Ð²</span></a><br /><br />ÐœÑ‹ Ð’Ð°Ð¼ Ð¾Ñ‡ÐµÐ½ÑŒ Ñ€Ð°Ð´Ñ‹,<br /><br />ÐŸÑ€Ð¸ÑÐ¾ÐµÐ´Ð¸Ð½ÑÐ¹Ñ‚ÐµÑÑŒ!<br><br>');
/*!40000 ALTER TABLE `phpbb_portal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_posts`
--

DROP TABLE IF EXISTS `phpbb_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_posts` (
  `post_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` mediumint(8) unsigned NOT NULL,
  `forum_id` smallint(5) unsigned NOT NULL,
  `poster_id` mediumint(8) NOT NULL,
  `post_time` int(11) NOT NULL,
  `poster_ip` char(8) NOT NULL,
  `post_username` varchar(25) DEFAULT NULL,
  `enable_bbcode` tinyint(1) NOT NULL DEFAULT '1',
  `enable_html` tinyint(1) NOT NULL,
  `enable_smilies` tinyint(1) NOT NULL DEFAULT '1',
  `enable_sig` tinyint(1) NOT NULL DEFAULT '1',
  `post_edit_time` int(11) DEFAULT NULL,
  `post_edit_count` smallint(5) unsigned NOT NULL,
  `post_attachment` tinyint(1) NOT NULL,
  `post_icon` tinyint(2) DEFAULT NULL,
  `post_bluecard` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_id` (`topic_id`),
  KEY `poster_id` (`poster_id`),
  KEY `post_time` (`post_time`),
  KEY `post_icon` (`post_icon`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_posts`
--

LOCK TABLES `phpbb_posts` WRITE;
/*!40000 ALTER TABLE `phpbb_posts` DISABLE KEYS */;
INSERT INTO `phpbb_posts` (`post_id`, `topic_id`, `forum_id`, `poster_id`, `post_time`, `poster_ip`, `post_username`, `enable_bbcode`, `enable_html`, `enable_smilies`, `enable_sig`, `post_edit_time`, `post_edit_count`, `post_attachment`, `post_icon`, `post_bluecard`) VALUES (5,5,3,2,1323528424,'5f49320a','',1,0,1,0,NULL,0,1,21,NULL),(6,6,3,2,1323528644,'5f49320a','',1,0,1,0,NULL,0,1,17,NULL),(7,6,3,3,1323532150,'5f49320a','',1,1,1,0,NULL,0,1,0,NULL),(8,5,3,3,1323532369,'5f49320a','',1,1,1,0,NULL,0,1,0,NULL),(9,7,4,3,1323532678,'5f49320a','',1,1,1,0,NULL,0,0,0,NULL),(10,7,4,4,1323534132,'5f49320a','',1,1,1,0,NULL,0,0,0,NULL),(11,8,4,4,1323534351,'5f49320a','',1,1,1,0,1323538859,1,0,0,NULL),(12,8,4,2,1323534470,'5f49320a','',1,0,1,0,NULL,0,0,0,NULL),(13,8,4,3,1323534615,'5f49320a','',1,1,1,1,NULL,0,0,0,NULL),(14,9,2,3,1323534763,'5f49320a','',1,1,1,0,NULL,0,0,0,NULL),(15,9,2,2,1323534917,'5f49320a','',1,1,1,0,NULL,0,0,0,NULL),(16,9,2,4,1323535296,'5f49320a','',1,1,1,0,NULL,0,0,0,NULL),(17,5,3,4,1323536078,'5f49320a','',1,1,1,0,NULL,0,1,0,NULL),(18,5,3,5,1323536708,'5f49320a','',1,1,1,0,NULL,0,0,0,NULL),(19,5,3,3,1323536870,'5f49320a','',1,1,1,0,NULL,0,0,0,NULL),(20,5,3,4,1323537021,'5f49320a','',1,1,1,0,NULL,0,1,0,NULL),(21,5,3,2,1323537179,'5f49320a','',1,0,1,0,NULL,0,1,0,NULL),(22,5,3,5,1323537639,'5f49320a','',1,1,1,0,NULL,0,1,0,NULL),(23,6,3,5,1323537925,'5f49320a','',1,1,1,0,NULL,0,1,17,NULL),(24,6,3,2,1323538065,'5f49320a','',1,0,1,0,NULL,0,1,17,NULL),(25,10,3,4,1323538204,'5f49320a','',1,1,1,0,NULL,0,1,5,NULL),(26,10,3,5,1323538402,'5f49320a','',1,1,1,1,NULL,0,0,0,NULL),(27,10,3,3,1323538461,'5f49320a','',1,1,1,0,NULL,0,0,5,NULL),(28,11,4,6,1323539928,'5f49320a','',1,1,1,0,NULL,0,0,14,NULL),(30,12,4,7,1323540906,'5f49320a','',1,1,1,0,NULL,0,0,0,NULL),(31,12,4,2,1323540995,'5f49320a','',1,1,1,0,NULL,0,0,0,NULL),(33,12,4,3,1323541242,'5f49320a','',1,1,1,0,NULL,0,0,0,NULL),(34,12,4,4,1323541637,'5f49320a','',1,1,1,1,NULL,0,0,0,NULL),(35,10,3,2,1323544843,'5f49320a','',1,1,1,1,NULL,0,0,0,NULL),(36,5,3,2,1323547256,'5f49320a','',1,0,1,1,NULL,0,1,0,NULL),(37,5,3,5,1323547471,'5f49320a','',1,1,1,0,NULL,0,1,0,NULL),(38,6,3,8,1323606221,'5f493781','',1,1,1,1,NULL,0,1,16,NULL),(39,6,3,9,1323614193,'5f49681a','',1,1,1,1,NULL,0,1,0,NULL),(40,6,3,8,1323614372,'5f49681a','',1,1,1,1,NULL,0,1,0,NULL),(41,6,3,10,1323626775,'5f49db33','',1,1,1,1,NULL,0,1,0,NULL),(42,13,4,10,1323626931,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(43,13,4,4,1323626994,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(44,13,4,5,1323627112,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(45,13,4,3,1323627167,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(46,13,4,9,1323627365,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(47,13,4,7,1323627704,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(48,13,4,8,1323627875,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(49,13,4,2,1323628028,'5f49db33','',1,0,1,1,NULL,0,0,0,NULL),(50,7,4,9,1323628207,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(51,7,4,10,1323628376,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(52,8,4,8,1323628667,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(53,8,4,5,1323628826,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(54,14,4,9,1323629024,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(55,14,4,10,1323629188,'5f49db33','',1,1,1,1,NULL,0,0,12,NULL),(56,14,4,8,1323629358,'5f49db33','',1,1,1,1,NULL,0,0,0,1),(57,14,4,4,1323629672,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(58,14,4,5,1323630157,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(59,14,4,3,1323630404,'5f49db33','',1,1,1,0,NULL,0,0,0,NULL),(60,14,4,2,1323630564,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(61,14,4,7,1323631091,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(62,14,4,10,1323631174,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(63,14,4,8,1323631257,'5f49db33','',1,1,1,1,NULL,0,0,0,NULL),(64,15,4,11,1323684954,'4d3300a9','',1,1,1,1,NULL,0,1,11,NULL),(65,15,4,7,1323685949,'4d3300a9','',1,1,1,0,NULL,0,0,0,NULL),(66,15,4,5,1323686066,'4d3300a9','',1,1,1,0,NULL,0,0,0,NULL),(67,15,4,8,1323686297,'4d3300a9','',1,1,1,1,NULL,0,0,0,NULL),(68,15,4,2,1323686601,'4d3300a9','',1,1,1,1,NULL,0,0,0,NULL),(69,14,4,11,1323688605,'4d3300a9','',1,1,1,1,NULL,0,0,0,NULL),(70,5,3,11,1323690433,'4d3300a9','',1,1,1,1,NULL,0,1,0,NULL),(71,5,3,3,1323705409,'4d3300a9','',1,1,1,0,NULL,0,0,0,NULL),(72,5,3,11,1323709606,'4d3300a9','',1,1,1,1,NULL,0,0,0,NULL),(73,5,3,4,1323712063,'4d3300a9','',1,1,1,0,NULL,0,1,0,NULL),(74,5,3,11,1323712276,'4d3300a9','',1,1,1,1,NULL,0,0,0,NULL),(75,5,3,12,1324134545,'4d332f05','',1,1,1,1,NULL,0,1,3,NULL),(76,16,4,12,1324135293,'4d332f05','',1,1,1,1,NULL,0,0,20,NULL),(77,16,4,3,1324135801,'4d332f05','',1,1,1,0,NULL,0,1,0,NULL),(78,17,2,2,1324206644,'5f49dcc8','',1,0,1,1,NULL,0,0,0,NULL),(79,17,2,4,1324206770,'5f49dcc8','',1,1,1,0,NULL,0,0,0,NULL),(80,17,2,10,1324206949,'5f49dcc8','',1,1,1,1,NULL,0,0,0,NULL),(81,17,2,11,1324207407,'5f49dcc8','',1,1,1,1,NULL,0,0,0,NULL),(82,17,2,9,1324208165,'5f49dcc8','',1,1,1,1,NULL,0,0,0,NULL),(83,6,3,14,1324225974,'4e55536e','',1,1,1,0,NULL,0,1,0,NULL),(84,6,3,4,1324226274,'5f49dcc8','',1,1,1,1,NULL,0,0,0,NULL),(88,18,5,15,1333193431,'4d332893','',1,1,0,0,NULL,0,0,0,NULL),(89,18,5,16,1333283549,'5f486711','',1,1,1,0,NULL,0,0,0,NULL),(90,18,5,28,1371579223,'02855297','',1,1,1,1,NULL,0,0,0,NULL),(93,20,4,19,1371723515,'5f48aeb8','',1,1,1,0,NULL,0,0,19,NULL),(94,18,5,22,1371979336,'4d3329ce','',1,1,1,0,NULL,0,0,0,NULL);
/*!40000 ALTER TABLE `phpbb_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_posts_text`
--

DROP TABLE IF EXISTS `phpbb_posts_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_posts_text` (
  `post_id` mediumint(8) unsigned NOT NULL,
  `bbcode_uid` char(10) NOT NULL,
  `post_subject` char(60) DEFAULT NULL,
  `post_text` text,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_posts_text`
--

LOCK TABLES `phpbb_posts_text` WRITE;
/*!40000 ALTER TABLE `phpbb_posts_text` DISABLE KEYS */;
INSERT INTO `phpbb_posts_text` (`post_id`, `bbcode_uid`, `post_subject`, `post_text`) VALUES (5,'52b95695af','Ð Ð¸ÑÐ¾Ð²Ð°Ð½Ð½Ð°Ñ ÑÑ€Ð¾Ñ‚Ð¸ÐºÐ°','Ð’ ÑÑ‚Ð¾Ð¹ Ñ‚ÐµÐ¼Ðµ Ð´ÐµÐ»Ð¸Ð¼ÑÑ Ñ€Ð¸ÑÑƒÐ½Ð¾Ñ‡ÐºÐ°Ð¼Ð¸, Ð¾Ñ‚ ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ñ… Ð»Ð¾Ð²Ð¸Ð¼ ÐºÐ°Ð¹Ñ„'),(6,'48209eeaf5','ÐšÐ»Ð°ÑÑÐ¸Ñ‡ÐµÑÐºÐ°Ñ ÑÑ€Ð¾Ñ‚Ð¸ÐºÐ°','Ð’Ñ‹ÐºÐ»Ð°Ð´Ñ‹Ð²Ð°ÐµÐ¼ ÐºÐ»Ð°ÑÑÐ¸Ñ‡ÐµÑÐºÐ¸Ðµ ÑÑ€Ð¾-Ñ„Ð¾Ñ‚Ð¾Ð³Ñ€Ð°Ñ„Ð¸Ð¸'),(7,'1820b2ca58','','Ð”ÐµÑ€Ð¶Ð¸Ñ‚Ðµ Ð½ÑÑˆÑƒ.'),(8,'2cc6760031','','Ð’Ð¾Ñ‚ ÑˆÐ¸ÐºÐ°Ñ€Ð½Ñ‹Ðµ\nP.S.\nÐ Ð²Ñ‹ Ð½Ðµ Ð¿Ñ€Ð¾Ñ‚Ð¸Ð²?'),(9,'42e792a2cf','ÐšÑ‚Ð¾ Ð´Ñ€Ð¾Ñ‡Ð¸Ñ‚ Ð¶ÐµÐ½ÑÐºÐ¸Ð¼Ð¸ Ñ‚Ñ€ÑƒÑÐ¸ÐºÐ°Ð¼Ð¸','Ð”ÑƒÐ¼Ð°ÑŽ Ð½Ðµ Ñ Ð¾Ð´Ð¸Ð½,Ð»ÑŽÐ±Ð»ÑŽ Ð¿Ð¾Ð´Ñ€Ð¾Ñ‡Ð¸Ñ‚ÑŒ ÑÐ²Ð¾ÐµÐ³Ð¾ Ñ€ÑƒÑ‡Ð½Ð¾Ð³Ð¾ Ð·Ð¼ÐµÑ Ð¶ÐµÐ½ÑÐºÐ¸Ð¼Ð¸ Ñ‚Ñ€ÑƒÑÐ¸ÐºÐ°Ð¼Ð¸,Ð¶ÐµÐ½Ñ‹,Ð¿Ð¾Ð´Ñ€ÑƒÐ³Ð¸ Ð¸ Ñ‚.Ð´.,ÐµÑÐ»Ð¸ Ð²Ñ‹ Ð½ÐµÑ€Ð°Ð²Ð½Ð¾Ð´ÑƒÑˆÐ½Ñ‹ Ðº Ñ‚Ð°ÐºÐ¾Ð¼Ñƒ Ð²Ð¸Ð´Ñƒ ÑƒÐ´Ð¾Ð²Ð¾Ð»ÑŒÑÑ‚Ð²Ð¸Ñ,Ð¿Ñ€Ð¾ÑˆÑƒ Ð²Ñ‹ÐºÐ»Ð°Ð´Ñ‹Ð²Ð°Ð¹Ñ‚Ðµ ÑÐ²Ð¾Ð¸ Ð¸Ð»Ð¸ Ñ„Ð¾Ñ‚Ð¾ Ñ Ð¸Ð½ÐµÑ‚Ð°'),(10,'5c7df642c5','','ÐœÐ½Ðµ Ð¾Ñ‡ÐµÐ½ÑŒ Ð½Ñ€Ð°Ð²Ð¸Ñ‚ÑŒÑÑ Ð´Ñ€Ð¾Ñ‡Ð¸Ñ‚ÑŒ Ñ‚Ñ€ÑƒÑÐ¸ÐºÐ°Ð¼Ð¸...\nÐ¾Ð´Ð½Ð° Ð·Ð½Ð°ÐºÐ¾Ð¼Ð°Ñ Ð¼Ð½Ðµ Ð´Ð°Ð¶Ðµ Ð¿Ð¾Ð´Ð°Ñ€Ð¸Ð»Ð° Ñ‚Ñ€ÑƒÑÐ¸ÐºÐ¸ (Ð²Ñ‹Ð¿Ñ€Ð¾ÑÐ¸Ð»).\nÑ‚ÐµÐ¿ÐµÑ€ÑŒ Ñ‡Ð°ÑÑ‚ÐµÐ½ÑŒÐºÐ¾ Ð´Ñ€Ð¾Ñ‡Ñƒ Ð¸Ð¼Ð¸, ÑÐ½Ð°Ñ‡Ð°Ð»Ð° Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð½ÑŽÑ…Ð°Ð» Ð¸Ñ… ÐºÐ¾Ð³Ð´Ð° Ð´Ñ€Ð¾Ñ‡Ð¸Ð» (Ð¿Ð¾Ð¿Ñ€Ð¾ÑÐ¸Ð» ÐµÑ‘ Ð¼Ð°ÐºÐ½ÑƒÑ‚ÑŒ Ð¸Ñ… Ð²Ð½ÑƒÑ‚Ñ€ÑŒ, Ñ‡Ñ‚Ð¾Ð± Ð¿Ñ€Ð¾Ð¿Ð¸Ñ‚Ð°Ð»Ð¸ÑÑŒ Ð²Ð»Ð°Ð³Ð¾Ð¹) Ð° ÐºÐ¾Ð³Ð´Ð° Ð·Ð°Ð¿Ð°Ñ… Ð¿Ñ€Ð¾Ð¿Ð°Ð» Ð½Ð°Ñ‡Ð°Ð» [glow=red:5c7df642c5]Ð´Ñ€Ð¾Ñ‡Ð¸Ñ‚ÑŒ[/glow:5c7df642c5] Ð¸Ð¼Ð¸, Ð¾Ð±Ð²ÐµÑ€Ð½ÑƒÐ² Ð²Ð¾Ð³Ñ€ÑƒÐ³ Ñ‡Ð»ÐµÐ½Ð° Ð¸ ÐºÐ¾Ð½Ñ‡Ð°Ñ‚ÑŒ, ÑÐ¿ÑƒÑÐºÐ°Ñ ÑÐ¿ÐµÑ€Ð¼Ñƒ Ð² Ð½Ð¸Ñ… Ð¸Ð»Ð¸ Ð½Ð° Ð½Ð¸Ñ…...\nÐ±Ñ‹Ð²Ð°ÐµÑ‚, Ð²Ð¾Ð·Ð¼Ñ‘ÑˆÑŒ ÑÑ‚Ð¸ Ñ‚Ñ€ÑƒÑÐ¸ÐºÐ¸ Ð¿Ð¾Ð´Ñ€Ð¾Ñ‡Ð¸Ñ‚ÑŒ. Ð° Ð¾Ð½Ð¸ ÐµÑ‰Ñ‘ Ð²Ð»Ð°Ð¶Ð½Ñ‹Ðµ Ð¾Ñ‚ Ð¿Ð¾ÑÐ»ÐµÐ´Ð½ÐµÐ¹ Ð´Ñ€Ð¾Ñ‡ÐºÐ¸, Ñ‡Ð»ÐµÐ½ Ñ…Ð¾Ð»Ð¾Ð´ÑÑ‚, Ð¿Ñ€Ð¸ÑÑ‚Ð½Ð¾... Ð¾Ð±ÐºÐ¾Ð½Ñ‡Ð°Ð» Ð¸Ñ… ÑƒÐ¶Ðµ Ð¾Ñ‡ÐµÐ½ÑŒ ÑÐ¸Ð»ÑŒÐ½Ð¾... ÐµÑÐ»Ð¸Ð± Ð¾Ð½Ð° ÑƒÐ²Ð¸Ð´ÐµÐ»Ð° Ð²Ð¾ Ñ‡Ñ‚Ð¾ Ñ Ð¿Ñ€ÐµÐ²Ñ€Ð°Ñ‚Ð¸Ð» ÐµÑ‘ Ñ‚Ñ€ÑƒÑÐ¸ÐºÐ¸ - ÑÐ³Ð¾Ñ€ÐµÐ» ÑÐ¾ ÑÑ‚Ñ‹Ð´Ð°...'),(11,'d7480eca5e','Ð¡ ÐºÐµÐ¼ Ð¸Ð· Ð·Ð½Ð°Ð¼ÐµÐ½Ð¸Ñ‚Ñ‹Ñ… Ð´ÐµÐ²ÑƒÑˆÐµÐº..?','&#1055;&#1088;&#1080;&#1074;&#1077;&#1090; !\n&#1056;&#1077;&#1096;&#1080;&#1083; &#1089;&#1086;&#1079;&#1076;&#1072;&#1090;&#1100; &#1090;&#1072;&#1082;&#1091;&#1102; &#1090;&#1077;&#1084;&#1091;,&#1087;&#1086;&#1089;&#1082;&#1086;&#1083;&#1100;&#1082;&#1091; &#1091; &#1084;&#1077;&#1085;&#1103; &#1095;&#1072;&#1089;&#1090;&#1077;&#1085;&#1100;&#1082;&#1086; &#1073;&#1099;&#1074;&#1072;&#1102;&#1090; &#1087;&#1086;&#1076;&#1086;&#1073;&#1085;&#1099;&#1077; &#1092;&#1072;&#1085;&#1090;&#1072;&#1079;&#1080;&#1080;\n&#1052;&#1085;&#1077; &#1086;&#1095;&#1077;&#1085;&#1100; &#1085;&#1088;&#1072;&#1074;&#1103;&#1090;&#1089;&#1103; &#1050;&#1088;&#1080;&#1089;&#1090;&#1080;&#1085;&#1072; &#1040;&#1075;&#1080;&#1083;&#1077;&#1088;&#1072;,&#1051;&#1091;&#1080;&#1089;&#1072;&#1085;&#1072; &#1051;&#1086;&#1087;&#1080;&#1083;&#1072;&#1090;&#1086; &#1080; &#1055;&#1077;&#1085;&#1077;&#1083;&#1086;&#1087;&#1072; &#1050;&#1088;&#1091;&#1089; &#1080; &#1103; &#1073;&#1099; &#1085;&#1077; &#1086;&#1090;&#1082;&#1072;&#1079;&#1072;&#1083;&#1089;&#1103; &#1087;&#1086;&#1079;&#1085;&#1072;&#1082;&#1086;&#1084;&#1080;&#1090;&#1100;&#1089;&#1103; &#1089; &#1085;&#1080;&#1084;&#1080; &#1087;&#1086;&#1073;&#1083;&#1080;&#1078;&#1077;\n&#1050;&#1072;&#1082; &#1074;&#1080;&#1078;&#1091; &#1085;&#1072; &#1101;&#1082;&#1088;&#1072;&#1085;&#1077; &#1055;&#1077;&#1085;&#1077;&#1083;&#1086;&#1087;&#1091; &#1087;&#1088;&#1103;&#1084;&#1086; &#1084;&#1091;&#1088;&#1072;&#1096;&#1082;&#1080; &#1087;&#1086; &#1090;&#1077;&#1083;&#1091; &#1073;&#1077;&#1075;&#1091;&#1090;)\n&#1040; &#1074;&#1072;&#1084; &#1082;&#1090;&#1086; &#1080;&#1079; &#1079;&#1085;&#1072;&#1084;&#1077;&#1085;&#1080;&#1090;&#1086;&#1089;&#1090;&#1077;&#1081; &#1085;&#1088;&#1072;&#1074;&#1080;&#1090;&#1089;&#1103;?'),(12,'b843833e6c','','&#1050;&#1083;&#1072;&#1091;&#1076;&#1080;&#1103; &#1041;&#1083;&#1101;&#1082;!) &#1054;&#1073;&#1086;&#1078;&#1072;&#1102;! &#1055;&#1088;&#1072;&#1074;&#1076;&#1072; &#1085;&#1077; &#1091;&#1074;&#1077;&#1088;&#1077;&#1085;&#1072;, &#1095;&#1090;&#1086; &#1086;&#1085;&#1072; &#1083;&#1077;&#1089;&#1073;&#1080;... :roll: \n&#1042;&#1086;&#1090; &#1077;&#1097;&#1077; &#1086;&#1076;&#1085;&#1072;... &#1044;&#1078;&#1091;&#1083;&#1080;&#1103; &#1056;&#1086;&#1073;&#1077;&#1088;&#1090;&#1089;...&#1085;&#1086; &#1082; &#1085;&#1077;&#1081; &#1091; &#1084;&#1077;&#1085;&#1103; &#1073;&#1086;&#1083;&#1100;&#1096;&#1077; &#1085;&#1077;&#1078;&#1085;&#1099;&#1077; &#1095;&#1091;&#1074;&#1089;&#1090;&#1074;&#1072;, &#1082;&#1072;&#1082; &#1082; &#1072;&#1082;&#1090;&#1088;&#1080;&#1089;&#1077;...&#1085;&#1072;&#1074;&#1077;&#1088;&#1085;&#1086;&#1077;...'),(13,'16397093aa','','Ð”Ð° Ð½Ñƒ Ð¸Ñ…, ÑÑ‚Ð¸Ñ… Ð·Ð½Ð°Ð¼ÐµÐ½Ð¸Ñ‚Ð¾ÑÑ‚ÐµÐ¹! ÐžÐ½Ð¸, Ð½ÐµÐ±Ð¾ÑÑŒ, Ð²ÐµÐ´ÑƒÑ‚ Ð±ÐµÑÐ¿Ð¾Ñ€ÑÐ´Ð¾Ñ‡Ð½ÑƒÑŽ Ð¿Ð¾Ð»Ð¾Ð²ÑƒÑŽ Ð¶Ð¸Ð·Ð½ÑŒ. Ð•Ñ‰Ðµ Ð¿Ð¾Ð´Ñ…Ð²Ð°Ñ‚Ð¸ÑˆÑŒ Ñ‡Ñ‚Ð¾-Ð½Ð¸Ð±ÑƒÐ´ÑŒ. Ðš Ñ‚Ð¾Ð¼Ñƒ Ð¶Ðµ, Ð¾Ð½Ð¸, Ð½Ð°Ð²ÐµÑ€Ð½Ð¾, ÐºÐ°Ð¿Ñ€Ð¸Ð·Ð½Ñ‹Ðµ, Ð²Ð·Ð±Ð°Ð»Ð¼Ð¾ÑˆÐ½Ñ‹Ðµ Ð¸ ÑƒÐ¶Ð°ÑÐ½Ñ‹Ðµ Ð·Ð°Ð´Ð°Ð²Ð°ÐºÐ¸. Ð¡ Ð½ÐµÐ¹ Ð¸ Ð¿Ð¾Ð³Ð¾Ð²Ð¾Ñ€Ð¸Ñ‚ÑŒ-Ñ‚Ð¾ Ð¿Ð¾ Ð´ÑƒÑˆÐ°Ð¼ Ð½Ðµ Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑÑ...\nÐÐµ, Ð½Ðµ Ñ…Ð¾Ñ‡Ñƒ. Ð¯ Ð»ÑƒÑ‡ÑˆÐµ Ñ ÑÐ¾Ð»Ð½Ñ‹ÑˆÐºÐ¾Ð¹ ÑÐ²Ð¾ÐµÐ¹...'),(14,'a4d4990dcd','ÐÐ´Ð¼Ð¸Ð½','ÐÐ´Ð¼Ð¸Ð½ !!! ÐÐµ Ð¿Ð¾Ñ‡Ð¸Ð½Ð¸ÑˆÑŒ ÑÐ°Ð¹Ñ‚ - ÑƒÐ¼Ñ€Ñ‘ÑˆÑŒ Ð¾Ñ‚ Ð¼Ð¾Ð½Ñ‚Ð¸Ñ€Ð¾Ð²ÐºÐ¸ !!!\nÐ¯ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ…Ð¾Ñ‚ÐµÐ» Ñ€Ð°ÑÑÐ»Ð°Ð±Ð¸Ñ‚ÑŒÑ†Ð¾ Ð¸ Ð½Ð° Ñ‚ÐµÐ±Ðµ- 404 ERROr!'),(15,'7dc11db3bc','','&#1059;&#1089;&#1087;&#1086;&#1082;&#1086;&#1081;&#1090;&#1077;&#1089;&#1100;, &#1089;&#1072;&#1081;&#1090; &#1090;&#1086;&#1083;&#1100;&#1082;&#1086; &#1074;&#1089;&#1090;&#1072;&#1083; &#1085;&#1072; &#1085;&#1086;&#1075;&#1080;. &#1047;&#1085;&#1072;&#1095;&#1080;&#1090;&#1077;&#1083;&#1100;&#1085;&#1099;&#1077; &#1086;&#1096;&#1080;&#1073;&#1082;&#1080; &#1103; &#1080;&#1089;&#1087;&#1088;&#1072;&#1074;&#1080;&#1083;&#1072;, &#1085;&#1086; &#1080;&#1084;&#1077;&#1102;&#1090; &#1084;&#1077;&#1089;&#1090;&#1086; &#1073;&#1099;&#1090;&#1100; &#1085;&#1077;&#1082;&#1086;&#1090;&#1086;&#1088;&#1099;&#1077; &#1085;&#1086;&#1074;&#1099;&#1077;.\nP.S.\n&#1055;&#1077;&#1088;&#1077;&#1077;&#1079;&#1078;&#1072;&#1077;&#1084; &#1085;&#1072; &#1085;&#1086;&#1074;&#1099;&#1081; &#1093;&#1086;&#1089;&#1090;&#1080;&#1085;&#1075;, &#1080;&#1084;&#1077;&#1081;&#1090;&#1077; &#1090;&#1077;&#1088;&#1087;&#1077;&#1085;&#1080;&#1077;.'),(16,'f4d828059c','Re: ÐÐ´Ð¼Ð¸Ð½','[quote:f4d828059c=\"Ð’Ð¸Ñ‚Ð¸ÐµÐ²Ð°Ñ‚Ñ‹Ð¹\"]ÐÐ´Ð¼Ð¸Ð½ !!! ÐÐµ Ð¿Ð¾Ñ‡Ð¸Ð½Ð¸ÑˆÑŒ ÑÐ°Ð¹Ñ‚ - ÑƒÐ¼Ñ€Ñ‘ÑˆÑŒ Ð¾Ñ‚ Ð¼Ð¾Ð½Ñ‚Ð¸Ñ€Ð¾Ð²ÐºÐ¸ !!!\nÐ¯ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ…Ð¾Ñ‚ÐµÐ» Ñ€Ð°ÑÑÐ»Ð°Ð±Ð¸Ñ‚ÑŒÑ†Ð¾ Ð¸ Ð½Ð° Ñ‚ÐµÐ±Ðµ- 404 ERROr![/quote:f4d828059c]\n[color=blue:f4d828059c][b:f4d828059c]Ð’Ð¸Ñ‚Ð¸ÐµÐ²Ð°Ñ‚Ñ‹Ð¹[/b:f4d828059c][/color:f4d828059c] , Ñ‡ÐµÐ³Ð¾ ÑÑ‚Ð¾ Ñ‚Ñ‹ Ñ‚Ð°Ðº Ñ€Ð°Ð·Ð¾Ñ€Ð°Ð»ÑÑ? Ð˜Ð´Ð¸ Ð½Ð° Ð°Ð½Ð°Ð½Ð°ÑÐ¸Ðº, Ð¸Ð»Ð¸ Ñ‚Ð°Ð¼ Ð½Ð° Ð³Ñ€ÐµÑ….Ñ€Ñƒ\nÐÐ´Ð¼Ð¸Ð½, Ð±Ñ€Ð¾ÑÑŒ. ÐŸÐ¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÐµÐ¹ Ð½Ðµ Ð¿Ð¾Ñ‡Ð¸Ð½Ð¸ÑˆÑŒ...'),(17,'e1a7b0c72c','','Ð™Ð¸Ñ„Ñ„! ÐœÐ¾Ð¶ÐµÑ‚ ÐºÐ°Ñ€Ñ‚Ð¸Ð½ÐºÐ¸ ÑƒÐ¶Ðµ Ð¸ Ð½Ðµ Ð½Ð¾Ð²Ñ‹Ðµ, Ð½Ð¾ Ð·Ð°Ñ‚Ð¾ Ð¿Ñ€Ð¸ÑÑ‚Ð½Ñ‹Ðµ )'),(18,'e9b7f8ea7c','','[quote:e9b7f8ea7c=\"INSIDESTEP\"]Ð™Ð¸Ñ„Ñ„! ...[/quote:e9b7f8ea7c]\nÐ’Ñ‹ [color=red:e9b7f8ea7c]Ð˜Ð—Ð’Ð ÐÐ©Ð•Ð“Ð¦Ð«[/color:e9b7f8ea7c], ÑÐ¾Ð²ÑÐµÐ¼ Ð¾Ð±Ð°Ð»Ð´ÐµÐ»Ð¸????? Ð—Ð¾Ð¾Ð¾Ñ„Ð¸Ð»Ñ‹! ÑÐ¾Ð²ÑÐ¼ ÑƒÐ¶Ðµ Ð¾Ð±Ð°Ð»Ð´ÐµÐ»Ð¸????? Ð’Ñ‹ ÑÑ‡Ð¸Ñ‚Ð°ÐµÑ‚Ðµ, Ñ‡Ñ‚Ð¾ Ð±ÐµÐ·Ð²ÐºÑƒÑÐ½Ð¾ ÐºÐ¾Ð²ÐµÑ€ÐºÐ°Ñ ÑÐ»Ð¾Ð²Ð° Ð¿Ð¸ÑˆÐµÑ‚Ðµ Ð¾Ñ‡ÐµÐ½ÑŒ ÑÐ»ÐµÐ³Ð°Ð½Ñ‚Ð½Ð¾ Ð¸ Ð¾ÑÑ‚Ñ€Ð¾ÑƒÐ¼Ð½Ð¾? Ð£Ñ‘Ð±ÐºÐ¸, Ð±Ð»ÑÐ´ÑŒ. ÐŸÑ€Ð¸Ð´ÑƒÑˆÐ¸Ð» Ð±Ñ‹ Ð²Ð°Ñ.'),(19,'15be5d23e2','','[quote:15be5d23e2=\"Hyperion\"]\nÐ’Ñ‹ [color=red:15be5d23e2]Ð˜Ð—Ð’Ð ÐÐ©Ð•Ð“Ð¦Ð«[/color:15be5d23e2], ...[/quote:15be5d23e2]\nÐ”Ð°Ð³Ð°Ð³Ð¸Ðµ Ð¼Ð¾Ñ€Ð°Ð¹Ð»ÑŒÑ„Ð°Ð³Ð¸, &quot;Ð·Ð¾Ð¹Ñ‰Ð¸Ñ‚Ð½Ð¸ÐºÐ¸ Ð¶ÐµÐ¹Ð²Ð¾Ñ‚Ð½Ñ‹Ñ…&quot;, Ð²ÑŠÑ€ÑƒÑŽÑ‰Ð¸Ðµ, Ð¸ Ð¿Ñ€Ð¾Ð¹Ñ‡ÐµÑ Ð°Ð½Ñ‚ÐµÑ€ÐµÑÐ½Ð°Ñ Ð¿ÑƒÐ±Ð»Ð¸ÐºÐ°!)\nÐš Ð²Ð°Ð¼ Ð¾Ð±Ñ€Ð°Ñ‰Ð°ÐµÑ‚ÑÑ Ð¿Ñ€Ð¾Ñ„ÐµÑÑÐ¾Ñ€ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¸Ñ‡ÐµÑÐºÐ¸Ñ… Ð½Ð°ÑƒÐº, Ð—Ð¾Ð¾Ñ„Ð¸Ð»-ÐºÑƒÐ½ (ÐºÑ‚Ð¾ Ð² &quot;Ñ‚ÐµÐ¼Ðµ&quot;, ÑƒÐ·Ð½Ð°ÐµÑ‚ Ð¼ÐµÐ½Ñ Ð±Ñ‹ÑÑ‚Ñ€Ð¾, Ñ€ÐµÑˆÐ¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾, Ñ Ð³Ð°Ñ€Ð°Ð½Ñ‚Ð¸Ñ€ÑƒÑŽ ÑÑ‚Ð¾!.\nÐ¡ÐµÐ¹Ñ‡Ð°Ñ Ñ Ð±ÑƒÐ´Ñƒ Ð¾Ð¿Ñ€Ð¾Ð²ÐµÑ€Ð³Ð°Ñ‚ÑŒ Ð¼Ð¸Ñ„Ñ‹ Ð¸ ÐºÐ»ÐµÐ²ÐµÑ‚Ñƒ Ð¾ Ð½Ð°Ñ, Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð°Ñ….\nÐ’Ð¾-Ð¿ÐµÑ€Ð²Ñ‹Ñ…, Ñ ÐºÐ°ÐºÐ¾Ð³Ð¾ Ñ‚Ð°ÐºÐ¾Ð³Ð¾ Ð²Ñ‹ Ð²Ð·ÑÐ»Ð¸, Ñ‡Ñ‚Ð¾ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ñ‹ Ð½Ð°ÑÐ¸Ð»ÑƒÑŽÑ‚ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ñ…???\nÐ”Ð° Ð±ÑƒÐ´ÐµÑ‚ Ð²Ð°Ð¼ Ð¸Ð·Ð²ÐµÑÑ‚Ð½Ð¾, Ñ‡Ñ‚Ð¾ Ð²Ð¾Ð¾Ð±Ñ‰Ðµ-Ñ‚Ð¾ Ñƒ ÑÐ¾Ð±Ð°ÐºÐ¸ ÐµÑÑ‚ÑŒ Ð½ÐµÑ…Ð¸Ð»Ñ‹Ðµ Ñ‡ÐµÐ»ÑŽÑÑ‚Ð¸ Ñ ÐºÑ€ÐµÐ¿ÐºÐ¸Ð¼Ð¸ Ð·ÑƒÐ±Ð°Ð¼Ð¸, Ð° Ñƒ Ð»Ð¾ÑˆÐ°Ð´ÐµÐ¹/Ð¾ÑÐ»Ð¾Ð² Ð² Ð¿Ñ€Ð¸Ð´Ð°Ñ‡Ñƒ Ðº Ð¾Ð½Ñ‹Ð¼ Ð¸ ÐºÐ¾Ð¿Ñ‹Ñ‚Ð°, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¼Ð¸ Ð¼Ð¾Ð³ÑƒÑ‚ Ð¸ ÑƒÐ±Ð¸Ñ‚ÑŒ Ñ‚Ð¾Ð³Ð¾ Ð¸Ð´Ð¸Ñ‘Ñ‚Ð°-ÐÐ•Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð°, Ð¶ÐµÐ»Ð°Ð²ÑˆÐµÐ³Ð¾ Ð¿Ð¾Ð¸Ð¼ÐµÑ‚ÑŒ ÑÐ¸Ð»Ð¾Ð¹ Ð¼Ð¸Ñ€Ð½Ð¾ ÑÑ‚Ð¾ÑÑ‰ÑŽÑŽ ÐºÐ¾Ð±Ñ‹Ð»ÐºÑƒ/ÑÑƒÑ‡ÐºÑƒ/ÐºÐ¾Ð±ÐµÐ»ÑŒÐºÐ°/Ð¶ÐµÑ€ÐµÐ±Ñ‡Ð¸ÐºÐ°.\nÐ¢Ð°Ðº Ñ‡Ñ‚Ð¾ ÑÐ²Ð¾Ð¸ Ð±Ñ€ÐµÐ´Ð½Ð¸ Ð¿Ñ€Ð¾ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð², ÑÐºÐ¾Ð±Ñ‹ &quot;Ð½Ð°ÑÐ¸Ð»ÑƒÑŽÑ‰Ð¸Ñ… Ð±ÐµÐ´Ð½Ñ‹Ñ… Ð·Ð²ÐµÑ€ÑƒÑˆÐµÐº&quot;, Ð¾ÑÑ‚Ð°Ð²ÑŒÑ‚Ðµ Ð¿Ñ€Ð¸ ÑÐµÐ±Ðµ.\nÐ˜ Ð·Ð°Ñ€ÑƒÐ±Ð¸Ñ‚Ðµ ÑÐµÐ±Ðµ Ð½Ð° Ð½Ð¾ÑÑƒ: Ð½ÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð¿Ñ€Ð¸Ð½ÑƒÐ´Ð¸Ñ‚ÑŒ Ð¿ÑÐ¸Ñ…Ð¸Ñ‡ÐµÑÐºÐ¸ Ð·Ð´Ð¾Ñ€Ð¾Ð²ÑƒÑŽ ÑÑƒÐºÑƒ/ÐºÐ¾Ð±Ñ‹Ð»Ñƒ/ÐºÐ¾Ð±ÐµÐ»Ñ/Ð¶ÐµÑ€ÐµÐ±Ñ†Ð° Ðº ÑÐµÐºÑÑƒ, ÐµÑÐ»Ð¸ Ð¾Ð½Ð¸ Ð¾Ð½Ð¾Ð³Ð¾ Ð½Ðµ Ð¶ÐµÐ»Ð°ÑŽÑ‚, Ð½Ñƒ Ð½Ðµ Ð²Ñ‹Ð¹Ð´ÐµÑ‚ Ð½Ð¸Ñ…Ñ€ÐµÐ½Ð°, Ñ…ÑƒÐ¶Ðµ Ð±ÑƒÐ´ÐµÑ‚ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð¿Ñ€Ð¸Ð½ÑƒÐ¶Ð´Ð°ÑŽÑ‰ÐµÐ¼Ñƒ!!!\nÐŸÑ€Ð¸ ÑÑ‚Ð¾Ð¼, Ñ Ð½Ðµ Ð¾Ñ‚Ñ€Ð¸Ñ†Ð°ÑŽ Ñ„Ð°ÐºÑ‚Ñ‹ ÑÐµÐºÑÑƒÐ°Ð»ÑŒÐ½Ð¾Ð³Ð¾ Ð½Ð°ÑÐ¸Ð»Ð¸Ñ Ð½Ð°Ð´ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ð¼Ð¸ Ð²Ð¾Ð¾Ð±Ñ‰Ðµ, Ñ‚Ð¾Ð»ÑŒÐºÐ¾ ÐµÑÑ‚ÑŒ Ð¾Ð´Ð¸Ð½ Ð½ÑŽÐ°Ð½Ñ: Ñ‚Ð°ÐºÐ¸Ðµ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ðµ Ð»Ð¸Ð±Ð¾ ÑƒÐ¶Ðµ Ð½Ð°Ñ‚Ñ€ÐµÐ½Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð½Ñ‹ Ñ Ð´ÐµÑ‚ÑÑ‚Ð²Ð° Ðº Ð´Ð°Ñ‡Ðµ ÑÐµÐºÑÐ° Ð¿Ð¾ Ð¿ÐµÑ€Ð²Ð¾Ð¼Ñƒ Ñ‚Ñ€ÐµÐ±Ð¾Ð²Ð°Ð½Ð¸ÑŽ &quot;Ñ…Ð¾Ð·ÑÐ¸Ð½Ð°&quot;, Ð»Ð¸Ð±Ð¾ Ð¸Ñ… Ð¿ÑÐ¸Ñ…Ð¸Ñ‡ÐµÑÐºÐ¸ &quot;ÑÐ»Ð¾Ð¼Ð°Ð»Ð¸&quot;/Ñ€Ð¾Ð´Ð¸Ð»Ð¸ÑÑŒ ÑÐ¾ &quot;ÑÐ»Ð¾Ð¼Ð°Ð½Ð½Ð¾Ð¹&quot; Ð¿ÑÐ¸Ñ…Ð¸ÐºÐ¾Ð¹. Ð¢Ðµ Ð¶Ðµ &quot;Ñ…Ð¾Ð·ÑÐµÐ²Ð°&quot;, ÐºÑ‚Ð¾ Ð´ÐµÐ»Ð°ÐµÑ‚ Ñ‚Ð°ÐºÐ¾Ðµ, Ð¸Ð¼ÐµÑŽÑ‚ Ð¾Ñ‚Ð½Ð¾ÑˆÐµÐ½Ð¸Ðµ Ðº Ð½Ð°ÑÑ‚Ð¾ÑÑ‰Ð¸Ð¼ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð°Ð¼ Ñ‡ÑƒÑ‚ÑŒ Ð¼ÐµÐ½ÐµÐµ, Ñ‡ÐµÐ¼ Ð½Ð¸ÐºÐ°ÐºÐ¾Ðµ.\nÐÐ°ÑÑ‚Ð¾ÑÑ‰Ð¸Ð¹ Ð·Ð¾Ð¾Ñ„Ð¸Ð» ÐÐ˜ÐšÐžÐ“Ð”Ð Ð½Ðµ Ð±ÑƒÐ´ÐµÑ‚ Ð¿Ñ€Ð¸Ð½ÑƒÐ¶Ð´Ð°Ñ‚ÑŒ ÑÐ²Ð¾Ðµ Ð»ÑŽÐ±Ð¸Ð¼Ð¾Ðµ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ð¾Ðµ Ðº ÑÐµÐºÑÑƒ, ÐµÑÐ»Ð¸ Ð¾Ð½Ð¾Ðµ Ð½Ðµ Ð¶ÐµÐ»Ð°ÐµÑ‚ ÑÑ‚Ð¾Ð³Ð¾. Ð¡ÐºÐ°Ð¶Ñƒ Ð±Ð¾Ð»ÑŒÑˆÐµ: ÑÐµÐºÑ Ñ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ð¼ Ð´Ð»Ñ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð² - Ð½Ðµ &quot;Ð¸Ð´ÐµÑ-Ñ„Ð¸ÐºÑ&quot;, Ð° Ð»Ð¸ÑˆÑŒ Ð½ÐµÐ±Ð¾Ð»ÑŒÑˆÐ°Ñ Ñ‡Ð°ÑÑ‚ÑŒ Ð²Ð·Ð°Ð¸Ð¼Ð¾Ð¾Ñ‚Ð½Ð¾ÑˆÐµÐ½Ð¸Ð¹ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ°-Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð° Ð¸ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ð¾Ð³Ð¾, Ð²Ð°Ð¶Ð½Ð°Ñ, Ð½Ð¾ Ð½ÐµÐ¿ÐµÑ€Ð²Ð¾ÑÑ‚ÐµÐ¿ÐµÐ½Ð½Ð°Ñ.\nÐ—Ð¾Ð¾Ñ„Ð¸Ð»Ñ‹ Ñ€Ð°ÑÑÐ¼Ð°Ñ‚Ñ€Ð¸Ð²Ð°ÑŽÑ‚ ÑÐµÐºÑ Ñ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ð¼ Ð˜Ð¡ÐšÐ›Ð®Ð§Ð˜Ð¢Ð•Ð›Ð¬ÐÐž ÐºÐ°Ðº Ð´Ð°Ñ€ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ð¾Ð³Ð¾, Ð¼Ð¾Ð¶Ð½Ð¾ ÑÐºÐ°Ð·Ð°Ñ‚ÑŒ, ÐºÐ°Ðº Ð¿Ñ€Ð¸Ð·Ð½Ð°Ðº Ð½Ð°Ð¸Ð²Ñ‹ÑÑˆÐµÐ³Ð¾ Ð´Ð¾Ð²ÐµÑ€Ð¸Ñ Ð¸ Ð»ÑŽÐ±Ð²Ð¸ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ð¾Ð³Ð¾ Ðº ÑÐ²Ð¾ÐµÐ¼Ñƒ Ñ…Ð¾Ð·ÑÐ¸Ð½Ñƒ-Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ñƒ, Ð° Ð½Ðµ ÐºÐ°Ðº Ð¾Ð±ÑÐ·Ð°Ð½Ð½Ð¾ÑÑ‚ÑŒ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ð¾Ð³Ð¾ &quot;Ð´Ð°Ð²Ð°Ñ‚ÑŒ&quot; Ð¿Ð¾ Ð¿ÐµÑ€Ð²Ð¾Ð¼Ñƒ Ñ‚Ñ€ÐµÐ±Ð¾Ð²Ð°Ð½Ð¸ÑŽ Ð¸ Ð² Ð»ÑŽÐ±Ð¾Ðµ Ð²Ñ€ÐµÐ¼Ñ.\n&quot;Ð¡ÑƒÑ‡ÐºÐ° Ð½Ðµ Ð·Ð°Ñ…Ð¾Ñ‡ÐµÑ‚ - Ð¸ÑÑ‚Ð¸Ð½Ð½Ñ‹Ð¹ Ð·Ð¾Ð¾Ñ„Ð¸Ð» Ð½Ðµ &quot;Ð²ÑÐºÐ¾Ñ‡Ð¸Ñ‚!&quot;\nÐ¢Ð°Ðº, Ñ Ð¿ÐµÑ€Ð²Ñ‹Ð¼ Ð¼Ð¸Ñ„Ð¾Ð¼ Ð·Ð°ÐºÐ¾Ð½Ñ‡Ð¸Ð», Ð¿ÐµÑ€ÐµÑ…Ð¾Ð¶Ñƒ ÐºÐ¾ Ð²Ñ‚Ð¾Ñ€Ð¾Ð¼Ñƒ, Ð° Ð¸Ð¼ÐµÐ½Ð¾: &quot;Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ðµ Ð½Ðµ Ð¿Ð¾Ð»ÑƒÑ‡Ð°ÑŽÑ‚ ÑƒÐ´Ð¾Ð²Ð¾Ð»ÑŒÑÑ‚Ð²Ð¸Ñ Ð¾Ñ‚ ÑÐµÐºÑÐ° Ñ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ¾Ð¼, Ð¸Ð¼ Ð¾Ñ‚ ÑÑ‚Ð¾Ð³Ð¾ Ð±Ð¾Ð»ÑŒÐ½Ð¾/Ð½ÐµÐ¿Ñ€Ð¸ÑÑ‚Ð½Ð¾!&quot;, Ð½Ð° Ñ‡Ñ‚Ð¾ Ñƒ Ð¼ÐµÐ½Ñ Ð¸ Ð´Ñ€ÑƒÐ³Ð¸Ñ… Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð² ÐµÑÑ‚ÑŒ Ð»Ð¸ÑˆÑŒ Ð¾Ð´Ð½Ð¾: Ð›ÐžÐžÐžÐžÐ›, Ð›ÐžÐžÐžÐ›Ð˜Ð©Ð•!!!11\nÐ˜Ð·Ð²Ð¸Ð½Ð¸Ñ‚Ðµ Ð¼ÐµÐ½Ñ, ÐµÑÐ»Ð¸ Ð´ÐµÐ»Ð°Ñ‚ÑŒ ÑÐ¾Ð±Ð°ÐºÐµ Ð±Ð¾Ð»ÑŒÐ½Ð¾ Ð¸Ð»Ð¸ Ð½ÐµÐ¿Ñ€Ð¸ÑÑ‚Ð½Ð¾, ÐºÐ°Ðº Ð¾Ð½Ð° Ð¾Ñ‚Ñ€ÐµÐ°Ð³Ð¸Ñ€ÑƒÐµÑ‚?\nÐ’ 99.99% Ð¾Ð½Ð° Ð¸Ð»Ð¸ Ð²Ð¾Ð·Ð¼ÐµÑ‚ Ð¸ Ñ‚ÑÐ¿Ð½ÐµÑ‚ Ð·ÑƒÐ±Ð°Ð¼Ð¸ Ñ‚Ð¾Ð³Ð¾, ÐºÑ‚Ð¾ ÐµÐ¹ Ð´ÐµÐ»Ð°ÐµÑ‚ Ð±Ð¾Ð»ÑŒ/Ð´Ð¸ÑÐºÐ¾Ð¼Ñ„Ð¾Ñ€Ñ‚, Ð¸Ð»Ð¸ Ð¶Ðµ Ð¿Ð¾Ð¿Ñ‹Ñ‚Ð°ÐµÑ‚ÑÑ ÑÐ±ÐµÐ¶Ð°Ñ‚ÑŒ, Ð’Ð¡Ð•, Ð‘ÐžÐ›Ð¬Ð¨Ð• ÐÐ˜ÐšÐÐšÐ˜Ð¥ Ð’ÐÐ Ð˜ÐÐÐ¢ÐžÐ’ ÐÐ•Ð¢!!! Ð¢Ð°ÐºÐ¶Ðµ Ð¿Ð¾Ð²ÐµÐ´Ñ‘Ñ‚ ÑÐµÐ±Ñ Ð¸ ÐºÐ¾Ð±Ñ‹Ð»Ð°, Ð¸ ÐºÐ¾Ð±ÐµÐ»ÑŒ, Ð¸ Ð¶ÐµÑ€ÐµÐ±ÐµÑ†! Ð•ÑÐ»Ð¸ Ð³Ð¾ÑÐ¿Ð¾Ð´Ð° Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ñ„Ð¾Ð±Ñ‹ Ð·Ð°Ð±Ñ‹Ð»Ð¸, Ñ‚Ð¾ Ñ Ð½Ð°Ð¿Ð¾Ð¼Ð½ÑŽ: Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ðµ, Ð² Ð¾Ñ‚Ð»Ð¸Ñ‡Ð¸Ð¸ Ð¾Ñ‚ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ°, Ð² Ð¿Ð¾Ð´Ð°Ð²Ð»ÑÑŽÑ‰ÐµÐ¼(99.99%) Ð±Ð¾Ð»ÑŒÑˆÐ¸Ð½ÑÑ‚Ð²Ðµ Ð½Ðµ ÑÐ²Ð»ÑÑŽÑ‚ÑÑ Ð»ÑŽÐ±Ð¸Ñ‚ÐµÐ»ÑÐ¼Ð¸ ÑÐ°Ð´Ð¾Ð¼Ð°Ð·Ð¾ Ð¸ Ð¿Ñ€Ð¾Ñ‡ÐµÐ³Ð¾ Ð‘Ð”Ð¡ÐœÐ°, Ð° Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ñ‹ ÐÐ˜ÐšÐžÐ“Ð”Ð Ð½Ðµ ÑÑ‚Ð°Ð½ÑƒÑ‚ Ð¿Ñ€Ð¸Ñ‡Ð¸Ð½ÑÑ‚ÑŒ Ð±Ð¾Ð»ÑŒ ÑÐ²Ð¾ÐµÐ¼Ñƒ Ñ‡ÐµÑ‚Ð²ÐµÑ€Ð¾Ð½Ð¾Ð³Ð¾Ð¼Ñƒ Ð¿Ð°Ñ€Ñ‚Ð½ÐµÑ€Ñƒ(Ð¾ÑÑ‚Ð°Ð»ÑŒÐ½Ñ‹Ðµ 0.01% Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ñ…, Ñ‚ÐµÑ€Ð¿ÑÑ‰Ð¸Ñ… Ð±Ð¾Ð»ÑŒ Ð¸ Ð½Ð°ÑÐ¸Ð»Ð¸Ðµ - ÑÑ‚Ð¾ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ðµ Ñ ÑƒÐ¶Ðµ Ð¿Ð¾ÐºÐ¾Ñ€ÐµÐ¶ÐµÐ½Ð½Ð¾Ð¹ &quot;Ñ…Ð¾Ð·ÑÐ¸Ð½Ð¾Ð¼&quot;, Ð»Ð¸Ð±Ð¾ Ð²Ñ€Ð¾Ð¶Ð´ÐµÐ½Ð½Ð¾, Ð¿ÑÐ¸Ñ…Ð¸ÐºÐ¾Ð¹, Ð° Ð·Ð¾Ð¾ÑÐ°Ð´Ð¸ÑÑ‚Ñ‹, Ð¿Ñ€Ð°ÐºÑ‚Ð¸ÐºÑƒÑŽÑ‰Ð¸Ðµ Ð¸Ð·Ð´ÐµÐ²Ð°Ñ‚ÐµÐ»ÑŒÑÑ‚Ð²Ð°(ÑÐµÐºÑÑƒÐ°Ð»ÑŒÐ½Ñ‹Ðµ Ñ‚Ð¾Ð¶Ðµ) Ð½Ð°Ð´ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ð¼Ð¸, Ñ‚Ð°ÐºÐ¶Ðµ Ð½Ðµ Ð¸Ð¼ÐµÑŽÑ‚ Ð½Ð¸ÐºÐ°ÐºÐ¾Ð³Ð¾ Ð¾Ñ‚Ð½Ð¾ÑˆÐµÐ½Ð¸Ñ Ðº Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¸Ð¸).\nÐ§Ñ‚Ð¾ Ð¶Ðµ Ð½Ð°ÑÑ‡ÐµÑ‚ Ñ‚Ð¾Ð³Ð¾, Ñ‡Ñ‚Ð¾ &quot;ÑÑƒÐºÐ¸/ÐºÐ¾Ð±Ñ‹Ð»Ñ‹ Ð½Ðµ Ð¿Ð¾Ð»ÑƒÑ‡Ð°ÑŽÑ‚ ÑƒÐ´Ð¾Ð²Ð¾Ð»ÑŒÑÑ‚Ð²Ð¸Ñ Ð¾Ñ‚ ÑÐµÐºÑÐ° Ñ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ¾Ð¼&quot;...\nÐÐ° ÑÑ‚Ð¾Ñ‚ ÑÑ‡ÐµÑ‚ ÑÐ¾Ð²ÐµÑ‚ÑƒÑŽ &quot;Ð·Ð°Ñ‰Ð¸Ñ‚Ð½Ð¸ÐºÐ°Ð¼ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ñ…&quot; Ð¾Ñ‚ÐºÑ€Ñ‹Ñ‚ÑŒ, Ðº Ð¿Ñ€Ð¸Ð¼ÐµÑ€Ñƒ, Ð°Ð½Ð°Ñ‚Ð¾Ð¼Ð¸Ñ‡ÐµÑÐºÐ¸Ð¹ Ð°Ñ‚Ð»Ð°Ñ Ð¿Ð¾ ÑÐ¾Ð±Ð°ÐºÐµ, Ñ€Ð°Ð·Ð´ÐµÐ» &quot;Ð ÐµÐ¿Ñ€Ð¾Ð´ÑƒÐºÑ‚Ð¸Ð²Ð½Ñ‹Ðµ Ð¾Ñ€Ð³Ð°Ð½Ñ‹ ÑÑƒÐºÐ¸&quot;, Ñ…Ð¾Ñ€Ð¾ÑˆÐµÐ½ÑŒÐºÐ¾ Ð¸Ð·ÑƒÑ‡Ð¸Ñ‚ÑŒ ÑÑ‚Ñ€Ð¾ÐµÐ½Ð¸Ðµ Ð¾Ð½Ñ‹Ñ… Ð¸ Ð²ÐºÐ»ÑŽÑ‡Ð¸Ñ‚ÑŒ Ð³Ð¾Ð»Ð¾Ð²Ð½Ð¾Ð¹ Ð¼Ð¾Ð·Ð³, ÐµÑÐ»Ð¸ Ñ‚Ð¾Ñ‚ ÐµÑ‰Ðµ Ð½Ðµ ÑÑŠÐµÐ´ÐµÐ½ Ð½ÐµÐ½Ð°Ð²Ð¸ÑÑ‚ÑŒÑŽ Ðº Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð°Ð¼...)))\nÐ¡Ð°Ð¼Ñ‹Ð¼ Ð¶Ðµ Ð»ÐµÐ½Ð¸Ð²Ñ‹Ð¼ Ð¸ &quot;Ñ‚Ð¾Ð»ÑÑ‚Ñ‹Ð¼&quot; ÑÐ¾Ð¾Ð±Ñ‰Ñƒ Ð¾Ñ‚ÐºÑ€Ñ‹Ñ‚Ð¸Ðµ: Ñƒ ÑÑƒÐºÐ¸(Ñ€Ð°Ð²Ð½Ð¾, ÐºÐ°Ðº Ð¸ Ñƒ Ð»ÑŽÐ±Ð¾Ð¹ ÑÐ°Ð¼ÐºÐ¸ Ð¼Ð»ÐµÐºÐ¾Ð¿Ð¸Ñ‚Ð°ÑŽÑ‰ÐµÐ³Ð¾) ÐµÑÑ‚ÑŒ ÐšÐ›Ð˜Ð¢ÐžÐ !!! Ð˜ Ð Ð•Ð¦Ð•ÐŸÐ¢ÐžÐ Ð« Ð£Ð”ÐžÐ’ÐžÐ›Ð¬Ð¡Ð¢Ð’Ð˜Ð¯!!! Ð˜ Ð”ÐÐ–Ð• Ð­Ð ÐžÐ“Ð•ÐÐÐ«Ð• Ð—ÐžÐÐ«(Ð¶Ð¸Ð²Ð¾Ñ‚, ÑÐ¾ÑÐºÐ¸, Ð½Ð°Ñ€ÑƒÐ¶Ð½Ð°Ñ Ð¿Ð¾Ð²ÐµÑ€Ñ…Ð½Ð¾ÑÑ‚ÑŒ Ð³ÐµÐ½Ð¸Ñ‚Ð°Ð»Ð¸Ð¹, ÑÑ‚Ð¾ Ñƒ ÑÐ¾Ð±Ð°Ðº...)(Ð¢ÐÐš! Ð¡ÐšÐ˜ÐÐ£Ð›Ð˜Ð¡Ð¬ ÐœÐÐ• ÐÐ ÐÐžÐ‘Ð•Ð›Ð•Ð’Ð¡ÐšÐ£Ð® ÐŸÐ Ð•ÐœÐ˜Ð® ÐŸÐž Ð—ÐžÐžÐ¤Ð˜Ð›Ð˜Ð˜, Ð‘Ð«Ð¡Ð¢Ð Ð!!!))))\nÐ˜ Ð¾Ð½Ñ‹Ðµ ÐºÐ»Ð¸Ñ‚Ð¾Ñ€, Ñ€ÐµÑ†ÐµÐ¿Ñ‚Ð¾Ñ€Ñ‹ ÑƒÐ´Ð¾Ð²Ð¾Ð»ÑŒÑÑ‚Ð²Ð¸Ñ Ð¸ ÑÑ€Ð¾Ð³ÐµÐ½Ð½Ñ‹Ðµ Ð·Ð¾Ð½Ñ‹ Ð˜ÐœÐ•ÐÐÐž Ñƒ ÑÑƒÐºÐ¸/ÐºÐ¾Ð±Ñ‹Ð»Ñ‹ Ð¿Ñ€ÐµÐºÑ€Ð°ÑÐ½Ð¾ Ñ€Ð°Ð±Ð¾Ñ‚Ð°ÑŽÑ‚ Ð´Ð°Ð¶Ðµ Ð²Ð½Ðµ Ð¿ÐµÑ€Ð¸Ð¾Ð´Ð° Ñ‚ÐµÑ‡ÐµÐº, Ñ Ñ‚Ð¾Ð¹ Ð»Ð¸ÑˆÑŒ Ð¿Ð¾Ð¿Ñ€Ð°Ð²ÐºÐ¾Ð¹, Ñ‡Ñ‚Ð¾ Ð´Ð»Ñ ÑƒÐ´Ð¾Ð»ÐµÐ²Ñ‚Ð²Ð¾Ñ€ÐµÐ½Ð¸Ñ Ð¾Ð½Ñ‹Ñ… ÑÑƒÐº/ÐºÐ¾Ð±Ñ‹Ð» Ð²Ð½Ðµ Ñ‚ÐµÑ‡ÐºÐ¸ Ð½ÑƒÐ¶Ð½Ð¾ Ð¿Ñ€Ð¸Ð»Ð¾Ð¶Ð¸Ñ‚ÑŒ Ð½ÐµÑÐºÐ¾Ð»ÑŒÐºÐ¾ Ð±Ð¾Ð»ÑŒÑˆÐµ ÑÑ‚Ð°Ñ€Ð°Ð½Ð¸Ñ, Ð¿Ñ€ÐµÐ´Ð²Ð°Ñ€Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ñ… Ð»Ð°ÑÐ¾Ðº, Ð¸ Ð²Ñ€ÐµÐ¼ÐµÐ½Ð¸, Ñ‡ÐµÐ¼ ÐºÐ¾Ð³Ð´Ð° Ð¾Ð½Ð¸ Ð² &quot;Ð¾Ñ…Ð¾Ñ‚Ðµ&quot;.\nÐŸÑ€Ð¾ ÐºÐ¾Ð±ÐµÐ»ÐµÐ¹/Ð¶ÐµÑ€ÐµÐ±Ñ†Ð¾Ð² Ð²Ð¾Ð¾Ð±Ñ‰Ðµ Ð±ÐµÐ· ÐºÐ¾Ð¼Ð¼ÐµÐ½Ñ‚Ð°Ñ€Ð¸ÐµÐ² - Ð´Ð°Ð¶Ðµ ÑÐ°Ð¼Ñ‹Ðµ ÑÑ€Ð¾ÑÑ‚Ð½Ñ‹Ðµ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ñ„Ð¾Ð±Ñ‹ Ð½Ð°Ð²ÐµÑ€Ð½ÑÐºÐ° Ð²ÐºÑƒÑ€ÑÐµ, Ñ‡Ñ‚Ð¾ ÑÐ°Ð¼Ñ†Ñ‹ Ð²Ð¾Ð¾Ð±Ñ‰Ðµ Ð»ÑŽÐ±Ñ‹Ñ… Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ñ…, Ð° Ð½Ðµ Ñ‚Ð¾ÐºÐ° Ð´Ð¾Ð¼Ð°ÑˆÐ½Ð¸Ñ…, Ð¿Ð¾Ð»ÑƒÑ‡Ð°ÑŽÑ‚ Ð¾Ñ‚ ÑÐµÐºÑÐ° ÑƒÐ´Ð¾Ð²Ð¾Ð»ÑŒÑÑ‚Ð²Ð¸Ðµ Ð’Ð¡Ð•Ð“Ð”Ð!\nÐ¢Ð°Ðº Ñ‡Ñ‚Ð¾ Ð»ÑŽÐ±Ð¸Ð¼Ñ‹Ðµ Ð½Ð°Ð¼Ð¸ ÑÑƒÐºÐ¸/ÐºÐ¾Ð±Ñ‹Ð»Ñ‹ Ð²ÑÐµÐ³Ð´Ð° Ð¿Ð¾Ð»ÑƒÑ‡Ð°ÑŽÑ‚ Ð±Ð¾Ð»ÑŒÑˆÐ¾Ðµ ÑƒÐ´Ð¾Ð²Ð¾Ð»ÑŒÑÑ‚Ð²Ð¸Ðµ Ð¾Ñ‚ ÑÐµÐºÑÐ° Ñ Ð½Ð°Ð¼Ð¸, Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð°Ð¼Ð¸, Ð¼Ð¾Ð¶ÐµÑ‚Ðµ Ð½Ðµ ÑÐ¾Ð¼Ð½ÐµÐ²Ð°Ñ‚ÑŒÑÑ!\nÐ’Ñ‚Ð¾Ñ€Ð¾Ð¹ Ð¼Ð¸Ñ„ Ð¾ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð°Ñ… Ñ€Ð°Ð·Ñ€ÑƒÑˆÐµÐ½!\nÐ¢ÐµÐ¿ÐµÑ€ÑŒ Ð¿ÐµÑ€ÐµÐ¹Ð´ÐµÐ¼ Ðº Ñ‚Ð¾Ð¼Ñƒ, Ñ‡Ñ‚Ð¾ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ñ‹ &quot;Ð½ÐµÐ½Ð¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ñ‹Ðµ Ð¸ Ð±Ð¾Ð»ÑŒÐ½Ñ‹Ðµ Ð»ÑŽÐ´Ð¸, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¼ Ð¼ÐµÑÑ‚Ð¾ Ð² ÐšÐ°Ñ‰ÐµÐ½ÐºÐ¾/Ð³Ð°Ð·Ð¾Ð²Ð¾Ð¹ ÐºÐ°Ð¼ÐµÑ€Ðµ/Ñ‚.Ð´.&quot;\nÐÐ° ÑÑ‡ÐµÑ‚ ÑÑ‚Ð¾Ð³Ð¾ Ñ‚Ð¾Ð³Ð´Ð° Ñƒ Ð¼ÐµÐ½Ñ Ñ‚Ð°ÐºÐ¾Ð¹ Ð²Ð¾Ð¿Ñ€Ð¾Ñ Ðº Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ñ„Ð¾Ð±Ð°Ð¼: Ð° Ð²Ñ‹ Ð² ÐºÑƒÑ€ÑÐµ, Ñ‡Ñ‚Ð¾ Ð²ÑÐµÐ³Ð¾ Ð»Ð¸ÑˆÑŒ ÑÐ¾Ñ‚Ð½ÑŽ Ð»ÐµÑ‚ Ð½Ð°Ð·Ð°Ð´ Ð² Ð¿Ñ€Ð¾ÑÐ²ÐµÑ‰ÐµÐ½Ð½Ð¾Ð¹ Ð•Ð²Ñ€Ð¾Ð¿Ðµ Ð¾Ð½Ð°Ð½Ð¸Ð·Ð¼ ÑÑ‡Ð¸Ñ‚Ð°Ð»ÑÑ Ñ‚ÑÐ¶ÐµÐ»ÐµÐ¹ÑˆÐµÐ¹ Ð¿ÑÐ¸Ñ…Ð¸Ñ‡ÐµÑÐºÐ¾Ð¹ Ð±Ð¾Ð»ÐµÐ·Ð½ÑŒÑŽ?\nÐ“Ð¾Ð¼Ð¾ÑÐµÐºÑÑƒÐ°Ð»Ð¸Ð·Ð¼/Ð»ÐµÑÐ±Ð¸ÑÐ½ÑÑ‚Ð²Ð¾, Ð° Ñ‚Ð°ÐºÐ¶Ðµ Ð°Ð½Ð°Ð» Ð¸ Ð¾Ñ€Ð°Ð», Ñ‚Ð°Ðº Ð²Ð¾Ð¾Ð±Ñ‰Ðµ Ñ‚Ð¾Ð³Ð´Ð° Ð·Ð°Ð¿Ð¸ÑÐ°Ð»Ð¸ Ð² ÑÐ¼ÐµÑ€Ñ‚Ð½Ñ‹Ðµ Ð³Ñ€ÐµÑ…Ð¸?\nÐÐ¾Ñ€Ð¼Ð¾Ð¹ ÑÑ‡Ð¸Ñ‚Ð°Ð»ÑÑ Ð»Ð¸ÑˆÑŒ ÑÐµÐºÑ Ð² Ð¼Ð¸ÑÑÐ¸Ð¾Ð½ÐµÑ€ÑÐºÐ¾Ð¹ Ð¿Ð¾Ð·Ðµ, Ð² Ð²Ð°Ð³Ð¸Ð½Ñƒ, Ð¸ Ð±ÐµÐ· Ð¿Ñ€ÐµÐ·ÐµÑ€Ð²Ð°Ñ‚Ð¸Ð²Ð¾Ð²!\nÐ¢Ð°Ðº Ñ‡Ñ‚Ð¾ Ð¿Ñ€Ð¸Ð·Ð°Ð´ÑƒÐ¼Ð°Ð¹Ñ‚ÐµÑÑŒ Ð½Ð°Ð´ ÑÑ‚Ð¸Ð¼...\nÐŸÐ¾ Ð½Ð°ÑˆÐµÐ¼Ñƒ, Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð², ÑÐºÑ€Ð¾Ð¼Ð½Ð¾Ð¼Ñƒ Ð¼Ð½ÐµÐ½Ð¸ÑŽ, Ð²ÑÐµ, Ñ‡Ñ‚Ð¾ ÐÐ• Ð’Ð Ð•Ð”Ð˜Ð¢, ÐÐ• ÐŸÐ Ð•Ð”Ð¡Ð¢ÐÐ’Ð›Ð¯Ð•Ð¢ ÐžÐŸÐÐ¡ÐÐžÐ¡Ð¢Ð˜ Ð˜ Ð‘ÐžÐ›Ð˜ Ð´Ð»Ñ ÑÐµÐºÑÑƒÐ°Ð»ÑŒÐ½Ñ‹Ñ… Ð¿Ð°Ñ€Ñ‚Ð½ÐµÑ€Ð¾Ð²(Ð±ÑƒÐ´ÑŒ Ñ‚Ð¾Ñ‚ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐº Ð¸Ð»Ð¸ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ð¾Ðµ), Ð¸ Ð½Ðµ Ð¿Ñ€ÐµÐ´ÑÑ‚Ð°Ð²Ð»ÑÐµÑ‚ Ð½ÐµÑƒÐ´Ð¾Ð±ÑÑ‚Ð² Ð´Ð»Ñ Ð¾Ð±Ñ‰ÐµÑÑ‚Ð²Ð°, Ñ‚Ð¾ Ð½ÐµÐ»ÑŒÐ·Ñ ÑÑ‡Ð¸Ñ‚Ð°Ñ‚ÑŒ Ð½ÐµÐ½Ð¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ñ‹Ð¼!\nÐ¢Ð°ÐºÐ¶Ðµ, Ð²Ð¾Ð¿Ñ€ÐµÐºÐ¸ Ð´Ð¾ÑÑƒÐ¶ÐµÐ¼Ñƒ Ð¼Ð½ÐµÐ½Ð¸ÑŽ, Ñƒ Ð±Ð¾Ð»ÑŒÑˆÐ¸Ð½ÑÑ‚Ð²Ð° Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð² Ð²ÑÐµ Ð² Ð¿Ð¾Ñ€ÑÐ´ÐºÐµ Ñ Ð»Ð¸Ñ‡Ð½Ð¾Ð¹ Ð¸ Ð¾Ð±Ñ‰ÐµÑÑ‚Ð²ÐµÐ½Ð½Ð¾Ð¹ Ð¶Ð¸Ð·Ð½ÑŒÑŽ. ÐŸÐ¾Ð´Ð°Ð²Ð»ÑÑŽÑ‰Ð°Ñ Ñ‡Ð°ÑÑ‚ÑŒ Ð½Ð°ÑˆÐµÐ¹ Ð±Ñ€Ð°Ñ‚Ð¸Ð¸ - ÑƒÐ²Ð°Ð¶Ð°ÐµÐ¼Ñ‹Ðµ Ð² Ð¾Ð±Ñ‰ÐµÑÑ‚Ð²Ðµ Ð»ÑŽÐ´Ð¸: Ð¸Ð½Ð¶ÐµÐ½ÐµÑ€Ñ‹, Ð²Ñ€Ð°Ñ‡Ð¸, Ð¿Ñ€Ð¾Ñ„ÐµÑÑÐ¾Ñ€Ð°, Ð¿Ñ€ÐµÐ¿Ð¾Ð´Ð¾Ð²Ð°Ñ‚ÐµÐ»Ð¸, Ñ€Ð°Ð±Ð¾Ñ‡Ð¸Ðµ Ð²Ñ‹ÑÐ¾ÐºÐ¾Ð¹, Ð¸ Ð½Ðµ Ð¾Ñ‡ÐµÐ½ÑŒ, ÐºÐ²Ð°Ð»Ð¸Ñ„Ð¸ÐºÐ°Ñ†Ð¸Ð¸, ÑƒÑ‡Ð¸Ñ‚ÐµÐ»Ñ... Ð˜ Ñƒ Ð±Ð¾Ð»ÑŒÑˆÐ¸Ð½ÑÑ‚Ð²Ð° Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð² ÐµÑÑ‚ÑŒ Ð´ÐµÐ²ÑƒÑˆÐºÐ¸, ÑÐµÐ¼ÑŒÐ¸ Ñ Ð´ÐµÑ‚ÑŒÐ¼Ð¸...\nÐŸÑ€Ð¾ÑÑ‚Ð¾ Ð¼Ñ‹ Ð²Ð¸Ð´Ð¸Ð¼ Ð² ÑÐ¾Ð±Ð°ÐºÐ°Ñ…/Ð»Ð¾ÑˆÐ°Ð´ÑÑ…/Ð¾ÑÐ»Ð°Ñ… Ð½ÐµÑ‡Ñ‚Ð¾ Ð±Ð¾Ð»ÑŒÑˆÐµÐµ, Ñ‡ÐµÐ¼ Ð¿Ñ€Ð¾ÑÑ‚Ð¾ Ð´Ñ€ÑƒÐ·ÐµÐ¹ Ð¸Ð»Ð¸ Ð½Ð°Ð¿Ð°Ñ€Ð½Ð¸ÐºÐ¾Ð²...)))\nÐ¢Ð°Ðº Ñ‡Ñ‚Ð¾, Ð¼Ð¸Ñ„ Ð¾ &quot;Ð½ÐµÐ½Ð¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ð¾ÑÑ‚Ð¸ Ð¸ ÑƒÐ±Ð¾Ð³Ð¾ÑÑ‚Ð¸ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð²&quot; Ñ‚Ð°ÐºÐ¶Ðµ Ð¿Ð¾Ñ€ÑƒÑˆÐµÐ½!\nÐ˜, Ð¿Ð¾Ð¶Ð°Ð»ÑƒÐ¹, ÑÐ°Ð¼Ð¾Ðµ Ð³Ð»Ð°Ð²Ð½Ð¾Ðµ, Ñ‡ÐµÐ³Ð¾ Ð½Ð¸ÐºÐ°Ðº Ð½Ðµ Ð¼Ð¾Ð³ÑƒÑ‚ Ð¿Ð¾Ð½ÑÑ‚ÑŒ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð½ÐµÐ½Ð°Ð²Ð¸ÑÑ‚Ð½Ð¸ÐºÐ¸(Ð° Ð·Ð°Ð¾Ð´Ð½Ð¾, Ð¸ Ð¿Ð¾ÑÑÐ½ÐµÐ½Ð¸Ðµ Ñ‚Ð¾Ð³Ð¾, Ð¿Ð¾Ñ‡ÐµÐ¼Ñƒ Ñ Ð²ÐµÐ´Ñƒ Ñ€ÐµÑ‡ÑŒ Ð² Ð¾Ñ‚Ð½Ð¾ÑˆÐµÐ½Ð¸Ð¸ Ð»Ð¸ÑˆÑŒ Ð¢ÐžÐ›Ð¬ÐšÐž ÑÐ¾Ð±Ð°Ðº, Ð»Ð¾ÑˆÐ°Ð´ÐµÐ¹ Ð¸ Ð¾ÑÐ»Ð¾Ð²) - Ð¿Ð¾Ñ‡ÐµÐ¼Ñƒ Ð¶Ðµ Ð¼Ñ‹, Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ñ‹, Ð·Ð°Ð½Ð¸Ð¼Ð°ÐµÐ¼ÑÑ ÑÐµÐºÑÐ¾Ð¼ Ñ Ð½Ð°ÑˆÐ¸Ð¼Ð¸ Ð»ÑŽÐ±Ð¸Ð¼Ñ‹Ð¼Ð¸ ÑÐ¾Ð±Ð°ÐºÐ°Ð¼Ð¸, Ð»Ð¾ÑˆÐ°Ð´ÑŒÐ¼Ð¸ Ð¸ Ð¾ÑÐ»Ð°Ð¼Ð¸?\nÐ’ÑÐµ Ð¿Ñ€Ð¾ÑÑ‚Ð¾ - Ð¸Ð¼ÐµÐ½Ð½Ð¾ ÑÑ‚Ð¸ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ðµ Ð•Ð”Ð˜ÐÐ¡Ð¢Ð’Ð•ÐÐÐ«Ð• Ð¸Ð· Ð²ÑÐµÐ³Ð¾ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ð¾Ð³Ð¾ Ð¼Ð¸Ñ€Ð°(Ð½Ñƒ Ð¼Ð¾Ð¶, ÐµÑ‰Ðµ Ð´ÐµÐ»ÑŒÑ„Ð¸Ð½Ñ‹, Ð¾Ð´Ð½Ð°ÐºÐ¾ Ð¶, Ð¾Ð½Ð¸ Ð´Ð¸ÐºÐ¸Ðµ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ðµ, Ñ‚Ð°Ðº Ñ‡Ñ‚Ð¾ Ð½Ðµ Ð¼Ð¾Ð³ÑƒÑ‚ Ñ€Ð°ÑÑÐ¼Ð°Ñ‚Ñ€Ð¸Ð²Ð°Ñ‚ÑŒÑÑ Ð² ÐºÐ¾Ð½Ñ‚ÐµÐºÑÑ‚Ðµ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¸Ð¸, Ð¿Ð¾ÑÐµÐ¼Ñƒ, Ð±Ð¾Ð»ÑŒÑˆÐµ Ð¾ Ð½Ð¸Ñ… Ð½Ð¸ ÑÐ»Ð¾Ð²Ð°!), ÐºÑ‚Ð¾ ÑÑ‡Ð¸Ñ‚Ð°ÑŽÑ‚ Ð½Ð°Ñ, Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ¾Ð², Ð½Ðµ ÐµÐ´Ð¾Ð¹, Ð½Ðµ Ñ…Ð¸Ñ‰Ð½Ð¸ÐºÐ¾Ð¼, Ð½Ðµ ÐºÐ¾Ð½ÐºÑƒÑ€ÐµÐ½Ñ‚Ð°Ð¼Ð¸/Ð²Ñ€Ð°Ð³Ð°Ð¼Ð¸/ÑƒÐ³Ñ€Ð¾Ð·Ð¾Ð¹, Ð° Ð¸Ð¼ÐµÐ½Ð½Ð¾ Ð´Ñ€ÑƒÐ·ÑŒÑÐ¼Ð¸, Ð¿Ð°Ñ€Ñ‚Ð½ÐµÑ€Ð°Ð¼Ð¸, Ð»ÑŽÐ±Ð¾Ð²Ð½Ð¸ÐºÐ°Ð¼Ð¸, Ð½Ð°ÐºÐ¾Ð½ÐµÑ†.\nÐ’ÐµÐ´ÑŒ, ÑÐ¾Ð±ÑÑ‚Ð²ÐµÐ½Ð½Ð¾, Ð¼Ñ‹, Ð»ÑŽÐ´Ð¸, Ð¸ ÑÐ´ÐµÐ»Ð°Ð»Ð¸ Ð¸Ñ… Ñ‚Ð°ÐºÐ¸Ð¼Ð¸, ÑÐ´ÐµÐ»Ð°Ð»Ð¸ Ð¸Ñ… Ð½Ðµ ÐºÐ°Ðº ÐºÐ¾Ñ€Ð¼/Ñ‚ÑÐ³Ð»Ð¾Ð²Ð°Ñ ÑÐ¸Ð»Ð° ÑÐµÐ±Ðµ(ÐºÐ¾Ñ€Ð¾Ð²Ñ‹, ÐºÐ¾Ð·Ñ‹, Ð¾Ð²Ñ†Ñ‹, ÑÐ²Ð¸Ð½ÑŒÐ¸, Ð¾Ð»ÐµÐ½Ð¸), Ð° ÐºÐ°Ðº Ð¿Ð¾Ð¼Ð¾ÑˆÐ½Ð¸ÐºÐ¾Ð² Ð² ÑÐ»Ð¾Ð¶Ð½Ð¾Ð¹ Ñ€Ð°Ð±Ð¾Ñ‚Ðµ, Ñ‚Ñ€ÐµÐ±ÑƒÑŽÑ‰ÐµÐ¹ Ð½Ð°Ð»Ð¸Ñ‡Ð¸Ñ ÑÐ¸Ð»ÑŒÐ½Ð¾Ð³Ð¾ ÑƒÐ¼Ð° Ð¸ Ð¿Ñ€ÐµÐºÑ€Ð°ÑÐ½Ð¾Ð³Ð¾ ÑƒÐ¼ÐµÐ½Ð¸Ñ Ñ€Ð°Ð±Ð¾Ñ‚Ð°Ñ‚ÑŒ Ð² ÐºÐ¾Ð¼Ð°Ð½Ð´Ðµ, Ð² ÐºÐ¾Ð½Ñ†Ðµ ÐºÐ¾Ð½Ñ†Ð¾Ð², ÐºÐ°Ðº Ð¿Ñ€Ð¾ÑÑ‚Ð¾ Ñ‡Ð»ÐµÐ½Ð¾Ð² Ð½Ð°ÑˆÐ¸Ñ… ÑÐµÐ¼ÐµÐ¹...\nÐ˜ Ñ‚Ð°Ðº Ð²Ñ‹ÑˆÐ»Ð¾ Ð² Ð¿Ñ€Ð¾Ñ†ÐµÑÑÐµ ÑÐ¾Ð·Ð´Ð°Ð½Ð¸Ñ Ð»ÑŽÐ´ÑŒÐ¼Ð¸ Ð´Ð¾Ð¼Ð°ÑˆÐ½Ð¸Ñ… Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ñ…, Ñ‡Ñ‚Ð¾ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ ÑÐ¾Ð±Ð°ÐºÐ¸, Ð»Ð¾ÑˆÐ°Ð´Ð¸ Ð¸ Ð¾ÑÐ»Ñ‹ Ð•Ð”Ð˜ÐÐ¡Ð¢Ð’Ð•ÐÐÐ«Ð• Ð¸Ð· Ð²ÑÐµÑ… Ð”ÐžÐœÐÐ¨ÐÐ˜Ð¥ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ñ…, ÐºÑ‚Ð¾ ÑÐ²Ð»ÑÑŽÑ‚ÑÑ ÑÐ°Ð¼Ñ‹Ð¼Ð¸ ÑÐ¼Ð¾Ñ†Ð¸Ð¾Ð½Ð°Ð»ÑŒÐ½Ñ‹Ð¼Ð¸, ÑÐ°Ð¼Ñ‹Ð¼Ð¸ Ð²Ñ‹ÑÐ¾ÐºÐ¾ÑÐ¾Ñ†Ð¸Ð°Ð»ÑŒÐ½Ñ‹Ð¼Ð¸, ÑÐ°Ð¼Ñ‹Ð¼Ð¸ Ð²Ñ‹ÑÐ¾ÐºÐ¾Ñ€Ð°Ð·Ð²Ð¸Ñ‚Ñ‹Ð¼Ð¸ Ð² Ð¿Ð»Ð°Ð½Ðµ Ð¸Ð½Ñ‚ÐµÐ»Ð»ÐµÐºÑ‚Ð°, Ð»Ð¾Ð³Ð¸ÐºÐ¸ Ð¸ ÑƒÐ¼Ð°, Ð¸Ð¼ÐµÑŽÑ‰Ð¸Ð¼Ð¸ ÑÐ°Ð¼ÑƒÑŽ Ð²Ñ‹ÑÐ¾ÐºÑƒÑŽ ÑÑ‚ÐµÐ¿ÐµÐ½ÑŒ ÑÐ°Ð¼Ð¾Ð¾ÑÐ¾Ð·Ð½Ð°Ð½Ð¸Ñ(Ð½Ð°Ð»Ð¸Ñ‡Ð¸Ðµ ÑÐ²Ð¾ÐµÐ³Ð¾ &quot;Ð¯&quot;, Ð¾ÑÐ¾Ð·Ð½Ð°Ð½Ð¸Ðµ ÑÐ²Ð¾ÐµÐ¹ Ð»Ð¸Ñ‡Ð½Ð¾ÑÑ‚Ð¸, Ð¾ÑÐ¾Ð·Ð½Ð°Ð½Ð¸Ðµ ÑÐ²Ð¾Ð¸Ñ… Ð¶ÐµÐ»Ð°Ð½Ð¸Ð¹, Ð·Ð°Ñ‡Ð°Ñ‚ÐºÐ¸ Ð°Ð±ÑÑ‚Ñ€Ð°ÐºÑ‚Ð½Ð¾Ð¹ Ð»Ð¾Ð³Ð¸ÐºÐ¸) Ð¸Ð· Ð´Ð¾Ð¼Ð°ÑˆÐ½Ð¸Ñ… Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ñ…, Ð¸ Ð³Ð»Ð°Ð²Ð½Ð¾Ðµ: Ð¾Ð½Ð¸ Ð§Ð•Ð›ÐžÐ’Ð•ÐšÐžÐžÐ Ð˜Ð•ÐÐ¢Ð˜Ð ÐžÐ’ÐÐÐÐ«! ÐÑƒ, Ð¸ ÐºÐ¾Ð½ÐµÑ‡Ð½Ð¾, Ñ€Ð°Ð·Ð¼ÐµÑ€ Ñ‚Ð¾Ð¶Ðµ Ð²Ð°Ð¶ÐµÐ½, Ð¸Ð±Ð¾ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ ÑÐ°Ð¼ÐºÐ¸ Ð¸ ÑÐ°Ð¼Ñ†Ñ‹ ÑÐ¾Ð±Ð°Ðº, Ð»Ð¾ÑˆÐ°Ð´ÐµÐ¹ Ð¸ Ð¾ÑÐ»Ð¾Ð² Ð¼Ð¾Ð³ÑƒÑ‚ Ð±Ñ‹Ñ‚ÑŒ Ð¿Ð¾Ð»Ð½Ð¾Ñ†ÐµÐ½Ð½Ñ‹Ð¼Ð¸ ÑÐµÐºÑÐ¿Ð°Ñ€Ñ‚Ð½ÐµÑ€Ð°Ð¼Ð¸(Ð±ÐµÐ· Ñ€Ð¸ÑÐºÐ° Ð½Ð°Ð½ÐµÑÑ‚Ð¸/Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ Ñ‚Ñ€Ð°Ð²Ð¼Ñ‹ Ð´Ñ€ÑƒÐ³ Ð´Ñ€ÑƒÐ³Ñƒ Ð¿Ñ€Ð¸ Ð½Ð¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ð¾Ð¼, Ð¾Ð±Ð¾ÑŽÐ´Ð½Ð¾ Ð¿Ñ€Ð¸Ð½ÑÑ‚Ð¾Ð¼ ÑÐµÐºÑÐµ) Ð´Ð»Ñ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð²-Ð¼ÑƒÐ¶Ñ‡Ð¸Ð½/Ð¶ÐµÐ½Ñ‰Ð¸Ð½.\nÐÐµ ÑÐ¾ ÑÐ²Ð¸Ð½ÑŒÑÐ¼Ð¸, Ð½Ðµ Ñ ÐºÐ¾Ñ€Ð¾Ð²Ð°Ð¼Ð¸, Ð½Ðµ Ñ Ð¾Ð²Ñ†Ð°Ð¼Ð¸, Ð¸ Ð´Ð°Ð¶Ðµ Ð½Ðµ Ñ ÐºÐ¾Ð·Ð°Ð¼Ð¸, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ñ… Ð²Ñ‹Ð²ÐµÐ»Ð¸ Ð½Ðµ ÐºÐ°Ðº ÐºÐ¾Ð¼Ð¿Ð°Ð½ÑŒÐ¾Ð½Ð¾Ð² Ð¸ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð½Ð¸ÐºÐ¾Ð² Ð½Ð°Ð¼, Ð° Ð»Ð¸ÑˆÑŒ ÐºÐ°Ðº ÐµÐ´Ñƒ Ð¸ Ð¼Ð°Ñ‚ÐµÑ€Ð¸Ð°Ð»Ñ‹ Ð½Ð° Ð¾Ð´ÐµÐ¶Ð´Ñƒ/Ð¾Ð±ÑƒÐ²ÑŒ, Ð² ÑÐ¸Ð»Ñƒ Ñ‡ÐµÐ³Ð¾ Ð¾Ð½Ð¸ Ð½Ðµ Ð¾Ð±Ð»Ð°Ð´Ð°ÑŽÑ‚ Ñ‚Ð¾Ð¹ ÑÑ‚ÐµÐ¿ÐµÐ½ÑŒÑŽ ÑÐ¾Ñ†Ð¸Ð°Ð»Ð¸Ð·Ð°Ñ†Ð¸Ð¸, ÑÐ¼Ð¾Ñ†Ð¸Ð¾Ð½Ð°Ð»ÑŒÐ½Ð¾ÑÑ‚Ð¸, ÑƒÐ¼ÐµÐ½Ð¸Ñ Ð¾ÑÐ¾Ð·Ð½Ð°Ð²Ð°Ñ‚ÑŒ ÑÐµÐ±Ñ, ÐºÐ°Ðº Ð»Ð¸Ñ‡Ð½Ð¾ÑÑ‚ÑŒ; Ð¸Ð½Ñ‚ÐµÐ»Ð»ÐµÐºÑ‚Ð° Ð¸ ÑƒÐ¼Ð°, Ð° Ð³Ð»Ð°Ð²Ð½Ð¾Ðµ - Ð¾Ñ‚ÑÑƒÑ‚ÑÑ‚Ð²Ð¸Ðµ Ð§Ð•Ð›ÐžÐ’Ð•ÐšÐžÐžÐ Ð˜Ð•ÐÐ¢Ð˜Ð ÐžÐ’ÐÐÐÐžÐ¡Ð¢Ð˜, Ñ‡Ñ‚Ð¾Ð±Ñ‹ ÑƒÐ¼ÐµÑ‚ÑŒ ÑÑ‚Ñ€Ð¾Ð¸Ñ‚ÑŒ Ñ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ¾Ð¼ Ð½Ð°ÑÑ‚Ð¾ÑÑ‰Ð¸Ðµ ÑÐ¼Ð¾Ñ†Ð¸Ð¾Ð½Ð°Ð»ÑŒÐ½Ñ‹Ðµ Ð²Ð·Ð°Ð¸Ð¼Ð¾Ð¾Ñ‚Ð½Ð¾ÑˆÐµÐ½Ð¸Ñ, Ð° Ð»Ð¸ÑˆÑŒ, Ð¿Ð¾-Ð¼Ð¾ÐµÐ¼Ñƒ ÑÐºÑ€Ð¾Ð¼Ð½Ð¾Ð¼Ñƒ Ð¼Ð½ÐµÐ½Ð¸ÑŽ, Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ Ð½Ð¸Ð¼Ð¸(ÑÐ¾Ð±Ð°ÐºÐ°Ð¼Ð¸, Ð»Ð¾ÑˆÐ°Ð´ÑŒÐ¼Ð¸, Ð¾ÑÐ»Ð°Ð¼Ð¸) Ð¼Ð¾Ð¶Ð½Ð¾ Ð¿Ð¾ÑÑ‚Ñ€Ð¾Ð¸Ñ‚ÑŒ ÐÐÐ¡Ð¢ÐžÐ¯Ð©Ð˜Ð• Ð˜Ð¡ÐšÐ Ð•ÐÐÐ˜Ð• Ð’Ð—ÐÐ˜ÐœÐžÐžÐ¢ÐÐžÐ¨Ð•ÐÐ˜Ð¯, Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð¾Ð½Ð¸ Ð¸Ð· Ð²ÑÐµÐ³Ð¾ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ð¾Ð³Ð¾ Ð¼Ð¸Ñ€Ð°, Ð¼Ð¾Ð³ÑƒÑ‚ Ð¸ÑÐ¿Ñ‹Ñ‚Ñ‹Ð²Ð°Ñ‚ÑŒ Ðº Ð½Ð°Ð¼, Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ°Ð¼, Ð¸ÑÐºÑ€ÐµÐ½Ð½ÑŽÑŽ Ð»ÑŽÐ±Ð¾Ð²ÑŒ, Ð»Ð°ÑÐºÑƒ, Ð´Ñ€ÑƒÐ¶Ð±Ñƒ, ÑÐµÐºÑÑƒÐ°Ð»ÑŒÐ½Ñ‹Ðµ Ñ‡ÑƒÐ²ÑÑ‚Ð²Ð°, Ð² Ð¾Ð±Ñ‰ÐµÐ¼, Ð²ÐµÑÑ‚Ð¸ ÑÐµÐ±Ñ Ñ Ð½Ð°Ð¼Ð¸ Ð½Ð° Ñ€Ð°Ð²Ð½Ñ‹Ñ…, Ñ‚Ð°ÐºÐ¶Ðµ, ÐºÐ°Ðº Ð¸ Ñ Ð¿Ñ€ÐµÐ´ÑÑ‚Ð°Ð²Ð¸Ñ‚ÐµÐ»ÑÐ¼Ð¸ ÑÐ²Ð¾Ð¸Ñ… Ð²Ð¸Ð´Ð¾Ð².\nÐŸÐ¾ÑÐµÐ¼Ñƒ, Ð±Ð¾Ð»ÑŒÑˆÐ°Ñ Ñ‡Ð°ÑÑ‚ÑŒ Ð½Ð°ÑÑ‚Ð¾ÑÑ‰Ð¸Ñ… Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð² Ð¿Ñ€Ð¸Ð·Ð½Ð°ÑŽÑ‚ Ð² ÐºÐ°Ñ‡ÐµÑÑ‚Ð²Ðµ Ð¿Ð¾Ð»Ð½Ð¾Ñ†ÐµÐ½Ð½Ñ‹Ñ… ÑÐµÐºÑÐ¿Ð°Ñ€Ñ‚Ð½ÐµÑ€Ð¾Ð² Ð»Ð¸ÑˆÑŒ ÑÐ¾Ð±Ð°Ðº, Ð»Ð¾ÑˆÐ°Ð´ÐµÐ¹ Ð¸ Ð¾ÑÐ»Ð¾Ð²; Ñ‡Ñ‚Ð¾ Ð´Ð¾ Ñ‚ÐµÑ…, ÐºÑ‚Ð¾ Ð·Ð°Ð½Ð¸Ð¼Ð°ÐµÑ‚ÑÑ ÑÐµÐºÑÐ¾Ð¼ Ñ &quot;Ð¼ÑÑÐ¾Ð¼&quot;(ÐºÐ¾Ñ€Ð¾Ð²Ñ‹, Ð¾Ð²Ñ†Ñ‹,..), Ñ‚Ð¾ Ð¸Ñ… Ð¼Ð¾Ð¶Ð½Ð¾ Ð¾Ñ‚Ð½ÐµÑÑ‚Ð¸ Ðº Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð°Ð¼ Ñ Ð½ÐµÐºÐ¾Ñ‚Ð¾Ñ€Ð¾Ð¹ Ð¾Ð³Ð¾Ð²Ð¾Ñ€ÐºÐ¾Ð¹: Ð²ÑÐµ-Ñ‚Ð°ÐºÐ¸ &quot;Ð¼ÑÑÐ¾&quot;, Ð¿Ð¾ Ð¼Ð¾ÐµÐ¼Ñƒ Ð¼Ð½ÐµÐ½Ð¸ÑŽ, Ð½ÐµÐ»ÑŒÐ·Ñ ÑÑ‡Ð¸Ñ‚Ð°Ñ‚ÑŒ Ð¿Ð¾Ð»Ð½Ð¾Ñ†ÐµÐ½Ð½Ñ‹Ð¼ ÑÐµÐºÑÐ¿Ð°Ñ€Ñ‚Ð½ÐµÑ€Ð¾Ð¼ Ð² ÑÐ¸Ð»Ñƒ Ð¾Ð³Ñ€Ð°Ð½Ð¸Ñ‡ÐµÐ½Ð½Ð¾ÑÑ‚Ð¸ Ð¾ÑÐ¾Ð·Ð½Ð°Ð½Ð¸Ñ ÑÐµÐ±Ñ Ð¸ Ð¿Ð¾Ð»Ð½Ð¾Ñ†ÐµÐ½Ð½Ð¾Ð³Ð¾ Ð¾ÑÐ¾Ð·Ð½Ð°Ð½Ð¸Ñ ÑÐµÐºÑÐ° ÐºÐ°Ðº Ñ‚Ð°ÐºÐ¾Ð²Ð¾Ð³Ð¾...\nÐ ÐµÑ‰Ðµ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ðµ Ð½Ð¸ÐºÐ¾Ð³Ð´Ð° Ð½Ðµ Ð¿Ñ€ÐµÐ´Ð°ÑŽÑ‚ Ð½Ð°Ñ(Ð¿Ñ€Ð¸Ð¼ÐµÑ€ Ð¥Ð°Ñ‚Ð¸ÐºÐ¾ Ð¸ Ð¼Ð½Ð¾Ð³Ð¸Ñ… Ð´Ñ€ÑƒÐ³Ð¸Ñ…, Ð¿Ð¾Ð´Ð¾Ð±Ð½Ñ‹Ñ… ÐµÐ¼Ñƒ), Ð² Ð¾Ñ‚Ð»Ð¸Ñ‡Ð¸Ð¸ Ð¾Ñ‚ &quot;Ñ†Ð°Ñ€Ñ Ð¿Ð»Ð°Ð½ÐµÑ‚Ñ‹&quot;, Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ðµ Ð½Ðµ ÑÑ‚Ñ€Ð¾ÑÑ‚ Ð¸Ð½Ñ‚Ñ€Ð¸Ð³, Ð½Ðµ Ð¿Ð»ÐµÑ‚ÑƒÑ‚ ÑÐ¿Ð»ÐµÑ‚ÐµÐ½...\nÐ˜ Ð¼Ñ‹, Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ñ‹, Ð¾Ñ‚Ð²ÐµÑ‡Ð°ÐµÐ¼ Ð¸Ð¼ Ñ‚ÐµÐ¼ Ð¶Ðµ, Ð²ÐµÐ´ÐµÐ¼ Ñ Ð½Ð¸Ð¼Ð¸ Ñ‚Ð°ÐºÐ¶Ðµ Ð½Ð° Ñ€Ð°Ð²Ð½Ñ‹Ñ…, Ð° Ð½ÐµÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð¸Ð· Ð½Ð°ÑˆÐµÐ¹ Ð±Ñ€Ð°Ñ‚Ð¸Ð¸ Ñ‡Ð°ÑÑ‚Ð¾ Ð´Ð°Ð¶Ðµ ÑÑ‚Ð°Ð²ÑÑ‚ ÑÐ²Ð¾Ð¸Ñ… Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ñ… Ð²Ñ‹ÑˆÐµ ÑÐµÐ±Ñ; Ð¸ ÐµÑÐ»Ð¸ Ð½Ð°ÑˆÐ¸ Ð»ÑŽÐ±Ð¸Ð¼Ñ†Ñ‹ Ñ‚ÑÐ¶ÐµÐ»Ð¾ Ð·Ð°Ð±Ð¾Ð»ÐµÐ²Ð°ÑŽÑ‚, Ñ‚Ð¾ Ð¼Ñ‹ Ð¿Ñ€Ð¸Ð»Ð°Ð³Ð°ÐµÐ¼ Ð²ÑÐµ ÑƒÑÐ¸Ð»Ð¸Ñ, Ñ„Ð¸Ð½Ð°Ð½ÑÑ‹, Ð²Ñ€ÐµÐ¼Ñ, Ñ‡Ñ‚Ð¾Ð±Ñ‹ ÑÐ¿Ð°ÑÑ‚Ð¸ Ð½Ð°ÑˆÐ¸Ñ… Ð»ÑŽÐ±Ð¸Ð¼Ñ‹Ñ…, ÐºÐ¾Ð³Ð´Ð° ÐºÐ°Ðº Ð¼Ð½Ð¾Ð³Ð¸Ðµ(Ð½Ð¾ Ð½Ðµ Ð²ÑÐµ) ÑƒÐ²Ð°Ð¶Ð°ÐµÐ¼Ñ‹Ðµ Ð¾Ð±Ñ‰ÐµÑÑ‚Ð²Ð¾Ð¼ ÐÐ•Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ñ‹, Ð½Ðµ Ñ€Ð°Ð·Ð´ÑƒÐ¼Ñ‹Ð²Ð°Ñ, ÑƒÑÑ‹Ð¿Ð»ÑÑŽÑ‚ Ñ‚ÑÐ¶ÐµÐ»Ð¾Ð±Ð¾Ð»ÑŒÐ½Ñ‹Ñ… ÑÐºÐ¾Ð±Ñ‹ &quot;Ð»ÑŽÐ±Ð¸Ð¼Ñ‹Ñ…&quot; Ð¸Ð¼Ð¸ Ð¿Ð¸Ñ‚Ð¾Ð¼Ñ†ÐµÐ²...\nÐ ÐµÑ‰Ðµ Ð¼ÐµÐ½Ñ Ð·Ð°Ð±Ð°Ð²Ð»ÑÑŽÑ‚ ÑƒÑ‚Ð²ÐµÑ€Ð¶Ð´ÐµÐ½Ð¸Ñ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ñ„Ð¾Ð±Ð¾Ð², Ñ‡Ñ‚Ð¾, Ð½Ð°Ð¿Ñ€Ð¸Ð¼ÐµÑ€, ÑÐ¾Ð±Ð°ÐºÐ°, ÐºÐ°Ðº Ñ€ÐµÐ±ÐµÐ½Ð¾Ðº, Ð½Ðµ Ð¿Ð¾Ð½Ð¸Ð¼Ð°ÐµÑ‚, Ñ‡Ñ‚Ð¾ Ñ Ð½ÐµÐ¹ Ð´ÐµÐ»Ð°ÑŽÑ‚, Ñ‡ÐµÐ¼ Ð¸ Ð¿Ð¾Ð»ÑŒÐ·ÑƒÑŽÑ‚ÑÑ &quot;Ð³Ð°Ð´ÐºÐ¸Ðµ Ð¸ Ð¿Ð¾Ñ…Ð¾Ñ‚Ð»Ð¸Ð²Ñ‹Ðµ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ñ‹&quot;, Ð° Ñ‚Ð°ÐºÐ¶Ðµ Ð²Ñ‹Ñ‚ÐµÐºÐ°ÑŽÑ‰ÐµÐµ Ð¾Ñ‚ÑÑŽÐ´Ð° ÑÑ€Ð°Ð²Ð½ÐµÐ½Ð¸Ðµ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð² Ñ Ð¿ÐµÐ´Ð¾Ñ„Ð¸Ð»Ð°Ð¼Ð¸.\nÐÐ° ÑÐ¸Ðµ Ð¾Ñ‚Ð²ÐµÑ‡Ñƒ, Ñ‡Ñ‚Ð¾, Ð²Ð¾Ð¾Ð±Ñ‰Ðµ-Ñ‚Ð¾, Ð²Ð·Ñ€Ð¾ÑÐ»Ð°Ñ ÑÐ¾Ð±Ð°ÐºÐ°(Ðº Ð¿Ñ€Ð¸Ð¼ÐµÑ€Ñƒ) Ð¸ Ñ€ÐµÐ±ÐµÐ½Ð¾Ðº Ð½Ðµ Ð¾Ð´Ð¸Ð½Ð°ÐºÐ¾Ð²Ñ‹ Ð´Ñ€ÑƒÐ³ Ð´Ñ€ÑƒÐ³Ñƒ!\nÐ§Ñ‚Ð¾ Ð²Ð·Ñ€Ð¾ÑÐ»Ð°Ñ ÑÐ¾Ð±Ð°ÐºÐ°, Ð² Ð¾Ñ‚Ð»Ð¸Ñ‡Ð¸Ð¸ Ð¾Ñ‚ Ñ€ÐµÐ±ÐµÐ½ÐºÐ°, ÐœÐžÐ–Ð•Ð¢ ÐžÐ¡ÐžÐ—ÐÐÐÐÐž Ð¶ÐµÐ»Ð°Ñ‚ÑŒ/Ð½Ðµ Ð¶ÐµÐ»Ð°Ñ‚ÑŒ ÑÐµÐºÑÐ°, ÐœÐžÐ–Ð•Ð¢ ÐžÐ¡ÐžÐ—ÐÐÐÐÐž Ð¾Ñ‚ÐºÐ°Ð·Ð°Ñ‚ÑŒ/Ð¿Ñ€Ð¸Ð½ÑÑ‚ÑŒ Ð»Ð°ÑÐºÐ¸ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð°, Ð¸ Ð² Ð¾Ñ‚Ð»Ð¸Ñ‡Ð¸Ð¸ Ð¾Ñ‚ Ñ€ÐµÐ±ÐµÐ½ÐºÐ°, ÐµÑÐ»Ð¸ ÐµÐµ Ð¿Ñ‹Ñ‚Ð°Ñ‚ÑŒÑÑ Ð¿Ñ€Ð¸Ð½ÑƒÐ´Ð¸Ñ‚ÑŒ Ðº Ð¾Ð½Ð¾Ð¼Ñƒ Ð¿Ñ€Ð¾Ñ‚Ð¸Ð² ÐµÐµ Ð¶ÐµÐ»Ð°Ð½Ð¸Ñ, ÑÐ¾Ð±Ð°ÐºÐ° ÑÐ¼Ð¾Ð¶ÐµÑ‚ Ð¿Ð¾ÑÑ‚Ð¾ÑÑ‚ÑŒ Ð·Ð° ÑÐµÐ±Ñ!\nÐ¢Ð°Ðº Ñ‡Ñ‚Ð¾ Ñ€Ð°Ð²Ð½ÑÑ‚ÑŒ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð² Ðº Ð¿ÐµÐ´Ð¾Ñ„Ð¸Ð»Ð°Ð¼ Ð³Ð»ÑƒÐ¿Ð¾ - Ð¼Ñ‹ Ð·Ð°Ð½Ð¸Ð¼Ð°ÐµÐ¼ÑÑ ÑÐµÐºÑÐ¾Ð¼ Ð¢ÐžÐ›Ð¬ÐšÐž Ð¡Ðž Ð’Ð—Ð ÐžÐ¡Ð›Ð«ÐœÐ˜ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ð¼Ð¸, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð¿Ñ€ÐµÐºÑ€Ð°ÑÐ½Ð¾ Ð¾ÑÐ¾Ð·Ð½Ð°ÑŽÑ‚ ÑÐµÐºÑÑƒÐ°Ð»ÑŒÐ½Ñ‹Ðµ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ Ñ Ð½Ð°ÑˆÐµÐ¹ ÑÑ‚Ð¾Ñ€Ð¾Ð½Ñ‹, Ð¸ ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð¼Ð¾Ð³ÑƒÑ‚ ÐžÐ¡ÐžÐ—ÐÐÐÐÐž ÐŸÐ Ð˜ÐÐ¯Ð¢Ð¬/ÐžÐ¢ÐšÐÐ—ÐÐ¢Ð¬ Ð½Ð°ÑˆÐ¸ Ð¿Ñ€ÐµÐ´Ð»Ð¾Ð¶ÐµÐ½Ð¸Ñ Ð·Ð°Ð½ÑÑ‚ÑŒÑÑ Ñ Ð½Ð¸Ð¼Ð¸ ÑÐµÐºÑÐ¾Ð¼.\nÐ Ñ‡Ñ‚Ð¾ Ð´Ð¾ Ñ‚ÐµÑ…, ÐºÑ‚Ð¾ Ð´Ð°ÐµÑ‚ ÑÐ¾ÑÐ°Ñ‚ÑŒ ÑÐ²Ð¾Ð¸ Ñ‡Ð»ÐµÐ½Ñ‹/Ð»Ð¸Ð·Ð°Ñ‚ÑŒ Ð²Ð°Ð³Ð¸Ð½Ñ‹ Ð¶ÐµÑ€ÐµÐ±ÑÑ‚Ð°Ð¼/Ñ‰ÐµÐ½ÑÑ‚Ð°Ð¼/Ð´Ñ€ÑƒÐ³Ð¸Ð¼ Ð´ÐµÑ‚ÐµÐ½Ñ‹ÑˆÐ°Ð¼ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ñ…, Ñ‚Ð°Ðº Ñ‚Ðµ Ð½Ðµ Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ñ‹, Ð° Ð¿Ñ€Ð¾ÑÑ‚Ð¾ Ð¾Ð·Ð°Ð±Ð¾Ñ‡ÐµÐ½Ð½Ñ‹Ðµ Ð¼Ð¾Ñ€Ð°Ð»ÑŒÐ½Ñ‹Ðµ ÑƒÑ€Ð¾Ð´Ñ‹, Ñ ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¼Ð¸ Ð¼Ñ‹, Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ñ‹, Ð½Ðµ Ð¸Ð¼ÐµÐµÐ¼ Ð½Ð¸ÐºÐ°ÐºÐ¸Ñ… Ð¾Ð±Ñ‰Ð¸Ñ… Ð´ÐµÐ»!\nÐ¢Ð°Ðº Ñ‡Ñ‚Ð¾, ÐºÐ°Ðº Ð²Ð¸Ð´Ð¸Ñ‚Ðµ, Ð¼Ñ‹, Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ñ‹, Ð²Ð¾Ð²ÑÐµ Ð½Ðµ Ð¼Ð¾Ñ€Ð°Ð»ÑŒÐ½Ñ‹Ðµ Ñ‡ÑƒÐ´Ð¾Ð²Ð¸Ñ‰Ð°, ÐºÐ°Ðº Ð½Ð°Ñ ÑÑ‡Ð¸Ñ‚Ð°ÐµÑ‚ Ð¾Ð±Ñ‰ÐµÑÑ‚Ð²Ð¾, Ð° Ð½Ð¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ñ‹Ðµ Ð»ÑŽÐ´Ð¸.\nÐ Ð¿Ð¾ÑÐµÐ¼Ñƒ, ÐµÑÐ»Ð¸ Ð²Ñ‹ Ð¿Ñ€Ð¾Ñ‡Ð¸Ñ‚Ð°Ð»Ð¸ Ð´Ð°Ð½Ð½Ð¾Ðµ Ð·Ð°ÑÐ²Ð»ÐµÐ½Ð¸Ðµ, Ñ‚Ð¾ Ð¿Ð¾ÑÐ»Ðµ, Ð½Ð°Ñ‚ÐºÐ½ÑƒÐ²ÑˆÐ¸ÑÑŒ Ð½Ð° Ð½Ð°ÑˆÐ¸ ÑÐ°Ð¹Ñ‚Ñ‹, Ð»Ð¸Ð±Ð¾ Ð½Ð° Ð½Ð°Ñ ÑÐ°Ð¼Ð¸Ñ…, Ð¿Ð¾Ð´ÑƒÐ¼Ð°Ð¹Ñ‚Ðµ Ñ…Ð¾Ñ€Ð¾ÑˆÐµÐ½ÑŒÐºÐ¾: Ð° Ð½Ð°Ð´Ð¾ Ð»Ð¸ Ð½Ð°Ñ Ð¿Ð¾Ð»Ð¸Ð²Ð°Ñ‚ÑŒ Ð¿Ð¾Ð¼Ð¾ÑÐ¼Ð¸?\nÐœÐ¾Ð¶ÐµÑ‚, Ñƒ Ð²Ð°Ñ Ð¿Ð¾ÑÐ²Ð¸Ñ‚ÑÑ Ð¶ÐµÐ»Ð°Ð½Ð¸Ðµ Ð¿Ð¾Ð»ÑƒÑ‡ÑˆÐµ Ð¿Ð¾Ñ‡Ð¸Ñ‚Ð°Ñ‚ÑŒ Ð½Ð°ÑˆÐ¸ ÑÐ°Ð¹Ñ‚Ñ‹, Ð½Ð°ÑˆÐ¸ Ð¼Ñ‹ÑÐ»Ð¸ Ð¿Ð¾ Ð¿Ð¾Ð²Ð¾Ð´Ñƒ Ð²ÑÐµÐ³Ð¾, Ð¸ Ñ‚Ð¾Ð³Ð´Ð°, Ð²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾, Ñƒ Ð²Ð°Ñ Ð¿Ð¾Ð¼ÐµÐ½ÑÐµÑ‚ÑÑ Ð¾Ñ‚Ð½Ð¾ÑˆÐµÐ½Ð¸Ðµ Ðº Ð½Ð°Ð¼, Ñ Ð½ÐµÐ³Ð°Ñ‚Ð¸Ð²Ð½Ð¾Ð³Ð¾ Ð½Ð° Ð½ÐµÐ¹Ñ‚Ñ€Ð°Ð»ÑŒÐ½Ð¾Ðµ, Ð°?\nÐ˜Ð»Ð¸ Ð¶Ðµ, ÐµÑÐ»Ð¸ Ð½ÐµÐ¿Ñ€Ð¸ÑÐ·Ð½ÑŒ Ð¾ÑÑ‚Ð°Ð»Ð°ÑÑŒ, Ð¿Ñ€Ð¾ÑÑ‚Ð¾ Ñ‚Ð¸Ñ…Ð¾ ÑƒÐ¹Ñ‚Ð¸?...\nÐŸÐµÑ€ÐµÑ‡Ð¸Ñ‚Ð°Ð¹Ñ‚Ðµ Ð²Ð½Ð¸Ð¼Ð°Ñ‚ÐµÐ»ÑŒÐ½Ð¾ ÑÑ‚Ð¾ Ð·Ð°ÑÐ²Ð»ÐµÐ½Ð¸Ðµ Ð¾Ñ‚ Ð²ÑÐµÑ… Ð¸ÑÑ‚Ð¸Ð½Ð½Ñ‹Ñ… Ð·Ð¾Ð¾Ñ„Ð¸Ð»Ð¾Ð² ÑÐ½Ð¾Ð²Ð°, Ð¸ Ð¾Ð±Ð´ÑƒÐ¼Ð°Ð¹Ñ‚Ðµ Ð²ÑÐµ, Ñ‡Ñ‚Ð¾ Ð² Ð½ÐµÐ¼ Ð½Ð°Ð¿Ð¸ÑÐ°Ð½Ð¾. Ð¥Ð¾Ñ€Ð¾ÑˆÐ¾ Ð¾Ð±Ð´ÑƒÐ¼Ð°Ð¹Ñ‚Ðµ, Ð½Ðµ ÑÐ¿ÐµÑˆÐ°...\nÐ Ð¿Ð¾ÑÐµÐ¼Ñƒ, Ð½Ðµ Ð¿Ñ€Ð¾Ñ‰Ð°ÑŽÑÑŒ, Ð½Ð¾ Ð³Ð¾Ð²Ð¾Ñ€ÑŽ &quot;Ð”Ð¾ ÑÐ²Ð¸Ð´Ð°Ð½ÑŒÑ!&quot;\nÐ¡ ÑƒÐ²Ð°Ð¶ÐµÐ½Ð¸ÐµÐ¼, Ð—Ð¾Ð¾Ñ„Ð¸Ð»-ÐºÑƒÐ½.'),(20,'d3b93883d5','','ÐžÑ„Ñ„Ñ‚Ð¾Ð¼ Ð¿Ñ€ÐµÑÐµÐºÐ°ÐµÐ¼. \nÐ’ Ñ‚ÐµÐ¼Ñƒ:'),(21,'3790eb6826','','Ðž! ÐÐ° Ð´ÐµÐ²ÑƒÑˆÐºÑƒ Ð¸Ð· [b:3790eb6826]Seiken Densetsu[/b:3790eb6826] Ð¸ Ñƒ Ð¼ÐµÐ½Ñ ÐµÑÑ‚ÑŒ.'),(22,'93757c5a3a','','[quote:93757c5a3a=\"Ð’Ð¸Ñ‚Ð¸ÐµÐ²Ð°Ñ‚Ñ‹Ð¹\"]\nÐ Ð¿Ð¾ÑÐµÐ¼Ñƒ, ÐµÑÐ»Ð¸ Ð²Ñ‹ Ð¿Ñ€Ð¾Ñ‡Ð¸Ñ‚Ð°Ð»Ð¸ Ð´Ð°Ð½Ð½Ð¾Ðµ Ð·Ð°ÑÐ²Ð»ÐµÐ½Ð¸Ðµ, Ñ‚Ð¾ Ð¿Ð¾ÑÐ»Ðµ, Ð½Ð°Ñ‚ÐºÐ½ÑƒÐ²ÑˆÐ¸ÑÑŒ Ð½Ð° Ð½Ð°ÑˆÐ¸ ÑÐ°Ð¹Ñ‚Ñ‹, Ð»Ð¸Ð±Ð¾ Ð½Ð° Ð½Ð°Ñ ÑÐ°Ð¼Ð¸Ñ…, Ð¿Ð¾Ð´ÑƒÐ¼Ð°Ð¹Ñ‚Ðµ Ñ…Ð¾Ñ€Ð¾ÑˆÐµÐ½ÑŒÐºÐ¾: Ð° Ð½Ð°Ð´Ð¾ Ð»Ð¸ Ð½Ð°Ñ Ð¿Ð¾Ð»Ð¸Ð²Ð°Ñ‚ÑŒ Ð¿Ð¾Ð¼Ð¾ÑÐ¼Ð¸?\n[/quote:93757c5a3a]\nÐ›Ð°Ð´Ñ‹, Ð½Ñƒ Ð²Ð°Ñ! Ð’Ð¾Ñ‚ Ð»ÑƒÑ‡ÑˆÐµ Ð½Ð° Ð½Ð¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ñ‹Ðµ ÐºÐ°Ñ€Ñ‚Ð¸Ð½ÐºÐ¸ Ð¿ÐµÑ€ÐµÐ´Ñ‘Ñ€Ð½Ð¸Ñ‚Ðµ'),(23,'0bdd21d85d','Re: ÐšÐ»Ð°ÑÑÐ¸Ñ‡ÐµÑÐºÐ°Ñ ÑÑ€Ð¾Ñ‚Ð¸ÐºÐ°','[quote:0bdd21d85d=\"Hidden\"]Ð’Ñ‹ÐºÐ»Ð°Ð´Ñ‹Ð²Ð°ÐµÐ¼ ÐºÐ»Ð°ÑÑÐ¸Ñ‡ÐµÑÐºÐ¸Ðµ ÑÑ€Ð¾-Ñ„Ð¾Ñ‚Ð¾Ð³Ñ€Ð°Ñ„Ð¸Ð¸[/quote:0bdd21d85d]\nÐŸÐ°Ñ€Ð½ÐµÐ¹ Ð½Ðµ Ð½Ð°Ð´Ð¾! Ð’Ñ‹ Ñ‡ÐµÐ³Ð¾, ÑÐ¾Ð²ÑÐµÐ¼ Ñ‡Ñ‚Ð¾Ð»Ð¸????'),(24,'564ec270ec','Re: ÐšÐ»Ð°ÑÑÐ¸Ñ‡ÐµÑÐºÐ°Ñ ÑÑ€Ð¾Ñ‚Ð¸ÐºÐ°','[quote:564ec270ec=\"Hyperion\"]\nÐŸÐ°Ñ€Ð½ÐµÐ¹ Ð½Ðµ Ð½Ð°Ð´Ð¾! Ð’Ñ‹ Ñ‡ÐµÐ³Ð¾, ÑÐ¾Ð²ÑÐµÐ¼ Ñ‡Ñ‚Ð¾Ð»Ð¸????[/quote:564ec270ec]\nÐ¯ Ð´ÐµÐ²ÑƒÑˆÐºÐ°, ÐµÑÐ»Ð¸ Ð²Ñ‹ Ð½Ðµ ÑÐ»ÐµÐ¿Ð¾Ð¹, Ð¼Ð½Ðµ Ð¼Ð¾Ð¶Ð½Ð¾.'),(25,'84e3511096','Ð“Ð´Ðµ Ð½Ð°Ð¹Ñ‚Ð¸','Ð˜Ñ‰Ñƒ Ð±ÐµÐ·ÑƒÑÐ¿ÐµÑˆÐ½Ð¾, Ð¿Ð¾Ð¼Ð¾Ð³Ð¸Ñ‚Ðµ!'),(26,'08a0d64527','','Ð’Ð¾Ð¾Ð±Ñ‰Ðµ Ð´ÑƒÑ€Ð¸Ð»Ð° Ñ‡Ñ‚Ð¾Ð»Ð¸?? Ð˜Ð·Ð²Ñ€Ð°Ñ‰ÐµÐ½Ñ†Ñ‹ Ð¾Ð´Ð½Ð¸ Ð¿Ð¾Ð³Ð°Ð½Ñ‹Ðµ ÐºÑ€ÑƒÐ³Ð¾Ð¼.'),(27,'6ee08f30ae','Re: Ð“Ð´Ðµ Ð½Ð°Ð¹Ñ‚Ð¸','[quote:6ee08f30ae=\"INSIDESTEP\"]Ð˜Ñ‰Ñƒ Ð±ÐµÐ·ÑƒÑÐ¿ÐµÑˆÐ½Ð¾, Ð¿Ð¾Ð¼Ð¾Ð³Ð¸Ñ‚Ðµ![/quote:6ee08f30ae]\nÐ˜Ð·Ð²Ð¸Ð½Ð¸, Ð½Ð¾ Ñ‡Ñ‚Ð¾-Ñ‚Ð¾ Ð¼Ð½Ðµ Ð¿Ñ€Ð¾Ñ‚Ð¸Ð²Ð½Ð¾...'),(28,'29bad9a59f','Ð‘Ð˜Ð—ÐÐ•Ð¡ Ð¡ ÐœÐ˜ÐÐ˜ÐœÐÐ›Ð¬ÐÐ«ÐœÐ˜ Ð’Ð›ÐžÐ–Ð•ÐÐ˜Ð¯ÐœÐ','&#1041;&#1099;&#1083;&#1086; 180 &#1088;&#1091;&#1073;&#1083;&#1077;&#1081;, &#1072; &#1089;&#1090;&#1072;&#1083;&#1086; 180.000 &#1088;&#1091;&#1073;&#1083;&#1077;&#1081;. &#1071; &#1085;&#1072;&#1090;&#1082;&#1085;&#1091;&#1083;&#1089;&#1103; &#1085;&#1072; &#1101;&#1090;&#1086; &#1085;&#1072; &#1086;&#1076;&#1085;&#1086;&#1084;\n&#1092;&#1086;&#1088;&#1091;&#1084;&#1077; &#1089;&#1086;&#1074;&#1077;&#1088;&#1096;&#1077;&#1085;&#1085;&#1086; &#1089;&#1083;&#1091;&#1095;&#1072;&#1081;&#1085;&#1086; &#1080; &#1088;&#1077;&#1096;&#1080;&#1083; &#1087;&#1086;&#1087;&#1088;&#1086;&#1073;&#1086;&#1074;&#1072;&#1090;&#1100;. &#1041;&#1088;&#1086;&#1076;&#1103;, &#1082;&#1072;&#1082; &#1086;&#1073;&#1099;&#1095;&#1085;&#1086;, &#1087;&#1086;\n&#1088;&#1072;&#1079;&#1085;&#1086;&#1075;&#1086; &#1088;&#1086;&#1076;&#1072; &#1092;&#1086;&#1088;&#1091;&#1084;&#1072;&#1084; &#1103; &#1085;&#1072;&#1093;&#1086;&#1078;&#1091; &#1101;&#1090;&#1091; &#1089;&#1090;&#1072;&#1090;&#1100;&#1102;, &#1074; &#1082;&#1086;&#1090;&#1086;&#1088;&#1086;&#1081; &#1075;&#1086;&#1074;&#1086;&#1088;&#1080;&#1090;&#1089;&#1103;, &#1095;&#1090;&#1086; &#1052;&#1054;&#1046;&#1053;&#1054;\n&#1057;&#1044;&#1045;&#1051;&#1040;&#1058;&#1068; &#1058;&#1067;&#1057;&#1071;&#1063;&#1048; &#1044;&#1054;&#1051;&#1051;&#1040;&#1056;&#1054;&#1042; &#1047;&#1040; &#1055;&#1040;&#1056;&#1059; &#1053;&#1045;&#1044;&#1045;&#1051;&#1068; &#1055;&#1056;&#1048; &#1042;&#1051;&#1054;&#1046;&#1045;&#1053;&#1048;&#1048; &#1042;&#1057;&#1045;&#1043;&#1054; 180 &#1088;&#1091;&#1073;&#1083;&#1077;&#1081; (&#1087;&#1088;&#1080;&#1084;. &#1086;&#1090; &quot;&#1072;&#1074;&#1090;&#1086;&#1088;&#1072;&quot;: &#1090;&#1072;&#1082;&#1080;&#1093; &#1073;&#1072;&#1073;&#1086;&#1082; &#1079;&#1072; &#1044;&#1042;&#1045; &#1053;&#1045;&#1044;&#1045;&#1051;&#1048; &#1074;&#1099; &#1103;&#1074;&#1085;&#1086; &#1085;&#1077; &#1091;&#1074;&#1080;&#1076;&#1080;&#1090;&#1077;.\n&#1043;&#1086;&#1088;&#1072;&#1079;&#1076;&#1086; &#1087;&#1086;&#1079;&#1078;&#1077;). &#1058;&#1072;&#1084; &#1075;&#1086;&#1074;&#1086;&#1088;&#1080;&#1083;&#1086;&#1089;&#1100;, &#1095;&#1090;&#1086; &#1085;&#1072;&#1076;&#1086; &#1087;&#1086;&#1089;&#1083;&#1072;&#1090;&#1100; &#1087;&#1086; 30&#1088;&#1091;&#1073;. &#1085;&#1072; 6 Internet\n&#1082;&#1086;&#1096;&#1077;&#1083;&#1100;&#1082;&#1086;&#1074;, &#1082;&#1086;&#1090;&#1086;&#1088;&#1099;&#1077; &#1085;&#1080;&#1078;&#1077; &#1087;&#1077;&#1088;&#1077;&#1095;&#1080;&#1089;&#1083;&#1077;&#1085;&#1099;. &#1055;&#1086;&#1090;&#1086;&#1084; &#1042;&#1099; &#1074;&#1087;&#1080;&#1089;&#1099;&#1074;&#1072;&#1077;&#1090;&#1077; &#1085;&#1086;&#1084;&#1077;&#1088; &#1089;&#1074;&#1086;&#1077;&#1075;&#1086;\nInternet &#1082;&#1086;&#1096;&#1077;&#1083;&#1100;&#1082;&#1072; &#1080; &#1079;&#1072;&#1082;&#1080;&#1076;&#1099;&#1074;&#1072;&#1077;&#1090;&#1077; &#1076;&#1072;&#1085;&#1085;&#1086;&#1077;, &#1089; &#1042;&#1072;&#1084;&#1080; &#1085;&#1072; &#1096;&#1077;&#1089;&#1090;&#1086;&#1081; &#1089;&#1090;&#1088;&#1086;&#1095;&#1082;&#1077;,\n&#1089;&#1086;&#1086;&#1073;&#1097;&#1077;&#1085;&#1080;&#1077; &#1085;&#1072; 200 &#1088;&#1072;&#1079;&#1085;&#1099;&#1093; &#1092;&#1086;&#1088;&#1091;&#1084;&#1086;&#1074;. &#1053;&#1080;&#1082;&#1072;&#1082;&#1080;&#1093; &#1091;&#1083;&#1086;&#1074;&#1086;&#1082; - &#1053;&#1091; &#1103; &#1087;&#1086;&#1088;&#1072;&#1079;&#1084;&#1099;&#1096;&#1083;&#1103;&#1083; &#1080;\n&#1087;&#1086;&#1076;&#1091;&#1084;&#1072;&#1083;, &#1095;&#1090;&#1086; &#1103; &#1074; &#1087;&#1088;&#1080;&#1085;&#1094;&#1080;&#1087;&#1077; &#1085;&#1080;&#1095;&#1077;&#1075;&#1086; &#1085;&#1077; &#1090;&#1077;&#1088;&#1103;&#1102; &#1082;&#1088;&#1086;&#1084;&#1077; 180 &#1088;&#1091;&#1073;&#1083;&#1077;&#1081; - &#1080; &#1088;&#1077;&#1096;&#1080;&#1083;\n&#1087;&#1086;&#1087;&#1088;&#1086;&#1073;&#1086;&#1074;&#1072;&#1090;&#1100;. &#1059;&#1089;&#1090;&#1072;&#1085;&#1086;&#1074;&#1080;&#1083; &#1048;&#1085;&#1090;&#1077;&#1088;&#1085;&#1077;&#1090; &#1082;&#1086;&#1096;&#1077;&#1083;&#1105;&#1082;, &#1087;&#1077;&#1088;&#1077;&#1095;&#1080;&#1089;&#1083;&#1080;&#1083; &#1074;&#1089;&#1077;&#1084; &#1091;&#1095;&#1072;&#1089;&#1090;&#1085;&#1080;&#1082;&#1072;&#1084;\n&#1072;&#1082;&#1094;&#1080;&#1080; &#1087;&#1086; 30 &#1088;&#1091;&#1073;. &#1080; &#1085;&#1072;&#1095;&#1072;&#1083; &#1088;&#1072;&#1089;&#1089;&#1099;&#1083;&#1072;&#1090;&#1100; &#1101;&#1090;&#1080; &#1086;&#1073;&#1098;&#1103;&#1074;&#1083;&#1077;&#1085;&#1080;&#1103; &#1087;&#1086; &#1088;&#1072;&#1079;&#1085;&#1099;&#1084; &#1092;&#1086;&#1088;&#1091;&#1084;&#1072;&#1084;. &#1042;\n&#1090;&#1077;&#1095;&#1077;&#1085;&#1080;&#1077; 2-&#1093; &#1076;&#1085;&#1077;&#1081; &#1103; &#1079;&#1072;&#1088;&#1077;&#1075;&#1080;&#1089;&#1090;&#1088;&#1080;&#1088;&#1086;&#1074;&#1072;&#1083;&#1089;&#1103; &#1085;&#1072; 120 &#1073;&#1080;&#1079;&#1085;&#1077;&#1089; &#1092;&#1086;&#1088;&#1091;&#1084;&#1072;&#1093; &#1080; &#1073;&#1077;&#1089;&#1087;&#1083;&#1072;&#1090;&#1085;&#1099;&#1093;\n&#1076;&#1086;&#1089;&#1082;&#1072;&#1093; &#1086;&#1073;&#1098;&#1103;&#1074;&#1083;&#1077;&#1085;&#1080;&#1081;. &#1055;&#1088;&#1086;&#1096;&#1083;&#1072; &#1085;&#1077;&#1076;&#1077;&#1083;&#1103;, &#1079;&#1072;&#1075;&#1083;&#1103;&#1076;&#1099;&#1074;&#1072;&#1102; &#1074; &#1089;&#1074;&#1086;&#1081; &#1048;&#1085;&#1090;&#1077;&#1088;&#1085;&#1077;&#1090; &#1082;&#1086;&#1096;&#1077;&#1083;&#1077;&#1082; -\n&#1087;&#1086;&#1089;&#1090;&#1091;&#1087;&#1083;&#1077;&#1085;&#1080;&#1081; &#1085;&#1080;&#1082;&#1072;&#1082;&#1080;&#1093; &#1085;&#1077;&#1090;. &#1040; &#1088;&#1072;&#1079;&#1085;&#1099;&#1077; &#1091;&#1095;&#1072;&#1089;&#1090;&#1085;&#1080;&#1082;&#1080; &#1087;&#1080;&#1096;&#1091;&#1090;, &#1095;&#1090;&#1086; &#1079;&#1072; &#1085;&#1077;&#1076;&#1077;&#1083;&#1102;\n&#1079;&#1072;&#1088;&#1072;&#1073;&#1086;&#1090;&#1072;&#1083;&#1080; &#1082;&#1090;&#1086; &#1087;&#1086; 25$, &#1082;&#1090;&#1086; &#1087;&#1086; 15$. &#1053;&#1091; &#1080; &#1073;&#1088;&#1086;&#1089;&#1080;&#1083; &#1101;&#1090;&#1086; &#1079;&#1072;&#1085;&#1103;&#1090;&#1080;&#1077;, &#1090;&#1072;&#1082; &#1080; &#1085;&#1077;\n&#1076;&#1086;&#1089;&#1083;&#1072;&#1074; &#1089;&#1074;&#1086;&#1077; &#1086;&#1073;&#1098;&#1103;&#1074;&#1083;&#1077;&#1085;&#1080;&#1077; &#1076;&#1086; 200 &#1092;&#1086;&#1088;&#1091;&#1084;&#1086;&#1074;. &#1045;&#1097;&#1105; &#1095;&#1077;&#1088;&#1077;&#1079; &#1076;&#1074;&#1077; &#1085;&#1077;&#1076;&#1077;&#1083;&#1080;, &#1089;&#1083;&#1091;&#1095;&#1072;&#1081;&#1085;&#1086; &#1074;\n&#1048;&#1085;&#1090;&#1077;&#1088;&#1085;&#1077;&#1090;&#1077; &#1085;&#1072;&#1096;&#1077;&#1083; &#1082;&#1086;&#1084;&#1084;&#1077;&#1085;&#1090;&#1072;&#1088;&#1080;&#1081; &#1082; &#1101;&#1090;&#1086;&#1084;&#1091; &#1087;&#1088;&#1086;&#1077;&#1082;&#1090;&#1091; (&#1082;&#1086;&#1084;&#1084;&#1077;&#1085;&#1090;&#1072;&#1088;&#1080;&#1081; &#1091;&#1073;&#1077;&#1076;&#1080;&#1090;&#1077;&#1083;&#1100;&#1085;&#1099;&#1081;).\n&#1054;&#1090;&#1082;&#1088;&#1099;&#1083; &#1089;&#1074;&#1086;&#1081; &#1048;&#1085;&#1090;&#1077;&#1088;&#1085;&#1077;&#1090; &#1082;&#1086;&#1096;&#1077;&#1083;&#1077;&#1082;, &#1072; &#1074; &#1085;&#1077;&#1084; &#1091;&#1078;&#1077; &#1086;&#1082;&#1086;&#1083;&#1086; 900 &#1088;&#1091;&#1073;&#1083;&#1077;&#1081;. &#1053;&#1077;&#1087;&#1086;&#1085;&#1103;&#1090;&#1085;&#1072;&#1103;\n&#1082;&#1072;&#1088;&#1090;&#1080;&#1085;&#1072;, &#1085;&#1086; &#1074;&#1089;&#1105; &#1088;&#1072;&#1074;&#1085;&#1086; &#1079;&#1072; 1 &#1084;&#1077;&#1089;&#1103;&#1094; 900 &#1088;&#1091;&#1073;&#1083;&#1077;&#1081; &#1101;&#1090;&#1086; &#1086;&#1095;&#1077;&#1085;&#1100; &#1084;&#1072;&#1083;&#1086;. &#1048; &#1074;&#1076;&#1088;&#1091;&#1075;\n&#1087;&#1086;&#1089;&#1083;&#1077; 1 &#1084;&#1077;&#1089;&#1103;&#1094;&#1072; &#1085;&#1072;&#1095;&#1072;&#1083;&#1086;&#1089;&#1100; &#1089;&#1072;&#1084;&#1086;&#1077; &#1080;&#1085;&#1090;&#1077;&#1088;&#1077;&#1089;&#1085;&#1086;&#1077;: &#1085;&#1072; &#1084;&#1086;&#1081; &#1082;&#1086;&#1096;&#1077;&#1083;&#1105;&#1082; &#1089;&#1090;&#1072;&#1083;&#1080; &#1087;&#1088;&#1080;&#1093;&#1086;&#1076;&#1080;&#1090;&#1100;\n&#1076;&#1077;&#1085;&#1100;&#1075;&#1080; &#1082;&#1072;&#1078;&#1076;&#1099;&#1081; &#1076;&#1077;&#1085;&#1100;, &#1089;&#1087;&#1091;&#1089;&#1090;&#1103; &#1077;&#1097;&#1105; 2 &#1085;&#1077;&#1076;&#1077;&#1083;&#1080; &#1085;&#1072; &#1084;&#1086;&#1077;&#1084; &#1089;&#1095;&#1077;&#1090;&#1091; &#1091;&#1078;&#1077; &#1073;&#1099;&#1083;&#1086; &#1073;&#1086;&#1083;&#1077;&#1077; 30\n&#1090;&#1099;&#1089;. &#1088;&#1091;&#1073;. &#1055;&#1086;&#1089;&#1083;&#1077; &#1101;&#1090;&#1086;&#1075;&#1086; &#1103; &#1086;&#1090;&#1087;&#1088;&#1072;&#1074;&#1080;&#1083; &#1089;&#1074;&#1086;&#1080; &#1086;&#1073;&#1098;&#1103;&#1074;&#1083;&#1077;&#1085;&#1080;&#1103; &#1077;&#1097;&#1105; &#1085;&#1072; 120 &#1092;&#1086;&#1088;&#1091;&#1084;&#1086;&#1074;.\n&#1056;&#1077;&#1079;&#1091;&#1083;&#1100;&#1090;&#1072;&#1090; &#1073;&#1099;&#1083; &#1086;&#1096;&#1077;&#1083;&#1086;&#1084;&#1083;&#1103;&#1102;&#1097;&#1080;&#1081;. &#1055;&#1086; &#1087;&#1088;&#1086;&#1096;&#1077;&#1089;&#1090;&#1074;&#1080;&#1080; &#1074;&#1089;&#1077;&#1075;&#1086; 2 &#1084;&#1077;&#1089;&#1103;&#1094;&#1077;&#1074;, &#1103; &#1087;&#1086;&#1083;&#1091;&#1095;&#1080;&#1083; 4\n700$ &#1080; &#1076;&#1077;&#1085;&#1100;&#1075;&#1080; &#1080;&#1076;&#1091;&#1090; &#1082;&#1072;&#1078;&#1076;&#1099;&#1081; &#1076;&#1077;&#1085;&#1100;. &#1050;&#1072;&#1078;&#1076;&#1099;&#1077; 10 &#1084;&#1080;&#1085;&#1091;&#1090; &#1085;&#1072; &#1084;&#1086;&#1081; &#1089;&#1095;&#1105;&#1090; &#1087;&#1086;&#1089;&#1090;&#1091;&#1087;&#1072;&#1077;&#1090; &#1087;&#1086;\n30 &#1088;&#1091;&#1073;&#1083;&#1077;&#1081;. &#1048; &#1101;&#1090;&#1086; &#1074;&#1089;&#1077; &#1090;&#1086;&#1083;&#1100;&#1082;&#1086; &#1079;&#1072; &#1094;&#1077;&#1085;&#1091; &#1074; 180 &#1088;&#1091;&#1073;.!!!&#1071; &#1085;&#1077; &#1087;&#1086;&#1074;&#1077;&#1088;&#1080;&#1083;, &#1095;&#1090;&#1086; &#1101;&#1090;&#1086;\n&#1088;&#1072;&#1073;&#1086;&#1090;&#1072;&#1077;&#1090;, &#1087;&#1086;&#1082;&#1072; &#1085;&#1077; &#1085;&#1072;&#1095;&#1072;&#1083; &#1087;&#1086;&#1083;&#1091;&#1095;&#1072;&#1090;&#1100; &#1087;&#1077;&#1088;&#1077;&#1074;&#1086;&#1076;&#1099; &#1089;&#1086; &#1074;&#1089;&#1077;&#1075;&#1086; &#1089;&#1074;&#1077;&#1090;&#1072;. &#1052;&#1086;&#1103; &#1088;&#1072;&#1073;&#1086;&#1090;&#1072;\n&#1090;&#1077;&#1087;&#1077;&#1088;&#1100; - &#1101;&#1090;&#1086; &#1082;&#1072;&#1078;&#1076;&#1099;&#1081; &#1076;&#1077;&#1085;&#1100; &#1087;&#1086; 2 &#1095;&#1072;&#1089;&#1072; &#1074; &#1048;&#1085;&#1090;&#1077;&#1088;&#1085;&#1077;&#1090;&#1077; &#1080; &#1042;&#1057;&#1025;! &#1040; &#1079;&#1072;&#1088;&#1072;&#1073;&#1086;&#1090;&#1086;&#1082; &#1090;&#1072;&#1082;&#1086;&#1081;,\n&#1095;&#1090;&#1086; &#1085;&#1080;&#1082;&#1072;&#1082;&#1080;&#1084; &#1085;&#1072;&#1095;&#1072;&#1083;&#1100;&#1085;&#1080;&#1082;&#1072;&#1084; &#1080; &#1088;&#1091;&#1082;&#1086;&#1074;&#1086;&#1076;&#1080;&#1090;&#1077;&#1083;&#1103;&#1084; &#1076;&#1072;&#1078;&#1077; &#1080; &#1085;&#1077; &#1089;&#1085;&#1080;&#1083;&#1089;&#1103;. &#1058;&#1077;&#1087;&#1077;&#1088;&#1100; &#1103;\n&#1088;&#1072;&#1089;&#1089;&#1082;&#1072;&#1078;&#1091; &#1042;&#1072;&#1084;, &#1082;&#1072;&#1082; &#1101;&#1090;&#1086; &#1088;&#1072;&#1073;&#1086;&#1090;&#1072;&#1077;&#1090;, &#1080; &#1089;&#1072;&#1084;&#1086;&#1077; &#1075;&#1083;&#1072;&#1074;&#1085;&#1086;&#1077; &#1055;&#1054;&#1063;&#1045;&#1052;&#1059;! &#1071; &#1074;&#1072;&#1084; &#1086;&#1073;&#1077;&#1097;&#1072;&#1102;,\n&#1095;&#1090;&#1086; &#1077;&#1089;&#1083;&#1080; &#1074;&#1099; &#1073;&#1091;&#1076;&#1077;&#1090;&#1077; &#1074; &#1090;&#1086;&#1095;&#1085;&#1086;&#1089;&#1090;&#1080; &#1089;&#1086;&#1073;&#1083;&#1102;&#1076;&#1072;&#1090;&#1100; &#1085;&#1080;&#1078;&#1077; &#1087;&#1077;&#1088;&#1077;&#1095;&#1080;&#1089;&#1083;&#1077;&#1085;&#1085;&#1099;&#1077; &#1080;&#1085;&#1089;&#1090;&#1088;&#1091;&#1082;&#1094;&#1080;&#1080;,\n&#1090;&#1086; &#1074;&#1099; &#1085;&#1072;&#1095;&#1085;&#1077;&#1090;&#1077; &#1087;&#1086;&#1083;&#1091;&#1095;&#1072;&#1090;&#1100; &#1085;&#1072;&#1084;&#1085;&#1086;&#1075;&#1086; &#1073;&#1086;&#1083;&#1100;&#1096;&#1077; &#1076;&#1077;&#1085;&#1077;&#1075;, &#1095;&#1077;&#1084; &#1074;&#1099; &#1076;&#1091;&#1084;&#1072;&#1083;&#1080;, &#1085;&#1077; &#1087;&#1088;&#1080;&#1083;&#1072;&#1075;&#1072;&#1103;\n&#1082; &#1101;&#1090;&#1086;&#1084;&#1091; &#1086;&#1089;&#1086;&#1073;&#1099;&#1093; &#1091;&#1089;&#1080;&#1083;&#1080;&#1081;. &#1057;&#1086;&#1075;&#1083;&#1072;&#1089;&#1080;&#1090;&#1077;&#1089;&#1100;, &#1101;&#1090;&#1086; &#1087;&#1088;&#1086;&#1089;&#1090;&#1086;!!! &#1048; &#1074;&#1072;&#1096; &#1074;&#1082;&#1083;&#1072;&#1076; &#1089;&#1086;&#1089;&#1090;&#1072;&#1074;&#1083;&#1103;&#1077;&#1090;\n&#1074;&#1089;&#1077;&#1075;&#1086; 180 &#1088;&#1091;&#1073;&#1083;&#1077;&#1081;... &#1042;&#1040;&#1046;&#1053;&#1054;: &#1069;&#1058;&#1054; &#1053;&#1045; &#1054;&#1041;&#1052;&#1040;&#1053;!!! &#1069;&#1058;&#1054; &#1053;&#1045; &quot;&#1056;&#1040;&#1047;&#1042;&#1054;&#1044;&quot; !!!&#1048; &#1055;&#1056;&#1048; &#1069;&#1058;&#1054;&#1052;\n&#1042;&#1067; &#1053;&#1048;&#1063;&#1045;&#1052; &#1053;&#1045; &#1056;&#1048;&#1057;&#1050;&#1059;&#1045;&#1058;&#1045;, &#1053;&#1054; &#1069;&#1058;&#1054; &#1056;&#1040;&#1041;&#1054;&#1058;&#1040;&#1045;&#1058;!!! &#1042;&#1053;&#1048;&#1052;&#1040;&#1053;&#1048;&#1045;!!! &#1055;&#1056;&#1054;&#1063;&#1058;&#1048;&#1058;&#1045; &#1069;&#1058;&#1054; &#1055;&#1040;&#1056;&#1059; &#1056;&#1040;&#1047;!!! &#1042;&#1089;&#1105; &#1101;&#1090;&#1086; &#1091;&#1076;&#1072;&#1095;&#1085;&#1086; &#1088;&#1072;&#1073;&#1086;&#1090;&#1072;&#1077;&#1090; &#1073;&#1083;&#1072;&#1075;&#1086;&#1076;&#1072;&#1088;&#1103; &#1063;&#1045;&#1057;&#1058;&#1053;&#1054;&#1057;&#1058;&#1048; &#1091;&#1095;&#1072;&#1089;&#1090;&#1085;&#1080;&#1082;&#1086;&#1074;. &#1042;&#1054;&#1058; &#1058;&#1045;\n&#1057;&#1040;&#1052;&#1067;&#1045; &#1058;&#1056;&#1048; &#1064;&#1040;&#1043;&#1040; &#1050; &#1059;&#1057;&#1055;&#1045;&#1061;&#1059;: 1.&#1047;&#1072;&#1088;&#1077;&#1075;&#1080;&#1089;&#1090;&#1088;&#1080;&#1088;&#1091;&#1081;&#1090;&#1077;&#1089;&#1100; &#1089; &#1089;&#1080;&#1089;&#1090;&#1077;&#1084;&#1077; YANDEX MONEY,\n&#1093;&#1086;&#1088;&#1086;&#1096;&#1077;&#1085;&#1100;&#1082;&#1086; &#1086;&#1079;&#1085;&#1072;&#1082;&#1086;&#1084;&#1100;&#1090;&#1077;&#1089;&#1100; &#1089; &#1076;&#1072;&#1085;&#1085;&#1086;&#1081; &#1089;&#1080;&#1089;&#1090;&#1077;&#1084;&#1086;&#1081; &#1082;&#1072;&#1082; &#1086;&#1085;&#1072; &#1088;&#1072;&#1073;&#1086;&#1090;&#1072;&#1077;&#1090;. &#1052;&#1086;&#1078;&#1085;&#1086; &#1087;&#1088;&#1086;&#1089;&#1090;&#1086;\n&#1079;&#1072;&#1088;&#1077;&#1075;&#1080;&#1089;&#1090;&#1088;&#1080;&#1088;&#1086;&#1074;&#1072;&#1090;&#1100; &#1087;&#1086;&#1095;&#1090;&#1086;&#1074;&#1099;&#1081; &#1103;&#1097;&#1080;&#1082; &#1085;&#1072; &#1071;&#1085;&#1076;&#1077;&#1082;&#1089;&#1077;, &#1080; &#1074;&#1086;&#1081;&#1076;&#1103; &#1085;&#1072; &#1087;&#1086;&#1095;&#1090;&#1091; &#1084;&#1086;&#1078;&#1085;&#1086;\n&#1089;&#1086;&#1079;&#1076;&#1072;&#1090;&#1100; &#1082;&#1086;&#1096;&#1077;&#1083;&#1077;&#1082;. &#1059;&#1089;&#1090;&#1072;&#1085;&#1086;&#1074;&#1080;&#1090;&#1077; &#1048;&#1085;&#1090;&#1077;&#1088;&#1085;&#1077;&#1090;. &#1050;&#1086;&#1096;&#1077;&#1083;&#1077;&#1082;, &#1079;&#1072;&#1090;&#1077;&#1084; &#1074;&#1099;&#1073;&#1077;&#1088;&#1080;&#1090;&#1077;\n&#1086;&#1087;&#1090;&#1080;&#1084;&#1072;&#1083;&#1100;&#1085;&#1099;&#1081; &#1076;&#1083;&#1103; &#1089;&#1077;&#1073;&#1103; &#1074;&#1072;&#1088;&#1080;&#1072;&#1085;&#1090; &#1087;&#1086;&#1087;&#1086;&#1083;&#1085;&#1077;&#1085;&#1080;&#1103; &#1082;&#1086;&#1096;&#1077;&#1083;&#1100;&#1082;&#1072; &#1080; &#1074;&#1085;&#1077;&#1089;&#1080;&#1090;&#1077; 180 &#1088;&#1091;&#1073;. &#1085;&#1072;\n&#1089;&#1074;&#1086;&#1081; &#1082;&#1086;&#1096;&#1077;&#1083;&#1077;&#1082; (&#1082;&#1072;&#1088;&#1090;&#1086;&#1095;&#1082;&#1080; Yandex * &#1044;&#1045;&#1053;&#1068;&#1043;&#1048; &#1084;&#1080;&#1085;&#1080;&#1084;&#1091;&#1084; 100 &#1088;&#1091;&#1073;. &#1087;&#1088;&#1086;&#1076;&#1072;&#1102;&#1090;&#1089;&#1103; &#1074;\n&#1086;&#1073;&#1099;&#1095;&#1085;&#1099;&#1093; &#1083;&#1072;&#1088;&#1100;&#1082;&#1072;&#1093; &#1080;&#1083;&#1080; &#1087;&#1088;&#1086;&#1095;&#1080;&#1090;&#1072;&#1081;&#1090;&#1077; &#1085;&#1072; &#1089;&#1090;&#1088;&#1072;&#1085;&#1080;&#1095;&#1082;&#1077; &#1076;&#1088;&#1091;&#1075;&#1080;&#1077; &#1089;&#1087;&#1086;&#1089;&#1086;&#1073;&#1099; &#1087;&#1086;&#1087;&#1086;&#1083;&#1085;&#1077;&#1085;&#1080;&#1103;\n&#1082;&#1086;&#1096;&#1077;&#1083;&#1100;&#1082;&#1072;). 2. &#1042;&#1086;&#1079;&#1100;&#1084;&#1080;&#1090;&#1077; &#1087;&#1077;&#1088;&#1074;&#1099;&#1081; &#1085;&#1086;&#1084;&#1077;&#1088; &#1082;&#1086;&#1096;&#1077;&#1083;&#1100;&#1082;&#1072; &#1080;&#1079; &#1085;&#1080;&#1078;&#1077;&#1091;&#1082;&#1072;&#1079;&#1072;&#1085;&#1085;&#1086;&#1075;&#1086; &#1089;&#1087;&#1080;&#1089;&#1082;&#1072;,\n&#1086;&#1090;&#1087;&#1088;&#1072;&#1074;&#1100;&#1090;&#1077; &#1085;&#1072; &#1085;&#1077;&#1075;&#1086; 30 &#1088;&#1091;&#1073;., &#1074;&#1087;&#1080;&#1089;&#1072;&#1074; &#1101;&#1090;&#1086;&#1090; &#1085;&#1086;&#1084;&#1077;&#1088; &#1074; &#1087;&#1086;&#1083;&#1077; &quot;&#1053;&#1086;&#1084;&#1077;&#1088; &#1089;&#1095;&#1105;&#1090;&#1072;&quot;, (&#1074;\n&#1087;&#1086;&#1083;&#1103; &quot;&#1048;&#1084;&#1103; &#1087;&#1086;&#1083;&#1091;&#1095;&#1072;&#1090;&#1077;&#1083;&#1103;&quot; &#1080; &quot;E-mail &#1087;&#1086;&#1083;&#1091;&#1095;&#1072;&#1090;&#1077;&#1083;&#1103;&quot; &#1074;&#1087;&#1080;&#1089;&#1099;&#1074;&#1072;&#1090;&#1100; &#1085;&#1080;&#1095;&#1077;&#1075;&#1086; &#1085;&#1077; &#1085;&#1091;&#1078;&#1085;&#1086;),\n&#1074; &#1087;&#1086;&#1083;&#1077; &#1050;&#1086;&#1085;&#1090;&#1088;&#1072;&#1082;&#1090;/&#1085;&#1072;&#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;&#1072;: &#1085;&#1072;&#1087;&#1080;&#1096;&#1080;&#1090;&#1077; - &quot;&#1055;&#1086;&#1078;&#1072;&#1083;&#1091;&#1081;&#1089;&#1090;&#1072;, &#1074;&#1085;&#1077;&#1089;&#1080;&#1090;&#1077; &#1084;&#1077;&#1085;&#1103;\n&#1074; &#1089;&#1087;&#1080;&#1089;&#1086;&#1082; Yandex &#1082;&#1086;&#1096;&#1077;&#1083;&#1100;&#1082;&#1086;&#1074;&quot;. &#1042;&#1089;&#1077;, &#1095;&#1090;&#1086; &#1042;&#1099; &#1089;&#1076;&#1077;&#1083;&#1072;&#1083;&#1080; - &#1101;&#1090;&#1086; &#1089;&#1086;&#1079;&#1076;&#1072;&#1083;&#1080; &#1091;&#1089;&#1083;&#1091;&#1075;&#1091;, &#1080;\n&#1089;&#1072;&#1084;&#1086;&#1077; &#1075;&#1083;&#1072;&#1074;&#1085;&#1086;&#1077; - &#1072;&#1073;&#1089;&#1086;&#1083;&#1102;&#1090;&#1085;&#1086; &#1083;&#1077;&#1075;&#1072;&#1083;&#1100;&#1085;&#1086;. &#1042;&#1099; &#1087;&#1088;&#1086;&#1089;&#1080;&#1090;&#1077; &#1079;&#1072;&#1082;&#1086;&#1085;&#1085;&#1099;&#1081; &#1089;&#1077;&#1088;&#1074;&#1080;&#1089;, &#1079;&#1072;\n&#1082;&#1086;&#1090;&#1086;&#1088;&#1099;&#1081; &#1087;&#1083;&#1072;&#1090;&#1080;&#1090;&#1077;. &#1044;&#1072;&#1083;&#1077;&#1077;, &#1085;&#1072;&#1095;&#1080;&#1085;&#1072;&#1103; &#1089;&#1086; &#1074;&#1090;&#1086;&#1088;&#1086;&#1075;&#1086;, &#1087;&#1086; &#1072;&#1085;&#1072;&#1083;&#1086;&#1075;&#1080;&#1080; &#1086;&#1090;&#1087;&#1088;&#1072;&#1074;&#1100;&#1090;&#1077; &#1087;&#1086; 30\n&#1088;&#1091;&#1073;. &#1085;&#1072; &#1089;&#1083;&#1077;&#1076;&#1091;&#1102;&#1097;&#1080;&#1077; 5 &#1082;&#1086;&#1096;&#1077;&#1083;&#1100;&#1082;&#1086;&#1074; (&#1085;&#1077; &#1079;&#1072;&#1073;&#1091;&#1076;&#1100;&#1090;&#1077; &#1074;&#1087;&#1080;&#1089;&#1099;&#1074;&#1072;&#1090;&#1100; &#1074; &#1087;&#1086;&#1083;&#1077;\n&#1050;&#1086;&#1085;&#1090;&#1088;&#1072;&#1082;&#1090;/&#1085;&#1072;&#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;&#1072;: &quot;&#1055;&#1086;&#1078;&#1072;&#1083;&#1091;&#1081;&#1089;&#1090;&#1072;, &#1074;&#1085;&#1077;&#1089;&#1080;&#1090;&#1077; &#1084;&#1077;&#1085;&#1103; &#1074; &#1089;&#1087;&#1080;&#1089;&#1086;&#1082; Yandex\n&#1082;&#1086;&#1096;&#1077;&#1083;&#1100;&#1082;&#1086;&#1074;&quot;) 1.) 41001466747771; 2.) 41001466749327;\n3.) 41001466750920; 4.) 41001484657899; 5.) 41001544248306:\n6.) 41001562477068. &#1058;&#1077;&#1087;&#1077;&#1088;&#1100; &#1042;&#1053;&#1048;&#1052;&#1040;&#1053;&#1048;&#1045;!!! &#1055;&#1086;&#1089;&#1083;&#1077; &#1090;&#1086;&#1075;&#1086;, &#1082;&#1072;&#1082; &#1042;&#1099; &#1074;&#1099;&#1087;&#1086;&#1083;&#1085;&#1080;&#1083;&#1080; &#1064;&#1040;&#1043;\n2, &#1089;&#1082;&#1086;&#1087;&#1080;&#1088;&#1091;&#1081;&#1090;&#1077; &#1082; &#1089;&#1077;&#1073;&#1077; &#1085;&#1072; &#1082;&#1086;&#1084;&#1087;&#1100;&#1102;&#1090;&#1077;&#1088; &#1074;&#1077;&#1089;&#1100; &#1101;&#1090;&#1086;&#1090; &#1090;&#1077;&#1082;&#1089;&#1090; &#1086;&#1090; &#1085;&#1072;&#1095;&#1072;&#1083;&#1072; &#1076;&#1086; &#1082;&#1086;&#1085;&#1094;&#1072;\n(&#1084;&#1086;&#1078;&#1085;&#1086; &#1074; &#1092;&#1086;&#1088;&#1084;&#1072;&#1090;&#1077; txt &#1080;&#1083;&#1080; &#1077;&#1097;&#1105; &#1082;&#1072;&#1082; &#1074;&#1072;&#1084; &#1091;&#1076;&#1086;&#1073;&#1085;&#1077;&#1081;). &#1042; &#1089;&#1082;&#1086;&#1087;&#1080;&#1088;&#1086;&#1074;&#1072;&#1085;&#1085;&#1086;&#1081; &#1089;&#1090;&#1072;&#1090;&#1100;&#1077;\n&#1074;&#1099;&#1095;&#1077;&#1088;&#1082;&#1085;&#1080;&#1090;&#1077; &#1080;&#1079; &#1101;&#1090;&#1086;&#1075;&#1086; &#1089;&#1087;&#1080;&#1089;&#1082;&#1072; 1-&#1099;&#1081; &#1082;&#1086;&#1096;&#1077;&#1083;&#1105;&#1082; &#1080; &#1087;&#1077;&#1088;&#1077;&#1084;&#1077;&#1089;&#1090;&#1080;&#1090;&#1077; 2-&#1086;&#1081; &#1082;&#1086;&#1096;&#1077;&#1083;&#1105;&#1082; &#1085;&#1072;\n&#1084;&#1077;&#1089;&#1090;&#1086; 1-&#1075;&#1086;, &#1082;&#1086;&#1090;&#1086;&#1088;&#1099;&#1081; &#1042;&#1099; &#1089;&#1090;&#1105;&#1088;&#1083;&#1080;, &#1090;&#1077;&#1084; &#1089;&#1072;&#1084;&#1099;&#1084; &#1087;&#1077;&#1088;&#1077;&#1084;&#1077;&#1089;&#1090;&#1080;&#1090;&#1077; &#1089;&#1087;&#1080;&#1089;&#1086;&#1082; &#1085;&#1072; &#1086;&#1076;&#1085;&#1091; &#1089;&#1090;&#1088;&#1086;&#1082;&#1091; &#1074;&#1099;&#1096;&#1077; (6 &#1089;&#1090;&#1072;&#1085;&#1086;&#1074;&#1080;&#1090;&#1089;&#1103; 5, 5 &#1089;&#1090;&#1072;&#1085;&#1086;&#1074;&#1080;&#1090;&#1089;&#1103; 4 -..), &#1080; &#1074;&#1087;&#1080;&#1096;&#1080;&#1090;&#1077; &#1074; 6-&#1090;&#1091;&#1102; &#1089;&#1090;&#1088;&#1086;&#1095;&#1082;&#1091; &#1042;&#1072;&#1096; &#1082;&#1086;&#1096;&#1077;&#1083;&#1105;&#1082;.\n3.&#1046;&#1077;&#1083;&#1072;&#1090;&#1077;&#1083;&#1100;&#1085;&#1086; &#1085;&#1077; &#1076;&#1077;&#1083;&#1072;&#1090;&#1100; &#1074; &#1101;&#1090;&#1086;&#1081; &#1089;&#1090;&#1072;&#1090;&#1100;&#1077; &#1082;&#1072;&#1082;&#1080;&#1077; &#1083;&#1080;&#1073;&#1086; &#1080;&#1079;&#1084;&#1077;&#1085;&#1077;&#1085;&#1080;&#1103;, &#1090;&#1072;&#1082; &#1082;&#1072;&#1082; &#1101;&#1090;&#1086;&#1090;\n&#1090;&#1077;&#1082;&#1089;&#1090; &#1085;&#1072;&#1080;&#1073;&#1086;&#1083;&#1077;&#1077; &#1087;&#1086;&#1085;&#1103;&#1090;&#1085;&#1086; &#1080;&#1079;&#1083;&#1072;&#1075;&#1072;&#1077;&#1090; &#1089;&#1084;&#1099;&#1089;&#1083;. &#1056;&#1072;&#1079;&#1084;&#1077;&#1089;&#1090;&#1080;&#1090;&#1077; &#1101;&#1090;&#1091; &#1089;&#1090;&#1072;&#1090;&#1100;&#1102; &#1085;&#1072; &#1085;&#1077; &#1084;&#1077;&#1085;&#1077;&#1077;\n&#1095;&#1077;&#1084; 200 &#1092;&#1086;&#1088;&#1091;&#1084;&#1072;&#1093; &#1080; &#1085;&#1086;&#1074;&#1086;&#1089;&#1090;&#1085;&#1099;&#1093; &#1083;&#1077;&#1085;&#1090;&#1072;&#1093; (News Groups) &#1080;&#1083;&#1080; &#1088;&#1072;&#1089;&#1089;&#1099;&#1083;&#1072;&#1081;&#1090;&#1077; &#1087;&#1086;\n&#1087;&#1086;&#1095;&#1090;&#1077;. &#1047;&#1072;&#1087;&#1086;&#1084;&#1085;&#1080;&#1090;&#1077;, &#1095;&#1077;&#1084; &#1073;&#1086;&#1083;&#1100;&#1096;&#1077; &#1074;&#1099; &#1088;&#1072;&#1079;&#1084;&#1077;&#1089;&#1090;&#1080;&#1090;&#1077;, &#1090;&#1077;&#1084; &#1074;&#1099;&#1096;&#1077; &#1073;&#1091;&#1076;&#1077;&#1090; &#1074;&#1072;&#1096; &#1076;&#1086;&#1093;&#1086;&#1076;, &#1080;\n&#1101;&#1090;&#1086;&#1090; &#1076;&#1086;&#1093;&#1086;&#1076; &#1073;&#1091;&#1076;&#1077;&#1090; &#1085;&#1072;&#1087;&#1088;&#1103;&#1084;&#1091;&#1102; &#1079;&#1072;&#1074;&#1080;&#1089;&#1077;&#1090;&#1100; &#1086;&#1090; &#1074;&#1072;&#1089;. &#1056;&#1072;&#1079;&#1084;&#1077;&#1097;&#1077;&#1085;&#1080;&#1077; &#1101;&#1090;&#1086;&#1081; &#1089;&#1090;&#1072;&#1090;&#1100;&#1080; &#1085;&#1072; 200\n&#1092;&#1086;&#1088;&#1091;&#1084;&#1072;&#1093;, &#1076;&#1072;&#1078;&#1077; &#1085;&#1072; &#1089;&#1072;&#1084;&#1099;&#1093; &#1084;&#1072;&#1083;&#1086;&#1087;&#1086;&#1089;&#1077;&#1097;&#1072;&#1077;&#1084;&#1099;&#1093;, &#1075;&#1072;&#1088;&#1072;&#1085;&#1090;&#1080;&#1088;&#1091;&#1077;&#1090; &#1042;&#1072;&#1084; &#1076;&#1086;&#1093;&#1086;&#1076;. &#1041;&#1086;&#1083;&#1100;&#1096;&#1077;\n&#1088;&#1072;&#1079;&#1084;&#1077;&#1097;&#1077;&#1085;&#1080;&#1081; - &#1073;&#1086;&#1083;&#1100;&#1096;&#1077; &#1076;&#1086;&#1093;&#1086;&#1076; &#1087;&#1088;&#1080; &#1090;&#1086;&#1084; &#1074; &#1075;&#1077;&#1086;&#1084;&#1077;&#1090;&#1088;&#1080;&#1095;&#1077;&#1089;&#1082;&#1086;&#1081; &#1087;&#1088;&#1086;&#1075;&#1088;&#1077;&#1089;&#1089;&#1080;&#1080;. &#1055;&#1054;&#1052;&#1053;&#1048;&#1058;&#1045;\n&#1069;&#1058;&#1054;!!! &#1069;&#1090;&#1086;&#1090; &#1073;&#1080;&#1079;&#1085;&#1077;&#1089; &#1087;&#1088;&#1086;&#1076;&#1086;&#1083;&#1078;&#1072;&#1077;&#1090; &#1089;&#1091;&#1097;&#1077;&#1089;&#1090;&#1074;&#1086;&#1074;&#1072;&#1090;&#1100; &#1080; &#1087;&#1088;&#1086;&#1094;&#1074;&#1077;&#1090;&#1072;&#1090;&#1100; &#1090;&#1086;&#1083;&#1100;&#1082;&#1086; &#1041;&#1051;&#1040;&#1043;&#1054;&#1044;&#1040;&#1056;&#1071;\n&#1063;&#1045;&#1057;&#1058;&#1053;&#1054;&#1057;&#1058;&#1048; &#1048; &#1057;&#1045;&#1056;&#1068;&#1045;&#1047;&#1053;&#1054;&#1057;&#1058;&#1048; &#1059;&#1063;&#1040;&#1057;&#1058;&#1053;&#1048;&#1050;&#1054;&#1042;. &#1048;&#1090;&#1072;&#1082;, &#1082;&#1086;&#1075;&#1076;&#1072; &#1074;&#1099; &#1076;&#1086;&#1089;&#1090;&#1080;&#1075;&#1085;&#1077;&#1090;&#1077; &#1087;&#1077;&#1088;&#1074;&#1086;&#1081;\n&#1087;&#1086;&#1079;&#1080;&#1094;&#1080;&#1080;, &#1074;&#1099; &#1073;&#1091;&#1076;&#1077;&#1090;&#1077; &#1080;&#1084;&#1077;&#1090;&#1100; &#1090;&#1099;&#1089;&#1103;&#1095;&#1080; &#1076;&#1086;&#1083;&#1083;&#1072;&#1088;&#1086;&#1074; &#1087;&#1088;&#1086;&#1089;&#1090;&#1086; &#1082;&#1072;&#1082; &#1089;&#1086;&#1079;&#1076;&#1072;&#1090;&#1077;&#1083;&#1100; &#1089;&#1087;&#1080;&#1089;&#1082;&#1072;!\n&#1069;&#1090;&#1086; &#1089;&#1090;&#1086;&#1080;&#1090; 180 &#1088;&#1091;&#1073;&#1083;&#1077;&#1081; &#1080; &#1089;&#1086;&#1074;&#1089;&#1077;&#1084; &#1087;&#1091;&#1089;&#1090;&#1103;&#1082;&#1086;&#1074;&#1072;\n\n[color=red:29bad9a59f][glow=red:29bad9a59f]&#1053;&#1091; &#1074;&#1086;&#1090; &#1090;&#1086;&#1083;&#1100;&#1082;&#1086; &#1082;&#1080;&#1076;&#1072;&#1083; &#1085;&#1072;&#1084; &#1079;&#1076;&#1077;&#1089;&#1100; &#1085;&#1077; &#1093;&#1074;&#1072;&#1090;&#1072;&#1083;&#1086;... &#1041;&#1040;&#1053;.\nHidden[/glow:29bad9a59f] [/color:29bad9a59f]'),(30,'4af8f3216f','ÐšÐ°Ðº Ð½Ð°Ð¹Ñ‚Ð¸ Ð°ÑÐµÐºÑÑƒÐ°Ð»ÑŒÐ½ÑƒÑŽ Ð´ÐµÐ²ÑƒÑˆÐºÑƒ','ÐŸÑ€Ð¸Ð²ÐµÑ‚ Ð²ÑÐµÐ¼!!!\nÑ ÑÐ°Ð¼ Ð°ÑÐµÐºÑÑƒÐ°Ð» Ð¸ Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð½Ðµ Ð±Ñ‹Ð»Ð¾ Ð¿Ñ€Ð¾Ð±Ð»ÐµÐ¼ Ñ Ð´ÐµÐ²ÑƒÑˆÐºÐ¾Ð¹ Ñ…Ð¾Ñ‡Ñƒ Ð½Ð°Ð¹Ñ‚Ð¸ Ð°ÑÐµÐºÑÑƒÐ°Ð»ÑŒÐ½ÑƒÑŽ Ð´ÐµÐ²ÑƒÑˆÐºÑƒ. ÐÐ¾ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð½Ðµ Ð·Ð½Ð°ÑŽ Ð³Ð´Ðµ ÐµÐµ Ð¼Ð¾Ð¶Ð½Ð¾ Ð²ÑÑ‚Ñ€ÐµÑ‚Ð¸Ñ‚ÑŒ. ÐœÐ¾Ð¶ÐµÑ‚ ÐºÑ‚Ð¾ Ð¿Ð¾Ð´ÑÐºÐ°Ð¶ÐµÑ‚?'),(31,'1a404a580c','','Ñ...ÐºÐ°Ðº Ñ Ð¿Ð¾Ð½ÑÐ»Ð°,Ñ‡Ñ‚Ð¾ Ð°Ð²Ñ‚Ð¾Ñ€ Ñ…Ð¾Ñ‡ÐµÑ‚ ÑÐ¾Ð·Ð´Ð°Ñ‚ÑŒ ÑÐµÐ¼ÑŒÑŽ Ñ Ñ‚Ð°ÐºÐ¾Ð¹ Ð¶Ðµ Ð´ÐµÐ²ÑƒÑˆÐºÐ¾Ð¹ ÐºÐ°Ðº Ð¾Ð½ ÑÐ°Ð¼? Ð° Ñ‡Ñ‚Ð¾ Ð² ÑÑ‚Ð¾Ð¼ Ñ‚Ð°ÐºÐ¾Ð³Ð¾ Ñ‡Ñ‚Ð¾ Ð²ÑÐµ ÑÑ€Ð°Ð·Ñƒ Ð½Ð°Ñ‡Ð°Ð»Ð¸ Ð¿Ñ€Ð¸ÐºÐ°Ð»Ñ‹Ð²Ð°Ñ‚ÑŒÑÑ? Ñ‡Ñ‚Ð¾ Ð·Ð½Ð°Ñ‡Ð¸Ñ‚ Ð·Ð°Ñ‡ÐµÐ¼ Ð¾Ð½Ð° ÐµÐ¼Ñƒ Ð½ÑƒÐ¶Ð½Ð°? ÐºÐ°Ðº Ð±ÑƒÐ´Ñ‚Ð¾ Ð»ÑŽÐ´Ð¸ Ð¶ÐµÐ½ÑÑ‚ÑÑ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ€Ð°Ð´Ð¸ Ñ‚Ð¾Ð³Ð¾ Ñ‡Ñ‚Ð¾Ð± Ð·Ð°Ð½Ð¸Ð¼Ð°Ñ‚ÑŒÑÑ ÑÐµÐºÑÐ¾Ð¼.Ð´Ð° ÐµÑÐ»Ð¸ Ð¾Ð½ Ð½Ðµ Ð½ÑƒÐ¶ÐµÐ½ Ð¸Ð¼ Ð¾Ð±Ð¾Ð¸Ð¼ - Ð·Ð½Ð°Ñ‡Ð¸Ñ‚ Ð½Ð¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ð¾ Ð²ÑÐµ Ð±ÑƒÐ´ÐµÑ‚,Ð»ÑŽÐ±Ð¾Ð²ÑŒ-Ñ‚Ð¾ Ð½Ð¸ÐºÑ‚Ð¾ Ð½Ðµ Ð¾Ñ‚Ð¼ÐµÐ½ÑÐ».Ð´Ð»Ñ Ð½Ð°Ñ Ð¼Ð¾Ð¶ÐµÑ‚ Ð¸ Ð½ÐµÐ½Ð¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ð¾ Ñ‡Ñ‚Ð¾ Ð»ÑŽÐ±Ð¾Ð²ÑŒ Ð±ÐµÐ· ÑÐµÐºÑÐ°,Ð½Ð¾ Ð´Ð»Ñ ÐºÐ¾Ð³Ð¾-Ñ‚Ð¾ Ð¼Ð¾Ð¶ÐµÑ‚ Ð¸ Ð½Ð¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ð¾,Ð¿Ð¾Ñ‡ÐµÐ¼Ñƒ Ð½ÐµÑ‚.ÐµÑÑ‚ÑŒ ÑÐµÐ¼ÑŒÐ¸,ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ñ‚Ð°Ðº Ð¶Ð¸Ð²ÑƒÑ‚ Ð¸ Ð²ÑÐµ Ð¸Ñ… ÑƒÑÑ‚Ñ€Ð°Ð¸Ð²Ð°ÐµÑ‚.Ð¸ ÑÑ‚Ð¸Ñ€ÐºÐ°,Ð³Ð¾Ñ‚Ð¾Ð²ÐºÐ° Ð¸ ÑƒÐ±Ð¾Ñ€ÐºÐ° Ñ‚ÑƒÑ‚ Ð½Ð¸ Ð¿Ñ€Ð¸ Ñ‡ÐµÐ¼...Ð»ÑŽÐ´Ð¸ Ð²Ð¾Ð¾Ð±Ñ‰Ðµ Ð¶ÐµÐ½ÑÑ‚ÑÑ Ð¿Ñ€ÐµÐ¶Ð´Ðµ Ð²ÑÐµÐ³Ð¾ Ð´Ð»Ñ Ñ‚Ð¾Ð³Ð¾ Ñ‡Ñ‚Ð¾Ð± Ð±Ñ‹Ñ‚ÑŒ Ð²Ð¼ÐµÑÑ‚Ðµ,Ð° ÑƒÐ¶ Ð´Ð°Ð»ÑŒÑˆÐµ ÐºÐ°Ðº Ð¾Ð½Ð¸ Ð±ÑƒÐ´ÑƒÑ‚ Ð¶Ð¸Ñ‚ÑŒ - ÑÑ‚Ð¾ ÐºÐ°ÑÐ°ÐµÑ‚ÑÑ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð¸Ñ… Ð´Ð²Ð¾Ð¸Ñ….\nÑ‡Ñ‚Ð¾ Ð´Ð¾ Ñ‚Ð¾Ð³Ð¾,Ð³Ð´Ðµ Ð²ÑÑ‚Ñ€ÐµÑ‚Ð¸Ñ‚ÑŒ Ñ‚Ð°ÐºÑƒÑŽ Ð´ÐµÐ²ÑƒÑˆÐºÑƒ,Ñ Ð´ÑƒÐ¼Ð°ÑŽ Ñ‡Ñ‚Ð¾ Ð½Ð°Ð´ÐµÐ¶Ð½Ñ‹Ð¼ Ð¼ÐµÑÑ‚Ð¾Ð¼ Ð¼Ð¾Ð³ÑƒÑ‚ Ð±Ñ‹Ñ‚ÑŒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ &quot;ÐºÐ»ÑƒÐ±Ñ‹ Ð¿Ð¾ Ð¸Ð½Ñ‚ÐµÑ€ÐµÑÐ°Ð¼&quot; - Ð»Ð¸Ð±Ð¾ Ñ€ÐµÐ°Ð»ÑŒÐ½Ñ‹Ðµ Ð»Ð¸Ð±Ð¾ Ð²Ð¸Ñ€Ñ‚ÑƒÐ°Ð»ÑŒÐ½Ñ‹Ðµ.Ñƒ Ð°ÑÐµÐºÑÑƒÐ°Ð»Ð¾Ð² ÐµÑÑ‚ÑŒ &quot;ÑÐ²Ð¾Ð¸ Ð¼ÐµÑÑ‚Ð°&quot; Ð² Ð¸Ð½ÐµÑ‚Ðµ Ð¿Ð¾ ÐºÑ€Ð°Ð¹Ð½ÐµÐ¹ Ð¼ÐµÑ€Ðµ,Ð´ÑƒÐ¼Ð°ÑŽ ÑÑ‚Ð¾ Ð¼Ð¾Ð¶ÐµÑ‚ Ð¿Ð¾Ð¼Ð¾Ñ‡ÑŒ.'),(33,'9e3c6fa06b','Re: ÐšÐ°Ðº Ð½Ð°Ð¹Ñ‚Ð¸ Ð°ÑÐµÐºÑÑƒÐ°Ð»ÑŒÐ½ÑƒÑŽ Ð´ÐµÐ²ÑƒÑˆÐºÑ','[quote:9e3c6fa06b=\"Bulbaset\"]ÐŸÑ€Ð¸Ð²ÐµÑ‚ Ð²ÑÐµÐ¼!!!\nÑ ÑÐ°Ð¼ [u:9e3c6fa06b][b:9e3c6fa06b]Ð°ÑÐµÐºÑÑƒÐ°Ð»[/b:9e3c6fa06b][/u:9e3c6fa06b] Ð¸ Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð½Ðµ Ð±Ñ‹Ð»Ð¾ Ð¿Ñ€Ð¾Ð±Ð»ÐµÐ¼ Ñ Ð´ÐµÐ²ÑƒÑˆÐºÐ¾Ð¹ Ñ…Ð¾Ñ‡Ñƒ Ð½Ð°Ð¹Ñ‚Ð¸ Ð°ÑÐµÐºÑÑƒÐ°Ð»ÑŒÐ½ÑƒÑŽ Ð´ÐµÐ²ÑƒÑˆÐºÑƒ. ÐÐ¾ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð½Ðµ Ð·Ð½Ð°ÑŽ Ð³Ð´Ðµ ÐµÐµ Ð¼Ð¾Ð¶Ð½Ð¾ Ð²ÑÑ‚Ñ€ÐµÑ‚Ð¸Ñ‚ÑŒ. ÐœÐ¾Ð¶ÐµÑ‚ ÐºÑ‚Ð¾ Ð¿Ð¾Ð´ÑÐºÐ°Ð¶ÐµÑ‚?[/quote:9e3c6fa06b]\nÐÑÐµÐºÑÑƒÐ°Ð»?? Ð½Ð° Ñ„Ð¾Ñ€ÑƒÐ¼Ðµ Ð´Ñ€Ð¾Ñ‡ÐµÑ€Ð¾Ð²???? ÐšÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ Ð¿Ñ€Ð¸Ð½Ð°Ð´Ð»ÐµÐ¶Ð¸Ñ‚ Ð¿Ð¾Ñ€Ð½Ð¾ÑÐ°Ð¹Ñ‚Ñƒ???? Ð£ ÐºÐ¾Ð³Ð¾-Ñ‚Ð¾ Ñ€Ð°Ð·Ð´Ð²Ð¾ÐµÐ½Ð¸Ðµ Ð»Ð¸Ñ‡Ð½Ð¾ÑÑ‚Ð¸...'),(34,'67be4a8363','','ÐÐµÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð³ÐµÐ¸ Ð´ÑƒÐ¼Ð°ÑŽÑ‚, Ñ‡Ñ‚Ð¾ Ð¾Ð½Ð¸ Ð°ÑÐµÐºÑÑƒÐ°Ð»ÑŒÐ½Ñ‹... Ð›Ð¸Ð±Ð¾ Ð·Ð½Ð°ÑŽÑ‚, Ñ‡Ñ‚Ð¾ Ð³ÐµÐ¸, Ð½Ð¾ Ð½Ðµ Ð¿Ñ€Ð¸Ð·Ð½Ð°ÑŽÑ‚ ÑÑ‚Ð¾ - ÑÑ‡Ð¸Ñ‚Ð°ÑŽÑ‚ Ð½ÐµÐ½Ð¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ñ‹Ð¼ Ð¸ Ñ…Ð¾Ñ‚ÑÑ‚ Ð¶Ð¸Ð·Ð½ÑŒ Ð¿Ñ€Ð¾Ð¶Ð¸Ñ‚ÑŒ Ñ Ð¶ÐµÐ½Ñ‰Ð¸Ð½Ð¾Ð¹, Ð° Ð½ÐµÐ¶ÐµÐ»Ð°Ð½Ð¸Ðµ Ð·Ð°Ð½Ð¸Ð¼Ð°Ñ‚ÑŒÑÑ ÑÐµÐºÑÐ¾Ð¼ - ÑÐ¿Ð¸ÑÑ‹Ð²Ð°ÑŽÑ‚ Ð½Ð° Ð°ÑÐµÐºÑÑƒÐ°Ð»Ð¸Ð·Ð¼.\n\nÐŸÐ¾Ð¿Ñ€Ð¾Ð±ÑƒÐ¹Ñ‚Ðµ Ð¿Ñ€Ð¾Ð±Ð¸Ñ‚ÑŒ ÑÑ‚Ñƒ ÑÑ‚Ð¾Ñ€Ð¾Ð½Ñƒ.'),(35,'89d7061127','','Ð¢Ð°ÐºÐ¾Ðµ Ð´Ð¾Ð±Ñ€Ð¾ Ð¿Ð¾ÑÑ‚ÑÑ‚ Ð½Ð° 2ch.so Ð½ÐµÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð¾Ð¼ÐµÑ€Ð·Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ðµ Ð»ÑŽÐ´Ð¸ÑˆÐºÐ¸'),(36,'89b2ee9015','','&#1047;&#1072;&#1087;&#1086;&#1089;&#1090;&#1080;&#1090;&#1100; &#1095;&#1090;&#1086;&#1083;&#1080; &#1077;&#1097;&#1105; &#1082;&#1072;&#1088;&#1090;&#1080;&#1085;&#1086;&#1095;&#1077;&#1082;?\n :schlick:'),(37,'3aa687f5fb','','ÐšÐ°Ðº Ð²Ð°Ð¼ Ñ‚Ð°ÐºÐ¾Ðµ? })i({  :fap:  })i({'),(38,'524d87c1c0','','ÐžÑ‡Ð°Ñ€ÑƒÐ²Ð°ÑˆÐºÐ¸, Ñ Ð¿Ñ€ÑÐ¼Ð¾ Ð²ÑÑ Ð³Ð¾Ñ€ÑŽ, ÐºÐ¾Ð³Ð´Ð° Ð¿Ñ€ÐµÐ´ÑÑ‚Ð°Ð²Ð»ÑÑŽ, Ð§Ð¢Ðž Ð¾Ð½Ð¸ ÑÐ¾ Ð¼Ð½Ð¾Ð¹ Ð¼Ð¾Ð³ÑƒÑ‚ ÑÐ´ÐµÐ»Ð°Ñ‚ÑŒ. Ð¼Ð¼Ð¼... :smile_fem:'),(39,'8e07c6ffd9','','Ð›ÐµÐ³ÐºÐ¾Ð¼Ñ‹ÑÐ»ÐµÐ½Ð½Ñ‹Ðµ  ÑˆÐ°Ð»ÑƒÐ½ÑŒÐ¸ Ð¿Ð¾Ð·Ð¸Ñ€ÑƒÑŽÑ‚ Ð½Ðµ Ð¿Ð¾-Ð´ÐµÑ‚ÑÐºÐ¸  :cool:'),(40,'72dca6f177','','Ð•Ñ‰Ñ‘ Ð´ÐµÐ²Ñ‡Ð¾Ð½Ð¾Ñ‡ÐºÐ¸  :oops:'),(41,'afa29eb326','','ÐÐµÐ¼Ð½Ð¾Ð³Ð¾ :razz:  Ð²Ð¾Ð·Ð´ÑƒÑˆÐ½Ð¾Ð¹ ÑÑ€Ð¾Ñ‚Ð¸ÐºÐ¸  :alter:'),(42,'70486d5f80','ÐŸÐ¾Ð´Ð³Ð»ÑÐ´Ñ‹Ð²Ð°Ð½Ð¸Ðµ','[color=darkred:70486d5f80][glow=red:70486d5f80]Ð¯ Ð»ÑŽÐ±Ð»ÑŽ Ð¿Ð¾Ñ‚Ð³Ð»ÑÐ´Ñ‹Ð²Ð°Ñ‚ÑŒ Ð·Ð° Ð¿Ñ€Ð¾Ñ‚Ð¸Ð²Ð¾Ð¿Ð¾Ð»Ð¾Ð¶Ð½Ñ‹Ð¼ Ð¿Ð¾Ð»Ð¾Ð¼ Ñ‚Ð¾ ÐµÑÑ‚ÑŒ Ð·Ð° Ð´ÐµÐ²Ñ‡Ñ‘Ð½ÐºÐ°Ð¼Ð¸ Ñ…Ð¾Ñ‡Ñƒ Ð·Ð½Ð°Ñ‚ÑŒ ÐµÑÑ‚ÑŒ Ð»Ð¸ ÑÑ€ÐµÐ´Ð¸ Ð½Ð°Ñ Ñ‚Ð°ÐºÐ¸Ðµ Ð¶Ðµ ÐºÐ°Ðº Ñ?[/glow:70486d5f80][/color:70486d5f80] :hello:'),(43,'a34cfc58c4','','Ð¯ Ð»ÑŽÐ±Ð»ÑŽ ÑÑ‚Ð¾ Ð´ÐµÐ»Ð°Ñ‚ÑŒ'),(44,'5646b4bb3a','','Ð½Ðµ... Ð½Ðµ Ð·Ð°Ð½Ð¸Ð¼Ð°ÑŽÑÑŒ Ñ‚Ð°ÐºÐ¸Ð¼..  :neutral:  = ) Ð¿Ñ€Ð¾Ñ‰Ðµ ÑƒÐ¶Ðµ Ð¿Ð¾-Ð½Ð¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ð¾Ð¼Ñƒ'),(45,'35b2102334','','Ð´Ð° Ð·Ð°Ñ‡ÐµÐ¼ ÑÑ‚Ð¾ Ð½ÑƒÐ¶Ð½Ð¾?\nÐºÐ°Ð¹Ñ„Ð° Ð² ÑÑ‚Ð¾Ð¼ Ð½Ðµ Ð²Ð¸Ð¶Ñƒ'),(46,'f47fe58c3e','','Ð¯ ÐºÐ¾Ð³Ð´Ð° Ð² Ð°Ñ€Ð¼Ð¸Ð¸ ÑÐ»ÑƒÐ¶Ð¸Ð», Ñ‚Ð°Ðº Ð¼Ñ‹ Ñ Ð¿Ð°Ñ†Ð°Ð½Ð°Ð¼Ð¸ Ð»ÑŽÐ±Ð¸Ð»Ð¸ Ð¿Ð¾Ð´Ð³Ð»ÑÐ´Ñ‹Ð²Ð°Ñ‚ÑŒ Ð·Ð° Ð´ÐµÐ²ÐºÐ°Ð¼Ð¸ Ð¸Ð· ÑÐ¾ÑÐµÐ´Ð½ÐµÐ³Ð¾ ÐºÐ¾Ð»Ð»ÐµÐ´Ð¶Ð° :fap:  , Ð½Ð°ÑˆÐ° Ñ‡Ð°ÑÑ‚ÑŒ Ð¿Ð¾Ð»ÑƒÑ‡Ð°ÐµÑ‚ÑÑ Ð² Ñ†ÐµÐ½Ñ‚Ñ€Ðµ Ð³Ð¾Ñ€Ð¾Ð´Ð° Ð±Ñ‹Ð»Ð° Ð° Ñ€ÑÐ´Ð¾Ð¼ ÐºÐ¾Ð»Ð»ÐµÐ´Ð¶ Ð¸ Ð¾ÐºÐ½Ð¾ Ð¶ÐµÐ½ÑÐºÐ¾Ð¹ Ñ€Ð°Ð·Ð´Ð¸Ð²Ð°Ð»ÐºÐ¸ Ð±Ð°ÑÐµÐ¹Ð½Ð° Ð²Ñ‹Ñ…Ð¾Ð´Ð¸Ð»Ð¾ Ð¿Ñ€ÑÐ¼Ð¾ Ðº Ð½Ð°Ð¼ Ð² ÐºÑƒÑ€Ð¸Ð»ÐºÑƒ... :pink:  Ð½Ñƒ Ñ‚Ð°Ðº Ð¿Ñ€ÐµÐ´ÑÑ‚Ð°Ð²Ñ‚ÑŒÑ‚Ðµ ÑÐµÐ±Ðµ ÐºÑƒÑ‡Ð° ÑÐ¾Ð»Ð´Ð°Ñ„Ð¾Ð½Ð¾Ð² ÑÑ‚Ð¾Ð¸Ñ‚ Ð¿Ð¸Ñ‚Ð°ÐµÑ‚ÑÑ Ð¿Ð¾Ð´ÑÐ¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ ÐºÐ°Ðº Ð¼Ð¾Ð»Ð¾Ð´Ñ‹Ðµ Ñ‚ÐµÐ»Ð¾Ñ‡ÐºÐ¸ Ð¿ÐµÑ€ÐµÐ´Ð¸Ð²Ð°ÐµÑŽÑ‚ÑÑ Ð¿Ñ€Ð°Ð²Ð´Ð° Ð¾ÐºÐ½Ð¾ Ð±Ñ‹Ð»Ð¾ Ð½Ð° Ð²Ñ‚Ð¾Ñ€Ð¾Ð¼ ÑÑ‚Ð°Ð¶Ðµ. Ð Ð¿Ð¾Ñ‚Ð¾Ð¼ ÐºÐ¾Ð³Ð´Ð° Ð´ÐµÐ²ÐºÑ‹ Ð²Ñ‹ÐºÑƒÐ¿Ð¸Ð»Ð¸ Ñ‡Ñ‚Ð¾ Ð¼Ñ‹ Ð¿Ð¾Ð´Ð³Ð»ÑÐ´Ñ‹Ð²Ð°ÐµÐ¼ Ñ‚Ð°Ðº Ð¸Ð½Ð¾Ð³Ð´Ð° ÐµÑ‰Ðµ ÑƒÑÑ‚Ñ€Ð°Ð¸Ð²Ð°Ð»Ð¸ Ð½Ð°Ð¼ ÑÑ€Ð¾Ñ‚Ð¸Ñ‡ÐµÑÐºÐ¾Ðµ ÑˆÐ¾Ñƒ Ð¾Ñ… Ð¿Ð¾Ð¼Ð½ÑŽ Ñ‡ÑƒÑ‚ÑŒ ÐºÑ€Ñ‹ÑˆÑƒ Ð½Ðµ ÑÐ½Ð¾ÑÐ¸Ð»Ð¾... :rasta:'),(47,'4fd8960bb1','','Ð Ñ ÑÐ¿ÐµÑ†Ð¸Ð°Ð»ÑŒÐ½Ð¾ ÑÑ‚Ð¸Ð¼ Ð·Ð°Ð½Ð¸Ð¼Ð°Ñ‚ÑŒÑÑ Ð½Ðµ Ð±ÑƒÐ´Ñƒ, Ð½Ð¾ ÐµÑÐ»Ð¸ Ð¿Ð¾Ð´Ð²ÐµÑ€Ð½Ñ‘Ñ‚ÑÑ Ñ‚Ð°ÐºÐ°Ñ Ð²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ÑÑ‚ÑŒ, Ñ‚Ð¾ Ð¿Ð¾Ñ‡ÐµÐ¼Ñƒ Ð±Ñ‹ Ð½Ðµ Ð¿Ð¾Ñ€Ð°Ð´Ð¾Ð²Ð°Ñ‚ÑŒ Ð³Ð»Ð°Ð·Ð°?\nÐŸÐ¾ÑÐ»ÐµÐ´Ð½Ð¸Ð¹ Ñ€Ð°Ð· Ñ ÑÑ‚Ð¸Ð¼ Ð·Ð°Ð½Ð¸Ð¼Ð°Ð»ÑÑ Ð² Ð¾ÐºÑ‚ÑÐ±Ñ€Ðµ ÑÑ‚Ð¾Ð³Ð¾ Ð³Ð¾Ð´Ð°. Ð”ÐµÐ»Ð¾ Ð±Ñ‹Ð»Ð¾ Ñ‚Ð°Ðº. ÐÐ° 2 Ð¼ÐµÑÑÑ†Ð° Ñ Ð¾Ñ‚Ð¿Ñ€Ð°Ð²Ð¸Ð»ÑÑ Ð½Ð° ÑÑ‚Ð°Ð¶Ð¸Ñ€Ð¾Ð²ÐºÑƒ Ð² Ð´Ñ€ÑƒÐ³Ð¾Ð¹ Ð³Ð¾Ñ€Ð¾Ð´. ÐŸÐ¾Ð¼Ð¸Ð¼Ð¾ ÑÑ‚Ð¾Ð³Ð¾ Ð¼ÐµÐ½Ñ Ð¾Ñ‚Ð¿Ñ€Ð°Ð²Ð¸Ð»Ð¸ Ð½Ð° 2 Ð½ÐµÐ´ÐµÐ»Ð¸ Ð² ÑÐ°Ð½Ð°Ñ‚Ð¾Ñ€Ð¸Ð¹ Ð´Ð»Ñ Ð¿Ð¾Ð¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð¸Ñ Ð·Ð´Ð¾Ñ€Ð¾Ð²ÑŒÑ. ÐžÐ´Ð½Ð° Ð¸Ð· Ð¿Ñ€Ð¾Ñ†ÐµÐ´ÑƒÑ€ Ð·Ð°ÐºÐ»ÑŽÑ‡Ð°Ð»Ð°ÑÑŒ Ð² Ð¿Ñ€Ð¸Ð½ÑÑ‚Ð¸Ð¸ Ð²Ð°Ð½Ð½Ñ‹ ÑÐ¾ ÑÐ¿ÐµÑ†Ð¸Ð°Ð»ÑŒÐ½Ñ‹Ð¼Ð¸ ÑÐ¾Ð»ÑÐ¼Ð¸. ÐŸÐ¾ÑÐ»Ðµ Ð¿Ñ€Ð¸Ð½ÑÑ‚Ð¸Ñ Ð´Ð°Ð½Ð½Ð¾Ð¹ Ð¿Ñ€Ð¾Ñ†ÐµÐ´ÑƒÑ€Ñ‹ Ñ Ð¾Ð±Ð½Ð°Ñ€ÑƒÐ¶Ð¸Ð», Ñ‡Ñ‚Ð¾ Ð² Ð·Ð°Ð¼Ð¾Ñ‡Ð½Ð¾Ð¹ ÑÐºÐ²Ð°Ð¶Ð¸Ð½Ðµ Ð´Ð²ÐµÑ€Ð¸, Ð¸Ð´ÑƒÑ‰ÐµÐ¹ Ð² Ð²Ð°Ð½Ð½ÑƒÑŽ ÐºÐ¾Ð¼Ð½Ð°Ñ‚Ñƒ Ð¾Ñ‡ÐµÐ½ÑŒ Ñ…Ð¾Ñ€Ð¾ÑˆÐ¸Ð¹ Ð¾Ð±Ð·Ð¾Ñ€. ÐÐ¾ ÑÑ‚Ð¾ Ð±Ñ‹Ð»Ð¾ ÐµÑ‰Ñ‘ Ð½Ðµ Ð²ÑÑ‘. ÐŸÑ€Ð¸Ð½ÑÑ‚ÑŒ Ñ‚Ñƒ Ð¶Ðµ Ð²Ð°Ð½Ð½Ñƒ ÑÐ¾Ð±Ð¸Ñ€Ð°Ð»Ð°ÑÑŒ ÐµÑ‰Ñ‘ Ð¾Ð´Ð½Ð° Ð¶ÐµÐ½Ñ‰Ð¸Ð½Ð° Ð»ÐµÑ‚ 35. Ð¢ÑƒÑ‚ Ð¼Ð½Ðµ Ð² Ð³Ð¾Ð»Ð¾Ð²Ñƒ Ð¸ Ð¿Ñ€Ð¸ÑˆÐ»Ð° ÑÑ‚Ð° Ð¼Ñ‹ÑÐ»ÑŒ. Ð’ Ð¾Ð±Ñ‰ÐµÐ¼, ÐºÐ¾Ð³Ð´Ð° ÐµÑ‘ Ð¿Ñ€Ð¸Ð³Ð»Ð°ÑÐ¸Ð»Ð¸ Ð½Ð° Ð²Ð°Ð½Ð½Ñƒ, Ð¾Ð½Ð° Ð·Ð°ÑˆÐ»Ð°, Ð·Ð°Ñ‰Ñ‘Ð»ÐºÐ½ÑƒÐ»Ð° Ð´Ð²ÐµÑ€ÑŒ.:roll: Ð’ ÐºÐ¾Ñ€Ð¸Ð´Ð¾Ñ€Ðµ, Ðº Ð¼Ð¾ÐµÐ¼Ñƒ ÑÑ‡Ð°ÑÑ‚ÑŒÑŽ, Ð½Ð¸ÐºÐ¾Ð³Ð¾ Ð½Ðµ Ð±Ñ‹Ð»Ð¾. Ð¯ Ð¿Ñ€Ð¸Ð»ÑŒÐ½ÑƒÐ» Ð³Ð»Ð°Ð·Ð¾Ð¼ Ðº Ð·Ð°Ð¼Ð¾Ñ‡Ð½Ð¾Ð¹ ÑÐºÐ²Ð°Ð¶Ð¸Ð½Ðµ. Ð’Ð½Ð°Ñ‡Ð°Ð»Ðµ Ð¾Ð½Ð° ÑÐ½ÑÐ»Ð° Ñ ÑÐµÐ±Ñ Ð²ÐµÑ€Ñ…Ð½ÑŽÑŽ Ð¾Ð´ÐµÐ¶Ð´Ñƒ. Ð—Ð°Ñ‚ÐµÐ¼ Ð½Ð°Ñ‡Ð°Ð»Ð° Ñ ÑÐµÐ±Ñ ÑÐ½Ð¸Ð¼Ð°Ñ‚ÑŒ Ð´Ð¶Ð¸Ð½ÑÑ‹, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð½Ðµ Ð¾Ñ‡ÐµÐ½ÑŒ Ð»ÐµÐ³ÐºÐ¾ ÑÑ‚Ð°Ñ‰Ð¸Ð»Ð¸ÑÑŒ Ñ ÐµÑ‘ Ð¿Ð¾Ð¿Ñ‹. Ð Ð°Ð·Ð´ÐµÑ‚Ð°Ñ, Ð¾Ð½Ð° ÑÑ‚Ð¾ÑÐ»Ð° Ð¿Ð¾Ð¿Ð¾Ð¹ ÐºÐ¾ Ð¼Ð½Ðµ Ð¼Ð¸Ð½ÑƒÑ‚Ñ‹ Ð´Ð²Ðµ, Ð¶Ð´Ð°Ð»Ð°, ÐºÐ¾Ð³Ð´Ð° Ð½Ð°Ð±ÐµÑ€Ñ‘Ñ‚ÑÑ Ð²Ð¾Ð´Ð°. Ð¢Ð°Ðº Ñ‡Ñ‚Ð¾ Ñ Ð´Ð¾ÑÑ‚Ð°Ñ‚Ð¾Ñ‡Ð½Ð¾ Ð½Ð°ÑÐ¼Ð¾Ñ‚Ñ€ÐµÐ»ÑÑ Ð·Ð° ÑÑ‚Ð¾ Ð²Ñ€ÐµÐ¼Ñ Ð½Ð° ÐµÑ‘ Ð°Ð¿Ð¿ÐµÑ‚Ð¸Ñ‚Ð½ÑƒÑŽ Ð¿Ð¾Ð¿ÐºÑƒ. ÐÐ¸ÑÐºÐ¾Ð»ÑŒÐºÐ¾ Ð¾Ð± ÑÑ‚Ð¾Ð¼ Ð½Ðµ Ð¶Ð°Ð»ÐµÑŽ.   ;)'),(48,'bcfacbae6b','','ÐÐ°Ð²ÐµÑ€Ð½Ð¾Ðµ, Ð½Ðµ ÑÑ‚Ñ‹Ð´Ð½Ð¾ Ð±ÑƒÐ´ÐµÑ‚ Ð¿Ñ€Ð¸Ð·Ð½Ð°Ñ‚ÑŒÑÑ :facepalm:  , Ñ‡Ñ‚Ð¾ Ð¼Ð½Ðµ Ð¿Ð¾Ð´Ð³Ð»ÑÐ´Ñ‹Ð²Ð°Ñ‚ÑŒ Ð½Ñƒ Ð¾Ñ‡ÐµÐ½ÑŒ Ð½Ñ€Ð°Ð²Ð¸Ñ‚ÑÑ. ÐÐ° Ð½ÑƒÐ´Ð¸ÑÑ‚ÑÐºÐ¸Ñ… Ð¿Ð»ÑÐ¶Ð°Ñ…. ÐžÑÐ¾Ð±ÐµÐ½Ð½Ð¾ Ð² ÐšÑ€Ñ‹Ð¼Ñƒ. Ð¢Ð°Ð¼ Ð½Ð°Ñ€Ð¾Ð´ Ð¿Ñ€Ð¸ÐµÐ·Ð¶Ð°ÐµÑ‚ Ð¾Ñ‚Ñ€Ñ‹Ð²Ð°Ñ‚ÑŒÑÑ Ð¸ Ð¿Ð¾Ñ€Ð¾ÑŽ Ñ‚Ð°ÐºÐ¸Ðµ Ð¿ÐµÑ€Ð»Ñ‹ Ð¾Ñ‚ÐºÐ°Ð»Ñ‹Ð²Ð°ÐµÑ‚. ÐÐµ Ð·Ð½Ð°ÑŽ, Ð¼Ð¾Ð¶ÐµÑ‚ Ñ Ð¸ Ð½Ðµ Ð¿Ñ€Ð°Ð²Ð°, Ð¸ Ð¼ÑƒÐ¶ Ð¼ÐµÐ½Ñ Ð¿ÐµÑ€Ð¸Ð¾Ð´Ð¸Ñ‡ÐµÑÐºÐ¸ Ð¾Ð´Ñ‘Ñ€Ð³Ð¸Ð²Ð°ÐµÑ‚, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ñ Ð½Ðµ Ð¿ÑÐ»Ð¸Ð»Ð°ÑÑŒ. Ð Ð¼Ð½Ðµ Ð½Ñ€Ð°Ð²Ð¸Ñ‚ÑÑ ÑÐ¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ. Ð¢ÐµÐ¼ Ð±Ð¾Ð»ÐµÐµ, Ñ‡Ñ‚Ð¾ Ð½Ð°Ñ€Ð¾Ð´ Ð½Ð° Ð½ÑƒÐ´Ð¸ÑÑ‚ÑÐºÐ¸Ðµ Ð¿Ð»ÑÐ¶Ð¸ Ð¿Ñ€Ð¸Ñ…Ð¾Ð´Ð¸Ñ‚ Ð¶Ðµ Ñ ÐºÐ°ÐºÐ¾Ð¹-Ñ‚Ð¾ Ñ†ÐµÐ»ÑŒÑŽ. - ÐÐµ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð¿Ð¾Ð·Ð°Ð³Ð¾Ñ€Ð°Ñ‚ÑŒ, Ð½Ð¾ Ð¸ ÑÐµÐ±Ñ Ð¿Ð¾ÐºÐ°Ð·Ð°Ñ‚ÑŒ!?\nÐ’Ð¾Ñ‚ Ð¸ ÑÐ¼Ð¾Ñ‚Ñ€ÑŽ. Ð˜ Ð½Ðµ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð½Ð° Ð¼ÑƒÐ¶Ñ‡Ð¸Ð½. :schlick:   Ð–ÐµÐ½Ñ‰Ð¸Ð½Ñ‹ Ñ‚Ð¾Ð¶Ðµ Ð·Ð°Ñ‡Ð°ÑÑ‚ÑƒÑŽ Ð¸Ð½Ñ‚ÐµÑ€ÐµÑÐ½Ñ‹Ðµ Ð¿Ð¾Ð¿Ð°Ð´Ð°ÑŽÑ‚ÑÑ.'),(49,'d1c98f1d7c','','[quote:d1c98f1d7c=\"nouvElle\"] Ð Ð¼Ð½Ðµ Ð½Ñ€Ð°Ð²Ð¸Ñ‚ÑÑ ÑÐ¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ[/quote:d1c98f1d7c]\nÐŸÐ¾Ð»Ð½Ð¾ÑÑ‚ÑŒÑŽ ÑÐ¾Ð³Ð»Ð°ÑÐ½Ð°, Ð¿Ð¾Ð´Ð³Ð»ÑÐ´Ñ‹Ð²Ð°Ñ‚ÑŒ Ð´Ð°Ð»ÐµÐºÐ¾ Ð½Ðµ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð¿Ð°Ñ€Ð½Ð¸ Ð»ÑŽÐ±ÑÑ‚ Ð¸ Ð´Ð°Ð¶Ðµ Ð² Ð´ÐµÑ‚ÑÐºÐ¾Ð¼ Ð²Ð¾Ð·Ñ€Ð°ÑÑ‚Ðµ, Ð¿Ð¾Ð¼Ð½Ð¸Ñ‚ÑÑ ÐºÐ¾Ð³Ð´Ð° Ð² Ð´ÐµÑ‚ÑÑ‚Ð²Ðµ Ð»ÐµÐ¶Ð°Ð»Ð° Ð² Ð±Ð¾Ð»ÑŒÐ½Ð¸Ñ†Ðµ Ð±ÐµÐ³Ð°Ð»Ð¸ Ñ Ð¾Ð´Ð½Ð¾Ð¹ Ð·Ð½Ð°ÐºÐ¾Ð¼Ð¾Ð¹ Ð¿Ð¾Ð´Ð³Ð»ÑÐ´Ñ‹Ð²Ð°Ñ‚ÑŒ Ñ‡ÐµÑ€ÐµÐ· Ð¾ÐºÐ½Ð¾ ÐºÐ°Ðº [color=orange:d1c98f1d7c]ÐºÐ»Ð¸Ð·Ð¼Ñ‹[/color:d1c98f1d7c] Ð´ÐµÐ»Ð°ÑŽÑ‚ Ð¸ Ð¸Ð½Ñ‚ÐµÑ€ÐµÑÐ¾Ð²Ð°Ð»Ð¸ Ð½Ð°Ñ Ð±Ð¾Ð»ÑŒÑˆÐµ Ð²ÑÐµÐ³Ð¾ ÐºÐ¾Ð½ÐµÑ‡Ð½Ð¾ ÐºÐ¾Ð³Ð´Ð° Ð´ÐµÐ»Ð°Ð»Ð¸ Ð¼Ð°Ð»ÑŒÑ‡Ð¸ÐºÐ°Ð¼. :twisted:'),(50,'37759d5402','','Ð´Ð° Ð²ÑÐµ Ð½Ð°Ð²ÐµÑ€Ð½Ð° ÑÑ‚Ð¾ Ð´ÐµÐ»Ð°Ð»Ð¸ , Ð½Ð¾ Ð¿Ñ€Ð¸Ð·Ð½Ð°Ñ‚ÑŒÑÑ Ð½Ðµ Ñ…Ð¾Ñ‚ÑÑ‚. Ð¿Ð¾ÑÑ‚Ð¾ÑÐ½Ð½Ð¾ Ð´Ñ€Ð¾Ñ‡Ñƒ Ð½Ð° Ð¼Ð°Ð¼Ð¸Ð½Ñ‹ ÑÑ‚Ñ€Ð¸Ð½Ð³Ð¸. ÐžÑ‡ÐµÐ½ÑŒ Ð²Ð¾Ð·Ð±ÑƒÐ¶Ð´Ð°ÑŽÑ‚. ÐžÐ´Ð½Ð°Ð¶Ð´Ñ‹ Ð¼Ñ‹ Ñ Ð¾Ð´Ð½Ð¾ÐºÑƒÑ€ÑÐ½Ð¸ÐºÐ°Ð¼Ð¸ Ð¿Ð¾Ð±ÑƒÑ…Ð°Ð»Ð¸ Ñƒ Ð½Ð°Ñ Ð² ÐºÐ²Ð°Ñ€Ñ‚Ð¸Ñ€Ðµ. ÐÐ¾Ñ‡ÑŒÑŽ Ð¿Ñ€Ð¾ÑÐ½ÑƒÐ»ÑÑ Ð¸ Ð²Ñ‹ÑˆÐµÐ» Ð¿Ð¾ÐºÑƒÑ€Ð¸Ñ‚ÑŒ Ð½Ð° Ð±Ð°Ð»ÐºÐ¾Ð½ Ð½Ð°Ð´ÐµÐ² ÐºÑƒÑ€Ñ‚ÐºÑƒ Ð¿ÐµÑ‚Ð¸. Ð˜ Ñ‚Ð°Ð¼ Ð¾Ð±Ð½Ð°Ñ€ÑƒÐ¶Ð¸Ð» Ñ‡ÐµÑ€Ð½Ñ‹Ðµ ÑÑ‚Ñ€Ð¸Ð½Ð³Ð¸.ÑÑ‚Ð¾ Ð±Ñ‹Ð»Ð¸ Ð¼Ð°Ð¼Ð¸Ð½Ñ‹ Ð¸Ð· ÐºÐ¾Ñ€Ð·Ð¸Ð½Ñ‹ Ð³Ñ€ÑÐ·Ð½Ð¾Ð³Ð¾ Ð±ÐµÐ»ÑŒÑ. Ð’ÐžÐ¢'),(51,'5d8bb4d9d0','','ÐžÐ±Ñ‹Ñ‡Ð½Ð¾ ÐºÐ¾Ð³Ð´Ð° Ð² Ð³Ð¾ÑÑ‚Ð¸ Ð¿Ñ€Ð¸Ñ…Ð¾Ð¶Ñƒ Ðº Ð¿Ð¾Ð´Ñ€ÑƒÐ³Ð°Ð¼ Ð¸Ð»Ð¸ Ðº Ð·Ð½Ð°ÐºÐ¾Ð¼Ñ‹Ð¼, Ñ‚Ð¾ Ð¾Ð±ÑÐ·Ð°Ñ‚ÐµÐ»ÑŒÐ½Ð¾ Ð½Ð°Ñ…Ð¾Ð¶Ñƒ Ð¿Ñ€ÐµÐ´Ð»Ð¾Ð³ Ð·Ð°Ð¹Ñ‚Ð¸ Ð² Ð²Ð°Ð½Ð½Ñƒ, Ð° Ñ‚Ð°Ð¼ Ð² Ð³Ñ€ÑÐ·Ð½Ð¾Ð¼ Ð±ÐµÐ»ÑŒÐµ Ð½Ð°Ñ‡Ð¸Ð½Ð°ÑŽ Ð¸ÑÐºÐ°Ñ‚ÑŒ Ñ‚Ñ€ÑƒÑÐ¸ÐºÐ¸ Ð¸Ð»Ð¸ Ð»Ð¸Ñ„Ñ‡Ð¸ÐºÐ¸. Ð˜Ð½Ð¾Ð³Ð´Ð° ÑƒÑÐ¿ÐµÐ²Ð°ÑŽ Ñ‚Ð°Ð¼ Ð¿Ð¾Ð´Ñ€Ð¾Ñ‡Ð¸Ñ‚ÑŒ :fap: , Ð¸Ð½Ð¾Ð³Ð´Ð° Ð±ÐµÑ€Ñƒ Ð¾Ð´Ð¸Ð½ ÑÐºÐ·ÐµÐ¼Ð¿Ð»ÑÑ€ Ñ ÑÐ¾Ð±Ð¾Ð¹. Ð’Ð¾Ñ‚ ÑÐµÐ³Ð¾Ð´Ð½Ñ Ñ…Ð¾Ð´Ð¸Ð» Ðº Ð·Ð½Ð°ÐºÐ¾Ð¼Ð¾Ð¹ Ñ‚Ñ‘Ñ‚ÐºÐµ Ñ€ÐµÐ¼Ð¾Ð½Ñ‚Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ ÐºÐ¾Ð¼Ð¿. ÐžÐ½Ð° Ð¿ÐµÑ€ÐµÐ´Ð°Ð»Ð° Ð¼Ð½Ðµ Ñ‡ÐµÑ€ÐµÐ· Ð¼Ð°Ñ‚ÑŒ ÐºÐ»ÑŽÑ‡Ð¸, Ñ‚Ð°Ðº ÐºÐ°Ðº ÑÐ°Ð¼Ð° Ð¿Ð¾Ð·Ð´Ð½Ð¾ Ñ Ñ€Ð°Ð±Ð¾Ñ‚Ñ‹ Ð²Ð¾Ð·Ð²Ñ€Ð°Ñ‰Ð°ÐµÑ‚ÑÑ, Ð° Ð¶Ð¸Ð²Ñ‘Ñ‚ Ð² ÑÐ¾ÑÐµÐ´Ð½ÐµÐ¼ Ð´Ð¾Ð¼Ðµ. ÐÑƒ Ñ ÐºÐ°Ðº Ð·Ð°ÑˆÑ‘Ð», ÑÑ€Ð°Ð·Ñƒ Ð¿ÐµÑ€Ð²Ñ‹Ð¼ Ð´ÐµÐ»Ð¾Ð¼ Ð½Ð°ÑˆÑ‘Ð» ÑˆÐºÐ°Ñ„ Ñ Ð½Ð¸Ð¶Ð½Ð¸Ð¼ Ð±ÐµÐ»ÑŒÑ‘Ð¼, Ð¸ Ð¿Ð¾Ð´Ñ€Ð¾Ñ‡Ð¸Ð». ÐšÐ¾Ð½Ñ‡Ð¸Ð» Ð² ÐºÑ€Ð°ÑÐ¸Ð²Ñ‹Ð¹ ÑÐ¸Ð½Ð¸Ð¹ Ð»Ð¸Ñ„Ñ‡Ð¸Ðº. Ð’Ð¾Ñ‚ Ñ‚ÐµÐ¿ÐµÑ€ÑŒ Ð¿Ñ€ÐµÐ´ÑÑ‚Ð°Ð²Ð»ÑÑŽ ÐºÐ°Ðº Ð¾Ð½Ð° ÐµÐ³Ð¾ Ð·Ð°Ð²Ñ‚Ñ€Ð° Ð¸Ð»Ð¸ Ð¿Ð¾ÑÐ»ÐµÐ·Ð°Ð²Ñ‚Ñ€Ð° Ð¾Ð´ÐµÐ½ÐµÑ‚   :hsf:'),(52,'299e6c5065','','Ð¸Ð· Ð¸Ð½Ð¾ÑÑ‚Ñ€Ð°Ð½Ð½Ñ‹Ñ… - Ð¿Ð¾ Ð½Ð¾Ð²Ð¾Ð¼Ñƒ Ð²Ð·Ð³Ð»ÑÐ½ÑƒÐ»Ð° :hippie:  Ð½Ð° Ð¨ÐµÑ€Ð»Ð¸Ð· Ð¢ÐµÑ€Ð¾Ð½ Ð¸ Ð²Ñ‹ Ð·Ð½Ð°ÐµÑ‚Ðµ, [glow=red:299e6c5065][i:299e6c5065]ÑÐ¾Ð²ÑÐµÐ¼ Ð½Ðµ Ð¿Ñ€Ð¾Ñ‡ÑŒ[/i:299e6c5065][/glow:299e6c5065] Ð¿Ð¾Ð·Ð½Ð°ÐºÐ¾Ð¼Ð¸Ñ‚ÑÑ Ñ Ð½ÐµÐ¹ :cry: \nÐ° ÐµÑÐ»Ð¸ Ð±Ñ€Ð°Ñ‚ÑŒ Ð½Ð°ÑˆÐ¸Ñ… Ð°ÐºÑ‚Ñ€Ð¸Ñ Ðº Ñ€Ð°ÑÑÐ¼Ð¾Ñ‚Ñ€ÐµÐ½Ð¸ÑŽ, Ñ‚Ð¾ Ð½Ðµ Ð·Ð½Ð°ÑŽ ÐºÐ°Ðº Ð·Ð¾Ð²ÑƒÑ‚ Ð´ÐµÐ²Ð¾Ñ‡ÐºÑƒ, Ð½Ð¾ ÐµÑÐ»Ð¸ ÐºÑ‚Ð¾ ÑÐ¼Ð¾Ñ‚Ñ€ÐµÐ» ÐšÐ»ÑƒÐ± Ð½Ð° ÐœÐ¢Ð’ :pop: , Ñ‚Ð°Ð¼ Ð±Ñ‹Ð» Ñ‚Ð°ÐºÐ¾Ð¹ ÑÑ‚ÐµÑ€Ð²Ð¾Ð·Ð½Ñ‹Ð¹ Ð¿ÐµÑ€ÑÐ¾Ð½Ð°Ð¶ [color=darkblue:299e6c5065][b:299e6c5065]Ð Ð¾Ð·Ð°[/b:299e6c5065][/color:299e6c5065]  :twisted: , Ñ‚Ð°Ðº Ð²Ð¾Ñ‚ Ð¸ÑÐ¿Ð¾Ð»Ð½Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¸Ñ†Ð° ÑÑ‚Ð¾Ð¹ Ð Ð¾Ð·Ñ‹ Ð¸ ÐµÑÑ‚ÑŒ Ð¼Ð¾Ñ Ð¼ÐµÑ‡Ñ‚Ð° Ð¸ Ñ„Ð°Ð½Ñ‚Ð°Ð·Ð¸Ñ      })i({'),(53,'7dfbc0e02f','','ÐšÐ°Ñ‚Ñ€Ð¸Ð½ Ð”ÐµÐ½Ñ‘Ð² Ñ…Ð¾Ñ€Ð¾ÑˆÐ°Ñ..Ð´Ð°..Ð² Ð¾ÑÐ¾Ð±ÐµÐ½Ð½Ð¾ÑÑ‚Ð¸ Ñ…Ð¾Ñ‚ÐµÐ»Ð¾ÑÑŒ Ð¿Ð¾Ñ‡ÑƒÐ²ÑÑ‚Ð²Ð¾Ð²Ð°Ñ‚ÑŒ ÐµÑ‘ Ñ€Ð¾Ñ‚ :razz: Ð¿Ð¾ÑÐ»Ðµ Ñ„Ð¸Ð»ÑŒÐ¼Ð° &quot;Ð“Ð¾Ð»Ð¾Ð´&quot;..Ð¿Ð¾Ñ‚Ñ€ÑÑÐ°ÑŽÑ‰Ð°Ñ Ð¶ÐµÐ½Ñ‰Ð¸Ð½Ð°...Ð½Ð¾ Ð¾Ð½Ð° Ð¾Ð´Ð½Ð° Ð¸Ð· Ñ‚ÐµÑ…, ÐºÐµÐ¼ Ð±Ñ‹ Ñ Ð¿Ñ€Ð¾ÑÑ‚Ð¾ Ð²Ð¾ÑÑ…Ð¸Ñ‰Ð°Ð»ÑÑ, Ñ‡ÐµÐ¼...   :goth:'),(54,'0153d104d7','Ð—Ð½Ð°ÐºÐ¾Ð¼ÑÑ‚Ð²Ð° Ñ Ñ‚Ñ€Ð°Ð½ÑÑÐµÐºÑÑƒÐ°Ð»Ð°Ð¼Ð¸ Ð¿Ð¾','Ð§Ð°ÑÑ‚Ð¾ Ð¿ÑƒÑ‚ÐµÑˆÐµÑÑ‚Ð²ÑƒÑŽ Ð¸ Ð¾Ñ‡ÐµÐ½ÑŒ Ñ…Ð¾Ñ‡ÐµÑ‚ÑÑ Ð¿Ð¾Ð¾Ð±Ñ‰Ð°Ñ‚ÑŒÑÑ Ñ Ð¢/C Ð¸Ð· Ñ€Ð°Ð·Ð½Ñ‹Ñ… Ð³Ð¾Ñ€Ð¾Ð´Ð¾Ð² Ð¼Ð¸Ñ€Ð°. ÐŸÑ€ÐµÐ´Ð»Ð°Ð³Ð°ÑŽ Ð´ÐµÐ»Ð¸Ñ‚ÑÑ Ð¼ÐµÑÑ‚Ð°Ð¼Ð¸ Ð³Ð´Ðµ Ð¼Ð¾Ð¶Ð½Ð¾ Ð·Ð½Ð°ÐºÐ¾Ð¼Ð¸Ñ‚ÑŒÑÑ Ñ&quot;Ð½Ð°ÑÑ‚Ð¾ÑÑ‰Ð¸Ð¼Ð¸ Ð´ÐµÐ²ÑƒÑˆÐºÐ°Ð¼Ð¸&quot; ÐºÐ°Ðº ÐºÐ»ÑƒÐ±Ñ‹ Ñ‚Ð°Ðº Ð¸ ÑÐµÐºÑ-ÐºÐ»ÑƒÐ±Ñ‹ Ð¸ Ñ€Ð°Ð¹Ð¾Ð½Ñ‹ Ð½Ð° ÑƒÐ»Ð¸Ñ†Ð°Ñ…. Ð¡Ð±Ð¾ÐµÐ±Ñ€Ð°Ð·Ð½Ñ‹Ð¹ Ñ„Ð¾Ñ€ÑƒÐ¼-Ð³Ð¸Ð´ Ð¿Ð¾ Ð¼ÐµÑÑ‚Ð°Ð¼ Ð·Ð½Ð°ÐºÐ¾Ð¼ÑÑ‚Ð² Ñ Ñ‚Ñ€Ð°Ð½ÑÑÐµÐºÑÑƒÐ°Ð»Ð°Ð¼Ð¸ÑŽ ÐÐ°Ð¿Ñ€Ð¸Ð¼ÐµÑ€ ÐºÑ‚Ð¾ Ð·Ð½Ð°ÐµÑ‚ Ñ‚Ð°ÐºÐ¸Ðµ ÐºÐ»ÑƒÐ±Ñ‹ Ð²Ð¾ Ð¤Ñ€Ð°Ð½ÐºÑ„ÑƒÑ€Ñ‚Ðµ Ð¸Ð»Ð¸ ÐŸÐµÐºÐ¸Ð½Ðµ?'),(55,'4e4685412f','','Ð Ð’Ñ‹ Ð±Ñ‹ [u:4e4685412f]Ð¿Ð¾Ð´ÑÐºÐ°Ð·Ð°Ð»Ð¸[/u:4e4685412f] :?:  Ð²ÑÐµÐ¼, ÐºÐ°Ðº Ð¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ð¾ Ð½Ð°Ð´Ð¾ ÑÐµÐ±Ñ :o Ð²ÐµÑÑ‚Ð¸ Ð¿Ñ€Ð¸ Ð·Ð°Ð½ÐºÐ¾Ð¼ÑÑ‚Ð²Ðµ Ñ Ñ‚Ñ€Ð°Ð½Ñ-Ð´ÐµÐ²ÑƒÑˆÐºÐ¾Ð¹, Ñ‡Ñ‚Ð¾Ð±Ñ‹ ÑÐ»ÑƒÑ‡Ð°Ð¹Ð½Ð¾ Ð½Ðµ Ð¾Ð±Ð¸Ð´ÐµÑ‚ÑŒ :cry:  Ð¸ Ð½Ðµ Ð¾Ñ‚Ñ‚Ð¾Ð»ÐºÐ½ÑƒÑ‚ÑŒ ÐµÐµ :evil: .'),(56,'a893eb5c40','','Ñ‚ÑƒÑ‚ ÑÐ»Ð¾Ð¶Ð½Ð¾ Ð¿Ð¾Ð´ÑÐºÐ°Ð·Ñ‹Ð²Ð°Ñ‚ÑŒ\nÐœÑƒÐ¶Ñ‡Ð¸Ð½Ð° ÑÐ°Ð¼ Ð´Ð¾Ð»Ð¶ÐµÐ½ Ð·Ð½Ð°Ñ‚ÑŒ ÑÑ‚Ð¾.\n\nÐ’ÐµÑÑ‚Ð¸ ÑÐµÐ±Ñ Ð½ÑƒÐ¶Ð½Ð¾ Ñ‚Ð¾Ñ‡Ð½Ð¾ Ñ‚Ð°Ðº Ð¶Ðµ Ð¿Ð¾Ñ€ÑÐ´Ð¾Ñ‡Ð½Ð¾ Ð¸ Ð³Ð°Ð»Ð°Ð½Ñ‚Ð½Ð¾ - ÐºÐ°Ðº Ñ Ð¾Ð±Ñ‹Ñ‡Ð½Ð¾Ð¹ Ð´ÐµÐ²ÑƒÑˆÐºÐ¾Ð¹.\nÑ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ‡ÑƒÑ‚ÑŒ Ð¾ÑÑ‚Ð¾Ñ€Ð¾Ð¶Ð½ÐµÐµ.\n\nÐ²Ð¾Ñ‚ Ð½Ð°Ð¿Ñ€Ð¸Ð¼ÐµÑ€ Ð½Ð° Ð´Ð½ÑÑ… Ð¿Ð¾Ð·Ð½Ð°ÐºÐ¾Ð¼Ð¸Ð»Ð¸ÑÑŒ Ñ Ð¾Ð´Ð½Ð¸Ð¼ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ¾Ð¼, Ð¿Ð¾Ð¾Ð±Ñ‰Ð°Ð»Ð¸ÑÑŒ , Ð²ÐµÑ‡ÐµÑ€Ð¾Ð¼ Ð²ÑÑ‚Ñ€ÐµÑ‚Ð¸Ð»Ð¸ÑÑŒ .\nÐ¾Ð½ Ð²Ð´Ñ€ÑƒÐ³ Ð¿Ñ€ÐµÐ´Ð»Ð¾Ð¶Ð¸Ð» Ð·Ð°ÐµÑ…Ð°Ñ‚ÑŒ Ð² Ñ€ÐµÑÑ‚Ð¾Ñ€Ð°Ð½Ñ‡Ð¸Ðº Ð¿Ð¾ÑƒÐ¶Ð¸Ð½Ð°Ñ‚ÑŒ. Ð¯ ÑÐ¾Ð³Ð»Ð°ÑÐ¸Ð»Ð°ÑÑŒ.\n\nÑ‚Ð°Ðº ÐºÐ°Ðº Ñ Ð´ÐµÐ²ÑƒÑˆÐºÐ° ÑÐºÑ€Ð¾Ð¼Ð½Ð°Ñ, Ñ‚Ð¾ ÐºÑ€Ð¾Ð¼Ðµ Ñ‡Ð°Ñ Ð½Ð¸Ñ‡ÐµÐ³Ð¾ Ð½Ðµ Ð·Ð°ÐºÐ°Ð·Ð°Ð»Ð°. Ð° Ð²Ð¾Ñ‚ Ð¾Ð½ ÐºÐ°Ðº Ð¼ÑƒÐ¶Ñ‡Ð¸Ð½Ð° Ð¿Ð¾Ð¸Ð½Ñ‚ÐµÑ€ÐµÑÐ¾Ð²Ð°Ð»ÑÑ Ñ‡Ñ‚Ð¾ Ñ Ð¿Ñ€ÐµÐ´Ð¿Ð¾Ñ‡Ð¸Ñ‚Ð°ÑŽ, Ð½Ð°ÑÑ‚Ð¾ÑÐ» Ð½Ð° ÑÐ²Ð¾ÐµÐ¼ Ð¸ Ð²Ñ‹Ð±Ñ€Ð°Ð» Ð½ÐµÑÐºÐ¾Ð»ÑŒÐºÐ¾ Ð±Ð»ÑŽÐ´ Ð¸Ð· Ð¼ÐµÐ½ÑŽ Ð´Ð»Ñ Ð¼ÐµÐ½Ñ.\nÐ¼Ð½Ðµ ÑƒÐ¶Ð°ÑÐ½Ð¾ Ð½ÐµÑƒÐ´Ð¾Ð±Ð½Ð¾ Ð±Ñ‹Ð»Ð¾ .\nÐ¿Ñ€Ð¸ ÑÑ‚Ð¾Ð¼ Ð¼Ñ‹ Ñ Ð½Ð¸Ð¼ Ð½Ð°ÑˆÐ»Ð¸ Ð¿Ð¾Ð½Ð¸Ð¼Ð°ÐµÐ½Ð¸Ðµ Ð¸ Ð¿Ñ€Ð¾Ð¾Ð±Ñ‰Ð°Ð»Ð¸ÑÑŒ Ð°Ð¶ Ð´Ð¾ 3-Ñ… Ñ‡Ð°ÑÐ¾Ð² Ð½Ð¾Ñ‡Ð¸.\n\nÐ½Ð° Ð¿Ñ€Ð¾Ñ‰Ð°Ð½Ð¸Ðµ Ð¼Ð½Ðµ Ð´Ð°Ð¶Ðµ ÐµÐ³Ð¾ Ð¾Ð±Ð½ÑÑ‚ÑŒ Ð·Ð°Ñ…Ð¾Ñ‚ÐµÐ»Ð¾ÑÑŒ. Ð¾Ð½ Ñ‚Ð°ÐºÐ¾Ð¹ Ð¼Ð¸Ð»Ñ‹Ð¹ Ð±Ñ‹Ð». :black: \n\nÐ½Ð¾ ÑÑ‚Ð¾Ñ‚ Ð¿Ñ€Ð¸Ð¼ÐµÑ€ ÑÐ¾Ð²ÑÐµÐ¼ Ð½Ðµ Ð¾Ð·Ð½Ð°Ñ‡Ð°ÐµÑ‚ Ñ‡Ñ‚Ð¾ Ð´ÐµÐ²ÑƒÑˆÐºÑƒ Ð¼Ð¾Ð¶Ð½Ð¾ Ñ‚Ð°Ðº *ÐºÑƒÐ¿Ð¸Ñ‚ÑŒ.*\nÑ Ð¾Ñ‚ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ° ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ Ð¼Ð½Ðµ Ð½Ðµ Ð¿Ñ€Ð¸ÑÑ‚ÐµÐ½ , Ð½Ð¸Ñ‡ÐµÐ³Ð¾ Ð½Ð¸ÐºÐ¾Ð³Ð´Ð° Ð½Ðµ Ð¿Ñ€Ð¸Ð¼Ñƒ Ð¸ Ð½Ð¸ÐºÑƒÐ´Ð° Ñ Ð½Ð¸Ð¼ Ð½Ðµ Ð¿Ð¾Ð¹Ð´Ñƒ.\nÐ° Ð¾Ñ‚ Ñ…Ð¾Ñ€Ð¾ÑˆÐµÐ³Ð¾ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ° Ð´Ð°Ð¶Ðµ Ð½Ð°Ð¾Ð±Ð¾Ñ€Ð¾Ñ‚ Ð¿Ð¾ÑÑ‚ÐµÑÐ½ÑÑŽÑÑŒ Ñ‡Ñ‚Ð¾ Ñ‚Ð¾ Ð±Ñ€Ð°Ñ‚ÑŒ .\n\nÑ Ð½Ðµ Ð¼Ð¾Ð³Ñƒ Ñ‚Ð¾Ñ‡Ð½Ð¾ ÑÐºÐ°Ð·Ð°Ñ‚ÑŒ Ñ‡Ñ‚Ð¾ Ð½ÑƒÐ¶Ð½Ð¾ Ð´ÐµÐ»Ð°Ñ‚ÑŒ ÐºÐ¾Ð½ÐºÑ€ÐµÑ‚Ð½Ð¾ Ð’Ð°Ð¼, Ð¿Ð¾Ñ‚Ð¾Ð¼Ñƒ Ñ‡Ñ‚Ð¾ Ñ Ð²Ð°Ñ Ð½Ðµ Ð·Ð½Ð°ÑŽ Ð¸ Ð½Ðµ Ð¾Ð±Ñ‰Ð°Ð»Ð°ÑÑŒ. ÐÐ¾ Ð´ÐµÐ²ÑƒÑˆÐºÐ° Ñ†ÐµÐ½Ð¸Ñ‚ ÐºÐ¾Ð³Ð´Ð° Ðº Ð½ÐµÐ¹ Ñ…Ð¾Ñ€Ð¾ÑˆÐ¾ Ð¾Ñ‚Ð½Ð¾ÑÑÑ‚ÑŒÑÑ. ÑÑ‚Ð¸Ð¼ ÑÐ°Ð¼Ñ‹Ð¼ Ð¼ÑƒÐ¶Ñ‡Ð¸Ð½Ð° Ð·Ð°Ð²Ð¾ÐµÐ²Ñ‹Ð²Ð°ÐµÑ‚ ÐµÐµ Ñ€Ð°ÑÐ¿Ð¾Ð»Ð¾Ð¶ÐµÐ½Ð¸Ðµ Ðº ÑÐµÐ±Ðµ.\nÐ° Ð¾Ð½Ð° Ð·Ð° ÑÑ‚Ð¾ Ð¼Ð¾Ð¶ÐµÑ‚ Ð´Ð°Ñ‚ÑŒ ÐµÐ¼Ñƒ Ñ‚Ð¾ , Ð¾ Ñ‡ÐµÐ¼ Ð¾Ð½ Ð¼ÐµÑ‡Ñ‚Ð°ÐµÑ‚.\n\nÐ° ÐºÐ¾Ð³Ð´Ð° Ð¼ÑƒÐ¶Ñ‡Ð¸Ð½Ð° Ð³Ð¾Ð²Ð¾Ñ€Ð¸Ñ‚ ÐµÐ¹:\n- Ð¿Ñ€Ð¸Ð²ÐµÑ‚ Ñ Ñ…Ð¾Ñ‡Ñƒ Ñ Ñ‚Ð¾Ð±Ð¾Ð¹ ÑÐµÐºÑÐ° ,\n- Ñ Ñ‚Ð°Ðº Ñ…Ð¾Ñ‡Ñƒ Ð¿Ð¾Ð¿Ñ€Ð¾Ð±Ð¾Ð²Ð°Ñ‚ÑŒ ...Ð¸ Ð²ÑÐµ Ð² Ñ‚Ð°ÐºÐ¾Ð¼ Ñ€Ð¾Ð´Ðµ\nÐµÑÐ»Ð¸ Ð² Ð¿ÐµÑ€Ð²Ð¾Ðµ ÑÐ²Ð¸Ð´Ð°Ð½Ð¸Ðµ ÑÑ€Ð°Ð·Ñƒ Ð¶Ðµ Ð²ÑÐµ Ñ‚ÐµÐ¼Ñ‹ ÐºÐ°ÑÐ°ÑŽÑ‚ÑÑ Ð¿Ð¾ÑÑ‚ÐµÐ»Ð¸ - Ñ‚Ð¾ Ñ‚Ð¾Ð³Ð´Ð° Ð½Ð¸Ñ‡ÐµÐ³Ð¾ Ñƒ Ð½ÐµÐ³Ð¾ Ð¸ Ð½ÐµÐ¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑÑ.\n\nÐ° Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒÑÑ Ñƒ Ð½ÐµÐ³Ð¾ - Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð² Ð¿Ð»Ð°Ñ‚Ð½Ñ‹Ñ… ÑƒÑÐ»ÑƒÐ³Ð°Ñ….\n\nÐšÑÑ‚Ð°Ñ‚Ð¸ Ð¾Ð±Ñ‰Ð°Ð»Ð°ÑÑŒ Ñ Ð² ÐºÑ€ÑƒÐ³Ñƒ Ð¾Ð±Ñ‹Ñ‡Ð½Ñ‹Ñ… Ð´ÐµÐ²ÑƒÑˆÐµÐº Ð¾Ð½Ð¸ ÐºÐ°Ðº Ñ‚Ð¾ Ñ‚Ð¾Ð¶Ðµ Ð·Ð°Ð²ÐµÐ»Ð¸ Ñ€Ð°Ð·Ð³Ð¾Ð²Ð¾Ñ€ Ð¿Ñ€Ð¾ Ð·Ð½Ð°ÐºÐ¾Ð¼ÑÑ‚Ð²Ð° Ð¼ÑƒÐ¶Ñ‡Ð¸Ð½.\nÑ‚Ð°Ðº Ð²Ð¾Ñ‚ Ð¾Ð½Ð¸ Ñ‚Ð¾Ð¶Ðµ ÑÐºÐ°Ð·Ð°Ð»Ð¸ Ñ‡Ñ‚Ð¾ ÐµÑÐ»Ð¸ Ð¼ÑƒÐ¶Ñ‡Ð¸Ð½Ð° Ð½Ð°Ñ‡Ð¸Ð½Ð°ÐµÑ‚ Ð¸Ð¼ ÑÑ€Ð°Ð·Ñƒ Ð³Ð¾Ð²Ð¾Ñ€Ð¸Ñ‚ÑŒ Ð¿Ñ€Ð¾ ÑÐµÐºÑ, Ñ‚Ð¾ ÐºÐ°ÐºÐ¾Ðµ Ð»Ð¸Ð±Ð¾ Ð¶ÐµÐ»Ð°Ð½Ð¸Ðµ Ð·Ð½Ð°ÐºÐ¾Ð¼Ð¸Ñ‚ÑŒÑÑ Ð´Ð°Ð»ÑŒÑˆÐµ - Ð¾Ð½ ÑÑ€Ð°Ð·Ñƒ Ð¾Ñ‚Ð±Ð¸Ð²Ð°ÐµÑ‚. :smile_fem:'),(57,'953d876b22','','[quote:953d876b22]Ð° ÐºÐ¾Ð³Ð´Ð° Ð¼ÑƒÐ¶Ñ‡Ð¸Ð½Ð° Ð³Ð¾Ð²Ð¾Ñ€Ð¸Ñ‚ ÐµÐ¹:\n- Ð¿Ñ€Ð¸Ð²ÐµÑ‚ Ñ Ñ…Ð¾Ñ‡Ñƒ Ñ Ñ‚Ð¾Ð±Ð¾Ð¹ ÑÐµÐºÑÐ° [/quote:953d876b22]\n\nÐŸÐ¾Ð»Ð½Ð¾ÑÑ‚ÑŒÑŽ ÑÐ¾Ð³Ð»Ð°ÑÐµÐ½ Ñ Ð’Ð°Ð¼Ð¸. ÐÐ¾ Ð²ÑÐµ Ð¶Ðµ, Ð´ÑƒÐ¼Ð°ÑŽ, Ð¿Ñ€Ð¸ Ð·Ð½Ð°ÐºÐ¾Ð¼ÑÑ‚Ð²Ðµ Ñ Ñ‚Ñ€Ð°Ð½Ñ-Ð´ÐµÐ²ÑƒÑˆÐºÐ¾Ð¹ Ð½Ð°Ð´Ð¾ ÑÐ¾Ð±Ð»ÑŽÐ´Ð°Ñ‚ÑŒ Ð·Ð½Ð°Ñ‡Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾ Ð±Ð¾Ð»ÑŒÑˆÐµ Ñ‚Ð°ÐºÑ‚Ð°, Ñ‡ÐµÐ¼ Ð¾Ð±Ñ‹Ñ‡Ð½Ð¾. :bump: ÐœÐ¾Ð¶ÐµÑ‚, Ñ Ð½Ðµ Ð¿Ñ€Ð°Ð²? :moderate:  ÐŸÑ€Ð¾ÑÑ‚Ð¾, Ð½Ð¸ Ñ€Ð°Ð·Ñƒ Ð¼Ð½Ðµ ÐµÑ‰Ðµ Ñ‚Ñ€Ð°Ð½Ñ-Ð´ÐµÐ²ÑƒÑˆÐºÐ¸ Ð½Ðµ Ð²ÑÑ‚Ñ€ÐµÑ‡Ð°Ð»Ð¸ÑÑŒ Ð² Ð¶Ð¸Ð·Ð½Ð¸. Ð’ Ð½Ð°ÑˆÐµÐ¹ Ð¿Ñ€Ð¾Ð²Ð¸Ð½Ñ†Ð¸Ð¸ ÑÑ‚Ð¾ ÑÐ»Ð¾Ð¶Ð½Ð¾. Ð’ÐµÐ´ÑŒ ÑÑ‚Ð¾ ÑÐ¾ÑÑ‚Ð¾ÑÐ½Ð¸Ðµ Ð´ÑƒÑˆÐ¸ :piano:  Ð¸ Ð²Ñ‚Ð¾Ñ€Ð³Ð°Ñ‚ÑŒÑÑ Ð² ÑÑ‚Ñƒ Ð¾Ð±Ð»Ð°ÑÑ‚ÑŒ Ð³Ñ€ÑƒÐ±Ð¾ Ð¸ Ð½ÐµÑƒÐ¼ÐµÐ»Ð¾ ÑÐ¾Ð²ÐµÑ€ÑˆÐµÐ½Ð½Ð¾ Ð¿Ñ€Ð¾Ñ‚Ð¸Ð²Ð¾Ð¿Ð¾ÐºÐ°Ð·Ð°Ð½Ð¾. Ð Ð°Ð´ Ð·Ð° Ð’Ð°Ñ, Ñ‡Ñ‚Ð¾ Ð’Ð°Ð¼ Ð²ÑÑ‚Ñ€ÐµÑ‡Ð°ÑŽÑ‚ÑÑ Ð¿Ð¾Ð½Ð¸Ð¼Ð°ÑŽÑ‰Ð¸Ðµ Ð»ÑŽÐ´Ð¸. ÐŸÐ¾ÑÐºÐ¾Ð»ÑŒÐºÑƒ, Ð² Ð½Ð°ÑˆÐµÐ¼ ÑÐµÐ³Ð¾Ð´Ð½ÑÑˆÐ½ÐµÐ¼ Ð¾Ð±Ñ‰ÐµÑÑ‚Ð²Ðµ,\nÐ½Ð°Ð¹Ñ‚Ð¸ Ð¿Ð¾Ð½Ð¸Ð¼Ð°ÑŽÑ‰ÐµÐ³Ð¾ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ° ÐºÑ€Ð°Ð¹Ð½Ðµ Ñ‚Ñ€ÑƒÐ´Ð½Ð¾. :nohope:'),(58,'e2faa6e9e7','','&#1042; &#1089;&#1074;&#1086;&#1077; &#1074;&#1088;&#1077;&#1084;&#1103; &#1086;&#1073;&#1085;&#1072;&#1088;&#1091;&#1078;&#1080;&#1083; &#1088;&#1072;&#1079;&#1074;&#1080;&#1090;&#1086;&#1077; &#1089;&#1086;&#1086;&#1073;&#1097;&#1077;&#1089;&#1090;&#1074;&#1086; &#1090;&#1089; &#1074; &#1057;&#1090;&#1072;&#1084;&#1073;&#1091;&#1083;&#1077;. :dead: &#1053;&#1077; &#1073;&#1077;&#1079; &#1091;&#1076;&#1080;&#1074;&#1083;&#1077;&#1085;&#1080;&#1103; (&#1089;&#1090;&#1077;&#1088;&#1077;&#1086;&#1090;&#1080;&#1087;&#1099; :old:  - &#1080;&#1089;&#1083;&#1072;&#1084;&#1089;&#1082;&#1072;&#1103; &#1082;&#1091;&#1083;&#1100;&#1090;&#1091;&#1088;&#1072;, &#1076;&#1077;&#1089;&#1103;&#1090;&#1080;&#1083;&#1077;&#1090;&#1080;&#1103; &#1074;&#1086;&#1077;&#1085;&#1085;&#1086;&#1075;&#1086;  })i({  &#1087;&#1088;&#1072;&#1074;&#1083;&#1077;&#1085;&#1080;&#1103; &#1080; &#1087;&#1088;. :death:  ).\n&#1057;&#1072;&#1081;&#1090;&#1086;&#1074; &#1084;&#1085;&#1086;&#1075;&#1086;, &#1085;&#1072;&#1081;&#1090;&#1080; &#1083;&#1077;&#1075;&#1082;&#1086; :metal:  . &#1047;&#1072;&#1074;&#1077;&#1076;&#1077;&#1085;&#1080;&#1081; &#1085;&#1077;&#1090;, &#1090;.&#1082;. &#1089;&#1077;&#1082;&#1089;-&#1073;&#1080;&#1079;&#1085;&#1077;&#1089; &#1090;&#1072;&#1084; &#1085;&#1077;&#1083;&#1077;&#1075;&#1072;&#1083;&#1077;&#1085; :shock:  , &#1087;&#1086;&#1101;&#1090;&#1086;&#1084;&#1091; &#1087;&#1088;&#1080;&#1085;&#1080;&#1084;&#1072;&#1102;&#1090; &#1085;&#1072; &#1082;&#1074;&#1072;&#1088;&#1090;&#1080;&#1088;&#1072;&#1093; :lol:  &#1080;&#1083;&#1080; &#1087;&#1088;&#1080;&#1077;&#1079;&#1078;&#1072;&#1102;&#1090; &#1074; &#1086;&#1090;&#1077;&#1083;&#1080; :omen: .\n\n&#1048;&#1079; &#1087;&#1086;&#1089;&#1083;&#1077;&#1076;&#1085;&#1080;&#1093; &#1079;&#1085;&#1072;&#1082;&#1086;&#1084;&#1089;&#1090;&#1074;. &#1047;&#1086;&#1074;&#1091;&#1090; Zehra. :D  &#1053;&#1077; &#1082;&#1091;&#1088;&#1080;&#1090; :rasta:  , &#1095;&#1080;&#1089;&#1090;&#1072;&#1103; &#1082;&#1074;&#1072;&#1088;&#1090;&#1080;&#1088;&#1072; :punk: &#1074; &#1093;&#1086;&#1088;&#1086;&#1096;&#1077;&#1084; &#1076;&#1086;&#1084;&#1077;  :facepalm: , &#1084;&#1086;&#1078;&#1077;&#1090; &#1086;&#1073;&#1098;&#1103;&#1089;&#1085;&#1080;&#1090;&#1100;&#1089;&#1103; &#1087;&#1086;-&#1072;&#1085;&#1075;&#1083;&#1080;&#1081;&#1089;&#1082;&#1080; :pepsi:  &#1074; &#1087;&#1088;&#1077;&#1076;&#1077;&#1083;&#1072;&#1093; &#1085;&#1077;&#1086;&#1073;&#1093;&#1086;&#1076;&#1080;&#1084;&#1086;&#1075;&#1086; :gamer: .\n\n[color=red:e2faa6e9e7]&#1064;&#1091;&#1090;&#1082;&#1091; [b:e2faa6e9e7]&#1086;&#1094;&#1077;&#1085;&#1080;&#1083;&#1072;[/b:e2faa6e9e7], &#1085;&#1086; &#1074;&#1089;&#1105; &#1088;&#1072;&#1074;&#1085;&#1086; &#1085;&#1072;&#1082;&#1072;&#1078;&#1091; :ban: \nHidden [/color:e2faa6e9e7]'),(59,'e880115b09','','[quote:e880115b09=\"Hyperion\"]&#1042; &#1089;&#1074;&#1086;&#1077; &#1074;&#1088;&#1077;&#1084;&#1103; &#1086;&#1073;&#1085;&#1072;&#1088;&#1091;&#1078;&#1080;&#1083; ...[/quote:e880115b09]\n&#1069;&#1090;&#1086; &#1090;&#1072;&#1082;&#1086;&#1081; [fade:e880115b09][s:e880115b09]&#1090;&#1086;&#1085;&#1082;&#1080;&#1081;[/s:e880115b09][/fade:e880115b09] &#1089;&#1090;&#1105;&#1073;? :cool: &#1059;&#1084;&#1077;&#1088;&#1100;&#1090;&#1077; &#1087;&#1099;&#1083; :thrash:  &#1080; &#1079;&#1072;&#1086;&#1076;&#1085;&#1086; &#1082;&#1086;&#1083;&#1080;&#1095;&#1077;&#1089;&#1090;&#1074;&#1086; &#1089;&#1084;&#1072;&#1081;&#1083;&#1080;&#1082;&#1086;&#1074;\n\n[color=red:e880115b09]&#1042;&#1099; [b:e880115b09]&#1085;&#1077; &#1103;&#1074;&#1083;&#1103;&#1077;&#1090;&#1077;&#1089;&#1100;[/b:e880115b09] &#1084;&#1086;&#1076;&#1077;&#1088;&#1072;&#1090;&#1086;&#1088;&#1086;&#1084;, &#1087;&#1086;&#1101;&#1090;&#1086;&#1084;&#1091; &#1089;&#1080;&#1076;&#1080;&#1090;&#1077; &#1090;&#1080;&#1093;&#1086;\nHidden [/color:e880115b09]'),(60,'b1080ebd27','','ÐžÑ„Ñ„Ñ‚Ð¾Ð¿ Ð¿Ñ€ÐµÐºÑ€Ð°Ñ‰Ð°ÐµÐ¼.'),(61,'bf280c9e17','','ÐŸÐ¾ÑÑ‚Ð¾ÑÐ½Ð½Ð¾ ÐµÐ·Ð¶Ñƒ Ð½Ð° Ð¾Ñ‚Ð´Ñ‹Ñ… Ð² Ð¢Ð°Ð¹, Ð½Ð¾ Ð³Ð¾Ð²Ð¾Ñ€ÑÑ‚, Ñ‡Ñ‚Ð¾ Ð² ÐœÐ°Ð½Ð¸Ð»Ðµ Ð¸ Ð²Ð¾Ð¾Ð±Ñ‰Ðµ Ð½Ð° Ð¤Ð¸Ð»Ð¸Ð¿Ð¿Ð¸Ð½Ð°Ñ… ÐµÑ‰Ñ‘ Ð±Ð¾Ð»ÑŒÑˆÐµ Ñ‚Ñ€Ð°Ð½ÑÐ¾Ð². ÐŸÑ€Ð°Ð²Ð´Ð° Ð»Ð¸ ÑÑ‚Ð¾? ÐšÑ‚Ð¾ Ð¾Ñ‚Ð´Ñ‹Ñ…Ð°Ð»? ÐŸÑ€Ð°Ð²Ð´Ð° Ð»Ð¸, Ñ‡Ñ‚Ð¾ ÐŸÐ°Ñ‚Ñ‚Ð°Ð¹Ðµ Ð´Ð°Ð»ÐµÐºÐ¾ Ð´Ð° Ð¤Ð¸Ð»Ð¸Ð¿Ð¿Ð¸Ð½ Ð¸ Ñ‡Ñ‚Ð¾ Ð² ÐœÐ°Ð½Ð¸Ð»Ðµ Ð·Ð°Ð²ÐµÐ´ÐµÐ½Ð¸Ñ ÐºÑ€ÑƒÑ‡Ðµ? :smile:'),(62,'a9fc620a4d','','[quote:a9fc620a4d=\"Bulbaset\"]ÐŸÐ¾ÑÑ‚Ð¾ÑÐ½Ð½Ð¾ ÐµÐ·Ð¶Ñƒ Ð½Ð° Ð¾Ñ‚Ð´Ñ‹Ñ… Ð² Ð¢Ð°Ð¹, Ð½Ð¾ Ð³Ð¾Ð²Ð¾Ñ€ÑÑ‚, Ñ‡Ñ‚Ð¾ Ð² ÐœÐ°Ð½Ð¸Ð»Ðµ Ð¸ Ð²Ð¾Ð¾Ð±Ñ‰Ðµ Ð½Ð° Ð¤Ð¸Ð»Ð¸Ð¿Ð¿Ð¸Ð½Ð°Ñ… ÐµÑ‰Ñ‘ Ð±Ð¾Ð»ÑŒÑˆÐµ Ñ‚Ñ€Ð°Ð½ÑÐ¾Ð². ÐŸÑ€Ð°Ð²Ð´Ð° Ð»Ð¸ ÑÑ‚Ð¾? ÐšÑ‚Ð¾ Ð¾Ñ‚Ð´Ñ‹Ñ…Ð°Ð»? ÐŸÑ€Ð°Ð²Ð´Ð° Ð»Ð¸, Ñ‡Ñ‚Ð¾ ÐŸÐ°Ñ‚Ñ‚Ð°Ð¹Ðµ Ð´Ð°Ð»ÐµÐºÐ¾ Ð´Ð° Ð¤Ð¸Ð»Ð¸Ð¿Ð¿Ð¸Ð½ Ð¸ Ñ‡Ñ‚Ð¾ Ð² ÐœÐ°Ð½Ð¸Ð»Ðµ Ð·Ð°Ð²ÐµÐ´ÐµÐ½Ð¸Ñ ÐºÑ€ÑƒÑ‡Ðµ? :smile:[/quote:a9fc620a4d]\nÐÐµÑ‚, Ð½Ñƒ Ñ‡Ñ‚Ð¾ Ð·Ð° Ð°ÑÐµÐºÑÑƒÐ°Ð»Ñ‹ Ð¿Ð¾ÑˆÐ»Ð¸? Ñ‚Ñ€Ð°Ð½ÑÐ°Ð¼Ð¸ Ð¸Ð½Ñ‚ÐµÑ€ÐµÑÑƒÑŽÑ‚ÑÑ  :oops:'),(63,'efc52ef495','','[quote:efc52ef495=\"LuxManager\"]:oops:[/quote:efc52ef495]\nÐ”Ð° Ð±ÑƒÐ´ÐµÑ‚ Ð’Ð°Ð¼ Ð¸Ð·Ð²ÐµÑÑ‚Ð½Ð¾, Ñ‡Ñ‚Ð¾ Ñ‚Ñ€Ð°Ð½ÑÐ¸ÐºÐ¸ Ð² ÑÐ¸Ð»Ñƒ Ð³Ð¾Ñ€Ð¾Ð¼Ð¾Ð½Ð¾Ñ‚ÐµÑ€Ð°Ð¿Ð¸Ð¸ Ð¸ ÐµÑÑ‚ÑŒ ÐÐ¡Ð•ÐšÐ¡Ð£ÐÐ›Ð«'),(64,'41768f83fc','ÐŸÐ¾Ð·Ð½Ð°ÐºÐ¾Ð¼Ð»ÑŽÑÑŒ','Ð’ÑÐµÐ¼ Ð·Ð´Ñ€Ð°Ð²ÑÑ‚Ð²ÑƒÐ¹Ñ‚Ðµ! :hello: Ð¥Ð¾Ñ‚ÐµÐ»Ð¾ÑÑŒ Ð±Ñ‹ Ð¿Ð¾Ð·Ð½Ð°ÐºÐ¾Ð¼Ð¸Ñ‚ÑŒÑÑ Ñ Ñ‚ÐµÐ¼, ÐºÑ‚Ð¾ Ð¼Ð¾Ð¶ÐµÑ‚ Ð¼ÐµÐ½Ñ Ð¿Ð¾Ð½ÑÑ‚ÑŒ, Ñ„ÑƒÑ€ÑŒÐºÐ¸, Ð¿Ð¸ÑˆÐ¸Ñ‚Ðµ! Ðž ÑÐµÐ±Ðµ:\nÐ¯ Ð¾ÑÐ¾Ð±Ð° Ñ‚Ð°Ð¸Ð½ÑÑ‚Ð²ÐµÐ½Ð½Ð°Ñ Ð¸ Ð¾Ñ‚Ð»Ð¸Ñ‡Ð°ÑŽÑ‰Ð°ÑÑÑ ÐºÑ€Ð°Ð¹Ð½Ð¸Ð¼ Ð¸Ð½Ð´Ð¸Ð²Ð¸Ð´ÑƒÐ°Ð»Ð¸Ð·Ð¼Ð¾Ð¼. ÐœÐµÐ½Ñ Ð¼Ð¾Ð¶Ð½Ð¾ Ð½Ð°Ð·Ð²Ð°Ñ‚ÑŒ [i:41768f83fc][color=green:41768f83fc]Ð²ÐµÑÐµÐ»Ð¾Ð¹[/color:41768f83fc][/i:41768f83fc] Ð¸ [i:41768f83fc][color=violet:41768f83fc]Ð±ÐµÑÐ±Ð°ÑˆÐµÐ½Ð½Ð¾Ð¹[/color:41768f83fc][/i:41768f83fc], Ð½Ð¾ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ ÐµÑÐ»Ð¸ Ñ Ð¿Ð¾Ð´Ð¿ÑƒÑ‰Ñƒ Ð²Ð°Ñ Ð±Ð»Ð¸Ð·ÐºÐ¾ Ðº ÑÐµÐ±Ðµ, Ñ‡Ñ‚Ð¾ Ð±Ñ‹Ð²Ð°ÐµÑ‚ Ð½ÐµÑ‡Ð°ÑÑ‚Ð¾. ÐžÑ‚Ð»Ð¸Ñ‡Ð°ÑŽÑÑŒ ÐºÑ€Ð°Ð¹Ð½Ð¸Ð¼ Ð½ÐµÐ´Ð¾Ð²ÐµÑ€Ð¸ÐµÐ¼ Ð¸ Ð¿Ð¾Ð´Ð¾Ð·Ñ€Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚ÑŒÑŽ. ÐžÑ†ÐµÐ½Ð¸Ð²Ð°ÑŽ Ð»ÑŽÐ´ÐµÐ¹ Ð¸ [color=cyan:41768f83fc]Ñ„ÑƒÑ€Ñ€ÐµÐ¹[/color:41768f83fc] Ð½Ðµ Ð¿Ð¾ Ð¸Ñ… ÐºÑ€Ð°ÑÐ¸Ð²Ñ‹Ð¼ ÑÐ»Ð¾Ð²Ð°Ð¼, Ð° Ð¿Ð¾ Ñ€ÐµÐ°Ð»ÑŒÐ½Ñ‹Ð¼ Ð¿Ð¾ÑÑ‚ÑƒÐ¿ÐºÐ°Ð¼.\nP.S.\nÐ’Ð¾Ñ‚ Ð²Ð°Ð¼ Ð¿Ð°Ñ€Ð¾Ñ‡ÐºÐ° Ð¼Ð¸Ð»Ð°ÑˆÐµÑ‡ÐµÐº:'),(65,'381fec086d','','&#1060;&#1091;&#1088;&#1088;&#1080;  :goth: - &#1101;&#1090;&#1086; &#1090;&#1072;&#1082;&#1086;&#1081; &#1074;&#1080;&#1076; &#1075;&#1086;&#1088;&#1086;&#1076;&#1089;&#1082;&#1080;&#1093; &#1089;&#1091;&#1084;&#1072;&#1089;&#1096;&#1077;&#1076;&#1096;&#1080;&#1093;?\n\n[color=red:381fec086d]&#1041;&#1077;&#1079; &#1086;&#1089;&#1082;&#1086;&#1088;&#1073;&#1083;&#1077;&#1085;&#1080;&#1081; &#1082; &#1085;&#1086;&#1074;&#1080;&#1095;&#1082;&#1072;&#1084; &#1101;&#1090;&#1086;&#1075;&#1086; &#1092;&#1086;&#1088;&#1091;&#1084;&#1072; :cry: \nHidden[/color:381fec086d]'),(66,'6ba5be8c69','','[quote:6ba5be8c69=\"Bulbaset\"]&#1060;&#1091;&#1088;&#1088;&#1080;  :goth: - &#1101;&#1090;&#1086; &#1090;&#1072;&#1082;&#1086;&#1081; &#1074;&#1080;&#1076; &#1075;&#1086;&#1088;&#1086;&#1076;&#1089;&#1082;&#1080;&#1093; &#1089;&#1091;&#1084;&#1072;&#1089;&#1096;&#1077;&#1076;&#1096;&#1080;&#1093;?  :bump:[/quote:6ba5be8c69]\n&#1063;&#1090;&#1086; &#1090;&#1099;  :hippie:  , &#1086;&#1073;&#1099;&#1095;&#1085;&#1072;&#1103; &#1076;&#1086;&#1084;&#1072;&#1096;&#1085;&#1103;&#1103; &#1076;&#1077;&#1074;&#1086;&#1095;&#1082;&#1072;  \n\n[color=red:6ba5be8c69]&#1040; &#1042;&#1099;, [b:6ba5be8c69]Hyperion[/b:6ba5be8c69], &#1083;&#1091;&#1095;&#1096;&#1077; &#1073;&#1099; &#1079;&#1072; &#1089;&#1074;&#1086;&#1080;&#1084; &#1103;&#1079;&#1099;&#1082;&#1086;&#1084; &#1089;&#1083;&#1077;&#1076;&#1080;&#1083;&#1080;, &#1076;&#1086; &#1073;&#1072;&#1085;&#1072; &#1042;&#1072;&#1084; &#1085;&#1077;&#1076;&#1072;&#1083;&#1077;&#1082;&#1086;  :hsf: \nHidden[/color:6ba5be8c69]'),(67,'b1d453d950','','&#1055;&#1086;&#1087;&#1088;&#1086;&#1096;&#1091; &#1090;&#1091;&#1087;&#1099;&#1093; &#1080;&#1075;&#1088;&#1086;&#1079;&#1072;&#1076;&#1088;&#1086;&#1090;&#1086;&#1074;-&#1086;&#1095;&#1082;&#1072;&#1088;&#1080;&#1082;&#1086;&#1074;  :gamer:  &#1076;&#1077;&#1074;&#1086;&#1095;&#1082;&#1091; &#1085;&#1077; &#1086;&#1073;&#1080;&#1078;&#1072;&#1090;&#1100;.\nP.S.\n&#1069;&#1090;&#1072; &#1087;&#1088;&#1086;&#1082;&#1083;&#1103;&#1090;&#1072;&#1103; &#1078;&#1077;&#1085;&#1089;&#1082;&#1072;&#1103; &#1089;&#1086;&#1083;&#1080;&#1076;&#1072;&#1088;&#1085;&#1086;&#1089;&#1090;&#1100;, &#1085;&#1091; &#1085;&#1077; &#1087;&#1086;&#1085;&#1080;&#1084;&#1072;&#1102; &#1103; &#1079;&#1086;&#1086;&#1092;&#1080;&#1083;&#1086;&#1074; :mad:  ... &#1061;&#1086;&#1090;&#1103;... &#1082;&#1072;&#1082;&#1072;&#1103; &#1103; &#1076;&#1077;&#1074;&#1091;&#1096;&#1082;&#1072;?  :twisted:'),(68,'78419940fb','','Ð”Ð°Ð²Ð°Ð¹Ñ‚Ðµ Ð±Ð»Ð¸Ð¶Ðµ Ðº Ñ‚ÐµÐ¼Ðµ, Ð´ÐµÐ²Ð¾Ñ‡ÐºÐ° Ð¸ ÑƒÐ¹Ñ‚Ð¸ Ð²ÐµÐ´ÑŒ Ð¼Ð¾Ð¶ÐµÑ‚...'),(69,'38192d17d8','','[color=indigo:38192d17d8][b:38192d17d8]Ð§Ñ‚Ð¾[/b:38192d17d8][/color:38192d17d8] Ð¶ Ð²Ð°Ð¼ [i:38192d17d8]Ð¾Ð±Ñ‹Ñ‡Ð½Ñ‹Ðµ[/i:38192d17d8]-Ñ‚Ð¾ Ð´ÐµÐ²ÑƒÑˆÐºÐ¸ :schlick: Ð½Ðµ Ð½Ñ€Ð°Ð²ÑÑ‚ÑÑ? Ð’ÑÑ‘ [color=green:38192d17d8]Ð¿Ñ€Ð¸Ñ‡Ð¸Ð½Ð´Ð°Ð»Ñ‹[/color:38192d17d8] :fap:  Ð¸Ð¼ Ð¿Ð¾Ð´Ð°Ð²Ð°Ð¹ :mad:'),(70,'5a97a104e5','','[color=darkred:5a97a104e5][b:5a97a104e5]Ð”ÐµÑ€Ð¶Ð¸Ñ‚Ðµ[/b:5a97a104e5][/color:5a97a104e5] [u:5a97a104e5][color=orange:5a97a104e5]Ð¿Ð°Ñ€Ñƒ[/color:5a97a104e5] [/u:5a97a104e5][color=yellow:5a97a104e5][i:5a97a104e5]Ð¿Ñ‚Ð¸Ñ‡ÐµÐº[/i:5a97a104e5][/color:5a97a104e5]  :oops:'),(71,'ab0a80bf5e','','&#1053;&#1072;&#1089;&#1083;&#1072;&#1078;&#1076;&#1072;&#1081;&#1090;&#1077;&#1089;&#1100;, &#1079;&#1074;&#1077;&#1088;&#1103;&#1090;&#1082;&#1080;\n[flash width=399 height=480:ab0a80bf5e]http://1chna.ru/forum/files/Urugnot_Ringing_the_Bells.swf[/flash:ab0a80bf5e]\n[flash width=384 height=480:ab0a80bf5e]http://1chna.ru/forum/files/Lobogris_Mouthful_animated.swf[/flash:ab0a80bf5e]\n[flash width=480 height=335:ab0a80bf5e]http://1chna.ru/forum/files/washa_Munashi_and_Takaowolf.swf[/flash:ab0a80bf5e]'),(72,'b5dac395b8','',':pop:  :idea: [color=green:b5dac395b8][i:b5dac395b8]&#1056;&#1072;&#1079; &#1091;&#1078; &#1085;&#1072; &#1090;&#1086; &#1087;&#1086;&#1096;&#1083;&#1086;[/i:b5dac395b8][/color:b5dac395b8], [color=brown:b5dac395b8]&#1074;&#1086;&#1090;[/color:b5dac395b8] [color=olive:b5dac395b8]&#1077;&#1097;&#1105;[/color:b5dac395b8] [color=violet:b5dac395b8][b:b5dac395b8]&#1072;&#1085;&#1080;&#1084;&#1072;&#1094;&#1080;&#1103;[/b:b5dac395b8]\n[/color:b5dac395b8]\n[flash width=334 height=458:b5dac395b8]http://1chna.ru/forum/files/pokemon-vs-digimon.swf[/flash:b5dac395b8]'),(73,'e30a97c488','','[color=orange:e30a97c488][b:e30a97c488][i:e30a97c488]Ð¢Ð°Ð´Ð°Ð´Ð°Ð¼-Ñ‚Ð°Ð´Ð°Ð¼![/i:e30a97c488][/b:e30a97c488][/color:e30a97c488] Ð”Ð°Ð¼Ñ‹ Ð¸ Ð³Ð¾ÑÐ¿Ð¾Ð´Ð° :pepsi: , Ð²Ð°ÑˆÐµÐ¼Ñƒ Ð²Ð½Ð¸Ð¼Ð°Ð½Ð¸ÑŽ[b:e30a97c488][color=black:e30a97c488][u:e30a97c488] Ð“ÐÐ•Ð§ÐšÐ[/u:e30a97c488][/color:e30a97c488][/b:e30a97c488]'),(74,'f784554c6b','','[quote:f784554c6b=\"INSIDESTEP\"][color=orange:f784554c6b][b:f784554c6b][i:f784554c6b]&#1058;&#1072;&#1076;&#1072;&#1076;&#1072;&#1084;-&#1090;&#1072;&#1076;&#1072;&#1084;![/i:f784554c6b][/b:f784554c6b][/color:f784554c6b] &#1044;&#1072;&#1084;&#1099; &#1080; &#1075;&#1086;&#1089;&#1087;&#1086;&#1076;&#1072; :pepsi: , &#1074;&#1072;&#1096;&#1077;&#1084;&#1091; &#1074;&#1085;&#1080;&#1084;&#1072;&#1085;&#1080;&#1102;[b:f784554c6b][color=black:f784554c6b][u:f784554c6b] &#1043;&#1040;&#1045;&#1063;&#1050;&#1040;[/u:f784554c6b][/color:f784554c6b][/b:f784554c6b][/quote:f784554c6b]\n&#1053;&#1077;&#1077;, &#1101;&#1090;&#1086; &#1082;&#1072;&#1082;&#1072;&#1103;-&#1090;&#1086; &#1076;&#1088;&#1091;&#1075;&#1072;&#1103; &#1089;&#1086;&#1074;&#1089;&#1077;&#1084; &#1043;&#1072;&#1077;&#1095;&#1082;&#1072; :neutral:  , [b:f784554c6b][color=white:f784554c6b]&#1053;&#1072;[/color:f784554c6b][color=blue:f784554c6b]&#1096;[/color:f784554c6b][color=red:f784554c6b]&#1072;[/color:f784554c6b][/b:f784554c6b] &#1074;&#1086;&#1090;:\n\n[flash width=480 height=384:f784554c6b]http://1chna.ru/forum/files/FTF_Gadget_Hackwrench.swf[/flash:f784554c6b]'),(75,'1b10def8e0','','[color=brown:1b10def8e0]ÐŸ[/color:1b10def8e0][color=yellow:1b10def8e0]Ñ€[/color:1b10def8e0][color=cyan:1b10def8e0]Ð¸[/color:1b10def8e0][color=red:1b10def8e0]Ð’[/color:1b10def8e0][color=indigo:1b10def8e0]Ðµ[/color:1b10def8e0][color=violet:1b10def8e0]Ð¢[/color:1b10def8e0][b:1b10def8e0][color=darkblue:1b10def8e0]Ð¸[/color:1b10def8e0][/b:1b10def8e0][size=14:1b10def8e0][color=orange:1b10def8e0]Ðº[/color:1b10def8e0][/size:1b10def8e0], [color=green:1b10def8e0][s:1b10def8e0][i:1b10def8e0]Ð»ÑŽÐ´Ð¸![/i:1b10def8e0][/s:1b10def8e0][/color:1b10def8e0]  :hello:  :death:'),(76,'2220eacdc7','Ð§Ñ‚Ð¾ Ð²Ð°Ñ Ð¿Ñ€Ð¸Ð²ÐµÐ»Ð¾ Ð² Ð¼Ð¸Ñ€','Ð£ Ð¼ÐµÐ½Ñ Ð²ÑÐµ Ñ Ñ€Ð°Ð½Ð½ÐµÐ³Ð¾ Ð´ÐµÑ‚ÑÑ‚Ð²Ð°, ÑÑ‚Ñ€Ð°ÑˆÐ½Ð°Ñ Ð»ÑŽÐ±Ð¾Ð²ÑŒ Ðº Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ð¼, Ð·Ð°Ñ‚ÐµÐ¼ Ñ Ð¿Ð¾ ÑƒÑˆÐ¸ Ð²Ð»ÑŽÐ±Ð¸Ð»Ð°ÑÑŒ Ð² Ð´Ñ€Ð°ÐºÐ¾Ð½Ð¾Ð². Ð Ð¿Ð¾ÑÑ‚ÐµÐ¿ÐµÐ½Ð½Ð¾ Ð¼Ð½Ðµ Ð¿Ð¾Ð½Ñ€Ð°Ð²Ð¸Ð»Ð¸ÑÑŒ [color=orange:2220eacdc7][i:2220eacdc7]Ð»ÑŒÐ²Ñ‹[/i:2220eacdc7][/color:2220eacdc7]. Ð˜Ð³Ñ€Ð°Ñ Ð² [color=violet:2220eacdc7][b:2220eacdc7]Ð˜[/b:2220eacdc7][/color:2220eacdc7][color=brown:2220eacdc7][b:2220eacdc7]Ð¢[/b:2220eacdc7][/color:2220eacdc7] ([color=violet:2220eacdc7]Impressive[/color:2220eacdc7] [color=brown:2220eacdc7]title[/color:2220eacdc7]) Ð¼Ð½Ð¾Ð³Ð¸Ðµ Ð³Ð¾Ð²Ð¾Ñ€Ð¸Ð»Ð¸ Ð¾Ð± Ñ€Ð¸ÑÐ¾Ð²Ð°Ð½Ð¸Ð¸ Ð¸ Ð°Ñ€Ñ‚Ð°Ñ… Ð¸ Ð²ÑÐµ Ð½Ðµ Ð¿Ð¾Ð½ÑÑ‚Ð½Ñ‹Ðµ Ð¿Ñ€ÐµÐ´Ð»Ð¾Ð¶ÐµÐ½Ð¸Ñ: Ð¢Ñ‹ Ð±Ñ‹Ð»Ð° Ð½Ð° Ð”Ð, Ð¥Ð¾Ð´Ð¸Ð» Ð½Ð° Ð”Ð, ÑÐºÐ¾Ñ€Ð¾ Ð²Ñ‹Ð¹Ð´ÐµÑˆÑŒ Ð½Ð° Ð”Ð\nÐœÐ½Ðµ ÑÑ‚Ð¾ Ð±Ñ‹Ð»Ð¾ Ð½Ðµ Ð¿Ð¾Ð½ÑÑ‚Ð½Ð¾ Ð¸ Ñ‚Ð¾Ð³Ð´Ð° Ð¿Ð¾ÑÑ‚ÐµÐ¿ÐµÐ½Ð½Ð¾ Ñ Ð¾Ñ‚ÐºÑ€Ñ‹Ð»Ð° [i:2220eacdc7]Ñ„Ð¾Ñ‚Ð¾ÑˆÐ¾Ð¿[/i:2220eacdc7] Ð¸Ð·ÑƒÑ‡Ð¸Ð»Ð° Ñ‚Ð°Ðº ÑÐºÐ°Ð·Ð°Ñ‚ÑŒ Ð¸ ÑÑ‚Ð°Ð»Ð° Ñ€Ð¸ÑÐ¾Ð²Ð°Ñ‚ÑŒ. Ð¢Ð¾ Ñ‡Ñ‚Ð¾ Ñ Ñ€Ð¸ÑÐ¾Ð²Ð°Ð»Ð° Ð½Ð° Ð±ÑƒÐ¼Ð°Ð³Ðµ Ð¸ Ñ„Ð¾Ñ‚Ð¾ÑˆÐ¾Ð¿Ðµ Ð½Ðµ Ð·Ð½Ð°Ð»Ð° ÐºÐ°Ðº Ð½Ð°Ð·Ð²Ð°Ñ‚ÑŒ, Ñ€Ð¾Ð´Ð¸Ñ‚ÐµÐ»Ð¸ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð²Ð¾ÑÑ…Ð¸Ñ‰Ð°Ð»Ð¸ÑÑŒ Ñ‚ÐµÐ¼ ÐºÐ°Ðº Ð±Ñ‹ÑÑ‚Ñ€Ð¾ Ñ Ð½Ð°Ð±Ð¸Ñ€Ð°ÑŽ Ð¾Ð¿ÑÑ‚ Ð² Ñ€Ð¸ÑÐ¾Ð²Ð°Ð½Ð¸Ð¸ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ñ‹Ñ… Ð² Ñ‚Ð¾Ð¼ Ñ‡Ð¸ÑÐ»Ðµ [color=orange:2220eacdc7][b:2220eacdc7]Ð»ÑŒÐ²Ð¾Ð²[/b:2220eacdc7][/color:2220eacdc7], Ð° Ð·Ð°Ñ‚ÐµÐ¼ Ñ Ñ€ÐµÑˆÐ¸Ð»Ð° ÑÐ¼ÐµÑˆÐ°Ñ‚ÑŒ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ° Ð¸ Ð¶Ð¸Ð²Ð¾Ñ‚Ð½Ð¾Ðµ, Ñ‚Ð°Ðº Ð¿Ð¾ÑÐ²Ð¸Ð»ÑÑ Ð¼Ð¾Ð¹ Ð¿ÐµÑ€Ð²Ñ‹Ð¹ Ñ„ÑƒÑ€Ñ€ÑŒ.\nÐ›Ð¸Ñ‡Ð½Ð¾ Ñ Ð´Ð°Ð²Ð½Ð¾ ÑÐ»Ñ‹ÑˆÐ°Ð»Ð° Ð¿Ð¾ Ð²ÑÐµÐ¼ ÑƒÐ³Ð»Ð°Ð¼ Ð½Ð° Ð¼ÑÐ¸Ð».Ñ€Ñƒ Ñ„ÑƒÑ€Ñ€Ð¸ Ñ„ÑƒÑ€Ñ€Ð¸, Ð½Ð¾ Ð´ÑƒÐ¼Ð°Ð»Ð° Ñ‡Ñ‚Ð¾ Ñ„ÑƒÑ€Ñ€Ð¸ ÑÑ‚Ð¾ Ð»ÐµÐ³ÐºÐ¾Ð¼Ñ‹ÑÐ»ÐµÐ½Ð½Ñ‹Ðµ Ð»ÑŽÐ´Ð¸ Ð¸ ÑÐ¾Ð²ÑÐµÐ¼ (Ð±ÐµÐ· Ð±Ð°ÑˆÐ½Ð¸) [u:2220eacdc7]Ð¿ÑÐ¸Ñ…Ð¸[/u:2220eacdc7], ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¼ Ð¼Ð¸Ñ€ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð² Ð¸Ð½ÐµÑ‚Ðµ ÐºÐ°Ð¶ÐµÑ‚ÑÑ, Ð½Ð°Ð²ÐµÑ€Ð½Ð¾Ðµ Ñ‚Ð°ÐºÐ¸Ðµ Ð½Ðµ Ð²ÐµÑ€Ð½Ñ‹Ðµ Ð¼Ñ‹ÑÐ»Ð¸ Ð¿Ð¾ÑÐ²Ð¸Ð»Ð¸ÑÑŒ Ð¸Ð· Ð·Ð° Ñ‚Ð¾Ð³Ð¾ Ñ‡Ñ‚Ð¾ [color=green:2220eacdc7]ÐŸ[/color:2220eacdc7][color=cyan:2220eacdc7]Ñ[/color:2220eacdc7][color=indigo:2220eacdc7][i:2220eacdc7]Ð«[/i:2220eacdc7][/color:2220eacdc7][color=red:2220eacdc7]Ñ…[/color:2220eacdc7]Ð˜[color=yellow:2220eacdc7][b:2220eacdc7]Ñ‡[/b:2220eacdc7][/color:2220eacdc7][color=olive:2220eacdc7]Ð“[/color:2220eacdc7][color=blue:2220eacdc7]Ð¾[/color:2220eacdc7]  :rasta:  Ð¤ÑƒÐ Ñ€Ð¸ Ð·Ð°ÑÐµÐ»ÑÐ»Ð¸ Ð²ÐµÑÑŒ Ð¼ÑÐ¸Ð», Ð° Ð½Ð°ÑÑ‚Ð¾ÑÑ‰Ð¸Ñ… Ð½Ð¸ Ð³Ð´Ðµ Ð½Ðµ Ð½Ð°Ð¹Ð´ÐµÑˆÑŒ. :facepalm:\nÐŸÐ¾Ñ‚Ð¾Ð¼ Ñ ÑÐ»ÑƒÑ‡Ð°Ð¹Ð½Ð¾ Ð½Ð°Ñ‚ÐºÐ½ÑƒÐ»Ð°ÑÑŒ Ð½Ð° Ð²Ð¸Ð´ÐµÐ¾ Ð³Ð´Ðµ ÐºÐ°ÐºÐ¾Ð¹ Ñ‚Ð¾ Ð¼ÑƒÐ¶Ð¸Ðº Ñ€Ð°ÑÑÐºÐ°Ð·Ñ‹Ð²Ð°Ð» Ð¾ Ñ„ÑƒÑ€Ñ€Ð¸, Ð¼Ð½Ðµ Ð¿Ð¾Ð½Ñ€Ð°Ð²Ð¸Ð»Ð¸ÑÑŒ Ð¿ÐµÑ€Ð²Ñ‹Ðµ Ð¼Ð¾Ð¼ÐµÐ½Ñ‚Ñ‹ Ð² Ñ€Ð¾Ð»Ð¸ÐºÐµ, Ð°Ñ€Ñ‚Ñ‹ Ñ„ÑƒÑ€Ñ€Ð¸ Ð¸ Ñ€Ð°ÑÑÐºÐ°Ð·Ñ‹ Ð¾ Ð½Ð¸Ñ…, Ñ‚ÑƒÑ‚ Ñ Ð¸ ÑƒÐ·Ð½Ð°Ð»Ð¾ Ð¿Ð¾Ð´Ñ€Ð¾Ð±Ð½ÐµÐµ Ð¾ ÑÑƒÐ±ÐºÑƒÐ»ÑŒÑ‚ÑƒÑ€Ðµ Ð¸ Ð¿Ð¾Ð½ÑÐ»Ð° Ð²ÑÐµ Ñ‡Ñ‚Ð¾ Ñ Ñ€Ð¸ÑÑƒÑŽ Ð½Ð°Ð·Ñ‹Ð²Ð°ÐµÑ‚ÑÑ Ñ„ÑƒÑ€Ñ€Ð¸.\nÐ¯ Ð¿Ð¾ÐºÐ°Ð·Ð°Ð»Ð° [s:2220eacdc7]Ñ€Ð¾Ð´Ð¸Ñ‚ÐµÐ»ÑÐ¼[/s:2220eacdc7] Ð¾Ð½Ð¸ ÐºÐ¾Ð½ÐµÑ‡Ð½Ð¾ Ñ‚Ð¾Ð¶Ðµ Ð½Ð° Ñ‚Ð¾Ñ‚ Ð¼Ð¾Ð¼ÐµÐ½Ñ‚ Ð¾Ð±Ñ€Ð°Ð´Ð¾Ð²Ð°Ð»Ð¸ÑÑŒ, Ð½Ð¾ Ð¿Ð¾Ñ‚Ð¾Ð¼ Ð¼Ð°Ð¼Ð¸Ð½ Ð·Ð°ÑÐºÐ¾Ðº Ð¿Ñ€Ð¾ Ð¶ÑƒÑ‚ÐºÑƒÑŽ ÐºÐ²Ð°Ñ€Ñ‚Ð¸Ñ€Ñƒ, Ð”Ð° ÑƒÐ¶ Ð»ÑƒÑ‡ÑˆÐµ Ð±Ñ‹ Ñ Ð½Ðµ Ð¿Ð¾ÐºÐ°Ð·Ñ‹Ð²Ð°Ð»Ð° Ñ‚Ð¾Ñ‚ Ñ€Ð¾Ð»Ð¸Ðº :? (Ð½Ñƒ ÑÑ‚Ð¾ ÑƒÐ¶Ðµ Ð´Ñ€ÑƒÐ³Ð°Ñ Ð¸ÑÑ‚Ð¾Ñ€Ð¸Ñ)\nÐÑƒ Ð²Ð¾Ð¾Ð±Ñ‰ÐµÐ¼ ÐºÐ°Ðº Ñ‚Ð¾ Ñ‚Ð°Ðº Ð¸ Ð¿Ð¾Ð·Ð½Ð°ÐºÐ¾Ð¼Ð¸Ð»Ð°ÑÑŒ Ñ Ñ„ÑƒÑ€Ñ€ÑÐ¼Ð¸, Ð° Ð¿Ð¾Ñ‚Ð¾Ð¼ Ð¿Ñ€Ð¾Ð±Ñ€Ð°Ð»Ð°ÑÑŒ Ð½Ð° furnation Ð´Ð°Ð²Ð½Ð¾ ÑƒÐ¶Ðµ ÑÐ¸Ð´ÐµÐ»Ð° Ð½Ð° Ð”Ð Ð¸ Ñ€Ð¸ÑÐ¾Ð²Ð°Ð»Ð° Ð°Ñ€Ñ‚Ñ‹ Ð²ÑÐµ Ð±Ð¾Ð»ÑŒÑˆÐµ ÑƒÐ·Ð½Ð°Ð²Ð°Ñ Ð¾ Ñ„ÑƒÑ€Ñ€Ð¸ :lol:'),(77,'f3416fe754','','ÐÐµ Ð·Ð½Ð°ÑŽ. [i:f3416fe754]ÐŸÐ¾ÑÑ‚ÐµÐ¿ÐµÐ½Ð½Ð¾[/i:f3416fe754] ÐºÐ°Ðº-Ñ‚Ð¾ Ð¿Ñ€Ð¾Ð¸Ð·Ð¾ÑˆÐ»Ð¾:cool:. ÐÑƒ Ð²Ð¾Ñ‚ Ð´ÐµÐ»ÑŒÑ„Ð¸Ð½Ð¾Ð² Ð² 2K Ð³Ð¾Ð´Ñƒ Ð¿Ð¾Ð»ÑŽÐ±Ð¸Ð». Ð’Ð¸Ð´Ð°Ñ‚ÑŒ Ñ Ñ‚Ð¾Ð³Ð¾ Ð¼Ð¾Ð¼ÐµÐ½Ñ‚Ð° Ð¸ [color=red:f3416fe754]Ð¿Ð¾Ð½ÐµÑÐ»Ð¾ÑÑŒ[/color:f3416fe754]. ÐŸÐ¾Ð»Ð½Ð¾Ðµ Ð¾ÑÐ¾Ð·Ð½Ð°Ð½Ð¸Ðµ Ð¿Ñ€Ð¸ÑˆÐ»Ð¾ Ð»Ð¸ÑˆÑŒ ÑÐ¾Ð²ÑÐµÐ¼ Ð½ÐµÐ´Ð°Ð²Ð½Ð¾. ÐŸÐ¾ÑÑ‚Ð¾Ð¼Ñƒ Ñ ÐºÐ°Ðº Ð±Ñ‹ ÑÐ¾Ð²ÑÐµÐ¼ ÐµÑ‰Ñ‘ Ð´ÐµÑ‚Ñ‘Ð½Ñ‹Ñˆ Ð² Ð¼Ð¸Ñ€Ðµ [color=cyan:f3416fe754][b:f3416fe754]Ñ„ÑƒÑ€Ñ€Ð¸[/b:f3416fe754][/color:f3416fe754]'),(78,'8ca86d6b95','Ð£ÐºÑ€Ð°ÑˆÐµÐ½Ð¸Ðµ Ñ‚ÐµÐºÑÑ‚Ð°','ÐœÑ‹ Ð¿Ñ€ÐµÐ´ÑÑ‚Ð°Ð²Ð»ÑÐµÐ¼ Ð²Ð°Ð¼ Ñ‚Ð°Ð±Ð»Ð¸Ñ†Ñƒ Ñ‚Ð¸Ð¿Ð¾Ð³Ñ€Ð°Ñ„ÑÐºÐ¸Ñ… ÑƒÐºÑ€Ð°ÑˆÐ°Ñ‚ÐµÐ»ÑŒÑÑ‚Ð² (&#9679;&#814;&#814;&#771;â€¢&#771;) \n\n[b:8ca86d6b95][url=http://1chna.ru/forum/Symbols.html][color=orange:8ca86d6b95]Ð [/color:8ca86d6b95][color=green:8ca86d6b95]Ð°[/color:8ca86d6b95][color=blue:8ca86d6b95]Ð·[/color:8ca86d6b95][color=indigo:8ca86d6b95]Ð½[/color:8ca86d6b95][color=olive:8ca86d6b95]Ð¾[/color:8ca86d6b95][color=darkred:8ca86d6b95]Ð¾[/color:8ca86d6b95][color=green:8ca86d6b95]Ð±[/color:8ca86d6b95][color=white:8ca86d6b95]Ñ€[/color:8ca86d6b95][color=red:8ca86d6b95]Ð°[/color:8ca86d6b95][color=darkblue:8ca86d6b95]Ð·[/color:8ca86d6b95][color=yellow:8ca86d6b95]ÑŒ[/color:8ca86d6b95][/url][/b:8ca86d6b95] [i:8ca86d6b95]Ñ‚ÐµÐºÑÑ‚[/i:8ca86d6b95] [b:8ca86d6b95]ÑÐ²Ð¾Ð¸Ñ…[/b:8ca86d6b95] ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ð¹'),(79,'6636f03a7e','Re: Ð£ÐºÑ€Ð°ÑˆÐµÐ½Ð¸Ðµ Ñ‚ÐµÐºÑÑ‚Ð°','[quote:6636f03a7e=\"Hidden\"][b:6636f03a7e][url=http://1chna.ru/forum/Symbols.html][color=orange:6636f03a7e]Ð [/color:6636f03a7e][color=green:6636f03a7e]Ð°[/color:6636f03a7e][color=blue:6636f03a7e]Ð·[/color:6636f03a7e][color=indigo:6636f03a7e]Ð½[/color:6636f03a7e][color=olive:6636f03a7e]Ð¾[/color:6636f03a7e][color=darkred:6636f03a7e]Ð¾[/color:6636f03a7e][color=green:6636f03a7e]Ð±[/color:6636f03a7e][color=white:6636f03a7e]Ñ€[/color:6636f03a7e][color=red:6636f03a7e]Ð°[/color:6636f03a7e][color=darkblue:6636f03a7e]Ð·[/color:6636f03a7e][color=yellow:6636f03a7e]ÑŒ[/color:6636f03a7e][/url][/b:6636f03a7e][/quote:6636f03a7e]\n\nÐšÑ‚Ð¾ Ð±Ñ‹ Ð¼Ð¾Ð³ Ð¿Ð¾Ð´ÑƒÐ¼Ð°Ñ‚ÑŒ, Ñ‡Ñ‚Ð¾ Ñ‚Ñ‹ÐºÐ°Ñ‚ÑŒ Ð½ÑƒÐ¶Ð½Ð¾ Ð½Ð° ÑÑ‚Ð¾ ÑÐ»Ð¾Ð²Ð¾ ( &#186;.&#186; )'),(80,'087b639a86','','&#1057;&#1085;&#1077;&#1075;&#1086;&#1074;&#1080;&#1082; &#1095;&#1090;&#1086;&#1083;&#1080;? [font=Times New Roman:087b639a86][size=24:087b639a86]&#9731;[/size:087b639a86][/font:087b639a86] &#1048; &#1095;&#1090;&#1086; &#1069;&#1058;&#1054;? [font=Times New Roman:087b639a86][size=24:087b639a86]&#9813;&#9818;&#9819;[/size:087b639a86][/font:087b639a86]'),(81,'c016cc1b8d','','[u:c016cc1b8d][b:c016cc1b8d][color=yellow:c016cc1b8d]Ðœ[/color:c016cc1b8d][color=cyan:c016cc1b8d]Ð½[/color:c016cc1b8d][color=violet:c016cc1b8d]Ðµ[/color:c016cc1b8d][/b:c016cc1b8d][/u:c016cc1b8d] [i:c016cc1b8d]Ð¿Ð¾[/i:c016cc1b8d]Ð½Ñ€Ð°[i:c016cc1b8d]Ð²Ð¸[/i:c016cc1b8d]Ð»Ð¾[i:c016cc1b8d]ÑÑŒ[/i:c016cc1b8d] [font=Times New Roman:c016cc1b8d][size=24:c016cc1b8d][color=darkred:c016cc1b8d]&#10086;[/color:c016cc1b8d][/size:c016cc1b8d][/font:c016cc1b8d]'),(82,'52151ecc31','',':black:[size=24:52151ecc31][highlight=black:52151ecc31][font=Traditional Arabic:52151ecc31][color=brown:52151ecc31]&#9760;We&#9760; &#10015;Should&#10015; &#9765;Pray&#9765; for &#9580; Satan &#9580; !![/color:52151ecc31][/font:52151ecc31][/highlight:52151ecc31][/size:52151ecc31]:black:'),(83,'5253711a5e','','Ð˜ ÐºÐ°ÐºÐ¾Ð¹ Ð¼ÑƒÐ´Ð¾Ð·Ð²Ð¾Ð½ Ð¿Ñ€Ð¾Ð¿Ð¸Ð°Ñ€Ð¸Ð» ÑÑ‚Ð¾Ñ‚ Ñ„Ð¾Ñ€ÑƒÐ¼ Ð½Ð° Ð”Ð²Ð°Ñ‡Ðµ? Ð Ð°ÐºÐ° Ñ‚ÐµÐ±Ðµ.'),(84,'5473de5960','','Ð˜ Ñ‡Ñ‚Ð¾ Ð¶Ðµ ÑÑ‚Ð¾ Ð¿Ñ€Ð¸Ð²ÐµÐ»Ð¾ Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¾Ñ‚Ð±Ñ€Ð¾ÑÐ° Ð½Ð° Ð½Ð°Ñˆ Ð¼Ð¸Ð»ÐµÐ½ÑŒÐºÐ¸Ð¹ Ñ„Ð¾Ñ€ÑƒÐ¼ Ð½ÐµÑƒÐ´Ð°Ñ‡Ð½Ð¸ÐºÐ¾Ð²?'),(88,'943ef41d04','Ð”Ð° Ð±ÑƒÐ´ÑƒÑ‚ Ð¿Ñ€Ð¾ÐºÐ»ÑÑ‚Ñ‹ Ð¾Ð½Ð¸','[left:943ef41d04]http://1chna.ru/forum/files/1333192444168.jpg[/left:943ef41d04]\n[align=center:943ef41d04]&#1058;&#1067;, &#1059;&#1047;&#1056;N&#1064;&#1100; &#1051;&#1048;?\n&#1053;&#1080;&#1082;&#1086;&#1075;&#1086;, &#1082;&#1090;&#1086; d&#592;&#638;p&#592;&#8869;&#4320;&#666;&#647; . &#1053;&#1086; &#1074;&#1086;&#1086;&#1088;&#1091;&#1078;&#1105;&#1085; &#1083;&#1080;?\nDes Animaux s&#305;&#305;&#647;&#633;o&#623;\n&#1048;&#1052; &#1074;&#1086; &#1089;&#1083;&#1072;&#1074;&#1091;!\n&#387;|s&#305;u&#477;&#596;&#387;s&#607;&#633;&#633;&#592;&#4357;s Ð° &#987;&#592;&#305;&#633;&#607;o &#1090;&#1099;?\nMortem Animalum!\n\n&#1055;&#1086;&#1082;&#1083;&#1103;&#1085;&#1080;&#1089;&#1100;[/align:943ef41d04]'),(89,'802f141e04','','[left:802f141e04]http://1chna.ru/forum/files/1333181539736.png[/left:802f141e04]\nMortem Animalum! \n&#1050;&#923;R&#1085;&#654;&#596;&#1068;.'),(90,'1b81b174d3','','lhlkhn'),(93,'e602cba11e','Ð£Ð±Ð¸Ð²Ð°Ð»ÐºÐ° ÐºÐ¾Ð¼Ð¿Ð°','Ð¡Ð¼Ð¾Ñ‚Ñ€Ð¸Ñ‚Ðµ, Ð½Ð°Ñ€Ð¾Ð´, Ñ‡Ñ‚Ð¾ Ð¾Ñ‚ÐºÐ¾Ð¿Ð°Ð»! :gamer: \n[flash width=650 height=480:e602cba11e]http://1chna.ru/forum/files/511.swf[/flash:e602cba11e]'),(94,'84cf9430db','','[font=Old English Text MT:84cf9430db][size=24:84cf9430db][color=white:84cf9430db][b:84cf9430db][highlight=black:84cf9430db]&#1055;POBEPKA[/highlight:84cf9430db][/b:84cf9430db][/color:84cf9430db] [/size:84cf9430db][/font:84cf9430db]');
/*!40000 ALTER TABLE `phpbb_posts_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_privmsgs`
--

DROP TABLE IF EXISTS `phpbb_privmsgs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_privmsgs` (
  `privmsgs_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `privmsgs_type` tinyint(4) NOT NULL,
  `privmsgs_subject` varchar(255) NOT NULL,
  `privmsgs_from_userid` mediumint(8) NOT NULL,
  `privmsgs_to_userid` mediumint(8) NOT NULL,
  `privmsgs_date` int(11) NOT NULL,
  `privmsgs_ip` char(8) NOT NULL,
  `privmsgs_enable_bbcode` tinyint(1) NOT NULL DEFAULT '1',
  `privmsgs_enable_html` tinyint(1) NOT NULL,
  `privmsgs_enable_smilies` tinyint(1) NOT NULL DEFAULT '1',
  `privmsgs_attach_sig` tinyint(1) NOT NULL DEFAULT '1',
  `privmsgs_attachment` tinyint(1) NOT NULL,
  PRIMARY KEY (`privmsgs_id`),
  KEY `privmsgs_from_userid` (`privmsgs_from_userid`),
  KEY `privmsgs_to_userid` (`privmsgs_to_userid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_privmsgs`
--

LOCK TABLES `phpbb_privmsgs` WRITE;
/*!40000 ALTER TABLE `phpbb_privmsgs` DISABLE KEYS */;
INSERT INTO `phpbb_privmsgs` (`privmsgs_id`, `privmsgs_type`, `privmsgs_subject`, `privmsgs_from_userid`, `privmsgs_to_userid`, `privmsgs_date`, `privmsgs_ip`, `privmsgs_enable_bbcode`, `privmsgs_enable_html`, `privmsgs_enable_smilies`, `privmsgs_attach_sig`, `privmsgs_attachment`) VALUES (1,0,'ÐÐ´Ð¼Ð¸Ð½Ð¸ÑÑ‚Ñ€Ð°Ñ†Ð¸Ñ Ð²Ð·Ñ‹Ð²Ð°ÐµÑ‚',2,14,1324226027,'5f49dcc8',1,0,1,1,0),(2,2,'ÐÐ´Ð¼Ð¸Ð½Ð¸ÑÑ‚Ñ€Ð°Ñ†Ð¸Ñ Ð²Ð·Ñ‹Ð²Ð°ÐµÑ‚',2,14,1324226027,'5f49dcc8',1,0,1,1,0);
/*!40000 ALTER TABLE `phpbb_privmsgs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_privmsgs_text`
--

DROP TABLE IF EXISTS `phpbb_privmsgs_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_privmsgs_text` (
  `privmsgs_text_id` mediumint(8) unsigned NOT NULL,
  `privmsgs_bbcode_uid` char(10) NOT NULL,
  `privmsgs_text` text,
  PRIMARY KEY (`privmsgs_text_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_privmsgs_text`
--

LOCK TABLES `phpbb_privmsgs_text` WRITE;
/*!40000 ALTER TABLE `phpbb_privmsgs_text` DISABLE KEYS */;
INSERT INTO `phpbb_privmsgs_text` (`privmsgs_text_id`, `privmsgs_bbcode_uid`, `privmsgs_text`) VALUES (1,'16cae416ee','Ð­Ñ€Ð¾Ñ‚Ð¸ÐºÐ° Ñ Ð¿Ð¾Ð´Ñ€Ð¾ÑÑ‚Ð¾Ñ‡ÐºÐ°Ð¼Ð¸ Ð½Ðµ Ð¸Ð½Ñ‚ÐµÑ€ÐµÑÑƒÐµÑ‚ ÑÐ»ÑƒÑ‡Ð°Ð¹Ð½Ð¾?'),(2,'16cae416ee','Ð­Ñ€Ð¾Ñ‚Ð¸ÐºÐ° Ñ Ð¿Ð¾Ð´Ñ€Ð¾ÑÑ‚Ð¾Ñ‡ÐºÐ°Ð¼Ð¸ Ð½Ðµ Ð¸Ð½Ñ‚ÐµÑ€ÐµÑÑƒÐµÑ‚ ÑÐ»ÑƒÑ‡Ð°Ð¹Ð½Ð¾?');
/*!40000 ALTER TABLE `phpbb_privmsgs_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_profile_fields`
--

DROP TABLE IF EXISTS `phpbb_profile_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_profile_fields` (
  `field_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `field_name` varchar(255) NOT NULL,
  `field_description` varchar(255) DEFAULT NULL,
  `field_type` tinyint(4) unsigned NOT NULL,
  `text_field_default` varchar(255) DEFAULT NULL,
  `text_field_maxlen` int(255) unsigned NOT NULL DEFAULT '255',
  `text_area_default` text,
  `text_area_maxlen` int(255) unsigned NOT NULL DEFAULT '1024',
  `radio_button_default` varchar(255) DEFAULT NULL,
  `radio_button_values` text,
  `checkbox_default` text,
  `checkbox_values` text,
  `is_required` tinyint(2) unsigned NOT NULL,
  `users_can_view` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `view_in_profile` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `profile_location` tinyint(2) unsigned NOT NULL DEFAULT '2',
  `view_in_memberlist` tinyint(2) unsigned NOT NULL,
  `view_in_topic` tinyint(2) unsigned NOT NULL,
  `topic_location` tinyint(2) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`field_id`),
  UNIQUE KEY `field_name` (`field_name`),
  KEY `field_type` (`field_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_profile_fields`
--

LOCK TABLES `phpbb_profile_fields` WRITE;
/*!40000 ALTER TABLE `phpbb_profile_fields` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_profile_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_quota_limits`
--

DROP TABLE IF EXISTS `phpbb_quota_limits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_quota_limits` (
  `quota_limit_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `quota_desc` varchar(20) NOT NULL,
  `quota_limit` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`quota_limit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_quota_limits`
--

LOCK TABLES `phpbb_quota_limits` WRITE;
/*!40000 ALTER TABLE `phpbb_quota_limits` DISABLE KEYS */;
INSERT INTO `phpbb_quota_limits` (`quota_limit_id`, `quota_desc`, `quota_limit`) VALUES (1,'Low',262144),(2,'Medium',2097152),(3,'High',5242880);
/*!40000 ALTER TABLE `phpbb_quota_limits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_ranks`
--

DROP TABLE IF EXISTS `phpbb_ranks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_ranks` (
  `rank_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `rank_title` varchar(50) NOT NULL,
  `rank_min` mediumint(8) NOT NULL,
  `rank_special` tinyint(1) DEFAULT NULL,
  `rank_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_ranks`
--

LOCK TABLES `phpbb_ranks` WRITE;
/*!40000 ALTER TABLE `phpbb_ranks` DISABLE KEYS */;
INSERT INTO `phpbb_ranks` (`rank_id`, `rank_title`, `rank_min`, `rank_special`, `rank_image`) VALUES (1,'Administrator',-1,1,'rank5_admin.gif'),(2,'Moderator',-1,1,'rank5_mod.gif'),(3,'Partner',-1,1,'rank5_partner.gif'),(4,'Spammer',-1,1,'rank0_spammer.gif'),(5,'&#8616;&#8729;&#9488;Â¤&#8730;Â°Ñ—&#9561;',-1,1,'');
/*!40000 ALTER TABLE `phpbb_ranks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_search_results`
--

DROP TABLE IF EXISTS `phpbb_search_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_search_results` (
  `search_id` int(11) unsigned NOT NULL,
  `session_id` char(32) NOT NULL,
  `search_time` int(11) NOT NULL,
  `search_array` mediumtext NOT NULL,
  PRIMARY KEY (`search_id`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_search_results`
--

LOCK TABLES `phpbb_search_results` WRITE;
/*!40000 ALTER TABLE `phpbb_search_results` DISABLE KEYS */;
INSERT INTO `phpbb_search_results` (`search_id`, `session_id`, `search_time`, `search_array`) VALUES (280209023,'b1bbd56de98ccedca6d3b9a088e4541b',1383586931,'a:7:{s:14:\"search_results\";s:43:\"14, 7, 8, 19, 27, 71, 9, 13, 33, 45, 59, 77\";s:17:\"total_match_count\";i:12;s:12:\"split_search\";N;s:7:\"sort_by\";i:0;s:8:\"sort_dir\";s:4:\"DESC\";s:12:\"show_results\";s:5:\"posts\";s:12:\"return_chars\";i:200;}');
/*!40000 ALTER TABLE `phpbb_search_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_search_wordlist`
--

DROP TABLE IF EXISTS `phpbb_search_wordlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_search_wordlist` (
  `word_text` varchar(50) NOT NULL,
  `word_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `word_common` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`word_text`),
  KEY `word_id` (`word_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_search_wordlist`
--

LOCK TABLES `phpbb_search_wordlist` WRITE;
/*!40000 ALTER TABLE `phpbb_search_wordlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_search_wordlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_search_wordmatch`
--

DROP TABLE IF EXISTS `phpbb_search_wordmatch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_search_wordmatch` (
  `post_id` mediumint(8) unsigned NOT NULL,
  `word_id` mediumint(8) unsigned NOT NULL,
  `title_match` tinyint(1) NOT NULL,
  KEY `post_id` (`post_id`),
  KEY `word_id` (`word_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_search_wordmatch`
--

LOCK TABLES `phpbb_search_wordmatch` WRITE;
/*!40000 ALTER TABLE `phpbb_search_wordmatch` DISABLE KEYS */;
INSERT INTO `phpbb_search_wordmatch` (`post_id`, `word_id`, `title_match`) VALUES (9,74,0),(8,69,0),(8,70,0),(8,71,0),(8,72,0),(8,73,0),(7,68,0),(7,67,0),(6,61,1),(6,64,1),(6,66,0),(5,60,0),(5,62,0),(6,65,0),(6,63,0),(5,61,1),(5,54,1),(5,55,0),(5,56,0),(5,57,0),(5,58,0),(5,59,0),(9,76,0),(9,77,0),(9,79,0),(9,80,0),(9,81,0),(9,82,0),(9,83,0),(9,84,0),(9,85,0),(9,86,0),(9,87,0),(9,88,0),(9,89,0),(9,90,0),(9,91,0),(9,92,0),(9,93,0),(9,94,0),(9,95,0),(9,96,0),(9,97,0),(9,98,0),(9,99,0),(9,75,1),(9,78,1),(9,80,1),(9,96,1),(10,83,0),(10,88,0),(10,96,0),(10,100,0),(10,101,0),(10,102,0),(10,103,0),(10,104,0),(10,105,0),(10,106,0),(10,107,0),(10,108,0),(10,109,0),(10,110,0),(10,111,0),(10,112,0),(10,113,0),(10,114,0),(10,115,0),(10,116,0),(10,117,0),(10,118,0),(10,119,0),(10,120,0),(10,121,0),(10,122,0),(10,123,0),(10,124,0),(10,125,0),(10,126,0),(10,127,0),(10,128,0),(10,129,0),(10,130,0),(10,131,0),(10,132,0),(10,133,0),(10,134,0),(10,135,0),(10,136,0),(10,137,0),(10,138,0),(10,139,0),(10,140,0),(10,141,0),(10,142,0),(10,143,0),(10,144,0),(10,145,0),(10,146,0),(10,147,0),(10,148,0),(10,149,0),(10,150,0),(10,151,0),(10,152,0),(10,153,0),(10,154,0),(10,155,0),(10,156,0),(47,1926,0),(47,1925,0),(47,1924,0),(47,1923,0),(11,244,0),(11,243,0),(11,242,0),(11,241,0),(11,240,0),(11,238,0),(11,237,0),(11,1132,0),(11,236,0),(11,235,0),(11,234,0),(11,233,0),(11,302,0),(11,232,0),(11,231,0),(11,230,0),(11,229,0),(11,228,0),(11,227,0),(11,226,0),(11,301,0),(11,225,0),(11,224,0),(11,223,0),(11,300,0),(11,222,0),(11,221,0),(11,220,0),(11,219,0),(11,218,0),(11,1131,0),(11,1130,0),(11,216,0),(11,1129,0),(11,171,1),(11,173,1),(11,174,1),(12,234,0),(12,233,0),(12,232,0),(12,213,0),(12,214,0),(12,215,0),(12,216,0),(12,217,0),(12,218,0),(12,219,0),(12,220,0),(12,221,0),(12,222,0),(12,223,0),(12,224,0),(12,225,0),(12,226,0),(12,227,0),(12,228,0),(12,229,0),(12,230,0),(12,231,0),(12,235,0),(12,236,0),(12,237,0),(12,238,0),(12,239,0),(12,240,0),(12,241,0),(12,242,0),(12,243,0),(12,244,0),(12,245,0),(13,130,0),(13,172,0),(13,246,0),(13,247,0),(13,248,0),(13,249,0),(13,250,0),(13,251,0),(13,252,0),(13,253,0),(13,254,0),(13,255,0),(13,256,0),(13,257,0),(13,258,0),(13,259,0),(13,260,0),(13,261,0),(13,262,0),(13,263,0),(13,264,0),(13,265,0),(13,266,0),(13,267,0),(13,268,0),(13,269,0),(13,270,0),(14,271,0),(14,272,0),(14,273,0),(14,274,0),(14,275,0),(14,276,0),(14,277,0),(14,278,0),(14,279,0),(14,146,0),(14,280,0),(14,281,0),(14,273,1),(15,238,0),(15,237,0),(15,235,0),(15,234,0),(15,233,0),(15,232,0),(15,218,0),(15,220,0),(15,221,0),(15,222,0),(15,224,0),(15,225,0),(15,226,0),(15,227,0),(15,228,0),(15,229,0),(15,230,0),(15,231,0),(15,69,0),(15,240,0),(15,241,0),(15,243,0),(15,244,0),(15,303,0),(15,302,0),(15,301,0),(15,300,0),(15,299,0),(15,298,0),(16,83,0),(16,146,0),(16,271,0),(16,272,0),(16,273,0),(16,274,0),(16,275,0),(16,276,0),(16,277,0),(16,278,0),(16,279,0),(16,280,0),(16,281,0),(16,312,0),(16,311,0),(16,310,0),(16,309,0),(16,308,0),(16,307,0),(16,306,0),(16,305,0),(16,304,0),(16,313,0),(16,314,0),(16,273,1),(17,315,0),(17,316,0),(17,317,0),(17,318,0),(17,178,0),(17,319,0),(17,320,0),(17,149,0),(18,321,0),(18,322,0),(18,315,0),(18,323,0),(18,324,0),(18,325,0),(18,326,0),(18,327,0),(18,328,0),(18,329,0),(18,330,0),(18,131,0),(18,331,0),(18,332,0),(18,333,0),(18,334,0),(18,335,0),(18,149,0),(18,154,0),(18,336,0),(19,72,0),(19,71,0),(19,60,0),(19,57,0),(19,79,0),(19,83,0),(19,87,0),(19,92,0),(19,93,0),(19,97,0),(19,99,0),(19,108,0),(19,117,0),(19,118,0),(19,123,0),(19,129,0),(19,130,0),(19,131,0),(19,146,0),(19,149,0),(19,154,0),(19,156,0),(19,169,0),(19,175,0),(19,176,0),(19,178,0),(19,179,0),(19,258,0),(19,264,0),(19,266,0),(19,311,0),(19,313,0),(19,314,0),(19,316,0),(19,322,0),(19,327,0),(19,332,0),(19,337,0),(19,338,0),(19,339,0),(19,340,0),(19,341,0),(19,342,0),(19,343,0),(19,344,0),(19,345,0),(19,346,0),(19,347,0),(19,348,0),(19,349,0),(19,350,0),(19,351,0),(19,352,0),(19,353,0),(19,354,0),(19,355,0),(19,356,0),(19,357,0),(19,358,0),(19,359,0),(19,360,0),(19,361,0),(19,362,0),(19,363,0),(19,364,0),(19,365,0),(19,366,0),(19,367,0),(19,368,0),(19,369,0),(19,370,0),(19,371,0),(19,372,0),(19,373,0),(19,374,0),(19,375,0),(19,376,0),(19,377,0),(19,378,0),(19,379,0),(19,380,0),(19,381,0),(19,382,0),(19,383,0),(19,384,0),(19,385,0),(19,386,0),(19,387,0),(19,388,0),(19,389,0),(19,390,0),(19,391,0),(19,392,0),(19,393,0),(19,394,0),(19,395,0),(19,396,0),(19,397,0),(19,398,0),(19,399,0),(19,400,0),(19,401,0),(19,402,0),(19,403,0),(19,404,0),(19,405,0),(19,406,0),(19,407,0),(19,408,0),(19,409,0),(19,410,0),(19,411,0),(19,412,0),(19,413,0),(19,414,0),(19,415,0),(19,416,0),(19,417,0),(19,418,0),(19,419,0),(19,420,0),(19,421,0),(19,422,0),(19,423,0),(19,424,0),(19,425,0),(19,426,0),(19,427,0),(19,428,0),(19,429,0),(19,430,0),(19,431,0),(19,432,0),(19,433,0),(19,434,0),(19,435,0),(19,436,0),(19,437,0),(19,438,0),(19,439,0),(19,440,0),(19,441,0),(19,442,0),(19,443,0),(19,444,0),(19,445,0),(19,446,0),(19,447,0),(19,448,0),(19,449,0),(19,450,0),(19,451,0),(19,452,0),(19,453,0),(19,454,0),(19,455,0),(19,456,0),(19,457,0),(19,458,0),(19,459,0),(19,460,0),(19,461,0),(19,462,0),(19,463,0),(19,464,0),(19,465,0),(19,466,0),(19,467,0),(19,468,0),(19,469,0),(19,470,0),(19,471,0),(19,472,0),(19,473,0),(19,474,0),(19,475,0),(19,476,0),(19,477,0),(19,478,0),(19,479,0),(19,480,0),(19,481,0),(19,482,0),(19,483,0),(19,484,0),(19,485,0),(19,486,0),(19,487,0),(19,488,0),(19,489,0),(19,490,0),(19,491,0),(19,492,0),(19,493,0),(19,494,0),(19,495,0),(19,496,0),(19,497,0),(19,498,0),(19,499,0),(19,500,0),(19,501,0),(19,502,0),(19,503,0),(19,504,0),(19,505,0),(19,506,0),(19,507,0),(19,508,0),(19,509,0),(19,510,0),(19,511,0),(19,512,0),(19,513,0),(19,514,0),(19,515,0),(19,516,0),(19,517,0),(19,518,0),(19,519,0),(19,520,0),(19,521,0),(19,522,0),(19,523,0),(19,524,0),(19,525,0),(19,526,0),(19,527,0),(19,528,0),(19,529,0),(19,530,0),(19,531,0),(19,532,0),(19,533,0),(19,534,0),(19,535,0),(19,536,0),(19,537,0),(19,538,0),(19,539,0),(19,540,0),(19,541,0),(19,542,0),(19,543,0),(19,544,0),(19,545,0),(19,546,0),(19,547,0),(19,548,0),(19,549,0),(19,550,0),(19,551,0),(19,552,0),(19,553,0),(19,554,0),(19,555,0),(19,556,0),(19,557,0),(19,558,0),(19,559,0),(19,560,0),(19,561,0),(19,562,0),(19,563,0),(19,564,0),(19,565,0),(19,566,0),(19,567,0),(19,568,0),(19,569,0),(19,570,0),(19,571,0),(19,572,0),(19,573,0),(19,574,0),(19,575,0),(19,576,0),(19,577,0),(19,578,0),(19,579,0),(19,580,0),(19,581,0),(19,582,0),(19,583,0),(19,584,0),(19,585,0),(19,586,0),(19,587,0),(19,588,0),(19,589,0),(19,590,0),(19,591,0),(19,592,0),(19,593,0),(19,594,0),(19,595,0),(19,596,0),(19,597,0),(19,598,0),(19,599,0),(19,600,0),(19,601,0),(19,602,0),(19,603,0),(19,604,0),(19,605,0),(19,606,0),(19,607,0),(19,608,0),(19,609,0),(19,610,0),(19,611,0),(19,612,0),(19,613,0),(19,614,0),(19,615,0),(19,616,0),(19,617,0),(19,618,0),(19,619,0),(19,620,0),(19,621,0),(19,622,0),(19,623,0),(19,624,0),(19,625,0),(19,626,0),(19,627,0),(19,628,0),(19,629,0),(19,630,0),(19,631,0),(19,632,0),(19,633,0),(19,634,0),(19,635,0),(19,636,0),(19,637,0),(19,638,0),(19,639,0),(19,640,0),(19,641,0),(19,642,0),(19,643,0),(19,644,0),(19,645,0),(19,646,0),(19,647,0),(19,648,0),(19,649,0),(19,650,0),(19,651,0),(19,652,0),(19,653,0),(19,654,0),(19,655,0),(19,656,0),(19,657,0),(19,658,0),(19,659,0),(19,660,0),(19,661,0),(19,662,0),(19,663,0),(19,664,0),(19,665,0),(19,666,0),(19,667,0),(19,668,0),(19,669,0),(19,670,0),(19,671,0),(19,672,0),(19,673,0),(19,674,0),(19,675,0),(19,676,0),(19,677,0),(19,678,0),(19,679,0),(19,680,0),(19,681,0),(19,682,0),(19,683,0),(19,684,0),(19,685,0),(19,686,0),(19,687,0),(19,688,0),(19,689,0),(19,690,0),(19,691,0),(19,692,0),(19,693,0),(19,694,0),(19,695,0),(19,696,0),(19,697,0),(19,698,0),(19,699,0),(19,700,0),(19,701,0),(19,702,0),(19,703,0),(19,704,0),(19,705,0),(19,706,0),(19,707,0),(19,708,0),(19,709,0),(19,710,0),(19,711,0),(19,712,0),(19,713,0),(19,714,0),(19,715,0),(19,716,0),(19,717,0),(19,718,0),(19,719,0),(19,720,0),(19,721,0),(19,722,0),(19,723,0),(19,724,0),(19,725,0),(19,726,0),(19,727,0),(19,728,0),(19,729,0),(19,730,0),(19,731,0),(19,732,0),(19,733,0),(19,734,0),(19,735,0),(19,736,0),(19,737,0),(19,738,0),(19,739,0),(19,740,0),(19,741,0),(19,742,0),(19,743,0),(19,744,0),(19,745,0),(19,746,0),(19,747,0),(19,748,0),(19,749,0),(19,750,0),(19,751,0),(19,752,0),(19,753,0),(19,754,0),(19,755,0),(19,756,0),(19,757,0),(19,758,0),(19,759,0),(19,760,0),(19,761,0),(19,762,0),(19,763,0),(19,764,0),(19,765,0),(19,766,0),(19,767,0),(19,768,0),(19,769,0),(19,770,0),(19,771,0),(19,772,0),(19,773,0),(19,774,0),(19,775,0),(19,776,0),(19,777,0),(19,778,0),(19,779,0),(19,780,0),(19,781,0),(19,782,0),(19,783,0),(19,784,0),(19,785,0),(19,786,0),(19,787,0),(19,788,0),(19,789,0),(19,790,0),(19,791,0),(19,792,0),(19,793,0),(19,794,0),(19,795,0),(19,796,0),(19,797,0),(19,798,0),(19,799,0),(19,800,0),(19,801,0),(19,802,0),(19,803,0),(19,804,0),(19,805,0),(19,806,0),(19,807,0),(19,808,0),(19,809,0),(19,810,0),(19,811,0),(19,812,0),(19,813,0),(19,814,0),(19,815,0),(19,816,0),(19,817,0),(19,818,0),(19,819,0),(19,820,0),(19,821,0),(19,822,0),(19,823,0),(19,824,0),(19,825,0),(19,826,0),(19,827,0),(19,828,0),(19,829,0),(19,830,0),(19,831,0),(19,832,0),(19,833,0),(19,834,0),(19,835,0),(19,836,0),(19,837,0),(19,838,0),(19,839,0),(19,840,0),(19,841,0),(19,842,0),(19,843,0),(19,844,0),(19,845,0),(19,846,0),(19,847,0),(19,848,0),(19,849,0),(19,850,0),(19,851,0),(19,852,0),(19,853,0),(19,854,0),(19,855,0),(19,856,0),(19,857,0),(19,858,0),(19,859,0),(19,860,0),(19,861,0),(19,862,0),(19,863,0),(19,864,0),(19,865,0),(19,866,0),(19,867,0),(19,868,0),(19,869,0),(19,870,0),(19,871,0),(19,872,0),(19,873,0),(19,874,0),(19,875,0),(19,876,0),(19,877,0),(19,878,0),(19,879,0),(19,880,0),(19,881,0),(19,882,0),(19,883,0),(19,884,0),(19,885,0),(19,886,0),(19,887,0),(19,888,0),(19,889,0),(19,890,0),(19,891,0),(19,892,0),(19,893,0),(19,894,0),(19,895,0),(19,896,0),(19,897,0),(19,898,0),(19,899,0),(19,900,0),(19,901,0),(19,902,0),(19,903,0),(19,904,0),(19,905,0),(19,906,0),(19,907,0),(19,908,0),(19,909,0),(19,910,0),(19,911,0),(19,912,0),(19,913,0),(19,914,0),(19,915,0),(19,916,0),(19,917,0),(19,918,0),(19,919,0),(19,920,0),(19,921,0),(19,922,0),(19,923,0),(19,924,0),(19,925,0),(19,926,0),(19,927,0),(19,928,0),(19,929,0),(19,930,0),(19,931,0),(19,932,0),(19,933,0),(19,934,0),(19,935,0),(19,936,0),(19,937,0),(19,938,0),(19,939,0),(19,940,0),(19,941,0),(19,942,0),(19,943,0),(19,944,0),(19,945,0),(19,946,0),(19,947,0),(19,948,0),(19,949,0),(19,950,0),(19,951,0),(19,952,0),(19,953,0),(19,954,0),(19,955,0),(19,956,0),(19,957,0),(19,958,0),(19,959,0),(19,960,0),(19,961,0),(19,962,0),(19,963,0),(19,964,0),(19,965,0),(19,966,0),(19,967,0),(19,968,0),(19,969,0),(19,970,0),(19,971,0),(19,972,0),(19,973,0),(19,974,0),(19,975,0),(19,976,0),(19,977,0),(19,978,0),(19,979,0),(19,980,0),(19,981,0),(19,982,0),(19,983,0),(19,984,0),(19,985,0),(19,986,0),(19,987,0),(19,988,0),(19,989,0),(19,990,0),(19,991,0),(19,992,0),(19,993,0),(19,994,0),(19,995,0),(19,996,0),(19,997,0),(19,998,0),(19,999,0),(19,1000,0),(19,1001,0),(19,1002,0),(19,1003,0),(19,1004,0),(19,1005,0),(19,1006,0),(19,1007,0),(19,1008,0),(19,1009,0),(19,1010,0),(19,1011,0),(19,1012,0),(19,1013,0),(19,1014,0),(19,1015,0),(19,1016,0),(19,1017,0),(19,1018,0),(19,1019,0),(19,1020,0),(19,1021,0),(19,1022,0),(19,1023,0),(19,1024,0),(19,1025,0),(19,1026,0),(19,1027,0),(19,1028,0),(19,1029,0),(19,1030,0),(19,1031,0),(19,1032,0),(19,1033,0),(19,1034,0),(19,1035,0),(19,1036,0),(19,1037,0),(19,1038,0),(19,1039,0),(19,1040,0),(19,1041,0),(19,1042,0),(19,1043,0),(19,1044,0),(19,1045,0),(19,1046,0),(19,1047,0),(19,1048,0),(19,1049,0),(19,1050,0),(19,1051,0),(19,1052,0),(19,1053,0),(19,1054,0),(19,1055,0),(19,1056,0),(19,1057,0),(19,1058,0),(19,1059,0),(19,1060,0),(19,1061,0),(19,1062,0),(19,1063,0),(19,1064,0),(19,1065,0),(19,1066,0),(19,1067,0),(19,1068,0),(19,1069,0),(19,1070,0),(19,1071,0),(19,1072,0),(19,1073,0),(19,1074,0),(19,1075,0),(19,1076,0),(19,1077,0),(19,1078,0),(19,1079,0),(19,1080,0),(19,1081,0),(19,1082,0),(19,1083,0),(19,1084,0),(19,1085,0),(19,1086,0),(19,1087,0),(19,1088,0),(19,1089,0),(19,1090,0),(19,1091,0),(19,1092,0),(19,1093,0),(19,1094,0),(19,1095,0),(19,1096,0),(19,1097,0),(19,1098,0),(19,1099,0),(19,1100,0),(19,1101,0),(19,1102,0),(19,1103,0),(20,1104,0),(20,1105,0),(20,191,0),(21,1106,0),(21,1107,0),(21,1108,0),(21,527,0),(21,176,0),(21,1047,0),(22,70,0),(22,1109,0),(22,327,0),(22,498,0),(22,79,0),(22,565,0),(22,318,0),(22,646,0),(22,255,0),(22,698,0),(22,712,0),(22,721,0),(22,726,0),(22,755,0),(22,1110,0),(22,838,0),(22,843,0),(22,856,0),(22,863,0),(22,864,0),(22,905,0),(22,934,0),(22,935,0),(22,1072,0),(23,63,0),(23,1111,0),(23,65,0),(23,698,0),(23,333,0),(23,313,0),(23,1112,0),(23,66,0),(23,64,1),(23,61,1),(24,1111,0),(24,1113,0),(24,79,0),(24,121,0),(24,688,0),(24,698,0),(24,178,0),(24,1114,0),(24,333,0),(24,313,0),(24,1112,0),(24,64,1),(24,61,1),(25,1116,0),(25,1117,0),(25,1119,0),(25,1115,1),(25,1118,1),(26,1120,0),(26,1121,0),(26,1122,0),(26,1123,0),(26,1124,0),(26,1125,0),(26,1112,0),(27,1126,0),(27,1116,0),(27,1117,0),(27,121,0),(27,1119,0),(27,1127,0),(27,1128,0),(27,1115,1),(27,1118,1),(47,1922,0),(47,1921,0),(47,1920,0),(47,1919,0),(47,466,0),(47,1918,0),(47,1917,0),(47,1916,0),(47,1915,0),(47,1914,0),(47,1913,0),(47,1678,0),(47,433,0),(47,1912,0),(47,1911,0),(47,405,0),(47,1910,0),(47,1909,0),(47,1908,0),(47,1907,0),(47,1906,0),(47,1905,0),(47,1904,0),(47,1903,0),(47,1902,0),(47,1901,0),(47,245,0),(47,1900,0),(46,1899,0),(46,1898,0),(46,1897,0),(46,1091,0),(46,154,0),(46,1076,0),(46,1896,0),(46,1895,0),(46,1894,0),(46,311,0),(46,1893,0),(46,1892,0),(46,1891,0),(46,1890,0),(46,1889,0),(46,951,0),(46,932,0),(46,1888,0),(46,1887,0),(46,1825,0),(46,1886,0),(46,1885,0),(46,1884,0),(46,1883,0),(46,1882,0),(46,1881,0),(46,1880,0),(46,1879,0),(46,1878,0),(46,1877,0),(46,1876,0),(46,1875,0),(46,1874,0),(46,704,0),(46,1873,0),(46,1872,0),(46,1871,0),(46,1870,0),(46,1869,0),(46,1868,0),(46,1867,0),(46,118,0),(46,605,0),(46,1866,0),(46,1865,0),(46,528,0),(46,1864,0),(46,1863,0),(46,1862,0),(46,1861,0),(46,1860,0),(46,1859,0),(46,1678,0),(46,1858,0),(46,1857,0),(46,1856,0),(46,1855,0),(46,1854,0),(46,1816,0),(45,1099,0),(45,314,0),(45,757,0),(45,1853,0),(45,1701,0),(45,1852,0),(44,149,0),(44,1851,0),(44,1850,0),(44,1849,0),(44,1848,0),(44,1847,0),(43,314,0),(43,85,0),(43,505,0),(42,1840,1),(42,268,0),(42,1020,0),(42,1846,0),(42,1845,0),(42,1844,0),(42,1843,0),(42,712,0),(42,85,0),(42,605,0),(42,1842,0),(42,527,0),(42,1841,0),(42,1839,0),(41,1838,0),(41,1837,0),(41,1836,0),(41,1835,0),(41,1834,0),(40,1833,0),(40,1832,0),(39,1831,0),(39,1830,0),(39,1829,0),(39,1828,0),(39,1827,0),(38,1826,0),(38,1825,0),(38,1824,0),(38,130,0),(38,684,0),(38,1823,0),(38,1822,0),(38,118,0),(38,1821,0),(38,1820,0),(38,1819,0),(38,1818,0),(38,1817,0),(37,1024,0),(37,169,0),(37,1674,0),(37,1816,0),(36,1815,0),(36,1660,0),(36,241,0),(36,239,0),(36,237,0),(36,235,0),(36,234,0),(36,233,0),(36,302,0),(36,232,0),(36,231,0),(36,229,0),(36,228,0),(36,226,0),(36,224,0),(36,220,0),(36,298,0),(35,1810,0),(35,1809,0),(35,734,0),(35,1808,0),(35,1807,0),(35,1806,0),(35,1805,0),(34,1804,0),(34,314,0),(34,154,0),(34,1803,0),(34,1017,0),(34,1802,0),(34,1801,0),(34,956,0),(34,1800,0),(34,1799,0),(34,886,0),(34,130,0),(34,740,0),(34,1798,0),(34,178,0),(34,1797,0),(34,1700,0),(34,252,0),(34,1796,0),(34,1795,0),(34,1794,0),(34,1793,0),(34,1792,0),(34,1791,0),(34,1790,0),(34,1789,0),(33,1118,1),(33,1108,1),(33,1677,1),(33,1674,1),(33,1088,0),(33,268,0),(33,1788,0),(33,146,0),(33,1686,0),(33,1787,0),(33,1685,0),(33,1786,0),(33,1785,0),(33,1684,0),(33,1118,0),(33,688,0),(33,649,0),(33,175,0),(33,1707,0),(33,1683,0),(33,1784,0),(33,1108,0),(33,1682,0),(33,1681,0),(33,1680,0),(33,1679,0),(33,1678,0),(33,1677,0),(33,1676,0),(33,1675,0),(33,316,0),(33,1783,0),(33,1782,0),(31,1099,0),(31,314,0),(31,155,0),(31,154,0),(31,1084,0),(31,1739,0),(31,1738,0),(31,1737,0),(31,1736,0),(31,1735,0),(31,146,0),(31,1033,0),(31,1734,0),(31,1025,0),(31,1023,0),(31,311,0),(31,1733,0),(31,1732,0),(31,1731,0),(31,1730,0),(31,965,0),(31,956,0),(31,954,0),(31,93,0),(31,1686,0),(31,1729,0),(31,1728,0),(31,1727,0),(31,882,0),(31,1726,0),(31,868,0),(31,1725,0),(31,1724,0),(31,1723,0),(31,130,0),(31,129,0),(31,1722,0),(31,1721,0),(31,1720,0),(31,1719,0),(31,1718,0),(31,1717,0),(31,1716,0),(31,178,0),(31,1715,0),(31,712,0),(31,1714,0),(31,1713,0),(31,684,0),(31,1712,0),(31,1711,0),(31,1710,0),(31,669,0),(31,1709,0),(31,665,0),(31,646,0),(31,1708,0),(31,635,0),(31,1707,0),(31,1706,0),(31,1705,0),(31,605,0),(31,1704,0),(31,1703,0),(31,1702,0),(31,1701,0),(31,1700,0),(31,1699,0),(31,1698,0),(31,1697,0),(31,527,0),(31,79,0),(31,526,0),(31,1696,0),(31,513,0),(31,1108,0),(31,1682,0),(31,1695,0),(31,1694,0),(31,1693,0),(31,1681,0),(31,1680,0),(31,470,0),(31,468,0),(31,459,0),(31,1692,0),(31,1691,0),(31,436,0),(31,1690,0),(31,1689,0),(31,432,0),(31,419,0),(31,1688,0),(31,1687,0),(31,339,0),(30,1118,1),(30,1108,1),(30,1677,1),(30,1674,1),(30,1088,0),(30,268,0),(30,146,0),(30,1686,0),(30,1685,0),(30,1684,0),(30,1118,0),(30,688,0),(30,175,0),(30,1683,0),(30,1108,0),(30,1682,0),(30,1681,0),(30,1680,0),(30,1679,0),(30,1678,0),(30,1677,0),(30,1676,0),(30,1675,0),(30,316,0),(28,1673,0),(28,1672,0),(28,339,0),(28,1671,0),(28,1670,0),(28,1669,0),(28,1668,0),(28,1667,0),(28,1642,0),(28,1641,0),(28,1666,0),(28,1665,0),(28,1664,0),(28,1663,0),(28,1662,0),(28,1661,0),(28,1640,0),(28,1639,0),(28,1638,0),(28,1660,0),(28,244,0),(28,243,0),(28,242,0),(28,241,0),(28,240,0),(28,1659,0),(28,239,0),(28,238,0),(28,237,0),(28,1658,0),(28,303,0),(28,1132,0),(28,236,0),(28,235,0),(28,234,0),(28,233,0),(28,302,0),(28,232,0),(28,231,0),(28,230,0),(28,229,0),(28,228,0),(28,227,0),(28,226,0),(28,301,0),(28,225,0),(28,224,0),(28,223,0),(28,300,0),(28,222,0),(28,221,0),(28,220,0),(28,1657,0),(28,1656,0),(28,1655,0),(28,1654,0),(28,1653,0),(28,1652,0),(28,1651,0),(28,299,0),(28,1650,0),(28,1649,0),(28,219,0),(28,218,0),(28,217,0),(28,1648,0),(28,1131,0),(28,1130,0),(28,216,0),(28,1647,0),(28,298,0),(28,1646,0),(28,1645,0),(28,215,0),(28,1644,0),(28,214,0),(28,213,0),(28,1129,0),(28,1643,0),(28,1637,0),(28,1636,0),(28,1163,1),(28,1170,1),(28,1196,1),(47,1927,0),(47,1928,0),(47,1929,0),(47,513,0),(47,1930,0),(47,1931,0),(47,1932,0),(47,79,0),(47,114,0),(47,1933,0),(47,1934,0),(47,529,0),(47,1935,0),(47,1936,0),(47,1937,0),(47,1938,0),(47,1700,0),(47,1939,0),(47,1940,0),(47,1941,0),(47,1942,0),(47,118,0),(47,1943,0),(47,1944,0),(47,635,0),(47,1945,0),(47,645,0),(47,176,0),(47,1946,0),(47,1947,0),(47,121,0),(47,685,0),(47,1948,0),(47,1949,0),(47,1950,0),(47,1951,0),(47,178,0),(47,1952,0),(47,1953,0),(47,1954,0),(47,1955,0),(47,764,0),(47,776,0),(47,128,0),(47,1956,0),(47,129,0),(47,1957,0),(47,1958,0),(47,131,0),(47,1959,0),(47,1960,0),(47,1961,0),(47,1962,0),(47,1963,0),(47,1964,0),(47,868,0),(47,1965,0),(47,1966,0),(47,1967,0),(47,1968,0),(47,1969,0),(47,1970,0),(47,1971,0),(47,1972,0),(47,1973,0),(47,952,0),(47,1974,0),(47,1975,0),(47,1976,0),(47,1977,0),(47,1978,0),(47,1979,0),(47,1980,0),(47,1981,0),(47,1982,0),(47,1983,0),(47,1984,0),(47,311,0),(47,1985,0),(47,1986,0),(47,154,0),(47,1987,0),(47,1097,0),(47,314,0),(47,1098,0),(47,1099,0),(47,99,0),(48,1988,0),(48,1815,0),(48,70,0),(48,1989,0),(48,1990,0),(48,1991,0),(48,1992,0),(48,1993,0),(48,1994,0),(48,1995,0),(48,432,0),(48,1996,0),(48,1683,0),(48,1997,0),(48,1998,0),(48,1999,0),(48,176,0),(48,121,0),(48,1713,0),(48,2000,0),(48,2001,0),(48,2002,0),(48,178,0),(48,2003,0),(48,2004,0),(48,2005,0),(48,2006,0),(48,2007,0),(48,2008,0),(48,131,0),(48,2009,0),(48,2010,0),(48,2011,0),(48,2012,0),(48,1880,0),(48,2013,0),(48,2014,0),(48,2015,0),(48,2016,0),(48,2017,0),(48,2018,0),(48,2019,0),(48,2020,0),(48,2021,0),(48,932,0),(48,952,0),(48,2022,0),(48,2023,0),(48,2024,0),(48,1020,0),(48,1034,0),(48,146,0),(48,2025,0),(48,154,0),(48,1088,0),(49,2026,0),(49,2027,0),(49,2028,0),(49,2029,0),(49,425,0),(49,2030,0),(49,470,0),(49,108,0),(49,2031,0),(49,2032,0),(49,506,0),(49,2033,0),(49,2034,0),(49,2035,0),(49,2036,0),(49,605,0),(49,2037,0),(49,118,0),(49,626,0),(49,2038,0),(49,2039,0),(49,2040,0),(49,121,0),(49,712,0),(49,2003,0),(49,2041,0),(49,1875,0),(49,2042,0),(49,1880,0),(49,2043,0),(49,2022,0),(49,2044,0),(49,146,0),(49,2045,0),(50,2046,0),(50,2047,0),(50,2048,0),(50,2049,0),(50,2050,0),(50,2051,0),(50,2052,0),(50,2053,0),(50,468,0),(50,2054,0),(50,2055,0),(50,2032,0),(50,112,0),(50,2056,0),(50,2057,0),(50,2058,0),(50,2059,0),(50,2060,0),(50,2061,0),(50,712,0),(50,1955,0),(50,2062,0),(50,2063,0),(50,2064,0),(50,2065,0),(50,2066,0),(50,2019,0),(50,2067,0),(50,932,0),(50,2068,0),(50,312,0),(50,1803,0),(50,2069,0),(50,314,0),(51,1816,0),(51,2070,0),(51,70,0),(51,2071,0),(51,2072,0),(51,2073,0),(51,2074,0),(51,2075,0),(51,2076,0),(51,2077,0),(51,1913,0),(51,2078,0),(51,2079,0),(51,2080,0),(51,2081,0),(51,2082,0),(51,2083,0),(51,2084,0),(51,2085,0),(51,2086,0),(51,2087,0),(51,2035,0),(51,2088,0),(51,83,0),(51,1866,0),(51,2089,0),(51,605,0),(51,2090,0),(51,118,0),(51,2091,0),(51,2092,0),(51,2093,0),(51,2094,0),(51,2095,0),(51,121,0),(51,2096,0),(51,2097,0),(51,2098,0),(51,2099,0),(51,2100,0),(51,2101,0),(51,87,0),(51,129,0),(51,825,0),(51,2102,0),(51,2103,0),(51,88,0),(51,2104,0),(51,2105,0),(51,2106,0),(51,2107,0),(51,1824,0),(51,2108,0),(51,2109,0),(51,2110,0),(51,2111,0),(51,2112,0),(51,2113,0),(51,2114,0),(51,2115,0),(51,1732,0),(51,2116,0),(51,311,0),(51,312,0),(51,145,0),(51,147,0),(51,2117,0),(51,2118,0),(51,2045,0),(51,2119,0),(51,2120,0),(51,99,0),(52,2121,0),(52,2122,0),(52,2123,0),(52,2026,0),(52,2124,0),(52,2125,0),(52,2126,0),(52,2127,0),(52,2128,0),(52,2129,0),(52,2130,0),(52,2131,0),(52,2132,0),(52,2133,0),(52,2134,0),(52,71,0),(52,2135,0),(52,79,0),(52,527,0),(52,2136,0),(52,1683,0),(52,2137,0),(52,2138,0),(52,2139,0),(52,605,0),(52,175,0),(52,2140,0),(52,2141,0),(52,728,0),(52,178,0),(52,258,0),(52,2142,0),(52,2143,0),(52,2144,0),(52,2145,0),(52,2146,0),(52,2147,0),(52,333,0),(52,2148,0),(52,311,0),(52,1025,0),(52,312,0),(52,2149,0),(52,62,0),(53,2150,0),(53,339,0),(53,1835,0),(53,2151,0),(53,2152,0),(53,2153,0),(53,2154,0),(53,1935,0),(53,174,0),(53,128,0),(53,129,0),(53,2155,0),(53,864,0),(53,2156,0),(53,2157,0),(53,900,0),(53,2158,0),(53,1028,0),(53,2159,0),(53,2160,0),(53,2161,0),(53,1084,0),(53,99,0),(54,339,0),(54,2163,0),(54,2164,0),(54,2165,0),(54,2166,0),(54,2167,0),(54,2168,0),(54,2169,0),(54,1681,0),(54,2170,0),(54,2171,0),(54,2172,0),(54,2173,0),(54,2174,0),(54,2175,0),(54,2176,0),(54,83,0),(54,605,0),(54,1706,0),(54,175,0),(54,2177,0),(54,2178,0),(54,674,0),(54,688,0),(54,2180,0),(54,131,0),(54,2181,0),(54,2182,0),(54,2183,0),(54,2184,0),(54,2185,0),(54,311,0),(54,1020,0),(54,2187,0),(54,2188,0),(54,2189,0),(54,2190,0),(54,2162,1),(54,2179,1),(54,2186,1),(55,2121,0),(55,2191,0),(55,2192,0),(55,444,0),(55,1679,0),(55,2193,0),(55,605,0),(55,698,0),(55,178,0),(55,2194,0),(55,2195,0),(55,2196,0),(55,2197,0),(55,882,0),(55,952,0),(55,2198,0),(55,2199,0),(55,1088,0),(56,79,0),(56,108,0),(56,118,0),(56,121,0),(56,129,0),(56,130,0),(56,146,0),(56,154,0),(56,2001,0),(56,171,0),(56,176,0),(56,178,0),(56,258,0),(56,268,0),(56,311,0),(56,314,0),(56,327,0),(56,333,0),(56,437,0),(56,468,0),(56,505,0),(56,513,0),(56,526,0),(56,533,0),(56,605,0),(56,646,0),(56,688,0),(56,710,0),(56,744,0),(56,752,0),(56,757,0),(56,803,0),(56,882,0),(56,889,0),(56,897,0),(56,932,0),(56,951,0),(56,952,0),(56,953,0),(56,954,0),(56,971,0),(56,1025,0),(56,1032,0),(56,1034,0),(56,1078,0),(56,1082,0),(56,1084,0),(56,1091,0),(56,1097,0),(56,1099,0),(56,1100,0),(56,1108,0),(56,1113,0),(56,1842,0),(56,1817,0),(56,1735,0),(56,1732,0),(56,1713,0),(56,1694,0),(56,1686,0),(56,1683,0),(56,1682,0),(56,1678,0),(56,2083,0),(56,2131,0),(56,2132,0),(56,2134,0),(56,2174,0),(56,2200,0),(56,2201,0),(56,2202,0),(56,2203,0),(56,2204,0),(56,2205,0),(56,2206,0),(56,2207,0),(56,2208,0),(56,2209,0),(56,2210,0),(56,2211,0),(56,2212,0),(56,2213,0),(56,2214,0),(56,2215,0),(56,2216,0),(56,2217,0),(56,2218,0),(56,2219,0),(56,2220,0),(56,2221,0),(56,2222,0),(56,2223,0),(56,2224,0),(56,2225,0),(56,2226,0),(56,2227,0),(56,2228,0),(56,2229,0),(56,2230,0),(56,2231,0),(56,2232,0),(56,2233,0),(56,2234,0),(56,2235,0),(56,2236,0),(56,2237,0),(56,2238,0),(56,2239,0),(56,2240,0),(56,2241,0),(56,2242,0),(56,2243,0),(56,2244,0),(56,2245,0),(56,2246,0),(56,2247,0),(56,2248,0),(56,2249,0),(56,2250,0),(56,2251,0),(56,2252,0),(56,2253,0),(56,2254,0),(56,2255,0),(56,2256,0),(56,2257,0),(56,2258,0),(56,2259,0),(56,2260,0),(56,2261,0),(56,2262,0),(56,2263,0),(56,2264,0),(56,2265,0),(56,2266,0),(56,2267,0),(56,2268,0),(56,2269,0),(56,2270,0),(56,2271,0),(56,2272,0),(56,2273,0),(56,2274,0),(56,2275,0),(56,2276,0),(56,2277,0),(56,2278,0),(56,2279,0),(56,2280,0),(56,2281,0),(56,2282,0),(56,2283,0),(56,2284,0),(56,2285,0),(56,2286,0),(56,2287,0),(56,2288,0),(56,2289,0),(56,2290,0),(56,2291,0),(56,2292,0),(56,2293,0),(56,2294,0),(56,2295,0),(56,2296,0),(56,2297,0),(56,2298,0),(57,2299,0),(57,2300,0),(57,2301,0),(57,2302,0),(57,2201,0),(57,2303,0),(57,2304,0),(57,350,0),(57,316,0),(57,2027,0),(57,2305,0),(57,395,0),(57,2306,0),(57,425,0),(57,468,0),(57,2307,0),(57,2308,0),(57,2309,0),(57,2211,0),(57,2310,0),(57,1696,0),(57,2311,0),(57,528,0),(57,2312,0),(57,2313,0),(57,2314,0),(57,118,0),(57,2315,0),(57,669,0),(57,121,0),(57,2234,0),(57,698,0),(57,1118,0),(57,724,0),(57,2316,0),(57,178,0),(57,2317,0),(57,2318,0),(57,766,0),(57,2319,0),(57,2320,0),(57,2321,0),(57,2322,0),(57,882,0),(57,2272,0),(57,2323,0),(57,2324,0),(57,2325,0),(57,2326,0),(57,954,0),(57,2286,0),(57,2327,0),(57,2328,0),(57,2329,0),(57,2330,0),(57,2331,0),(57,2290,0),(57,2332,0),(57,2199,0),(57,2333,0),(57,268,0),(57,1078,0),(57,1084,0),(57,154,0),(57,314,0),(57,1804,0),(59,2492,0),(59,1669,0),(59,1827,0),(59,1660,0),(59,244,0),(59,242,0),(59,241,0),(59,240,0),(59,237,0),(58,2401,0),(58,2400,0),(58,2399,0),(58,1669,0),(58,2398,0),(58,1988,0),(58,2397,0),(58,2396,0),(58,2395,0),(58,1660,0),(58,244,0),(58,243,0),(58,242,0),(58,241,0),(58,240,0),(58,1659,0),(58,239,0),(58,238,0),(58,237,0),(58,1658,0),(58,303,0),(58,236,0),(58,235,0),(58,234,0),(58,233,0),(58,302,0),(58,232,0),(58,231,0),(58,230,0),(58,229,0),(58,228,0),(58,227,0),(58,226,0),(58,301,0),(58,225,0),(58,224,0),(58,223,0),(58,300,0),(58,222,0),(58,221,0),(58,220,0),(58,1653,0),(58,1649,0),(58,1648,0),(58,1647,0),(58,298,0),(58,214,0),(59,303,0),(59,236,0),(59,235,0),(59,234,0),(59,233,0),(60,2393,0),(60,2394,0),(58,2402,0),(58,2403,0),(58,1855,0),(58,2404,0),(58,2405,0),(59,302,0),(59,232,0),(59,231,0),(59,230,0),(59,229,0),(59,228,0),(59,227,0),(59,226,0),(59,301,0),(59,225,0),(59,224,0),(59,223,0),(59,222,0),(59,221,0),(59,220,0),(59,1656,0),(59,299,0),(59,214,0),(61,2408,0),(61,75,0),(61,2409,0),(61,2410,0),(61,2411,0),(61,2412,0),(61,2413,0),(61,2414,0),(61,2415,0),(61,425,0),(61,459,0),(61,2416,0),(61,2031,0),(61,2417,0),(61,114,0),(61,2418,0),(61,2419,0),(61,2420,0),(61,2421,0),(61,2422,0),(61,154,0),(61,314,0),(62,2408,0),(62,75,0),(62,2409,0),(62,2423,0),(62,2410,0),(62,2411,0),(62,2412,0),(62,2413,0),(62,2414,0),(62,2415,0),(62,2424,0),(62,425,0),(62,459,0),(62,2416,0),(62,2031,0),(62,2417,0),(62,114,0),(62,2418,0),(62,2425,0),(62,2419,0),(62,2420,0),(62,2421,0),(62,2426,0),(62,2427,0),(62,2422,0),(62,154,0),(62,314,0),(63,2428,0),(63,2201,0),(63,432,0),(63,2429,0),(63,527,0),(63,589,0),(63,969,0),(63,2430,0),(63,154,0),(64,1839,0),(64,69,0),(64,70,0),(64,2431,0),(64,2432,0),(64,2433,0),(64,2434,0),(64,2436,0),(64,2437,0),(64,2438,0),(64,101,0),(64,169,0),(64,327,0),(64,2439,0),(64,79,0),(64,2440,0),(64,2441,0),(64,2442,0),(64,2443,0),(64,175,0),(64,2444,0),(64,176,0),(64,2445,0),(64,1713,0),(64,688,0),(64,2446,0),(64,2447,0),(64,2448,0),(64,2449,0),(64,2450,0),(64,2451,0),(64,2452,0),(64,2453,0),(64,2454,0),(64,2455,0),(64,2456,0),(64,858,0),(64,2457,0),(64,2458,0),(64,951,0),(64,2459,0),(64,2460,0),(64,1026,0),(64,146,0),(64,2461,0),(64,2462,0),(64,154,0),(64,2435,1),(69,2489,0),(65,1669,0),(65,2150,0),(65,2121,0),(65,242,0),(65,238,0),(65,237,0),(65,303,0),(67,235,0),(67,234,0),(69,1816,0),(66,2491,0),(66,2070,0),(66,2122,0),(66,1669,0),(66,2150,0),(66,2299,0),(66,244,0),(66,242,0),(66,240,0),(66,238,0),(66,237,0),(67,233,0),(67,302,0),(67,232,0),(67,231,0),(67,230,0),(67,229,0),(67,228,0),(67,226,0),(67,301,0),(67,225,0),(67,224,0),(67,223,0),(67,300,0),(67,222,0),(67,221,0),(67,220,0),(67,1656,0),(67,1651,0),(67,218,0),(68,2481,0),(68,2482,0),(68,2483,0),(68,2467,0),(68,1713,0),(68,60,0),(68,1056,0),(65,1132,0),(65,236,0),(65,235,0),(65,234,0),(65,233,0),(65,232,0),(65,231,0),(65,230,0),(65,229,0),(65,228,0),(65,227,0),(65,226,0),(65,301,0),(65,224,0),(65,223,0),(65,300,0),(65,222,0),(65,221,0),(65,220,0),(65,2484,0),(65,213,0),(66,303,0),(66,236,0),(66,235,0),(66,234,0),(66,233,0),(66,232,0),(66,231,0),(66,230,0),(66,229,0),(66,228,0),(66,227,0),(66,226,0),(66,301,0),(66,224,0),(66,223,0),(66,300,0),(66,222,0),(66,221,0),(66,220,0),(66,1652,0),(66,2484,0),(66,214,0),(66,1129,0),(67,236,0),(67,1132,0),(67,303,0),(67,237,0),(67,238,0),(67,240,0),(67,241,0),(67,243,0),(67,244,0),(67,2398,0),(67,2489,0),(67,69,0),(67,2026,0),(69,1815,0),(69,2493,0),(69,411,0),(69,169,0),(69,501,0),(69,2494,0),(69,2495,0),(69,2496,0),(69,2497,0),(70,67,0),(70,2498,0),(70,2499,0),(71,2525,0),(71,2524,0),(71,2523,0),(71,2736,0),(71,2521,0),(71,2735,0),(71,2519,0),(71,2734,0),(71,244,0),(71,241,0),(71,235,0),(71,234,0),(71,233,0),(71,229,0),(71,228,0),(71,227,0),(71,226,0),(71,301,0),(71,225,0),(71,224,0),(71,223,0),(71,222,0),(71,220,0),(71,1648,0),(72,236,0),(72,235,0),(72,302,0),(72,232,0),(72,231,0),(72,230,0),(72,229,0),(72,226,0),(72,301,0),(72,225,0),(72,224,0),(72,222,0),(72,220,0),(72,219,0),(73,2402,0),(73,2533,0),(73,2534,0),(73,2535,0),(73,2536,0),(73,2537,0),(73,493,0),(75,1839,0),(75,2397,0),(74,2525,0),(74,2402,0),(74,1847,0),(74,2524,0),(74,2523,0),(74,2796,0),(74,2521,0),(74,2519,0),(74,244,0),(74,243,0),(74,242,0),(74,240,0),(74,238,0),(74,237,0),(74,236,0),(74,235,0),(74,234,0),(74,233,0),(74,302,0),(74,232,0),(74,231,0),(74,230,0),(74,228,0),(74,226,0),(74,224,0),(74,223,0),(74,300,0),(74,222,0),(74,220,0),(74,1652,0),(74,1650,0),(74,1648,0),(74,216,0),(74,1645,0),(74,215,0),(74,1644,0),(74,1129,0),(75,669,0),(76,1988,0),(76,2552,0),(76,2553,0),(76,2399,0),(76,1855,0),(76,2554,0),(76,2555,0),(76,2556,0),(76,2557,0),(76,2558,0),(76,100,0),(76,2559,0),(76,2560,0),(76,2561,0),(76,2562,0),(76,2563,0),(76,2564,0),(76,419,0),(76,425,0),(76,2565,0),(76,1858,0),(76,1678,0),(76,435,0),(76,2566,0),(76,2567,0),(76,2568,0),(76,2569,0),(76,2570,0),(76,2571,0),(76,468,0),(76,1679,0),(76,2572,0),(76,1681,0),(76,2573,0),(76,2574,0),(76,509,0),(76,2575,0),(76,2576,0),(76,2577,0),(76,546,0),(76,548,0),(76,550,0),(76,2578,0),(76,2579,0),(76,2580,0),(76,2581,0),(76,2582,0),(76,2583,0),(76,1997,0),(76,2584,0),(76,1703,0),(76,2585,0),(76,2586,0),(76,605,0),(76,2587,0),(76,2588,0),(76,626,0),(76,636,0),(76,2589,0),(76,255,0),(76,2590,0),(76,2591,0),(76,665,0),(76,669,0),(76,2592,0),(76,176,0),(76,2593,0),(76,121,0),(76,682,0),(76,2594,0),(76,2595,0),(76,2596,0),(76,2597,0),(76,693,0),(76,2598,0),(76,2599,0),(76,2600,0),(76,2446,0),(76,2601,0),(76,2602,0),(76,719,0),(76,2603,0),(76,123,0),(76,2604,0),(76,130,0),(76,2605,0),(76,2606,0),(76,2607,0),(76,2608,0),(76,2453,0),(76,2609,0),(76,2610,0),(76,2611,0),(76,2612,0),(76,2613,0),(76,1725,0),(76,2614,0),(76,2615,0),(76,2616,0),(76,1884,0),(76,2617,0),(76,2618,0),(76,875,0),(76,897,0),(76,2620,0),(76,2621,0),(76,2622,0),(76,2623,0),(76,2624,0),(76,2625,0),(76,2626,0),(76,2627,0),(76,2628,0),(76,2629,0),(76,2630,0),(76,2631,0),(76,2632,0),(76,2633,0),(76,2634,0),(76,971,0),(76,2635,0),(76,2198,0),(76,2636,0),(76,2637,0),(76,333,0),(76,2638,0),(76,2639,0),(76,2640,0),(76,311,0),(76,1020,0),(76,1026,0),(76,1032,0),(76,1033,0),(76,1034,0),(76,146,0),(76,2641,0),(76,1038,0),(76,1735,0),(76,2642,0),(76,1737,0),(76,149,0),(76,2643,0),(76,2644,0),(76,2645,0),(76,2646,0),(76,2647,0),(76,2648,0),(76,2649,0),(76,2650,0),(76,1078,0),(76,2651,0),(76,154,0),(76,314,0),(76,99,0),(76,411,1),(76,327,1),(76,2593,1),(76,2619,1),(77,2652,0),(77,1827,0),(77,2653,0),(77,2654,0),(77,2655,0),(77,2656,0),(77,2134,0),(77,2657,0),(77,2658,0),(77,2659,0),(77,114,0),(77,1683,0),(77,605,0),(77,2660,0),(77,651,0),(77,2661,0),(77,2662,0),(77,2663,0),(77,797,0),(77,2664,0),(77,2665,0),(77,2666,0),(77,2667,0),(77,333,0),(77,1033,0),(77,2648,0),(78,2668,0),(78,2669,0),(78,2670,0),(78,169,0),(78,2672,0),(78,949,0),(78,2673,0),(78,2674,0),(78,2675,0),(78,2677,0),(78,2678,0),(78,2671,1),(78,2676,1),(79,2679,0),(79,75,0),(79,2680,0),(79,757,0),(79,2681,0),(79,2682,0),(79,2683,0),(79,154,0),(79,314,0),(79,2671,1),(79,2676,1),(80,235,0),(80,232,0),(80,231,0),(80,229,0),(80,228,0),(80,226,0),(80,224,0),(80,300,0),(80,222,0),(80,1656,0),(80,1650,0),(80,1649,0),(80,217,0),(80,1647,0),(80,2691,0),(80,237,0),(80,2692,0),(80,2693,0),(80,2694,0),(80,2695,0),(80,2696,0),(80,2697,0),(81,2698,0),(81,2699,0),(81,2696,0),(81,2697,0),(81,2700,0),(81,2701,0),(82,2705,0),(82,2706,0),(82,2702,0),(82,2703,0),(82,2704,0),(82,2707,0),(82,2200,0),(82,2696,0),(82,2708,0),(82,2709,0),(82,2710,0),(83,2711,0),(83,2712,0),(83,2587,0),(83,2713,0),(83,2714,0),(83,279,0),(83,2715,0),(83,1100,0),(84,2716,0),(84,2717,0),(84,2718,0),(84,2719,0),(84,2619,0),(84,2715,0),(84,154,0),(84,314,0),(88,1660,0),(88,244,0),(88,241,0),(88,240,0),(88,236,0),(88,235,0),(88,234,0),(88,233,0),(88,232,0),(88,231,0),(88,229,0),(88,228,0),(88,226,0),(88,225,0),(72,2525,0),(72,2123,0),(72,2740,0),(72,2524,0),(72,2523,0),(72,2739,0),(72,2738,0),(72,2737,0),(72,1660,0),(72,244,0),(72,239,0),(72,238,0),(72,1658,0),(88,2782,0),(88,2781,0),(88,2747,0),(88,2780,0),(88,2779,0),(88,2789,0),(88,2788,0),(88,2778,0),(88,2777,0),(90,2772,0),(89,2794,0),(89,2747,0),(89,231,0),(89,1655,0),(89,216,0),(88,2767,1),(88,130,1),(88,1690,1),(88,300,0),(88,222,0),(88,220,0),(88,1654,0),(88,1653,0),(88,299,0),(88,1650,0),(88,219,0),(88,218,0),(88,1648,0),(88,1131,0),(88,1130,0),(88,1647,0),(88,298,0),(88,2758,0),(88,2787,0),(88,2790,0),(88,2786,0),(88,2785,0),(88,2784,0),(88,2783,0),(88,2791,0),(88,2792,0),(88,2761,0),(88,2793,0),(89,2795,0),(89,2758,0),(89,2761,0),(93,2521,0),(93,2797,0),(93,2798,0),(93,2523,0),(93,2398,0),(93,2524,0),(93,2525,0),(93,2799,0),(93,2002,0),(93,2802,0),(93,154,0),(93,2800,1),(93,2801,1),(94,2913,0),(94,2912,0),(94,2696,0),(94,2911,0),(94,2910,0),(94,218,0);
/*!40000 ALTER TABLE `phpbb_search_wordmatch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_sessions`
--

DROP TABLE IF EXISTS `phpbb_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_sessions` (
  `session_id` char(32) NOT NULL,
  `session_user_id` mediumint(8) NOT NULL,
  `session_start` int(11) NOT NULL,
  `session_time` int(11) NOT NULL,
  `session_ip` char(8) NOT NULL,
  `session_page` int(11) NOT NULL,
  `session_topic` int(11) NOT NULL,
  `session_logged_in` tinyint(1) NOT NULL,
  `session_admin` tinyint(2) NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `session_user_id` (`session_user_id`),
  KEY `session_id_ip_user_id` (`session_id`,`session_ip`,`session_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_sessions`
--

LOCK TABLES `phpbb_sessions` WRITE;
/*!40000 ALTER TABLE `phpbb_sessions` DISABLE KEYS */;
INSERT INTO `phpbb_sessions` (`session_id`, `session_user_id`, `session_start`, `session_time`, `session_ip`, `session_page`, `session_topic`, `session_logged_in`, `session_admin`) VALUES ('00735127cc12a082b1aa79d0130ded8c',-1,1669724211,1669724213,'ac46fb72',0,0,0,0),('0193617e96eda75a4cd20d3b1e544db1',24,1371566286,1371566427,'b27a6e18',5,18,1,0),('01dc06f0781354734843419755570fd7',25,1371571143,1371571153,'5bbfc68a',5,18,1,0),('0bc0280a4c7330f839caf9997b7ba740',12,1324131260,1324131579,'4d332f05',-4,0,1,0),('0d24ded4ca0b53379de44bca970f6a18',5,1323547365,1323547509,'5f49320a',0,0,1,0),('126f76e6cf6d06cd653b21b76637163f',2,1669727762,1669727762,'a29e5716',0,0,1,0),('1609d8cda61a927871753c68130dc6e5',-1,1669724201,1669724201,'a29e56aa',5,0,0,0),('16b9eda06afabd61936835cea1f9b5aa',35,1371708326,1371708542,'0ac90006',5,0,1,0),('19feb05d921e3293448b340a6aabb844',21,1371562804,1371562833,'602cbd64',5,18,1,0),('2210736f469342c313291db0f87a6c78',2,1669726645,1669726662,'8d6560f0',0,0,1,0),('39ffec5c22fcba623c0c196dc3d75b1c',-1,1669725084,1669725084,'ac47623f',5,0,0,0),('3f5302ee9c84b2966ffb30f130016570',-1,1669724511,1669724539,'ac44ee20',-1,0,0,0),('41f5ffba8d77fd5fd5ce2a6d68431e27',2,1669727659,1669727660,'ac46fa6a',0,0,1,1),('465a9f5653da789ab4c65b46da7b39ae',4,1323541591,1323541736,'5f49320a',0,0,1,0),('46aeb2f05da21de68c43d75d2064a849',26,1371574068,1371574192,'2513d5a8',5,18,1,0),('513e4519f48122ea90ec02a18a9486ed',37,1371712644,1371712677,'b2d84a94',5,18,1,0),('56e34fb27bf8fc3e6b181a84730749d0',12,1324136023,1324136704,'4d332f05',-4,0,1,0),('5d57eec317b70ca7c1292c29f3ec76b9',28,1371579162,1371579283,'02855297',5,18,1,0),('5e2ff55e5b5489983f1e7d327966260d',34,1371672112,1371673518,'56398b1b',-9,0,1,0),('61a5ce82cfd20688532bb9bf536a901c',30,1371587866,1371587938,'b27eea31',5,18,1,0),('6817e3c46c23033fa1d73d7f10c0f2f4',-1,1669727801,1669727801,'ac47a036',0,0,0,0),('6d15cbfbd2366e5f590c98d876d2e16a',2,1669727660,1669727660,'ac46f61e',0,0,1,0),('7594db5ce4354c7457816c029b3d5214',3,1323540303,1323540361,'5f49320a',0,0,0,0),('828d490a80d4c7427fce020735ae2fc8',2,1669726333,1669726636,'ac44ee45',4,20,1,1),('95670846162647f0a49c6eece95ed7c3',31,1371616109,1371616663,'d94fe70d',5,0,1,0),('97c320c0334fcac51ad0fb1189a49f00',11,1323689282,1323693071,'4d3300a9',4,15,1,0),('a389919673a30c65a82cfd45acc446fb',-1,1669726291,1669726308,'ac44ee3c',-1,0,0,0),('a630269b4d7dd4269de61cbe33633a94',-1,1669726082,1669726082,'ac46f684',0,0,0,0),('a65bc368dc251e63f5b0d63a9f30c4ae',22,1371565324,1371567865,'b06a589f',5,18,1,0),('ac1010ef5fac0887dcc3052a400c3ed1',16,1333281873,1333285263,'5f486711',5,18,1,0),('b38bda4df825a223b1595db653b3af86',8,1323631206,1323631261,'5f49db33',4,14,1,0),('c4692de0c71f901f2c5e4b59f7b64f89',2,1669727672,1669727745,'ac46fa6a',3,6,1,0),('d62ad463a62c16e6199f36caf1e1879e',25,1371568005,1371568020,'2e16e9e5',5,18,1,0),('d9d1b9845a6e0dd6a176aa4b098ceb7f',-1,1669727832,1669727832,'a29e5728',0,0,0,0),('e51644afe8ed045cd473a0db5b3de1ac',9,1323613551,1323613741,'5f4828a8',-9,0,1,0),('eb455acaab965472232bea8584a31458',15,1333192482,1333194239,'4d332893',0,0,1,1),('f1a67a7454f83a01695aaffbce134235',2,1669727761,1669727790,'ac46f61f',0,0,1,1),('f28c4e9647a7758ccf46df16737ce952',-1,1669725071,1669725093,'8d6560f1',-1,0,0,0),('f49da1f9af816f21267f641b86eabc44',-1,1669727596,1669727596,'ac46f684',0,0,0,0),('f8f5b5f062b98e578922a9e8163e5d96',6,1323539861,1323539861,'5f49320a',0,0,0,0),('fa81c94f3d32818d9dff76c6993ff7d9',-1,1669727456,1669727481,'ac46fb71',-1,0,0,0),('fe414f8ea5c8f6c846d1ff00b6ca9c68',33,1371661643,1371663557,'931e0f55',5,18,1,0);
/*!40000 ALTER TABLE `phpbb_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_sessions_keys`
--

DROP TABLE IF EXISTS `phpbb_sessions_keys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_sessions_keys` (
  `key_id` varchar(32) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `last_ip` varchar(8) NOT NULL,
  `last_login` int(11) NOT NULL,
  PRIMARY KEY (`key_id`,`user_id`),
  KEY `last_login` (`last_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_sessions_keys`
--

LOCK TABLES `phpbb_sessions_keys` WRITE;
/*!40000 ALTER TABLE `phpbb_sessions_keys` DISABLE KEYS */;
INSERT INTO `phpbb_sessions_keys` (`key_id`, `user_id`, `last_ip`, `last_login`) VALUES ('812724c687d9ae90c007c633b8741fcb',2,'8d6560f0',1669726645),('e6800df6439525ec673f48899c980eb4',2,'a29e5716',1669727762);
/*!40000 ALTER TABLE `phpbb_sessions_keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_shout`
--

DROP TABLE IF EXISTS `phpbb_shout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_shout` (
  `shout_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `shout_username` varchar(25) NOT NULL,
  `shout_user_id` mediumint(8) NOT NULL,
  `shout_group_id` mediumint(8) NOT NULL,
  `shout_session_time` int(11) NOT NULL,
  `shout_ip` varchar(8) NOT NULL,
  `shout_text` text NOT NULL,
  `shout_active` mediumint(8) NOT NULL,
  `enable_bbcode` tinyint(1) NOT NULL,
  `enable_html` tinyint(1) NOT NULL,
  `enable_smilies` tinyint(1) NOT NULL,
  `enable_sig` tinyint(1) NOT NULL,
  `shout_bbcode_uid` varchar(10) NOT NULL,
  KEY `shout_id` (`shout_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_shout`
--

LOCK TABLES `phpbb_shout` WRITE;
/*!40000 ALTER TABLE `phpbb_shout` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_shout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_smilies`
--

DROP TABLE IF EXISTS `phpbb_smilies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_smilies` (
  `smilies_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `smile_url` varchar(100) DEFAULT NULL,
  `emoticon` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`smilies_id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_smilies`
--

LOCK TABLES `phpbb_smilies` WRITE;
/*!40000 ALTER TABLE `phpbb_smilies` DISABLE KEYS */;
INSERT INTO `phpbb_smilies` (`smilies_id`, `code`, `smile_url`, `emoticon`) VALUES (1,':D','icon_biggrin.gif','Very Happy'),(2,':-D','icon_biggrin.gif','Very Happy'),(3,':grin:','icon_biggrin.gif','Very Happy'),(6,':smile:','icon_smile.gif','Smile'),(9,':sad:','icon_sad.gif','Sad'),(10,':o','icon_surprised.gif','Surprised'),(11,':-o','icon_surprised.gif','Surprised'),(12,':eek:','icon_surprised.gif','Surprised'),(13,':shock:','icon_eek.gif','Shocked'),(14,':?','icon_confused.gif','Confused'),(15,':-?','icon_confused.gif','Confused'),(16,':???:','icon_confused.gif','Confused'),(19,':cool:','icon_cool.gif','Cool'),(20,':lol:','icon_lol.gif','Laughing'),(23,':mad:','icon_mad.gif','Mad'),(26,':razz:','icon_razz.gif','Razz'),(27,':oops:','icon_redface.gif','Embarassed'),(28,':cry:','icon_cry.gif','Crying or Very sad'),(29,':evil:','icon_evil.gif','Evil or Very Mad'),(30,':twisted:','icon_twisted.gif','Twisted Evil'),(31,':roll:','icon_rolleyes.gif','Rolling Eyes'),(33,';)','icon_wink.gif','Wink'),(35,':!:','icon_exclaim.gif','Exclamation'),(36,':?:','icon_question.gif','Question'),(37,':idea:','icon_idea.gif','Idea'),(38,':arrow:','icon_arrow.gif','Arrow'),(41,':neutral:','icon_neutral.gif','Neutral'),(43,':hippie:','icon_hippie.gif','Hippie'),(44,':black:','icon_blacker.gif','Blacker'),(45,':schlick:','icon_schlicking.gif','Schlicking'),(46,':punk:','icon_punk.gif','Punk'),(47,':hello:','icon_hello.gif','Hello'),(48,':emo:','icon_emo.gif','Emo'),(49,':nohope:','icon_hopelessness.gif','Hopelessness'),(50,':jazz:','icon_jazz.gif','Jazzman'),(51,':pop:','icon_popster.gif','Popster'),(52,':bump:','icon_boxing.gif','Boxing'),(53,':omen:','icon_omen.gif','Bad Omen'),(54,':gamer:','icon_gamer.gif','Gamer'),(55,':pepsi:','icon_pepsi.gif','Pepsi Generation'),(56,'})i({','icon_butterfly.gif','Butterfly'),(57,':moderate:','icon_moderate.gif','Moderator'),(58,':thrash:','icon_thrasher.gif','Thrasher'),(59,':smile_fem:','icon_girlsmile.gif','Girl Smile'),(61,':alter:','icon_alternative.gif','Alter Dude'),(62,':pink:','icon_pinkglasses.gif','Pink Glasses'),(63,':goth:','icon_goth.gif','Goth'),(64,':old:','icon_traditional.gif','Traditional'),(65,':metal:','icon_headbanger.gif','Headbanger'),(66,':ban:','icon_terminator.gif','Terminator'),(67,':fap:','icon_fapping.gif','Fapping'),(68,':facepalm:','icon_facepalm.gif','Facepalm'),(69,':dead:','icon_dead.gif','Dead'),(70,':rasta:','icon_rastaman.gif','Rastaman'),(71,':death:','icon_deathster.gif','Deathster'),(72,':hsf:','icon_hsf.gif','Hammer Smashed Face'),(73,':piano:','icon_piano.jpg','Pianoman');
/*!40000 ALTER TABLE `phpbb_smilies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_stats_config`
--

DROP TABLE IF EXISTS `phpbb_stats_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_stats_config` (
  `config_name` varchar(50) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_stats_config`
--

LOCK TABLES `phpbb_stats_config` WRITE;
/*!40000 ALTER TABLE `phpbb_stats_config` DISABLE KEYS */;
INSERT INTO `phpbb_stats_config` (`config_name`, `config_value`) VALUES ('install_date','1323526841'),('modules_dir','stat_modules'),('page_views','13'),('return_limit','10'),('version','2.1.5');
/*!40000 ALTER TABLE `phpbb_stats_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_stats_modules`
--

DROP TABLE IF EXISTS `phpbb_stats_modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_stats_modules` (
  `module_id` tinyint(8) NOT NULL,
  `name` varchar(150) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `installed` tinyint(1) NOT NULL,
  `display_order` mediumint(8) unsigned NOT NULL,
  `update_time` mediumint(8) unsigned NOT NULL,
  `auth_value` tinyint(2) NOT NULL,
  `module_info_cache` blob,
  `module_db_cache` blob,
  `module_result_cache` blob,
  `module_info_time` int(10) unsigned NOT NULL,
  `module_cache_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_stats_modules`
--

LOCK TABLES `phpbb_stats_modules` WRITE;
/*!40000 ALTER TABLE `phpbb_stats_modules` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_stats_modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_themes`
--

DROP TABLE IF EXISTS `phpbb_themes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_themes` (
  `themes_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `template_name` varchar(30) NOT NULL,
  `style_name` varchar(30) NOT NULL,
  `head_stylesheet` varchar(100) DEFAULT NULL,
  `body_background` varchar(100) DEFAULT NULL,
  `body_bgcolor` varchar(6) DEFAULT NULL,
  `body_text` varchar(6) DEFAULT NULL,
  `body_link` varchar(6) DEFAULT NULL,
  `body_vlink` varchar(6) DEFAULT NULL,
  `body_alink` varchar(6) DEFAULT NULL,
  `body_hlink` varchar(6) DEFAULT NULL,
  `tr_color1` varchar(6) DEFAULT NULL,
  `tr_color2` varchar(6) DEFAULT NULL,
  `tr_color3` varchar(6) DEFAULT NULL,
  `tr_class1` varchar(25) DEFAULT NULL,
  `tr_class2` varchar(25) DEFAULT NULL,
  `tr_class3` varchar(25) DEFAULT NULL,
  `th_color1` varchar(6) DEFAULT NULL,
  `th_color2` varchar(6) DEFAULT NULL,
  `th_color3` varchar(6) DEFAULT NULL,
  `th_class1` varchar(25) DEFAULT NULL,
  `th_class2` varchar(25) DEFAULT NULL,
  `th_class3` varchar(25) DEFAULT NULL,
  `td_color1` varchar(6) DEFAULT NULL,
  `td_color2` varchar(6) DEFAULT NULL,
  `td_color3` varchar(6) DEFAULT NULL,
  `td_class1` varchar(25) DEFAULT NULL,
  `td_class2` varchar(25) DEFAULT NULL,
  `td_class3` varchar(25) DEFAULT NULL,
  `fontface1` varchar(50) DEFAULT NULL,
  `fontface2` varchar(50) DEFAULT NULL,
  `fontface3` varchar(50) DEFAULT NULL,
  `fontsize1` tinyint(4) DEFAULT NULL,
  `fontsize2` tinyint(4) DEFAULT NULL,
  `fontsize3` tinyint(4) DEFAULT NULL,
  `fontcolor1` varchar(6) DEFAULT NULL,
  `fontcolor2` varchar(6) DEFAULT NULL,
  `fontcolor3` varchar(6) DEFAULT NULL,
  `span_class1` varchar(25) DEFAULT NULL,
  `span_class2` varchar(25) DEFAULT NULL,
  `span_class3` varchar(25) DEFAULT NULL,
  `img_size_poll` smallint(5) unsigned DEFAULT NULL,
  `img_size_privmsg` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`themes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_themes`
--

LOCK TABLES `phpbb_themes` WRITE;
/*!40000 ALTER TABLE `phpbb_themes` DISABLE KEYS */;
INSERT INTO `phpbb_themes` (`themes_id`, `template_name`, `style_name`, `head_stylesheet`, `body_background`, `body_bgcolor`, `body_text`, `body_link`, `body_vlink`, `body_alink`, `body_hlink`, `tr_color1`, `tr_color2`, `tr_color3`, `tr_class1`, `tr_class2`, `tr_class3`, `th_color1`, `th_color2`, `th_color3`, `th_class1`, `th_class2`, `th_class3`, `td_color1`, `td_color2`, `td_color3`, `td_class1`, `td_class2`, `td_class3`, `fontface1`, `fontface2`, `fontface3`, `fontsize1`, `fontsize2`, `fontsize3`, `fontcolor1`, `fontcolor2`, `fontcolor3`, `span_class1`, `span_class2`, `span_class3`, `img_size_poll`, `img_size_privmsg`) VALUES (1,'fisubsilversh','FI Subsilver Shadow','fisubsilversh.css','','','','','','','','','','','','','','','','','','','','','','','row1','row2','','','','',0,0,0,'','006600','ffa34f','','','',0,0);
/*!40000 ALTER TABLE `phpbb_themes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_themes_name`
--

DROP TABLE IF EXISTS `phpbb_themes_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_themes_name` (
  `themes_id` smallint(5) unsigned NOT NULL,
  `tr_color1_name` char(50) DEFAULT NULL,
  `tr_color2_name` char(50) DEFAULT NULL,
  `tr_color3_name` char(50) DEFAULT NULL,
  `tr_class1_name` char(50) DEFAULT NULL,
  `tr_class2_name` char(50) DEFAULT NULL,
  `tr_class3_name` char(50) DEFAULT NULL,
  `th_color1_name` char(50) DEFAULT NULL,
  `th_color2_name` char(50) DEFAULT NULL,
  `th_color3_name` char(50) DEFAULT NULL,
  `th_class1_name` char(50) DEFAULT NULL,
  `th_class2_name` char(50) DEFAULT NULL,
  `th_class3_name` char(50) DEFAULT NULL,
  `td_color1_name` char(50) DEFAULT NULL,
  `td_color2_name` char(50) DEFAULT NULL,
  `td_color3_name` char(50) DEFAULT NULL,
  `td_class1_name` char(50) DEFAULT NULL,
  `td_class2_name` char(50) DEFAULT NULL,
  `td_class3_name` char(50) DEFAULT NULL,
  `fontface1_name` char(50) DEFAULT NULL,
  `fontface2_name` char(50) DEFAULT NULL,
  `fontface3_name` char(50) DEFAULT NULL,
  `fontsize1_name` char(50) DEFAULT NULL,
  `fontsize2_name` char(50) DEFAULT NULL,
  `fontsize3_name` char(50) DEFAULT NULL,
  `fontcolor1_name` char(50) DEFAULT NULL,
  `fontcolor2_name` char(50) DEFAULT NULL,
  `fontcolor3_name` char(50) DEFAULT NULL,
  `span_class1_name` char(50) DEFAULT NULL,
  `span_class2_name` char(50) DEFAULT NULL,
  `span_class3_name` char(50) DEFAULT NULL,
  PRIMARY KEY (`themes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_themes_name`
--

LOCK TABLES `phpbb_themes_name` WRITE;
/*!40000 ALTER TABLE `phpbb_themes_name` DISABLE KEYS */;
INSERT INTO `phpbb_themes_name` (`themes_id`, `tr_color1_name`, `tr_color2_name`, `tr_color3_name`, `tr_class1_name`, `tr_class2_name`, `tr_class3_name`, `th_color1_name`, `th_color2_name`, `th_color3_name`, `th_class1_name`, `th_class2_name`, `th_class3_name`, `td_color1_name`, `td_color2_name`, `td_color3_name`, `td_class1_name`, `td_class2_name`, `td_class3_name`, `fontface1_name`, `fontface2_name`, `fontface3_name`, `fontsize1_name`, `fontsize2_name`, `fontsize3_name`, `fontcolor1_name`, `fontcolor2_name`, `fontcolor3_name`, `span_class1_name`, `span_class2_name`, `span_class3_name`) VALUES (1,'The lightest row colour','The medium row color','The darkest row colour','','','','Border round the whole page','Outer table border','Inner table border','Silver gradient picture','Blue gradient picture','Fade-out gradient on index','Background for quote boxes','All white areas','','Background for topic posts','2nd background for topic posts','','Main fonts','Additional topic title font','Form fonts','Smallest font size','Medium font size','Normal font size (post body etc)','Quote & copyright text','Code text colour','Main table header text colour','','','');
/*!40000 ALTER TABLE `phpbb_themes_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_topic_view`
--

DROP TABLE IF EXISTS `phpbb_topic_view`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_topic_view` (
  `topic_id` mediumint(8) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `view_time` int(11) NOT NULL,
  `view_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_topic_view`
--

LOCK TABLES `phpbb_topic_view` WRITE;
/*!40000 ALTER TABLE `phpbb_topic_view` DISABLE KEYS */;
INSERT INTO `phpbb_topic_view` (`topic_id`, `user_id`, `view_time`, `view_count`) VALUES (2,2,1323527455,1),(1,2,1323527467,1),(3,2,1323528167,3),(4,2,1323528143,2),(5,2,1411975096,75),(6,2,1669726645,30),(6,3,1323532205,6),(5,3,1323705415,7),(7,3,1323532683,1),(7,4,1323534195,3),(8,4,1323538867,3),(8,2,1323534535,3),(8,3,1323534621,3),(9,3,1323534777,4),(9,2,1411975238,8),(9,4,1324226672,4),(9,-1,1382073712,91),(5,-1,1411975510,927),(6,-1,1383431936,532),(7,2,1371627256,6),(5,4,1328528130,10),(5,5,1323547475,7),(6,5,1323537935,2),(10,4,1323538935,2),(10,5,1323538367,1),(10,3,1323540355,3),(7,-1,1383237206,281),(8,-1,1383237234,473),(6,4,1324227319,18),(11,6,1323539936,1),(11,2,1371554130,10),(11,3,1323540333,2),(12,7,1323541420,2),(12,2,1371626391,6),(12,3,1323541249,5),(12,4,1323541646,3),(10,2,1371721450,6),(6,8,1323614441,6),(10,-1,1382423849,106),(6,9,1323614198,2),(6,10,1323626781,2),(13,10,1323626936,1),(13,4,1323626996,2),(13,5,1323627116,2),(13,3,1323627171,2),(13,9,1323627401,3),(13,7,1323627708,2),(13,8,1323627878,2),(13,2,1371626400,4),(7,9,1323628229,4),(8,9,1323628260,2),(7,10,1323628380,2),(8,10,1323628427,1),(8,8,1323628671,2),(8,5,1323628830,2),(14,9,1323629028,1),(14,10,1323631179,5),(14,8,1323631261,5),(14,4,1323629677,2),(14,5,1323630161,2),(14,3,1323630407,2),(14,2,1323713619,19),(14,7,1323631094,2),(15,11,1323693071,4),(15,-1,1383533088,430),(15,2,1328531818,15),(15,7,1323685961,2),(15,5,1323686070,2),(15,8,1323687396,4),(14,11,1323689297,9),(6,11,1324207710,3),(5,11,1324207695,17),(14,12,1324136567,4),(5,12,1324135460,5),(16,12,1324136054,2),(16,3,1324135986,6),(9,12,1324136140,1),(6,12,1324136195,2),(7,12,1324136316,2),(15,12,1324136508,2),(13,12,1324136430,1),(12,12,1324136444,1),(8,12,1324136480,1),(14,-1,1383340962,589),(13,-1,1383254687,456),(16,2,1324206181,1),(17,2,1669726622,13),(17,4,1324206774,2),(17,-1,1383237224,373),(17,10,1324207129,4),(17,11,1324207411,2),(17,9,1324208182,3),(11,-1,1383544019,227),(16,-1,1383254687,302),(12,-1,1383237168,291),(5,14,1324225140,3),(6,14,1324325357,27),(18,15,1333194224,9),(18,-1,1669725084,409),(18,16,1333285263,5),(18,2,1411975201,15),(18,18,1371558770,2),(18,21,1371562833,1),(18,22,1371979375,10),(18,23,1371565996,1),(5,23,1371566141,1),(18,24,1371566427,1),(18,25,1371571153,2),(18,26,1371574193,1),(18,28,1371579283,4),(18,30,1371587938,1),(18,31,1371616321,1),(18,32,1371645450,2),(18,33,1371663557,2),(18,34,1371673335,3),(18,35,1371708492,2),(18,37,1371712677,1),(5,19,1371720721,3),(19,19,1371721054,2),(20,19,1371723528,1),(20,-1,1383431932,166),(20,2,1669726636,1);
/*!40000 ALTER TABLE `phpbb_topic_view` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_topics`
--

DROP TABLE IF EXISTS `phpbb_topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_topics` (
  `topic_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` smallint(8) unsigned NOT NULL,
  `topic_title` varchar(60) NOT NULL,
  `topic_desc` varchar(255) DEFAULT NULL,
  `topic_poster` mediumint(8) NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_views` mediumint(8) unsigned NOT NULL,
  `topic_replies` mediumint(8) unsigned NOT NULL,
  `topic_status` tinyint(3) NOT NULL,
  `topic_vote` tinyint(1) NOT NULL,
  `topic_type` tinyint(3) NOT NULL,
  `topic_first_post_id` mediumint(8) unsigned NOT NULL,
  `topic_last_post_id` mediumint(8) unsigned NOT NULL,
  `topic_moved_id` mediumint(8) unsigned NOT NULL,
  `topic_attachment` tinyint(1) NOT NULL,
  `topic_icon` tinyint(2) DEFAULT NULL,
  `topic_calendar_time` int(11) DEFAULT NULL,
  `topic_calendar_duration` int(11) DEFAULT NULL,
  `topic_announce_duration` mediumint(5) NOT NULL,
  `news_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_moved_id` (`topic_moved_id`),
  KEY `topic_status` (`topic_status`),
  KEY `topic_type` (`topic_type`),
  KEY `topic_calendar_time` (`topic_calendar_time`),
  KEY `news_id` (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_topics`
--

LOCK TABLES `phpbb_topics` WRITE;
/*!40000 ALTER TABLE `phpbb_topics` DISABLE KEYS */;
INSERT INTO `phpbb_topics` (`topic_id`, `forum_id`, `topic_title`, `topic_desc`, `topic_poster`, `topic_time`, `topic_views`, `topic_replies`, `topic_status`, `topic_vote`, `topic_type`, `topic_first_post_id`, `topic_last_post_id`, `topic_moved_id`, `topic_attachment`, `topic_icon`, `topic_calendar_time`, `topic_calendar_duration`, `topic_announce_duration`, `news_id`) VALUES (5,3,'Ð Ð¸ÑÐ¾Ð²Ð°Ð½Ð½Ð°Ñ ÑÑ€Ð¾Ñ‚Ð¸ÐºÐ°','ÐšÐ¾Ð¼Ð¸ÐºÑÑ‹, Ð¥ÐµÐ½Ñ‚Ð°Ð¹, Ð™Ð¸Ñ„Ñ„',2,1323528424,1055,15,0,0,1,5,75,0,1,21,0,0,0,0),(6,3,'ÐšÐ»Ð°ÑÑÐ¸Ñ‡ÐµÑÐºÐ°Ñ ÑÑ€Ð¾Ñ‚Ð¸ÐºÐ°','(Ð»Ñ‘Ð³ÐºÐ°Ñ, softcore)',2,1323528644,630,9,0,0,1,6,84,0,1,17,0,0,0,0),(7,4,'ÐšÑ‚Ð¾ Ð´Ñ€Ð¾Ñ‡Ð¸Ñ‚ Ð¶ÐµÐ½ÑÐºÐ¸Ð¼Ð¸ Ñ‚Ñ€ÑƒÑÐ¸ÐºÐ°Ð¼Ð¸','Ð¸ Ð¿Ñ€Ð°Ð²Ð´Ð°, ÐºÑ‚Ð¾?',3,1323532678,299,3,0,0,0,9,51,0,0,0,0,0,0,0),(8,4,'Ð¡ ÐºÐµÐ¼ Ð¸Ð· Ð·Ð½Ð°Ð¼ÐµÐ½Ð¸Ñ‚Ñ‹Ñ… Ð´ÐµÐ²ÑƒÑˆÐµÐº..?','Ð²Ñ‹ Ð±Ñ‹ Ð¿ÐµÑ€ÐµÑÐ¿Ð°Ð»Ð¸',4,1323534351,490,4,0,0,0,11,53,0,0,0,0,0,0,0),(9,2,'ÐÐ´Ð¼Ð¸Ð½','Ð¢Ñ‹ - ...',3,1323534763,108,2,0,0,0,14,16,0,0,0,0,0,0,0),(10,3,'Ð“Ð´Ðµ Ð½Ð°Ð¹Ñ‚Ð¸','Ñ‚Ð°ÐºÐ¾Ðµ?',4,1323538204,118,3,0,0,0,25,35,0,1,5,0,0,0,0),(11,4,'Ð‘Ð˜Ð—ÐÐ•Ð¡ Ð¡ ÐœÐ˜ÐÐ˜ÐœÐÐ›Ð¬ÐÐ«ÐœÐ˜ Ð’Ð›ÐžÐ–Ð•ÐÐ˜Ð¯ÐœÐ','',6,1323539928,240,0,1,0,0,28,28,0,0,14,0,0,0,0),(12,4,'ÐšÐ°Ðº Ð½Ð°Ð¹Ñ‚Ð¸ Ð°ÑÐµÐºÑÑƒÐ°Ð»ÑŒÐ½ÑƒÑŽ Ð´ÐµÐ²ÑƒÑˆÐºÑƒ','Ð¸ ÑÐ¾Ð·Ð´Ð°Ñ‚ÑŒ ÑÐµÐ¼ÑŒÑŽ',7,1323540906,308,3,0,0,0,30,34,0,0,0,0,0,0,0),(13,4,'ÐŸÐ¾Ð´Ð³Ð»ÑÐ´Ñ‹Ð²Ð°Ð½Ð¸Ðµ','ÐšÑ‚Ð¾ Ð½ÐµÐ±ÑƒÑ‚ÑŒ ÑÑ‚Ð¾ Ð´ÐµÐ»Ð°ÐµÑ‚???',10,1323626931,475,7,0,0,0,42,49,0,0,0,0,0,0,0),(14,4,'Ð—Ð½Ð°ÐºÐ¾Ð¼ÑÑ‚Ð²Ð° Ñ Ñ‚Ñ€Ð°Ð½ÑÑÐµÐºÑÑƒÐ°Ð»Ð°Ð¼Ð¸ Ð¿Ð¾ ','',9,1323629024,640,10,0,0,0,54,69,0,0,0,0,0,0,0),(15,4,'ÐŸÐ¾Ð·Ð½Ð°ÐºÐ¾Ð¼Ð»ÑŽÑÑŒ','Ð”ÐµÐ²ÑƒÑˆÐºÐ°-Ñ„ÑƒÑ€Ñ€Ð¸ Ð¸Ñ‰ÐµÑ‚ Ð»Ð°ÑÐºÑƒ',11,1323684954,458,4,0,0,0,64,68,0,1,11,0,0,0,0),(16,4,'Ð§Ñ‚Ð¾ Ð²Ð°Ñ Ð¿Ñ€Ð¸Ð²ÐµÐ»Ð¾ Ð² Ð¼Ð¸Ñ€','Ð¤ÑƒÑ€Ñ€Ð¸?',12,1324135293,311,1,0,0,0,76,77,0,1,20,0,0,0,0),(17,2,'Ð£ÐºÑ€Ð°ÑˆÐµÐ½Ð¸Ðµ Ñ‚ÐµÐºÑÑ‚Ð°','Ð½Ð° Ð½Ð°ÑˆÐµÐ¼ Ñ„Ð¾Ñ€ÑƒÐ¼Ðµ',2,1324206644,397,4,0,0,1,78,82,0,0,0,0,0,0,0),(18,5,'Ð”Ð° Ð±ÑƒÐ´ÑƒÑ‚ Ð¿Ñ€Ð¾ÐºÐ»ÑÑ‚Ñ‹ Ð¾Ð½Ð¸','',15,1333193431,472,3,0,0,0,88,94,0,0,0,0,0,0,0),(20,4,'Ð£Ð±Ð¸Ð²Ð°Ð»ÐºÐ° ÐºÐ¾Ð¼Ð¿Ð°','',19,1371723515,168,0,0,0,0,93,93,0,0,19,0,0,0,0);
/*!40000 ALTER TABLE `phpbb_topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_topics_watch`
--

DROP TABLE IF EXISTS `phpbb_topics_watch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_topics_watch` (
  `topic_id` mediumint(8) unsigned NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `notify_status` tinyint(1) NOT NULL,
  KEY `topic_id` (`topic_id`),
  KEY `user_id` (`user_id`),
  KEY `notify_status` (`notify_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_topics_watch`
--

LOCK TABLES `phpbb_topics_watch` WRITE;
/*!40000 ALTER TABLE `phpbb_topics_watch` DISABLE KEYS */;
INSERT INTO `phpbb_topics_watch` (`topic_id`, `user_id`, `notify_status`) VALUES (6,14,0),(18,16,1);
/*!40000 ALTER TABLE `phpbb_topics_watch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_user_group`
--

DROP TABLE IF EXISTS `phpbb_user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_user_group` (
  `group_id` mediumint(8) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `user_pending` tinyint(1) DEFAULT NULL,
  KEY `group_id` (`group_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_user_group`
--

LOCK TABLES `phpbb_user_group` WRITE;
/*!40000 ALTER TABLE `phpbb_user_group` DISABLE KEYS */;
INSERT INTO `phpbb_user_group` (`group_id`, `user_id`, `user_pending`) VALUES (1,-1,0),(2,2,0),(3,3,0),(4,4,0),(5,5,0),(6,6,0),(7,7,0),(8,8,0),(9,9,0),(10,10,0),(11,11,0),(12,12,0),(13,13,0),(14,14,0),(15,15,0),(16,16,0),(17,17,0),(18,18,0),(19,19,0),(20,20,0),(21,21,0),(22,22,0),(23,23,0),(24,24,0),(25,25,0),(26,26,0),(27,27,0),(28,28,0),(29,29,0),(30,30,0),(31,31,0),(32,32,0),(33,33,0),(34,34,0),(35,35,0),(36,36,0),(37,37,0);
/*!40000 ALTER TABLE `phpbb_user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_users`
--

DROP TABLE IF EXISTS `phpbb_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_users` (
  `user_id` mediumint(8) NOT NULL,
  `user_active` tinyint(1) DEFAULT '1',
  `username` varchar(25) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_session_time` int(11) NOT NULL,
  `user_session_page` smallint(5) NOT NULL,
  `user_session_topic` int(11) NOT NULL,
  `user_lastvisit` int(11) NOT NULL,
  `user_regdate` int(11) NOT NULL,
  `user_level` tinyint(4) DEFAULT NULL,
  `user_posts` mediumint(8) unsigned NOT NULL,
  `user_timezone` decimal(5,2) NOT NULL DEFAULT '0.00',
  `user_style` tinyint(4) DEFAULT NULL,
  `user_lang` varchar(255) DEFAULT NULL,
  `user_dateformat` varchar(14) NOT NULL DEFAULT 'd M Y H:i',
  `user_new_privmsg` smallint(5) unsigned NOT NULL,
  `user_unread_privmsg` smallint(5) unsigned NOT NULL,
  `user_last_privmsg` int(11) NOT NULL,
  `user_login_tries` smallint(5) unsigned NOT NULL,
  `user_last_login_try` int(11) NOT NULL,
  `user_emailtime` int(11) DEFAULT NULL,
  `user_viewemail` tinyint(1) DEFAULT NULL,
  `user_attachsig` tinyint(1) DEFAULT NULL,
  `user_setbm` tinyint(1) NOT NULL,
  `user_allowhtml` tinyint(1) DEFAULT '1',
  `user_allowbbcode` tinyint(1) DEFAULT '1',
  `user_allowsmile` tinyint(1) DEFAULT '1',
  `user_allowavatar` tinyint(1) NOT NULL DEFAULT '1',
  `user_allow_pm` tinyint(1) NOT NULL DEFAULT '1',
  `user_allow_viewonline` tinyint(1) NOT NULL DEFAULT '1',
  `user_notify` tinyint(1) NOT NULL DEFAULT '1',
  `user_notify_pm` tinyint(1) NOT NULL,
  `user_popup_pm` tinyint(1) NOT NULL,
  `user_rank` int(11) DEFAULT NULL,
  `user_avatar` varchar(100) DEFAULT NULL,
  `user_avatar_type` tinyint(4) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_icq` varchar(15) DEFAULT NULL,
  `user_website` varchar(100) DEFAULT NULL,
  `user_from` varchar(100) DEFAULT NULL,
  `user_from_flag` varchar(25) DEFAULT NULL,
  `user_sig` text,
  `user_sig_bbcode_uid` char(10) DEFAULT NULL,
  `user_aim` varchar(255) DEFAULT NULL,
  `user_yim` varchar(255) DEFAULT NULL,
  `user_msnm` varchar(255) DEFAULT NULL,
  `user_occ` varchar(100) DEFAULT NULL,
  `user_interests` varchar(255) DEFAULT NULL,
  `user_actkey` varchar(32) DEFAULT NULL,
  `user_newpasswd` varchar(32) DEFAULT NULL,
  `ct_postcount` varchar(10) NOT NULL,
  `ct_posttime` varchar(10) NOT NULL,
  `ct_searchcount` varchar(10) NOT NULL,
  `ct_searchtime` varchar(10) NOT NULL,
  `ct_mailcount` int(10) NOT NULL,
  `ct_pwreset` int(2) NOT NULL,
  `ct_unsucclogin` int(10) DEFAULT NULL,
  `ct_logintry` int(2) NOT NULL,
  `user_sub_forum` tinyint(1) NOT NULL DEFAULT '1',
  `user_split_cat` tinyint(1) NOT NULL DEFAULT '1',
  `user_last_topic_title` tinyint(1) NOT NULL DEFAULT '1',
  `user_sub_level_links` tinyint(1) NOT NULL DEFAULT '2',
  `user_display_viewonline` tinyint(1) NOT NULL DEFAULT '2',
  `user_birthday` int(11) NOT NULL DEFAULT '999999',
  `user_next_birthday_greeting` int(11) NOT NULL,
  `user_gender` tinyint(4) NOT NULL,
  `user_color_group` mediumint(8) unsigned NOT NULL,
  `user_lastlogon` int(11) NOT NULL,
  `user_totaltime` int(11) DEFAULT NULL,
  `user_totallogon` int(11) DEFAULT NULL,
  `user_totalpages` int(11) DEFAULT NULL,
  `user_calendar_display_open` tinyint(1) NOT NULL,
  `user_calendar_header_cells` tinyint(1) NOT NULL DEFAULT '7',
  `user_calendar_week_start` tinyint(1) NOT NULL DEFAULT '1',
  `user_calendar_nb_row` tinyint(2) unsigned NOT NULL DEFAULT '5',
  `user_calendar_birthday` tinyint(1) NOT NULL DEFAULT '1',
  `user_calendar_forum` tinyint(1) NOT NULL DEFAULT '1',
  `user_warnings` smallint(5) DEFAULT NULL,
  `user_passwd_change` int(11) NOT NULL,
  `user_badlogin` smallint(5) NOT NULL,
  `user_blocktime` int(11) NOT NULL,
  `user_block_by` varchar(8) DEFAULT NULL,
  `user_split_global_announce` tinyint(1) NOT NULL DEFAULT '1',
  `user_split_announce` tinyint(1) NOT NULL DEFAULT '1',
  `user_split_sticky` tinyint(1) NOT NULL DEFAULT '1',
  `user_split_news` tinyint(1) NOT NULL DEFAULT '1',
  `user_split_topic_split` tinyint(1) NOT NULL,
  `user_absence` tinyint(1) NOT NULL,
  `user_absence_mode` mediumint(8) NOT NULL,
  `user_absence_text` text NOT NULL,
  `user_announcement_date_display` tinyint(1) NOT NULL DEFAULT '1',
  `user_announcement_display` tinyint(1) NOT NULL DEFAULT '1',
  `user_announcement_display_forum` tinyint(1) NOT NULL DEFAULT '1',
  `user_announcement_split` tinyint(1) NOT NULL DEFAULT '1',
  `user_announcement_forum` tinyint(1) NOT NULL DEFAULT '1',
  `user_use_ajax_preview` tinyint(1) NOT NULL DEFAULT '1',
  `user_use_ajax_edit` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  KEY `user_session_time` (`user_session_time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_users`
--

LOCK TABLES `phpbb_users` WRITE;
/*!40000 ALTER TABLE `phpbb_users` DISABLE KEYS */;
INSERT INTO `phpbb_users` (`user_id`, `user_active`, `username`, `user_password`, `user_session_time`, `user_session_page`, `user_session_topic`, `user_lastvisit`, `user_regdate`, `user_level`, `user_posts`, `user_timezone`, `user_style`, `user_lang`, `user_dateformat`, `user_new_privmsg`, `user_unread_privmsg`, `user_last_privmsg`, `user_login_tries`, `user_last_login_try`, `user_emailtime`, `user_viewemail`, `user_attachsig`, `user_setbm`, `user_allowhtml`, `user_allowbbcode`, `user_allowsmile`, `user_allowavatar`, `user_allow_pm`, `user_allow_viewonline`, `user_notify`, `user_notify_pm`, `user_popup_pm`, `user_rank`, `user_avatar`, `user_avatar_type`, `user_email`, `user_icq`, `user_website`, `user_from`, `user_from_flag`, `user_sig`, `user_sig_bbcode_uid`, `user_aim`, `user_yim`, `user_msnm`, `user_occ`, `user_interests`, `user_actkey`, `user_newpasswd`, `ct_postcount`, `ct_posttime`, `ct_searchcount`, `ct_searchtime`, `ct_mailcount`, `ct_pwreset`, `ct_unsucclogin`, `ct_logintry`, `user_sub_forum`, `user_split_cat`, `user_last_topic_title`, `user_sub_level_links`, `user_display_viewonline`, `user_birthday`, `user_next_birthday_greeting`, `user_gender`, `user_color_group`, `user_lastlogon`, `user_totaltime`, `user_totallogon`, `user_totalpages`, `user_calendar_display_open`, `user_calendar_header_cells`, `user_calendar_week_start`, `user_calendar_nb_row`, `user_calendar_birthday`, `user_calendar_forum`, `user_warnings`, `user_passwd_change`, `user_badlogin`, `user_blocktime`, `user_block_by`, `user_split_global_announce`, `user_split_announce`, `user_split_sticky`, `user_split_news`, `user_split_topic_split`, `user_absence`, `user_absence_mode`, `user_absence_text`, `user_announcement_date_display`, `user_announcement_display`, `user_announcement_display_forum`, `user_announcement_split`, `user_announcement_forum`, `user_use_ajax_preview`, `user_use_ajax_edit`) VALUES (-1,0,'Anonymous','',1669727832,0,0,1669727801,1323526841,0,0,0.00,NULL,'','',0,0,0,0,0,NULL,0,0,0,1,1,1,1,0,1,0,1,0,NULL,'',0,'','','','',NULL,'',NULL,'','','','','','','','0','0','0','1383551116',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1669727832,538945,10099,33208,0,7,1,5,1,1,0,1323526841,0,0,NULL,1,1,1,1,0,0,0,'',1,1,1,1,1,1,1),(2,1,'Hidden','32513bad826d6aa9bfef3e880c9bf7ce',1669727790,0,0,1669727762,1323526841,1,13,0.00,1,'english','D d M, Y g:i a',0,0,1411974803,0,0,NULL,1,1,0,0,1,1,1,1,1,0,1,1,1,'16579154544ee37c00ea82e.jpg',1,'Nobody@cares.biz','','http://1chna.ru','sine loco','canada.gif','Ð¢Ð¾Ð»ÐºÐ½ÑƒÐ»Ð¸, ÑƒÐ¿Ð°Ð»Ð°... Ð¿Ð¾Ð´Ð½ÑÐ»Ð°ÑÑŒ, Ð¿Ð¾Ð¿Ñ€Ð°Ð²Ð¸Ð»Ð° ÐºÐ¾Ñ€Ð¾Ð½Ñƒ Ð¸ Ð¿Ð¾ÑˆÐ»Ð° Ð´Ð°Ð»ÑŒÑˆÐµ\r\n[img:5c2f53119c]http://1chna.ru/forum/files/223ee8f446c3.jpg[/img:5c2f53119c]','5c2f53119c','','','','Ð£ÑÐ¸Ð»ÐµÐ½Ð½Ð¾ Ð²Ð¿Ð°Ñ…Ð¸Ð²Ð°ÑŽÑ‰Ð¸Ð¹','Ð–Ð¸Ð·Ð½ÑŒ, ÑÐ·Ñ‹Ñ‡ÐµÑÑ‚Ð²Ð¾, Ð¹Ð¾Ð³Ð°, ÑÐºÐ°Ð¹Ð´Ð°Ð²Ð¸Ð½Ð³, Ð°Ð»ÑŒÐ¿Ð¸Ð½Ð¸Ð·Ð¼, street racing, Ñ…Ð¾Ð»Ð¾Ð´Ð½Ð¾Ðµ Ð¾Ñ€ÑƒÐ¶Ð¸Ðµ','','','0','0','1','1371721562',0,0,NULL,0,1,1,1,2,2,-43209,2023,2,1,1669727762,63558,108,2803,0,7,1,5,1,1,20,-9999,0,0,NULL,1,1,1,1,0,0,2,'',1,1,1,1,1,1,1),(3,1,'Ð’Ð¸Ñ‚Ð¸ÐµÐ²Ð°Ñ‚Ñ‹Ð¹','32513bad826d6aa9bfef3e880c9bf7ce',1324136015,-1,0,1323705504,1323529266,0,12,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'1195240604ee37c7572a6e.gif',1,'Mother@north.net','','','','norway.gif','','','','','','','','',NULL,'2','1324136001','1','1323540361',0,0,0,0,1,1,1,2,2,-102586,2012,1,0,1324135520,3045,13,243,0,7,1,5,1,1,0,-9999,0,0,NULL,1,1,1,1,0,0,0,'',1,1,1,1,1,1,1),(4,1,'INSIDESTEP','32513bad826d6aa9bfef3e880c9bf7ce',1328528157,-1,0,1324227360,1323533881,0,12,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,3,'190741944ee3876bbdd9d.gif',1,'gainmanager@mail.ru','','','','sweden.gif','','','','','','','','',NULL,'2','1324227222','1','1323538168',0,0,NULL,0,1,1,1,2,2,6395,2012,1,0,1328528072,4167,14,242,0,7,1,5,1,1,0,-9999,0,0,NULL,1,1,1,1,0,0,0,'',1,1,1,1,1,1,1),(5,1,'Hyperion','72c8f46d940fba9bcf5c78b72aff21e3',1323686100,-1,0,1323630260,1323536382,0,9,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'17375124554ee3917bef68e.jpg',1,'syshinin8@mail.ru','89159809459','http://my.mail.ru/mail/syshinin8/','Ð¯Ñ€Ð¾ÑÐ»Ð°Ð²ÑÐºÐ°Ñ Ð¾Ð±Ð»., Ð Ñ‹Ð±Ð¸Ð½ÑÐº','russia.gif','','','','','','ÐœÐµÐ½ÐµÐ´Ð¶ÐµÑ€','Ð’Ð¾Ð¶Ñƒ Ð¼Ð°ÑˆÐ¸Ð½Ñ‹','',NULL,'2','1323686266','1','1323536783',0,0,NULL,0,1,1,1,2,2,5465,2011,1,0,1323685986,2067,8,109,0,7,1,5,1,1,2,1323536382,0,0,NULL,1,1,1,1,0,0,0,'',1,1,1,1,1,1,1),(6,1,'relikk','72c8f46d940fba9bcf5c78b72aff21e3',1323539942,-1,0,1323539861,1323539850,0,1,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,4,'',0,'nervs@gehsterben.org','','','','blank.gif','','','','','','','','',NULL,'2','1323540128','1','1323539939',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1323539886,56,2,7,0,7,1,5,1,1,100,1323539850,0,0,NULL,1,1,1,1,0,0,0,'',1,1,1,1,1,1,1),(7,1,'Bulbaset','72c8f46d940fba9bcf5c78b72aff21e3',1323685970,-1,0,1323631110,1323540846,0,4,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'3881029174ee3a35e7498e.jpg',1,'bulblight2001@hotmail.com','','','ÐœÐ¾ÑÐºÐ²Ð°, Ð Ð¤','panama.gif','','','','','','Ð’Ñ‹Ñ€Ð°Ñ‰Ð¸Ð²Ð°Ð½Ð¸Ðµ Ñ†Ð²ÐµÑ‚Ð¾Ð²','ÐÐµ ÑÐ»ÑƒÐ¶Ñƒ, ÐºÐ°ÐºÐ°Ñ Ð°Ñ€Ð¼Ð¸Ñ???','',NULL,'2','1323686149','1','1323540912',0,0,NULL,0,1,1,1,2,2,8204,2012,1,0,1323685866,774,5,53,0,7,1,5,1,1,1,1323540846,0,0,NULL,1,1,1,1,0,0,0,'',1,1,1,1,1,1,1),(8,1,'nouvElle','72c8f46d940fba9bcf5c78b72aff21e3',1323687409,-1,0,1323686318,1323605554,0,7,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'6458278804ee49f26d0a5d.jpg',1,'Nouv@gmail.com','','','London, Ð´Ð¾Ð¶Ð´Ð»Ð¸Ð²Ð°Ñ Ð´Ñ‹Ñ€Ñ‘Ð½ÐºÐ°','uk.gif','Emotional Cripple [img:d7847ac4bb]http://1chna.ru/forum/files/av-18720.png[/img:d7847ac4bb]\nP.S. Ð¯ Ñ‚Ñ€Ð°Ð½ÑÐ¸Ðº, ÐŸÐ Ð£Ð¤ÐžÐ’ Ð½Ðµ Ð±ÑƒÐ´ÐµÑ‚!','d7847ac4bb','','','','ÑÐ¿ÐµÑ†Ð¸Ð°Ð»Ð¸ÑÑ‚ Ð¾Ñ‚Ð´ÐµÐ»Ð° Ð¿Ñ€Ð¾Ð´Ð°Ð¶','Ð½ÑŒÑŽ-Ð²ÑÐ¹Ð², Ð±Ð¾ÑÑÐ°-Ð½Ð¾Ð²Ð°, Ð»Ð°ÑƒÐ½Ð¶','',NULL,'2','1323686497','0','0',0,0,NULL,0,1,1,1,2,2,7415,2012,2,0,1323686952,2220,8,108,0,7,1,5,1,1,0,1323605554,0,0,NULL,1,1,1,1,0,0,0,'',1,1,1,1,1,1,1),(9,1,'kittypet','72c8f46d940fba9bcf5c78b72aff21e3',1324208233,-1,0,1323629060,1323613541,0,5,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'14402668364ee4bdf5b4117.gif',1,'kitty@nowhere.net','78634892','','Me fro Pakista!','pakistan.gif','See it as half empty or half full, I don\'t care. But whatever half is left better be better then the half that is gone. #throwJan-June. :emo:','c2945a0f28','','','','EmocoreKid','Ð“Ð¸Ñ‚Ð°Ñ€Ð½Ñ‹Ðµ ÐºÐ²Ð¸Ð½Ñ‚Ñ‹','',NULL,'2','1324208365','1','1323629040',0,0,NULL,0,1,1,1,2,2,-25785,2012,1,0,1324207736,1280,6,93,0,7,1,5,1,1,0,1323613541,0,0,NULL,1,1,1,1,0,0,0,'',1,1,1,1,1,1,1),(10,1,'LuxManager','72c8f46d940fba9bcf5c78b72aff21e3',1324207269,-1,0,1323631195,1323626185,0,6,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'3537953064ee4eeed3e6a8.gif',1,'Luxor@mail.kz','','','','uk.gif','[size=9:c11ddc157d][color=cyan:c11ddc157d][i:c11ddc157d]Ð§Ñ‚Ð¾ Ñ‚Ð°ÐºÐ¾Ðµ Ð›ÑŽÐ±Ð¾Ð²ÑŒ?\nÐžÐ½Ð° Ð½Ð°Ñ Ð¾Ð±ÑŠÐµÐ´Ð¸Ð½ÑÐµÑ‚ Ð¸ Ð´ÐµÐ»Ð°ÐµÑ‚ Ñ‚Ð°ÐºÐ¸Ð¼Ð¸ Ñ€Ð°Ð·Ð½Ñ‹Ð¼Ð¸.\nÐ­Ñ‚Ð¾ Ð´ÑƒÑ€Ð¼Ð°Ð½, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ Ð¾ÐºÑƒÑ‚Ñ‹Ð²Ð°ÐµÑ‚ Ñ‚Ð²Ð¾Ð¹ Ñ€Ð°Ð·ÑƒÐ¼, Ð»Ð¸ÑˆÐ°Ñ Ñ€Ð°ÑÑÑƒÐ´ÐºÐ°. Ð’ÑÐµÐ»ÐµÐ½Ð½Ð°Ñ, ÐºÐ°Ðº Ð¼Ð¸Ñ€ Ð´Ñ€ÑƒÐ³Ð¾Ð³Ð¾ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ°... Ð·Ð°Ñ‚ÑÐ³Ð¸Ð²Ð°ÐµÑ‚ Ñ‚ÐµÐ±Ñ, Ð° Ñ‚Ñ‹ Ð½Ðµ Ð¿Ñ€Ð¾Ñ‚Ð¸Ð²Ð¸ÑˆÑŒÑÑ. ÐÐ°Ð¿Ñ€Ð¾Ñ‚Ð¸Ð², ÑÐ°Ð¼ Ð±ÐµÐ¶Ð¸ÑˆÑŒ Ð² ÑÑ‚Ñƒ ÐºÑ€Ð¾Ð¼ÐµÑˆÐ½ÑƒÑŽ Ñ‚ÐµÐ¼Ð½Ð¾Ñ‚Ñƒ, Ð² ÐºÐ¾Ñ‚Ð¾Ñ€Ð¾Ð¹ Ð½ÐµÑ‚ Ð±ÑƒÐ´ÑƒÑ‰ÐµÐ³Ð¾ Ð¸ Ð¿Ñ€Ð¾ÑˆÐ»Ð¾Ð³Ð¾. Ð’ Ð½ÐµÐ¹ Ñ‚Ñ‹ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑˆÑŒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð¼Ð³Ð½Ð¾Ð²ÐµÐ½ÑŒÑÐ¼Ð¸, ÐºÐ¾Ð³Ð´Ð° Ð²Ñ‹ ÑÑ‚Ð°Ð»ÐºÐ¸Ð²Ð°ÐµÑ‚ÐµÑÑŒ Ð²Ð·Ð³Ð»ÑÐ´Ð°Ð¼Ð¸, ÐºÐ¾Ð³Ð´Ð° ÑÐ¾Ð¿Ñ€Ð¸ÐºÐ°ÑÐ°ÐµÑ‚ÐµÑÑŒ Ð³ÑƒÐ±Ð°Ð¼Ð¸, ÐºÐ¾Ð³Ð´Ð° ÐºÐ°ÑÐ°ÐµÑ‚ÐµÑÑŒ Ð´Ñ€ÑƒÐ³ Ð´Ñ€ÑƒÐ³Ð°. Ð˜ Ð´Ð»Ñ Ñ‚ÐµÐ±Ñ Ð±Ð¾Ð»ÑŒÑˆÐµ Ð½Ð¸Ñ‡ÐµÐ³Ð¾ Ð½ÐµÑ‚...\nÐ•ÑÐ»Ð¸ Ð¶Ðµ Ð¾Ð½ Ð¾Ñ‚Ð²Ð¾Ñ€Ð°Ñ‡Ð¸Ð²Ð°ÐµÑ‚ÑÑ Ð¾Ñ‚ Ñ‚ÐµÐ±Ñ, Ñ‚Ð¾ Ñ‚Ñ‹ Ñ Ð¾Ð³Ð»ÑƒÑˆÐ°ÑŽÑ‰Ð¸Ð¼ Ð³Ñ€Ð¾Ñ…Ð¾Ñ‚Ð¾Ð¼ Ð¿Ð°Ð´Ð°ÐµÑˆÑŒ Ð½Ð° Ð´Ð½Ð¾. Ð’ ÑÑ‚Ð¾Ð¹ Ð¿Ñ€Ð¾Ð¿Ð°ÑÑ‚Ð¸ Ñ‚Ð°ÐºÐ¸Ðµ Ð¶Ðµ, ÐºÐ°Ðº Ñ‚Ñ‹. Ð˜ Ð´Ð°Ð»ÐµÐºÐ¾ Ð½Ðµ ÐºÐ°Ð¶Ð´Ñ‹Ð¹ ÑÐ¿Ð¾ÑÐ¾Ð±ÐµÐ½ Ð¸Ð· Ð½ÐµÐµ Ð²Ñ‹Ð±Ñ€Ð°Ñ‚ÑŒÑÑ.[/i:c11ddc157d][/color:c11ddc157d][/size:c11ddc157d]','c11ddc157d','','','','','SEO','',NULL,'2','1324207149','3','1323626888',0,0,NULL,0,1,1,1,2,2,3482,2012,1,0,1324206919,1408,6,106,0,7,1,5,1,1,0,1323626185,0,0,NULL,1,1,1,1,0,0,0,'',1,1,1,1,1,1,1),(11,1,'Ð”Ð¬Ð¯Ð’ÐžÐ›','72c8f46d940fba9bcf5c78b72aff21e3',1324207727,-1,0,1323712333,1323684249,0,6,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'13728993454ee5e3ceea46a.jpg',1,'bella-10_10@mail.ru','','','Ð‘Ð°Ð»Ð°ÑˆÐ¸Ñ…Ð°, ÑƒÐ». Ð—Ð²Ñ‘Ð·Ð´Ð½Ð°Ñ','russia.gif','ÐÐ¸ÐºÐ¾Ð¼Ñƒ Ð½Ðµ Ð½ÑƒÐ¶Ð½Ð° Ð¸ Ð¶Ð¸Ð²Ñƒ Ð´Ð»Ñ ÑÐµÐ±Ñ,Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ‚Ñ‹, Ð”ÐµÐ½Ð¸ÑÐ¸Ðº, Ð¼ÐµÐ½Ñ Ð¿Ð¾Ð½Ð¸Ð¼Ð°ÐµÑˆÑŒ...','b9c47302bb','','','','Ñ„ÑƒÑ€Ñ€Ð¸ Ñ‚Ð²Ð¾Ð¸Ñ… Ð³Ñ€Ñ‘Ð·','Ð™Ð¸Ñ„Ñ„ Ð¸ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð¹Ð¸Ñ„Ñ„!','',NULL,'2','1324207607','1','1323684873',0,0,NULL,0,1,1,1,2,2,9336,2012,2,0,1324207286,8317,6,137,0,7,1,5,1,1,0,1323684249,0,0,NULL,1,1,1,1,0,0,0,'',1,1,1,1,1,1,1),(12,1,'&lt;headache&gt;','72c8f46d940fba9bcf5c78b72aff21e3',1324136704,-4,0,1324135512,1324131249,0,2,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'17692119134eeca4ce4f834.png',1,'Coding@hex.co.cc','425671850','','Ð¡Ð»Ð°Ð²ÑÐ½ÑÐº','ukraine.gif','ÐœÐ¾Ñ ÐºÐ¾Ð¿Ð¸Ð»Ð¾Ñ‡ÐºÐ°\n[flash width=256 height=185:2920cf41c6]http://1chna.ru/forum/files/CA0LUFSH.swf[/flash:2920cf41c6]','2920cf41c6','','','','ÐŸÑÐ¸Ñ…Ð¾Ð»Ð¾Ð³Ð¸Ñ','Ð¯ Ð°Ð±ÑÐ¾Ð»ÑŽÑ‚Ð½Ð¾ Ð¾Ð±Ñ‹Ñ‡Ð½Ñ‹Ð¹ Ñ‡ÐµÐ»Ð¾Ð²ÐµÐº ÑÐ¾ ÑÐ²Ð¾Ð¸Ð¼Ð¸ Ð¿Ñ€Ð¾Ð±Ð»ÐµÐ¼Ð°Ð¼Ð¸ Ð¸ ÑÐ¾ ÑÐ²Ð¾Ð¸Ð¼Ð¸ Ñ‚Ð°Ñ€Ð°ÐºÐ°Ð½Ð°Ð¼Ð¸ Ð² Ð³Ð¾Ð»Ð¾Ð²Ðµ','',NULL,'2','1324135495','1','1324135306',0,0,NULL,0,1,1,1,2,2,9009,2012,2,0,1324136023,2677,3,186,0,7,1,5,1,1,0,1324131249,0,0,NULL,1,1,1,1,0,1,1,'ÐŸÐ¾Ð»Ð¾Ð¶Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ðµ ÑÐ¼Ð¾Ñ†Ð¸Ð¸ - ÑÑ‚Ð¾ ÑÐ¼Ð¾Ñ†Ð¸Ð¸, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð²Ð¾Ð·Ð½Ð¸ÐºÐ°ÑŽÑ‚, ÐµÑÐ»Ð¸ Ð½Ð° Ð²ÑÑ‘ Ð¿Ð¾Ð»Ð¾Ð¶Ð¸Ñ‚ÑŒ... :)',1,1,1,1,1,1,1),(13,1,'xzxzxz','c6b5a48a9ecfe4730b51a91809688f3c',0,0,0,0,1324222851,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'test@yopmail.com','','','','blank.gif','','','','','','','','',NULL,'0','0','0','0',0,0,NULL,1,1,1,1,2,2,999999,0,0,0,0,0,0,0,0,7,1,5,1,1,101,1324222851,1,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(14,1,'anonimoys','5dfcf276c46a865b5a133fe3f1baf8f1',1324325384,-1,0,1324228586,1324224682,0,1,4.00,1,'russian','D M d, Y g:i a',0,0,1324224962,0,0,NULL,0,1,0,1,1,1,1,1,1,1,1,1,0,'10344903624eef988db58ac.png',1,'anonimoys@2ch.so','','','','niger.gif','','','','','','','','',NULL,'2','1324227062','3','1324324506',0,0,NULL,1,1,1,1,2,2,-6575,2012,1,0,1324324105,3774,3,158,0,7,1,5,1,1,0,1324224682,3,0,NULL,1,1,1,1,0,1,3,'',1,1,1,1,1,1,1),(15,1,'Tezcatlipoca','32513bad826d6aa9bfef3e880c9bf7ce',1333281863,-1,0,1333194239,1333191488,1,1,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,0,1,1,0,0,0,0,5,'15.gif',1,'Mortem@animalum.hell','','','','blank.gif','','','','','','','','',NULL,'0','0','2','1333193372',0,0,NULL,0,1,1,1,2,2,999999,0,0,1,1333281456,2182,2,74,0,7,1,5,1,1,0,-9999,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(16,1,'Proserpine','32513bad826d6aa9bfef3e880c9bf7ce',1333285263,5,18,1333281873,1333281582,0,1,4.00,1,'russian','D d M, Y g:i a',0,0,0,0,0,NULL,1,0,0,1,1,1,1,1,1,1,0,0,0,'16.jpg',1,'NijÐ°@supay.hell','','','','blank.gif','','','','','','','','user_actkey',NULL,'2','1333283749','0','0',0,0,NULL,0,1,1,1,2,2,999999,0,2,0,1333281873,3390,1,13,0,7,1,5,1,1,0,-9999,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(17,1,'Mailw0rm','3bb1cb298f737e7b0c3dd3c4fbd93296',0,0,0,0,1371557147,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'lol@lol.ru','','','','blank.gif','','','','','','','','',NULL,'0','0','0','0',0,0,0,0,1,1,1,2,2,999999,0,0,0,0,0,0,0,0,7,1,5,1,1,0,1371557147,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(18,1,'aslan55','3fc0a7acf087f549ac2b266baf94b8b1',1371559046,-1,0,1371558508,1371558438,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,0,0,0,0,0,1,1,1,0,0,0,0,'',0,'maxxtro58@yandex.ru','','','Ð›Ð°Ñ‚Ð²Ð¸Ñ','blank.gif','','','','','','','','',NULL,'0','0','0','0',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1371558509,538,1,7,0,7,1,5,1,1,0,1371558438,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(19,1,'samramy','ebce68c90046ff5025f1938fec72a21f',1371723559,-1,0,1371721076,1371558917,0,1,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,4,'19.gif',1,'supernov@ukr.net','','','','blank.gif','','','','','','','','',NULL,'2','1371723720','1','1371723209',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1371723153,1943,2,41,0,7,1,5,1,1,0,1371558917,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(20,1,'Ð°Ð½Ð´Ñ€ÐµÐ¹','6b4306aa73e5abcddd4494e86b1d7962',0,0,0,0,1371562702,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'work380@mail.ru','','','','blank.gif','','','','','','','','',NULL,'0','0','0','0',0,0,NULL,1,1,1,1,2,2,999999,0,1,0,0,0,0,0,0,7,1,5,1,1,0,1371562702,2,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(21,1,'warstyle','2a49f4219490063fc79217dabede6168',1371562833,5,18,1371562804,1371562754,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,0,0,1,1,0,'',0,'warstyle@bobmail.info','','','','blank.gif','','','','','','','','',NULL,'0','0','0','0',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1371562804,29,1,5,0,7,1,5,1,1,0,1371562754,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(22,1,'Ivan','7e5c595f018ba30667e4ec59c4d427b5',1371979483,-1,0,1371978942,1371564954,0,1,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,0,1,3,'22.gif',1,'gop933@gmail.com','','','','blank.gif','','','','','','','','','','2','1371979538','1','1371978870',0,0,0,0,1,1,1,2,2,999999,0,1,0,1371979293,2894,3,48,0,7,1,5,1,1,0,-9999,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(23,1,'Edix55','5f212b0f9d96cd3675e169a62dc06f2b',1371566166,-1,0,1371565963,1371565943,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,0,0,1,1,0,'',0,'f2502102@rmqkr.net','','','','blank.gif','','','','','','','','',NULL,'0','0','0','0',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1371565963,203,1,7,0,7,1,5,1,1,0,1371565943,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(24,1,'ceregamix2013','ef98aa2805f3b5d814b3b0515742c960',1371566427,5,18,1371566286,1371566264,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'ceregamix2012@mail.ru','','','','belarus.gif','','','','','','','','',NULL,'0','0','2','1371566427',0,0,NULL,0,1,1,1,2,2,9540,2014,1,0,1371566286,141,1,13,0,7,1,5,1,1,0,1371566264,0,0,NULL,1,1,1,1,0,1,1,'',1,1,1,1,1,1,1),(25,1,'Ali','dbb987c1046151555f09d4e3fe802be9',1371571153,5,18,1371568020,1371567955,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,1371571143,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'medet.mailov@gmail.com','','','','blank.gif','','','','','','','','',NULL,'0','0','0','0',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1371571143,25,2,8,0,7,1,5,1,1,0,1371567955,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(26,1,'Kirillinchuk','8c4684900cb1bdcbcfb4c8e48d391b38',1371574192,5,18,1371574068,1371573982,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'kirillinchuk@gmail.com','','http://yagotin-city.com.ua/','Ð£ÐºÑ€Ð°Ð¸Ð½Ð°','ukraine.gif','','','','','','ÑÐ°Ð¹Ñ‚ Ð³Ð¾Ñ€Ð¾Ð´Ð° Ð¯Ð³Ð¾Ñ‚Ð¸Ð½','','',NULL,'0','0','0','0',0,0,NULL,0,1,1,1,2,2,5707,2013,1,0,1371574068,124,1,4,0,7,1,5,1,1,0,1371573982,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(27,1,'Ð’Ð»Ð°Ð´Ð¸Ð¼Ð¸Ñ€','cc012ee40f91655046fa18209469b5e8',0,0,0,0,1371578030,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'wowanidze@mail.ru','','','','blank.gif','','','','','','','','',NULL,'0','0','0','0',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,0,0,0,0,0,7,1,5,1,1,0,1371578030,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(28,1,'imperso','3d3c34710bd901fb700544f67f8729e2',1371579283,5,18,1371579162,1371579144,0,1,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'subaru_imperator@mail.ru','','','','blank.gif','','','','','','','','',NULL,'2','1371579423','0','0',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1371579162,121,1,10,0,7,1,5,1,1,0,1371579144,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(29,1,'f2516075@rmqkr.net','769c4d07d3ca5d1dbeaae9df0b8b5ede',0,0,0,0,1371583238,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'f2516075@rmqkr.net','','','','blank.gif','','','','','','','','',NULL,'0','0','0','0',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,0,0,0,0,0,7,1,5,1,1,0,1371583238,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(30,1,'wadis','a67a8264c4a71244345c3ae096f5fe0f',1371587938,5,18,1371587866,1371587482,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'2zemec85@mail.ru','','','','belarus.gif','','','','','','','','',NULL,'0','0','0','0',0,0,NULL,0,1,1,1,2,2,999999,0,1,0,1371587866,72,1,4,0,7,1,5,1,1,0,1371587482,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(31,1,'Antonina','f5c4b4d07e1d027727542c077c84eeb9',1371616663,5,0,1371616109,1371616075,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'acoleada@gmail.com','','','','blank.gif','','','','','','','','',NULL,'0','0','0','0',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1371616109,554,1,8,0,7,1,5,1,1,0,1371616075,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(32,1,'tolijn74','0740dda71f832b07086e3161f6af71c0',1371645804,-1,0,1371645557,1371644795,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,0,0,0,0,0,1,1,1,0,0,0,0,'',0,'tolijn74@gmail.com','','','','russia.gif','','','','','','','','',NULL,'0','0','0','0',0,0,NULL,0,1,1,1,2,2,1559,2014,1,0,1371645670,780,2,12,0,7,1,5,1,1,0,1371644795,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(33,1,'kirillalmaty','d0a3198b25dcb4c1f1cc4b4440cbf568',1371663557,5,18,1371661643,1371661620,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'kirillalmaty@yandex.kz','','','','blank.gif','','','','','','','','',NULL,'0','0','1','1371663561',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1371661643,1914,1,8,0,7,1,5,1,1,0,1371661620,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(34,1,'Ð“Ð°Ð»Ð¸Ð½Ð°','47c4c43b5fca448d4c285734ecb8d0cf',1371673518,-9,0,1371672112,1371671726,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'Aleinik.gali@yandex.by','','','','blank.gif','','','','','','','','',NULL,'0','0','1','1371673130',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1371672112,1406,1,52,0,7,1,5,1,1,0,1371671726,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(35,1,'vlad5987','d195f8c28b316c1fd4623208dd54491a',1371708542,5,0,1371708326,1371708308,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'vlad5987@list.ru','','','','blank.gif','','','','','','','','',NULL,'0','0','1','1371708359',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1371708326,216,1,11,0,7,1,5,1,1,0,1371708308,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(36,1,'lider331333','16ceca00f6a7ba298bce1da95ec1e249',0,0,0,0,1371712520,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,0,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'lider331333@yandex.ru','','','','blank.gif','','','','','','','','',NULL,'0','0','0','0',0,0,NULL,1,1,1,1,2,2,999999,0,0,0,0,0,0,0,0,7,1,5,1,1,0,1371712520,1,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1),(37,1,'bitchy8','fc2d169cbb6e0e54b5cdc7a64e0d8122',1371712677,5,18,1371712644,1371712622,0,0,4.00,1,'russian','D M d, Y g:i a',0,0,1371712644,0,0,NULL,0,1,0,1,1,1,1,1,1,0,1,1,0,'',0,'ivanov.andrey50@gmail.com','','','Ð Ð¾ÑÑÐ¸Ñ','blank.gif','','','ÑƒÐ».ÐšÐ¾Ð»ÑŒÑ†ÐµÐ²Ð°Ñ','','','','','',NULL,'0','0','1','1371712675',0,0,NULL,0,1,1,1,2,2,999999,0,0,0,1371712644,33,1,7,0,7,1,5,1,1,0,1371712622,0,0,NULL,1,1,1,1,0,0,1,'',1,1,1,1,1,1,1);
/*!40000 ALTER TABLE `phpbb_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_vote_desc`
--

DROP TABLE IF EXISTS `phpbb_vote_desc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_vote_desc` (
  `vote_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` mediumint(8) unsigned NOT NULL,
  `vote_text` text NOT NULL,
  `vote_start` int(11) NOT NULL,
  `vote_length` int(11) NOT NULL,
  PRIMARY KEY (`vote_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_vote_desc`
--

LOCK TABLES `phpbb_vote_desc` WRITE;
/*!40000 ALTER TABLE `phpbb_vote_desc` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_vote_desc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_vote_results`
--

DROP TABLE IF EXISTS `phpbb_vote_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_vote_results` (
  `vote_id` mediumint(8) unsigned NOT NULL,
  `vote_option_id` tinyint(4) unsigned NOT NULL,
  `vote_option_text` varchar(255) NOT NULL,
  `vote_result` int(11) NOT NULL,
  KEY `vote_option_id` (`vote_option_id`),
  KEY `vote_id` (`vote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_vote_results`
--

LOCK TABLES `phpbb_vote_results` WRITE;
/*!40000 ALTER TABLE `phpbb_vote_results` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_vote_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_vote_voters`
--

DROP TABLE IF EXISTS `phpbb_vote_voters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_vote_voters` (
  `vote_id` mediumint(8) unsigned NOT NULL,
  `vote_user_id` mediumint(8) NOT NULL,
  `vote_user_ip` char(8) NOT NULL,
  KEY `vote_id` (`vote_id`),
  KEY `vote_user_id` (`vote_user_id`),
  KEY `vote_user_ip` (`vote_user_ip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_vote_voters`
--

LOCK TABLES `phpbb_vote_voters` WRITE;
/*!40000 ALTER TABLE `phpbb_vote_voters` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_vote_voters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpbb_words`
--

DROP TABLE IF EXISTS `phpbb_words`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpbb_words` (
  `word_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `word` char(100) NOT NULL,
  `replacement` char(100) NOT NULL,
  PRIMARY KEY (`word_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpbb_words`
--

LOCK TABLES `phpbb_words` WRITE;
/*!40000 ALTER TABLE `phpbb_words` DISABLE KEYS */;
/*!40000 ALTER TABLE `phpbb_words` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'b7_9629569_erosite'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-29 16:17:53
