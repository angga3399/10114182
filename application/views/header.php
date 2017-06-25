<html>
<head>
  <title>Away Day Persib</title>
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/awayday.jpg"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <script type="application/x-javascript"> 
  addEventListener("load", function()
  { setTimeout(hideURLbar, 0); 
  }, false); 
  function hideURLbar(){ window.scrollTo(0,1); } 
  </script>

  <!--bootstrap-->
  <link href="<?php echo base_url();?>assets/css/jquery.dataTables.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <!--coustom css-->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
  <!--script-->
  <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>
  <!-- js -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
  <!-- /js -->
  <!--fonts-->
  <link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <!--/fonts-->
  <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
  <!--hover-girds-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/default.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/component.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" />
  <script src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>
  <!--/hover-grids-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
  <!--script-->
  <style>

.modal-content{
	width: 520px;
	/*background:url(../images/laptop.jpg); transaparan*/
}
.modal-header{
    background-color: darkblue;
    color:white !important;
    text-align: center;
    font-size: 30px;
}
.modal-body{
    width: 450px;
    padding: 20px;
    border-radius: 5px;
    margin: 0 auto;
}
.modal-footer {
    background-color: #424242;
}
.login-block button{
	background: darkblue;
}
</style>
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
          <font color=#E0E0E0><h4>Silahkan Login</font></h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;" width>
        <div class="login-block">
           <form method="post" id="login" action="<?php echo base_url();?>login/login_customer">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label><br>
              <input type="text" name="username" placeholder="Username" id="username" size="20" class="form-control" required /><?php echo form_error('username');?> 
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" name="password" placeholder="Password" id="password" size="15" class="form-control" required /><?php echo form_error('password');?>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <font color=#fff><button type="submit" class="btn btn-block"><span class="glyphicon glyphicon-log-in"></span> Login</button></font>
              <br>
          </form>
          <center>
              <font size= "5px"><b><a href="<?php echo base_url(); ?>customer/tambah"> Daftar Akun !!!</a></b></font>
          </center>
          </div>
        </div>
      </div>      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<!--/script-->
</head>
	<body>

<?php
    error_reporting(E_ALL^(E_NOTICE | E_WARNING));
    if (empty($_SESSION['login_customer'])) {
?>
<!--header-->
		<div class="header" id="home">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span> 
					</button>
					<a class=navbar-header href="<?php echo base_url(); ?>awayday">
				  <h1><strong>PERSIB</strong></h1></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                <li><a href="<?php echo base_url(); ?>awayday/jadwal"><span data-hover="Kursus">Jadwal</span></a></li>
                <li><a href="<?php echo base_url(); ?>awayday/bonjoming"><span data-hover="Kursus">Bonjoming</span></a></li>
                <li><a href="<?php echo base_url(); ?>awayday/tiket_gratis"><span data-hover="Kursus">Tiket Gratis</span></a></li>
                <li><a href="<?php echo base_url(); ?>awayday/tentang"><span data-hover="Kursus">Tentang</span></a></li>
								<li><a href="<?php echo base_url(); ?>awayday/bantuan"><span data-hover="Kursus">Bantuan</span></a></li>
                <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							</ul>
							<div class="clearfix"> </div>
						</div><!-- /.navbar-collapse -->
				<!-- /.container-fluid -->
	
					    </div>
			</nav>
<!--/script-->
		   <div class="clearfix"> </div>
</div>
<?php
}
elseif($_SESSION['Login']=!NULL)
{
?>
    <div class="header" id="home">
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span> 
          </button>
          <a class=navbar-header href="<?php echo base_url(); ?>awayday">
          <h1><strong>PERSIB</strong></h1></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                <li><a href="<?php echo base_url(); ?>awayday/jadwal/<?php echo $customer->no_ktp;?>"><span data-hover="Jadwal">Jadwal</span></a></li>
                <li><a href="<?php echo base_url(); ?>awayday/bonjoming"><span data-hover="bonjoming">Bonjoming</span></a></li>
                <li><a href="<?php echo base_url(); ?>awayday/pembayaran/<?php echo $customer->no_ktp;?>"><span data-hover="tiket_gratis">Pembayaran</span></a></li>
                <li><a href="<?php echo base_url(); ?>awayday/tentang"><span data-hover="Tentang">Tentang</span></a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <?php echo $customer->nama_customer; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url()?>customer/setting/<?php echo $customer->no_ktp ?>"> <i class="glyphicon glyphicon-cog"></i> setting</a>
                        <li><a href="<?php echo base_url()?>customer/logout"> <i class="glyphicon glyphicon-log-out"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
              </ul>
              <div class="clearfix"> </div>
            </div><!-- /.navbar-collapse -->
        <!-- /.container-fluid -->
  
              </div>
      </nav>
<!--/script-->
       <div class="clearfix"> </div>
</div>
<?php  
}
?>