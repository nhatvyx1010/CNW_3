<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }
        iframe {
            margin: 0;
            border: none;
            width: 100%;
            height: 99vh;
        }
    </style>
</head>
<body>
    <iframe id="frameContent" src="" frameborder="0"></iframe>
    <script>
        function changeFrameContent(hrefValue) {
            var frame = document.getElementById("frameContent");
            if (frame) {
                frame.src = hrefValue;
            } else {
                frame.src = FormIndex.php;
                console.error("Không tìm thấy iframe (frameContent)");
            }
        }
    </script>
</body>
</html>
