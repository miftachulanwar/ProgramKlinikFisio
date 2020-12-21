

 
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


<h3>Laporan Pasien </h3>
<?php 
		
		$q="select * from pasien  ";
		$result=$jp->sql($q);
		
		?>
<table id="example2" class="table table-bordered table-hover" width="100%">
 <thead style="background:#f1b855; color:white; font-weight: bold;">
  <tr>
    <th width="27" align="center" valign="middle" bgcolor="#605ca8">No</th>
     <th valign="middle" bgcolor="#605ca8">No RM </th>
    <th valign="middle" bgcolor="#605ca8">Nama</th>
    <th valign="middle" bgcolor="#605ca8">Alamat</th>
    <th valign="middle" bgcolor="#605ca8">Agama</th>
    <th valign="middle" bgcolor="#605ca8">Telepon</th>
    <th valign="middle" bgcolor="#605ca8">Pekerjaan</th>
     <th valign="middle" bgcolor="#605ca8">TTL</th>
   
  </tr>
  </thead>
   <?php $n = 0;while($row = $jp->fetch($result)){ $n++; 
if ($n%2==0)
	   {$c = "info";}
	   else
	   {$c = "danger";}
   ?>
  <tr class="<?=$c?>">
    <td width="27" align="right" valign="top"><?=$n?>.</td>
     <td valign="top" align="justify"><?=$row[norm]?></td>
    <td valign="top" align="justify"><?=$row[nama]?></td>
    <td valign="top" align="justify"><?=$row[alamat]?></td>
    <td valign="top" align="justify"><?=$row[agama]?></td>
    <td valign="top" align="justify"><?=$row[telepon]?></td>
    <td valign="top" align="justify"><?=$row[pekerjaan]?></td>
	<td valign="top" align="justify"><?=$row[tmplhr]?>/<?=$jp->todate($row[tgllhr])?></td>
        
  </tr>

  
  
  <?php } ?>
</table>




</body>
</html>