<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright 2014-2017 SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      
 */
$add = new OssnPhotos;
if ($add->AddPhoto(input('album'), 'ossnphoto', input('privacy'))) {
    redirect(REF);
} else {
    redirect(REF);
}