#SXD20|20009|50739|50640|2022.11.09 14:15:39|1chan|0|3|37|
#TA 1chan_category`0`0|1chan_comment`25`5872|1chan_post`12`2448
#EOH

#	TC`1chan_category`utf8mb4_general_ci	;
CREATE TABLE `1chan_category` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `public` tinyint(1) NOT NULL DEFAULT '0',
  `pos` int(32) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `posts` int(32) NOT NULL DEFAULT '0',
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`(127)),
  KEY `code` (`code`(127))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4	;
#	TC`1chan_comment`utf8mb4_general_ci	;
CREATE TABLE `1chan_comment` (
  `id` int(32) NOT NULL,
  `post_id` int(32) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `author` varchar(32) DEFAULT 'anonymous',
  `created_at` int(32) NOT NULL,
  `text` text NOT NULL,
  `special_comment` text,
  PRIMARY KEY (`id`,`post_id`),
  KEY `ip_index` (`ip`(16))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4	;
#	TD`1chan_comment`utf8mb4_general_ci	;
INSERT INTO `1chan_comment` VALUES 
(3,2,'185.220.101.51','anonymous',1665746637,'\n						<p>Удваиваю струю</p>\n',\N),
(8,2,'5.104.57.114','anonymous',1665850499,'\n						<p><a href=\"http://1chna.ru/news/res/2/#3\" class=\"js-cross-link\"\n						name=\"news/3\">&gt;&gt;3</a><br />\n						<strong>Утраиваю</strong></p>\n',\N),
(9,2,'5.104.57.114','anonymous',1665850601,'\n						<p><a href=\"https://libertycity.ru/uploads/posts/2022-10/1665685968_688.jpg\"\n						rel=\"nofollow\">Тест</a></p>\n',\N),
(12,10,'176.59.56.218','anonymous',1666066792,'\n						<p>Удваиваю струю в еблет шмария</p>\n',\N),
(14,13,'51.158.171.11','anonymous',1666094282,'\n						<p>Чтоб срать можно было либо с\n						Яндекс.Браузера или Атома, либо с <s>анальным\n						зондом</s> российским сертификатом в\n						системе.</p>\n',\N),
(15,6,'176.213.135.140','anonymous',1666156151,'\n						<p>хттпссссссссссс</p>\n',\N),
(16,13,'45.95.169.255','anonymous',1666197409,'\n						<p>В очко своё поставь</p>\n',\N),
(17,13,'176.213.135.141','anonymous',1666244863,'\n						<p><a href=\"http://1chna.ru/news/res/13/#16\" class=\"js-cross-link\"\n						name=\"news/16\">&gt;&gt;16</a><br />\n						Твоё что ль?</p>\n',\N),
(19,18,'176.213.135.181','anonymous',1666331379,'\n						<p>очередная параша смегмы?</p>\n',\N),
(20,18,'213.251.251.159','anonymous',1666354805,'\n						<p><a href=\"http://1chna.ru/news/res/18/#19\" class=\"js-cross-link\"\n						name=\"news/19\">&gt;&gt;19</a><br />\n						Ссакса))</p>\n',\N),
(22,21,'213.251.251.47','anonymous',1666591700,'\n						<p>Пидорнутые пидорнухи</p>\n',\N),
(23,18,'213.251.251.47','xmpp.org',1666678547,'\n						<p>Для пидорнутых обиженок</p>\n',\N),
(24,10,'176.213.135.154','anonymous',1666847024,'\n						<p>Разные два языка, но на обоих матом\n						посылают шмария.</p>\n',\N),
(26,5,'217.107.126.148','samechan.org',1666893103,'						<p><a href=\"itms-services://?action=download-manifest&amp;url=http://1chna.ru/alienblue.2.8.2.patched.plist\" rel=\"nofollow\">TES­T APP</a></p>\r\n',''),
(1,25,'217.107.126.148','anonymous',1666901689,'\n						<p>гет</p>\n',\N),
(35,21,'213.251.251.159','anonymous',1667806275,'\n						<p><a href=\"http://1chna.ru/news/res/21/#21\" class=\"js-cross-link\"\n						name=\"news/21\">&gt;&gt;21</a><br />\n						Чё не открывает?</p>\n',\N),
(34,11,'213.251.251.159','anonymous',1667217577,'\n						<p><a href=\"http://1chna.ru/2006eAthena.zip\"\n						rel=\"nofollow\">http://1chna.ru/2006eAthena.zip</a><br />\n						<a href=\"http://1chna.ru/ruAthena-mirror.zip\"\n						rel=\"nofollow\">http://1chna.ru/…a-mirror.zip</a></p>\n',\N),
(33,13,'79.139.185.219','anonymous',1666985451,'\n						<p>Давай по паспорту</p>\n',\N),
(32,10,'213.251.251.159','anonymous',1666939298,'\n						<p><a href=\"http://1chna.ru/news/res/10/#24\" class=\"js-cross-link\"\n						name=\"news/24\">&gt;&gt;24</a><br />\n						Тебя что ль?</p>\n',\N),
(31,25,'217.107.126.148','anonymous',1666905742,'\n						<p><a href=\"http://1chna.ru/news/res/25/#30\" class=\"js-cross-link\"\n						name=\"news/30\">&gt;&gt;30</a><br />\n						:deb:</p>\n',\N),
(30,25,'217.107.126.148','anonymous',1666905189,'\n						<p><a href=\"http://1chna.ru/news/res/5/#27\" class=\"js-cross-link\"\n						name=\"news/27\">&gt;&gt;27</a> <a href=\"http://1chna.ru/news/res/2/#28\"\n						class=\"js-cross-link\" name=\"news/28\">&gt;&gt;28</a><br />\n						ОРУ</p>\n',\N),
(26,2,'217.107.126.148','anonymous',1666902222,'\n						<p>Удваиваю струю</p>\n',\N),
(27,5,'217.107.126.148','anonymous',1666902262,'\n						<p>Лол <a href=\"http://1chna.ru/news/res/2/#26\" class=\"js-cross-link\"\n						name=\"news/26\">&gt;&gt;26</a></p>\n',\N),
(28,2,'217.107.126.148','anonymous',1666902288,'\n						<p>Лол <a href=\"http://1chna.ru/news/res/2/#26\" class=\"js-cross-link\"\n						name=\"news/26\">&gt;&gt;26</a></p>\n',\N),
(29,25,'217.107.126.148','anonymous',1666902339,'\n						<p>Эй!</p>\n',\N)	;
#	TC`1chan_post`utf8mb4_general_ci	;
CREATE TABLE `1chan_post` (
  `id` int(32) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `author` varchar(32) DEFAULT 'anonymous',
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `pinned` tinyint(1) NOT NULL DEFAULT '0',
  `rated` tinyint(1) DEFAULT NULL,
  `closed` tinyint(1) NOT NULL DEFAULT '0',
  `rateable` tinyint(1) NOT NULL DEFAULT '1',
  `bumpable` tinyint(1) NOT NULL DEFAULT '1',
  `category` int(32) DEFAULT NULL,
  `created_at` int(32) NOT NULL,
  `updated_at` int(32) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `text_full` text NOT NULL,
  `rate` int(32) NOT NULL DEFAULT '0',
  `comments` int(32) NOT NULL DEFAULT '0',
  `special_comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hidden` (`hidden`,`rated`,`category`,`created_at`,`updated_at`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4	;
#	TD`1chan_post`utf8mb4_general_ci	;
INSERT INTO `1chan_post` VALUES 
(1,'185.38.142.120','olanet.ru',0,0,\N,0,1,1,0,1665746153,1665746153,'https://1chan.su/','Пррррррр','\n						<h1>Бульк</h1>\n','',-6,0,\N),
(2,'8.21.110.52','anonymous',0,0,\N,0,1,1,0,1665746224,1666902288,'','Обоссал смегму','\n						<p>Дежурно обоссал смегмомразь</p>\n','',-7,29,\N),
(4,'77.111.247.138','krautchan.net',0,0,\N,0,1,1,0,1665747179,1665747179,'','Мария','\n						<p>Открывайте рты.</p>\n','',-6,0,\N),
(5,'198.16.74.44','krautchan.net',0,0,\N,0,1,1,0,1665752736,1666902262,'https://t.me/muzLiwko/201','ТВАИ ХАЛОДНЫ ВCКЛЯТ КАК МОЛЬНИЯ','\n						<p>ВСПАМИНАЮ КАЖДЫ ДЕНЬ</p>\n','\n						<p>ТЫ МОИ СВЕТ И МОЯ ТЕНЬ</p>\n',8,2,\N),
(6,'185.220.101.22','anonymous',0,0,\N,0,1,1,0,1665815279,1666156151,'','Где он?','\n						<p>А где https? <img src=\"http://1chna.ru/img/desu.gif\" width=\"30\"\n						height=\"42\" alt=\"\" /></p>\n','',3,1,\N),
(7,'5.104.57.114','anonymous',0,0,\N,0,1,1,0,1665850274,1665850274,'','ПРРРРРРРРРРР БЛУЬК','\n						<p>ПОСРАЛ В КОЛЧНУ — НЕ СМЫЛ БАЧНУ</p>\n','',-3,0,\N),
(10,'176.213.135.175','xmpp.org',0,0,\N,0,1,1,0,1665983461,1666939298,'','Пссссссссссссссссс','\n						<p>Ссу на петушария</p>\n','',0,3,\N),
(11,'178.46.68.56','anonymous',0,0,\N,0,1,1,0,1666006833,1667217577,'','ПРРРРРРРРРРРР­РРРРРРРРРРРРРРРРРРРРРРРР БУЛЬК','\n						<p><strong>ПОСРАЛ В КОЛЧОК</strong></p>\n\n						<h1><strong>НЕ СМЫЛ БАЧОК</strong></h1>\n','',-1,1,\N),
(13,'51.158.171.11','anonymous',0,0,\N,0,1,1,0,1666094052,1666985451,'','Колчналик','\n						<p>Как идея, поставить российский ГОСТовский\n						TLS-сертификат от Минцифры? Вот это точно\n						всем жопу порвёт</p>\n','',0,4,\N),
(18,'194.190.149.118','anonymous',0,0,\N,0,1,1,0,1666305679,1666678547,'https://lainchan.ru','Новая борда','\n						<p><a href=\"https://lainchan.ru\" rel=\"nofollow\">https://lainchan.ru</a></p>\n','',0,3,\N),
(21,'81.177.127.15','anonymous',0,0,\N,0,1,1,0,1666412109,1667806275,'https://cyber2ch.com/rf','Самая новая борда!','\n						<p><a href=\"https://cyber2ch.com/rf\"\n						rel=\"nofollow\">https://cyber2ch.com/rf</a></p>\n','',0,2,\N),
(25,'213.251.251.159','anonymous',0,0,\N,0,1,1,0,1666857147,1666905742,'https://www.youtube.com/watch?v=KOhH1GdOd_w','Муть, а вот','\n						<p><a href=\"https://www.youtube.com/watch?v=KOhH1GdOd_w\"\n						rel=\"nofollow\">https://www.youtube.com/watch?…</a></p>\n','',0,4,\N)	;
