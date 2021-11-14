<?php
if(isset($_POST['base_enkripsi']) && $_POST['base_enkripsi'] != null){
    $base_enkripsi = $_POST['base_enkripsi'];
    $result = "Hasil enkripsi : ". base64_encode($base_enkripsi);
    echo"<script>alert('".$result."')</script>";
}elseif(isset($_POST['base_dekripsi']) && $_POST['base_dekripsi'] != null){
    $base_dekripsi = $_POST['base_dekripsi'];
    $result = "Hasil dekripsi : ".  base64_decode($base_dekripsi);
    echo"<script>alert('".$result."')</script>";
}
?>
<!doctype HTML>
<html>
    <head>
        <title>Enkripsi Dan Dekripsi</title>
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <form method="post" id="form1" target="_self">
            <div class="row">
            <p><label for="base_enkripsi">Base 64 Enkripsi</label></p>
                    <div class="col-md-8 mt-2">
                        <div class="form-group form-group-custom mb-4">
                            <input type="text" class="form-control" id="base_enkripsi" name="base_enkripsi" >
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="form-group form-group-custom mb-4">
                            <button type="submit" class="btn btn-primary">Enkripsi</button>
                        </div>
                    </div>
            </div>
            <div class="row">
            <p><label for="base_dekripsi">Base 64 Dekripsi</label></p>
                    <div class="col-md-8 mt-2">
                        <div class="form-group form-group-custom mb-4">
                            <input type="text" class="form-control" id="base_dekripsi" name="base_dekripsi" >
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="form-group form-group-custom mb-4">
                            <button type="submit" class="btn btn-primary">Dekripsi</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </body>
</html>