<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <!-- flash deta -->
                <?php
                    if($this->session->flashdata('success')){
                      $message=$this->session->flashdata('success');
                      echo '
                          <div class="alert alert-success">
                          '.$message.'
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                      ';
                    }else if($this->session->flashdata('danger')){
                      echo '
                          <div class="alert alert-danger">
                          '.$this->session->flashdata('danger').'
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                      ';
                    }
                ?>
              <!--  -->
              <div class="brand-logo">
                <img src="<?php echo base_url(); ?>assets/images/logo.svg" alt="logo">
              </div>
              <h4>Please ! Verify Your E-mail</h4>
              <h6 class="font-weight-light">Verify OTP</h6>
              <form class="pt-3" method='post' action='<?php echo base_url('index.php/Admin/verify_otp') ?>'>
                <div class="form-group">
                  <input type="text" name="otp" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Enter Six Digit Code">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                  </div>
                  <a href="<?php echo base_url('index.php/Admin/resend_OTP') ?>" class="auth-link text-black">Resend</a>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-apple"></i> Verify
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/template.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>
</body>

</html>
