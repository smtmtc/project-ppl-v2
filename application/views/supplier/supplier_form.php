<section class="content-header">
  <h1>Suppliers
    <small>Pemasok</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Suppliers</li>
  </ol>
</section>

<section class="content">
  
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?=ucfirst($page)?> Supplier</h3>
      <div class="pull-right">
        <a href="<?=site_url('supplier')?>" class="btn btn-warning">
          <i class="fa fa-arrow-left"></i> Back
        </a>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form action="<?=site_url('supplier/process')?>" method="post">
            <div class="form-group">
              <label class="form-label">Name *</label>
              <input type="hidden" name="supplier_id" id="supplier_id" value="<?=$row->supplier_id?>">
              <input type="text" name="supplier_name" id="inputName" value="<?=$row->name?>" class="form-control" required>
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
              <label class="form-label">Description</label>
              <textarea name="desc" id="inputDesc" value="<?=$row->description?>" class="form-control"></textarea>
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
