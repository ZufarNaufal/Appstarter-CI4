<?= $this->extend('auth/template');?>
<?= $this->section('content'); ?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-ml-8">
              <div class="card ml-5">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Sign -In</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                <?php if(!empty(session()->getFlashdata('warning'))) { ?>
                <div class="alert alert-warning">
                <?= session()->getFlashdata('warning'); ?>
                </div>
                <?php } ?>
                <?php 
                echo form_open('LoginController/check_login') 
                ?>
                    <div class="row">   
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="username" class="form-control" placeholder="Your Username" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                        </div>
                      </div>
                    </div>
                    
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Sign In</button>
                    <div class="clearfix"></div>
                  <?php echo form_close() ?>
                </div>
              </div>
            </div>
<?= $this->endSection(); ?>