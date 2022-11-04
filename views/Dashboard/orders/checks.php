<?php

require_once "../views/Dashboard/header.php";

?>
<div class="container">
  <div class="d-flex justify-content-between my-3">
    <h2>Checks</h2>
  </div>
  <hr>
  <div>
    <form action="<?php echo route('admin/userchecks') ?>" Method="POST">
      <div class="d-flex justify-content-evenly my-2">
        <div></div>
        <label>From</label>
        <input type="date" id="start" name="start" value="" min="" max="">

        <label>To</label>
        <input type="date" id="start" name="end" value="" min="" max="">
        <select name="userId" style="width:auto;" class="col-xs-2 form-select">
          <option class="" value="">select user</option>
          <?php
          foreach ($users as $user) :
          ?>

            <option class="" value="<?= $user["id"] ?>"><?= $user["email"] ?></option>
          <?php
          endforeach
          ?>
        </select>
        <input class="btn btn-success" type="submit" value="Filter">
      </div>


    </form>
  </div>

  <div class="container">
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Status</th>
          <th scope="col">total price</th>
          <th scope="col">user Id</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (isset($Orders)) :
          foreach ($Orders as $user_order) :
        ?>
            <tr>
              <td><?= $user_order["created_at"] ?></td>
              <td><?= $user_order["status"] ?></td>
              <td><?= '$ ' . $user_order["total_price"] ?></td>
              <td><?= $user_order["user_id"] ?></td>
              <td>
                <a class="btn btn-primary" href="<?php route('admin/checkDetails') ?>?userId=<?php echo $user_order["user_id"] ?>&&id=<?php echo $user_order["id"] ?>">Details</a>
                <!-- <form action="./checkDetails" method="post">
                <input type="text" name="userId" hidden value="<?= $user_order["user_id"] ?>" class="btn btn-success">
                <input type="text" name="orderId" hidden value="<?= $user_order["id"] ?>" class="btn btn-success">
                <input type="submit" value="Details" class="btn btn-success">
              </form> -->
              </td>
          <?php
          endforeach;
        endif
          ?>

      </tbody>
    </table>
  </div>
</div>




<?php
require_once "../views/Dashboard/footer.php";
?>