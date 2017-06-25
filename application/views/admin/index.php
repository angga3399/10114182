<?php
  error_reporting(E_ALL^(E_NOTICE | E_WARNING));
?>
<html>
<head>
  <title>LOGIN ADMIN</title>
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/awayday.jpg"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
body
{
  background: gray;
}
</style>
</head>
    <body>
<div class="container">
  <!-- Modal -->
 
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          
          <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
          <font color=#E0E0E0><h4>Silahkan Login</font></h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;" width>
        <div class="login-block">
           <p align="center"><font color='red'><i><?php echo $pesan;?></i></font></p>
           <form method="post" id="login" action="<?php echo base_url();?>login/login_admin">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label><br>
              <input type="text" name="username" placeholder="Username" id="username" size="20" class="form-control" required /> 
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" name="password" placeholder="Password" id="password" size="15" class="form-control" required />
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <font color=#fff><button type="submit" class="btn btn-block"><span class="glyphicon glyphicon-log-in"></span> Login</button></font>
              <br>
          </form>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>
</body>
</html>
