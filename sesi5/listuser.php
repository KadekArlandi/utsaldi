<h3>Daftar Username</h3>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <td scope="col">Nama Lengkap</td>
            <td scope="col">Email</td>
            <td scope="col"><a href="datamahasiswa.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></td>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT tu.nama, tu.email, tu.iduser FROM tbuser tu ORDER BY tu.nama;";
        $hasil = mysqli_query($cnn, $sql);
        $cx = 0;
        while(mysqli_fetch_assoc($hasil)){
            $cx++;
        ?>

        <tr>
            <th scope="row"><?=$cx?></th>
            <td><?=$h['nama']?></td>
            <td><?=$h['email']?></td>
            <td><a href="datamahaiswa.php?aksi=edit&p1=<?=$h["iduser"]?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a>
            <a href="datamahasiswa.php?aksi=del&p1=<?=$h["iduser"]?>" class="btn btn-danger"><i class="sa-solid fa-user-xmark"></i>&nbsp;Del</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>