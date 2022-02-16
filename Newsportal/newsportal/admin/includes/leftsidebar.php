<?php 
session_start();
?>
           <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navigasi</li>
                            <li class="has_sub">
                                <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Kategori </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="add-category.php">Tambah Kategori</a></li>
                                    <li><a href="manage-categories.php">Kelola Kategori</a></li>
                                </ul>
                            </li>
                            <!-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Sub Category </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subcategory.php">Add Sub Category</a></li>
                                    <li><a href="manage-subcategories.php">Manage Sub Category</a></li>
                                </ul>
                            </li>                -->
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Post Berita </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-post.php">Tambah Berita</a></li>
                                    <li><a href="manage-posts.php">Kelola Berita</a></li>
                                     <li><a href="trash-posts.php">Berita dihapus</a></li>
                                </ul>
                            </li>  
                     

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Halaman </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="contactus.php">Kontak</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Komentar </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="unapprove-comment.php">Menunggu Persetujuan </a></li>
                                    <li><a href="manage-comments.php">Komentar Diterima</a></li>
                                </ul>
                            </li>   
                            <?php 
                                if (isset($_SESSION['Level'])){
                                if ($_SESSION['Level']=="superadmin"){
                            ?>
                            <li class="has_sub">
                                <a href="user.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span>Pegaturan User </span> </a>
                            </li> 
                            <?php }}?>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->

            </div>