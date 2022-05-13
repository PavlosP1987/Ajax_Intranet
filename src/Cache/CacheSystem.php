/*  PHP Caching new System : PHP_OP_CACHE
 *  
 */
 
<?php>
	$cachefile = basename($_SERVER[PHP_SELF], '.php') . '.cache';
	clearstatcache();
	
	if(file_exists($cachefile) && filemtime($cachefile) > time() - 10) {
		include($cachefile);
		exit;
	}
	
	ob_start();
	print "This is some text.<br />";
	print "This is some text.<br />";
	print "This is some text.<br />";
	print "Last updated: " . date("H:i:s");
	
	$contents = ob_get_contents;
	ob_end_clean();
	
	$handle = fopen("/var/www/public_html/$cachefile", "w");z
	fwrite($handle, $contents);
	fclose($handle);
	
	include($cachefile);
