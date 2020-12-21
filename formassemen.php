<?php
error_reportting(0)
include 'includes/lib.inc.php';
include APP_ROOT."/includes/class.inc.php";
$jp = new jcore();
$hari = date("d-m-Y");
//header("Content-type: application/vnd-ms-excel");
//header("Content-Disposition: attachment; filename=lapsppd.xls");
?>
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Formulir Assesmen Responden</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {color: #000;font-family:FontAwesome; font-size:12px}
.style2 {color: #000000;font-family:FontAwesome; font-size:12px;}
.headerlaporan {
	font-family: "Times New Roman", Times, serif;
	font-size:20px;
	font-weight: bold;
}
.headerlaporan1 {
	font-family: "Times New Roman", Times, serif;
	font-size:16px;
	
}
-->
</style>


    
    


<style type="text/css" media="print">
@page { size:8.5in x 13in; }
div.page { page-break-after: always; }


@page1 { 
size: A4 landscape; 
margin: 0% 0% 0% 0%; filter: progid:DXImageTransform.Microsoft.BasicImage(Rotation=1); 
}
div.page1 { page-break-after: always; }


</style>

<style>
hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 2px;
} 
</style>
	<LINK rel="stylesheet" type"text/css" href="css/layar.css" media="screen"> 
	<script src="js/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/dataTables/jquery.dataTables.js"></script>
    <script src="plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
			$('#example2').DataTable({
          "paging": false,
          "lengthChange": false,
          "searching": false,
          "ordering": false,
          "info": false,
          "autoWidth": true
        });
		$('#example3').DataTable({
          "paging": false,
          "lengthChange": false,
          "searching": false,
          "ordering": false,
          "info": false,
          "autoWidth": true
        });
        });
    </script> 
</head>
<body>
<!--SPT 1 !-->
<div class="page">
<table id="example2" class="table table-bordered table-hover" width="100%" border="0" bgcolor="#a9a9a9">
<tr align="center" >  
<td rowspan="5" width="10%"><img src="images/logo.png" width="100"></td>
<td colspan="10" class="headerlaporan">Formulir Assesmen Responden </td></tr>
<tr align="center">  
<td colspan="10" class="headerlaporan1"> Klinik Pendidikan Akademi Fisioterapi Widya Husada Semarang </td></tr>
<tr align="center">  
<td colspan="10" class="headerlaporan1"> Alamat : Jl. Subali Raya No.12 Semarang Barat, Jawa Tengah 50146</td></tr>
</table>
<hr>
<?php
$hasil = $jp->fetch($jp->sql("SELECT *,b.nama as nmpasien, c.nama as nmterapis FROM periksa a INNER JOIN pasien b ON a.norm=b.norm INNER JOIN terapis c ON a.kdterapis=c.kdterapis where a.noperiksa='".$_REQUEST[noperiksa]."'"));

