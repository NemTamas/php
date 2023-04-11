<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

<?php
$orszagok = ['HU', 'EN', 'US', 'AT'];
$kivalasztott = 'AT';



?>

<form method="post">
<select name="orszag" id="orszag">
<?php
    foreach($orszagok as $orszag):
?>
<option value="<?php print($orszag) ?>"<?php echo $orszag==$kivalasztott ? 'selected' :''; ?>></option>
<?php
endforeach;
?>
</select>
</form>

<button>Ment</button>

    </form>
</body>
</html>