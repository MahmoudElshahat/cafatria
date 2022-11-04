<?php
require_once "../views/Dashboard/header.php";
?>

<section>
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body py-3">
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <p class="h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Edit Category</p>
                <form action="./update" Method="post" class="mx-1 mx-md-4">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label">Name</label>
                      <input type="text" name="name" value="<?= $categorie["name"] ?>" id="form3Example1c" class="form-control" />
                      <input type="text" hidden name="id" value="<?= $categorie["id"] ?>" id="form3Example1c" class="form-control" />

                    </div>
                  </div>
                  </select>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-success form-control w-50" >
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once "../views/Dashboard/footer.php";

?>