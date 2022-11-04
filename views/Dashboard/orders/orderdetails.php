<?php

require_once "../views/Dashboard/header.php";

?>

<div class="container" style="margin-top: 50px">
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">product Name</th>
        <th scope="col">image</th>
        <th scope="col">price</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (isset($orderDetail)) :
        foreach ($orderDetail as $user_order) :
      ?>
          <tr>
            <td><?= $user_order["name"] ?></td>
            <td><img src="../public/assets/images/<?= $user_order["image"] ?>"></td>
            <td><?= '$ ' . $user_order["price"] ?></td>
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