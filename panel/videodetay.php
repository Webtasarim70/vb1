<?php
define('emre',true);
require_once "ust.php";


?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
	<?php require_once "nav.php"; ?>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Panel</a>
        </li>
        <li class="breadcrumb-item active">Yapılacak İşlemler</li>
      </ol>
     
      
      <div class="row">
        
       
      </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3" style="padding:15px">

          <?php

            if (isset($_GET['info'])){

                $info=strip_tags(trim(get('info')));
                $apikey=$arow->site_apikey;
                $yunusemre = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id=".$info."&key=".$apikey."&part=snippet");
                $videobilgi =json_decode($yunusemre,true);


                # https://www.googleapis.com/youtube/v3/videos?id=WpzskMWa4Ig&key=AIzaSyCM5jaVAHWTEnCvu0SbF1yenwuQedevmAc&part=snippet

                echo "<pre>";
                print_r($videobilgi);
                echo "</pre>";


            }






          ?>



		<div class="embed-responsive embed-responsive-21by9">
		
		<iframe class="embed-responsive-item" width="475" height="300" style="height:500px;" src="#link" frameborder="0"></iframe>
		</div>
		

	
	<hr>
					
					


	  </div>
				  
			
    </div>
   
   
  <?php require_once "alt.php"; ?>