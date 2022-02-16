  <div class="col-md-4">

          <!-- Kategori Widget -->
          <div class="card my-4">
            <h5 class="card-header">Kategori</h5>
            <div class="card-body">
                  <ul class="list-unstyled mb-0">
                    <?php $query=mysqli_query($con,"select id,Kategori from tblkategori");
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
                    <li>
                      <a class="card mb-3" style="max-width: max-content; padding: 5px; margin-right:10px" href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['Kategori']);?></a>
                    </li>
<?php } ?>
                  </ul>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Berita Terkini</h5>
            <div class="card-body">
                      <ul class="mb-0">
<?php
$query=mysqli_query($con,"select tblberita.id as pid,tblberita.JudulBerita as judulberita from tblberita left join tblkategori on tblkategori.id=tblberita.IdKategori left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblberita.SubCategoryId limit 8");
while ($row=mysqli_fetch_array($query)) {

?>

  <li>
                      <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['judulberita']);?></a>
                    </li>
            <?php } ?>
          </ul>
            </div>
          </div>

        </div>
