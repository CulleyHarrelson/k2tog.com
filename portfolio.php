<?php
$GLOBALS['title'] = 'Culley Harrelson UX Research Portfolio';
require_once('header.php');
?>
<div class="container">

<h1 class="mt-5 h3">Portfolio</h1>

<p>
    Welcome to my website portfolio. I tinker with this content occasionally and do not take it too seriously.
This website itself was crafted from hand in a bash terminal using vim, php, html and bootstrap.
</p>


<div class="row mb-5">
    <div class="col-sm">
<!--  BigQuery ML {{{ -->
<div class="card" style="width: 22rem;">
  <img src="portfolio/bqml.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BigQuery ML</h5>
    <p class="card-text">
Using BigQuery ML to solve a 
<a href="https://www.kaggle.com/c/tabular-playground-series-oct-2021/overview">kaggle.com competition</a>

</p>

<a class="btn btn-primary" target="_new" href="bqml.php" role="button">Details</a>

</div>
</div>
<!-- }}} -->
    </div>
  <div class="col-sm">
<!--  RACI {{{ -->
<div class="card">
  <img src="portfolio/rasci.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">RACI Responsibility Matrix</h5>
    <p class="card-text">
    RACI matrix for project plan to define who is responsible for what.
    RACI: Responsible, Accountable, Consulted, Informed.
    </p>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rasci">
  View RACI
</button>

<div class="modal fade" id="rasci" tabindex="-1" role="dialog" aria-labelledby="interpretingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="interpretingModalLabel">Tables RASCI Matrix</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="portfolio/rasci.png" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- }}} -->
</div>
  <div class="col-sm">
<!--  ERD {{{ -->
<div class="card">
  <img src="portfolio/erd.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Data Modeling, Analysis and Transformation</h5>
    <p class="card-text">
Modeling, analyzing and transforming data to answer real-world business problems.
</p>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#erdModal">
  View ERD
</button>

<div class="modal fade" id="erdModal" tabindex="-1" role="dialog" aria-labelledby="interpretingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="interpretingModalLabel">Entity Relationship Diagram</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="portfolio/erd.png" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- }}} -->
</div>
</div>

<div class="row mb-5">
    <div class="col-sm">
    <!--  user flow {{{ -->
    <div class="card">
      <img src="portfolio/UserFlow.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Visualizing Processes and Experiences</h5>
        <p class="card-text">
    Visualizing processes and mapping data with Google Drawings and 
    LucidChart.
    </p>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userFlow">
      View Diagram
    </button>

    <div class="modal fade" id="userFlow" tabindex="-1" role="dialog" aria-labelledby="interpretingModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="interpretingModalLabel">Flow Chart Sample</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img class="img-fluid" src="portfolio/UserFlow.png" />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!-- }}} -->
    </div>
    <div class="col-sm">
    <!--  leadership {{{ -->
    <div class="card" >
      <img src="portfolio/interpreting.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Leadership</h5>
        <p class="card-text">Leverage psychology when managing projects, gathering requirements from stakeholders, conducting usability studies, understanding engineers and engaging with subject matter experts.</p>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#interpretingModal">
      View Experience Map
    </button>

    <div class="modal fade" id="interpretingModal" tabindex="-1" role="dialog" aria-labelledby="interpretingModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="interpretingModalLabel">Experience Map: Interpretation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img class="img-fluid" src="portfolio/interpreting.png" />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!-- }}} -->
    </div>
    <div class="col-sm">
    <!--  empathy Map {{{ -->
    <div class="card">
      <img src="portfolio/et.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Business Psychology</h5>
        <p class="card-text">
    Business intelligence, stakeholder engagement, gathering requirements, UX research, and leading teams. <a href="https://www.youtube.com/watch?v=mBu3Zmjd6W4&t=1s">Watch a psychologist talk about empathy</a>.

    </p>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empathyModal">
      View Empathy Map
    </button>

    <div class="modal fade" id="empathyModal" tabindex="-1" role="dialog" aria-labelledby="interpretingModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="interpretingModalLabel">Empathy in UX Research</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img class="img-fluid" src="portfolio/et.png" />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!-- }}} -->
    </div>
</div>

<div class="row mb-5">
    <div class="col-sm">
    <!-- unix   {{{ -->
    <div class="card" style="width: 22rem;">
      <img src="portfolio/ux.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Vim</h5>
        <p class="card-text">
    Rapid engineering with my ubiquitous editor of choice. Vim rocks, as a keymap
    embedded in other editors, to the central tool in a full CLI workspace. 
<a href="https://www.youtube.com/watch?v=wlR5gYd6um0">What makes Vim unique?</a>
    </p>

    </div>
    </div>
    <!-- }}} -->
    </div>
</div>

</div>
<?php

require_once('footer.php');
return;
?>
    <div class="col-sm">
<!--  heuristic review {{{ -->
<div class="card" style="width: 22rem;">
  <img src="portfolio/heuristics.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Stakeholder Engagement</h5>
    <p class="card-text">
Aligning products with a deep awareness of user needs and requirements

</p>

<a class="btn btn-primary" target="_new" href="https://docs.google.com/spreadsheets/d/1YGNxKU5fxoGtK7djCIS0qZGCRt63COm8ywQWR0wfO7Y/edit?usp=sharing" role="button">View Report</a>

</div>
</div>
<!-- }}} -->
    </div>
  <div class="col-sm">
<!-- unix   {{{ -->
<div class="card" style="width: 22rem;">
  <img src="portfolio/ux.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Vim</h5>
    <p class="card-text">
Rapid engineering with my ubiquitous editor of choice. Vim rocks, as a keymap
embedded in other editors, to the central tool in a full CLI workspace.
</p>

</div>
</div>
<!-- }}} -->
</div>
