


	
 
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

<form action="proses.php?page=ganti&action=input" method="post" enctype="multipart/form-data" name="form" id="form" class="form-horizontal">
<input name="id_edit" type="hidden" value="<?=$o[nohujan]?>">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ganti Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
               <div class="box-body">
                 
                 <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password Lama </label>

                  <div class="col-sm-3">
                  <input name="skg" type="password" id="skg" class="form-control" size="30"  maxlength="30" value="" >
                  
                 </div>
                </div>
                <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password Baru </label>

                  <div class="col-sm-3">
                  <input name="baru" type="password" id="baru" class="form-control" size="30"  maxlength="30" value="" >
                  
                 </div>
                </div>
                <div class="form-group has-feedback">
                  <label for="inputPassword3" class="col-sm-2 control-label">Ulangi Password Baru </label>

                  <div class="col-sm-3">
                  <input name="ulang" type="password" id="ulang" class="form-control" size="30"  maxlength="30" value="" >
                  
                 </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default" onClick="window.location='index.php?page=ganti'"><i class="fa fa-repeat"></i> Batal</button>
                <button type="submit" class="btn btn-info pull-right" onclick="return doSubmit()"><i class="fa fa-save"></i> Ganti</button>
              
                
              </div>
              <!-- /.box-footer -->
            </form>
  </div>





<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script type="text/javascript">  
  $('form').validate({
        rules: {

            baru:{
              required:true
            },
			ulang:{
             required:true
            },
			skg:{
             required:true
            },
                   
        },
		      
        
        
    });
</script>




</body>
</html>