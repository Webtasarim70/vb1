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
		
        <li class="breadcrumb-item active">Video Listesi (0)</li>
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
						  <th scope="col">Video Resim</th>
						  <th scope="col">Video Başlık</th>
						  <th scope="col">Video Url</th>
						  <th scope="col">Video Sahibi</th>
						  <th scope="col">Durum</th>
						  <th scope="col">İşlemler</th>
						  
						</tr>
					  </thead>
				 
					  
					  
					   <tbody>
						<tr>
						  <td>1</td>
						  <td><img src="#" width="100" height="100" /></td>
						  <td><a target="_blank" data-toggle="tooltip" data-placement="top" title="Sitede İzle" href="#">Video Başlık</a></td>
						  
						  <td><a target="_blank" data-toggle="tooltip" data-placement="top" title="Youtubede İzle" href="#">Video URL</a></td>
						  <td>yavuz selim</td>
						  <td>
								
								
						<div style='color:green;font-weight:bold'><i class='fa fa-check' aria-hidden='true'></i> Onaylı</div>
								
						  
						  </td>
						  
						  
						  
						  <td><a href="#"><i class="fa fa-edit"></i></a> | <a href="#" onclick="return confirm('Silmek istiyor musunuz ?');"><i class="fa fa-remove"></i></a> </td>
						  
						</tr>
						
					  </tbody>
				
				  
				  </table>
				   </div>
				 </div>
				  
				  
			
		 
		 
		
     
      
    </div>
   
   
  <?php require_once "alt.php"; ?>