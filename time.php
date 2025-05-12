<?php
//php variable for page name.
$title = "Time Framework";
$long_title = "Rainbow Tabletop Roleplay System Time Framework";
$page_blerb = "Here’s a brief guide to Time and Calculations";
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
		<div class="col s6">
			<div id="clock-container" class="center-align">
				<canvas id="clockCanvas" width="300" height="300" style="background: url('clock.svg') no-repeat center; background-size: contain;"></canvas>
				<script>
					const canvas = document.getElementById('clockCanvas');
					const ctx = canvas.getContext('2d');
					const radius = canvas.width / 2;
					ctx.translate(radius, radius);

					function drawClock(hour, minute, second) {
						ctx.clearRect(-radius, -radius, canvas.width, canvas.height);
						drawNumbers(ctx, radius);
						drawTime(ctx, radius, hour, minute, second);
					}

					function drawNumbers(ctx, radius) {
						const numSteps = 13;
						ctx.font = `${radius * 0.15}px Arial`;
						ctx.textBaseline = 'middle';
						ctx.textAlign = 'center';
						for (let num = 1; num <= numSteps; num++) {
							const angle = (num * 2 * Math.PI) / numSteps - Math.PI / 2;
							const x = (radius - 30) * Math.cos(angle);
							const y = (radius - 30) * Math.sin(angle);
							ctx.fillText(num, x, y);
						}
					}

					function drawTime(ctx, radius, hour, minute, second) {
						const numSteps = 13;
						const hourAngle = ((hour % numSteps) * 2 * Math.PI) / numSteps - Math.PI / 2;
						const minuteAngle = (minute * 2 * Math.PI) / 60 - Math.PI / 2;
						const secondAngle = (second * 2 * Math.PI) / 60 - Math.PI / 2;

						// Draw hour hand
						ctx.beginPath();
						ctx.lineWidth = 6;
						ctx.moveTo(0, 0);
						ctx.lineTo((radius - 60) * Math.cos(hourAngle), (radius - 60) * Math.sin(hourAngle));
						ctx.stroke();

						// Draw minute hand
						ctx.beginPath();
						ctx.lineWidth = 4;
						ctx.moveTo(0, 0);
						ctx.lineTo((radius - 40) * Math.cos(minuteAngle), (radius - 40) * Math.sin(minuteAngle));
						ctx.stroke();

						// Draw second hand
						ctx.beginPath();
						ctx.strokeStyle = 'red';
						ctx.lineWidth = 2;
						ctx.moveTo(0, 0);
						ctx.lineTo((radius - 30) * Math.cos(secondAngle), (radius - 30) * Math.sin(secondAngle));
						ctx.stroke();
						ctx.strokeStyle = 'black'; // Reset stroke color
					}

					// Initial draw with default time
					let currentHour = 0;
					let currentMinute = 0;
					let currentSecond = 0;
					drawClock(currentHour, currentMinute, currentSecond);

					// Function to update the clock based on user input
					function updateClock() {
						const hourInput = document.getElementById('hourInput').value;
						const minuteInput = document.getElementById('minuteInput').value;
						currentHour = parseInt(hourInput) || 0;
						currentMinute = parseInt(minuteInput) || 0;
						drawClock(currentHour, currentMinute, currentSecond);
					}

					// Function to add six seconds to the clock
					function addSixSeconds() {
						currentSecond += 6;
						if (currentSecond >= 60) {
							currentSecond -= 60;
							currentMinute += 1;
							if (currentMinute >= 60) {
								currentMinute -= 60;
								currentHour += 1;
								if (currentHour >= 13) {
									currentHour = 0;
								}
							}
						}
						drawClock(currentHour, currentMinute, currentSecond);
					}
				</script>
				<div class="input-field center-align">
					<button onclick="addSixSeconds()" class="btn waves-effect waves-light">Add 6 Seconds</button>
				</div>
			</div>
			<div class="input-field center-align">
				<label for="hourInput">Hour (1-13):</label>
				<input id="hourInput" type="number" min="0" max="13" value="0" onchange="updateClock()">
			</div>
			<div class="input-field center-align">
				<label for="minuteInput">Minute (0-59):</label>
				<input id="minuteInput" type="number" min="0" max="59" value="0" onchange="updateClock()">
			</div>
			<div class="input-field center-align">
				<label for="secondInput">Second (0-59):</label>
				<input id="secondInput" type="number" min="0" max="59" value="0" onchange="updateClock()">
				<script>
					document.getElementById('secondInput').addEventListener('change', function() {
						currentSecond = parseInt(this.value) || 0;
						drawClock(currentHour, currentMinute, currentSecond);
					});
				</script>
			</div>
		</div>
      	<div class="col s6">
			<div class="container center-align">
			  <div class="row">
				  <div class="card blue-grey darken-1">
					<div class="card-content white-text">
					  <span class="card-title"><h4>Time Generation:</h4></span>
							<div class="dice-roller center-align">
								<button onclick="rollDiceH()" class="btn waves-effect waves-light">Roll Dice</button>
								<p id="diceResultH">Result: </p>
							</div>
							<script>
								function rollDiceH() {
									const d26 = Math.floor(Math.random() * 26) + 1; // Roll a d26 (1-26)
									const adjustedHour = d26 > 13 ? d26 - 13 : d26; // Adjust to fit 13-hour clock
									const d60Minutes = Math.floor(Math.random() * 60) + 1; // Roll a d60 (1-60) for minutes
									const d60Seconds = Math.floor(Math.random() * 60) + 1; // Roll a d60 (1-60) for seconds
									
									// Determine time period
									const timePeriod = d26 <= 8 ? "Quiet Time (10PM-6AM)" : "Noisy Time (6AM-10PM)";
									
									// Update results
									document.getElementById('diceResultH').innerText = `Result: ${d26} (Adjusted: ${adjustedHour}), Time Period: ${timePeriod}`;
									document.querySelector('.dice-rollerMAndS #diceResultMAndS').innerText = `Results: Minutes: ${d60Minutes}, Seconds: ${d60Seconds}`;
									
									// Update the clock face
									currentHour = adjustedHour;
									currentMinute = d60Minutes;
									currentSecond = d60Seconds;
									drawClock(currentHour, currentMinute, currentSecond);
								}
							</script>
						<hr>
						<p>Hours Roll: (d5 × 5) + d6</p>
						<p>First d5 determines base (0-20 in steps of 5)<br>Second d5 determines addition (1-5)</p>
						<hr>
						<div class="dice-rollerMAndS center-align">
								<p id="diceResultMAndS">Result: </p>
						</div>
						<hr>
						<p>Minutes &amp; Seconds Roll: Two rolls of d60</p>
						<p>First roll determines minutes (1-60)<br>Second roll determines seconds (1-60)</p>
					</div>
				</div>
			 	</div>
			<div class="row">
				<div class="card blue-grey darken-1">
					<div class="card-content white-text">
					  	<span class="card-title"><h4>Time Period Check:</h4></span>
					  	<p>1-8: Quiet Time (10PM-6AM)<br>9-26: Noisy Time (6AM-10PM)</p>
					</div>
				</div>
			 </div>
			<div class="row">
				<div class="card blue-grey darken-1">
					<div class="card-content white-text">
					  	<span class="card-title"><h4>Time Converter:</h4></span>
						<div class="time-converter center-align">
							<label for="timeInput">Enter Time (26-hour system):</label>
							<input id="timeInput" type="text" placeholder="HH:MM:SS">
							<button onclick="convertTo24Hour()" class="btn waves-effect waves-light">Convert to 24-hour</button>
							<p id="convertedTime24">Converted Time (24-hour): </p>
							<hr>
							<label for="timeInput24">Enter Time (24-hour system):</label>
							<input id="timeInput24" type="text" placeholder="HH:MM:SS">
							<button onclick="convertTo26Hour()" class="btn waves-effect waves-light">Convert to 26-hour</button>
							<p id="convertedTime26">Converted Time (26-hour): </p>
						</div>
						<script>
							function convertTo24Hour() {
								const timeInput = document.getElementById('timeInput').value;
								const [hours, minutes, seconds] = timeInput.split(':').map(Number);

								if (isNaN(hours) || isNaN(minutes) || isNaN(seconds)) {
									document.getElementById('convertedTime24').innerText = 'Invalid time format.';
									return;
								}

								// Convert 26-hour time to 24-hour time
								let convertedHours = Math.floor((hours / 26) * 24);
								let convertedMinutes = Math.floor((minutes / 60) * 60);
								let convertedSeconds = Math.floor((seconds / 60) * 60);

								// Format the converted time
								const formattedTime = `${String(convertedHours).padStart(2, '0')}:${String(convertedMinutes).padStart(2, '0')}:${String(convertedSeconds).padStart(2, '0')}`;
								document.getElementById('convertedTime24').innerText = `Converted Time (24-hour): ${formattedTime}`;
							}

							function convertTo26Hour() {
								const timeInput24 = document.getElementById('timeInput24').value;
								const [hours, minutes, seconds] = timeInput24.split(':').map(Number);

								if (isNaN(hours) || isNaN(minutes) || isNaN(seconds)) {
									document.getElementById('convertedTime26').innerText = 'Invalid time format.';
									return;
								}

								// Convert 24-hour time to 26-hour time
								let convertedHours = Math.floor((hours / 24) * 26);
								let convertedMinutes = Math.floor((minutes / 60) * 60);
								let convertedSeconds = Math.floor((seconds / 60) * 60);

								// Format the converted time
								const formattedTime = `${String(convertedHours).padStart(2, '0')}:${String(convertedMinutes).padStart(2, '0')}:${String(convertedSeconds).padStart(2, '0')}`;
								document.getElementById('convertedTime26').innerText = `Converted Time (26-hour): ${formattedTime}`;
							}
						</script>
					</div>
				</div>
			 </div>
			</div>
		</div>
	<div class="row">
		<div class="col s12">
			<hr>
		</div>
	</div>
    <footer class="page-footer grey">
    <?php include '../footer.php';?>
	</footer>
  </body>
</html>