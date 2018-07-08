<?php 

require_once "ust.php"; ?>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<?php require_once "nav.php"; ?>
	</nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

						
						<h1 class="mt-4">PDO AJAX</h1>

					  <!-- Author -->
					  <p class="lead">
						by
						<a href="#">Yavuz Selim ŞAHİN</a>
					  </p>

					  <hr>

					  <!-- Date/Time -->
					  <p><i class="fa fa-calendar" aria-hidden="true"></i> 01.11.2017 19:04 | 
					  <i class="fa fa-eye" aria-hidden="true"></i> 0 </p> 

					  <hr>

					  <!-- Preview Image -->
					  
					<div class="card my-4">
            
						<div class="card-body">
								<div class="embed-responsive embed-responsive-21by9">
								<iframe class="embed-responsive-item" src="video linki"
								  width="900" height="400"></iframe>
								 </div>

								  <hr>

								  <p style="padding:10px">açıklama
								  </p>
						</div>
						
					</div>
					  
					  

				
          
          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Yorum Yap: (0 Adet Yorum Bulunuyor)</h5>
            <div class="card-body">
			  
              <form action="" method="POST">
			  <div class="form-group">
                  <input type="text" class="form-control" name="isim" placeholder="Ad Soyad" />
                </div>
				<div class="form-group">
                  <input type="text" class="form-control" name="eposta" placeholder="E-posta" />
                </div>
				<div class="form-group">
                  <input type="text" class="form-control" name="website" placeholder="Web Sitesi http://domain.com şeklinde yazınız" />
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="yorum" rows="3" placeholder="Yorumunuz"></textarea>
                </div>
                <button type="submit" name="yorumgonder" class="btn btn-primary">Gönder</button>
              </form>
            </div>
          </div>

          
					<div class="media mb-4">
						<img class="d-flex mr-3 rounded-circle"  width="50" height="50" src="<?php echo $site;?>/css/user.jpg" alt="başlık">
						<div class="media-body">
						  <h5 class="mt-0"><a href="#" target="_blank">yavuz selim</a></h5>
							 içerik
						</div>
					  </div><hr>
				

          

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
			
			<?php require_once "sag.php"; ?>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php require_once "alt.php"; ?>