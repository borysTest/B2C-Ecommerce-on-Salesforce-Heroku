<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
