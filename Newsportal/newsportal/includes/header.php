 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><h1>iNDO<span class="text-warning">iNFO</span></h1></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link text-warning" href="index.php">Home</a>
            </li>
            <?php $query=mysqli_query($con,"select id,Kategori from tblkategori");
            while($row=mysqli_fetch_array($query))
            {
            ?>
            <li class="nav-item ps-3">
              <!-- <a class="nav-link" href="category.php?catid=<?php echo htmlentities($row['id'])?>"></a> -->
              <a class="nav-link ms-3 text-warning" href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['Kategori']);?></a>
            </li><?php } ?>
             <li class="nav-item">
              <a class="nav-link text-warning" href="contact-us.php">Kontak Kami</a>
            </li> 
          </ul>
          </div>
             <!-- Search Widget -->
          <div class="pencarian mx-auto">
            <div class="card-body">
                  <form name="search" action="search.php" method="post">
              <div class="input-group">
          <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
                <span class="input-group-btn">
                  <button class="btn btn-warning" style="border-radius: 0 5px 5px 0;" type="submit"><i class="fa fa-search"></i></button>
                </span>
              </form>
              </div>
            </div>
        </div>
      </div>
    </nav>