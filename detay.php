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

            <?php
                $veri=@get('info');
                if (!$veri){
                    header('Location:'.$site.'');
                } else{
                    $sec=$db->prepare('SELECT * FROM videolar WHERE video_url=:url AND video_durum=:durum');
                    $sec->execute(array(':url'=>$veri, ':durum'=>1));
                    if ($sec->rowCount()) {
                        $row = $sec->fetch(PDO::FETCH_OBJ);

                        $video= $row->video_id;
                        $cookie=@$_COOKIE[$video];

                        if (!isset($cookie)){

                            $okunmasayisi=$db->prepare("UPDATE videolar SET  video_goruntulenme=:g  WHERE video_id=:id");
                            $artir= $row->video_goruntulenme;
                            $okunmasayisi->execute(array(':g'=> $artir + 1,':id'=>$video));
                            setcookie($video,'1', time()+3600);
                        }

                        ?>


                        <h1 class="mt-4"><?php echo $row->video_baslik ?></h1>

                        <!-- Author -->
                        <p class="lead">
                            by
                            <a href="#"><?php echo $row->video_sahibi ?></a>
                        </p>

                        <hr>

                        <!-- Date/Time -->
                        <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $row->video_eklenmetarihi ?> |
                            <i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row->video_goruntulenme ?> </p>

                        <hr>

                        <!-- Preview Image -->

                        <div class="card my-4">

                            <div class="card-body">
                                <div class="embed-responsive embed-responsive-21by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $row->video_url ?>"
                                            width="900" height="400"></iframe>
                                </div>

                                <hr>

                                <p style="padding:10px"><?php echo nl2br($row->video_aciklama); ?>

                                </p>
                            </div>

                        </div>


                        <?php

                    }else{
                        header('Location:'.$site.'');
                    }
                }


            ?>



          <hr>

          <!-- Comments Form -->
          <div class="card my-4">

              <?php
              $yorumlar=$db->prepare("SELECT * FROM yorumlar WHERE yorum_video_id=:id AND yorum_durum=:durum");
              $yorumlar->execute(array(':id'=>$video, ':durum'=>1));
              $yorumsay=$yorumlar->rowCount();

              ?>



            <h5 class="card-header">Yorum Yap: (<?php echo $yorumsay ?> Adet Yorum Bulunuyor)</h5>
            <div class="card-body">

                <?php
                if (isset($_POST['yorumgonder'])){
                    $isim= post('isim');
                    $eposta=post('eposta');
                    $website=post('website');
                    $yorum=post('yorum');

                    if (!$isim || !$eposta || !$yorum ){
                        echo "<div class='alert alert-danger'>İsim, eposta yada yorum kısmı boş bırakılamaz </div>";
                    }else{
                        if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)){
                            echo "<div class='alert alert-danger'>Geçerli bir eposta adresi giriniz. </div>";
                        }else{
                            $yorumekle= $db->prepare("INSERT INTO yorumlar  SET 
                                yorum_video_id    = :video,
                                yorum_isim       =:isim,
                                yorum_eposta    =:posta,
                                yorum_website   =:web,
                                yorum_icerik    =:icerik,
                                yorum_durum     =:durum 
                                                        ");
                            $yorumekle->execute(array(
                                ':video' => $video,
                                ':isim'=>   $isim,
                                ':posta'=>   $eposta,
                                ':web'=>    $website,
                                ':icerik'=>  $yorum,
                                ':durum' => 2
                            ));

                            if ($yorumekle){
                                echo "<div class='alert alert-success'>Yorumunuz onaylandıktan sonra yayınlanacak.</div>";
                            }else{
                                echo  "<div class='alert alert-danger'>Tüh bir şeyler ters gitti!. </div>";

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
                  <input type="text" class="form-control" name="website" placeholder="Web Sitesi http://domain.com şeklinde yazınız" />
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="yorum" rows="3" placeholder="Yorumunuz"></textarea>
                </div>
                <button type="submit" name="yorumgonder" class="btn btn-primary">Gönder</button>
              </form>
            </div>
          </div>

            <?php
            if ($yorumlar->rowCount()){

                foreach ($yorumlar as $yorumrow){ ?>

                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle"  width="50" height="50" src="<?php echo $site;?>/css/user.jpg" alt="başlık">
                        <div class="media-body">
                            <h5 class="mt-0"><a href="<?php echo  $yorumrow['yorum_website']?>" target="_blank"><?php echo  $yorumrow['yorum_isim']?></a></h5>
                            <?php echo $yorumrow['yorum_icerik']?>
                        </div>
                    </div><hr>



                    <?php
                }

            }else{
                echo "<div class='alert alert-info' >Henüz yorum yapılmamış ilk yorumu siz yapın.</div>";
            }
            ?>
          


          

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