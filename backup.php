	
 
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
		window.location="proses.php?page=hujan&action=delete&nohujan="+id;
	}
}


</script>



<style type="text/css">
<!--
.style1 {color: #FFFFFF;font-family:FontAwesome; font-size:12px}
.style2 {color: #000000;font-family:FontAwesome; font-size:12px;}
-->
</style>


</head>
<body>



  <div class="box box-info">
    <div class="box-header with-border">
                                 <h3 class="box-title"><b>Untuk menghindari hilangnya data, Back Up Database  secara berkala.</b></h3>
                             <br>
                                    <?php
 
echo "<br> <h3 class=box-title>Nama Database: dbwidyahusada</h3> <br>";
echo "<br><i><h3 class=box-title>Daftar Tabel</h3></i>";
 
// query untuk menampilkan semua tabel dalam database
$query = "SHOW TABLES";
$hasil = $jp->sql($query);
 
// menampilkan semua tabel dalam form
echo "<form method='post' action='proses.php?page=backup&action=input'>";
echo "<table>";
while ($data = $jp->fetch($hasil))
{
   echo "<span class='glyphicon glyphicon-hdd'></span> &nbsp; $data[0]<br>";
}
echo "</table><br>";
echo "<input type='submit' class='btn btn-sm btn-success' name='submit' value='Backup Data'>";
echo "</form>";

 
?>
                                </div><!-- /.box-body -->
                           </div>



</body>
</html>