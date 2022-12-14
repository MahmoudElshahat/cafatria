<?php

require_once "../views/Dashboard/header.php";

?>
<h3>orders Details</h3>
<div class="dropdown">

   <form action="<?php echo route('admin/orders/userorder')?>" Method="post">
   <select name="userId" class="form-select">
   
        <?php 
          foreach($users as $user):
           
        ?>

          <option value="<?=$user["id"]?>"><?=$user["email"]?></option>
        <?php 
          endforeach
        ?>
       </select>
       <input class="btn btn-primary" type="submit" value="Go">
  </form>
</div>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">user</th>
      <th scope="col">Room</th>
      <!-- <th scope="col">order ID</th> -->
      <th scope="col">status</th>
      <th scope="col">total price</th>
      <th scope="col">Deliverd At</th>
      <th scope="col"></th>
      <th scope="col">Options</th>
      <th scope="col"></th>
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
        <td>
        <a class="btn btn-primary"  href="<?php route('admin/orders/cancle')?>?id=<?php echo $user_order['ordr_id']?>">Cancle </a>

        </td>
        <td>
        <a class="btn btn-primary"  href="<?php route('admin/orders/delevery')?>?id=<?php echo $user_order['ordr_id']?>">Deliverd </a>

        </td>
      <?php
          endif
      ?>
      <td>
        <?php
        if ($user_order["status"] == "out for delivery") :
        ?>
    
    <a class="btn btn-primary"  href="<?php route('admin/orders/done')?>?id=<?php echo $user_order['ordr_id']?>">Done </a>
    <?php    endif
        ?>
      </td>

      <!-- <td>
        <?php
        if ($user_order["status"]=="done") :
        ?>
          <form action="./orders/delete" method="post">
            <input type="text" hidden name="id" value="<?= $user_order["ordr_id"] ?>">
            <input type="submit" class="btn btn-danger" value="Delete">
          </form>
        <?php
        endif
        ?>
      </td> -->

      </td>
      </tr>
    <?php
    endforeach
    ?>
  </tbody>
</table>
<!-- <table class="table table-striped table-dark"> -->
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">product</th>
      <th scope="col">quntity</th>
      <!-- <th scope="col">order ID</th> -->
      <th scope="col">price</th>
      <th scope="col">total price</th>
      <th scope="col">Deliverd At</th>
      <th scope="col"></th>
      <th scope="col">Options</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($user_orders as $user_order) :
    ?>
      <tr>
        <th scope="row"></th>
        <td><?= $user_order["name"] ?></td>
        <td><?= $user_order["quantity"] ?></td>
        <th><?= $user_order["price"] ?></th>
        <td><?= '$ ' . $user_order["total_price"] ?></td>
        <td><?= $user_order["deliverd_at"] ?></td>
        <td></td>
        <td></td>
        <td></td>

        
<?php 
endforeach
?>
  </tbody>
</table>





<?php
require_once "../views/Dashboard/footer.php";
?>