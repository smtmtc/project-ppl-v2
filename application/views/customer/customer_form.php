<section class="content-header">
  <h1>customers
    <small>Pemasok</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">customers</li>
  </ol>
</section>

<section class="content">
  
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?=ucfirst($page)?> Customer</h3>
      <div class="pull-right">
        <a href="<?=site_url('customer')?>" class="btn btn-warning">
          <i class="fa fa-arrow-left"></i> Back
        </a>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form action="<?=site_url('customer/process')?>" method="post">
            <div class="form-group">
              <label class="form-label">Name *</label>
              <input type="hidden" name="customer_id" id="customer_id" value="<?=$row->customer_id?>">
              <input type="text" name="customer_name" id="inputName" value="<?=$row->name?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="form-label">Gender *</label>
              <select name="gender" id="inputGender" value="<?=$row->gender?>" class="form-control" required>
                <option value="">- Pilih -</option>
                <option value="L" <?=$row->gender == 'L'? 'selected' : ''?>>Laki-laki</option>
                <option value="P" <?=$row->gender == 'P'? 'selected' : ''?>>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Phone *</label>
              <input type="number" name="phone" id="inputPhone" value="<?=$row->phone?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="form-label">Address *</label>
              <textarea name="addr" id="inputAddress" value="<?=$row->address?>" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="<?=$page?>" class="btn btn-success">
                <i class="fa fa-paper-plane"></i> Save
              </button>
              <button type="reset" class="btn btn-danger">
                <i class="fa fa-undo"></i> Reset
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</section>
