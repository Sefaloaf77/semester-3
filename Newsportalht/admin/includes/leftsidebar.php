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
                                <a href="dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Kategori </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="add-category">Tambah Kategori</a></li>
                                    <li><a href="manage-categories">Kelola Kategori</a></li>
                                </ul>
                            </li>
                            <!-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Sub Category </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subcategory">Add Sub Category</a></li>
                                    <li><a href="manage-subcategories">Manage Sub Category</a></li>
                                </ul>
                            </li>                -->
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Post Berita </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-post">Tambah Berita</a></li>
                                    <li><a href="manage-posts">Kelola Berita</a></li>
                                     <li><a href="trash-posts">Berita dihapus</a></li>
                                </ul>
                            </li>  
                     

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Halaman </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="contactus">Kontak</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Komentar </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="unapprove-comment">Menunggu Persetujuan </a></li>
                                    <li><a href="manage-comments">Komentar Diterima</a></li>
                                </ul>
                            </li>   
                            <?php 
                                if (isset($_SESSION['Level'])){
                                if ($_SESSION['Level']=="superadmin"){
                            ?>
                            <li class="has_sub">
                                <a href="user" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span>Pegaturan User </span> </a>
                            </li> 
                            <?php }}?>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->

            </div>