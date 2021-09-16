<?php

return [

    /*
    |--------------------------------------------------------------------------
    | HTTP Client settings
    |--------------------------------------------------------------------------
    |
    */
    'tt_timeout' => 3,

    'tt_retry' => [
        'number' => 1,
        'time' => 200,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default headers primary
    |--------------------------------------------------------------------------
    |
    | These are very important parameters
    |
    */

    'primary_header' => [
        'aid' => '1988',
        'app_name' => 'tiktok_web',
        'device_platform' => 'web',
        'cookie_enabled' => 'true',
    ],

    /*
    |--------------------------------------------------------------------------
    | Default body primary for API
    |--------------------------------------------------------------------------
    |
    | These are very important parameters
    |
    */

    'primary_body_api' => [
        'aid' => '1988',
        'app_name' => 'tiktok_web',
        'device_platform' => 'web',
        'language' => 'en',
    ],

    /*
    |--------------------------------------------------------------------------
    | Default User Agent
    |--------------------------------------------------------------------------
    |
    | It is not necessary
    |
    */
    'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36',

    /*
    |--------------------------------------------------------------------------
    | Referer headers
    |--------------------------------------------------------------------------
    |
    | It is not necessary to change these parameters
    |
    */
    'use_header_referer' => true,

    'referer' => [
        'referer' => 'https://www.tiktok.com/?lang=tr',
        'root_referer' => 'https://www.tiktok.com/?lang=tr',
        'page_referer' => 'https://www.tiktok.com/foryou?lang=tr',
        'uniqueId' => '',
        'validUniqueId' => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | Lang headers
    |--------------------------------------------------------------------------
    |
    | It is not necessary to change these parameters
    | For 'timezone_name' see https://www.php.net/manual/timezones.php
    |
    */
    'use_header_lang' => true,

    'lang' => [
        'browser_language' => 'tr',
        'lang' => 'tr',
        'priority_region' => 'TR',
        'region' => 'TR',
        'tt-web-region' => 'TR',
        'timezone_name' => 'Europe/Istanbul',
    ],

    /*
    |--------------------------------------------------------------------------
    | Browser headers
    |--------------------------------------------------------------------------
    |
    | It is not necessary to change these parameters
    |
    */
    'use_header_browser' => false,

    'browser' => [
        'screen_width' => '1680',
        'screen_height' => '1050',
        'browser_online' => 'true',
        'ac' => '4g',
        'appType' => 'm',
        'isAndroid' => 'false',
        'isMobile' => 'false',
        'isIOS' => 'false',
    ],

    /*
    |--------------------------------------------------------------------------
    | Browser version
    |--------------------------------------------------------------------------
    |
    | It is not necessary to change these parameters
    |
    */
    'use_header_browser_ver' => true,

    'browser_ver' => [
        'OS' => 'windows',
        'browser_platform' => 'Win64',
        'browser_name' => 'Google Chrome',
        'browser_version' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36',
    ],

    /*
    |--------------------------------------------------------------------------
    | Personal headers NOT necessary
    |--------------------------------------------------------------------------
    |
    | If you leave empty fields, the data will not be inserted
    |
    */
    'use_header_personal' => false,

    'personal' => [
        'appId' => '1233',
        'isUniqueId' => 'true',
    ],

    /*
    |--------------------------------------------------------------------------
    | Personal addition headers NOT necessary
    |--------------------------------------------------------------------------
    |
    | If you leave empty fields, the data will not be inserted
    |
    */
    'use_header_personal_addition' => false,

    'personal_addition' => [
        'did' => '',
        'uid' => '',
        'sec_uid' => '',
        'secUid' => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | Verify key NOT necessary
    |--------------------------------------------------------------------------
    |
    | Copy this key from your browser DevTools
    | example: 'verify_khpjggvg_xXlMBl0E_DVRl_4ueQ_9Vcj_FbHc1BN5OrJF'
    |
    */
    'verifyFp' => 'verify_ktfqfm25_8jIacUfx_lJTW_43IJ_8xzT_qcKceM3toZNj',

    /*
    |--------------------------------------------------------------------------
    | Links and array settings
    |--------------------------------------------------------------------------
    |
    | Moved into the settings, as it changes very often in the API
    |
    */

    'user_info' => [
        /* full link must contain username '.../share/user/@tiktok' */
        'link' => 'https://www.tiktok.com/node/share/user/',
        'array_primary' => 'userInfo',
        'array_secondary' => 'metaParams',
    ],

    'music_info' => [
        /* example '.../share/music/I-JUST-FELL-6768866707013388289' */
        'link' => 'https://www.tiktok.com/node/share/music/',
        'link_api' => 'https://m.tiktok.com/api/music/item_list/',
        'api_field' => 'musicID',
        'array_primary' => 'musicInfo',
        'array_secondary' => 'metaParams',
    ],

    'tag_info' => [
        /* example '.../share/tag/apple' */
        'link' => 'https://www.tiktok.com/node/share/tag/',
        'link_api' => 'https://m.tiktok.com/api/challenge/item_list/',
        'api_field' => 'challengeID',
        'array_primary' => 'challengeInfo',
        'array_secondary' => 'metaParams',
    ],

    /*
    |--------------------------------------------------------------------------
    | Suggested accounts
    |--------------------------------------------------------------------------
    |
    | In API has lists: 'user', 'music', 'challenge'
    |
    */

    'discover_info' => [
        'link' => 'https://www.tiktok.com/node/share/discover/',
        'link_api' => 'https://m.tiktok.com/api/discover/',
    ],

];
