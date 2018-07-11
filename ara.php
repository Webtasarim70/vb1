<?php require_once "ust.php"; ?>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <?php require_once "nav.php"; ?>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">

          <?php
          $q=@get('q');
          $s=@intval(get('s'));
          #sayi gelebilir  @intival
          if (!$s){$s=1;}

          if (!$q){
              header('Location:'.$site.'');
          }

          $video = $db->prepare("SELECT * FROM videolar WHERE video_durum=:durum AND video_baslik LIKE :par ");
          $video->execute(array(':durum'=> 1, ':par'=>'%'.$q.'%'));
          $toplam =$video->rowCount();
          $lim=9;
          #sayfa başı gösterilecek video limiti
          $goster=$s * $lim - $lim;
          ?>



        <small>Arama Sonucları (<?php echo $toplam;?>)</small>
      </h1>

        <?php



            #asıl sorgumuz
            $videolar=$db->prepare("SELECT * FROM  videolar WHERE video_durum=:durum AND video_baslik LIKE :par 
                                              ORDER BY video_id DESC LIMIT :goster, :lim");
            $videolar->bindValue(":durum", (int) 1, PDO::PARAM_INT);
            $videolar->bindValue(":goster",(int) $goster, PDO::PARAM_INT);
            $videolar->bindValue(":lim", (int) $lim, PDO::PARAM_INT);
            $videolar->bindValue(":par", '%'.$q.'%', PDO::PARAM_STR);
            $videolar->execute();

        if ($videolar->rowCount()){
        echo   '<div class="row">';

            foreach ($videolar as $row) {
                ?>



                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="<?php echo $site ?>/detay.php?info=<?php echo $row['video_url']; ?>"><img width="253" height="144" class="card-img-top"
                                             src="<?php echo $row['video_resim'] ?>" alt="<?php echo $row['video_baslik'] ?>"></a>
                            <div class="card-body">
                                <h6 class="card-title">
                                    <a href="<?php echo $site ?>/detay.php?info=<?php echo $row['video_url']; ?>"><?php echo $row['video_baslik'];?></a>
                                </h6>
                                <p class="card-text"><?php echo mb_substr($row['video_baslik'],0,200,"utf8");?></p>
                            </div>
                        </div>
                    </div>






                <?php }
echo '</div>';

                #sayfalama kodu
            echo '<ul class="pagination justify-content-center">';
            $ssayi = ceil($toplam/$lim);
            $flim = 3;

            if($ssayi < 2){
                null;
            }else{

                if($s > 4){
                    $onceki  = $s - 1;
                    echo '<li class="page-item"><a class="page-link" href="'.$site.'/ara.php?q='.$q.'&s=1">�</a></li>';
                    echo '<li class="page-item"><a class="page-link" href="'.$site.'/ara.php?q='.$q.'&s=1"'.$onceki.'">></a></li>';
                    //echo '...';

                }

                for($i = $s - $flim; $i < $s + $flim + 1; $i++){
                    if($i > 0 && $i <= $ssayi){
                        if($i == $s){
                            echo '<li class="page-item"><a class="page-link" style="background:#337ab7;color:#fff" href="#">'.$i.'</a></li>';
                        }else{

                            echo '<li class="page-item"><a class="page-link" href="'.$site.'/index.php?q='.$q.'&s='.$i.'">'.$i.'</a></li>';

                        }
                    }
                }

                if($s <= $ssayi - 4){
                    $sonraki  = $s + 1;
                    //echo '...';
                    echo '<li class="page-item"><a  class="page-link" href="'.$site.'/index.php?q='.$q.'&s='.$sonraki.'">></a></li>';
                    echo '<li class="page-item"><a  class="page-link" href="'.$site.'/index.php?q='.$q.'&s='.$ssayi.'">�</a></li>';
                }
            }
            echo '</ul>';

            #saylama kodu sonu,




        }else{
            echo "<div class='alert alert-danger'>video bulunmuyor</div> ";
        }
        ?>




















			
	

    </div>
   

    <?php require_once "alt.php"; ?>

  </body>

</html>
