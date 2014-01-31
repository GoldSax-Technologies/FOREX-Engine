<?php
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();

$sc[81] = "USDINR";
$sc[82] = "EURUSD";
$sc[83] = "USDKRW";
$sc[84] = "AEDUSD";
$sc[85] = "ISKUSD";
$sc[86] = "JMDUSD";
$sc[87] = "USDMDL";
$sc[88] = "USDBYR";
$sc[89] = "USDTHB";
$sc[90] = "USDJMD";
$sc[91] = "RONUSD";
$sc[92] = "TOPUSD";
$sc[93] = "USDDKK";
$sc[94] = "ARSUSD";
$sc[95] = "USDNOK";
$sc[96] = "ANGUSD";
$sc[97] = "USDMUR";
$sc[98] = "USDZMK";
$sc[99] = "NZDUSD";
$sc[100] = "DZDUSD";
$sc[101] = "USDCAD";
$sc[102] = "USDXAF";
$sc[103] = "USDAED";
$sc[104] = "AFNUSD";
$sc[105] = "USDALL";
$sc[106] = "ALLUSD";
$sc[107] = "USDANG";
$sc[108] = "ANGUSD";
$sc[109] = "AOAUSD";
$sc[110] = "USDARS";
$sc[111] = "ARSUSD";
$sc[112] = "USDAUD";
$sc[113] = "USDAWG";
$sc[114] = "AWGUSD";
$sc[115] = "AZNUSD";
$sc[116] = "USDBAM";
$sc[117] = "BAMUSD";
$sc[118] = "USDBBD";
$sc[119] = "BBDUSD";
$sc[120] = "BDTUSD";
$sc[121] = "BGNUSD";
$sc[122] = "USDBHD";
$sc[123] = "USDBIF";
$sc[124] = "USDBMD";
$sc[125] = "USDBND";
$sc[126] = "USDBOB";
$sc[127] = "USDBRL";
$sc[128] = "USDBSD";
$sc[129] = "BTNUSD";
$sc[130] = "USDBYR";
$sc[131] = "USDBZD";
$sc[132] = "USDCAD";
$sc[133] = "USDCDF";
$sc[134] = "USDCHF";
$sc[135] = "CLFUSD";
$sc[136] = "USDCLP";
$sc[137] = "USDCNY";
$sc[138] = "CNYUSD";
$sc[139] = "USDCOP";
$sc[140] = "CUPUSD";
$sc[141] = "CVEUSD";
$sc[142] = "USDCZK";
$sc[143] = "DJFUSD";
$sc[144] = "USDDKK";
$sc[145] = "USDDOP";
$sc[146] = "DZDUSD";
$sc[147] = "USDEGP";
$sc[148] = "EGPUSD";
$sc[149] = "ERNUSD";
$sc[150] = "USDETB";
$sc[151] = "USDEUR";
$sc[152] = "FIMUSD";
$sc[153] = "USDFJD";
$sc[154] = "FJDUSD";
$sc[155] = "FKPUSD";
$sc[156] = "USDGBP";
$sc[157] = "GELUSD";
$sc[158] = "USDGHS";
$sc[159] = "GHSUSD";
$sc[160] = "GIPUSD";
$sc[161] = "USDGMD";
$sc[162] = "GMDUSD";
$sc[163] = "USDGNF";
$sc[164] = "USDGTQ";
$sc[165] = "GTQUSD";
$sc[166] = "USDHKD";
$sc[167] = "USDHNL";
$sc[168] = "HNLUSD";
$sc[169] = "USDHRK";
$sc[170] = "HRKUSD";
$sc[171] = "USDHTG";
$sc[172] = "HTGUSD";
$sc[173] = "USDHUF";
$sc[174] = "USDIDR";
$sc[175] = "USDIEP";
$sc[176] = "IEPUSD";
$sc[177] = "USDILS";
$sc[178] = "ILSUSD";
$sc[179] = "USDINR";
$sc[180] = "INRUSD";
$sc[181] = "USDIQD";
$sc[182] = "USDIRR";
$sc[183] = "ISKUSD";
$sc[184] = "USDJMD";
$sc[185] = "JMDUSD";
$sc[186] = "USDJOD";
$sc[187] = "JODUSD";
$sc[188] = "USDJPY";
$sc[189] = "JPYUSD";
$sc[190] = "USDKES";
$sc[191] = "KESUSD";
$sc[192] = "KGSUSD";
$sc[193] = "USDKMF";
$sc[194] = "USDKRW";
$sc[195] = "USDKWD";
$sc[196] = "KWDUSD";
$sc[197] = "KYDUSD";
$sc[198] = "KZTUSD";
$sc[199] = "USDLBP";
$sc[200] = "LKRUSD";
$sc[201] = "LRDUSD";
$sc[202] = "USDLSL";
$sc[203] = "LSLUSD";
$sc[204] = "LTLUSD";
$sc[205] = "LVLUSD";
$sc[206] = "MADUSD";
$sc[207] = "USDMDL";
$sc[208] = "MDLUSD";
$sc[209] = "USDMKD";
$sc[210] = "MKDUSD";
$sc[211] = "USDMNT";
$sc[212] = "USDMOP";
$sc[213] = "MOPUSD";
$sc[214] = "USDMRO";
$sc[215] = "USDMUR";
$sc[216] = "MURUSD";
$sc[217] = "USDMVR";
$sc[218] = "MVRUSD";
$sc[219] = "USDMWK";
$sc[220] = "USDMXN";
$sc[221] = "USDMYR";
$sc[222] = "MZNUSD";
$sc[223] = "USDNAD";
$sc[224] = "NADUSD";
$sc[225] = "USDNGN";
$sc[226] = "NGNUSD";
$sc[227] = "USDNIO";
$sc[228] = "NIOUSD";
$sc[229] = "USDNOK";
$sc[230] = "USDNPR";
$sc[231] = "NPRUSD";
$sc[232] = "USDNZD";
$sc[233] = "NZDUSD";
$sc[234] = "OMRUSD";
$sc[235] = "USDPAB";
$sc[236] = "PABUSD";
$sc[237] = "USDPEN";
$sc[238] = "PENUSD";
$sc[239] = "USDPGK";
$sc[240] = "PGKUSD";
$sc[241] = "USDPHP";
$sc[242] = "USDPKR";
$sc[243] = "PKRUSD";
$sc[244] = "USDPLN";
$sc[245] = "PLNUSD";
$sc[246] = "USDPYG";
$sc[247] = "QARUSD";
$sc[248] = "USDRON";
$sc[249] = "RONUSD";
$sc[250] = "RSDUSD";
$sc[251] = "USDRUB";
$sc[252] = "USDRWF";
$sc[253] = "USDSAR";
$sc[254] = "USDSBD";
$sc[255] = "USDSCR";
$sc[256] = "SDGUSD";
$sc[257] = "USDSEK";
$sc[258] = "USDSGD";
$sc[259] = "USDSLL";
$sc[260] = "SRDUSD";
$sc[261] = "USDSTD";
$sc[262] = "USDSVC";
$sc[263] = "SVCUSD";
$sc[264] = "SYPUSD";
$sc[265] = "USDSZL";
$sc[266] = "SZLUSD";
$sc[267] = "USDTHB";
$sc[268] = "TJSUSD";
$sc[269] = "TNDUSD";
$sc[270] = "USDTOP";
$sc[271] = "USDTRY";
$sc[272] = "USDTTD";
$sc[273] = "USDTWD";
$sc[274] = "UAHUSD";
$sc[275] = "USDUGX";
$sc[276] = "USDUYU";
$sc[277] = "GOLD";
$sc[278] = "CRUDE";
$sc[279] = "CRBINDEX";



$cont = file_get_contents('fuck.txt');
$stop = ".";
for ( $i = 81; $i <= 279; $i++ ) {

$high = "1";

$low = "1";

$avgp = "1"; 

$filename= $sc[$i].".php"; //The name of your .txt file
unlink($filename);

$fillee = $sc[$i]."PREVIOUS.txt";
if ( file_exists($fillee) ) {


$file_handle = fopen($fillee, "rb");
$c = 0;
while (!feof($file_handle) ) {

$line_of_text = fgets($file_handle);
if($line_of_text != "" ) {
$tc[$c] = $line_of_text;
}
$c++;
}

$high = max($tc);

$low = min($tc);

$avgp = array_sum($tc)/count($tc); 
$tc = "";
}

$conti = str_replace("ICICIBANK",$sc[$i],$cont);
$contii = str_replace("average",$avgp,$conti);
$contiii = str_replace("previoushigh",$high,$contii);
$contiiii = str_replace("previouslow",$low,$contiii);


$file = fopen($filename, "a+" );

fwrite( $file, $contiiii ); //Write the data input box to the .txt file.

fclose( $file ); //Close the file from further editing

}
$End = getTime(); 

echo "&T= ".number_format(($End - $Start),2)." secs";
echo "&result=Updated in....";
?>