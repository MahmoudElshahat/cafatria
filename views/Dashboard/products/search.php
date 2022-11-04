<?php 
require_once "../views/Dashboard/header.php";

?>
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
<?php
require_once "../views/Dashboard/footer.php";

?>



