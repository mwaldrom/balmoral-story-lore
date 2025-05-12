<?php
//php variable for page name.
$title = "Date Framework";
$long_title = "Rainbow Tabletop Roleplay System Date Framework";
$page_blerb = "Here’s a brief guide to Date, Names and Calculations";
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
			<h5>10 day week - 5 week month - 12 month year / 600 day per year.</h5>
			<h4>Date Calculation</h4>
			<form id="dateCalcForm">
				<p>Convert Earth Date to Ulthean Date:</p>
				<label class="black-text" for="earthDay">Earth Day (1-31):</label>
				<input type="number" id="earthDay" min="1" max="31" required>
				<label class="black-text" for="earthMonth">Earth Month (1-12):</label>
				<input type="number" id="earthMonth" min="1" max="12" required>
				<button class="black-text" type="button" onclick="calculateUltheanDate()">Convert to Ulthean</button>
				<hr>
				<p>Convert Ulthean Date to Earth Date:</p>
				<label class="black-text" for="ultheanMonth">Ulthean Month (1-12):</label>
				<input type="number" id="ultheanMonth" min="1" max="12" required>
				<label class="black-text" for="ultheanDay">Ulthean Day (1-50):</label>
				<input type="number" id="ultheanDay" min="1" max="50" required>
				<button class="black-text" type="button" onclick="calculateEarthDate()">Convert to Earth</button>
			</form>
			<h4 id="result"></h4>

			<script>
			function calculateUltheanDate() {
				const earthDay = parseInt(document.getElementById('earthDay').value);
				const earthMonth = parseInt(document.getElementById('earthMonth').value);

				if (
					isNaN(earthDay) || earthDay < 1 || earthDay > 31 ||
					isNaN(earthMonth) || earthMonth < 1 || earthMonth > 12
				) {
					document.getElementById('result').innerText = "Please enter a valid Earth month (1-12) and day (1-31).";
					return;
				}

				const earthMonths = [
					{ name: "January", days: 31 },
					{ name: "February", days: 28 },
					{ name: "March", days: 31 },
					{ name: "April", days: 30 },
					{ name: "May", days: 31 },
					{ name: "June", days: 30 },
					{ name: "July", days: 31 },
					{ name: "August", days: 31 },
					{ name: "September", days: 30 },
					{ name: "October", days: 31 },
					{ name: "November", days: 30 },
					{ name: "December", days: 31 }
				];

				let earthDayNumber = earthDay;
				for (let i = 0; i < earthMonth - 1; i++) {
					earthDayNumber += earthMonths[i].days;
				}

				const ultheanDayNumber = Math.ceil(earthDayNumber * 1.644);
				const ultheanMonth = Math.ceil(ultheanDayNumber / 50);
				const ultheanDay = ultheanDayNumber % 50 || 50;

				document.getElementById('result').innerText = `Ulthean Date: Month ${ultheanMonth}, Day ${ultheanDay}`;
			}

			function calculateEarthDate() {
				const ultheanMonth = parseInt(document.getElementById('ultheanMonth').value);
				const ultheanDay = parseInt(document.getElementById('ultheanDay').value);
				if (
					isNaN(ultheanMonth) || ultheanMonth < 1 || ultheanMonth > 12 ||
					isNaN(ultheanDay) || ultheanDay < 1 || ultheanDay > 50
				) {
					document.getElementById('result').innerText = "Please enter valid Ulthean month (1-12) and day (1-50).";
					return;
				}
				const ultheanDayNumber = (ultheanMonth - 1) * 50 + ultheanDay;
				const earthDayNumber = Math.floor(ultheanDayNumber / 1.644);

				// Calculate Earth month and day
				const earthMonths = [
					{ name: "January", days: 31 },
					{ name: "February", days: 28 },
					{ name: "March", days: 31 },
					{ name: "April", days: 30 },
					{ name: "May", days: 31 },
					{ name: "June", days: 30 },
					{ name: "July", days: 31 },
					{ name: "August", days: 31 },
					{ name: "September", days: 30 },
					{ name: "October", days: 31 },
					{ name: "November", days: 30 },
					{ name: "December", days: 31 }
				];

				let remainingDays = earthDayNumber;
				let earthMonth = "";
				let earthDay = 0;

				for (const month of earthMonths) {
					if (remainingDays <= month.days) {
						earthMonth = month.name;
						earthDay = remainingDays;
						break;
					}
					remainingDays -= month.days;
				}

				document.getElementById('result').innerText = `Earth Date: ${earthMonth} ${earthDay}`;
			}
			</script>
		</div>
	  </div>
	<div class="row center-align">
		<div class="col s4">
			<h5>Annual Cycle Markers</h5>
			<p>*Seasons reversed for Southern/Northern hemispheres</p>
			<p>Spring Equinox: 22nd of Try-Bear*<br>Summer Solstice: 22nd of Hex-Bear*<br>Fall Equinox: 22nd of Non-Bear*<br>Winter Solstice: 22nd of Dode-Bear*</p>
			<h5>Religious Observances</h5>
			<p>Divine Assembly: 1st of each month<br>Full Moon Ceremony: During Argentum's peak<br>Ancestral Memorial: Last day of Oct-Bear<br>Apollo's Rebirth: First Sunday after Spring Equinox<br>Divine Advent: 25th of Dode-Bear<br>Year's End Vigil: Final week of Dode-Bear</p>
		</div>
      	<div class="col s4">
			<h5>World Important Dates</h5>
			<p>Festivals depend on Southern/Northern hemispheres</p>
			<p>New Year's Day: 1st of Circle-Bear<hr>People will celebrate the Spring Festival<br>from the 17th to the 22nd of Try-Bear<hr>The Summer Celebration Festival will take place in Hex-Bear<br>from the 17th to the 22nd<hr>The Harvest Festival will take place<br>from the 17th through the 22nd of Non-Bear<hr>The Winter Solstice Festival will take place<br>from December 17th to the 22nd.</p>
		</div>
		<div class="col s4">
			<h4>Special Date Tables</h4>
			<h5>Festival Probability (D100)</h5>
				<p>Festival Roll: <span id="festivalRoll"></span></p>
				<p>Festival Type: <span id="festivalType"></span></p>
				<button onclick="rollFestival()">Roll for Festival</button>

				<script>
					function rollFestival() {
						const festivalRoll = Math.floor(Math.random() * 100) + 1;
						let festivalType = "";

						if (festivalRoll >= 1 && festivalRoll <= 10) {
							festivalType = "Major Festival";
						} else if (festivalRoll >= 11 && festivalRoll <= 30) {
							festivalType = "Minor Celebration";
						} else if (festivalRoll >= 31 && festivalRoll <= 60) {
							festivalType = "Local Event";
						} else {
							festivalType = "Regular Day";
						}

						document.getElementById('festivalRoll').innerText = festivalRoll;
						document.getElementById('festivalType').innerText = festivalType;
					}
				</script>
				<hr>
				<p>1-10: Major Festival<br>11-30: Minor Celebration<br>31-60: Local Event<br>61-100: Regular Day</p>
			<h5>Moon Phase (d8)</h5>
				<p>Moon Phase Roll: <span id="moonPhaseRoll"></span></p>
				<p>Moon Phase: <span id="moonPhase"></span></p>
				<button onclick="rollMoonPhase()">Roll for Moon Phase</button>
				<script>
					function rollMoonPhase() {
						const moonPhaseRoll = Math.floor(Math.random() * 8) + 1;
						let moonPhase = "";

						switch (moonPhaseRoll) {
							case 1:
								moonPhase = "New Moon";
								break;
							case 2:
							case 3:
								moonPhase = "Waxing Crescent";
								break;
							case 4:
								moonPhase = "First Quarter";
								break;
							case 5:
								moonPhase = "Waxing Gibbous";
								break;
							case 6:
								moonPhase = "Full Moon";
								break;
							case 7:
								moonPhase = "Waning Gibbous";
								break;
							case 8:
								moonPhase = "Last Quarter";
								break;
						}

						document.getElementById('moonPhaseRoll').innerText = moonPhaseRoll;
						document.getElementById('moonPhase').innerText = moonPhase;
					}
				</script>
				<hr>
				<p>1: New Moon<br>2-3: Waxing Crescent<br>4: First Quarter<br>5: Waxing Gibbous<br>6: Full Moon<br>7: Waning Gibbous<br>8: Last Quarter</p>
		</div>
      	<div class="col s12">
			<table class="yellow lighten-5 responsive-table striped centered">
			  <tbody>
				<tr>
				  <th scope="row">System 10 Day Week</th>
				  <td>1: Mon-Day (M)</td>
				  <td>2: Tu-Day (T)</td>
				  <td>3: Chew-Day (C)</td>
				  <td>4: Wen-Day (W)</td>
				  <td>5: Thur-Day (T)</td>
				  <td>6: Why-Day (Y)</td>
				  <td>7: Fry-Day (F)</td>
				  <td>8: Sat-Day (S)</td>
				  <td>9: Sar-Day (R)</td>
				  <td>10: Sun-Day (N)</td>
				</tr>
				<tr>
				  <th scope="row">Real 7 Day Week</th>
				  <td>Monday</td>
				  <td colspan="2">Tuesday</td>
				  <td>Wednasday</td>
				  <td colspan="2">Thurday</td>
				  <td>Friday</td>
				  <td colspan="2">Satarday</td>
				  <td>Sunday</td>
				</tr>
			  </tbody>
			</table>
		</div>
	  </div>
	  <div class="row">
      	<div class="col s12">
			<hr>
			<table class="yellow lighten-5 responsive-table striped centered">
				  <tbody>
					<tr>
					  <th scope="col">Earth Month</th>
					  <th scope="col">Days in Earth Month</th>
					  <th scope="col">Ulthean Month</th>
					  <th scope="col">Days in Ulthean Month</th>
					</tr>
					<tr>
					  <td>January</td>
					  <td>31</td>
					  <td>Circle-Bear</td>
					  <td>50</td>
					</tr>
					<tr>
					  <td>February</td>
					  <td>28</td>
					  <td>Poly-Bear</td>
					  <td>50</td>
					</tr>
					<tr>
					  <td>March</td>
					  <td>31</td>
					  <td>Try-Bear</td>
					  <td>50</td>
					</tr>
					<tr>
					  <td>April</td>
					  <td>30</td>
					  <td>Quad-Bear</td>
					  <td>50</td>
					</tr>
					<tr>
					  <td>May</td>
					  <td>31</td>
					  <td>Pent-Bear</td>
					  <td>50</td>
					</tr>
					<tr>
					  <td>June</td>
					  <td>30</td>
					  <td>Hex-Bear</td>
					  <td>50</td>
					</tr>
					<tr>
					  <td>July</td>
					  <td>31</td>
					  <td>Hept-Bear</td>
					  <td>50</td>
					</tr>
					<tr>
					  <td>August</td>
					  <td>31</td>
					  <td>Oct-Bear</td>
					  <td>50</td>
					</tr>
					<tr>
					  <td>September</td>
					  <td>30</td>
					  <td>Non-Bear</td>
					  <td>50</td>
					</tr>
					<tr>
					  <td>October</td>
					  <td>31</td>
					  <td>Dec-Bear</td>
					  <td>50</td>
					</tr>
					<tr>
					  <td>Novembr</td>
					  <td>30</td>
					  <td>Hen-Bear</td>
					  <td>50</td>
					</tr>
					<tr>
					  <td>December</td>
					  <td>31</td>
					  <td>Dode-Bear</td>
					  <td>50</td>
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