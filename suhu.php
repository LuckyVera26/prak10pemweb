<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Konversi Suhu</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            .form-control {
            width: 50%;
            }
        </style>
    </head>
    <body>
        <div class="container"><br>
            <div class="row">
                <h1 class="text-left mx-auto">Temperature Conversion</h1>
            </div><hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header fontitalic">
                            Temperatur Celsius
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Input Derajat Celsius</h6>                                
                            <input type="text" class="formcontrol" id="celcius" placeholder="Celcius"><br>
                            <button type="button" class="btn btn-primary mt-3" onclick="celToFah()">Convert To Fahrenheit</button>
                            <button type="button" class="btn btn-primary mt-3" onclick="celToRer()">Convert To Reamur</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header fontitalic">
                            Temperatur Reamur
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Input Nilai Derajat Reamur</h6>
                            <input type="text" class="formcontrol" id="reamur" placeholder="Reamur"><br>
                            <button type="button" class="btn btn-primary mt-3" onclick="rerToCel()">Convert To Celcius</button>
                            <button type="button" class="btn btn-primary mt-3" onclick="rerToFah()">Convert To Fahrenheit</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header fontitalic">
                            Temperatur Fahrenheit
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Input Nilai Derajat Fahrenheit</h6>
                            <input type="text" class="formcontrol" id="fahrenheit" placeholder="Fahrenheit"><br>
                            <button type="button" class="btn btn-primary mt-3" onclick="fahToCel()">Convert To Celcius</button>
                            <button type="button" class="btn btn-primary mt-3" onclick="fahToRer()">Convert To Reamur</button>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    <script>
        function celToFah() {
            var tempcelcius = document.getElementById("celcius").value;
            var tempfahrenheit = (tempcelcius * (9 / 5)) + 32;
            document.getElementById("fahrenheit").value = tempfahrenheit;
        }

        function celToRer() {
            var tempcelcius = document.getElementById("celcius").value;
            var tempreamur = tempcelcius * (4/5);
            document.getElementById("reamur").value = tempreamur;
        }

        function rerToCel() {
            var tempreamur = document.getElementById("reamur").value;
            var tempcelcius = tempreamur * (5/4);
            document.getElementById("celcius").value = tempcelcius;
        }

        function rerToFah() {
            var tempreamur = document.getElementById("reamur").value;
            var tempfahrenheit = (tempreamur * (9 / 4)) + 32;
            document.getElementById("fahrenheit").value = tempfahrenheit;
        }

        function fahToCel() {
            var tempfahrenheit = document.getElementById("fahrenheit").value;
            var tempcelcius = (tempfahrenheit - 32) * (5 / 9);
            document.getElementById("celcius").value = tempcelcius;
        }

        function fahToRer() {
            var tempfahrenheit = document.getElementById("fahrenheit").value;
            var tempreamur = (tempfahrenheit - 32) * (4/9);
            document.getElementById("reamur").value = tempreamur;
        }
    </script>
    </body>
</html>