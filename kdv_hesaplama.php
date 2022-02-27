<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    

    <div class="row">
            <div class="col-md-4">
                        <form>
                                <div class="mb-3">
                                    <label for="urun_adet" class="form-label">Ürün Adet</label>
                                    <input type="text" name="urun_adet" class="form-control" id="urun_adet">
                                </div>
                                <div class="mb-3">
                                    <label for="urun_fiyat" class="form-label">Ürün Fiyat</label>
                                    <input type="text" name="urun_fiyat" class="form-control" id="urun_fiyat">
                                </div>
                                <div class="mb-3">
                                    <label for="urun_kdv" class="form-label">Ürün Kdv</label>
                                    <input type="text" name="urun_kdv" class="form-control" id="urun_kdv">
                                </div>
                                <button type="submit" class="btn btn-primary" name="hesapla">Hesapla</button>
                        </form>
            </div>

    </div>
   

    <?php
    /*
    $urun_adet = 2;
    $urun_fiyat = 20.99;
    $urun_kdv = 18;

    $fiyat = $urun_fiyat * $urun_adet;
    $toplam = $fiyat + $fiyat * ($urun_kdv/100);
    echo "KDV dahil $toplam TL";
    */

    if(isset($_POST['hesapla'])) {
        
        $a = $_POST['urun_adet'];
        echo $a;
    }

    
?>



<div class="col-md-8">
                    <div class="card" style="width: 18rem;">
                            <div class="card-header">
                            Urun adet : <?php echo $a; ?>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                            </ul>
                    </div>
            </div>





<!-- Bootstrapt js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>