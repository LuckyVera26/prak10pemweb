<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <!-- input data -->
        <div class="input-form">
            <br><h1>Masukkan Data Mahasiswa</h1><br>
            <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="id" name="id">
                    <label for="id">ID Mahasiswa</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Fname" name="Fname">
                    <label for="Fname">First Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Lname" name ="Lname">
                    <label for="Lname">Last Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="age" name ="age">
                    <label for="age">Age</label>
                </div>
                <div class="form-action-buttons">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
        
        <div class="tabel">
            <h1>Tabel Mahasiswa</h1><br>
            <form>
                <div class="form-action-buttons">
                    <input type="submit" class="btn btn-success" value="Add Mahasiswa">
                </div>
            </form>
            <table class="table list" id="listMahasiswa">
                <thead class="table-light">
                    <tr>
                        <td><b>ID Mahasiswa</b></td>
                        <td><b>First Name</b></td>
                        <td><b>Last Name</b></td>
                        <td><b>Age</b></td>
                        <td><b>Keterangan</b></td>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

        <script>
            var selectedRow = null
            function onFormSubmit() {
                if (validate()) {
                    var formData = readFormData();
                    if (selectedRow == null)
                        insertNewRecord(formData);
                    else
                        updateRecord(formData);
                    resetForm();
                }
            }

            function readFormData() {
                var formData = {};
                formData["id"] = document.getElementById("id").value;
                formData["Fname"] = document.getElementById("Fname").value;
                formData["Lname"] = document.getElementById("Lname").value;
                formData["age"] = document.getElementById("age").value;
                return formData;
            }

            function insertNewRecord(data) {
                var table = document.getElementById("listMahasiswa").getElementsByTagName('tbody')[0];
                var newRow = table.insertRow(table.length);
                cell1 = newRow.insertCell(0);
                cell1.innerHTML = data.id;
                cell2 = newRow.insertCell(1);
                cell2.innerHTML = data.Fname;
                cell3 = newRow.insertCell(2);
                cell3.innerHTML = data.Lname;
                cell4 = newRow.insertCell(3);
                cell4.innerHTML = data.age;
                cell4 = newRow.insertCell(4);
                cell4.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                                <a onClick="onDelete(this)">Delete</a>`;
            }

            function resetForm() {
                document.getElementById("id").value = "";
                document.getElementById("Fname").value = "";
                document.getElementById("Lname").value = "";
                document.getElementById("age").value = "";
                selectedRow = null;
            }

            function onEdit(td) {
                selectedRow = td.parentElement.parentElement;
                document.getElementById("id").value = selectedRow.cells[0].innerHTML;
                document.getElementById("Fname").value = selectedRow.cells[1].innerHTML;
                document.getElementById("Lname").value = selectedRow.cells[2].innerHTML;
                document.getElementById("age").value = selectedRow.cells[3].innerHTML;
            }

            function updateRecord(formData) {
                selectedRow.cells[0].innerHTML = formData.id;
                selectedRow.cells[1].innerHTML = formData.Fname;
                selectedRow.cells[2].innerHTML = formData.Lname;
                selectedRow.cells[3].innerHTML = formData.age;
            }

            function onDelete(td) {
                if (confirm('Are you sure to delete this record ?')) {
                    row = td.parentElement.parentElement;
                    document.getElementById("listMahasiswa").deleteRow(row.rowIndex);
                    resetForm();
                }
            }
        </script>
    </div>
  </body>
</html>