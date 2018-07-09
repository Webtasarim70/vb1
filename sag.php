
          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header"> Arama Yap</h5>
            <div class="card-body">
              <div class="input-group">
			  <form action="ara.php" method="GET">
                <input type="text" class="form-control"  style="width: 100%" name="q" placeholder="Video ara">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Ara !</button>
                </span>
			  </form>
              </div>
            </div>
          </div>
				

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Duyurular</h5>
            <div class="card-body">
                <?php echo $arow->site_duyuru ?>
                            </div>
          </div>