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
        <li class="breadcrumb-item active">Yapılacak İşlemler</li>
      </ol>
     
      
      <div class="row">
        
       
      </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3" style="padding:15px">

          <?php
          $islem=@get('islem');
            switch ($islem){

             case 'adminsil':
                    if (isset($_SESSION['oturum'])){
                            $id=@get('id');
                            if ($id!=$uid){

                                $id=@get('id');
                                $sil=$db->prepare('DELETE FROM admin WHERE admin_id=:id');
                                $sil->execute(array(':id'=>$id));
                                if ($sil){
                                echo "<div class='alert alert-success'>Yönetici silindi, bekleyiniz</div>";
                                header('refresh:3;url=yoneticiler.php');



                    } }else{
                                echo "<div class='alert alert-danger'>Kendinizi Silemezsiniz. bekleyiniz</div>";
                                header('refresh:2;url=yoneticiler.php');

                            }
                    }
                    break;

                case 'yorumsil':
                    if (isset($_SESSION['oturum'])){
                        $id=@get('id');
                        $sil=$db->prepare('DELETE FROM yorumlar WHERE yorum_id=:id');
                        $sil->execute(array(':id'=>$id));
                        if ($sil){
                            echo "<div class='alert alert-success'>Yorum silindi, bekleyiniz</div>";
                            header('refresh:3;url=yorumlar.php');
                        }else{
                            echo "<div class='alert alert-danger'>hata oluştu, bekleyiniz</div>";
                            header('refresh:2;url=yorumlar.php');


                        }

                    }
                    break;


            #case sonu
            }


          ?>


	  		



	  </div>
				  
			
    </div>
   
   
  <?php require_once "alt.php"; ?>