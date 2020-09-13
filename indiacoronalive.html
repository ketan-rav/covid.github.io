<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'links/links.php'; ?>
	<?php  include 'css/styles.php'; ?>
</head>
<body >
  <!--################ Menu bar #######################-->

	<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5">COVID19</a>
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
<!----------Menu End------------->


<!-------------------Total in India----------------------->

<section class="corona_update pt-5 container-fluid">
  <div class="my-5">
    <h2 class="text-uppercase text-center">COVID-19 INDIA UPDATES</h2>
  </div>
  <div class="d-flex justify-content-around align-items-center pt-5 pb-5 count_style">
    
    <div>
      <h1 class="count" id="indiaConfirmed" style="color: #F41005">1,524,255</h1>
      <h4>Total Cases</h4>
    </div>
    <div>
      <h1 class="count" id="indiaActive" style="color: #050CF4">512</h1>
      <h4>Active COVID-19 cases*</h4>
    </div>
    <div>
      <h1 class="count" id="indiaRecovered" style="color: #186A3B">40</h1>
      <h4>Cured/Recovered cases</h4>
    </div>
    <div>
      <h1 class="count" id="indiaDeaths"style="color: #626567">5</h1>
      <h4>Deaths</h4>
    </div>
  </div>

  <!------------------State Wise---------------------------->

  <div class="table-responsive pt-5">
    <table class="table table-bordered table-striped  text-center">
      <tr style="background-color:#BDC3C7">
        <th><h2>State</h2></th>
        <th><h2>Confirmed</h2></th>
        <th><h2>Active</h2></th>
        <th><h2>Recovered</h2></th>
        <th><h2>Deaths</h2></th>
        <th><h2>Last Updated At</h2></th>
      </tr>
      
      <?php
      $data=file_get_contents('https://api.covid19india.org/data.json');
      $coronaindia = json_decode($data,true);
      $state_count = count($coronaindia['statewise']);
      $i=1;
      ?>
      <script>
        function numberWithCommas(x) {
           return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
        }
        
        document.getElementById('indiaConfirmed').innerHTML=numberWithCommas(<?php echo $coronaindia['statewise'][0]['confirmed']?>)+"<sup><span>&#43;</span><?php echo $coronaindia['statewise'][0]['deltaconfirmed']?></sup>";
        document.getElementById('indiaActive').innerHTML=numberWithCommas(<?php echo $coronaindia['statewise'][0]['active']?>)+"<sup><span>&#43;</span><?php echo $coronaindia['statewise'][0]['deltaconfirmed']-$coronaindia['statewise'][0]['deltarecovered']?></sup>";
        document.getElementById('indiaRecovered').innerHTML=numberWithCommas(<?php echo $coronaindia['statewise'][0]['recovered']?>)+"<sup><span>&#43;</span><?php echo $coronaindia['statewise'][0]['deltarecovered']?></sup>";
        document.getElementById('indiaDeaths').innerHTML=numberWithCommas(<?php echo $coronaindia['statewise'][0]['deaths']?>)+"<sup><span>&#43;</span><?php echo $coronaindia['statewise'][0]['deltadeaths']?></sup>";
      </script>
      <?php
      while($i < $state_count)
      {
      ?>
      <tr>
        <td>
          <?php echo $coronaindia['statewise'][$i]['state']?>
        </td>
        <td>
          <?php echo $coronaindia['statewise'][$i]['confirmed']?><sup style="font-size:larger;";><span class="badge badge-danger badge-pill ">
<?php echo $coronaindia['statewise'][$i]['deltaconfirmed']?></span><span>&#8593;</span></sup>
        </td>

        <!---------------------This cell Active can be negative or positive based on difference in confirmed and recovered -------->
        <td>
          <?php echo $coronaindia['statewise'][$i]['active']?><sup style="font-size:larger;";><span class="badge badge-primary badge-pill">
<?php echo $coronaindia['statewise'][$i]['deltaconfirmed']-$coronaindia['statewise'][$i]['deltarecovered']?></span>

<!--------- if positive then arrow upward else downward ---------------->

  <?php if($coronaindia['statewise'][$i]['deltaconfirmed']-$coronaindia['statewise'][$i]['deltarecovered']>0)
  {                             
    ?><span>&#8593;</span>
    <?php
  }
  else{
    ?><span>&#8595;</span>
    <?php
  }
  ?>
</sup>
<!---------------if else end ---------------------->
        </td>
        <td>
          <?php echo $coronaindia['statewise'][$i]['recovered']?><sup style="font-size:larger;";><span class="badge  badge-success badge-pill">
<?php echo $coronaindia['statewise'][$i]['deltarecovered']?></span></span><span>&#8593;</span></sup>
        </td>
        <td>
          <?php echo $coronaindia['statewise'][$i]['deaths']?><sup style="font-size:larger;";><span class="badge badge-warning badge-pill">
<?php echo $coronaindia['statewise'][$i]['deltadeaths']?></span></span><span>&#8593;</span></sup>
        </td>
        <td>
          <?php echo $coronaindia['statewise'][$i]['lastupdatedtime']?>
        </td>
      </tr>
      <?php
      $i++;
    }
      ?>
    </table>
    
  </div>
</section>


<!--///////////////////////////////////////Footer//////////////////////////////////////////////////////-->


<footer class ="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <h3>  Copyright by Technica</h3>
  </div>
  
</footer>

<script type="text/javascript">


  mybutton = document.getElementById("myBtn");
  //When user scrolls down 20px from top,show the button
  window.onscroll = function(){ scrollFunction() };
  function scrollFunction(){
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
      mybutton.style.display="block";
    }
    else{
      mybutton.style.display="none";
    }
  }
  // When user clicks the button scroll to the top
  function topFunction(){
    document.body.scrollTop =0;//For Safari
    document.documentElement.scrollTop=0;//For Chrome,Firefox,IE and Opera
  }


</script>
</body>
</html>


