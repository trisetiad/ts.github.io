<section class="hay">
    <h3>DATA SHOPPING</h3>
    <a href="<?php echo base_url('shopping/form'); ?>" class="btn btn-success">Tambah Shopping</a>
    <table class="table table-bordered">

        <head>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">ID</th>
                <th scope="col">NAMA</th>
                <th scope="col">CREATED DATE</th>
                <th scope="col">ACTION</th>
            </tr>
        </head>

        <body>
            <?php
    $no = 1;
    foreach($list_data as $val){
        echo "<tr>";
        echo "<td> $no</td>";
        echo "<td> $val->Id</td>";
        echo "<td> $val->Nama</td>";
        echo "<td> $val->CreatedDate</td>";
        echo "<td><a href='".base_url('shopping/shopping_update/'.$val->Id)."'>edit</a>||<a class='delete' href='".base_url('shopping/delete/'.$val->Id)."'>delete</a></td>";
        echo "</tr>";
        

        $no++;
    }
    ?>
        </body>
    </table>