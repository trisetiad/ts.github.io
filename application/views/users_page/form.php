<section style="margin:20px">
    <h1>INI FORM</h1>
    <form action="<?php echo base_url('users/save'); ?>" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="nama lengkap">
            <span class="text-danger">
                <?php echo form_error('nama'); ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">password</label>
            <input type="password" name="password" class="form-control" placeholder="password">
            <span class="text-danger">
                <?php echo form_error('password'); ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="email@example.com">
            <span class="text-danger">
                <?php echo form_error('email'); ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="phone">
            <span class="text-danger">
                <?php echo form_error('phone'); ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Country</label>
            <input type="text" name="country" class="form-control" placeholder="country">
            <span class="text-danger">
                <?php echo form_error('country'); ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">City</label>
            <input type="text" name="city" class="form-control" placeholder="city">
            <span class="text-danger">
                <?php echo form_error('city'); ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Postcode</label>
            <input type="text" name="city" class="form-control" placeholder="postcode">
            <span class="text-danger">
                <?php echo form_error('postcode'); ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="nama">
            <span class="text-danger">
                <?php echo form_error('nama'); ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="floatingTextarea2">Address</label>
            <textarea class="form-control" name="address" placeholder="addres" id="floatingTextarea2"
                style="height: 100px"></textarea>
            <span class="text-danger">
                <?php echo form_error('address'); ?>
            </span>
        </div>
        <a href="<?php echo base_url('users'); ?>" class="btn btn-danger">cancel</a>
        <button type="submit" class="btn btn-primary">save</button>
    </form>
</section>