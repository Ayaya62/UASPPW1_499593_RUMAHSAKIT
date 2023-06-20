# UASPPW1_499593_RUMAHSAKIT
Nama   : Andhika Yoga Pratama
NIM    : 22/499593/SV/21342

1. Sesuai dengan prinsip desain <br>
   Desain yang ada pada landing page telah sesuai dengan prinsip desain. tampilan yang terlihat jelas dan feedback pada pengguna ketika mengarahkan kursor ke suatu elemen. Kombinasi warna cerah dan gelap yang nyaman di mata dan memudahkan user dalam membaca elemen dari website.
   ![image](https://github.com/Ayaya62/UASPPW1_499593_RUMAHSAKIT/assets/109938799/526df230-42b5-4ab9-8162-faada110ab58)
![image](https://github.com/Ayaya62/UASPPW1_499593_RUMAHSAKIT/assets/109938799/098f69d2-f781-4c0e-9bda-da716c5865bb)
![image](https://github.com/Ayaya62/UASPPW1_499593_RUMAHSAKIT/assets/109938799/711d2466-7092-4f17-9f18-b893ca0aeedb)

2. Responsive <br>
   Dengan menggunakan bootstrap 5, website ini telah responsive dan dapat dibuka di berbagai macam device.
   ![image](https://github.com/Ayaya62/UASPPW1_499593_RUMAHSAKIT/assets/109938799/8af5b52b-9e5d-4f1f-96b2-cab34d531a13)
   ![image](https://github.com/Ayaya62/UASPPW1_499593_RUMAHSAKIT/assets/109938799/7941eef0-f8c4-4db2-a2c9-49bcf2a3d4c4)

3. Direct Feedback
   ```
       <section class="contact">
      <div class="container">
        <div class="row text-center text-dark p-4">
          <h3>GET IN TOUCH</h3>
        </div>
        <div class="row text-center">
          <!-- MESSAGE -->
          <div class="col-md-5 text-light text-center m-auto">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Name</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name here" />
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your message here...">                        </textarea>
                </div>
                <button type="submit" class="btn btn-dark rounded-pill" id="buttonSend">SEND</button>
                <p id="newText"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   ```
   Kode di atas merupakan salah satu section dalam landing page yang digunakan untuk memasukkan input user.

   ```
   const btn = document.getElementById("buttonSend");
   const myText = document.getElementById("newText");

   btn.addEventListener("click", function () {
     const myInsertText = "Thank You for your response!! If you need some info please contact me on example@example.com";
     myText.innerHTML = myInsertText;
   });
   ```
   kemudian dengan kode javascript diatas, user akan menemui suatu pesan ketika user menekan tombol send.
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
   Dengan menggunakan kode php di atas, website dapat menghubungkan ke database. Variabel $servername digunakan untuk menyimpan nama server dan beberapa variabel lain yang juga menyimpan sesuai dengan nama variabel tersebut. Kemudian, variabel $conn digunakan untuk menyimpan objek koneksi ke server database MySQL. Variabel $conn nantinya dapat digunakan untuk melakukan berbagai operasi database, seperti eksekusi query, mengambil data, memodifikasi data, dan sebagainya. Dengan menggunakan variabel $conn, kita dapat berinteraksi dengan server database MySQL melalui PHP.
   
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
   Kode ini berada dalam file registration yang digunakan untuk memasukkan data yang diinputkan oleh user ke dalam database. Kode ini mungkin digunakan untuk mengambil data dari sebuah form dan menyimpannya ke dalam tabel "barang" dalam database. Namun, perlu iperhatikan bahwa kode ini rawan terhadap serangan SQL Injection dan sebaiknya menggunakan prepared statements atau metode sanitasi input untuk mencegah serangan tersebut.
