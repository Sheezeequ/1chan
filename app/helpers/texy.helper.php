<?php
/**
 * Фильтр сообщений (разметка):
 */
class TexyHelper
{
    const SMILIES = [
        ['name' => 'desu', 'ext'=>'gif', 'width' => 30, 'height' => 42],
        ['name' => 'trollface', 'ext'=>'gif', 'width' => 30, 'height' => 25],
        ['name' => 'coolface', 'ext'=>'gif', 'width' => 30, 'height' => 25],
        ['name' => 'sobak', 'ext'=>'gif', 'width' => 30, 'height' => 24],
        ['name' => 'cuni', 'ext'=>'jpg', 'width' => 40, 'height' => 24],
        ['name' => 'cancer', 'ext'=>'gif', 'width' => 31, 'height' => 29],
        ['name' => 'mrgreen', 'ext'=>'gif', 'width' => 32, 'height' => 32],
        ['name' => 'nyan', 'ext'=>'gif', 'width' => 53, 'height' => 21],
        ['name' => 'cheez', 'ext'=>'gif', 'width' => 51, 'height' => 40],
        ['name' => 'popka', 'ext'=>'gif', 'width' => 45, 'height' => 35],
        ['name' => 'popka2', 'ext'=>'gif', 'width' => 35, 'height' => 25],
        ['name' => 'slon', 'ext'=>'gif', 'width' => 33, 'height' => 46],
        ['name' => 'pauk', 'ext'=>'gif', 'width' => 37, 'height' => 35],
        ['name' => 'sosak', 'ext'=>'gif', 'width' => 51, 'height' => 37],
        ['name' => 'makak', 'ext'=>'gif', 'width' => 51, 'height' => 37],
        ['name' => 'turtle', 'ext'=>'gif', 'width' => 30, 'height' => 45],
        ['name' => 'bowser', 'ext'=>'gif', 'width' => 74, 'height' => 45],

        ['name' => 'rage', 'ext'=>'png', 'width' => 28, 'height' => 30],
        ['name' => 'ffuu', 'ext'=>'png', 'width' => 43, 'height' => 31],
        ['name' => 'okay', 'ext'=>'png', 'width' => 26, 'height' => 32],
        ['name' => 'omsk', 'ext'=>'png', 'width' => 17, 'height' => 19],
        ['name' => 'awesome', 'ext'=>'png', 'width' => 20, 'height' => 20],
        ['name' => 'sheez', 'ext'=>'png', 'width' => 40, 'height' => 40],
        ['name' => 'deb', 'ext'=>'png', 'width' => 32, 'height' => 32],
        ['name' => 'projector', 'ext'=>'png', 'width' => 50, 'height' => 33],
        ['name' => 'hazard', 'ext'=>'png', 'width' => 32, 'height' => 32],
        ['name' => 'pizda', 'ext'=>'png', 'width' => 48, 'height' => 65],
        ['name' => 'da', 'ext'=>'png', 'width' => 45, 'height' => 65],
        ['name' => 'yes', 'ext'=>'png', 'width' => 45, 'height' => 65],
        ['name' => 'sega', 'ext'=>'png', 'width' => 45, 'height' => 39],
        ['name' => 'guba', 'ext'=>'png', 'width' => 43, 'height' => 31],
        ['name' => 'aftersex', 'ext'=>'png', 'width' => 45, 'height' => 45],
        ['name' => 'rooster', 'ext'=>'png', 'width' => 35, 'height' => 40],
        ['name' => 'pork', 'ext'=>'png', 'width' => 48, 'height' => 51],
        ['name' => 'oru', 'ext'=>'png', 'width' => 43, 'height' => 39],
        ['name' => 'srunka', 'ext'=>'png', 'width' => 43, 'height' => 45],
        ['name' => 'yajka', 'ext'=>'png', 'width' => 18, 'height' => 45],
        ['name' => 'poo', 'ext'=>'png', 'width' => 40, 'height' => 41],
        ['name' => 'plombir', 'ext'=>'png', 'width' => 36, 'height' => 45],
        ['name' => 'you', 'ext'=>'png', 'width' => 35, 'height' => 33],
        ['name' => 'proj', 'ext'=>'png', 'width' => 50, 'height' => 31],

        ['name' => 'no', 'ext'=>'webp', 'width' => 49, 'height' => 65],
    ];
	/**
	 * Регулярные выражения для видео:
	 */
	const YOUTUBE_REGEXP = 'https:\/\/(?:www\.|)youtube\.com\/watch\?v=([a-zA-Z0-9_\-]+)';

