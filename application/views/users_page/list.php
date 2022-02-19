<section class="section">
    <h3>DATA USER</h3>
    <a href="<?php echo base_url('users/form'); ?>" class="btn btn-danger">Tambah Data</a>
    <table class="table table-bordered">

        <head>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Id</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Country</th>
                <th scope="col">City</th>
                <th scope="col">Postcode</th>
                <th scope="col">Nama</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
        </head>

        <body>
            <?php
    $no = 1;
    foreach($list_data as $val){
        echo "<tr>";
        echo "<td> $no</td>";
        echo "<td> $val->id</td>";
        echo "<td> $val->username</td>";
        echo "<td> $val->password</td>";
        echo "<td> $val->email</td>";
        echo "<td> $val->phone</td>";
        echo "<td> $val->country</td>";
        echo "<td> $val->city</td>";
        echo "<td> $val->postcode</td>";
        echo "<td> $val->name</td>";
        echo "<td> $val->address</td>";
        echo "<td><a href='".base_url('users/form_update/'.$val->id)."'>edit</a>||<a class='delete' href='".base_url('users/delete/'.$val->id)."'>delete</a></td>";
        echo "</tr>";
        
        $no++;
    }
    ?>
        </body>
    </table>