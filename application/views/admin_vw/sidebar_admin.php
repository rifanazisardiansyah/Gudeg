
<body style="padding-top:0px"> <!-- Body open -->
    <div id="wrapper"> <!-- wrapper open -->
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <div class="text-center admin-profile">
                    <img style="background-color:#fff;width:70px;height:70px;border:2px solid rgba(255,255,255,0.9)" class="img-circle" src="<?php echo base_url('asset/img/foto_simbah-.png');?>">
                    <h4 class="text-uppercase">
                        <?php echo $this->session->userdata('id_user');?>
                    </h4>
                </div>
                <li>
                    <a href="<?php echo base_url('admin');?>"><span class="glyphicon glyphicon-blackboard"></span> Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/pesanan_masuk');?>">
                        <span class="glyphicon glyphicon-bell"></span> Pesanan Masuk 
                        <?php echo $jml_psn_msk==0?'':'<i class="badge notif-line">'.$jml_psn_msk.'</i>';?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/konfirmasi_pesanan');?>"><span class="glyphicon  glyphicon-bell"></span> Bukti Bayar Masuk
                        <?php echo $jml_knfr_msk==0?'':'<i class="badge notif-line">'.$jml_knfr_msk.'</i>';?>
                    </a>  
                </li>
                <li>
                    <a href="<?php echo base_url("admin/kelola_menu");?>"><span class="glyphicon glyphicon-apple"></span> Lihat atau Tambah Menu</a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/riwayat_konfirmasi_pesanan');?>"><span class="glyphicon glyphicon-hdd"></span> Riwayat Pembayaran</a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/data_pengguna')?>"><span class="glyphicon glyphicon-hdd"></span> Data Pengguna</a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/data_penjualan');?>"><span class="glyphicon glyphicon-hdd"></span> Data Penjualan</a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/lihat_laporan_penjualan');?>"><span class="glyphicon glyphicon-stats"></span> Laporan Penjualan</a>
                </li>
                <li><a href="<?php echo base_url('logout.html');?>"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
<!-- /#navbar -->        
<div style="color:#fff;" class="admin-theme-color">
    <a style="border-radius:0px;padding:10px" href="#menu-toggle" class="btn" id="menu-toggle">
        <img src="<?php echo base_url('asset/img/ic_menu1.png');?>">
    </a>
    <span style="font-size:13pt;"  id="headofadmin">
        ADMINISTRATOR GUDEG BU PARTO
    </span>
</div>