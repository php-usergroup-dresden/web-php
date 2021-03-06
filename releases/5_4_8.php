<?php
// $Id$
$_SERVER['BASE_PAGE'] = 'releases/5_4_8.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/prepend.inc';
site_header("PHP 5.4.8 Release Announcement");
?>

<h1>PHP 5.4.8 Release Announcement</h1>

<p>The PHP development team would like to announce the immediate
availability of PHP 5.4.8. Over 20 bugs were fixed. In addition OpenSSL
signature verification now supports the SHA-2 family and RMD160. All
users of PHP are encouraged to upgrade to this release.</p>

<p>For source downloads of PHP 5.4.8 please visit our <a href="http://www.php.net/downloads.php">downloads page</a>,
Windows binaries can be found on <a href="http://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="http://www.php.net/ChangeLog-5.php#5.4.8">ChangeLog</a>.
</p>

<?php site_footer(); ?>
