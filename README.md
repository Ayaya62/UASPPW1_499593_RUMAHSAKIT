# UASPPW1_499593_RUMAHSAKIT
Nama   : Andhika Yoga Pratama
NIM    : 22/499593/SV/21342

1. Sesuai dengan prinsip desain
   Desain yang ada pada landing page telah sesuai dengan prinsip desain. tampilan yang terlihat jelas dan feedback pada pengguna ketika mengarahkan kursor ke suatu elemen.
   ![image](https://github.com/Ayaya62/UASPPW1_499593_RUMAHSAKIT/assets/109938799/526df230-42b5-4ab9-8162-faada110ab58)
![image](https://github.com/Ayaya62/UASPPW1_499593_RUMAHSAKIT/assets/109938799/098f69d2-f781-4c0e-9bda-da716c5865bb)
![image](https://github.com/Ayaya62/UASPPW1_499593_RUMAHSAKIT/assets/109938799/711d2466-7092-4f17-9f18-b893ca0aeedb)

2. Responsive
   Dengan menggunakan bootstrap 5, website ini telah responsive dan dapat dibuka di berbagai macam device.
   ![image](https://github.com/Ayaya62/UASPPW1_499593_RUMAHSAKIT/assets/109938799/8af5b52b-9e5d-4f1f-96b2-cab34d531a13)
   ![image](https://github.com/Ayaya62/UASPPW1_499593_RUMAHSAKIT/assets/109938799/7941eef0-f8c4-4db2-a2c9-49bcf2a3d4c4)

3. Direct Feedback
   
4. Dinamis
   Dengan menggunakan php dapat menghubungkan koneksi antara database yang ada pada phpmyadmin kedalam web.
   ```
   <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rumah_sakit";

    // create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    ?>
   ```

   dengan menggunakan kode php di atas, website dapat menghubungkan ke database.
   ```
    <?php
    include "conn.php";
    
    if(isset($_POST['regist'])){
      mysqli_query($conn, "insert into barang set
      nama = '$_POST[yourName]',
      tanggal_lahir = '$_POST[birthDate]',
      nomor_telepon = '$_POST[phoneNumber]',");

      echo "Your data already saved";
    }

    ?>
   ```

   Kemudian, dengan kode tersebut kita dapat memasukkan input dari user ke dalam database.
   
