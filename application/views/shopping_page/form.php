<section style="margin:30px">
    <h1>INI FORM PRODUCTS</h1>
    <form action="<?php echo base_url('shopping/save'); ?>" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">User Id</label>
            <select name="user_id" class="form-select form-control" aria-label="Default select example">
                <option selected>pilih user</option>
                <?php 
  foreach ($users as $value) {
    echo '<option value="'.$value->id.'">'.$value->nama.'</option>';
  }
  ?>
            </select>
            <!-- <input type="number" name="user_id" class="form-control" placeholder="user id" > -->
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
        <a href="<?php echo base_url('shopping'); ?>" class="btn btn-danger">cancel</a>
        <button type="submit" class="btn btn-primary">save</button>
    </form>
</section>