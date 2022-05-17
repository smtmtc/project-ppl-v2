<section class="content-header">
  <h1>Users
    <small>Pengguna</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Users</li>
  </ol>
</section>

<section class="content">
  
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Add Users</h3>
      <div class="pull-right">
        <a href="<?=site_url('user')?>" class="btn btn-warning">
          <i class="fa fa-arrow-left"></i> Back
        </a>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form action="" method="post">
            <div class="form-group">
              <label class="form-label" for="inputName">Name *</label>
              <input type="text" name="fullname" id="inputName" value="<?=set_value('fullname')?>" class="form-control <?= form_error('fullname') ? 'is-invalid' : null ?>">
              <?=form_error('fullname')?>
            </div>
            <div class="form-group <?=form_error('username')? 'is-invalid' : null?>">
              <label for="inputUsername">Username *</label>
              <input type="text" name="username" id="inputUsername" value="<?=set_value('username')?>" class="form-control">
              <?=form_error('username')?>
            </div>
            <div class="form-group">
              <label for="inputPassword">Password *</label>
              <input type="password" name="password" id="inputPassword" value="<?=set_value('password')?>" class="form-control">
              <?=form_error('password')?>
            </div>
            <div class="form-group <?=form_error('passconf')? 'is-invalid' : null?>">
              <label for="inputPassConfirm">Password Confirmation *</label>
              <input type="password" name="passconf" id="inputPassConfirm" value="<?=set_value('passconf')?>" class="form-control">
              <?=form_error('passconf')?>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <textarea name="address" id="inputAddress" value="<?=set_value('address')?>" class="form-control"></textarea>
            </div>
            <div class="form-group <?=form_error('level')? 'is-invalid' : null?>">
              <label for="inputLevel">Level *</label>
              <select name="level" id="inputLevel" class="form-control">
                <option value="">Pilih</option>
                <option value="1"<?=set_value('level') == 1 ? 'selected' : null?>>Admin</option>
                <option value="2"<?=set_value('level') == 2 ? 'selected' : null?>>Karyawan</option>
                <option value="3"<?=set_value('level') == 3 ? 'selected' : null?>>Distributor</option>
              </select>
              <?=form_error('level')?>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">
                <i class="fa fa-paper-plane"></i> Save
              </button>
              <button type="reset" class="btn btn-danger">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</section>
