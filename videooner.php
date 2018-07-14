<?php
define('emre',true);

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

          <div class="card my-4">
            <h5 class="card-header">Video Öner</h5><br>
            
            <div class="card-body">

                <?php
                    if(isset($_POST['istekgonder'])){
                        $isim=post('isim');
                        $eposta=post('eposta');
                        $videourl=post('videolinki');

                        if (!$isim || !$eposta || !$videourl){
                            echo "<div class='alert alert-danger'> Alanlar boş bırakılamaz  </div>  ";
                        }else{

                            if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)){
                                echo "<div class='alert alert-danger'>E posta formatı geçersiz </div>  ";
                            }else{

                                $oner=$db->prepare("INSERT INTO oneriler SET 
                                      oneri_isim     =:i,
                                      oneri_posta    =:p,
                                      oneri_video     =:v ");

                                $oner->execute(array(
                                    ':i'      =>$isim,
                                    ':p'      =>$eposta,
                                    ':v'      =>$videourl
                                ));
                                if ($oner){
                                    echo "<div class='alert alert-success'> Video öneriniz için teşekkürler <br> Önerinizi aldık en kısa zamanda ilgilenecegiz. </div>  ";
                                    header('Refresh:3;url='.$site.'');

                                }else{
                                    echo "<div class='alert alert-danger'> Bir hata oluştu... </div>  ";
                                }
                            }

                        }

                    }



                ?>



			  	
	              <form action="" method="POST">
				  <div class="form-group">
	                  <input type="text" class="form-control" name="isim" placeholder="Ad Soyad" />
	                </div>
					<div class="form-group">
	                  <input type="text" class="form-control" name="eposta" placeholder="E-posta" />
	                </div>
					<div class="form-group">
	                  <input type="text" class="form-control" name="videolinki" placeholder="Video Linki ( Sadece youtube linki giriniz ) " />
	                </div>
	                
	                <button type="submit" name="istekgonder" class="btn btn-primary">İstek Gönder</button>
	              </form>
            </div>
          </div>

         



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