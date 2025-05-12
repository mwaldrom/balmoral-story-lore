<?php
//php variable for page name.
$title = "Rainbow System Home";
$long_title = "Rainbow Tabletop Roleplay - System Home";
$page_blerb = "An Integrated System for Novel Development and World Building";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <header>
        <!-- generic head info in php include file -->
        <?php include 'head.php';?>
  </head>
  <body class="brown lighten-3">
      <!-- Start your project here-->
    <header>
        <!-- generic header info in php include file -->
        <?php include 'header.php';?>
    </header> 
      <div class="row">
        <div class="col s12">
          <div class="card-panel green lighten-4">
            <span class=" center black-text">
        			<h3>Legal Notice</h3>
                    <h6><strong>INTERNAL USE ONLY</strong></h6>
      				<p>This document contains proprietary world-building mechanics, character development systems.<br>Narrative frameworks intended solely for authors, editors, and creative team members working on the series.<br>Do not share this non-public content outside the creative team as.</p>
                <hr>
                <h3>Documentation Purpose</h3>
      				<p>Maintain narrative consistency across all works<br>Provide standardised systems for character and plot development<br>Act as the single, definitive source for world mechanics and lore.<br>Support collaborative writing while preserving coherent universe rules</p>
            </span>
          </div>
        </div>
      </div>
    <div class="row">
        <div class="col s12 l4 ">
              <div class="card green center-align">
                <div class="card-content white-text">
                      <span class="card-title"><h3>Base<br>Link</h3></span>
                </div>
                <div class="card-action">
                      <a href="base/base-index.php" class="waves-effect waves-light btn">Click Here</a>
                </div>
              </div>
        </div>
        <div class="col s12 l4 ">
              <div class="card red center-align">
                <div class="card-content white-text">
                      <span class="card-title"><h3>Core<br>Link</h3></span>
                </div>
                <div class="card-action">
                      <a href="core/core-index.php" class="waves-effect waves-light btn">Click Here</a>
                </div>
              </div>
        </div>
        <div class="col s12 l4 ">
              <div class="card lime center-align">
                <div class="card-content white-text">
                      <span class="card-title"><h3>Lore<br>Link</h3></span>
                </div>
                <div class="card-action">
                      <a href="../underconstruction.php" class="waves-effect waves-light btn">Click Here</a>
                </div>
              </div>
        </div>
    </div>
	<footer class="page-footer grey">
    <?php include 'footer.php';?>
	</footer>
  </body>
</html>