<?php
//error_reporting(0);
// SCAN SEMUA FILE DI DIREKTORI KML DAN OUTPUT SEBAGAI ARRAY


//$PROV = "BANTEN";
//$JENENGE = "Tangerang";

$x=  scandir("D:\\xampp\\htdocs\\FilterKecamatan\\");
$asda3a3[] = $x;
$hasilperasdsaa = $asda3a3[0];
$filesxxada32 = array_diff($hasilperasdsaa, array('.', '..'));
$notttadsaadad = (array_values($filesxxada32));
for($yy=9;$yy<35;$yy++)
{
    //print_r($notttadsaadad[$yy]."<br>");
    $xa=  scandir("D:\\xampp\\htdocs\\FilterKecamatan\\".$notttadsaadad[$yy]."\\");
    $dsada3 = array_diff($xa, array('.', '..'));
    $ffae3 = (array_values($dsada3));
    for($jancok=0;$jancok<count($ffae3);$jancok++)
    {
        //print_r($ffae3[$jancok]."<br>");
        $dsa3=  scandir("D:\\xampp\\htdocs\\FilterKecamatan\\".$notttadsaadad[$yy]."\\".$ffae3[$jancok]);
        $dsada34aa = array_diff($dsa3, array('.', '..'));
        $ffae3aa4 = (array_values($dsada34aa));
        for($jy=0;$jy<count($ffae3aa4);$jy++)
        {
            //print_r($ffae3aa4[$jy]."<br>");
            for($ta=0;$ta<count($ffae3aa4);$ta++)
            {
                $source_file = 'D:\\xampp\\htdocs\\FilterKecamatan\\'.$notttadsaadad[$yy].'\\'.$ffae3[$jancok].'\\'.$ffae3aa4[$ta];
                $destination_path = 'D:\\xampp\\htdocs\\BACKUP ZIDANE\\'.$notttadsaadad[$yy].'\\KML\\'.$ffae3[$jancok].'\\';
                //print_r($destination_path."<br>");
                rename($source_file, $destination_path . pathinfo($source_file, PATHINFO_BASENAME));
                //print_r(pathinfo($source_file, PATHINFO_BASENAME));
            }
        }
        
    }
}


/*$prov = 'Jawa Barat';
$nam = 'Bandung Barat';

$b=  scandir("D:\\xampp\\htdocs\\FilterKecamatan\\$prov\\$nam");
$arrayde[] = $b;
$hasilper = $arrayde[0];
$filesxxada = array_diff($hasilper, array('.', '..'));
$notttadsa = (array_values($filesxxada));
//print_r(count($notttadsa));


for($ta=0;$ta<count($notttadsa);$ta++)
{
    $source_file = 'D:\\xampp\\htdocs\\FilterKecamatan\\'.$prov.'\\'.$nam.'\\'.$notttadsa[$ta];
    $destination_path = 'D:\\xampp\\htdocs\\BACKUP ZIDANE\\'.$prov.'\\KML\\'.$nam.'\\';
    //print_r($destination_path."<br>");
    rename($source_file, $destination_path . pathinfo($source_file, PATHINFO_BASENAME));
    //print_r(pathinfo($source_file, PATHINFO_BASENAME));
}

*/
/*for($ii=34;$ii<36;$ii++)
{
    $PROV = $hasilper[$ii];
    $c = scandir("D:\\xampp\\htdocs\\BACKUP ZIDANE\\$PROV\\KML\\");
    $filesxx = array_diff($c, array('.', '..'));
    $nottt = (array_values($filesxx));
    for($xx=0;$xx<count($nottt);$xx++)
    {
        $JENENGE = $nottt[$xx];
        //print_r($JENENGE);
        $namaprov = "$PROV\\KML\\$JENENGE";
        $dir = $namaprov."/";
        $a = scandir($namaprov);
        foreach($a  as $filxe)
        {
            if ($filxe == '.' || $filxe == '..') {
                continue;
            }
            if (!is_dir($filxe))
            {
                //print_r($filxe);
                // MENDAPATKAN NAMA PROVINSI DAN NAMA FILE KML KECAMATAN
                $dom = new DOMDocument();
                $dom->load("http://localhost/BACKUP ZIDANE/$PROV/KML/$JENENGE/".$filxe,LIBXML_NOWARNING);
                $coordinates = $dom->getElementsByTagName("description");
                foreach($coordinates as $coordinate){
                    $htmlnya = ( $coordinate->nodeValue);
                }
                preg_match_all('#<td[^>]*>(.*?)</tr>#is', $htmlnya, $lines);
                $haus = $lines[0];
                $array = array_map( 'strip_tags', $haus );
                $arraya = array_map('trim', $array);
                $str = trim(preg_replace('/\s\s+/', '-', $arraya[8]));
                $str2 = trim(preg_replace('/\s\s+/', '-', $arraya[0]));
                $jaaaaxx = str_replace("/","_",$str);
                $jaw = (explode("-",$jaaaaxx));
                $haaaa = $jaw[1].'-';
                $jawa = (explode("-",$haaaa));
                $gabung = ($jaw[1]."-".$str2);
                $hasilnyaa = (explode("-",$gabung));
                $gundah = $hasilnyaa[0]."-";
                $arrayaasda = explode('-', $gundah);
                $newww = ($arrayaasda);
                //print_r($str2. "-". $jaw[1]."<br>");
                $jaaaa = str_replace("/","_",$str2);
                //print_r($jaaaaxx);
                //print_r($arrayaasda[0]);
                //print_r($arraya);
                //print_r($jaaaaxx." - " .$jaaaa."<br>");
                foreach($newww as $folder) {
                    $yourDirectory = "D:\\xampp\\htdocs\\BACKUP ZIDANE\\$namaprov\\".$folder;
                    if(! is_file($yourDirectory)) {
                        mkdir($yourDirectory);
                    }       
                }
                $source_file ="D:\\xampp\\htdocs\\BACKUP ZIDANE\\$namaprov\\".$jaaaa.".kml";
                $destination_path = "D:\\xampp\\htdocs\\BACKUP ZIDANE\\$namaprov\\".$jaw[1];
                rename($source_file,$destination_path.'\\'.pathinfo($filxe,PATHINFO_BASENAME));
                //print_r( pathinfo($filxe,PATHINFO_BASENAME));
                //echo $source_file;
            }
        }
    }
    
    //print_r($c);
    
   
}
//print_r($hasilperx);

*/

?>
<div style="font-size:64px; color:'#dddddd' "><i>SUKSES MOVE FILE !!!!!!!!</i></div>