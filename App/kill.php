<?php
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();

$sc[0] = "USDINR";
$sc[1] = "EURUSD";
$sc[2] = "USDKRW";
$sc[3] = "AEDUSD";
$sc[4] = "ISKUSD";
$sc[5] = "JMDUSD";
$sc[6] = "USDMDL";
$sc[7] = "USDBYR";
$sc[8] = "USDTHB";
$sc[9] = "USDJMD";
$sc[10] = "RONUSD";
$sc[11] = "TOPUSD";
$sc[12] = "USDDKK";
$sc[13] = "ARSUSD";
$sc[14] = "USDNOK";
$sc[15] = "ANGUSD";
$sc[16] = "USDMUR";
$sc[17] = "USDZMK";
$sc[18] = "NZDUSD";
$sc[19] = "DZDUSD";
$sc[20] = "USDCAD";
$sc[21] = "USDXAF";
$sc[22] = "USDAED";
$sc[23] = "AFNUSD";
$sc[24] = "USDALL";
$sc[25] = "ALLUSD";
$sc[26] = "USDANG";
$sc[27] = "ANGUSD";
$sc[28] = "AOAUSD";
$sc[29] = "USDARS";
$sc[30] = "ARSUSD";
$sc[31] = "USDAUD";
$sc[32] = "USDAWG";
$sc[33] = "AWGUSD";
$sc[34] = "AZNUSD";
$sc[35] = "USDBAM";
$sc[36] = "BAMUSD";
$sc[37] = "USDBBD";
$sc[38] = "BBDUSD";
$sc[39] = "BDTUSD";
$sc[40] = "BGNUSD";
$sc[41] = "USDBHD";
$sc[42] = "USDBIF";
$sc[43] = "USDBMD";
$sc[44] = "USDBND";
$sc[45] = "USDBOB";
$sc[46] = "USDBRL";
$sc[47] = "USDBSD";
$sc[48] = "BTNUSD";
$sc[49] = "USDBYR";
$sc[50] = "USDBZD";
$sc[51] = "USDCAD";
$sc[52] = "USDCDF";
$sc[53] = "USDCHF";
$sc[54] = "CLFUSD";
$sc[55] = "USDCLP";
$sc[56] = "USDCNY";
$sc[57] = "CNYUSD";
$sc[58] = "USDCOP";
$sc[59] = "CUPUSD";
$sc[60] = "CVEUSD";
$sc[61] = "USDCZK";
$sc[62] = "DJFUSD";
$sc[63] = "USDDKK";
$sc[64] = "USDDOP";
$sc[65] = "DZDUSD";
$sc[66] = "USDEGP";
$sc[67] = "EGPUSD";
$sc[68] = "ERNUSD";
$sc[69] = "USDETB";
$sc[70] = "USDEUR";
$sc[71] = "FIMUSD";
$sc[72] = "USDFJD";
$sc[73] = "FJDUSD";
$sc[74] = "FKPUSD";
$sc[75] = "USDGBP";
$sc[76] = "GELUSD";
$sc[77] = "USDGHS";
$sc[78] = "GHSUSD";
$sc[79] = "GIPUSD";
$sc[80] = "USDGMD";
$sc[81] = "GMDUSD";
$sc[82] = "USDGNF";
$sc[83] = "USDGTQ";
$sc[84] = "GTQUSD";
$sc[85] = "USDHKD";
$sc[86] = "USDHNL";
$sc[87] = "HNLUSD";
$sc[88] = "USDHRK";
$sc[89] = "HRKUSD";
$sc[90] = "USDHTG";
$sc[91] = "HTGUSD";
$sc[92] = "USDHUF";
$sc[93] = "USDIDR";
$sc[94] = "USDIEP";
$sc[95] = "IEPUSD";
$sc[96] = "USDILS";
$sc[97] = "ILSUSD";
$sc[98] = "USDINR";
$sc[99] = "INRUSD";
$sc[100] = "USDIQD";
$sc[101] = "USDIRR";
$sc[102] = "ISKUSD";
$sc[103] = "USDJMD";
$sc[104] = "JMDUSD";
$sc[105] = "USDJOD";
$sc[106] = "JODUSD";
$sc[107] = "USDJPY";
$sc[108] = "JPYUSD";
$sc[109] = "USDKES";
$sc[110] = "KESUSD";
$sc[111] = "KGSUSD";
$sc[112] = "USDKMF";
$sc[113] = "USDKRW";
$sc[114] = "USDKWD";
$sc[115] = "KWDUSD";
$sc[116] = "KYDUSD";
$sc[117] = "KZTUSD";
$sc[118] = "USDLBP";
$sc[119] = "LKRUSD";
$sc[120] = "LRDUSD";
$sc[121] = "USDLSL";
$sc[122] = "LSLUSD";
$sc[123] = "LTLUSD";
$sc[124] = "LVLUSD";
$sc[125] = "MADUSD";
$sc[126] = "USDMDL";
$sc[127] = "MDLUSD";
$sc[128] = "USDMKD";
$sc[129] = "MKDUSD";
$sc[130] = "USDMNT";
$sc[131] = "USDMOP";
$sc[132] = "MOPUSD";
$sc[133] = "USDMRO";
$sc[134] = "USDMUR";
$sc[135] = "MURUSD";
$sc[136] = "USDMVR";
$sc[137] = "MVRUSD";
$sc[138] = "USDMWK";
$sc[139] = "USDMXN";
$sc[140] = "USDMYR";
$sc[141] = "MZNUSD";
$sc[142] = "USDNAD";
$sc[143] = "NADUSD";
$sc[144] = "USDNGN";
$sc[145] = "NGNUSD";
$sc[146] = "USDNIO";
$sc[147] = "NIOUSD";
$sc[148] = "USDNOK";
$sc[149] = "USDNPR";
$sc[150] = "NPRUSD";
$sc[151] = "USDNZD";
$sc[152] = "NZDUSD";
$sc[153] = "OMRUSD";
$sc[154] = "USDPAB";
$sc[155] = "PABUSD";
$sc[156] = "USDPEN";
$sc[157] = "PENUSD";
$sc[158] = "USDPGK";
$sc[159] = "PGKUSD";
$sc[160] = "USDPHP";
$sc[161] = "USDPKR";
$sc[162] = "PKRUSD";
$sc[163] = "USDPLN";
$sc[164] = "PLNUSD";
$sc[165] = "USDPYG";
$sc[166] = "QARUSD";
$sc[167] = "USDRON";
$sc[168] = "RONUSD";
$sc[169] = "RSDUSD";
$sc[170] = "USDRUB";
$sc[171] = "USDRWF";
$sc[172] = "USDSAR";
$sc[173] = "USDSBD";
$sc[174] = "USDSCR";
$sc[175] = "SDGUSD";
$sc[176] = "USDSEK";
$sc[177] = "USDSGD";
$sc[178] = "USDSLL";
$sc[179] = "SRDUSD";
$sc[180] = "USDSTD";
$sc[181] = "USDSVC";
$sc[182] = "SVCUSD";
$sc[183] = "SYPUSD";
$sc[184] = "USDSZL";
$sc[185] = "SZLUSD";
$sc[186] = "USDTHB";
$sc[187] = "TJSUSD";
$sc[188] = "TNDUSD";
$sc[189] = "USDTOP";
$sc[190] = "USDTRY";
$sc[191] = "USDTTD";
$sc[192] = "USDTWD";
$sc[193] = "UAHUSD";
$sc[194] = "USDUGX";
$sc[195] = "USDUYU";
$sc[196] = "GOLD";
$sc[197] = "CRUDE";
$sc[198] = "CRBINDEX";

