<?php
require_once "../views/Dashboard/header.php";
?>


<div class="container">
  <div class="d-flex justify-content-between my-3">
    <h2>User Details</h2>
    <a href="./users/add" class="btn btn-primary">Add User</a>

  </div>
  <hr>
  <table class="table table-striped table-hover table-dark ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">email</th>
        <th scope="col">image</th>
        <th scope="col">room</th>
        <th scope="col">ext</th>
        <th scope="col">options</th>

      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($usersData as $user) :
      ?>

        <tr>
          <th scope="row"><?php echo $user["id"] ?></th>
          <td><?php echo $user["email"] ?></td>
          <td>
            <img style="width:100px;height:100px" src="<?= assets("assets/images/" . $user["image"]) ?>" alt="user image">
          </td>
          <td><?php echo $user["room_no"] ?></td>
          <td><?php echo $user["ext"] ?></td>

          <td>
            <form action="<?php route('admin/users/delete') ?>" method="post">
              <input type="text" hidden value="<?php echo $user["id"] ?>" name="userid">
              <input type="submit" class="btn btn-danger" value="Delete" name="">
            </form>
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