 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?= $main_url ?>dashboard.php" class="brand-link">
         <img src="<?= $main_url ?>asset/image/logo.jpg" alt="Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">KEI KASIR</span>
     </a>
     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?= $main_url ?>asset/image/<?= userLogin()['foto'] ?>" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block"><?= 'Anjella Ualubun' ?></a>
             </div>
         </div>
         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">

                 <li class="nav-item">
                     <a href="<?= $main_url ?>dashboard.php" class="nav-link <?= menuHome() ?>">
                         <i class="nav-icon fas fa-tachometer-alt text-sm"></i>
                         <p>Dashboard</p>
                     </a>
                 </li>
                 <?php 
                 
                if (userLogin()['level'] != 2) {
                 ?>
                 <li class="nav-item <?= menuMaster() ?>">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-folder text-sm"></i>
                         <p>Master
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?= $main_url ?>supplier/data-supplier.php"
                                 class="nav-link <?= menuSupplier() ?>">
                                 <i class="far fa-circle nav-icon text-sm"></i>
                                 <p>Supplier</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= $main_url ?>customer/data-customer.php"
                                 class="nav-link <?= menuCustomer() ?>">
                                 <i class="far fa-circle nav-icon text-sm"></i>
                                 <p>Customer</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= $main_url ?>barang" class="nav-link <?= menuBarang() ?>">
                                 <i class="far fa-circle nav-icon text-sm"></i>
                                 <p>Barang</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <?php } ?>

                 <li class="nav-header">Transaksi</li>
                 <?php 
                 
                 if (userLogin()['level'] != 2) {
                  ?>
                 <li class="nav-item">
                     <a href="<?= $main_url ?>pembelian" class="nav-link <?= menuBeli() ?>">
                         <i class="nav-icon fas fa-shopping-cart text-sm"></i>
                         <p>Pemasok Barang</p>
                     </a>

                 </li>
                 <?php } ?>
                 <li class="nav-item">
                     <a href="<?= $main_url ?>penjualan" class="nav-link <?= menuJual() ?>">
                         <i class="nav-icon fas fa-file-invoice text-sm"></i>
                         <p>Penjualan</p>
                     </a>
                 </li>
                 <?php 
                 
                 if (userLogin()['level'] != 2) {
                  ?>
                 <li class="nav-header">Report</li>
                 <li class="nav-item">
                     <a href="<?= $main_url ?>laporan-pembelian" class="nav-link <?= laporanBeli() ?>">
                         <i class="nav-icon fas fa-chart-pie text-sm"></i>
                         <p>Laporan Pembelian</p>
                     </a>

                 </li>
                 <li class="nav-item">
                     <a href="<?= $main_url ?>laporan-penjualan" class="nav-link">
                         <i class="nav-icon fas fa-chart-line text-sm"></i>
                         <p>Laporan Penjualan</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= $main_url ?>stock" class="nav-link <?= laporanStock() ?>">
                         <i class="nav-icon fas fa-warehouse text-sm"></i>
                         <p>Laporan Stock</p>
                     </a>
                 </li>
                 <?php } ?>

                 <?php
                 if (userLogin()['level'] == 1) {
             
                  ?>

                 <li class="nav-item <?= menuSetting() ?>">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-cog text-sm"></i>
                         <p>Pengaturan
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item <?= menuUser() ?>">
                             <a href="<?= $main_url ?>user/data-user.php" class="nav-link">
                                 <i class="far fa-circle nav-icon text-sm"></i>
                                 <p>Users</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <?php } ?>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>