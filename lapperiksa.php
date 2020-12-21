<?php
$q=$jp->sql("select distinct(tgl) from periksa WHERE tgl>='".$_POST[tgl]."' and tgl<='".$_POST[tgl1]."'");
$n = 0; 
$menu = array();


while($oPromo = $jp->fetch($q))
{
$menu[$n] = $oPromo[tgl];
$n++;
}

function partition(&$arr,$leftIndex,$rightIndex)
{
    $pivot=$arr[($leftIndex+$rightIndex)/2];
     
    while ($leftIndex <= $rightIndex) 
    {        
        while ($arr[$leftIndex] < $pivot)             
                $leftIndex++;
        while ($arr[$rightIndex] > $pivot)
                $rightIndex--;
        if ($leftIndex <= $rightIndex) {  
                $tmp = $arr[$leftIndex];
                $arr[$leftIndex] = $arr[$rightIndex];
                $arr[$rightIndex] = $tmp;
                $leftIndex++;
                $rightIndex--;
        }
    }
   // echo implode(",",$arr)." @pivot $pivot<br>";
    return $leftIndex;
}
 
function quickSort(&$arr, $leftIndex, $rightIndex)
{
    $index = partition($arr,$leftIndex,$rightIndex);
    if ($leftIndex < $index - 1)
        quickSort($arr, $leftIndex, $index - 1);
    if ($index < $rightIndex)
        quickSort($arr, $index, $rightIndex);
}

//echo implode(",",$menu)." @unsorted<br>";
quickSort($menu,0,count($menu)-1);
//echo implode(",",$menu)." @sorted<br>";   

$jp->sql("delete from temp");
for($i=0;$i<=count($menu)-1;$i++) {
$jp->sql("INSERT INTO temp select ".$i.",noperiksa from periksa WHERE tgl = '".$menu[$i]."' ");
}
?>
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>::: <?=$title?> :::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script src="js/advviewer.js"></script>
<script>
//==============================SCRIPT TAMBAHAN UNTUK FILTER KEYBOARD======================================================
function numbersonly(e) {
    var unicode = e.charCode ? e.charCode : e.keyCode
    if ((unicode != 8) && (unicode != 13) && (unicode != 37) && (unicode != 39) && (unicode != 9)) { //if the key isn't the backspace key (which we should allow)
        if (unicode < 48 || unicode > 57) //if not a number
            return false //disable key press
    }
}
//===========================================================================================

function ConfirmDel(id){
	if(confirm('Hapus..?')){
		window.location="proses.php?page=pengolah&action=delete&nip="+id;
	}
}


</script>




<style type="text/css">
<!--
.style1 {color: #000;font-family:FontAwesome; font-size:12px}
.style2 {color: #000000;font-family:FontAwesome; font-size:12px;}
-->
</style>


</head>
<body>


<h3>Laporan Pemeriksaan Dari Tanggal <?=$jp->todate($_POST[tgl])?> S/d Tanggal <?=$jp->todate($_POST[tgl1])?> </h3>
<?php 
		
		$q="SELECT a.*,b.nama as nmpasien, c.nama as nmterapis FROM periksa a INNER JOIN pasien b ON a.norm=b.norm INNER JOIN terapis c ON a.kdterapis=c.kdterapis inner join temp z on a.noperiksa=z.noperiksa where tgl>='".$_POST[tgl]."' and tgl<='".$_POST[tgl1]."' order by nourut";
		$result=$jp->sql($q);
		
		?>
<table id="example2" class="table table-bordered table-hover" width="100%">
 <thead style="background:#f1b855; color:white; font-weight: bold;">
  <tr>
    <th width="25" align="center" valign="middle" bgcolor="#605ca8">No</th>
   <th valign="middle" bgcolor="#605ca8">No Periksa </th>
    <th valign="middle" bgcolor="#605ca8">Pasien</th>
    <th  valign="middle" bgcolor="#605ca8">Terapis</th>
    <th  valign="middle" bgcolor="#605ca8">Tanggal</th>
    <th  valign="middle" bgcolor="#605ca8">Jam</th>
    <th  valign="middle" bgcolor="#605ca8">Keluhan</th>
    <th  valign="middle" bgcolor="#605ca8">Diagnosa</th>
    <th  valign="middle" bgcolor="#605ca8">Evaluasi</th>
    

     
   
  </tr>
  </thead>
   <?php $n = 0;while($row = $jp->fetch($result)){ $n++; 
if ($n%2==0)
	   {$c = "info";}
	   else
	   {$c = "danger";}
   ?>
  <tr class="<?=$c?>">
    <td width="25" align="right" valign="top"><?=$n?>.</td>
     <td valign="top" align="justify"><?=$row[noperiksa]?></td>
    <td valign="top" align="justify"><?=$row[nmpasien]?></td>
    <td valign="top" align="justify"><?=$row[nmterapis]?></td>
    <td valign="top" align="justify"><?=$jp->todate($row[tgl])?></td>
     <td valign="top" align="justify"><?=$row[jam]?></td>
      <td valign="top" align="justify"><?=$row[keluhan]?></td>
       <td valign="top" align="justify"><?=$row[fisioterapi]?></td>
        <td valign="top" align="justify"><?=$row[evaluasi]?></td>
  </tr>

  
  
  <?php } ?>
</table>




</body>
</html>