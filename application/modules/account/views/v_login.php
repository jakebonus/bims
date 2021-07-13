<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo (isset($title)) ? $title . ' | BIMS Maimpis CSFP' : ' BIMS Maimpis CSFP'; ?></title>
  <link rel="icon" href="<?php echo base_url('build/images/logo.png'); ?>">
  <link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/pnotify/dist/pnotify.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('build/css/custom.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('build/css/login.css'); ?>" rel="stylesheet">
</head>

<body class="login">
  <div>
    <img class="backgroundimg" src="<?php echo base_url('images/maimpislogo.png'); ?>">
    <div class="login_wrapper">
      <div class="row">

        <div class="col-lg-12 col-lg-offset-12 col-md-12 col-md-offset-8 col-sm-12 col-xs-12">

          <div class="animate form login_form">
        <section class="login_content_section">
          <?php
          $frm_login = array(
            'id' => 'login_form',
            'name' => 'login_form',
            );
          echo form_open('', $frm_login);
          ?>
          <?php // echo sha1(md5('password'.'J4K3MB0NU5')); ?>
          <center>
            <img src="<?php echo base_url('images/maimpislogo.png'); ?>" style="width: 120px; height:120px;">
          </center>
          <br/>
          <div>
            <input type="text" class="form-control" id="u_username" name="u_username" placeholder="Username" required="" autofocus/>
          </div>
          <div>
            <input type="password" class="form-control" id="u_password" name="u_password" placeholder="Password" required="" />
          </div>
          <div>
            <br />
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
          </div>
          <br />
          <h5> <center><i class="fa fa-file-text-o"></i>&nbsp; BIMS Maimpis CSFP <sup>v1.1.0</sup></center></h5>
          </form>
      </section>
    </div>
        </div>
      </div>
    <center>
    </center>
  </div>
</div>

<script> var base_url = "<?php echo base_url(); ?>";</script>
<script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('vendors/pnotify/dist/pnotify.js'); ?>"></script>
<script src="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.js'); ?>"></script>
<script src="<?php echo base_url('build/js/login.js'); ?>"></script>
</body>
</html>
