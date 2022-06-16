<section class="content-header">
  <h1>Stock Out
    <small>Barang Masuk / Pembelian</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li>Transaction </li>
    <li class="active">Stock Out</li>
  </ol>
</section>

<section class="content">
  
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Add Stock Out</h3>
      <div class="pull-right">
        <a href="<?=site_url('stock/Out')?>" class="btn btn-warning">
          <i class="fa fa-arrow-left"></i> Back
        </a>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form action="<?=site_url('stock/proses')?>" method="post">
            <div class="form-group">
              <label class="form-label">Date *</label>
              <input type="date" name="date" id="inputDate" value="<?=date('Y-m-d')?>" class="form-control" required>
            </div>
            <div>
              <label for="barcode">Barcode *</label>
            </div>
            <div class="form-group input-group">
              <input type="hidden" name="item_id" id="item_id">
              <input type="text" name="barcode" id="barcode" class="form-control" required autofocus>
              <span class="input-group-btn">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-item">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
            <div class="form-group">
              <label class="item_name">Item Name *</label>
              <input type="text" name="item_name" id="item_name" class="form-control" readonly>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-8">
                  <label for="unit_name">Item Unit</label>
                  <input type="text" name="unit_name" id="unit_name" value="" class="form-control" readonly>
                </div>
                <div class="col-md-4">
                  <label for="stock">Initial Stock</label>
                  <input type="text" name="stock" id="stock" value="" class="form-control" readonly>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="detail">Detail *</label>
              <input type="text" name="detail" id="detail" class="form-control" placeholder="Kulakan / tambahan / lainnya.." required>
            </div>
            <div class="form-group">
              <label class="supplier">Supplier</label>
              <select name="supplier" id="supplier" class="form-control">
                <option value="">- Pilih -</option>
                <?php foreach($supplier as $i => $data) {
                  echo '<option value="'.$data->supplier_id.'">'.$data->name.'</option>';
                } ?>
              </select>
            </div>
            <div class="form-group">
              <label class="qty">Qty *</label>
              <input type="number" name="qty" id="qty" class="form-control" required>
            </div>
            <div class="form-group">
              <button type="submit" name="out_add" class="btn btn-success">
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

<div class="modal fade" id="modal-item" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" >&times;</span>
        </button>
        <h4 class="modal-title">Select Product Item</h4>
      </div>
      <div class="modal-body table-responsive">
        <table class="table table-bordered table-stripped" id="table1">
          <thead>
            <tr>
              <th>Barcode</th>
              <th>Name</th>
              <th>Unit</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($item as $i => $data) { ?>
            <tr>
              <td><?=$data->barcode?></td>
              <td><?=$data->name?></td>
              <td><?=$data->unit_name?></td>
              <td class="text-right"><?=indo_currency($data->price)?></td>
              <td class="text-right"><?=$data->stock?></td>
              <td class="text-center">
                <button class="btn btn-xs btn-info" id="select"
                  data-id="<?=$data->item_id?>"
                  data-barcode="<?=$data->barcode?>"
                  data-name="<?=$data->name?>"
                  data-unit="<?=$data->unit_name?>"
                  data-stock="<?=$data->stock?>">
                  <i class="fa fa-check"></i> Select
                </button>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $(document).on('click', '#select', function(){
      var item_id = $(this).data('id');
      var barcode = $(this).data('barcode');
      var name = $(this).data('name');
      var unit_name = $(this).data('unit');
      var stock = $(this).data('stock');
      $('#item_id').val(item_id);
      $('#barcode').val(barcode);
      $('#item_name').val(name);
      $('#unit_name').val(unit_name);
      $('#stock').val(stock);
      $('#modal-item').modal('hide');
    })
  })
</script>
