<?php 
$hari = date("ym");
if($_REQUEST[noperiksa]!='')
{
	$q = "select * from periksa where noperiksa='".$_REQUEST[noperiksa]."'";
	$r = $jp->sql($q);
	$o = $jp->fetch($r);
	$kode = $o[noperiksa];
}else
{
$q1= "SELECT max(RIGHT(noperiksa,4))+1 as maks from periksa WHERE substr(noperiksa,1,4)=(SELECT DATE_FORMAT(CURRENT_DATE,'%y%m'))";
	$r1 = $jp->sql($q1);
	$o1 = $jp->fetch($r1);
	
	if (strlen($o1[maks])<=0) {
	 $kode= $hari.'-PR/0001';
	 }
	else if (strlen($o1[maks])==1) {
	 $kode= $hari.'-PR/000'.$o1[maks];
	 }
	else if (strlen($o1[maks])==2) {
	  $kode= $hari.'-PR/00'.$o1[maks];
	 } 
	 else if (strlen($o1[maks])==3) {
	  $kode= $hari.'-PR/0'.$o1[maks];
	 } 
	 else if (strlen($o1[maks])==4) {
	 $kode= $hari.'-PR/'.$o1[maks];
	 } 
	 
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
		window.location="proses.php?page=periksa&action=delete&noperiksa="+id;
	}
}


</script>
<script src="js/jquery.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="js/jquery.easyui.min.js"></script>
 <link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
 <link rel="stylesheet" type="text/css" href="themes/icon.css">
    <script src="js/gen_validatorv31.js" language="javascript"></script>



