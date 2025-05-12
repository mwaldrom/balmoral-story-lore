<?php
//php variable for page name.
$title = "Currency Framework";
$long_title = "Rainbow Tabletop Roleplay System Currency Framework";
$page_blerb = "Here’s a brief guide to Currency, Names and Calculations";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <header>
        <!-- generic head info in php include file -->
        <?php include '../head.php';?>
  </head>
  <body class="brown lighten-3">
      <!-- Start your project here-->
    <header>
        <!-- generic header info in php include file -->
        <?php include '../header.php';?>
    </header> 
	<div class="row">
    	<div class="col s12 center-align">
  <h2>Basic Units</h2>
  <ul>
    <li><strong>Universal Dollar (U$)</strong></li>
    <li><strong>Universal Cent (¢)</strong></li>
  </ul>
  <p><strong>Exchange Rate:</strong> 100¢ = 1 U$ &nbsp; | &nbsp; 1 U$ = 1 USDS - 1U$ = 90 EURO¢ - 1U$ = 1.7 NZ$ (Real World Parity)</p>

  <h2>Currency Denominations</h2>
  <table class="yellow lighten-5 responsive-table striped centered">
    <thead>
	  <tr>
        <th>Metal Coins</th>
        <th>Material</th>
		    <th>Paper Notes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1¢</td>
        <td>Copper</td>
		<td>$5</td>
      </tr>
      <tr>
        <td>5¢</td>
        <td>Bronze</td>
		<td>$10</td>
      </tr>
      <tr>
        <td>10¢</td>
        <td>Silver</td>
		<td>$20</td>
      </tr>
      <tr>
        <td>25¢</td>
        <td>Gold</td>
		<td>$50</td>
      </tr>
      <tr>
        <td>50¢</td>
        <td>Platinum</td>
		<td>$100</td>
      </tr>
      <tr>
        <td>1 U$</td>
        <td>Bi-metal</td>
		<td></td>
      </tr>
    </tbody>
  </table>
    	</div>
	 </div>	  
	<footer class="page-footer grey">
    <?php include '../footer.php';?>
	</footer>
  </body>
</html>