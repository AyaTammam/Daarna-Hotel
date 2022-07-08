<?php
  require "global/DBOperations.php";
  // For Title In Header
  $PageName = $lang['Flat'];
  // For Body Name
  $Page = 'flatPage';
  require 'global/header.php';
  if (substr($_SERVER['HTTP_REFERER'], 43, 10) === 'floors.php')
  {
    ?>
    <!-- Start Breadcrumb -->
    <nav class="p-2 mb-2 rounded navBredcrumb" aria-label="breadcrumb">
      <div class="container">
        <ol class="breadcrumb my-3">
          <li class="breadcrumb-item"><a class="breadcrumb-link fw-bold text-decoration-none text-uppercase" href="cpanel/admin/index.php"><?php echo $lang['ControlPanel']; ?></a></li>
          <li class="breadcrumb-item"><a class="breadcrumb-link fw-bold text-decoration-none text-uppercase" href="cpanel/admin/floors.php"><?php echo $lang['Floors']; ?></a></li>
          <li class="breadcrumb-item"><a class="breadcrumb-link fw-bold text-decoration-none text-uppercase" href="cpanel/admin/floors.php?Page=Flats&Id=<?php echo $_GET['Id']; ?>"><?php echo $lang['Floor'],' [ ', $_GET['FloorId'], ' ]'; ?></a></li>
          <li class="breadcrumb-item breadcrumb-link fw-bold text-decoration-none text-uppercase active" aria-current="page"><?php echo $lang['Flat'],' [ ', $_GET['Id'], ' ]'; ?></li>
        </ol>
      </div>
    </nav>
    <!-- End Breadcrumb -->
    <?php
  }
  else
  {
    ?>
    <!-- Start Breadcrumb -->
    <nav class="p-2 mb-4 rounded navBredcrumb" aria-label="breadcrumb">
      <div class="container">
        <ol class="breadcrumb my-3">
          <li class="breadcrumb-item"><a class="breadcrumb-link fw-bold text-decoration-none text-uppercase" href="index.php"><?php echo $lang['Home']; ?></a></li>
          <li class="breadcrumb-item breadcrumb-link fw-bold text-decoration-none text-uppercase active" aria-current="page"><?php echo $lang['Floor'],' [ ', $_GET['FloorId'], ' ]', ' | ', $lang['Flat'],' [ ', $_GET['Id'], ' ]'; ?></li>
        </ol>
      </div>
    </nav>
    <!-- End Breadcrumb -->
    <?php
  }
  ?>
  <!-- Start Single Flat Information -->
  <section class="section-single-flat my-3">
    <div class="container">
      <h1 class="text-center mb-3"><?php echo $lang['FlatInformation']; ?></h1>
      <div class="row">
        <div class="col-lg-4 mb-2 mb-lg-0">
          <div class="row">
            <div class="col-6">
              <h4><?php echo $lang['FlatInfo']; ?></h4>
            </div>
            <div class="col-6">
              <a class="EditFlatInfo text-success" id="EditFlatInfo" role="botton" aria-label="<?php echo $lang['Edit']; ?>" data-balloon-nofocus data-balloon-pos="up"><i class="fas fa-edit fa-fw"></i></a>
            </div>
            <div class="col-6 d-flex justify-content-end d-none align-items-center fs-5">
              <a class="save text-success me-2" id="save" role="botton" aria-label="<?php echo $lang['Save']; ?>" data-balloon-nofocus data-balloon-pos="up"><i class="fa-solid fa-check fa-fw"></i></a>
              <a class="Cancel text-danger" id="Cancel" role="botton" aria-label="<?php echo $lang['Cancel']; ?>" data-balloon-nofocus data-balloon-pos="up"><i class="fa-solid fa-xmark fa-fw"></i></a>
            </div>
            <div class="col-6 bgDark">
              <div class="p-1 d-flex align-items-center">
                <i class="fa-solid fa-stairs fa-fw me-2"></i>
                <span class="ms-5">05</span>
                <select class="form-select form-select-sm shadow-none d-none" name="Floor" id="Floor">
                  <option value="North"><?php echo $lang['North']; ?></option>
                  <option value="East"><?php echo $lang['East']; ?></option>
                  <option value="South"><?php echo $lang['South']; ?></option>
                  <option value="West"><?php echo $lang['West']; ?></option>
                  <option value="NorthEast"><?php echo $lang['NorthEast']; ?></option>
                  <option value="EastSouth"><?php echo $lang['EastSouth']; ?></option>
                  <option value="SouthWest"><?php echo $lang['SouthWest']; ?></option>
                  <option value="WestNorth"><?php echo $lang['WestNorth']; ?></option>
                </select>
              </div>
            </div>
            <div class="col-6 bgDark">
              <div class="p-1 d-flex align-items-center">
                <i class="fa-solid fa-door-closed fa-fw me-2"></i>
                <span class="ms-5">05</span>
                <input type="number" name="Flat" class="form-control form-control-sm shadow-none d-none" id="Flat" min="1" placeholder="1" autocomplete="off">
              </div>
            </div>
            <div class="col-6">
              <div class="p-1 d-flex align-items-center">
                <i class="fa-solid fa-binoculars fa-fw me-2"></i>
                <span class="ms-5">SouthWest</span>
                <select class="form-select form-select-sm shadow-none d-none" name="View" id="View">
                  <option value="North"><?php echo $lang['North']; ?></option>
                  <option value="East"><?php echo $lang['East']; ?></option>
                  <option value="South"><?php echo $lang['South']; ?></option>
                  <option value="West"><?php echo $lang['West']; ?></option>
                  <option value="NorthEast"><?php echo $lang['NorthEast']; ?></option>
                  <option value="EastSouth"><?php echo $lang['EastSouth']; ?></option>
                  <option value="SouthWest"><?php echo $lang['SouthWest']; ?></option>
                  <option value="WestNorth"><?php echo $lang['WestNorth']; ?></option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="p-1 d-flex align-items-center">
                <i class="fa-solid fa-maximize fa-fw me-2"></i>
                <span class="ms-5">05</span>
                <input type="number" name="Area" class="form-control form-control-sm shadow-none d-none" id="FlatArea" min="1" placeholder="m&sup2" autocomplete="off">
              </div>
            </div>
            <div class="col-6 bgDark">
              <div class="p-1">
                <i class="fa-solid fa-house fa-fw"></i>
                <span class="ms-5">05</span>
              </div>
            </div>
            <div class="col-6 bgDark">
              <div class="p-1">
                <i class="fa-solid fa-bed fa-fw"></i>
                <span class="ms-5">05</span>
              </div>
            </div>
            <div class="col-6">
              <div class="p-1">
                <i class="fa-solid fa-bath fa-fw"></i>
                <span class="ms-5">05</span>
              </div>
            </div>
            <div class="col-6">
              <div class="p-1">
                <i class="fa-solid fa-dollar-sign fa-fw"></i>
                <span class="ms-5">05</span>
              </div>
            </div>
            <div class="col-6 bgDark">
              <div class="p-1">
                <i class="fa fa-star text-light fa-fw"></i>
                <span class="ms-5">Rate</span>
              </div>
            </div>
            <div class="col-6 bgDark">
              <div class="p-1">
                <i class="fa-regular fa-star" id="1"></i>
                <i class="fa-regular fa-star" id="2"></i>
                <i class="fa-regular fa-star" id="3"></i>
                <i class="fa-regular fa-star" id="4"></i>
                <i class="fa-regular fa-star" id="5"></i>
              </div>
            </div>
            <div class="col-6">
              <h4 class="p-1 mt-2"><?php echo $lang['FlatImages']; ?></h4>
            </div>
            <div class="col-6 mt-2 d-flex align-items-center">
              <input type="file" class="form-control shadow-none" name="FlatImages[]" accept="image/webp" id="FlatImages" multiple hidden>
              <a class="AddImages text-success" id="AddImagesForFlat" role="botton" aria-label="<?php echo $lang['Add']; ?>" data-balloon-nofocus data-balloon-pos="up"><i class="fa-solid fa-cloud-arrow-up fa-fw fs-4"></i></a>
            </div>
          </div>
          <div id="flatimages">
            <div class="containerMainImageAndDelete position-relative" id="2">
              <img class="img-fluid" src="photos/hotel1.jpg" />
              <div class="MainImage position-absolute bottom-0 start-0 p-2"><i class="fa-solid fa-house fa-fw"></i></div>
              <div class="EditMainImg position-absolute bottom-0 end-0 text-center">
                <input type="file" class="form-control shadow-none" name="FlatMainImage" accept="image/webp" id="FlatMainImage" hidden>
                <button type="button" class="btn text-success shadow-none" id="EditFlatMainImage" aria-label="<?php echo $lang['Edit']; ?>" data-balloon-nofocus data-balloon-pos="up"><i class="fas fa-edit fa-fw"></i></button>
              </div>
            </div>
            <div class="containerImageAndDelete p-1 position-relative" id="1">
              <img class="img-fluid active" src="photos/hotel1.jpg" />
              <div class="RemoveImgFromFlat position-absolute bottom-0 end-0 text-center">
                <button type="button" class="btn text-danger shadow-none" id="removeFlatImage" data-bs-toggle="modal" data-bs-target="#confirmTheDelete" aria-label="<?php echo $lang['Delete']; ?>" data-balloon-nofocus data-balloon-pos="up"><i class="fa-solid fa-trash fa-fw"></i></button>
              </div>
            </div>
            <div class="containerImageAndDelete p-1 position-relative" id="1">
              <img class="img-fluid" src="photos/hotel1.jpg" />
              <div class="RemoveImgFromFlat position-absolute bottom-0 end-0 text-center">
                <button type="button" class="btn text-danger shadow-none" id="removeFlatImage" data-bs-toggle="modal" data-bs-target="#confirmTheDelete" aria-label="<?php echo $lang['Delete']; ?>" data-balloon-nofocus data-balloon-pos="up"><i class="fa-solid fa-trash fa-fw"></i></button>
              </div>
            </div>
            <div class="containerImageAndDelete p-1 position-relative" id="1">
              <img class="img-fluid" src="photos/hotel1.jpg" />
              <div class="RemoveImgFromFlat position-absolute bottom-0 end-0 text-center">
                <button type="button" class="btn text-danger shadow-none" id="removeFlatImage" data-bs-toggle="modal" data-bs-target="#confirmTheDelete" aria-label="<?php echo $lang['Delete']; ?>" data-balloon-nofocus data-balloon-pos="up"><i class="fa-solid fa-trash fa-fw"></i></button>
              </div>
            </div>
            <div class="containerImageAndDelete p-1 position-relative" id="1">
              <img class="img-fluid" src="photos/hotel1.jpg" />
              <div class="RemoveImgFromFlat position-absolute bottom-0 end-0 text-center">
                <button type="button" class="btn text-danger shadow-none" id="removeFlatImage" data-bs-toggle="modal" data-bs-target="#confirmTheDelete" aria-label="<?php echo $lang['Delete']; ?>" data-balloon-nofocus data-balloon-pos="up"><i class="fa-solid fa-trash fa-fw"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="main-image">
            <img src="photos/hotel1.jpg" id="big-image" alt="Main Image" class="img-fluid">
          </div>
        </div>
      </div>
      <!-- Start Modal For Delete -->
      <div class="modal fade" id="confirmTheDelete" data-bs-keyboard="false" tabindex="-1" aria-labelledby="WarningTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-warning" id="WarningTitle"><i class="fas fa-exclamation me-2 fs-5"></i><?php echo $lang['Warning']; ?></h5>
            </div>
            <div class="modal-body">
              <div class="d-flex align-items-center" role="alert">
                <svg class="mx-2 text-warning" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <div class="content">
                  <?php echo $lang['Warning:AreYouSureAboutThat']; ?>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?php echo $lang['Close']; ?></button>
              <button type="button" class="btn btn-outline-danger" id="ButtonRemoveFlatImage" data-bs-dismiss="modal"><?php echo $lang['Delete']; ?></button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal For Delete -->
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
      <h2 class="h1 text-center mb-3"><?php echo $lang['BookingNow'] ?></h2>
      <form class="bookingForm was-validated" id="bookingForm">
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
                <input type="date" class="form-control" name="EntryDate" id="EntryDate" onclick="this.min=new Date(Date.now() + 6.048e+8 ).toISOString().split('T')[0], this.showPicker()" required>
              </div>
              <div class="col-12 my-md-5 mb-2">
                <label for="ExitDate" class="form-label"><?php echo $lang['ExitDate']; ?></label>
                <input type="date" class="form-control" name="ExitDate" id="ExitDate" onclick="this.showPicker()" required>
              </div>
              <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-success hvr-grow"><i class="fas fa-check-double align-middle"></i> <?php echo $lang['BookingNow']; ?></button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- End Booking Now -->
  <!-- Start Flat Evaluation -->
  <section class="section-flat-evaluation text-center my-3">
    <div class="container">
      <h2 class="mb-3"><?php echo $lang['FlatRates'] ?></h2>
      <div class="flat-evaluation" style="height: 400px !important;">
        <div class="overflow-auto" style="height: 400px !important;">
          <img src="photos/avatar01.png" alt="avatar" class="mx-auto rounded-circle img-fluid h-25">
          <h4 class="mt-2">User Name1</h4>
          <div class="row mw-100">
            <div class="col-md-6 col-lg-4 mb-2">
              <div class="card mx-auto" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                    <i class="fa-regular fa-star" id="1"></i>
                    <i class="fa-regular fa-star" id="2"></i>
                    <i class="fa-regular fa-star" id="3"></i>
                    <i class="fa-regular fa-star" id="4"></i>
                    <i class="fa-regular fa-star" id="5"></i>
                  </h6>
                  <p class="card-text">Some quick example text to build on the card title 
                    <span id="dots">...</span>
                    <span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>
                    <a id="btnReadMore"><?php echo $lang['ReadMore']; ?></a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-2">
              <div class="card mx-auto" style="width: 18rem;">
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
            <div class="col-md-6 col-lg-4 mb-2">
              <div class="card mx-auto" style="width: 18rem;">
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
            <div class="col-md-6 col-lg-4 mb-2">
              <div class="card mx-auto" style="width: 18rem;">
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
            <div class="col-md-6 col-lg-4 mb-2">
              <div class="card mx-auto" style="width: 18rem;">
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