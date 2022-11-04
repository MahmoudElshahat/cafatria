<?php
require_once "../views/Dashboard/header.php";
?>



<div class="container">
  <div class="d-flex justify-content-between my-3">
    <h2>category Details</h2>
    <a href="./categories/add" class="btn btn-primary">Add Category</a>
  </div>
  <hr>
  <table class="table table-striped table-hover table-dark ">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col-4">Action</th>


      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($Data as $categorie) :
      ?>
        <tr>
          <th scope="row"><?php echo  $categorie["id"] ?></th>
          <td> <?php echo  $categorie["name"] ?></td>

          <td>

            <a class="btn btn-success" href="<?php route('admin/categories/edit') ?>?id=<?php echo $categorie['id'] ?>">Edit </a>
            <a class="btn btn-danger" href="<?php route('admin/categories/delete') ?>?id=<?php echo $categorie['id'] ?>">Delete </a>

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