?>
<table id="example2" class="table table-bordered table-hover" width="100%" border="0">
<tr align="justify">
<td class="headerlaporan1" colspan="2">No Pemeriksaan</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[noperiksa]?></td>
</tr>
<tr align="justify">
<td class="headerlaporan1" colspan="2">No RM</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[norm]?></td>
</tr>
<tr align="justify">
<td class="headerlaporan1" colspan="2">Tanggal</td>
<td width="1%" class="headerlaporan1">:</td>
<td width="65%" class="headerlaporan1"><?=$jp->todate($hasil[tgl])?></td>
</tr>
<tr align="justify">
<td class="headerlaporan1" colspan="2">Jam</td>
<td width="1%" class="headerlaporan1">:</td>
<td width="65%" class="headerlaporan1"><?=($hasil[jam])?></td>
</tr>
<tr align="justify">
<td class="headerlaporan1" >A.</td>
<td class="headerlaporan1" colspan="3">Indentitas Pasien</td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">Nama</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[nmpasien]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">TTL</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[tmplhr]?> / <?=$jp->todate($hasil[tgllhr])?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">Alamat</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[alamat]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">Agama</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[agama]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">Pekerjaan</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[pekerjaan]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">Telepon</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[telepon]?> </td>
</tr>
<tr align="justify">
<td class="headerlaporan1" >B.</td>
<td class="headerlaporan1" colspan="3">Anamnese</td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">1. Keluhan Utama</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[keluhan]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">2. Riwayat Penyakit Sekarang</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[sekarang]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">3. Riwayat Penyakit Dahulu</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[dahulu]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">4. Riwayat Pribadi</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[pribadi]?> </td>
</tr>
<tr align="justify">
<td class="headerlaporan1" >C.</td>
<td class="headerlaporan1" colspan="3">Pemeriksaan Fisik</td>
</tr>
<tr align="justify">
<td class="headerlaporan1" >&nbsp;</td>
<td class="headerlaporan1" colspan="3">Tanda-tanda Vital</td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">1. TD</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[td]?> mmHg </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">2. HR</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[hr]?> x/mnt </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">3. Suhu</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[suhu]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">4. RR</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[rr]?> x/mnt </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">5. Skor Nyeri</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[skor]?> </td>
</tr>
<tr align="justify">
<td class="headerlaporan1" colspan="4" >&nbsp;</td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">1. Pemeriksaan Sistemik</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[sistemik]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">2. Pengukuran Khusus</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[khusus]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td class="headerlaporan1" colspan="3">3. Data Penunjang</td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">&nbsp;&nbsp;&nbsp;&nbsp;a. Radiologi</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[radiologi]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">&nbsp;&nbsp;&nbsp;&nbsp;b. EMG</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[emg]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">&nbsp;&nbsp;&nbsp;&nbsp;c. Laboratorium </td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[lab]?> </td>
</tr>
<tr align="justify">
<td width="2%" class="headerlaporan1">&nbsp;</td>
<td width="32%" class="headerlaporan1">&nbsp;&nbsp;&nbsp;&nbsp;d. Lain-Lain </td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[lain]?> </td>
</tr>
<tr align="justify">
<td class="headerlaporan1" >D.</td>
<td class="headerlaporan1" >Diagnosa Fisioterapi</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[fisioterapi]?> </td>
</tr>
<tr align="justify">
<td class="headerlaporan1" >E.</td>
<td class="headerlaporan1" >Program / Rencana Terapi</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[terapi]?> </td>
</tr>
<tr align="justify">
<td class="headerlaporan1" >F.</td>
<td class="headerlaporan1" >Evaluasi</td>
<td width="1%" class="headerlaporan1">:</td>
<td class="headerlaporan1" colspan="4"><?=$hasil[evaluasi]?> </td>
</tr>
</table>
<table id="example2" class="table table-bordered table-hover" width="100%" border="0">
<tr align="justify">  
<td colspan="2">&nbsp;</td>
<td>&nbsp; </td>
<td >Semarang, <?=$hari?></td>
</tr>
<tr align="justify">  
<td colspan="2">&nbsp;</td>
<td width="8%">&nbsp;</td>
<td width="33%" colspan="3">&nbsp;</td>
</tr>
<tr align="justify">  
<td width="28%">&nbsp;</td>
<td width="27%">&nbsp;</td>
<td width="3%">&nbsp;</td>
<td colspan="3">Fisioterapis, </td>
</tr>

<tr align="center">  
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td colspan="3">&nbsp;</td>
</tr>
<tr align="center">  
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td colspan="3">&nbsp;</td>
</tr>
<tr align="center">  
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td colspan="3">&nbsp;</td>
</tr>
<tr align="justify"> 
<td colspan="2">&nbsp;</td>
<td>&nbsp;</td>
<td colspan="3"><?=$hasil[nmterapis]?> </td>
</tr>
<tr align="center">  
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td colspan="3">&nbsp; </td>
</tr>

 </table>
</div>



</body>
</html>