<?php  
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6.0')||strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0')
	||strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0')||strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.0')) 
	header("Location:badbrowser.html");
?>