	/**
	 * Метод создания объекта Texy:
	 */
	private static function createTexyObject($post_link = true, $board = null)
	{
		$texy = new Texy();
		$texy -> mergeLines = false;
		$texy -> htmlOutputModule -> baseIndent  = 6;
		$texy -> typographyModule -> locale = 'fr';

		self::registerSmilies($texy);
		
		$texy->registerLinePattern(
			array('TexyHelper', 'spoiler'),
			'/%%(([^%]|%[^%])+)%%/',
			'TexyHelper_spoiler'
		);
        $texy->registerLinePattern(
			array('TexyHelper', 'nog'),
            '/Нагаторо ❤️/',
			'TexyHelper_nog'
		);
        $texy->registerLinePattern(
            array('TexyHelper', 'nog3'),
            '/Нагаторо/',
            'TexyHelper_nog3'
        );



		$texy->registerLinePattern(
			array('TexyHelper', 'tts'),
			'/#%(([^%]|%[^%])+)%#/',
			'TexyHelper_tts'
		);
		$texy->registerLinePattern(
			array('TexyHelper', 'coincidence'),
			'/\(\(\(([^\(\)]+)\)\)\)/',
			'TexyHelper_coincidence'
		);

/*
		$texy->registerLinePattern(
			array('TexyHelper', 'redline'),
			'/\$\$(([^\$]|\$[^\$])+)\$\$/',
			'TexyHelper_redline'
		);
*/
		if ($board == null)
		{
			$texy->registerLinePattern(
				array('TexyHelper', 'imgur'),
				'/\[i:([^\]]+):\]/',
				'TexyHelper_imgur'
			);

			$texy->registerLinePattern(
				array('TexyHelper', 'catbox'),
				'/\[c:(([^\]]+)\.((?i)jpe?g|gif|png|webp)):\]/',
				'TexyHelper_catbox'
			);

			$texy->registerLinePattern(
				array('TexyHelper', 'catboxvid'),
				'/\[c:(([^\]]+)\.((?i)webm|mp4)):\]/',
				'TexyHelper_catboxvid'
			);
/*
			$texy->registerLinePattern(
				array('TexyHelper', 'youtube'),
				'/\[youtube:([^\]]+)\]/',
				'TexyHelper__youtube'
			);
*/

			$texy->registerLinePattern(
				array('TexyHelper', 'images'),
				'/\[([^\]]+)\]/',
				'TexyHelper__images'
			);


			if ($post_link)
			{
			    $texy->registerLinePattern(
				    array('TexyHelper', 'postlink'),
				    '/>>(\d+)/',
				    'TexyHelper_postlink'
			    );

			    $texy->registerLinePattern(
				    array('TexyHelper', 'boardpostlink2'),
				    '/>>([^\/]+)\/(\d+)/',
				    'boardlink'
			    );
			}
		}
		else
		{
				$texy->registerLinePattern(
				    array('TexyHelper', 'boardpostlink'),
				    '/>>(\d+)/',
				    'boardlink_'. $board
			    );

			    $texy->registerLinePattern(
				    array('TexyHelper', 'boardpostlink2'),
				    '/>>([^\/]+)\/(\d+)/',
				    'boardlink'
			    );
		}

		return $texy;
	}

    // Dynamically create methods for each smiley
    public static function createSmileyMethod($smiley) {
        return function($parser, $matches, $name) use ($smiley) {
            $el = TexyHtml::el('img');
            $el->attrs['src'] = '/img/' . $smiley['name'] . '.'. $smiley['ext'];
            $el->attrs['class'] = 'smiley';
            $el->attrs['width'] = $smiley['width'];
            $el->attrs['height'] = $smiley['height'];
            $el->attrs['alt'] = ':'.$smiley['name'].':';

            $parser->again = false;

            return $el;
        };
    }

