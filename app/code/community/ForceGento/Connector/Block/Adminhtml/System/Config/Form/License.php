<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
