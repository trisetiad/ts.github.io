<section style="margin:30px">
    <h1>Form update</h1>
    <form action="<?php echo base_url('products/update/'); ?>" method="POST">
        <input style="display:none" type="text" value="<?php echo $detail_data->id; ?>" name="id">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Id</label>
            <select name="id" class="form-select form-control" aria-label="Default select example">
                <?php 
  foreach ($users as $value) {
    $selected = ($detail_data->user_id == $value->id) ? "selected":"";
    echo '<option value="'.$value->id.'" '.$selected.'>'.$value->nama.'</option>';
  }
  ?>
            </select>
            <!-- <<input type="integer" name="user_id" value=" class="form-control" placeholder="user_id"> -->
            <span class="text-danger">
                <?php echo form_error('user_id'); ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" placeholder="nama">
            <span class="text-danger">
                <?php echo form_error('Nama'); ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Created Date</label>
            <input type="number" name="harga" class="form-control" placeholder="harga">
            <span class="text-danger">
                <?php echo form_error('CreatedDate'); ?>
            </span>
        </div>
        <a href="<?php echo base_url('products'); ?>" class="btn btn-danger">cancel</a>
        <button type="submit" class="btn btn-primary">save</button>
    </form>
</section>