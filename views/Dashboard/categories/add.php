
<?php
require_once "../views/Dashboard/header.php";
?>
<div class="container">
  <section>
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-11 ">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Category</p>
                  <form action="./store" Method="post" class="mx-1 mx-md-4" enctype="multipart/form-data">
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Name</label>
                        <input type="text" name="name" value="" id="form3Example1c" class="form-control" />
                      </div>
                    </div>
                    <!-- <label class="form-label" for="form3Example4c">Categories</label> -->
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" class="btn btn-success  form-control w-50">
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