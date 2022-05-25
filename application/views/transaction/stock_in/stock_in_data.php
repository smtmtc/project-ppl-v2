<section class="content-header">
  <h1>Stock In
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Transaction</li>
    <li class="active">Stock In</li>
  </ol>
</section>

<section class="content">
  <?php $this->view('messages') ?>
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Barang masuk / Pembelian</h3>
      <div class="pull-right">
        <a href="<?=site_url('stock/in/add')?>" class="btn btn-primary">
          <i class="fa fa-user-plus"></i> Add Stock In
        </a>
      </div>
    </div>
    <div class="box-body table-responsive">
      <table class="table table-bordered table-striped" id="table1">
        <thead>
          <tr>
            <th style="width:5%;">#</th>
            <th>Barcode</th>
            <th>Product Item</th>
            <th>Qty</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php $no = 1;
          foreach($row as $key => $data) { ?>
          <tr>
            <td style="width:5%;"><?=$no++?></td>
            <td><?=$data->barcode?></td>
            <td><?=$data->name?></td>
            <td class="text-right"><?=$data->qty?></td>
            <td class="text-right"><?=indo_date($data->date)?></td>
            <td class="text-center" width=160px>
                <a class="btn btn-default btn-xs">
                  <i class="fa fa-eye"></i>Detail
                </a>
                <a href="<?=site_url('stock/in/del/'.$data->stock_id)?>" onclick="return confirm('Apakah yakin hapus data?')" class="btn btn-danger btn-xs">
                  <i class="fa fa-trash"></i>Delete
                </a>
            </td>
          </tr>
          <?php
          } ?>
        </tbody>
      </table>
    </div>
  </div>

</section>
