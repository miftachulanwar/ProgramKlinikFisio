

 
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
<?php 
		$bln = $jp->fetch($jp->sql("select * from bulan where idbulan='".$_POST[idbulan]."'"));
		$kary = $jp->fetch($jp->sql("select * from pegawai where kdpeg='".$_POST[kdpeg]."'"));
		
		?>

<h3>LAPORAN PENILAIN PEGAWAI <?=strtoupper($kary[nama])?>  BULAN <?=strtoupper($bln[nmbulan])?> TAHUN <?=$_POST[tahun]?>
 </h3>
 
  <div class="box-header with-border">
              <h3 class="box-title">KPI</h3>
            </div> 

                  <?php 
		
		$q="select * from nilai a inner join kpi b on a.kode=b.idkpi where kdpeg='".$_POST[kdpeg]."' and idbulan='".$_POST[idbulan]."' and tahun='".$_POST[tahun]."' and a.jenis='KPI' order by idkpi asc";
		$result=$jp->sql($q);
		
		?>
<table id="example2" class="table table-bordered table-hover" width="60%" align="left">
 <thead style="background:#f1b855; color:white; font-weight: bold;">
  <tr>
     <th width="48%"  valign="middle" bgcolor="#605ca8">KPI</th>
    <th width="16%"  valign="middle" bgcolor="#605ca8">BOBOT</th>
    <th width="14%"  valign="middle" bgcolor="#605ca8">SKOR</th>
     <th width="22%"  valign="middle" bgcolor="#605ca8">SUB TOTAL</th>
  </tr>
  </thead>
   <?php $n = 0;$tot=0;while($row = $jp->fetch($result)){ $n++; 
   $tot = $tot + $row[jumlah]*$row[bobot];

   ?>
  <tr class="danger">
     <td  valign="top" align="justify"><?=$row[nama]?></td>
    <td  valign="top" align="right"><?=$row[bobot]?></td>
    <td  valign="top" align="right"> <?=$row[jumlah]?>	</td>
	<td  valign="top" align="right"> <?=$row[jumlah]*$row[bobot]?>	</td>
      
  </tr>
  
  <?php } ?>
  <thead style="background:#f1b855; color:white; font-weight: bold;">
  <tr>
     <td  valign="top" align="justify" colspan="3">TOTAL</td>
   
	<td  valign="top" align="right"> <?=$tot?>	</td>
      
  </tr>
  </thead>
</table>
 
 
 <div class="box-header with-border">
              <h3 class="box-title">PERINGATAN</h3>
            </div> 

                  <?php 
		
		$q="select * from nilai a inner join peringatan b on a.kode=b.idperingatan where kdpeg='".$_POST[kdpeg]."' and idbulan='".$_POST[idbulan]."' and tahun='".$_POST[tahun]."' and a.jenis='PERINGATAN' order by idperingatan asc";
		$result=$jp->sql($q);
		
		?>
<table id="example3" class="table table-bordered table-hover" width="60%" align="left">
 <thead style="background:#f1b855; color:white; font-weight: bold;">
  <tr>
     <th width="49%"  valign="middle" bgcolor="#605ca8">JENIS</th>
    <th width="16%"  valign="middle" bgcolor="#605ca8">BOBOT</th>
    <th width="14%"  valign="middle" bgcolor="#605ca8">JUMLAH</th>
     <th width="21%"  valign="middle" bgcolor="#605ca8">SUB TOTAL</th>
  </tr>
  </thead>
   <?php $n = 0;$tot1=0;while($row = $jp->fetch($result)){ $n++; 
   $tot1 = $tot1 + $row[jumlah]*$row[bobot];

   ?>
  <tr class="info">
     <td  valign="top" align="justify"><?=$row[jenis]?></td>
    <td  valign="top" align="right"><?=$row[bobot]?></td>
    <td  valign="top" align="right"> <?=$row[jumlah]?>	</td>

	<td  valign="top" align="right"> <?=$row[jumlah]*$row[bobot]?>	</td>
      
  </tr>
  
  <?php } ?>
  <thead style="background:#f1b855; color:white; font-weight: bold;">
  <tr>
     <td  valign="top" align="justify" colspan="3">TOTAL</td>
   
	<td  valign="top" align="right"> <?=$tot1?>	</td>
      
  </tr>
  </thead>