$sn[0] = "India Rupee";
$sn[1] = "Euro Member Countries";
$sn[2] = "Korea (South) Won";
$sn[3] = "United Arab Emirates Dirham";
$sn[4] = "Iceland Krona";
$sn[5] = "Jamaica Dollar";
$sn[6] = "Moldova Leu";
$sn[7] = "Belarus Ruble";
$sn[8] = "Thailand Baht";
$sn[9] = "Jamaica Dollar";
$sn[10] = "Romania New Leu";
$sn[11] = "Tonga Pa'anga";
$sn[12] = "Denmark Krone";
$sn[13] = "Argentina Peso";
$sn[14] = "Norway Krone";
$sn[15] = "Netherlands Antilles Guilder";
$sn[16] = "Mauritius Rupee";
$sn[17] = "Zambia Kwacha";
$sn[18] = "New Zealand Dollar";
$sn[19] = "Algeria Dinar";
$sn[20] = "Canada Dollar";
$sn[21] = "Communauté Financière Africaine (BEAC) CFA Franc BEAC";
$sn[22] = "United Arab Emirates Dirham";
$sn[23] = "Afghanistan Afghani";
$sn[24] = "Albania Lek";
$sn[25] = "Albania Lek";
$sn[26] = "Netherlands Antilles Guilder";
$sn[27] = "Netherlands Antilles Guilder";
$sn[28] = "Angola Kwanza";
$sn[29] = "Argentina Peso";
$sn[30] = "Argentina Peso";
$sn[31] = "Australia Dollar";
$sn[32] = "Aruba Guilder";
$sn[33] = "Aruba Guilder";
$sn[34] = "Azerbaijan New Manat";
$sn[35] = "Bosnia and Herzegovina Convertible Marka";
$sn[36] = "Bosnia and Herzegovina Convertible Marka";
$sn[37] = "Barbados Dollar";
$sn[38] = "Barbados Dollar";
$sn[39] = "Bangladesh Taka";
$sn[40] = "Bulgaria Lev";
$sn[41] = "Bahrain Dinar";
$sn[42] = "Burundi Franc";
$sn[43] = "Bermuda Dollar";
$sn[44] = "Brunei Darussalam Dollar";
$sn[45] = "Bolivia Boliviano";
$sn[46] = "Brazil Real";
$sn[47] = "Bahamas Dollar";
$sn[48] = "Bhutan Ngultrum";
$sn[49] = "Belarus Ruble";
$sn[50] = "Belize Dollar";
$sn[51] = "Canada Dollar";
$sn[52] = "Congo/Kinshasa Franc";
$sn[53] = "Switzerland Franc";
#N/A
$sn[55] = "Chile Peso";
$sn[56] = "China Yuan Renminbi";
$sn[57] = "China Yuan Renminbi";
$sn[58] = "Colombia Peso";
$sn[59] = "Cuba Peso";
$sn[60] = "Cape Verde Escudo";
$sn[61] = "Czech Republic Koruna";
$sn[62] = "Djibouti Franc";
$sn[63] = "Denmark Krone";
$sn[64] = "Dominican Republic Peso";
$sn[65] = "Algeria Dinar";
$sn[66] = "Egypt Pound";
$sn[67] = "Egypt Pound";
$sn[68] = "Eritrea Nakfa";
$sn[69] = "Ethiopia Birr";
$sn[70] = "Euro Member Countries";
#N/A
$sn[72] = "Fiji Dollar";
$sn[73] = "Fiji Dollar";
$sn[74] = "Falkland Islands (Malvinas) Pound";
$sn[75] = "United Kingdom Pound";
$sn[76] = "Georgia Lari";
$sn[77] = "Ghana Cedi";
$sn[78] = "Ghana Cedi";
$sn[79] = "Gibraltar Pound";
$sn[80] = "Gambia Dalasi";
$sn[81] = "Gambia Dalasi";
$sn[82] = "Guinea Franc";
$sn[83] = "Guatemala Quetzal";
$sn[84] = "Guatemala Quetzal";
$sn[85] = "Hong Kong Dollar";
$sn[86] = "Honduras Lempira";
$sn[87] = "Honduras Lempira";
$sn[88] = "Croatia Kuna";
$sn[89] = "Croatia Kuna";
$sn[90] = "Haiti Gourde";
$sn[91] = "Haiti Gourde";
$sn[92] = "Hungary Forint";
$sn[93] = "Indonesia Rupiah";
#N/A
#N/A
$sn[96] = "Israel Shekel";
$sn[97] = "Israel Shekel";
$sn[98] = "India Rupee";
$sn[99] = "India Rupee";
$sn[100] = "Iraq Dinar";
$sn[101] = "Iran Rial";
$sn[102] = "Iceland Krona";
$sn[103] = "Jamaica Dollar";
$sn[104] = "Jamaica Dollar";
$sn[105] = "Jordan Dinar";
$sn[106] = "Jordan Dinar";
$sn[107] = "Japan Yen";
$sn[108] = "Japan Yen";
$sn[109] = "Kenya Shilling";
$sn[110] = "Kenya Shilling";
$sn[111] = "Kyrgyzstan Som";
$sn[112] = "Comoros Franc";
$sn[113] = "Korea (South) Won";
$sn[114] = "Kuwait Dinar";
$sn[115] = "Kuwait Dinar";
$sn[116] = "Cayman Islands Dollar";
$sn[117] = "Kazakhstan Tenge";
$sn[118] = "Lebanon Pound";
$sn[119] = "Sri Lanka Rupee";
$sn[120] = "Liberia Dollar";
$sn[121] = "Lesotho Loti";
$sn[122] = "Lesotho Loti";
$sn[123] = "Lithuania Litas";
$sn[124] = "Latvia Lat";
$sn[125] = "Morocco Dirham";
$sn[126] = "Moldova Leu";
$sn[127] = "Moldova Leu";
$sn[128] = "Macedonia Denar";
$sn[129] = "Macedonia Denar";
$sn[130] = "Mongolia Tughrik";
$sn[131] = "Macau Pataca";
$sn[132] = "Macau Pataca";
$sn[133] = "Mauritania Ouguiya";
$sn[134] = "Mauritius Rupee";
$sn[135] = "Mauritius Rupee";
$sn[136] = "Maldives (Maldive Islands) Rufiyaa";
$sn[137] = "Maldives (Maldive Islands) Rufiyaa";
$sn[138] = "Malawi Kwacha";
$sn[139] = "Mexico Peso";
$sn[140] = "Malaysia Ringgit";
$sn[141] = "Mozambique Metical";
$sn[142] = "Namibia Dollar";
$sn[143] = "Namibia Dollar";
$sn[144] = "Nigeria Naira";
$sn[145] = "Nigeria Naira";
$sn[146] = "Nicaragua Cordoba";
$sn[147] = "Nicaragua Cordoba";
$sn[148] = "Norway Krone";
$sn[149] = "Nepal Rupee";
$sn[150] = "Nepal Rupee";
$sn[151] = "New Zealand Dollar";
$sn[152] = "New Zealand Dollar";
$sn[153] = "Oman Rial";
$sn[154] = "Panama Balboa";
$sn[155] = "Panama Balboa";
$sn[156] = "Peru Nuevo Sol";
$sn[157] = "Peru Nuevo Sol";
$sn[158] = "Papua New Guinea Kina";
$sn[159] = "Papua New Guinea Kina";
$sn[160] = "Philippines Peso";
$sn[161] = "Pakistan Rupee";
$sn[162] = "Pakistan Rupee";
$sn[163] = "Poland Zloty";
$sn[164] = "Poland Zloty";
$sn[165] = "Paraguay Guarani";
$sn[166] = "Qatar Riyal";
$sn[167] = "Romania New Leu";
$sn[168] = "Romania New Leu";
$sn[169] = "Serbia Dinar";
$sn[170] = "Russia Ruble";
$sn[171] = "Rwanda Franc";
$sn[172] = "Saudi Arabia Riyal";
$sn[173] = "Solomon Islands Dollar";
$sn[174] = "Seychelles Rupee";
$sn[175] = "Sudan Pound";
$sn[176] = "Sweden Krona";
$sn[177] = "Singapore Dollar";
$sn[178] = "Sierra Leone Leone";
$sn[179] = "Suriname Dollar";
$sn[180] = "São Tomé and Príncipe Dobra";
$sn[181] = "El Salvador Colon";
$sn[182] = "El Salvador Colon";
$sn[183] = "Syria Pound";
$sn[184] = "Swaziland Lilangeni";
$sn[185] = "Swaziland Lilangeni";
$sn[186] = "Thailand Baht";
$sn[187] = "Tajikistan Somoni";
$sn[188] = "Tunisia Dinar";
$sn[189] = "Tonga Pa'anga";
$sn[190] = "Turkey Lira";
$sn[191] = "Trinidad and Tobago Dollar";
$sn[192] = "Taiwan New Dollar";
$sn[193] = "Ukraine Hryvna";
$sn[194] = "Uganda Shilling";
$sn[195] = "Uruguay Peso";
$sn[196] = "GOLD";
$sn[197] = "CRUDE OIL";
$sn[198] = "CRB INDEX";



