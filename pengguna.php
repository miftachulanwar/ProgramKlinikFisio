<?php 
if($_REQUEST[username]!='')
{
	$q = "select * from pengguna where username='".$_REQUEST[username]."'";
	$r = $jp->sql($q);
	$o = $jp->fetch($r);
	$disabled = " readonly='true' ";
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
		window.location="proses.php?page=pengguna&action=delete&username="+id;
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

<form action="proses.php?page=pengguna&action=input" method="post" enctype="multipart/form-data" name="form" id="form" class="form-horizontal">
<input name="id_edit" type="hidden" value="<?=$o[username]?>">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
               <div class="box-body">
                 <div class="form-group has-feedback">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-3">
                   <input name="username" type="text" id="username" value="<?=$o[username]?>" size="30" maxlength="30" <?=$disabled?> class="form-control">
               	                
                  </div>
                </div> 
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama </label>

                  <div class="col-sm-3">
                  <input name="nama" type="text" id="nama" class="form-control" size="30"  maxlength="30" value="<?=$o[nama]?>">
                  
                 </div>
                </div>
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-2">
                 <input name="pass" type="text" id="pass" size="20" maxlength="20" value="<?=$o[pass]?>" class="form-control">
                  
                 </div>
                </div>
                
                             
                               </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-success" onClick="window.location='index.php?page=pengguna'"><i class="fa fa-repeat"></i> Batal</button>
                <button type="submit" class="btn btn-primary pull-right" onclick="return doSubmit()"><i class="fa fa-save"></i> Simpan</button>
              
                
              </div>
              <!-- /.box-footer -->
            </form>

</div>


<?php 
		
		$q="select * from pengguna  ";
		$result=$jp->sql($q);
		
		?>
<table id="example1" class="table table-bordered table-hover" width="60%">
 <thead style="background:#f1b855; color:white; font-weight: bold;">
  <tr>
    <th align="center" valign="middle" bgcolor="#605ca8">No</th>
    <th valign="middle" bgcolor="#605ca8">Username </th>
    <th valign="middle" bgcolor="#605ca8">Nama</th>
    <th  valign="middle" bgcolor="#605ca8">Password</th>
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
    <td valign="top" align="justify"><?=$row[username]?></td>
    <td valign="top" align="justify"><?=$row[nama]?></td>
    <td valign="top" align="justify"><?=$row[pass]?></td>
    <td  align="center" valign="top">
		<a href="index.php?page=pengguna&username=<?=$row[username]?>&act=update">
	<img src="images/edit.png" width="32" height="32" border="0" title="Edit" onClick="return Confirm('<?=$row[username]?>')"/></a>
	<a href="#" onclick="return ConfirmDel('<?=$row[username]?>')">	 <img src="images/remove.png" width="32" height="32" border="0" title="Hapus" /> </a></td>
  </tr>
  <?php } ?>
</table>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script type="text/javascript">  
  $('form').validate({
        rules: {

            username:{
              required:true
            },
			nama:{
             required:true
            },
				
			
                   
        },
		      
        
        
    });
</script>




</body>
</html>