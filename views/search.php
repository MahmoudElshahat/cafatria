<?php 


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <!-- CSS only -->

    <link rel="stylesheet" href="<?php echo assets('assets/css/tooplate-wave-cafe.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo assets("assets/fontawesome/css/all.min.css")?>"> <!-- https://fontawesome.com/ -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->


</head>

<body>

    <nav id='header-nav' class="navbar navbar-expand-lg  navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Wave CAFE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                   
                    <?php if(auth()['role']){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php route('admin')?>">Dashboard</a>
                    </li>
                    <?php }else{ ?>
                         <li class="nav-item">
                         <a class="nav-link" href="./order/get">MyOrders</a>
                     </li>
                  <?php  }

                        ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="">
                            <?php echo  auth()['name']; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php route('logout') ?>" class="btn btn-danger">logout</a>
                    </li>

                </ul>


                <form class="d-flex" role="search" action="./search" method="post">
                    <input class="form-control me-2" type="search" name="search" value="" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="tm-container  d-flex justify-content-between">
        <div class="tm-row">
<div class='row d-flex g-0'>
    <?php
foreach($products as $product):
?>
<div class="col-lg-3">

    <div class="card" style="width: 13rem;">
    <img class="card-img-top" src="<?php echo assets("assets/images/$product[image]")?>" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title text-center"><?= $product["name"] ?></h5>
    </div>
    </div>

</div>




<?php 
endforeach; ?>
</div>
</div>
        </div>

</body>

</html>


