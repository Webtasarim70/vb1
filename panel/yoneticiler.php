<?php require_once "ust.php"; ?>

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
        <li class="breadcrumb-item active">Yönetici Listesi</li>
      </ol>
     
      
      <div class="row">
        
       
      </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
	  <div class="table-responsive">
		<table class="table table-hover">
			
		
				   <thead>
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">Ad Soyad</th>
						  <th scope="col">Eposta</th>
						  <th scope="col">İşlemler</th>
						  
						</tr>
					  </thead>
				  <?php 
				  
				  foreach($videolar as $row){
					  
					  ?>
					  
					   <tbody>
						<tr>
						  <td>1</td>
						  <td>yavuz</td>
						  <td>info@yavuz-selim.com</td>
						  <td><a href=""><i class="fa fa-edit"></i></a> | <a href="#" onclick="return confirm('Silmek istiyor musunuz ?');"><i class="fa fa-remove"></i></a> </td>
						  
						</tr>
						
					  </tbody>
					  
				
				  
				</table>
				  </div>
				  </div>
				  
				
		 
		 
		
     
      
    </div>
   
   
  <?php require_once "alt.php"; ?>