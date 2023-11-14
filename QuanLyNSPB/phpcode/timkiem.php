<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
    </style>
    <script>
        function Find() {
            var searchText = document.f1.t1.value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("result").innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET", "timkiemNV.php?q=" + searchText, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
    <form name="f1">
        <h1>Tìm kiếm</h1>
        <input type="text" name="t1" id="t1" autofocus oninput="Find()">
        <input type="button" value="Find" onclick="Find()">
    </form>
    <div class="container" id="result">
    </div>
</body>
</html>
