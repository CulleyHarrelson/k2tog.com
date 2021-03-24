<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
//header("Access-Control-Allow-Origin: *");

$GLOBALS['title'] = 'Data Dashboard Demo, Google Charts API';
require_once('header.php');

    if (array_key_exists('date', $_GET)){
        $date = $_GET['date'];
    } else{
        $date = date('Y-m-d');
    }
    $url = "https://cdec.water.ca.gov/dynamicapp/QueryDaily?s=NML&end=$date";
    if (array_key_exists('year', $_GET)){
        $year = $_GET['year'];
        $date = "$year-01-01";
        $url = "https://cdec.water.ca.gov/dynamicapp/QueryDaily?s=NML&end=$date";
       // header('Location: /culley/water-dashboard.php?date=' . $date );
        //exit;
    }
    

	$htmlContent = file_get_contents($url);

		
	$DOM = new DOMDocument();
	$DOM->loadHTML($htmlContent);

	
    if($data = $DOM->getElementById('daily_values')){
        $trs = $data->getElementsByTagName('tr');
        $one = true;
        $json = array();
        $json[] = array('date_time', 'Elevation', 'Storage AF', 'Res Chg', 'TOC STO', 'outflow', 'inflow', 'EVAP', 'FNF', 'Riv Rel', 'PPT INC', 'SPILL', 'DIS PWR');
        foreach ($trs as $tr) {
            if ($one) {
                $one = false;
            } else {
                $vals = preg_split("/[ ]+/", $tr->textContent);
                $row = [];
                foreach ($vals as $val){
                    if(strlen(trim($val)) > 0){
                        $row[] = trim($val);
                    }
                }
                $json[] = $row;
            }
        }

        $capacity = str_replace( ',', '', $json[count($json)-2][4]);
        $current = str_replace( ',', '', $json[count($json)-2][2]);
        $waterLevel = round($current/$capacity*100);
        $json = json_encode($json);
    } else {
        print "data not found";
        exit;

    }

?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the controls package.
      google.charts.load('current', {'packages':['corechart', 'controls', 'table', 'gauge']});
    google.charts.setOnLoadCallback(drawVisualization);

      // Set a callback to run when the Google Visualization API is loaded.
      



    
    var wrapper;
function drawVisualization() {

  // Draw a column chart
//  wrapper = new google.visualization.ChartWrapper({
//    chartType: 'ColumnChart',
//    dataTable: [['Germany', 'USA', 'Brazil', 'Canada', 'France', 'RU'],
//                [700, 300, 400, 500, 600, 800]],
//    options: {'title': 'Countries'},
//    containerId: 'visualization'
//  });
//  wrapper.draw();

  var dt = <?= $json ?>;

            var gData = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['% Full', <?= $waterLevel ?>]
            ]);
            var options = {
                width: 400, height: 160,
                redFrom: 0, redTo: 10,
                yellowFrom:10, yellowTo: 25,
                minorTicks: 5
            };
            var g = new google.visualization.Gauge(document.getElementById('gauge_div'));
            g.draw(gData, options);


}
      
    </script>

<div class="container">


<img width="458" height="310" class="rounded float-right img-thumbnail" src="https://www.washingtonpost.com/wp-apps/imrs.php?src=https://arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/TBE347ZEJAZZHEHFM3HNEHJD4A.jpg&w=916" />

<h1 class="mt-5 h3">New Melones Dashboard</h1>

<p>
This dashboard visualizes data from the California Data Exchange Center for <a target="_blank"
href="https://cdec.water.ca.gov/dynamicapp/QueryDaily?s=NML&end=2018-02-20">New
Melones Reservoir</a>. Data is screen scraped from their website and visualized
using Google Charts. The image seen here is from the <a
href="https://www.washingtonpost.com/news/capital-weather-gang/wp/2014/12/04/study-california-drought-is-the-most-severe-in-at-least-1200-years/">2014
Washington Post article</a> on the water situation in California. 
</p>

<div class="container">
  <div class="row">
    <div class="col-sm">

<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Year
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  <a class="dropdown-item" href="water-dashboard.php?date=<?= $_GET['date'] ?>&year=2014">2014</a>
  <a class="dropdown-item" href="water-dashboard.php?date=<?= $_GET['date'] ?>&year=2015">2015</a>
  <a class="dropdown-item" href="water-dashboard.php?date=<?= $_GET['date'] ?>&year=2016">2016</a>
  <a class="dropdown-item" href="water-dashboard.php?date=<?= $_GET['date'] ?>&year=2017">2017</a>
  <a class="dropdown-item" href="water-dashboard.php?date=<?= $_GET['date'] ?>&year=2018">2018</a>
  <a class="dropdown-item" href="water-dashboard.php?date=<?= $_GET['date'] ?>&year=2019">2019</a>
  <a class="dropdown-item" href="water-dashboard.php?date=<?= $_GET['date'] ?>&year=2020">2020</a>
  <a class="dropdown-item" href="water-dashboard.php?date=<?= $_GET['date'] ?>&year=2021">2021</a>
  </div>
</div>

    </div>
    <div class="col-sm">
         <div id="gauge_div" style="width: 400px; height: 160px;"></div>
    </div>
  </div>
</div>


<div id="visualization" style="height: 400px; width: 400px;"></div>


</div>

<?php
require_once('footer.php');
?>