    // Register all smilies
    public static function registerSmilies($texy) {
        foreach (self::SMILIES as $smiley) {
            $pattern = '/:' . $smiley['name'] . ':/';
            $method = self::createSmileyMethod($smiley);
            $texy->registerLinePattern($method, $pattern, 'TexyHelper_' . $smiley['name']);
        }
    }

	/**
	 * Обработать строку (только типография):
	 */
	public static function typo($text)
	{
		$texy = self::createTexyObject();
		TexyConfigurator::safeMode($texy);
		TexyConfigurator::disableImages($texy);
		TexyConfigurator::disableLinks($texy);
		return $texy -> processTypo(htmlspecialchars($text));
	}

	/**
	 * Обработать строку (вся разметка):
	 */
	public static function markup($text, $safeMode = true, $links = true, $board = null)
	{
		$texy = self::createTexyObject($links, $board);

		if ($safeMode)
		{
			TexyConfigurator::safeMode($texy);
			TexyConfigurator::disableImages($texy);
		}
		return $texy -> process($text);
	}

    	/**
	 * Вставка картинок:
	 */

	static function images($parser, $matches, $name) {
		list(, $mContent) = $matches;
		if (!isset($GLOBALS['post_image_count'])) {
			$GLOBALS['post_image_count']= 0;
		}
        if (preg_match(self::URL_REGEXP, $mContent))
        {
            if ($GLOBALS['post_image_count']++) {
		        $parser -> again = false;
                return '['. $mContent .']';
            }
			try {
				if (($u = PreviewHelper::upload($mContent)) !== false) {
					$img = TexyHtml::el('img');
					$img -> attrs['src']    = $u;
					$img -> attrs['alt']    = '';
					$link = TexyHtml::el('a');
					$link -> attrs['target'] = '_blank';
					$link -> attrs['class']  = 'b-image-link';
					$link -> href($mContent);
					$link -> add($img);
					$parser -> again = false;
					$GLOBALS['post_image_count'] = true;
					return $link;
				}
			}catch (\Exception $exception)
			{
				return $exception->getMessage();
			}

        }
        return '['. $mContent .']';
	}


	/**
	 * Имгур:
	 */
	static function imgur($parser, $matches, $name) {
		list(, $mContent, $mMod) = $matches;

		if (isset($GLOBALS['texy_test']) && $GLOBALS['texy_test']) {
			if ($GLOBALS['post_image_count']++) {
				$parser -> again = false;
				return '[i:'. $mContent .':]';
			}
		}

		$img = TexyHtml::el('img');
		$img -> attrs['src']    = 'https://i.imgur.com/'.$mContent.'.jpg';
		$img -> attrs['alt']    = '';

		$link = TexyHtml::el('a');
		$link -> attrs['target'] = '_blank';
		$link -> attrs['class'] = 'b-image-link';
		$link -> attrs['rel'] = 'nofollow noopener noreferrer';
		$link -> href('https://i.imgur.com/'.$mContent.'.jpg');
		$link -> add($img);

		$parser -> again = false;
		return $link;
	}

	/**
	 * Кятбокс:
	 */
	static function catbox($parser, $matches, $name) {
		list(, $mContent, $mMod) = $matches;

		if (isset($GLOBALS['texy_test']) && $GLOBALS['texy_test']) {
			if ($GLOBALS['post_image_count']++) {
				$parser -> again = false;
				return '[i:'. $mContent .':]';
			}
		}

		$img = TexyHtml::el('img');
		$img -> attrs['src']    = 'https://files.catbox.moe/'.$mContent;
		$img -> attrs['alt']    = '';

		$link = TexyHtml::el('a');
		$link -> attrs['target'] = '_blank';
		$link -> attrs['class'] = 'b-image-link';
		$link -> attrs['rel'] = 'nofollow noopener noreferrer';
		$link -> href('https://files.catbox.moe/'.$mContent);
		$link -> add($img);

		$parser -> again = false;
		return $link;
	}