<style type="text/css">
<!--
.style1 {color: #FFFFFF;font-family:FontAwesome; font-size:12px}
.style2 {color: #000000;font-family:FontAwesome; font-size:12px;}
-->
</style>


</head>
<body>

<form action="proses.php?page=periksa&action=input" method="post" enctype="multipart/form-data" name="form" id="form" class="form-horizontal">
<input name="id_edit" type="hidden" value="<?=$o[noperiksa]?>">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pemeriksaan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
               <div class="box-body">
                 <div class="form-group has-feedback">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Pemeriksaan</label>

                  <div class="col-sm-2">
                   <input name="noperiksa" type="text" id="noperiksa" value="<?=$kode?>" size="10" readonly class="form-control">
               	                
                  </div>
                </div> 
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Pasien </label>

                  <div class="col-sm-3">
                  <select class="easyui-combobox" name="norm" labelPosition="top" style="width:100%;" id="norm" >
    			  <option value=""></option>
     			 <?php
					$r = $jp->sql("select * from pasien");
					while ($oKel = $jp->fetch($r)){
					$isSelKel = (($oKel[norm]==$o[norm])?"selected":"");
					?>
				  <option value="<?=$oKel[norm]?>" <?=$isSelKel?> ><?=$oKel[norm]?> <?=$oKel[nama]?> </option>
				  <?php } ?>
				</select>
                  
                 </div>
                </div>
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Terapis</label>

                  <div class="col-sm-3">
                  <select class="easyui-combobox" name="kdterapis" labelPosition="top" style="width:100%;" id="kdterapis" >
    			  <option value=""></option>
     			 <?php
					$r = $jp->sql("select * from terapis ");
					while ($oKel = $jp->fetch($r)){
					$isSelKel = (($oKel[kdterapis]==$o[kdterapis])?"selected":"");
					?>
				  <option value="<?=$oKel[kdterapis]?>" <?=$isSelKel?> ><?=$oKel[nama]?> </option>
				  <?php } ?>
				</select>
                  
                  
                 </div>
                </div>
                
                	 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-3">
                  <div class="input-group date form_date" data-link-field="dtp_input2" id='datepicker3' >
                        
                           <input name="tgl" type="text" class="form-control"  value="<?=$o[tgl]?>" readonly="readonly">
                        
                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        
                      </div>
                      <input type="hidden" id="dtp_input2" value=""/>
                 </div>
                </div>
                
                 <div class="bootstrap-timepicker">
               <div class="form-group has-feedback">
                   <label for="inputPassword3" class="col-sm-2 control-label">Jam</label>
				 <div class="col-sm-2">
                  <div class="input-group">
                    <input type="text" class="form-control timepicker" readonly="readonly" name="jam">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                </div>           
                </div>
        
               
                </div>
                
                <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Keluhan Utama </label>

                  <div class="col-sm-8">
                    <textarea name="keluhan" cols="200" rows="5" class="form-control" id="keluhan"><?=$o[keluhan]?>
                    </textarea>
                  </div>
                </div>
                
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Riwayat Penyakit Sekarang </label>

                  <div class="col-sm-8">
                    <textarea name="sekarang" cols="200" rows="5" class="form-control" id="sekarang"><?=$o[sekarang]?>
                    </textarea>
                  </div>
                </div>
                
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Riwayat Penyakit Dahulu </label>

                  <div class="col-sm-8">
                    <textarea name="dahulu" cols="200" rows="5" class="form-control" id="dahulu"><?=$o[dahulu]?>
                    </textarea>
                  </div>
                </div>
                
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Riwayat Pribadi </label>

                  <div class="col-sm-8">
                    <textarea name="pribadi" cols="200" rows="5" class="form-control" id="pribadi"><?=$o[pribadi]?>
                    </textarea>
                  </div>
                </div>
                
                 <div class="form-group has-feedback">
                  <label for="inputEmail3" class="col-sm-2 control-label">TD (mmHg)</label>

                  <div class="col-sm-2">
                   <input name="td" type="text" id="td" value="<?=$o[td]?>" size="10" maxlength="10" class="form-control">
               	                
                  </div>
                </div> 
                
                 <div class="form-group has-feedback">
                  <label for="inputEmail3" class="col-sm-2 control-label">HR (x/mnt)</label>

                  <div class="col-sm-2">
                   <input name="hr" type="text" id="hr" value="<?=$o[hr]?>" size="10" maxlength="10" class="form-control">
               	                
                  </div>
                </div> 
                
                 <div class="form-group has-feedback">
                  <label for="inputEmail3" class="col-sm-2 control-label">Suhu</label>

                  <div class="col-sm-2">
                   <input name="suhu" type="text" id="suhu" value="<?=$o[suhu]?>" size="10" maxlength="10" class="form-control">
               	                
                  </div>
                </div> 
                
                 <div class="form-group has-feedback">
                  <label for="inputEmail3" class="col-sm-2 control-label">RR (x/mnt)</label>

                  <div class="col-sm-2">
                   <input name="rr" type="text" id="rr" value="<?=$o[rr]?>" size="10" maxlength="10" class="form-control">
               	                
                  </div>
                </div> 
                
                   <div class="form-group has-feedback">
                  <label for="inputEmail3" class="col-sm-2 control-label">Skor Nyeri</label>

                  <div class="col-sm-2">
                   <input name="skor" type="text" id="skor" value="<?=$o[skor]?>" size="10" maxlength="10" class="form-control">
               	                
                  </div>
                </div> 
                
                <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Pemeriksaan Sistemik </label>

                  <div class="col-sm-8">
                    <textarea name="sistemik" cols="200" rows="5" class="form-control" id="sistemik"><?=$o[sistemik]?>
                    </textarea>
                  </div>
                </div>
                
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Pengukuran Khusus </label>

                  <div class="col-sm-8">
                    <textarea name="khusus" cols="200" rows="5" class="form-control" id="khusus"><?=$o[khusus]?>
                    </textarea>
                  </div>
                </div>
                
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Radiologi </label>

                  <div class="col-sm-8">
                    <textarea name="radiologi" cols="200" rows="5" class="form-control" id="radiologi"><?=$o[radiologi]?>
                    </textarea>
                  </div>
                </div>
                
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">EMG </label>

                  <div class="col-sm-8">
                    <textarea name="emg" cols="200" rows="5" class="form-control" id="emg"><?=$o[emg]?>
                    </textarea>
                  </div>
                </div>
                
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Laboratorium </label>

                  <div class="col-sm-8">
                    <textarea name="lab" cols="200" rows="5" class="form-control" id="lab"><?=$o[lab]?>
                    </textarea>
                  </div>
                </div>
                
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Lain-Lain </label>

                  <div class="col-sm-8">
                    <textarea name="lain" cols="200" rows="5" class="form-control" id="lain"><?=$o[lain]?>
                    </textarea>
                  </div>
                </div>
                
                <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Diagnosa Fisioterapi </label>

                  <div class="col-sm-8">
                    <textarea name="fisioterapi" cols="200" rows="5" class="form-control" id="fisioterapi"><?=$o[fisioterapi]?>
                    </textarea>
                  </div>
                </div>
                
                           <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Program / Rencana Terapi </label>

                  <div class="col-sm-8">
                    <textarea name="terapi" cols="200" rows="5" class="form-control" id="terapi"><?=$o[terapi]?>
                    </textarea>
                  </div>
                </div>      
                 
                   <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Evaluasi </label>

                  <div class="col-sm-8">
                    <textarea name="evaluasi" cols="200" rows="5" class="form-control" id="evaluasi"><?=$o[evaluasi]?>
                    </textarea>
                  </div>
                </div>      
                 
           
                               </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-success" onClick="window.location='index.php?page=periksa'"><i class="fa fa-repeat"></i> Batal</button>
                <button type="submit" class="btn btn-primary pull-right" onclick="return doSubmit()"><i class="fa fa-save"></i> Simpan</button>
              
                
              </div>
              <!-- /.box-footer -->
            </form>

</div>


<?php 
		
		$q="SELECT a.*,b.nama as nmpasien, c.nama as nmterapis FROM periksa a INNER JOIN pasien b ON a.norm=b.norm INNER JOIN terapis c ON a.kdterapis=c.kdterapis";
		$result=$jp->sql($q);
		
		?>
<table id="example1" class="table table-bordered table-hover" width="100%">
 <thead style="background:#f1b855; color:white; font-weight: bold;">
  <tr>
    <th align="center" valign="middle" bgcolor="#605ca8">No</th>
    <th valign="middle" bgcolor="#605ca8">No Periksa </th>
    <th valign="middle" bgcolor="#605ca8">Pasien</th>
    <th  valign="middle" bgcolor="#605ca8">Terapis</th>
    <th  valign="middle" bgcolor="#605ca8">Tanggal</th>
    <th  valign="middle" bgcolor="#605ca8">Jam</th>
    <th  valign="middle" bgcolor="#605ca8">Keluhan</th>
    <th  valign="middle" bgcolor="#605ca8">Diagnosa</th>
    <th  valign="middle" bgcolor="#605ca8">Evaluasi</th>
    
     <th bgcolor="#605ca8">Proses</th>
    
  </tr>
  </thead>
   <?php $n = 0;while($row = $jp->fetch($result)){ $n++; 
if ($n%2==0)
	   {$c = "info";}
	   else
	   {$c = "danger";}
   ?>
  <tr class="<?=$c?>">
    <td align="right" valign="top"><?=$n?>.</td>
    <td valign="top" align="justify"><?=$row[noperiksa]?></td>
    <td valign="top" align="justify"><?=$row[nmpasien]?></td>
    <td valign="top" align="justify"><?=$row[nmterapis]?></td>
    <td valign="top" align="justify"><?=$jp->todate($row[tgl])?></td>
     <td valign="top" align="justify"><?=$row[jam]?></td>
      <td valign="top" align="justify"><?=$row[keluhan]?></td>
       <td valign="top" align="justify"><?=$row[fisioterapi]?></td>
        <td valign="top" align="justify"><?=$row[evaluasi]?></td>
    <td  align="center" valign="top">
		<a href="index.php?page=periksa&noperiksa=<?=$row[noperiksa]?>&act=update">
	<img src="images/edit.png" width="32" height="32" border="0" title="Edit" onClick="return Confirm('<?=$row[noperiksa]?>')"/></a>
	<a href="#" onclick="return ConfirmDel('<?=$row[noperiksa]?>')">	 <img src="images/remove.png" width="32" height="32" border="0" title="Hapus" /> </a>
    <a href="formassemen.php?noperiksa=<?=$row[noperiksa]?>" target="_blank">
	<img src="images/print.png" width="32" height="32" border="0" title="Cetak" /></a>
    </td>
  </tr>
  <?php } ?>
</table>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script type="text/javascript">  
  $('form').validate({
        rules: {

            noperiksa:{
              required:true
            },
			tgl:{
             required:true
            },
				
			
                   
        },
		      
        
        
    });
</script>




</body>
</html>