$cont = file_get_contents('fuck.txt');
$stop = ".";
for ( $i = 0; $i <= 198; $i++ ) {


$myFile = $sc[$i].$stop."php";

unlink($myFile);

$xFile = $sc[$i].$stop."txt";

unlink($xFile);
$fil = $sc[$i].".csv";
if ( filesize($fil) >0 ) {
$row = 0;
$fille = fopen($fil, "r");
while (($data = fgetcsv($fille, 8000, ",")) !== FALSE) {

if ( $row == 1) 
{  
$avgp = $data[4];
$high = $data[2];
$low = $data[3];
}
   
    $row++; 
}
fclose($fille);

}

$conti = str_replace("ICICIBANK",$sc[$i],$cont);
$contii = str_replace("icicibank",$sc[$i],$conti);
$contiii = str_replace("average",$avgp,$contii);
$contiiii = str_replace("previoushigh",$high,$contiii);
$contiiiii = str_replace("previouslow",$low,$contiiii);
$contiiiiii = str_replace("ASSHOLE",$sn[$i],$contiiiii);


$filename= $sc[$i].$stop."php"; //The name of your .txt file
$file = fopen($filename, "a+" );









fwrite( $file, $contiiiiii."\r\n" ); //Write the data input box to the .txt file.

fclose( $file ); //Close the file from further editing

}
$End = getTime(); 

echo "&T= ".number_format(($End - $Start),2)." secs";
echo "&result=Updated in....";
?>