	/**
	 * Кятбокс (видео):
	 */
	static function catboxvid($parser, $matches, $name) {
		list(, $mContent, $mMod) = $matches;

		if (isset($GLOBALS['texy_test']) && $GLOBALS['texy_test']) {
			if ($GLOBALS['post_image_count']++) {
				$parser -> again = false;
				return '[i:'. $mContent .':]';
			}
		}

		$vid = TexyHtml::el('video');
		$vid -> attrs['src'] = 'https://files.catbox.moe/'.$mContent;
		$vid -> attrs['autoplay'] = '';
		$vid -> attrs['loop'] = '';
		$vid -> attrs['muted'] = '';
		$vid -> attrs['controls'] = '';

		$link = TexyHtml::el('a');
		$link -> attrs['target'] = '_blank';
		$link -> attrs['class'] = 'b-image-link';
		$link -> attrs['rel'] = 'nofollow noopener noreferrer';
		$link -> href('https://files.catbox.moe/'.$mContent);
		$link -> add($vid);

		$parser -> again = false;
		return $link;
	}

	/**
	 * Спойлер:
	 */
	static function spoiler($parser, $matches, $name) {
		list(, $mContent, $mMod) = $matches;

		$spl = TexyHtml::el('span');
		$spl -> attrs['class'] = 'b-spoiler-text';
		$spl -> setText($mContent);

		$parser -> again = true;
		return $spl;
	}

	/**
	 * Детектор совпадений:
	 */
	static function coincidence($parser, $matches, $name) {
		list(, $mContent, $mMod) = $matches;

		$spl = TexyHtml::el('span');
		$spl -> attrs['class'] = 'b-coincidence';
		$spl -> setText( '((('.$mContent.')))' );

		$parser -> again = false;
		return $spl;
	}


	/**
	 * Розмовлялка:
	 */
	static function tts($parser, $matches, $name) {
		list(, $mContent, $mMod) = $matches;

		$spl = TexyHtml::el('audio');
		$spl -> attrs['controls'] = '';
		$spl -> attrs['src'] = 'https://tts.voicetech.yandex.net/tts?text='.$mContent.'&amp;lang=ru_RU&amp;format=mp3&amp;quality=hi&amp;platform=web&amp;application=translate&amp;chunked=0&amp;mock-ranges=1';

		$parser -> again = true;
		return $spl;
	}

	/**
	 * Реверсивная цитата:
	 */
	static function reverseblockquote($parser, $matches, $name) {
		list(, $mContent, $mMod) = $matches;

		$spl = TexyHtml::el('blockquote');
		$spl -> attrs['class'] = 'reverse';

		$parser -> again = true;
		return $spl;
	}

	/**
	 * Красный:
	 */
	static function redline($parser, $matches, $name) {
		list(, $mContent, $mMod) = $matches;

		$spl = TexyHtml::el('span');
		$spl -> attrs['style'] = 'color:red';
		$spl -> setText($mContent);

		$parser -> again = true;
		return $spl;
	}
    static function smilies($parser, $matches, $name)
    {
        $el = TexyHtml::el('img');
        $el -> attrs['class']  = 'smiley';
        $el -> attrs['src']    = '/img/trollface.gif';
        $el -> attrs['width']  = '30';
        $el -> attrs['height'] = '25';
        $el -> attrs['alt']    = '';
        $parser -> again = false;

        return $el;
    }

