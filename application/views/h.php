<!-- <?
$con=mysqli_connect('localhost','root','','onlinexaminationci');
$res = mysqli_query($con,"SELECT * FROM m_ujian");
?> -->




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container" style="margin: top 10px;S">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</td>
                    <th>ID_dosen</td>
                    <th>ID_m</td>
                    <th>Name</td>
                    <th>Soal</td>
                    <th>Number</td>
                    <th>Jener</td>
                    <th>S_Date</td>
                    <th>E_Date</td>
                    <th>Token</td>



                </tr>


            </thead>

            <tbody>

                <?php if(!empty($m_ujian)) { foreach($m_ujian as $data) {?>



                <tr>
                    <td><?php echo $data['id_ujian']?></td>
                    <td><?php echo $data['dosen_id']?></td>
                    <td><?php echo $data['matkul_id']?></td>
                    <td><?php echo $data['nama_ujian']?></td>
                    <td><?php echo $data['jumlah_soal']?></td>
                    <td><?php echo $data['waktu']?></td>
                    <td><?php echo $data['jenis']?></td>
                    <td><?php echo $data['tgl_mulai']?></td>
                    <td><?php echo $data['terlambat']?></td>
                    <td><?php echo $data['token']?></td>




                </tr>






                <!--    
<tr>
<td>5</td>
<td>5</td>
<td>kk</td>
<td>kk</td>
<td>kk</td>
<td>kk</td>
<td>kk</td>
<td>kk</td>
<td>kk</td>
<td>kk</td>



</tr>  -->



                <?php } } else {?>
                <tr>
                    <td colspan="5">Records not found </td>
                </tr>
                <?php } ?>





                </thead>


        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>




    <script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
    </script>








</body>

</html>