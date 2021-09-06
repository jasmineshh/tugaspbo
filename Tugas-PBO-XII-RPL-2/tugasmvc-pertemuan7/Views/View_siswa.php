<?php

include '../Controllers/Controller_siswa.php';
// Membuat Object dari Class siswa
$siswa = new Controller_siswa();
$GetSiswa = $siswa->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($GetSiswa['nisn']);
// die; 
?>
<h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
<h2>CRUD and CSRF</h2>
<h3><a href="View_spp.php">SPP</a> | <a href="View_kelas.php">Kelas</a> | <a href="View_petugas.php">Petugas</a> | <a href="View_pembayaran.php">Pembayaran</a></h3>
<h3>Table Siswa</h3>
<h3><a href="View_post_siswa.php">Add Data</a></h3>


<table border="1">
    <tr>
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Nominal</th>
        <th>Tools</th>
    </tr>
    <?php
    // Decision validation variabel
    if (isset($GetSiswa)) {
        $no = 1;
        foreach ($GetSiswa as $Get) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $Get['nisn']; ?></td>
                <td><?php echo $Get['nis']; ?></td>
                <td><?php echo $Get['nama']; ?></td>
                <td><?php echo $Get['nama_kelas']; ?></td>
                <td><?php echo $Get['alamat']; ?></td>
                <td><?php echo $Get['no_telp']; ?></td>
                <td><?php echo $Get['nominal']; ?></td>
                <td>
                    <a href="../Views/View_put_siswa.php?nisn=<?php echo base64_encode($Get['nisn']) ?>"><img src="data:image/jpeg;base64,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" width="17"></a>
                    <button onclick=" konfirmasi(<?php echo $Get['nisn'] ?>)">Delete</button>
            </tr>
    <?php
        }
    }
    ?>
</table>

<script>
    function konfirmasi(nisn) {
        if (window.confirm('apakah anda ingin menghapus data ini ?')) {
            window.location.href = '../Config/Routes.php?function=delete_siswa&nisn=<?php echo base64_encode($Get['nisn']) ?>';
        };
    }
</script>