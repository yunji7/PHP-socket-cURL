
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="http://localhost/Test/Server.php" method="post" enctype="application/x-www-form-urlencoded">
    <label>名字</label> <input type="text" name="name"/>
    <label>email</label> <input type="text" name="mail">


    <button type="submit">提交</button>
</form>

</body>
</html>

<?php




$data = array(
    'name' => 23,
    'mail' => 123,
);

$data = http_build_query($data);

$opts = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded \r\n' .
            'Content-Length:' . strlen($data) . '\r\n',
        'content' => $data)
);


$context = stream_context_create($opts);

var_dump($context);

$html = file_get_contents('http://localhost/Test/Server.php',false,$context);


//var_dump($http_response_header);


echo ($html);
?>