<?php
require_once "../views/Dashboard/header.php";
?>

<div class="container">
  <div class="d-flex justify-content-between my-3">
    <h2>Products Details</h2>
    <a href="./products/add" class="btn btn-primary">ADD Product</a>

  </div>
  <hr>
  <table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">image</th>
        <th scope="col">Categories</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($products as $product) :
      ?>
        <tr>
          <th scope="row"><?php echo  $product["id"] ?></th>
          <td> <?php echo  $product["pName"] ?></td>
          <td><?php echo  $product["price"] ?></td>
          <td><img src="<?php echo assets("assets/images/" . $product['image']) ?>" alt="product image" class="w-10 img-fluid"></td>
          <td><?php echo  $product["cName"] ?></td>
          <td>
            <a class="btn btn-success" href="<?php route('admin/products/edit') ?>?id=<?php echo $product['id'] ?>">Edit </a>
            <a class="btn btn-danger" href="<?php route('admin/products/delete') ?>?id=<?php echo $product['id'] ?>">Delete </a>
          </td>

        </tr>
      <?php
      endforeach
      ?>
    </tbody>
  </table>

</div>
<?php
require_once "../views/Dashboard/footer.php";
?>