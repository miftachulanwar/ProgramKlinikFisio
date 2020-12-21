<?php
$bln1=date('m');
$thn=date('Y');
$bulan = $bln[$bln1];
$pasien = $jp->fetch($jp->sql("SELECT count(*) as hit FROM pasien"));
$terapis= $jp->fetch($jp->sql("SELECT count(*) as hit FROM terapis "));
$pengguna= $jp->fetch($jp->sql("SELECT count(*) as hit FROM pengguna"));
$periksa= $jp->fetch($jp->sql("SELECT count(*) as hit FROM periksa WHERE month(tgl)='".$bln1."' and year(tgl)='".$thn."'"));
?>
  
 <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$pasien[hit]?></h3>

              <p>Pasien</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><?=$bulan?> <?=$thn?> </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$terapis[hit]?></h3>

              <p>Terapis</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><?=$bulan?> <?=$thn?> </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$pengguna[hit]?></h3>

              <p>Pengguna</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><?=$bulan?> <?=$thn?> </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$periksa[hit]?></h3>

              <p>Pemeriksaan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><?=$bulan?> <?=$thn?> </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>


<script type="text/javascript">
$(function () {

    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

    // Build the chart
    $('#view').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Pemeriksaan <?=$thn?>'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'
        },
		xAxis: {
		
		labels:{  
					rotation: -90,
     
	 align:'center'
     },  
			categories: [<?php echo $aray; ?>]
		},
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y}',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            type: 'column',
            name: 'Jumlah',
            data: [
			<?php
			$q=$jp->sql("SELECT nmbulan,COUNT(*) AS jum FROM periksa a INNER JOIN bulan b ON MONTH(a.tgl)=b.idbulan WHERE YEAR(tgl)='".$thn."'  GROUP BY b.idbulan ORDER BY b.idbulan");
		while($r=$jp->fetch($q)){
		 	echo "['".$r["nmbulan"]."',".$r["jum"]."],";
		}
		?>
			]
        }]
    });
});
</script>
 
 <div id="view" style="min-width: 310px; height: 430px; margin: 0 auto"></div>