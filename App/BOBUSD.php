<?php
$stream = file_get_contents('BOBUSDLAST.txt');
$avgp = "0.14"; 
$high = "0.14";
$low = "0.14";
 
  echo "&L=".$stream."&N=BOBUSD&"; 
$temp = file_get_contents("BOBUSDTEMP.txt", "r");
  

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
$filedish = fopen("malert.txt", "a+");
            $write = fputs($filedish, "BOBUSD:".$stream. ":Moving up:".$diff.":".$high.":".$low.":".$avgp."\r\n");
		fclose( $filedish );}
if ( $stream < $temp ) { 
 if ( ($stream >$mhigh) && ($stream < $high)) { echo "&sign=bu" ; }
if ( ($stream < $mlow) && ($stream > $low)) { echo "&sign=bd" ; }
if ( $stream < $llow ) { echo "&sign=bs" ; }
if ( $stream > $hhigh ) { echo "&sign=bl" ; } 
 if ( ($stream < $hhigh) && ($stream > $high)) { echo "&sign=buu" ; }
if ( ($stream > $llow) && ($stream < $low)) { echo "&sign=bdd" ; }
// else { echo "&sign=b" ; }
 $filedish = fopen("malert.txt", "a+");
            $write = fputs($filedish, "BOBUSD:".$stream. ":Moving down:".$diff.":".$high.":".$low.":".$avgp."\r\n");
		fclose( $filedish );}
$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$filename= 'BOBUSD.txt'; 
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
          $filedash = fopen("malert.txt", "a+");
            $wrote = fputs($filedash, "BOBUSD:".$stream. ":Approaching:PHIGH:".$high.":Buy Cost:".$risk."\r\n");
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
     $filedash = fopen("malert.txt", "a+");
         $wrote = fputs($filedash, "BOBUSD:". $stream.":Moving Down:PHIGH:".$high.":short Cost:".$risk."\r\n");
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
          $filedash = fopen("malert.txt", "a+");
            $wrote = fputs($filedash, "BOBUSD:".$stream. ":Moving Up:PLOW:".$low.":Buy Cost:".$risk."\r\n");
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
     $filedash = fopen("malert.txt", "a+");
         $wrote = fputs($filedash, "BOBUSD:". $stream.":Approaching:PLOW:".$low.":short Cost:".$risk."\r\n");
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
          $filedash = fopen("malert.txt", "a+");
            $wrote = fputs($filedash, "BOBUSD:".$stream. ":Breaking:PHIGH:".$high.":Buy Cost:".$risk."\r\n");
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
          $filedash = fopen("malert.txt", "a+");
            $wrote = fputs($filedash, "BOBUSD:".$stream. ":Moving Beyond:PHIGH:".$high.":Buy Cost:".$risk."\r\n");
		fclose( $filedash );
		
			
     }   
if (($stream < $hhigh ) && ($temp>= $hhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     
         $filedash = fopen("malert.txt", "a+");
             $wrote = fputs($filedash, "BOBUSD:". $stream. ":Coming near:PHIGH:".$high.":Buy Cost:".$risk."\r\n");
		fclose( $filedash );
   
     }   
if (($stream < $high ) && ($temp>= $high ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     
         $filedash = fopen("malert.txt", "a+");
             $wrote = fputs($filedash, "BOBUSD:". $stream. ":Retracing:PHIGH:".$high."\r\n");
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
     $filedash = fopen("malert.txt", "a+");
         $wrote = fputs($filedash, "BOBUSD:". $stream.":Breaking Beyond:PLOW:".$low.":short Cost:".$risk."\r\n");
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
     $filedash = fopen("malert.txt", "a+");
         $wrote = fputs($filedash, "BOBUSD:". $stream.":Breaking:PLOW:".$low.":short Cost:".$risk."\r\n");
		fclose( $filedash );
     }   
if (($stream > $llow ) && ($temp<= $llow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
    $filedash = fopen("malert.txt", "a+");
     $wrote = fputs($filedash, "BOBUSD:". $stream.":Coming near:PLOW:".$low.":short Cost:".$risk."\r\n");
	fclose( $filedash );
     }   
if (($stream > $low ) && ($temp<= $low ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
    $filedash = fopen("malert.txt", "a+");
     $wrote = fputs($filedash, "BOBUSD:". $stream.":Retracing:PLOW:".$low."\r\n");
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
     $filedash = fopen("malert.txt", "a+");
     $wrote = fputs($filedash, "BOBUSD:".$stream. ":Sliding up:PAVG:".$avgp.":Buy Cost:".$risk."\r\n");
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
     $filedash = fopen("malert.txt", "a+");
        $wrote = fputs($filedash, "BOBUSD:".$stream. ":Sliding down:PAVG:".$avgp.":Short Cost:".$risk."\r\n");
	fclose( $filedash );	 
     }   
}
$filedash = fopen("BOBUSDTEMP.txt", "w");
        $wrote = fputs($filedash,  $stream);
	fclose( $filedash );

//echo "&chg=".$json_output['cp']."&"; 
?>
