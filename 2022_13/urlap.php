<?php
require_once('adatok.php');
$temakorok = getTema();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        <form class="form col-md-12 center-block" action="adatmentes.php" method="POST">
            <div class="form-group">
                <label> Cím</label>
                <input type="text" class="form-control " placeholder="Cím"
                id="cim" name="cim">
            </div>
            <div class="form-group">
                <textarea class="form-control " placeholder="Rövid tartalom"
                id="rovidtartalom" name="rovidtartalom"></textarea>
            </div>
            <div class="form-group">
                <textarea class="form-control " placeholder="Tartalom"
                id="tartalom" name="tartalom"></textarea>
            </div>
            <div class="form-group">
                <label> Témakör</label>
                <select id="tema" name="tema">
                    <option value="-">Kérem válasszon</option>
                    <?php foreach ($temakorok as $tema): ?>
                        <option value="<?php echo $tema['id'] ?>"><?php  echo $tema['megnevezes']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block">Mentés</button>
            </div>
        </form>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>