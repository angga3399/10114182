<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Away Day Persib | Admin</title>
    <link href="<?php echo base_url();?>assets/css/jquery.dataTables.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>admin">Away Day Persib Bandung</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <?php echo $admin->nama_admin; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url()?>admin/setting/<?php echo $admin->id_admin; ?>"> <i class="fa fa-eye"></i> View Profil</a>
                        <li><a href="<?php echo base_url()?>admin/logout"> <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
           
            <!-- /.navbar-top-links -->
          
            <div class="navbar-default sidebar" role="navigation">
                   <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                    
                        <li>
                            <a href="<?php echo base_url(); ?>admin/home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Jadwal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>jadwal/jadwal">List Jadwal</a>
                                </li>
                               <li>
                                    <a href="<?php echo base_url(); ?>jadwal/tambahJadwal">Tambah Jadwal</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>pesan/pesan"><i class="fa fa-sitemap fa-fw"></i> Pemesanan</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>bayar/pembayaran"><i class="fa fa-sitemap fa-fw"></i> Pembayaran</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>customer/customer"><i class="fa fa-sitemap fa-fw"></i> Customer</span></a>
                        </li>
                        <?php if($admin->status=='sepenuhnya'){?>
                        <li>
                            <a href=""><i class="fa fa-sitemap fa-fw"></i> Admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/admin"> List Admin</a>
                                </li>          
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/tambah"> Tambah Admin</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
          
            <!-- /.navbar-static-side -->
        </nav>

         