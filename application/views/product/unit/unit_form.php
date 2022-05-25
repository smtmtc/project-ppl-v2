<section class="content-header">
  <h1>Units
    <small>Satuan Barang</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Products</li>
    <li class="active">Units</li>
  </ol>
</section>

<section class="content">
  
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?=ucfirst($page)?> unit</h3>
      <div class="pull-right">
        <a href="<?=site_url('unit')?>" class="btn btn-warning">
          <i class="fa fa-arrow-left"></i> Back
        </a>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form action="<?=site_url('unit/process')?>" method="post">
            <div class="form-group">
              <label class="form-label">Name *</label>
              <input type="hidden" name="unit_id" id="unit_id" value="<?=$row->unit_id?>">
              <input type="text" name="unit_name" id="inputName" value="<?=$row->name?>" class="form-control" required>
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