</table>
 
 
 <div class="box-header with-border">
              <h3 class="box-title">KETIDAKHADIRAN</h3>
            </div> 

                  <?php 
		
		$q="select * from nilai a inner join ketidakhadiran b on a.kode=b.idketidakhadiran where kdpeg='".$_POST[kdpeg]."' and idbulan='".$_POST[idbulan]."' and tahun='".$_POST[tahun]."' and a.jenis='KETIDAKHADIRAN' order by idketidakhadiran asc";
		$result=$jp->sql($q);
		
		?>
<table id="example4" class="table table-bordered table-hover" width="60%" align="left">
 <thead style="background:#f1b855; color:white; font-weight: bold;">
  <tr>
     <th width="42%"  valign="middle" bgcolor="#605ca8">INDIKATOR</th>
    <th width="14%"  valign="middle" bgcolor="#605ca8">BOBOT</th>
    <th width="13%"  valign="middle" bgcolor="#605ca8">JUMLAH</th>
    <th width="13%"  valign="middle" bgcolor="#605ca8">SKOR</th>
     <th width="18%"  valign="middle" bgcolor="#605ca8">SUB TOTAL</th>
  </tr>
  </thead>
   <?php $n = 0;$tot2=0;while($row = $jp->fetch($result)){ $n++; 
   $tot2 = $tot2 + $row[jumlah]*$row[bobot]*$row[skor];

   ?>
  <tr class="warning">
     <td  valign="top" align="justify"><?=$row[indikator]?></td>
    <td  valign="top" align="right"><?=$row[bobot]?></td>
    <td  valign="top" align="right"> <?=$row[jumlah]?>	</td>
 <td  valign="top" align="right"> <?=$row[skor]?>	</td>
	<td  valign="top" align="right"> <?=$row[jumlah]*$row[skor]*$row[bobot]?>	</td>
      
  </tr>
  
  <?php } ?>
  <thead style="background:#f1b855; color:white; font-weight: bold;">
  <tr>
     <td  valign="top" align="justify" colspan="4">TOTAL</td>
   
	<td  valign="top" align="right"> <?=$tot2?>	</td>
      
  </tr>
  </thead>
</table>
 
 
 
 <div class="box-header with-border">
              <h3 class="box-title">TOTAL</h3>
            </div> 

           
<table id="example5" class="table table-bordered table-hover" width="60%" align="left">
<thead style="background:#f1b855; color:white; font-weight: bold;">
  <tr>
     <th width="42%"  valign="middle" bgcolor="#605ca8">PENILAIAN</th>
    <th width="14%"  valign="middle" bgcolor="#605ca8">NILAI</th>
  </tr>
  </thead>

  <tr class="info">
     <td width="42%"  valign="middle" bgcolor="#605ca8">KPI</td>
     <td width="42%"  valign="middle" bgcolor="#605ca8" align="right"><?=$tot?></td>
     </tr>
     <tr class="info">
    <td width="14%"  valign="middle" bgcolor="#605ca8">KEDISIPLINAN</td>
     <td width="42%"  valign="middle" bgcolor="#605ca8" align="right"><?=$tot1+$tot2?></td>
     </tr>
     <tr class="info">
    <td width="13%"  valign="middle" bgcolor="#605ca8">SKOR</td>
     <td width="42%"  valign="middle" bgcolor="#605ca8" align="right"><?php $akhir =$tot-($tot1+$tot2); echo $akhir?></td>
        
  </tr>
 
   <tr class="info">
    <td width="13%"  valign="middle" bgcolor="#605ca8">BONUS</td>
     <td width="42%"  valign="middle" bgcolor="#605ca8" align="right">
	 <?php if ($akhir < 50) $bonus = "0"; 
	 	   else if (($akhir >= 50)&&($akhir <=75))  $bonus = "5";
		   else if (($akhir > 75)&&($akhir <=90))  $bonus = "10";
     	    else if ($akhir > 90) $bonus = "15";
		   
		   echo $bonus;?> %</td>
        
  </tr>
  </thead>
</table>
 
 





</body>
</html>