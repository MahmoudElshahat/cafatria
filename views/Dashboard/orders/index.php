<?php

require_once "../views/Dashboard/header.php";

?>

<div class="container">
  <div class="d-flex justify-content-between my-3">
    <h2>Orders</h2>
  </div>
  <div class="dropdown">
    <form action="<?php echo route('admin/orders') ?>" Method="get">
      <select name="userId" class="form-select">
        <?php foreach ($users as $user) : ?>
          <option value="<?= $user["id"] ?>"><?= $user["email"] ?></option>
        <?php endforeach ?>
      </select>
      <div>
        <input class="btn btn-success" type="submit" value="filter">
      </div>

    </form>
  </div>
  <hr>
  <table class="table table-striped table-hover table-dark ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">user</th>
        <th scope="col">Room</th>
        <th scope="col">status</th>
        <th scope="col">total price</th>
        <th scope="col">Deliverd At</th>
        <th scope="col">Options</th>
   
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($user_orders as $user_order) :
      ?>
        <tr>
          <th scope="row"><?= $user_order["ordr_id"] ?></th>
          <td><?= $user_order["email"] ?></td>
          <td><?= $user_order["room_no"] ?></td>
          <th><?= $user_order["status"] ?></th>
          <td><?= '$ ' . $user_order["total_price"] ?></td>
          <td><?= $user_order["deliverd_at"] ?></td>

          <td>
            <?php

            if ($user_order["status"] == "proceesing") :
            ?>
         
            <a class="btn btn-sm btn-danger" href="<?php route('admin/orders/cancle') ?>?id=<?php echo $user_order['ordr_id'] ?>">Cancle </a>
            <a class="btn btn-sm btn-success" href="<?php route('admin/orders/delevery') ?>?id=<?php echo $user_order['ordr_id'] ?>">Deliverd </a>

      
        <?php
            endif
        ?>
    
          <?php
          if ($user_order["status"] == "out for delivery") :
          ?>

            <a class="btn btn-primary" href="<?php route('admin/orders/done') ?>?id=<?php echo $user_order['ordr_id'] ?>">Done </a>
          <?php endif
          ?>
    

       
        <?php
        if ($user_order["status"] == "done") :
        ?>
    
        <?php
        endif
        ?>
     

        </td>
        </tr>
      <?php
      endforeach
      ?>
    </tbody>
  </table>

  <?php
  require_once "../views/Dashboard/footer.php";
  ?>