	/**
	 * Троллфейс:
	 */
	static function trollface($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/trollface.gif';
		$el -> attrs['width']  = '30';
		$el -> attrs['height'] = '25';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * FFUU smile
	 */
	static function ffuu($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/ffuu.png';
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['width']  = '43';
		$el -> attrs['height'] = '31';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * okay smile
	 */
	static function okay($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/okay.png';
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['width']  = '26';
		$el -> attrs['height'] = '32';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}


	/**
	 * nyan smile
	 */
	static function nyan($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['src']    = '/img/nyan.gif';
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['width']  = '53';
		$el -> attrs['height'] = '21';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}


	/**
	 * awesome smile
	 */
	static function awesome($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/awesome.png';
		$el -> attrs['width']  = '20';
		$el -> attrs['height'] = '20';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * rage smile
	 */
	static function rage($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/rage.png';
		$el -> attrs['width']  = '28';
		$el -> attrs['height'] = '30';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * cancer smile
	 */
	static function cancer($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/cancer.gif';
		$el -> attrs['width']  = '31';
		$el -> attrs['height'] = '29';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * mrgreen smile
	 */
	static function mrgreen($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/mrgreen.gif';
		$el -> attrs['width']  = '32';
		$el -> attrs['height'] = '32';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}
	
	/**
	 * omsk smile
	 */
	static function omsk($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/omsk.png';
		$el -> attrs['width']  = '17';
		$el -> attrs['height'] = '19';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * Собак:
	 */
	static function sobak($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/sobak.gif';
		$el -> attrs['width']  = '30';
		$el -> attrs['height'] = '24';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * Десу:
	 */
	static function desu($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/desu.gif';
		$el -> attrs['width']  = '30';
		$el -> attrs['height'] = '42';
		$el -> attrs['alt']    = '';

		$parser -> again = false;

		return $el;
	}

	/**
	 * Кулфейс:
	 */
	static function coolface($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/coolface.gif';
		$el -> attrs['width']  = '30';
		$el -> attrs['height'] = '25';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}
	
	/**
	 * Шизик:
	 */
	static function sheez($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/sheez.png';
		$el -> attrs['width']  = '40';
		$el -> attrs['height'] = '40';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}

	/**
	 * Корка сыра:
	 */
	static function cheez($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/cheez.gif';
		$el -> attrs['width']  = '51';
		$el -> attrs['height'] = '40';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}

	/**
	 * Попка:
	 */
	static function popka($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/popka.gif';
		$el -> attrs['width']  = '45';
		$el -> attrs['height'] = '35';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}

	/**
	 * Попка-2:
	 */
	static function popkatwo($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/popka2.gif';
		$el -> attrs['width']  = '35';
		$el -> attrs['height'] = '25';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}
	
	/**
	 * Слон:
	 */
	static function slon($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/slon.gif';
		$el -> attrs['width']  = '33';
		$el -> attrs['height'] = '46';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}
	
	/**
	 * Паук:
	 */
	static function pauk($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/pauk.gif';
		$el -> attrs['width']  = '37';
		$el -> attrs['height'] = '35';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}
	
	/**
	 * Сосак:
	 */
	static function sosak($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/sosak.gif';
		$el -> attrs['width']  = '51';
		$el -> attrs['height'] = '37';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}
	
	/**
	 * Макак:
	 */
	static function makak($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/makak.gif';
		$el -> attrs['width']  = '51';
		$el -> attrs['height'] = '37';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}
	
	/**
	 * Деб:
	 */
	static function deb($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/deb.png';
		$el -> attrs['width']  = '32';
		$el -> attrs['height'] = '32';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}
	
	/**
	 * Проектор:
	 */
	static function projector($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/projector.png';
		$el -> attrs['width']  = '50';
		$el -> attrs['height'] = '33';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}

	/**
	 * Хазард:
	 */
	static function hazard($parser, $matches, $name) {
		$el = TexyHtml::el('img');
		$el -> attrs['class']  = 'smiley';
		$el -> attrs['src']    = '/img/hazard.png';
		$el -> attrs['width']  = '32';
		$el -> attrs['height'] = '32';
		$el -> attrs['alt']    = '';

		$parser->again = false;

		return $el;
	}

    static function nog($parser, $matches, $name) {
        return 'Поркич 🐽';
    }
    static function nog3($parser, $matches, $name) {
        return 'Поркич';
    }
	
	/**
	 * Ссылка на пост (комментарий):
	 */
	static function postlink($parser, $matches, $name)
	{
		list(, $id) = $matches;
		$parser -> again = false;

		if (Blog_BlogCommentsModel::CommentExists($id))
		{
			$comment = Blog_BlogCommentsModel::GetComment($id);
			$post_id = $comment['post_id'];
		}
		elseif (Blog_BlogPostsModel::PostExists($id))
			$post_id = $id;
		else
			return '&gt;&gt;'. $id;

		$link = TexyHtml::el('a');
		$link -> href('/news/res/'. $post_id .'/#'. $id );
		$link -> attrs['class'] = 'js-cross-link';
		$link -> attrs['name'] = 'news/'. $id;
		$link -> setText('&gt;&gt;'. $id);

		return $link;
	}

	/**
	 * Ссылка на пост борды:
	 */
	static function boardpostlink($parser, $matches, $name)
	{
		list(, $id) = $matches;
		$parser -> again = false;

		// Получаем название текущей борды:
		$board_name = substr($name, 10);
		$board = new Board_BoardModel($board_name);

		if ($board -> existsPost($id))
		{
			$post = $board -> getPost($id);
			$href = '/'. $board_name .'/res/';

			if ($post['parent_id'] == null)
				$href .= $id .'/#top';
			else
				$href .= $post['parent_id'] .'/#'. $id;

			$link = TexyHtml::el('a');
			$link -> href($href);
			$link -> attrs['class']  = 'js-cross-link';
			$link -> attrs['name'] = $board_name .'/'. $id;
			$link -> setText('&gt;&gt;'. $id);

			return $link;
		}

		return '&gt;&gt;'. $id;
	}

	static function boardpostlink2($parser, $matches, $name)
	{
		list(, $board_name, $id) = $matches;
		$parser -> again = false;

		if ($board_name != 'news')
		{
			$board = new Board_BoardModel($board_name);

			if ($board -> existsPost($id))
			{
				$post = $board -> getPost($id);
				$href = '/'. $board_name .'/res/';

				if ($post['parent_id'] == null)
					$href .= $id .'/#top';
				else
					$href .= $post['parent_id'] .'/#'. $id;

				$link = TexyHtml::el('a');
				$link -> href($href);
				$link -> attrs['class']  = 'js-cross-link';
				$link -> attrs['name'] = $board_name .'/'. $id;
				$link -> setText('&gt;&gt;'. $board_name .'/'. $id);

				return $link;
			}

			return '&gt;&gt;'. $board_name .'/'. $id;
		}

		if (Blog_BlogCommentsModel::CommentExists($id))
		{
			$comment = Blog_BlogCommentsModel::GetComment($id);
			$post_id = $comment['post_id'];
		}
		elseif (Blog_BlogPostsModel::PostExists($id))
			$post_id = $id;
		else
			'&gt;&gt;news/'. $id;

		$link = TexyHtml::el('a');
		$link -> href('/news/res/'. $post_id .'/#'. $id );
		$link -> attrs['class'] = 'js-cross-link';
		$link -> attrs['name'] = 'news/'. $id;
		$link -> setText('&gt;&gt;news/'. $id);

		return $link;
	}

	/**
	 * Получить код вставки видео:
	 */
	public static function getVideo($url)
	{
		if (preg_match('/^'.self::YOUTUBE_REGEXP.'/i', $url))
		{
			return preg_replace('/'.self::YOUTUBE_REGEXP.'(.*)/i', '<div class="b-video"><div class="g-hidden"><object width="520" height="400"><param name="wmode" value="opaque"></param><embed src="https://www.youtube.com/v/$1&hl=en" type="application/x-shockwave-flash" wmode="opaque" width="520" height="400"></embed></param></embed></object></div></div>', $url);
		}

		return false;
	}

    const URL_REGEXP = "{
			  ^
			  (
			    (https?)://[-\\w]+(\\.\\w[-\\w]*)+
			  |
			    (?i: [a-z0-9] (?:[-a-z0-9]*[a-z0-9])? \\. )+
			    (?-i: com\\b
			| edu\\b
			| biz\\b
			| gov\\b
			| in(?:t|fo)\\b # .int or .info
			| mil\\b
			| net\\b
			| org\\b
			| ovh\\b
			| xyz\\b
			| space\\b
			| club\\b
			| onion\\b
			| i2p\\b
			| [a-z][a-z]\\.[a-z][a-z]\\b # two-letter country code
			    )
			  )
			  ( : \\d+ )?
			  (
			    /
			    [^.!,?;\"\\'<>()\[\]\{\}\s\x7F-\\xFF]*
			    (
			      [.!,?]+ [^.!,?;\"\\'<>()\\[\\]\{\\}\s\\x7F-\\xFF]+
			    )*
			  )?
			}ix";
}
