<?php

include("connect.php");

$query = "CALL Products_byOccasion(3)";
// echo var_dump($spl);
$result = mysqli_query($con, $query); 
// echo var_dump($result);


if(mysqli_num_rows($result) >0) {
    $data = array();

    while($row = mysqli_fetch_assoc($result)) {

        $data[] = $row;
        
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- <script src="js/script.js"></script> -->


    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col">
                <div class="hero">
                    <h1>WEDDING</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet.</p>
                    <button>SHOP NOW</button>
                </div>
            </div>
        </div><!-- / hero image -->
    </div>


    <div class="container">
        <div class="row menu_wrapper mb-5">
            <div class="col-lg-3 col-md-6 menu">
                <a href="index.php">All Product</a>
            </div>
            <div class="col-lg-3 col-md-6 menu">
                <a href="valentine.php">Valentine</a>
            </div>
            <div class="col-lg-3 col-md-6 menu">
                <a href="birthday.php">Birthday</a>
            </div>
            <div class="col-lg-3 col-md-6 menu">
                <a href="wedding.php">Wedding</a>
            </div>
        </div>

        <div class="row">
            <?php foreach($data as $weddingData) {?>
            <div class="col-lg-3 col-md-6">
                <div class="item_wrapper">
                    <div class="img_wrapper">
                        <img src="<?php echo $weddingData['img1'] ?>" alt="">
                        <img src="<?php echo $weddingData['img2'] ?>" alt="" class="active">
                    </div>
                    <div class="name"><?php echo $weddingData['product_name'] ?></div>
                    <div class="price">Price : <?php echo $weddingData['price'] ?></div>
                    <div id="rating<?php echo $weddingData['id'] ?>"></div>
                    <button class="cart_button">Add Cart</button>
                </div>
            </div>
            <?php } ?>



        </div>
    </div>
</body>

<script>
    
<?php foreach($data as $weddingData) {?>
    var ratingStar = '';
    for (let i = 0; i < <?php echo $weddingData['rating'] ?>; i++) {
        ratingStar += '<span class="fa fa-star checked"></span>';
    }

    document.getElementById("rating" + <?php echo $weddingData['id'] ?>).innerHTML = "Rating : " + <?php echo $weddingData['rating'] ?> + ratingStar;

<?php } ?>


</script>
</html>