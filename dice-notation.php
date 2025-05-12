<?php
//php variable for page name.
$title = "Dice Framework";
$long_title = "Rainbow Tabletop Roleplay System Dice Notation";
$page_blerb = "Here’s a brief guide to dice notation, types and names";
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
      	<div class="col s6 center">
		  	<h3>&nbsp;🎲 Dice Notation (Standard RPG Format)</h3>
				<p>The general format is: XdY + Z</p>
				<p>Where:</p>
				<ul style="list-style-type:none"><li>X = Number of dice rolled</li><li>d = "die" (short for dice)</li><li>Y = Number of sides on the die</li><li>Z = Optional modifier added to the total</li></ul>
				<h5>Examples:</h5>
				<p>1d6 = Roll one six-sided die</p>
				<p>2d8 = Roll two eight-sided dice and add the results</p>
				<p>3d10 + 4 = Roll three ten-sided dice, then add 4 to the total</p>		
		</div>
      	<div class="col s6 center">
			<h3>🧊 Common Dice Types and Names</h3>
				<table class="table table-bordered table-striped">
					  <tbody>
						<tr>
						  	<th scope="col">Dice Name</th>
						  	<th scope="col">Notation</th>
							<th scope="col">Pictation</th>
						  	<th scope="col">Description</th>
						</tr>
						<tr>
						  <th scope="row">Four-sided</th>
					  	  <td>d4</td>
							<td><img src="../images/D4.jpg" width="75" height="84" alt=""/></td>
					  	  <td>Pyramid-shaped; numbers 1-4</td>
						</tr>
						<tr>
						  <th scope="row">Six-sided</th>
						  <td>d6</td>
							<td><img src="../images/D6.jpg" width="75" height="84" alt=""/></td>
						  <td>Cube-shaped; numbers 1-6</td>
						</tr>
						<tr>
						  <th scope="row">Eight-sided</th>
						  <td>d8</td>
							<td><img src="../images/D8.jpg" width="75" height="84" alt=""/></td>
						  <td>Octahedron; numbers 1-8</td>
						</tr>
						<tr>
						  <th scope="row">Ten-sided</th>
						  <td>d10</td>
							<td><img src="../images/D10.jpg" width="75" height="84" alt=""/></td>
						  <td>Pentagonal trapezohedron; numbers 0-9</td>
						</tr>
						<tr>
						  <th scope="row">Percentile</th>
						  <td>d100 / d%</td>
							<td></td>
						  <td>Two ten-sided dice; one shows 10's digits, other 1's digits</td>
						</tr>
						<tr>
						  <th scope="row">Twelve-sided</th>
						  <td>d12</td>
							<td><img src="../images/D12.jpg" width="75" height="84" alt=""/></td>
						  <td>Dedecahedron; numbers 1-12</td>
						</tr>
						<tr>
						  <th scope="row">Twenty-sided</th>
						  <td>d20</td>
							<td><img src="../images/D20.jpg" width="75" height="84" alt=""/></td>
						  <td>Icosehedron; numbers 1-20</td>
						</tr>
					  </tbody>
					</table>
		</div>
    </div>
	<div class="row">
      	<div class="col s6 center">
			<h3>📝 Additional Notation Variations</h3>
				<p>d% = Percentile roll (rolls 1–100 using two d10s)</p>
				<p>4d6 drop lowest = Roll four d6 and drop the lowest roll</p>
				<p>1d20+5 = Roll a d20 and add 5</p>
		</div>
      	<div class="col s6 center">
			<h3>💡 Tips</h3>
				<p>Always read from left to right: how many dice, what type, then modifiers</p>
				<p>Modifiers can be positive or negative (e.g., 2d6 - 1)</p>
				<p>Notation is used in combat rolls, skill checks, spell effects, and more</p>
		</div>
    </div>
	<footer class="page-footer grey">
    <?php include '../footer.php';?>
	</footer>
  </body>
</html>