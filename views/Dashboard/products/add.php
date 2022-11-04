<?php
require_once "../views/Dashboard/header.php";
?>
<div class="container">
  <section >
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-11 ">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add product</p>

                  <form action="./store" Method="post" class="mx-1 mx-md-4" enctype="multipart/form-data">

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">

                        <label class="form-label" for="form3Example1c">Name</label>
                        <input type="text" name="name" value="" id="form3Example1c" class="form-control" />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Price</label>
                        <input type="text" name="price" value="" id="form3Example3c" class="form-control" />

                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">image</label>
                        <input type="file" name="image" id="form3Example4c" class="form-control " />

                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Categories</label>
                        <select name="categorieId" class="form-select" aria-label="Default select example">
                          <?php
                          foreach ($categoiresData as $Categorie) :
                          ?>
                            <option value="<?php echo $Categorie["id"]; ?>"><?php echo $Categorie["name"]; ?></option>
                          <?php
                          endforeach
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="d-flex justify-content-center mx-4 my-3 mb-lg-4">
                      <input type="submit" class="btn btn-primary btn-lg  form-control">
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
</div>
<?php
require_once "../views/Dashboard/footer.php";

?>