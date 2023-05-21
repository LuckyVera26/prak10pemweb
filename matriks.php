<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operasi Matriks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br><h1>Operasi Matriks Sederhana</h1><hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header fontitalic">
                        Input Matriks 2X2 (A)
                    </div>
                    <div class="card-body">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Input Baris 1 Kolom 1</span>
                            <input type="number" id ="a_b1k1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Input Baris 1 Kolom 2</span>
                            <input type="number" id= "a_b1k2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Input Baris 2 Kolom 1</span>
                            <input type="number" id="a_b2k1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Input Baris 2 Kolom 2</span>
                            <input type="number" id="a_b2k2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header fontitalic">
                        Input Matriks 2X2 (B)
                    </div>
                    <div class="card-body">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Input Baris 1 Kolom 1</span>
                            <input type="number" id="b_b1k1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Input Baris 1 Kolom 2</span>
                            <input type="number" id="b_b1k2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Input Baris 2 Kolom 1</span>
                            <input type="number" id="b_b2k1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Input Baris 2 Kolom 2</span>
                            <input type="number" id="b_b2k2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header fontitalic">
                        Pilih Operasi dan Hasil Operasi
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Pilih Operasi Matriks</h6>
                        <button type="submit" class="btn btn-primary mt-1" onclick="trans()">Transpose</button>
                        <button type="submit" class="btn btn-primary mt-1" onclick="tambah()">Pertambahan</button>
                        <button type="submit" class="btn btn-primary mt-1" onclick="kali()">Perkalian</button>
                        <button type="submit" class="btn btn-primary mt-1" onclick="inv()">Inverse</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <br><h3>Hasil Operasi</h3><hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header fontitalic">
                        Hasil Transpose Matriks A
                    </div>
                    <div class="card-body">
                        <label for="htrans_b1k1">Hasil Baris 1:</label>
                        <input type="text" class="formcontrol" id="htrans_b1k1" placeholder="Baris 1 Kolom 1"><br>
                        <br><label for="htrans_b1k2">Hasil Baris 1 Kolom 2 :</label>
                        <input type="text" class="formcontrol" id="htrans_b1k2" placeholder="Baris 1 Kolom 2"><br>
                        <br><label for="htrans_b1k1">Hasil Baris 2:</label>
                        <input type="text" class="formcontrol" id="htrans_b2k1" placeholder="Baris 2 Kolom 1"><br>
                        <br><label for="htrans_b2k2">Hasil Baris 2 Kolom 2 :</label>
                        <input type="text" class="formcontrol" id="htrans_b2k2" placeholder="Baris 2 Kolom 2"><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header fontitalic">
                        Hasil Pertambahan Matriks A+B
                    </div>
                    <div class="card-body">
                        <label for="htambah_b1k1">Hasil Baris 1 Kolom 1 :</label>
                        <input type="text" class="formcontrol" id="htambah_b1k1" placeholder="Baris 1 Kolom 1"><br>
                        <br><label for="htambah_b1k2">Hasil Baris 1 Kolom 2 :</label>
                        <input type="text" class="formcontrol" id="htambah_b1k2" placeholder="Baris 1 Kolom 2"><br>
                        <br><label for="htambah_b2k1">Hasil Baris 2 Kolom 1 :</label>
                        <input type="text" class="formcontrol" id="htambah_b2k1" placeholder="Baris 2 Kolom 1"><br>
                        <br><label for="htambah_b2k2">Hasil Baris 2 Kolom 2 :</label>
                        <input type="text" class="formcontrol" id="htambah_b2k2" placeholder="Baris 2 Kolom 2"><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header fontitalic">
                        Hasil Perkalian Matriks A*B
                    </div>
                    <div class="card-body">
                        <label for="hkali_b1k1">Hasil Baris 1 Kolom 1 :</label>
                        <input type="text" class="formcontrol" id="hkali_b1k1" placeholder="Baris 1 Kolom 1"><br>
                        <br><label for="hkali_b1k2">Hasil Baris 1 Kolom 2 :</label>
                        <input type="text" class="formcontrol" id="hkali_b1k2" placeholder="Baris 1 Kolom 2"><br>
                        <br><label for="hkali_b1k1">Hasil Baris 2 Kolom 1 :</label>
                        <input type="text" class="formcontrol" id="hkali_b2k1" placeholder="Baris 2 Kolom 1"><br>
                        <br><label for="hkali_b2k2">Hasil Baris 2 Kolom 2 :</label>
                        <input type="text" class="formcontrol" id="hkali_b2k2" placeholder="Baris 2 Kolom 2"><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header fontitalic">
                        Hasil Inverse Matriks A
                    </div>
                    <div class="card-body">
                        <label for="hinv_b1k1">Hasil Baris 1 Kolom 1 :</label>
                        <input type="text" class="formcontrol" id="hinv_b1k1" placeholder="Baris 1 Kolom 1"><br>
                        <br><label for="hinv_b1k2">Hasil Baris 1 Kolom 2 :</label>
                        <input type="text" class="formcontrol" id="hinv_b1k2" placeholder="Baris 1 Kolom 2"><br>
                        <br><label for="hinv_b1k1">Hasil Baris 2 Kolom 1 :</label>
                        <input type="text" class="formcontrol" id="hinv_b2k1" placeholder="Baris 2 Kolom 1"><br>
                        <br><label for="hinv_b2k2">Hasil Baris 2 Kolom 2 :</label>
                        <input type="text" class="formcontrol" id="hinv_b2k2" placeholder="Baris 2 Kolom 2"><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function trans() {
            var a_b1k1 = document.getElementById("a_b1k1").value;
            var a_b1k2 = document.getElementById("a_b1k2").value;
            var a_b2k1 = document.getElementById("a_b2k1").value;
            var a_b2k2 = document.getElementById("a_b2k2").value;

            document.getElementById("htrans_b1k1").value = a_b1k1+'  '+a_b1k2;
            document.getElementById("htrans_b1k2").value = htrans_b1k2;
            document.getElementById("htrans_b2k1").value = htrans_b2k1;
            document.getElementById("htrans_b2k2").value = htrans_b2k2;
        }

        function tambah() {
                //notifikasi memilih fitur tambah
                alert("Silahkan Lihat Hasil di Pertambahan Matrik A+B");

            var a_b1k1 = document.getElementById("a_b1k1").value;
            var a_b1k2 = document.getElementById("a_b1k2").value;
            var a_b2k1 = document.getElementById("a_b2k1").value;
            var a_b2k2 = document.getElementById("a_b2k2").value;
            var b_b1k1 = document.getElementById("b_b1k1").value;
            var b_b1k2 = document.getElementById("b_b1k2").value;
            var b_b2k1 = document.getElementById("b_b2k1").value;
            var b_b2k2 = document.getElementById("b_b2k2").value;

            // masih salah
            var htambah_b1k1 = (parseInt(a_b1k1)+parseInt(b_b1k1));
            var htambah_b1k2 = (parseInt(a_b1k2)+parseInt(b_b1k2));
            var htambah_b2k1 = (parseInt(a_b2k1)+parseInt(b_b2k1));
            var htambah_b2k2 = (parseInt(a_b2k2)+parseInt(b_b2k2));

            document.getElementById("htambah_b1k1").value = htambah_b1k1;
            document.getElementById("htambah_b1k2").value = htambah_b1k2;
            document.getElementById("htambah_b2k1").value = htambah_b2k1;
            document.getElementById("htambah_b2k2").value = htambah_b2k2;
        }

        function kali() {
                //notifikasi memilih fitur kali
                alert("Silahkan Lihat Hasil di Perkalian Matrik A*B");

            var a_b1k1 = document.getElementById("a_b1k1").value;
            var a_b1k2 = document.getElementById("a_b1k2").value;
            var a_b2k1 = document.getElementById("a_b2k1").value;
            var a_b2k2 = document.getElementById("a_b2k2").value;
            var b_b1k1 = document.getElementById("b_b1k1").value;
            var b_b1k2 = document.getElementById("b_b1k2").value;
            var b_b2k1 = document.getElementById("b_b2k1").value;
            var b_b2k2 = document.getElementById("b_b2k2").value;

            var hkali_b1k1 = (parseInt(a_b1k1)*parseInt(b_b1k1)) + (parseInt(a_b1k2)*parseInt(b_b2k1));
            var hkali_b1k2 = (parseInt(a_b1k1)*parseInt(b_b1k2)) + (parseInt(a_b1k2)*parseInt(b_b2k2));
            var hkali_b2k1 = (parseInt(a_b2k1)*parseInt(b_b1k1)) + (parseInt(a_b2k2)*parseInt(b_b2k1));
            var hkali_b2k2 = (parseInt(a_b2k1)*parseInt(b_b1k2)) + (parseInt(a_b2k2)*parseInt(b_b2k2));

            document.getElementById("hkali_b1k1").value = hkali_b1k1;
            document.getElementById("hkali_b1k2").value = hkali_b1k2;
            document.getElementById("hkali_b2k1").value = hkali_b2k1;
            document.getElementById("hkali_b2k2").value = hkali_b2k2;
        }

        // belum bisa kepanggil, masih bingung masalah angka minus
        function inv() {
            var a_b1k1 = document.getElementById("a_b1k1").value;
            var a_b1k2 = document.getElementById("a_b1k2").value;
            var a_b2k1 = document.getElementById("a_b2k1").value;
            var a_b2k2 = document.getElementById("a_b2k2").value;

            var hinv_b1k1 = (1/((a_b1k1*a_b2ka) - (a_b1k2*a_b2k1))) * a_b2k2;
            var hinv_b1k2 = (1/((a_b1k1*a_b2ka) - (a_b1k2*a_b2k1))) * (-1*a_b1k2);
            var hinv_b2k1 = (1/((a_b1k1*a_b2ka) - (a_b1k2*a_b2k1))) * (-1*a_b2k1);
            var hinv_b2k2 = (1/((a_b1k1*a_b2ka) - (a_b1k2*a_b2k1))) * a_b1k1;

            document.getElementById("hinv_b1k1").value = hinv_b1k1;
            document.getElementById("hinv_b1k2").value = hinv_b1k2;
            document.getElementById("hinv_b2k1").value = hinv_b2k1;
            document.getElementById("hinv_b2k2").value = hinv_b2k2;
        }
    </script>
  </body>
</html>