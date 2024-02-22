<?php
include("konek.php");
?>

<html>

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <center>Daftar member</center>
        <div class="row justify-content-center mt-5">
            <nav>
                <a href="form.php">Tambah Member Baru [ + ]</a>
            </nav>
            <br>

            <div class="table-responsive">
                <table id="table-datables" class="table" border="1">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Pembayaran</th>
                            <th>Paket</th>
                            <th>Jangka</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tabel_member";
                        $query = mysqli_query($db, $sql);
                        $no = 1;

                        while ($member = mysqli_fetch_array($query)) {
                            echo "<tr>";

                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . $member['nama'] . "</td>";
                            echo "<td>" . $member['email'] . "</td>";
                            echo "<td>" . $member['jk'] . "</td>";
                            echo "<td>" . $member['bayar'] . "</td>";
                            echo "<td>" . $member['paket'] . "</td>";
                            echo "<td>" . $member['jangka'] . "</td>";

                            echo "<td>";
                            echo "<a href='form-edit.php?id=" . $member['id'] . "'>edit</a> | ";
                            echo "<a href='hapus.php?id=" . $member['id'] . "'>hapus</a> | ";
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                        </table>
            </div>
            <p>Total : <?php echo mysqli_num_rows($query) ?></p>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>


</html>