<?php
$txt=$_REQUEST['txt_cont'];
$type=$_REQUEST['lang'];
if($txt=='')
{
    header('location:index.php');
}
$arr=explode("\n",$txt);
$res=[];
$nores=[];
for($x=0;$x<count($arr);$x++)
{
$one=$arr[$x];
$resone='';
$noresone='';
        for($i=0;$i<strlen($one);$i++)
        {
            $cr= substr($one,$i,1);
            if(ord($cr)>47 && ord($cr)<123 or ord($cr)==32 )
            { 
            $resone=$resone.$cr;  
            }

            if(ord($cr)<48 or ord($cr)>122 )
            { 
                $noresone=$noresone.$cr;
            }
        }
        $resone=trim($resone);
        $noresone=trim($noresone);
        $res[$x]=$resone;
        $nores[$x]=$noresone;
}
$nameEng='eng.csv';
$nameAr='arab.txt';
$fnTxtEng=implode("\n",$res);
file_put_contents($nameEng,$fnTxtEng);
$fnTxtAr=implode("\n",$nores);
file_put_contents($nameAr,$fnTxtAr);
header("Content-type:text/plain");
        if($type=='eng')
        {
            header("Content-Disposition:attachment;filename=".$nameEng);
            readfile($nameEng);
        }elseif($type=='arb')
        {
            header("Content-Disposition:attachment;filename=".$nameAr);
            readfile($nameAr);
        }
unlink($nameAr);
unlink($nameEng);

?>
