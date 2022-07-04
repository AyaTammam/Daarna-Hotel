<?php
  require "global/DBOperations.php";
  // For Title In Header
  $PageName = $lang['Flat'];
  // For Body Name
  $Page = 'flatPage';
  require 'global/header.php';
  // if (COUNT($_SESSION) > 0)
  // {
  //   if (isset($_SESSION['AdminId']))
  //   {
  //     ?>
      <!-- Start Breadcrumb -->
      <!-- <nav class="p-2 mb-4 rounded navBredcrumb" aria-label="breadcrumb">
        <div class="container">
          <ol class="breadcrumb my-3">
            <li class="breadcrumb-item"><a class="breadcrumb-link fw-bold text-decoration-none text-uppercase" href="cpanel/admin/index.php"><?php echo $lang['ControlPanel']; ?></a></li>
            <li class="breadcrumb-item breadcrumb-link fw-bold text-decoration-none text-uppercase active" aria-current="page"><?php echo $lang['FlatData']; ?></li>
          </ol>
        </div>
      </nav> -->
      <!-- End Breadcrumb -->
      <?php
    // }
    // elseif (isset($_SESSION['ReceptionId'])) 
    // {
    //   ?>
      <!-- Start Breadcrumb -->
      <!-- <nav class="p-2 mb-4 rounded navBredcrumb" aria-label="breadcrumb">
        <div class="container">
          <ol class="breadcrumb my-3">
            <li class="breadcrumb-item"><a class="breadcrumb-link fw-bold text-decoration-none text-uppercase" href="cpanel/reception/index.php"><?php echo $lang['ControlPanel']; ?></a></li>
            <li class="breadcrumb-item breadcrumb-link fw-bold text-decoration-none text-uppercase active" aria-current="page"><?php echo $lang['FlatData']; ?></li>
          </ol>
        </div>
      </nav> -->
      <!-- End Breadcrumb -->
      <?php
    // }
    // else
    // {
      ?>
      <!-- Start Breadcrumb -->
      <!-- <nav class="p-2 mb-4 rounded navBredcrumb" aria-label="breadcrumb">
        <div class="container">
          <ol class="breadcrumb my-3">
            <li class="breadcrumb-item"><a class="breadcrumb-link fw-bold text-decoration-none text-uppercase" href="cpanel/client/index.php"><?php echo $lang['ControlPanel']; ?></a></li>
            <li class="breadcrumb-item breadcrumb-link fw-bold text-decoration-none text-uppercase active" aria-current="page"><?php echo $lang['FlatData']; ?></li>
          </ol>
        </div>
      </nav> -->
      <!-- End Breadcrumb -->
      <?php
  //   }
  // }
  ?>
  <!-- Start Single Flat Information -->
  <section class="section-single-flat my-3">
    <div class="container">
      <h1 class="text-center mb-3">
        Floor:
        <span>1</span>
        - Flat:
        <span>07</span>
      </h1>
      <div class="row">
        <div class="col-lg-4 mb-2 mb-lg-0">
          <ul class="list-unstyled lh-base">
            <li class="d-flex justify-content-between py-2">
              <span>
                <i class="fa-solid fa-binoculars fa-fw"></i> View
              </span>
              <span>Value</span>
            </li>
            <li class="d-flex justify-content-between py-2">
              <span>
                <i class="fa-solid fa-maximize"></i>  Area
              </span>
              <span>Value</span>
            </li>
            <li class="d-flex justify-content-between py-2">
                <span>
                  <i class="fa-solid fa-house fa-fw"></i> Rooms
                </span>
                <span>Value</span>
            </li>
            <li class="d-flex justify-content-between py-2">
                <span>
                  <i class="fa-solid fa-bed fa-fw"></i> Beds
                </span>
                <span>Value</span>
            </li>
            <li class="d-flex justify-content-between py-2">
                <span>
                  <i class="fa-solid fa-dollar-sign fa-fw"></i> Price
                </span>
                <span>Value</span>
            </li>
            <li class="d-flex justify-content-between py-2">
                <span>
                  <i class="fa fa-star text-light"></i> Rate
                </span>
                <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="This flat was rated by '07' people">Value</span>
            </li>
          </ul>
          <div class="thumbnails" id="thumbnails">
            <h2 class="h5">Thumbnails Image</h2>
            <div id="flatimages">
              <img src="photos/hotel1.jpg" alt="img" class="img-fluid active p-1">
              <img src="photos/hotel1.jpg" alt="img" class="img-fluid p-1">
              <img src="photos/hotel1.jpg" alt="img" class="img-fluid p-1">
              <img src="photos/hotel1.jpg" alt="img" class="img-fluid p-1">
              <img src="photos/hotel1.jpg" alt="img" class="img-fluid p-1">
              <img src="photos/hotel1.jpg" alt="img" class="img-fluid p-1">
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="main-image">
            <img src="photos/hotel1.jpg" id="big-image" alt="Main Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Single Flat Information -->
  <!-- Start Flat Features -->
  <section class="section-flat-feature my-3">
    <div class="container">
      <h2 class="text-center mb-3"><?php echo $lang['FlatFeatures']; ?></h2>
      <?php if (COUNT($_SESSION) > 0 && isset($_SESSION['AdminId'])) 
      {
        ?>
        <!-- Start Modal For Add Featuer To Flat -->
        <button class="btn btn-success hvr-wobble-skew shadow-none BottomAddFeatuerToFlat" type="button" data-bs-toggle="modal" data-bs-target="#ComfirmAddFeatureToFlat" aria-label="<?php echo $lang['AddFeature']; ?>" data-balloon-nofocus data-balloon-pos="up"><i class="fas fa-plus"></i></button>
        <div class="modal fade ComfirmAddFeatureToFlat" id="ComfirmAddFeatureToFlat" data-bs-keyboard="false" tabindex="-1" aria-labelledby="AddFeatuerTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered flex-column justify-content-center">
            <div class="modal-content" id="AddEditFeatureTemplate">
              <div class="modal-header">
                <h5 class="modal-title" id="AddFeatuerTitle"><?php echo $lang['AddFeature']; ?></h5>
              </div>
              <div class="modal-body">
                <form class="row was-validated FormAddFeature" id="FormAddFeature">
                  <div class="col-md-6 mb-2">
                    <label for="FeatureName" class="form-label"><?php echo $lang['FeatureName']; ?></label>
                    <select class="form-select" name="FeatureName" id="FeatureName" required>
                    </select>
                  </div>
                  <div class="col-md-6 mb-2">
                    <label for="Details" class="form-label"><?php echo $lang['Details']; ?></label>
                    <select class="form-select" name="Details" id="Details" required>
                    </select>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="Quantity" class="form-label"><?php echo $lang['Quantity']; ?></label>
                    <input type="number" name="Quantity" class="form-control" id="Quantity" min="1" placeholder="1" autocomplete="off" required>
                  </div>
                  <div class="modal-footer pt-2 pb-0">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?php echo $lang['Close']; ?></button>
                    <button type="submit" class="btn btn-outline-success"><?php echo $lang['Add']; ?></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal For Add Featuer To Flat -->
        <?php
      } 
      ?>
    </div>
  </section>
  <!-- End Flat Features -->
  <!-- Start Booking Now -->
  <section class="section-booking-now my-3">
    <div class="container">
      <h2 class="text-center mb-3"><?php echo $lang['BookingNow'] ?></h2>
      <form class="settingsForm was-validated" id="bookingForm">
        <div class="row g-2">
          <?php if (true) 
          {
            // COUNT($_SESSION) == 0
            ?>
            <div class="col-md-6">
              <label for="User-Name" class="form-label"><?php echo $lang['UserName']; ?></label>
              <input type="name" name="User-Name" class="form-control" id="User-Name" placeholder="UserName" required>
            </div>
            <div class="col-md-6">
              <label for="Pass" class="form-label"><?php echo $lang['Password']; ?></label>
              <input type="password" class="form-control" name="Password" id="Pass" placeholder="Password" required>
            </div>
            <div class="col-md-6">
              <label for="Phone" class="form-label"><?php echo $lang['Phone']; ?></label>
              <input type="tel" class="form-control" name="Phone" id="Phone" pattern="[0][9][0-9]{8}" placeholder="0990416940" required>
              <a tabindex="0" role="button" class="position-absolute Phone top-0 end-0 mt-3 mx-5" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Enter a valid phone number that works on the Syrian network">
                <i class="fas fa-info-circle"></i>
              </a>
            </div>
            <div class="col-md-6">
              <label for="NationalId" class="form-label"><?php echo $lang['NationalId']; ?></label>
              <input type="number" class="form-control" name="NationalId" id="NationalId" min="11" max="11" placeholder="National Id" required>
            </div>
            <div class="col-md-6">
              <label for="Email" class="form-label"><?php echo $lang['Email']; ?></label>
              <input type="email" class="form-control" name="Email" id="Email" placeholder="Email" required>
            </div>
            <div class="col-md-6">
              <label class="form-label"><?php echo $lang['IDImage']; ?></label>
              <div class="input-group">
                <input type="file" class="form-control" name="ID" accept="image/*" id="ID" required>
                <label class="input-group-text uploadImg" for="ID"><i class="fas fa-upload" aria-hidden="true"></i></label>
              </div>
            </div>
            <?php
          } 
          ?>
          <div class="col-md-6 mb-2">
            <div id='calendar'></div>
          </div>
          <div class="col-md-6 my-auto">
            <div class="row">
              <div class="col-12 mb-md-5 mb-2">
                <label for="EntryDate" class="form-label"><?php echo $lang['EntryDate']; ?></label>
                <input type="date" class="form-control" name="EntryDate" id="EntryDate" required>
              </div>
              <div class="col-12 mt-md-5">
                <label for="ExitDate" class="form-label"><?php echo $lang['ExitDate']; ?></label>
                <input type="date" class="form-control" name="ExitDate" id="ExitDate" required>
              </div>
            </div>
          </div>
        </div>
        <div class="my-2">
          <button type="submit" class="btn btn-outline-success hvr-grow"><i class="fas fa-check-double align-middle"></i> <?php echo $lang['BookingNow']; ?></button>
        </div>
      </form>
    </div>
  </section>
  <!-- End Booking Now -->
  <!-- Start Flat Evaluation -->
  <section class="section-flat-evaluation text-center my-3">
    <div class="container">
      <h1 class="pb-2"><?php echo $lang['FlatEvaluation'] ?></h1>
      <div class="flat-evaluation" style="height: 400px !important;">
        <div class="overflow-auto" style="height: 400px !important;">
          <img src="photos/avatar01.png" alt="avatar" class="mx-auto">
          <h4 class="mt-2">User Name1</h4>
          <div class="row mw-100">
            <div class="col-md-4 mb-2">
              <div class="card mx-auto" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                    <i class="fa-regular fa-star" id="1"></i>
                    <i class="fa-regular fa-star" id="2"></i>
                    <i class="fa-regular fa-star" id="3"></i>
                    <i class="fa-regular fa-star" id="4"></i>
                    <i class="fa-regular fa-star" id="5"></i>
                  </h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card mx-auto" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                    <i class="fa-regular fa-star" id="1"></i>
                    <i class="fa-regular fa-star" id="2"></i>
                    <i class="fa-regular fa-star" id="3"></i>
                    <i class="fa-regular fa-star" id="4"></i>
                    <i class="fa-regular fa-star" id="5"></i>
                  </h6>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card mx-auto" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                    <i class="fa-regular fa-star" id="1"></i>
                    <i class="fa-regular fa-star" id="2"></i>
                    <i class="fa-regular fa-star" id="3"></i>
                    <i class="fa-regular fa-star" id="4"></i>
                    <i class="fa-regular fa-star" id="5"></i>
                  </h6>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card mx-auto" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                    <i class="fa-regular fa-star" id="1"></i>
                    <i class="fa-regular fa-star" id="2"></i>
                    <i class="fa-regular fa-star" id="3"></i>
                    <i class="fa-regular fa-star" id="4"></i>
                    <i class="fa-regular fa-star" id="5"></i>
                  </h6>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card mx-auto" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                    <i class="fa-regular fa-star" id="1"></i>
                    <i class="fa-regular fa-star" id="2"></i>
                    <i class="fa-regular fa-star" id="3"></i>
                    <i class="fa-regular fa-star" id="4"></i>
                    <i class="fa-regular fa-star" id="5"></i>
                  </h6>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Flat Evaluation -->
  <?php
    require 'global/footer.php';
  ?>