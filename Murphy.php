<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">var timerStart = Date.now();</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Murphy's(Sod's) Law or a Buckley's Chance of Success?</title>
	<script>
	function myFunction() {
		var us = Number(document.getElementById("Urgency").value);
		var is = Number(document.getElementById("Importance").value);
		var cs = Number(document.getElementById("Complexity").value);
		var ss = Number(document.getElementById("Skill").value);
		var fs = Number(document.getElementById("Frequency").value);
		var as = 7 ;
		/* var forc = us + is + cs + ss + fs ; */
		var usp = Number(us / 10); var isp = is / 10; var csp = cs / 10; var ssp = ss / 10; var fsp = fs / 10; var asp = as / 10; 
		var forc = 100*((usp+csp+isp)*(1-ssp)*asp/(2*(1-Math.sin(fsp)))); 
		var forcj = Math.min(forc,100);
		forcj = Math.round( forcj * 100 ) / 100 ;
		document.getElementById("helpp").innerHTML = "<b>"+forcj+"%</b> chance of failure<br><br>";
	}
	</script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="container" style="width: 80%;">
<br>

<form role="form" class="form-horizontal" onSubmit="return false;">
<fieldset>

<!-- Form Name -->
<legend>Murphy's(Sod's) Law or a Buckley's Chance of Success?</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-xs-3 col-md-2 control-label" for="Urgency">Urgency</label>
  <div class="col-xs-3 col-md-2">
    <select id="Urgency" name="Urgency" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select>
  </div>
  <div class="col-xs-6 col-md-8">
  1 = We will get around to it this year, 5 = Today, 9 = ASAP 
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-xs-3 col-md-2 control-label" for="Importance">Importance</label>
  <div class="col-xs-3 col-md-2">
    <select id="Importance" name="Importance" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select>
  </div>
    <div class="col-xs-6 col-md-8">
  1 = A complete waste of time, 9 = Critical
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-xs-3 col-md-2 control-label" for="Complexity">Complexity</label>
  <div class="col-xs-3 col-md-2">
    <select id="Complexity" name="Complexity" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select>
  </div>
    <div class="col-xs-6 col-md-8">
  1 = Simple, 9 = composed of many interconnected parts or steps
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-xs-3 col-md-2 control-label" for="Skill">Skill</label>
  <div class="col-xs-3 col-md-2">
    <select id="Skill" name="Skill" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select>
  </div>
  <div class="col-xs-6 col-md-8">
  1 = Anyone can do it, 9 = Specific expertise required 
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-xs-3 col-md-2 control-label" for="Frequency">Frequency</label>
  <div class="col-xs-3 col-md-2">
    <select id="Frequency" name="Frequency" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select>
  </div>
    <div class="col-xs-6 col-md-8">
  1 = Once, 4 = Daily, 9 = many times per hour 
  </div>
</div>

</fieldset>
</form>
<!-- Button -->
<br>
<div style="position: relative; width: 320px; height: 80px">
<button  onclick="myFunction()" >What are the odds?</button>
<div style="position: absolute; top: 5px; right: 0px; width:160px; height:40px;" id="helpp"></div>
</div>
	<div style="font-size: 70%; tect-align: center;">
	<ol style="list-style-type: lower-greek;">
		<li>Using Formula for Sod's Law provided by British Gas: ((U+C+I) x (10-S))/20 x A x 1/(1-sin(F/10))</li>
		<li>Original <a href="http://wayback.archive.org/web/20060222100438/http://www.britishgasnews.co.uk/index.asp?PageID=16&Year=2004&NewsID=623">2004 British Gas page</a> on the Wayback machine
		<li><a href="http://jhb434.info" style="text-decoration: none;" target="blank">jhb434</a><br>v0.90<br>
		<script type="text/javascript">
			document.write("Page load time: ", Date.now()-timerStart);
		</script>ms
		</li>
	</ol>
</div>
</body>
</html>
