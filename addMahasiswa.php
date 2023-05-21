<html>
<head>
    <title>
        JavaScript CRUD Example Tutorial
    </title>
    <style>
        .mahasiswa-form {
            border-style: solid;
            /* margin-bottom: 10px; */
            /* margin-left: 10px; */
            padding: 10px;
            /* width: 50%; */
            margin: auto;
            width: 50%;
            /* border: 3px solid green; */
            /* padding: 10px; */
        }

        .mahasiswa-table {
            border-style: solid;
            /* margin-bottom: 10px; */
            /* margin-left: 10px; */
            padding: 20px;
            /* width: 50%; */
            margin: auto;
            width: 70%;
            /* border: 3px solid green; */
            /* padding: 10px; */
        }

        body > table{
            width: 80%;
        }

        table{
            border-collapse: collapse;
        }
        table.list{
            width:100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even),table.list thead>tr {
            background-color: #dddddd;
        }

        input[type=text], input[type=number] {
            width: 100%;
            padding: 8px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 30%;
            background-color: black;
            color: white;
            padding: 10px 18px;
            /* margin: 0px 0; */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form div.form-action-buttons{
            text-align: right;
        }

        a{
            cursor: pointer;
            text-decoration: underline;
            color: #0000ee;
            margin-right: 4px;
        }

        label.validation-error{
            color:   red;
            margin-left: 5px;
        }

        .hide{
            display:none;
        }
    </style>
</head>

<body>
	<hr>
			<div class="mahasiswa-form">
                <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off">
                    <div>
                        <label>Id Mahasiswa</label>
                        <input type="text" name="id" id="id">
                    </div>
                    <div>
                        <label>First Name</label>
                        <input type="text" name="Fname" id="Fname">
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type="text" name="Lname" id="Lname">
                    </div>
                    <div>
                        <label>Age</label>
                        <input type="text" name="age" id="age">
                    </div>
                    <div  class="form-action-buttons">
                        <input type="submit" value="Submit">
                    </div>
                </form>
		</div>
		<br/>
		<div class = "mahasiswa-table">
                <table class="list" id="listMahasiswa">
                    <thead>
                        <tr>
                            <th>Id Mahasiswa</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Actions</th>
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
</body>
</html>
