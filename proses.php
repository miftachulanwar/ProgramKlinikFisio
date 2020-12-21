<?php
session_start();
$hari = date("y");
include 'includes/lib.inc.php';
include APP_ROOT."/includes/class.inc.php";
include APP_ROOT."/includes/auth.inc.php";
include INCLUDES_DIR."/class.paging.php";
$jp = new jcore();

		
		 		

switch($_REQUEST[page]){
	
	case "pasien":
		switch($_REQUEST[action]){
		case "input":
		 $r = $jp->sql("select count(*) as j from pasien WHERE norm='".$_REQUEST['norm']."' ");
		 $o=$jp->fetch($r);
		 $kata = $_POST['id_edit'];
		 $jumlah = strlen($kata);
		 
			if(($o['j']>0) && ($jumlah<=0)){
			  $jp->alert('Data Pasien Sudah Dimasukan...');
			  $jp->gotox("index.php?page=pasien");
			  } 		  
				  
			 else { 
			
			$q = "replace into pasien set "
			." norm='".$_POST[norm]."',nama=\"".$_POST[nama]."\",alamat=\"".$_POST[alamat]."\",telepon=\"".$_POST[telepon]."\", tmplhr=\"".$_POST[tmplhr]."\",tgllhr=\"".$_POST[tgllhr]."\",pekerjaan=\"".$_POST[pekerjaan]."\",agama=\"".$_POST[agama]."\" ";
   		    $jp->sql($q);
			$jp->alert('Data Pasien\nTelah Tersimpan...');
			$jp->gotox("index.php?page=pasien");
			}
		break;
		case "delete":
			$r = $jp->sql("delete from pasien where norm=\"".$_REQUEST[norm]."\"");
			$jp->alert('Data Pasien\nTelah Terhapus...');
			$jp->gotox("index.php?page=pasien");			
		break;
		default:
			$jp->gotox("index.php?page=pasien");		
		break;
		}
	break;
	
	case "terapis":
		switch($_REQUEST[action]){
		case "input":
		 $r = $jp->sql("select count(*) as j from terapis WHERE kdterapis='".$_REQUEST['kdterapis']."' ");
		 $o=$jp->fetch($r);
		 $kata = $_POST['id_edit'];
		 $jumlah = strlen($kata);
		 
			if(($o['j']>0) && ($jumlah<=0)){
			  $jp->alert('Data Terapis Sudah Dimasukan...');
			  $jp->gotox("index.php?page=terapis");
			  } 		  
				  
			 else { 
			
			$q = "replace into terapis set "
			." kdterapis='".$_POST[kdterapis]."',nama=\"".$_POST[nama]."\",alamat=\"".$_POST[alamat]."\",telp=\"".$_POST[telp]."\", tmplhr=\"".$_POST[tmplhr]."\",tgllhr=\"".$_POST[tgllhr]."\" ";
				//echo $q;
   		    $jp->sql($q);
			$jp->alert('Data Terapis\nTelah Tersimpan...');
			$jp->gotox("index.php?page=terapis");
			}
		break;
		case "delete":
			$r = $jp->sql("delete from terapis where kdterapis=\"".$_REQUEST[kdterapis]."\"");
			$jp->alert('Data Terapis\nTelah Terhapus...');
			$jp->gotox("index.php?page=terapis");			
		break;
		default:
			$jp->gotox("index.php?page=terapis");		
		break;
		}
	break;
	
	case "pengguna":
		switch($_REQUEST[action]){
		case "input":
		 $r = $jp->sql("select count(*) as j from pengguna WHERE username='".$_REQUEST['username']."' ");
		 $o=$jp->fetch($r);
		 $kata = $_POST['id_edit'];
		 $jumlah = strlen($kata);
		 
			if(($o['j']>0) && ($jumlah<=0)){
			  $jp->alert('Data Pengguna Sudah Dimasukan...');
			  $jp->gotox("index.php?page=pengguna");
			  } 		  
				  
			 else { 
			
			$q = "replace into pengguna set "
			." username='".$_POST[username]."',nama=\"".$_POST[nama]."\",pass=\"".$_POST[pass]."\" ";
				//echo $q;
   		    $jp->sql($q);
			$jp->alert('Data Pengguna\nTelah Tersimpan...');
			$jp->gotox("index.php?page=pengguna");
			}
		break;
		case "delete":
			$r = $jp->sql("delete from pengguna where username=\"".$_REQUEST[username]."\"");
			$jp->alert('Data Pengguna\nTelah Terhapus...');
			$jp->gotox("index.php?page=pengguna");			
		break;
		default:
			$jp->gotox("index.php?page=pengguna");		
		break;
		}
	break;
	
	
	case "periksa":
		switch($_REQUEST[action]){
		case "input":
		 $r = $jp->sql("select count(*) as j from periksa WHERE noperiksa='".$_REQUEST['noperiksa']."' ");
		 $o=$jp->fetch($r);
		 $kata = $_POST['id_edit'];
		 $jumlah = strlen($kata);
		 
			if(($o['j']>0) && ($jumlah<=0)){
			  $jp->alert('Data Pemeriksaan Sudah Dimasukan...');
			  $jp->gotox("index.php?page=periksa");
			  } 		  
				  
			 else { 
			
			$q = "replace into periksa set "
			." noperiksa='".$_POST[noperiksa]."',norm=\"".$_POST[norm]."\",kdterapis=\"".$_POST[kdterapis]."\",tgl=\"".$_POST[tgl]."\",jam=\"".$_POST[jam]."\",keluhan=\"".trim($_POST[keluhan])."\",sekarang=\"".trim($_POST[sekarang])."\",dahulu=\"".trim($_POST[dahulu])."\",pribadi=\"".trim($_POST[pribadi])."\",td=\"".$_POST[td]."\",hr=\"".$_POST[hr]."\",suhu=\"".$_POST[suhu]."\",rr=\"".$_POST[rr]."\",skor=\"".$_POST[skor]."\",sistemik=\"".trim($_POST[sistemik])."\",khusus=\"".trim($_POST[khusus])."\",radiologi=\"".trim($_POST[radiologi])."\",emg=\"".trim($_POST[emg])."\",lab=\"".trim($_POST[lab])."\",lain=\"".trim($_POST[lain])."\",fisioterapi=\"".trim($_POST[fisioterapi])."\",terapi=\"".trim($_POST[terapi])."\",evaluasi=\"".trim($_POST[evaluasi])."\" ";
				//echo $q;
   		    $jp->sql($q);
			echo '<script type="text/javascript">window.open("formassemen.php?noperiksa='.$_POST[noperiksa].'");</script>';
			$jp->alert('Data Pemeriksaan\nTelah Tersimpan...');
			$jp->gotox("index.php?page=periksa");
			}
		break;
		case "delete":
			$r = $jp->sql("delete from periksa where noperiksa=\"".$_REQUEST[noperiksa]."\"");
			$jp->alert('Data Pemeriksaan\nTelah Terhapus...');
			$jp->gotox("index.php?page=periksa");			
		break;
		default:
			$jp->gotox("index.php?page=periksa");		
		break;
		}
	break;
	
	case "backup":
		switch($_REQUEST[action]){
		case "input":	
		
		$date=date('d-m-Y');
		$file="backup@".$date.".sql";
		$jp->backup_tables($file);
		$jp->alert('Data Berhasil Dibackup...');		
		$jp->gotox("index.php?page=backup");	
		}
		break;	
		
		case "ganti":
		switch($_REQUEST[action]){
		case "input":
		if ($_POST['baru']!=''){
		
		if ($_POST['baru']!=$_POST['ulang']) {
		$jp->alert('Ulangi Password Tidak Sama');
		$jp->gotox("index.php?page=ganti");	
		}
		else {
		
			$result = $jp->sql("update pengguna set pass='".$_POST['baru']."' where username='".$_SESSION['username']."'");
			$jp->alert('Password Berhasil Diubah');
			$jp->gotox("index.php?page=ganti");	
		}
		}
		break;
		
		default:
			$jp->gotox("index.php?page=ganti");		
		break;
		}
	break;
	
	
}
?>

 