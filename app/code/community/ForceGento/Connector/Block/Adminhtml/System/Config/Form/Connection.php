<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
