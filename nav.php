<?php echo !defined("emre")? die(''): null; ?>


<div class="container">
        <a class="navbar-brand" href="<?php echo $site; ?>"><i class="fa fa-home" aria-hidden="true"></i> <?php echo $arow->site_baslik?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo $site; ?>"><i class="fa fa-home" aria-hidden="true"></i>
 Ana Sayfa
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-bars" aria-hidden="true"></i>
 Hakkımızda</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="videooner.php"><i class="fa fa-bars" aria-hidden="true"></i>
                      Video Öner</a>
              </li>
           
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $site?>/panel"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                Panele Giriş</a>
              <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-bars" aria-hidden="true"></i>
                      Hakkımızda</a>
              </li>
            </li>
          </ul>
        </div>
      </div>