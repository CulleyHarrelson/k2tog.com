<?php
/*
CREATE OR REPLACE MODEL 
    `divine-vehicle-328314.HarrelsonML.ttest` OPTIONS(model_type='AUTOML_CLASSIFIER',
    input_label_cols=['target'],
    budget_hours=1.0) AS 
    SELECT *
    FROM `divine-vehicle-328314.HarrelsonML.train`
1830 × 598 pixels
 */
$GLOBALS['title'] = 'Culley Harrelson: BigQuery ML';
require_once('header.php');
?>
<div class="mt-5 container">
<div class="container-sm">

<h1 class="">BigQuery ML Kaggle Competition Project</h1>

<p class="text-wrap">
<em>October 2021</em>
</p>

<h3 class="mt-5">Project Summary </h3>
<p class="text-wrap">
    This project involved building a BigQuery ML model to compete in the 
kaggle.com <a href="https://www.kaggle.com/c/tabular-playground-series-oct-2021/overview">Oct 2021</a> 
Tabular Playground Series. The competition is still going, and results will be posted here
when they are finalized. On October 17, the third model was ranked 475/770 on the leaderboard.
</p>
<p class="text-wrap">
This was a proof of concept project to show how BigQuery ML can be used to
provide "label" predictions for tabular data. This means, essentially, that with
BigQuery ML you provide a dataset where one column is only partially filled
out - then a machine learning model is trained to predict values for the
remainder of the column. The art/science of this process is in feeding good
data into the model to begin with. BigQuery ML is technology that can
included in data pipelines  for making numerical and
category predictions, for making user suggestions, and for forcasting time series data. 
<a href="https://cloud.google.com/bigquery-ml/docs/reference/standard-sql/bigqueryml-syntax-inference-overview">Read more</a>
about machine learning inference with BigQuery ML.
</p>
<p class="text-wrap">
The first model created for this project used AutoML. It ran for over three hours 
and created 7.7T of data. This model's score was 0.84615.
</p>
<p class="text-wrap">
The second model created for this project created a distributed neural network model. It ran for over three hours 
and created 7.7T of data. This model's score was 0.84615.
</p>

<p class="text-wrap">
The third model went back to AutoML.  This model's score was 0.85234. At this
point, I had used up the $300 Gloogle Cloud sign up money, so I stopped
investigating. With more funds, it would be interesting to how much training
was required to further compete with the human data science teams.
</p>

<h3 class="mt-5">Sample Code</h3>
<div class="container">
  <img width="457.5" height="149.5" src="portfolio/bqml.png" alt="...">
<pre>
    
CREATE OR REPLACE MODEL 
    `divine-vehicle-xxxx.HarrelsonML.ttest` OPTIONS(model_type='AUTOML_CLASSIFIER',
    input_label_cols=['target'],
    budget_hours=1.0) AS 
    SELECT *
    FROM `divine-vehicle-xxxx.HarrelsonML.train`

SELECT
  *
FROM
  ML.PREDICT(MODEL `divine-vehicle-xxxx.HarrelsonML.ttest`,
    (
    SELECT *
    FROM `divine-vehicle-xxxx.HarrelsonML.test`))

</pre>
</div>

</div>
</div>
<?php

require_once('footer.php');
?>
