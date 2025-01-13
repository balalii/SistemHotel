<?php

/**
 * Here is the serverless function entry
 * for deployment with Vercel.
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

if ($uri !== '/' && file_exists($file = __DIR__.'/public'.$uri)) {
    header('Content-type: '.get_mime_type($file).'; charset: UTF-8;');
    echo require $file;
} else {
    require_once __DIR__.'/public/index.php';
}




function get_mime_type($filename) {
    $extension = strtolower(pathinfo($filename)['extension']);

    $mimes = array(
        'txt' => 'text/plain',
        'html' => 'text/html',
        'php' => 'text/html',
        'css' => 'text/css',
        'js' => 'application/javascript',
        'json' => 'application/json',
        'xml' => 'application/xml',
        // images
        'png' => 'images/png',
        'jpe' => 'images/jpeg',
        'jpeg' => 'images/jpeg',
        'jpg' => 'images/jpeg',
        'webp' => 'images/webp',
        'gif' => 'images/gif',
        'bmp' => 'images/bmp',
        'ico' => 'images/vnd.microsoft.icon',
        'tiff' => 'images/tiff',
        'tif' => 'images/tiff',
        'svg' => 'images/svg+xml',
        'svgz' => 'images/svg+xml',
        // archives
        'zip' => 'application/zip',
        'rar' => 'application/x-rar-compressed',
        // audio/video
        'mp3' => 'audio/mpeg',
        'qt' => 'video/quicktime',
        'mov' => 'video/quicktime',
        // fonts
        'ttf' => 'application/x-font-ttf',
        'woff' => 'application/x-woff',
        'woff2' => 'font/woff2',
        'otf' => 'font/otf',
    );

    if (isset($mimes[$extension])) {
        return $mimes[$extension];
    }
    return 'application/octet-stream';
}