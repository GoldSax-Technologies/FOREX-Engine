<?php
$stream = file_get_contents('USDNGNLAST.txt');
$avgp = "161.25"; 
$high = "161.35";
$low = "161.25";
 
  echo "&L=".$stream."&N=USDNGN&"; 
$temp = file_get_contents("USDNGNTEMP.txt", "r");
  

if ($stream != $temp ) {
$mhigh = ($avgp + $high)/2;
$mlow = ($avgp + $low)/2;
$llow = ($low - (($avgp - $low)/2));
$hhigh = ($high + (($high - $avgp)/2));
$diff = $stream  - $temp;
$diff = number_format($diff, 2, '.', '');
$avgp = number_format($avgp, 2, '.', '');
if ( $stream > $temp ) { 
if ( ($stream > $mhigh ) && ($stream < $high)) { echo "&sign=au" ; }
if ( ($stream < $mlow ) && ($stream > $low)) { echo "&sign=ad" ; }
if ( $stream < $llow ) { echo "&sign=as" ; }
if ( $stream > $hhigh ) { echo "&sign=al" ; } 
 if ( ($stream < $hhigh) && ($stream > $high)) { echo "&sign=auu" ; }
if ( ($stream > $llow) && ($stream < $low)) { echo "&sign=add" ; }
//else { echo "&sign=a" ; } 
$filedish = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
            $write = fputs($filedish, "USDNGN:Nigeria Naira:".$stream. ":Moving up:"."\r\n");
		fclose( $filedish );}
if ( $stream < $temp ) { 
 if ( ($stream >$mhigh) && ($stream < $high)) { echo "&sign=bu" ; }
if ( ($stream < $mlow) && ($stream > $low)) { echo "&sign=bd" ; }
if ( $stream < $llow ) { echo "&sign=bs" ; }
if ( $stream > $hhigh ) { echo "&sign=bl" ; } 
 if ( ($stream < $hhigh) && ($stream > $high)) { echo "&sign=buu" ; }
if ( ($stream > $llow) && ($stream < $low)) { echo "&sign=bdd" ; }
// else { echo "&sign=b" ; }
 $filedish = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
            $write = fputs($filedish, "USDNGN:Nigeria Naira:".$stream. ":Moving down:"."\r\n");
		fclose( $filedish );}
$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$filename= 'USDNGN.txt'; 
$file = fopen($filename, "a+" );

fwrite( $file, $stream.":".$time."\r\n" ); 

fclose( $file ); 

if (($stream > $mhigh ) && ($temp<= $mhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$risk = ($stream - $low) * (200000/$stream);
$risk = (int)$risk;
          $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
            $wrote = fputs($filedash, "USDNGN:Nigeria Naira:".$stream. ":Approaching:PHIGH:"."\r\n");
		fclose( $filedash );
		
			
     }   
if (($stream < $mhigh ) && ($temp>= $mhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $stream) * (200000/$stream);
$risk = (int)$risk;
$time = date('h:i:s',$new_time);
     $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
         $wrote = fputs($filedash, "USDNGN:Nigeria Naira:". $stream.":Moving Down:PHIGH:"."\r\n");
		fclose( $filedash );
     }   
if (($stream > $mlow ) && ($temp<= $mlow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$risk = ($stream - $low) * (200000/$stream);
$risk = (int)$risk;
          $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
            $wrote = fputs($filedash, "USDNGN:Nigeria Naira:".$stream. ":Moving Up:PLOW:"."\r\n");
		fclose( $filedash );
		
			
     }   
if (($stream < $mlow ) && ($temp>= $mlow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $stream) * (200000/$stream);
$risk = (int)$risk;
$time = date('h:i:s',$new_time);
     $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
         $wrote = fputs($filedash, "USDNGN:Nigeria Naira:". $stream.":Approaching:PLOW:"."\r\n");
		fclose( $filedash );
     }   
if (($stream > $high ) && ($temp<= $high ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$risk = ($stream - $low) * (200000/$stream);
$risk = (int)$risk;
          $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
            $wrote = fputs($filedash, "USDNGN:Nigeria Naira:".$stream. ":Breaking:PHIGH:"."\r\n");
		fclose( $filedash );
		
			
     }   
if (($stream > $hhigh ) && ($temp<= $hhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$risk = ($stream - $low) * (200000/$stream);
$risk = (int)$risk;
          $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
            $wrote = fputs($filedash, "USDNGN:Nigeria Naira:".$stream. ":Moving Beyond:PHIGH:"."\r\n");
		fclose( $filedash );
		
			
     }   
if (($stream < $hhigh ) && ($temp>= $hhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     
         $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
             $wrote = fputs($filedash, "USDNGN:Nigeria Naira:". $stream. ":Coming near:PHIGH:"."\r\n");
		fclose( $filedash );
   
     }   
if (($stream < $high ) && ($temp>= $high ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     
         $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
             $wrote = fputs($filedash, "USDNGN:Nigeria Naira:". $stream. ":Retracing:PHIGH:"."\r\n");
		fclose( $filedash );
   
     }   
if (($stream < $llow ) && ($temp>= $llow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $stream) * (200000/$stream);
$risk = (int)$risk;
$time = date('h:i:s',$new_time);
     $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
         $wrote = fputs($filedash, "USDNGN:Nigeria Naira:". $stream.":Breaking Beyond:PLOW:"."\r\n");
		fclose( $filedash );
     }   
if (($stream < $low ) && ($temp>= $low ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $stream) * (200000/$stream);
$risk = (int)$risk;
$time = date('h:i:s',$new_time);
     $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
         $wrote = fputs($filedash, "USDNGN:Nigeria Naira:". $stream.":Breaking:PLOW:"."\r\n");
		fclose( $filedash );
     }   
if (($stream > $llow ) && ($temp<= $llow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
    $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
     $wrote = fputs($filedash, "USDNGN:Nigeria Naira:". $stream.":Coming near:PLOW:"."\r\n");
	fclose( $filedash );
     }   
if (($stream > $low ) && ($temp<= $low ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
    $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
     $wrote = fputs($filedash, "USDNGN:Nigeria Naira:". $stream.":Retracing:PLOW:"."\r\n");
	fclose( $filedash );
     }   

if (($stream > $avgp ) && ($temp<= $avgp ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($stream - $low) * (200000/$stream);
$risk = (int)$risk;
$avgp = number_format($avgp, 2, '.', '');
$time = date('h:i:s',$new_time);
     $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
     $wrote = fputs($filedash, "USDNGN:Nigeria Naira:".$stream. ":Sliding up:PAVG:"."\r\n");
	fclose( $filedash );
     }   

if (($stream < $avgp ) && ($temp>= $avgp ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $stream) * (200000/$stream);
$risk = (int)$risk;
$avgp = number_format($avgp, 2, '.', '');
$time = date('h:i:s',$new_time);
     $filedash = fopen("C:\wamp\www\charity\hu\bloomberg\indices\malert.txt", "a+");
        $wrote = fputs($filedash, "USDNGN:Nigeria Naira:".$stream. ":Sliding down:PAVG:"."\r\n");
	fclose( $filedash );	 
     }   
}
$filedash = fopen("USDNGNTEMP.txt", "w");
        $wrote = fputs($filedash,  $stream);
	fclose( $filedash );

//echo "&chg=".$json_output['cp']."&"; 
?>
