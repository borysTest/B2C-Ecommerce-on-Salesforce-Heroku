<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
