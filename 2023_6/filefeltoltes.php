<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File feltöltés</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="kep" id="kep" >
        <button> Feltölt </button>
    </form>

    <?php
    print('<pre>');
    var_dump($_GET);
    print('</pre>');

    print('<pre>');
    var_dump($_POST);
    print('</pre>');

    print('<pre>');
    var_dump($_FILES);
    print('</pre>');


    if(isset($_FILES['kep']) && $_FILES['kep']['error'] === 0){
        if(!file_exists('img')) {
            mkdir('img');
        } 
        $siker = copy($_FILES['kep']['tmp_name'], './img/'.$_FILES['kep']['name']);
        var_dump($siker);
    }
    ?>


</body>
</html>