<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body align="center">
            Nilai UTS <br><input type="text" name="uts" id="uts" value=""><br><br>
            Nilai UAS <br><input type="text" name="uas" id="uas" value=""><br><br>
            <input type="submit" name="submit" id="submit" onclick="hitung()" value="Hitung"><br>
            <label for="total" class="form-label">Total :</label>
            <p id="total"></p>
            <label for="grade" class="form-label">Grade :</label>
            <p id="grade"></p>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    </body>

    <script>
        function hitung()   {
            var uts = document.getElementById("uts").value;
            var uas = document.getElementById("uas").value;
            var total = uts * 0.7 + uas * 0.3;
            var grade = '';
            if (total >= 80) {
                grade = 'A';
            } else if (total >= 70) {
                grade = 'B';
            } else if (total >= 60) {
                grade = 'C';
            } else if (total >= 50) {
                grade = 'D';
            } else {
                grade = 'E';
            }
            document.getElementById("total").innerHTML = total;
            document.getElementById("grade").innerHTML = grade;
        }
    </script>
</html>
