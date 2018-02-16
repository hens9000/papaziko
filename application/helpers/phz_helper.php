<?php

     function pre($a='- Pre Data -')
     {
          exit(xpre($a));
     }

     function xpre($a='- Pre Data -')
     {
          echo '<pre>',print_r($a),'</pre>';
     }

     function son($a=array())
	{
		echo json_encode($a);
     }
     
     function avObject($a=array())
     {
          return (empty($a))?(object)array():json_decode(json_encode($a),false);
     }

     function grab($a,$b,$c=false)
     {
          $c=($c)?$c:array();
          return array_key_exists($a,$b)?a15($c,$b[$a]):a15(array(),$c);
     }


     function get_js($a){
          foreach($a as $j){		
               $ext='.js';		
               if(preg_match('/^vendors/',$j)){
                    $j=base_url('vendor/'.$j.$ext);
               }		
               else if(preg_match('/^http/',$j)){
                    
               }		
               else if(preg_match('/.map$/',$j)){
                    $ext='';
               }
               else{
                    $j=base_url('assets/js/'.$j.$ext);
               }		
               echo '<script src="'.$j.'"></script>';
               //echo "\r\n";
          }
     }

     function get_css($a){
          foreach($a as $j){
               $ext='.css';
               if(preg_match('/^vendors/',$j)){
                    $j=base_url('vendor/'.$j.$ext);
               }
               else if(preg_match('/^http/',$j)){
                    $j=$j.$ext;
               }
               else if(preg_match('/.map$/',$j)){
                    $ext='';
               }
               else{
                    $j=base_url('css/'.$j.$ext);
               }
               echo '<link rel="stylesheet" href="'.$j.'">';
               //echo "\r\n";
          }
     }

     function get_meta($a){
          foreach($a as $j=>$k){		
               echo '<meta name="'.$j.'" content="'.$k.'">';
               //echo "\r\n";
          }
     }

     function a23($a){return (!is_array($a))?explode(',',$a):$a;}
     function a15($a,$b){return array_merge(a23($a),a23($b));}
     function a98($a,$b=','){$r='';if(is_string($a)){$a=explode($b,$a);foreach($a as $y){$y=explode('=',$y);$r.=(isset($y[1]))?$y[0].'="'.$y[1].'" ':$y[0].' ';}}return rtrim($r,' ');}
     function a99($a){$r='';if(is_array($a)){foreach($a as $k=>$v){$r.=(is_int($k))?$v.' ':$k.'="'.$v.'" ';}}return rtrim($r,' ');}
