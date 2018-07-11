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

          <?php
          $s=@intval(get('s'));
          #sayi gelebilir  @intival
          if (!$s){$s=1;}

          $videolar = $db->prepare("SELECT * FROM videolar");
          $videolar->execute(array());
          $toplam =$videolar->rowCount();
          $lim=9;
          #sayfa başı gösterilecek video limiti
          $goster=$s * $lim - $lim;


          #asıl sorgumuz
          $videolar=$db->prepare("SELECT * FROM  videolar ORDER BY video_id DESC LIMIT :goster, :lim");
          $videolar->bindValue(":goster",(int) $goster, PDO::PARAM_INT);
          $videolar->bindValue(":lim", (int) $lim, PDO::PARAM_INT);
          $videolar->execute();

          if ($videolar->rowCount()){
          ?>





        <li class="breadcrumb-item active">Video Listesi (<?php echo $toplam ?>)</li>
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


                <?php

                foreach ($videolar as $row) {
                ?>

                <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="<?php echo $row['video_resim'] ?>" width="100" height="100" /></td>
                    <td><a target="_blank" data-toggle="tooltip" data-placement="top" title="Sitede İzle" href="<?php echo $site ?>/detay.php?info=<?php echo $row['video_url'] ?>"><?php echo $row['video_baslik'] ?></a></td>

                    <td><a target="_blank" data-toggle="tooltip" data-placement="top" title="Youtubede İzle" href="https://www.youtube.com/watch?v=<?php echo $row['video_url'] ?>"><?php echo $row['video_url'] ?></a></td>
                    <td><?php echo $row['video_sahibi'] ?></td>
                    <td>


                        <?php

                        #burada kaldı onaylı onaysız yaz

                        ?>


                        <div style='color:green;font-weight:bold'><i class='fa fa-check' aria-hidden='true'></i> Onaylı</div>


                    </td>



                    <td><a href="islemler.php?islem=videoduzenle&id=<?php echo $row['video_id'] ?>"><i class="fa fa-edit"></i></a> | <a href="islemler.php?islem=videosil&id=<?php echo $row['video_id'] ?>" onclick="return confirm('Silmek istiyor musunuz ?');"><i class="fa fa-remove"></i></a> </td>

                </tr>

                </tbody>


                <?php }

            }else{
                echo "<div class='alert alert-danger'> Video Bulunmuyor </div>";
            }



            ?>





        </table>
				   </div>
				 </div>

      
    </div>
   
   
  <?php require_once "alt.php"; ?>