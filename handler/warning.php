<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link rel='stylesheet' href='style_2.css'>

</head>
<body>
    <div class='success'>
        <div class='close' onclick='clo()'>
        </div>
        <div class='message'>
            <h3>user name alreday exist.</h3>
        </div>
    </div>
    
    <script>
        let close = document.getElementsByClassName('warning')[0];
        function clo()
        {
            close.style.display='none';
        }
    </script>
</body>

</html>