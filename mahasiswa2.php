<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <br><h1>Input Data Mahasiswa</h1><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off" class="formMahasiswa">
                        <div class="input-group input-group-md mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Input Id Mahasiswa</span>
                            <input type="text" id ="id" name ="id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-md mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Input First Name Mahasiswa</span>
                            <input type="text" id ="Fname" name="Fname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-md mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Input Last Name Mahasiswa</span>
                            <input type="text" id ="Lname" name="Lname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-md mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Input Age Mahasiswa</span>
                            <input type="text" id ="age" name="age" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div  class="form-action-buttons">
                            <input type="submit" class="btn btn-primary mt-1" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <br><h3>Tabel Mahasiswa</h3><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success mt-1" onclick="trans()">Add Mahasiswa</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <br><table class="table list" id="listMahasiswa">
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
            </div>
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

            function validate() {
                isValid = true;
                if (document.getElementById("fullName").value == "") {
                    isValid = false;
                    document.getElementById("fullNameValidationError").classList.remove("hide");
                } else {
                    isValid = true;
                    if (!document.getElementById("fullNameValidationError").classList.contains("hide"))
                        document.getElementById("fullNameValidationError").classList.add("hide");
                }
                return isValid;
            }
        </script>
    </body>
</html>