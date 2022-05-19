<section class="content-header">
  <h1>Items
    <small>Data Barang</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Items</li>
  </ol>
</section>

<section class="content">
  <?php $this->view('messages') ?>
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?=ucfirst($page)?> Item</h3>
      <div class="pull-right">
        <a href="<?=site_url('item')?>" class="btn btn-warning">
          <i class="fa fa-arrow-left"></i> Back
        </a>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <?=form_open_multipart('item/process')?>
            <div class="form-group">
              <label class="form-label">Barcode *</label>
              <input type="hidden" name="item_id" id="item_id" value="<?=$row->item_id?>">
              <input type="text" name="barcode" id="inputBarcode" value="<?=$row->barcode?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="product_name" class="form-label">Product Name *</label>
              <input type="text" name="product_name" id="product_name" value="<?=$row->name?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="form-label">Category *</label>
              <select name="category" id="category" class="form-control" required>
                <option value="">- Pilih -</option>
                <?php foreach($category->result() as $key => $data) { ?>
                  <option value="<?=$data->category_id?>"<?=$data->category_id == $row->category_id ? "selected" : null ?>><?=$data->name?></option>
                <?php } ?>
              </select> 
            </div>
            <div class="form-group">
              <label class="form-label">Unit *</label>
              <?= form_dropdown('unit', $unit, $selectedunit, ['class'=>'form-control', 'required' => 'required'] ) ?>
            </div>
            <div class="form-group">
              <label class="form-label">Price *</label>
              <input type="number" name="price" id="inputBarcode" value="<?=$row->price?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="form-label">Image</label>
              <?php if($page == 'edit') {
                if($row->image != null) { ?>
                  <div class="mb-4">
                    <img src="<?=base_url('uploads/product/'.$row->image)?>" alt="" style="width: 80%;">
                  </div>
                <?php
                }
              } ?>
              <input type="file" name="image" id="inputBarcode" class="form-control">
              <small>(Biarkan kosong jika tidak <?= $page == 'edit' ? 'diganti' : 'ada' ?>)</small>
            </div>
            <div class="form-group">
              <button type="submit" name="<?=$page?>" class="btn btn-success">
                <i class="fa fa-paper-plane"></i> Save
              </button>
              <button type="reset" class="btn btn-danger">
                <i class="fa fa-undo"></i> Reset
              </button>
            </div>
          <?=form_close()?>
        </div>
      </div>
    </div>
  </div>

</section>
