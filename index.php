<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'links/links.php'; ?>
	<?php  include 'css/styles.php'; ?>
</head>
<body onload="fetch_data()">
	<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="index.php">COVID19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#previd">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">IndiaStats</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">WorldStats</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
  </div>
</nav> 
<div class="main_header">
	<div class="row h-100 w-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/corona.jpg" >
			</div>
			
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1> Stay Safe & Calm,We will Definitely Win Against This Virus   <span> <img src="images/together3.png" width="300" height="200"></span></h1>
			</div>	
		</div> 
		
	</div>
</div>

<!-- ***************CORONA latest update ***********-->
<section class="corona_update pt-5 container-fluid">
	<div class="mb-3">
		<h2 class="text-uppercase text-center">COVID-19 GLOBAL UPDATES</h2>
	</div>
	<div class="d-flex justify-content-around align-items-center pt-5 count_style">
		
		<div>
			<h1 class="count" id="globalConfirmed" style="color: #F41005">Loading...</h1>
			<h4>Total Cases</h4>
		</div>
		<div>
			<h1 class="count" id="globalActive" style="color: #050CF4">Loading...</h1>
			<h4>Active COVID-19 cases*</h4>
		</div>
		<div>
			<h1 class="count" id="globalRecovered" style="color: #186A3B">Loading...</h1>
			<h4>Cured/Recovered cases</h4>
		</div>
		<div>
			<h1 class="count" id="globalDeaths"style="color: #626567">Loading...</h1>
			<h4>Deaths</h4>
		</div>
	</div>
	<div>
		<h2 class="text-uppercase text-center  pt-5">COUNTRYWISE UPDATE</h2>
		</div>
	<div class="table-responsive pt-5">
		<table class="table table-bordered table-striped text-center" id="tbval">
			<tr style="background-color:#BDC3C7">
				<th><h2>Country</h2></th>
				<th><h2>Total Confirmed</h2></th>
				<th><h2>Total Recovered</h2></th>
				<th><h2>Total Deaths</h2></th>
				<th><h2>New Confirmed</h2></th>
				<th><h2>New Recovered</h2></th>
				<th><h2>New Deaths</h2></th>
			</tr>
			
		</table>
		
	</div>
</section>
<!-------------- about section ----------------------->
<div class="container-fluid sub_section pt-5 pb-5 about_image" id="aboutid" >
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
	</div>
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_image_style">
			<img src="images/corona1.jpg " class="img-fluid pl-5 " width="900">
		</div>
		<div class="col-lg-6 col-md-6 col-12 ">
			<h1>What is COVID-19(Corona Virus)?</h1><br>
			<p style="font-size:150%;">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.<br>
Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.	
			</p>
			<p style="font-size:150%;">The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).<br>At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</p>
		</div>
	</div>
</div>

<!-----------------Symptoms------------------->

<div class="container-fluid pt-5 pb-5 symp_style " id="symptid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Coronavirus Symptoms</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<img src="images/symptoms.png" class="img-fluid">
			</div>
		</div>
	</div>
</div>

<!----------------Prevention------------------->
<div class="container-fluid sub_section pt-5 pb-5 " id="previd">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Prevention Against Coronavirus</h1>
	</div>
	<div class="container-fluid ml-5 pt-5 prev_container_style">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 pl-5 prev_style ">
				<img src="images/prevention3.jpg" class="img-fluid">
			</div>
			<div class="col-lg-4 col-md-4 col-12 pl-5 prev_style" >
				<img src="images/social.jpg" class="img-fluid">
			</div>
			<!-- <div class="col-lg-4 col-md-4 col-12">
				<img src="images/store.jpg">
			</div> -->
			<div class="col-lg-4 col-md-4 col-12 pl-5 prev_style">
				<img src="images/wash.jpg" class="img-fluid">
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-lg-4 col-md-4 col-12 pl-5 prev_style">
				<img src="images/mask.jpg" class="img-fluid">
			</div>
			<div class="col-lg-4 col-md-4 col-12 pl-5 prev_style">
				<img src="images/house.jpg" class="img-fluid">
			</div>
			<div class="col-lg-4 col-md-4 col-12 pl-5 prev_style">
				<img src="images/leave.jpg" class="img-fluid">
			</div>
			<!-- <div class="col-lg-3 col-md-3 col-12">
				<img src="images/sanitizer.jpg">
			</div> -->
		</div>
	</div>
</div>

<!----------------Contact Us------------------->
<div class="container-fluid  pt-5 pb-5 " id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact Us</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<form action="" method="POST">
					<div class="form-group">
						<label >Username</label>
					   	<input type="text" class="form-control" name="username"  placeholder="name" autocomplete="off" required>
					</div> 
					<div class="form-group">
						<label>Email</label>
					   	<input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required >
					</div>
  
  					<div class="form-group">
						<label >Mobile</label>
					   	<input type="number" class="form-control" name="mobile"  placeholder="mobile" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label >Symptoms</label>
						<br>

						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
						  	<input class="custom-control-input" type="checkbox" id="inlineCheckbox1" value="fever"name="coronasym[]">
						  	<label class="custom-control-label" for="inlineCheckbox1" >Fever</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
						  	<input class="custom-control-input" type="checkbox" id="inlineCheckbox2" value="cold" name="coronasym[]">
						  	<label class="custom-control-label" for="inlineCheckbox2" >Cough & Cold</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
						  	<input class="custom-control-input" type="checkbox" id="inlineCheckbox3" value="breathe" name="coronasym[]">
						  	<label class="custom-control-label" for="inlineCheckbox3" >Difficulty in Breathing</label>
						</div>
					</div>
					<div class="form-group">
						<label >Describe your concern</label>
					    <textarea class="form-control" name="description" rows="3"></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!--////////////////////////////////////////////////////////////top cursor/////////////////////////////-->
