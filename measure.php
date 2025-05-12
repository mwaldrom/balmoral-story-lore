<?php
//php variable for page name.
$title = "Measure Framework";
$long_title = "Rainbow Tabletop Roleplay System Measure Framework";
$page_blerb = "Here’s a brief guide to Measurement, Names and Calculations";
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
    	<div class="col s12">
       			<table class="yellow lighten-5 responsive-table striped centered">
  <tbody>
    <tr>
      	<th scope="row" class="center-align">Category</th>
      	<td>Distance</td>
      	<td>Weight</td>
      	<td>Volume</td>
      	<td>Temperature</td>
      	<td>Pressure</td>
      	<td>Area</td>
      	<td>Angle</td>
		<td>Energy</td>
		<td>Force</td>
		<td>Power</td>
		<td>Speed</td>
    </tr>
    <tr>
      	<th scope="row" class="center-align">Base Units</th>
      	<td>metre (m)</td>
      	<td>gram (g)</td>
      	<td>liter (L)</td>
      	<td>Celsius (&deg;C)</td>
     	<td>pascal (Pa)</td>
      	<td>cubic metre (m&sup3)</td>
		<td>Degrees (&deg;)</td>
      	<td>Joule (j)</td>
		<td>Newton (n)</td>
      	<td>Watt (w)</td>
		<td>kilometre (km/h)</td>
    </tr>
    <tr>
      	<th scope="row" class="center-align" rowspan="5">Extendard Units</th>
      	<td>kilometre (km)</td>
      	<td>kilogram (kg)</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;kilopascals (kPa)</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
		<td>kiloJoule (kj)</td>
      	<td>&nbsp;</td>
		<td>kiloWatt (kw)</td>
		<td>&nbsp;</td>
    </tr>
    <tr>
      	<td>centimetre (cm)</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
		<td>megaJoule (mj)</td>
      	<td>&nbsp;</td>
		<td>megaWatt (mw)</td>
		<td>&nbsp;</td>
    </tr>
    <tr>
      	<td>millimetre (mm)</td>
      	<td>milligram (mg)</td>
      	<td>millileter (ml)</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
     	<td>&nbsp;</td>
      	<td>&nbsp;</td>
		<td>&nbsp;</td>
      	<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
    </tr>
    <tr>
      	<td>micrometre (um)</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
		<td>&nbsp;</td>
      	<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
    </tr>
    <tr>
      	<td>nanometre (nm)</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
		<td>&nbsp;</td>
      	<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
    </tr>
	<tr>
		<th scope="row" class="center-align" rowspan="5">Other Units</th>
      	<td>mile</td>
      	<td>tonne (T)</td>
      	<td>gallon (gal)</td>
      	<td>Kelvin (K)</td>
      	<td>Hectapascal (hPa)</td>
      	<td>sqaure metre (m&sup2)</td>
      	<td>&nbsp;</td>
		<td>Foot Pound</td>
      	<td>&nbsp;</td>
		<td>Horse Power (hp)</td>
		<td>Miles per Hour (m/h)</td>
    </tr>
	<tr>
      	<td>foot (ft')</td>
      	<td>pound (lb)</td>
      	<td>cup</td>
      	<td>Fahrenheit (&deg;F)</td>
      	<td>Pound per sqaure inch (psi)</td>
      	<td>Acre</td>
      	<td>&nbsp;</td>
		<td>Newtonmetre (nm)</td>
      	<td>&nbsp;</td>
		<td>Volt (v)</td>
		<td>Knots (kn)</td>
    </tr>
	<tr>
      	<td>inch (in")</td>
      	<td>ounce (oz)</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>inch of mercury (inHg)</td>
      	<td>Hectare</td>
      	<td>&nbsp;</td>
		<td>&nbsp;</td>
      	<td>&nbsp;</td>
		<td>Amp (a)</td>
		<td>&nbsp;</td>
    </tr>
	<tr>
      	<td>Astromical Unit (AU)</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;millimeters of mercury (mmHg)</td>
      	<td>sqaure foot</td>
      	<td>&nbsp;</td>
		<td>&nbsp;</td>
      	<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>Light Year (ly)</td>
    </tr>
	<tr>
      	<td>Nautical Mile (nm)</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
		<td>&nbsp;</td>
      	<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
    </tr>
  </tbody>
</table>
    	</div>
	 </div>
	  	<div class="row">
    	<div class="col s12">
		<table class="yellow lighten-5 responsive-table striped centered">
  <thead>
    <tr>
      <th>Category</th>
      <th>Base Unit</th>
      <th>Common Conversions</th>
      <th>How to Convert</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Distance</td>
      <td>Meter (m)</td>
      <td>
        1 km = 1,000 m<br>
        1 m = 100 cm<br>
        1 m = 1,000 mm<br>
        1 m = 1,000,000 μm<br>
        1 m = 1,000,000,000 nm
      </td>
      <td>
        ÷1,000 for km<br>
        ×100 for cm<br>
        ×1,000 for mm<br>
        ×1,000,000 for μm<br>
        ×1,000,000,000 for nm
      </td>
    </tr>
    <tr>
      <td>Weight (Mass)</td>
      <td>Gram (g)</td>
      <td>
        1 kg = 1,000 g<br>
        1 g = 1,000 mg<br>
        1 g = 1,000,000 μg
      </td>
      <td>
        ÷1,000 for kg<br>
        ×1,000 for mg<br>
        ×1,000,000 for μg
      </td>
    </tr>
    <tr>
      <td>Volume</td>
      <td>Liter (L)</td>
      <td>
        1 kL = 1,000 L<br>
        1 L = 1,000 mL<br>
        1 mL = 1 cm³
      </td>
      <td>
        ÷1,000 for kL<br>
        ×1,000 for mL<br>
        1:1 for mL to cm³
      </td>
    </tr>
    <tr>
      <td>Temperature</td>
      <td>Celsius (°C)</td>
      <td>
        °F = (°C × 9/5) + 32<br>
        K = °C + 273.15
      </td>
      <td>
        Multiply + Add as shown
      </td>
    </tr>
    <tr>
      <td>Pressure</td>
      <td>Pascal (Pa)</td>
      <td>
        1 kPa = 1,000 Pa<br>
        1 bar = 100,000 Pa<br>
        1 atm = 101,325 Pa<br>
        1 psi ≈ 6,894.76 Pa
      </td>
      <td>
        Use conversion constants
      </td>
    </tr>
    <tr>
      <td>Area</td>
      <td>Square Meter (m²)</td>
      <td>
        1 km² = 1,000,000 m²<br>
        1 m² = 10,000 cm²<br>
        1 m² = 1,000,000 mm²
      </td>
      <td>
        Multiply or divide by powers of 10²
      </td>
    </tr>
    <tr>
      <td>Angle</td>
      <td>Degree (°)</td>
      <td>
        1 turn = 360°<br>
        1 rad ≈ 57.2958°<br>
        1° = 60′ (minutes)<br>
        1′ = 60″ (seconds)
      </td>
      <td>
        Use circular and angular conversion formulas
      </td>
    </tr>
    <tr>
      <td>Energy</td>
      <td>Joule (J)</td>
      <td>
        1 kJ = 1,000 J<br>
        1 cal = 4.184 J<br>
        1 kcal = 4,184 J<br>
        1 Wh = 3,600 J
      </td>
      <td>
        Multiply by constant factors
      </td>
    </tr>
    <tr>
      <td>Force</td>
      <td>Newton (N)</td>
      <td>
        1 N = 1 kg·m/s²<br>
        1 kN = 1,000 N
      </td>
      <td>
        Derived from mass × acceleration
      </td>
    </tr>
    <tr>
      <td>Power</td>
      <td>Watt (W)</td>
      <td>
        1 kW = 1,000 W<br>
        1 hp ≈ 745.7 W
      </td>
      <td>
        Multiply or divide by factor
      </td>
    </tr>
    <tr>
      <td>Speed</td>
      <td>Meter/second (m/s)</td>
      <td>
        1 km/h ≈ 0.27778 m/s<br>
        1 m/s = 3.6 km/h
      </td>
      <td>
        Multiply or divide by 3.6
      </td>
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