<html>
    <head>
        <title>Koneksi Database MySQL</title>
    </head>
    <body>
        <h1>Demo Koneksi database MySQL</h1> 
        <?php
        $con = mysqli_connect("localhost","root","","my_db"); //membuat variabel yang menampung status hasil koneksi kepada database

        //Check conection
        if(mysqli_connect_error()){ //membuat kondisi jika koneksi error
            echo "Failed to connect to MySQL:" . mysqli_connect_error(); //jika koneksi ke mysql error maka akan menampilkan teks 
            exit(); //program selesai dijalankan
        }
        ?>
    </body>
</html>