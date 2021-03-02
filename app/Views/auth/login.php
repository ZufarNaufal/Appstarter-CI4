<?= $this->extend('auth/template');?>
<?= $this->section('content'); ?>
<div class="content">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff5500" fill-opacity="1" d="M0,288L48,250.7C96,213,192,139,288,101.3C384,64,480,64,576,53.3C672,43,768,21,864,58.7C960,96,1056,192,1152,218.7C1248,245,1344,203,1392,181.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
<h1><p class="text-center"><?= $title; ?></p></h1>
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
                    <p><a href="#">Sign - up</a></p>
                    <div class="clearfix"></div>
                  <?php echo form_close() ?>
                </div>
              </div>
            </div>

<?= $this->endSection(); ?>