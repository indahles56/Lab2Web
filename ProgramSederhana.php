<!DOCTYPE html>
<html>
    <head>
        <title>Program PHP Sederhana</title>
        <style>
            body{
                font-family: sans-serif;
                background-color: #f0f0f0;
                padding-left: 30px;
                padding-right: 30px;
            }

            .container{
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                width: 400px;
                border-radius: 5px;
            }
            
            h1, h2{
                text-align: center;
                color: #333;
            }

            label{
                display: block;
                margin-bottom: 10px;
                font-weight: bold;
            }

            input, select{
                padding-top: 5px;
                padding-bottom: 5px;
                width: 100%;
                border: 1px solid #ccc;
                border-radius: 3px;
            }

            input[type="submit"]{
                background-color: #333;
                color: #fff;
                border: none;
                cursor: pointer;
            }

            input[type="submit"]:hover{
                background-color: #555;
            }

            .output{
                margin-top: 20px;
                border-top: 1px solid #ccc;
                padding-top: 10px;
            }

            .output h2{
                margin-top: 0;
            }

            .output p{
                margin-bottom: 5px;
            }

            .output p:last-child{
                margin-bottom: 0;
            }

            .gaji{
                font-weight: bold;
                color: #333;
            }

            .gaji span{
                color: #f00;
            }
        </style>
    </head>
    <body>
        <h2>Form Data Diri Karyawan</h2>
        <form action="" method="POST">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama"><br><br>

            <label for="tgl_lahir">Tanggal Lahir : </label>
            <input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>

            <label for="pekerjaan">Pekerjaan : </label>
            <select id="pekerjaan" name="pekerjaan">
                <option value="Manager">Manager</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Programmer">Programmer</option>
                <option value="Sales">Sales</option>
            </select><br><br>

            <input type="submit" name="submit" value="submit">
        </form>

        <?php
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $pekerjaan = $_POST['pekerjaan'];

            $tahun_lahir = date('Y', strtotime($tgl_lahir));
            $tahun_sekarang = date('Y');
            $umur = $tahun_sekarang - $tahun_lahir;

            echo "<h2>Data Diri Karyawan</h2>";
            echo "Nama : " . $nama . "<br>";
            echo "Tanggal Lahir : " . $tgl_lahir . "<br>";
            echo "Umur : " . $umur . "<br>";
            echo "Pekerjaan : " . $pekerjaan . "<br>";
            echo "Gaji : ";

            switch($pekerjaan){
                case "Manager":
                    echo "Rp. 15.000.000,-";
                    break;
                case "Supervisor":
                    echo "Rp. 10.000.000,-";
                    break;
                case "Programmer":
                    echo "Rp. 7.500.000,-";
                    break;
                case "Sales":
                    echo "Rp. 5.000.000,-";
                    break;
                default:
                echo "-";
                break;
            }
        }
        ?>
    </body>
</html>
