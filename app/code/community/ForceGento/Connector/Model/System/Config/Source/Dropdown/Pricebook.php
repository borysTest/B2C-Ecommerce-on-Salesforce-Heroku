<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
