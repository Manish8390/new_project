<?php $this->load->view('dashbord/header'); ?>
    <style>
        .variants {
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .variants > div {
        margin-right: 5px;
        }

        .variants > div:last-of-type {
        margin-right: 0;
        }

        .file {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .file > input[type='file'] {
        display: none
        }

        .file > label {
        font-size: 1rem;
        font-weight: 300;
        cursor: pointer;
        outline: 0;
        user-select: none;
        border: white;
        border-style: solid;
        border-radius: 4px;
        border-width: 1px;
        background-color: hsl(0, 0%, 100%);
        color: hsl(0, 0%, 29%);
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .img_radius{
            border-radius: 50%;
        }
        .img_maneg{
            width: 140px;
            height: 140px;
        }
        .inputtype{
            border:none;
        }
    </style>
    <div class="container">
        <div class="main-body" style="margin-top: 15px;">
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
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                        <form method="post" action="<?php echo base_url('index.php/User/UploadProfileImg') ?>"  enctype='multipart/form-data'>
                                <?php  if($profile->upload_Image=='NO'){  ?>
                                    <div class="variants">
                                        <div class='file'>
                                            <label for='input-file'>
                                                <i class="material-icons">
                                                </i> <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="50%" class="img_radius">
                                            </label>
                                            <input id='input-file' type='file' name="gambar"/>
                                        </div>
                                    </div>
                                <?php  }else{  ?>
                                    <div class="variants">
                                        <div class='file'>
                                            <label for='input-file'>
                                                <img src="<?php echo base_url('uploads/profile_img/'.$profile->upload_Image); ?>" alt="Admin" class="rounded-circle img_maneg" >
                                            </label>
                                            <input id='input-file' type='file' name="gambar"/>
                                        </div>
                                    </div>
                                <?php  }?>
                                <div class="mt-3">
                                    <h4><?= $userdate['fullname']?></h4>
                                    <p class="text-secondary mb-1">Full Stack Developer</p>
                                    <p class="text-muted font-size-sm pb-3">Bay Area, San Francisco, CA</p>
                                    <!-- <a herf="#" class="btn btn-primary mb-3">Follow</button> -->
                                    <button type="submit" class="btn btn-outline-primary mb-3">Save data</button>
                                </div>
                        <!-- </form>  -->
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="fullname" class="inputtype" placeholder="<?= $profile->fullname?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="fullname" class="inputtype" placeholder="<?= $profile->user_email?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    (239) 816-9029
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    (320) 380-4539
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Bay Area, San Francisco, CA
                                </div>
                            </div>
                            <hr>
                        </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('dashbord/footer'); ?> 