<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>
<!--////////////////////////////////////////////////////////////bottom cursor/////////////////////////////-->
<div class="container scrollbottom float-right pr-5">
	<i class="fa fa-arrow-down" onclick="bottomFunction()" id="BotBtn"></i>
</div>


<!--///////////////////////////////////////Footer//////////////////////////////////////////////////////-->


<footer class ="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		<h3>	Copyright by Technica</h3>
	</div>
	
</footer>

<script type="text/javascript">
	// $('.count').counterUp({
	// 	delay:10,
	// 	time:3000
	// })
	$(document).ready(function(){
    $('html, body').scrollTop(0);

    $(window).on('load', function() {
    setTimeout(function(){
        $('html, body').scrollTop(0);
    }, 0);
 });
});
	bottomButton=document.getElementById("BotBtn");
	mybutton = document.getElementById("myBtn");
	//When user scrolls down 20px from top,show the button
	window.onscroll = function(){ scrollFunction() };
	function scrollFunction(){
		if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
			mybutton.style.display="block";
			bottomButton.style.display="none";
		}
		else{
			mybutton.style.display="none";
			bottomButton.style.display="block";

		}
	}
	// When user clicks the button scroll to the top
	function topFunction(){
		document.body.scrollTop =0;//For Safari
		document.documentElement.scrollTop=0;//For Chrome,Firefox,IE and Opera
	}
	// When user clicks the button scroll to the bottom
	function bottomFunction(){
		document.body.scrollBottom =500;//For Safari
		document.documentElement.scrollTo(0,document.body.scrollHeight);//For Chrome,Firefox,IE and Opera
	}
	function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}
	
	function fetch_data(){
		$.get("https://api.covid19api.com/summary",
			function(data){
				console.log(data['Countries'].length);
				var tbval = document.getElementById('tbval');
				var tcase = document.getElementById('globalConfirmed');
				var rcase = document.getElementById('globalRecovered');
				var acase = document.getElementById('globalActive');
				var dcase = document.getElementById('globalDeaths');
				console.log(data);
				//dataActual=JSON.parse(JSON.stringify(data));
				//console.log(dataActual);
				tcase.innerHTML = numberWithCommas(data['Global']['TotalConfirmed'])+"<sup><span>&#43;</span>"+data['Global']['NewConfirmed']+"</sup>";
				rcase.innerHTML = numberWithCommas(data['Global']['TotalRecovered'])+"<sup><span>&#43;</span>"+data['Global']['NewRecovered']+"</sup>";
				acase.innerHTML = numberWithCommas(data['Global']['TotalConfirmed']-data['Global']['TotalRecovered'])+"<sup><span>&#43;</span>"+(data['Global']['NewConfirmed']-data['Global']['NewRecovered'])+"</sup>";
				dcase.innerHTML = numberWithCommas(data['Global']['TotalDeaths'])+"<sup><span>&#43;</span>"+data['Global']['NewDeaths']+"</sup>";
				for(var i=1;i<data['Countries'].length;i++){
					var x = tbval.insertRow();
					x.insertCell(0);
					tbval.rows[i].cells[0].innerHTML=numberWithCommas(data['Countries'][i-1]['Country']);
					tbval.rows[i].cells[0].style.background = '#85929E';
					tbval.rows[i].cells[0].style.color = '#fff';
					x.insertCell(1);
					tbval.rows[i].cells[1].innerHTML=numberWithCommas(data['Countries'][i-1]['TotalConfirmed']);
					tbval.rows[i].cells[1].style.background = '#85929E';
					tbval.rows[i].cells[1].style.color = '#fff';
					x.insertCell(2);
					tbval.rows[i].cells[2].innerHTML=numberWithCommas(data['Countries'][i-1]['TotalRecovered']);
					tbval.rows[i].cells[2].style.background = '#85929E';
					tbval.rows[i].cells[2].style.color = '#fff';
					x.insertCell(3);
					tbval.rows[i].cells[3].innerHTML=numberWithCommas(data['Countries'][i-1]['TotalDeaths']);
					tbval.rows[i].cells[3].style.background = '#85929E';
					tbval.rows[i].cells[3].style.color = '#fff';
					x.insertCell(4);
					tbval.rows[i].cells[4].innerHTML=numberWithCommas(data['Countries'][i-1]['NewConfirmed']);
					tbval.rows[i].cells[4].style.background = '#85929E';
					tbval.rows[i].cells[4].style.color = '#fff';
					x.insertCell(5);
					tbval.rows[i].cells[5].innerHTML=numberWithCommas(data['Countries'][i-1]['NewRecovered']);
					tbval.rows[i].cells[5].style.background = '#85929E';
					tbval.rows[i].cells[5].style.color = '#fff';
					x.insertCell(6);
					tbval.rows[i].cells[6].innerHTML=numberWithCommas(data['Countries'][i-1]['NewDeaths']);
					tbval.rows[i].cells[6].style.background = '#85929E';
					tbval.rows[i].cells[6].style.color = '#fff';
				}
			}
		);
	}		

</script>
</body>
</html>


<?php
include 'dbconn.php';
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$symp=$_POST['coronasym'];
	$msg=$_POST['description'];

	$chk="";
	foreach($symp as $chk1){
		$chk .= $chk1.",";
	}
	$insertquery = "insert into coronacase(username,email,mobile,symptoms,msg) values ('$username','$email','$mobile','$chk','$msg')";
	$query = mysqli_query($con,$insertquery);


	if($query){
	?>
	<script>
		alert("Inserted Successfully");
	</script>
	<?php
}
else
{
	?>
	<script>
		alert("UnSuccessful insertion");
	</script>
	<?php
}
}



?>