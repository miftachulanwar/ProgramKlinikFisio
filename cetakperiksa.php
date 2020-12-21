

	
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>::: <?=$title?> :::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script src="js/advviewer.js"></script>
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

<form action="index.php?page=lapperiksa" method="post" enctype="multipart/form-data" name="form" id="form" class="form-horizontal">

          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Cetak Laporan Pemeriksaan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
               <div class="box-body">
               
                               
                
                <div class="form-group has-feedback">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dari Tanggal</label>

                  <div class="col-sm-3">
                  
                   <div class="input-group date form_date" data-link-field="dtp_input2" id='datepicker1' >
                        
                           <input name="tgl" type="text" class="form-control"  value="<?=$o[tgl]?>" readonly="readonly">
                        
                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        
                      </div>
                      <input type="hidden" id="dtp_input2" value=""/>
                  
                        
                  </div>
                </div> 
                
                
                
                <div class="form-group has-feedback">
                  <label for="inputEmail3" class="col-sm-2 control-label">S/d Tanggal</label>

                  <div class="col-sm-3">
                 
                 <div class="input-group date form_date" data-link-field="dtp_input2" id='datepicker2' >
                        
                           <input name="tgl1" type="text" class="form-control"  value="<?=$o[tgl]?>" readonly="readonly">
                        
                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        
                      </div>
                      <input type="hidden" id="dtp_input2" value=""/>
               	    </div>            
                  </div>
                             
                               </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-success" onClick="window.location='index.php?page=cetaknilai'"><i class="fa fa-repeat"></i> Batal</button>
                <button type="submit" class="btn btn-primary pull-right" onclick="return doSubmit()"><i class="fa fa-print"></i> Cetak</button>
              
                
              </div>
              <!-- /.box-footer -->
                </div>
            </form>





 
 
 
<script type="text/javascript">  
  $('form').validate({
        rules: {

            tgl1:{
              required:true
            },
			tgl2:{
             required:true
            },
			
			
                   
        },
		      
        
        
    });
</script>




</body>
</html>