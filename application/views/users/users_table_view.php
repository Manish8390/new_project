
<?php $this->load->view('dashbord/header'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">User Table</h4>
                    <button type="button" class="btn btn-inverse-dark btn-fw" data-toggle="modal" data-target="#exampleModal"> <i class="fa-solid fa-plus"> </i> &nbsp;Add</button>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Profile Image</th>
                                <th>Full Name</th>
                                <th>User Name</th>
                                <th>Level</th>
                                <th>E-mail ID</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no=0; foreach ($users as $user) : $no++;?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?php if($user->upload_Image != 'NO'){ ?>
                                        <img src="<?php echo base_url('uploads/profile_img/'.$user->upload_Image); ?>" alt="image"/>
                                    <?php } else{ ?>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="50%" class="img_radius">
                                    <?php } ?>
                                </td>
                                <td><?=$user->fullname?></td>
                                <td><?=$user->username?></td>
                                <td><?=$user->level?></td>
                                <td><?=$user->user_email?></td>
                                <td><?=$user->status?></td>
                            </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">Add User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputUsername1">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('dashbord/footer'); ?>   