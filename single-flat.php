<?php
  require "global/DBOperations.php";
  // For Title In Header
  $PageName = $lang['HotelName'] . ' | ' . $lang['HomePage'];
  // For Body Name
  $Page = 'flatPage';
  require 'global/header.php';
  ?>


    <section class="single-flat text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>
                        Floor:
                        <span>1</span>
                        - Flat:
                        <span>07</span>
                    </h1>
                    <ul class="list-unstyled lh-base">
                        <li class="d-flex justify-content-between py-2">
                            <span>
                                <i class="fa-solid fa-binoculars fa-fw"></i> Title
                            </span>
                            <span>Value</span>
                        </li>
                        <li class="d-flex justify-content-between py-2">
                            <span>
                                <i class="fa-solid fa-house fa-fw"></i> Title
                            </span>
                            <span>Value</span>
                        </li>
                        <li class="d-flex justify-content-between py-2">
                            <span>
                                <i class="fa-solid fa-bed fa-fw"></i> Title
                            </span>
                            <span>Value</span>
                        </li>
                        <li class="d-flex justify-content-between py-2">
                            <span>
                                <i class="fa-solid fa-dollar-sign fa-fw"></i> Title
                            </span>
                            <span>Value</span>
                        </li>
                        <li class="d-flex justify-content-between py-2">
                            <span>
                                <i class="fa fa-star text-light"></i> Title
                            </span>
                            <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="This flat was rated by '07' people">Value</span>
                        </li>
                    </ul>
                    <div class="thumbnails" id="thumbnails">
                        <h2 class="h5">Thumbnails Image</h2>
                        <div class="row g-1">
                            <div class="col-md-4">
                                <img src="photos/hotel1.jpg" alt="img" class="img-fluid active">
                            </div>
                            <div class="col-md-4">
                                <img src="photos/hotel2.jpg" alt="img" class="img-fluid">
                            </div>
                            <div class="col-md-4">
                                <img src="photos/hotel3.jpg" alt="img" class="img-fluid">
                            </div>
                            <div class="col-md-4">
                                <img src="photos/hotel1.jpg" alt="img" class="img-fluid">
                            </div>
                            <div class="col-md-4">
                                <img src="photos/hotel1.jpg" alt="img" class="img-fluid">
                            </div>
                            <div class="col-md-4">
                                <img src="photos/hotel1.jpg" alt="img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="main-image">
                        <img src="photos/hotel1.jpg" id="big-image" alt="Main Image" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mt-5">Booking Now</h2>
                    <div id='calendar'></div>
                </div>
                <div class="col-md-6">
                    <form action="" class="d-none" id="bookingForm">
                        <h2 class="my-5">Booking Info</h2>
                        <input type="text" placeholder="Fill Info">
                        <p>All input ..</p>
                        <button>Booking</button>
                    </form>
                </div>
            </div>

            <script>

                document.addEventListener('DOMContentLoaded', function() {
                    var calendarEl = document.getElementById('calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth',
                        selectable: true,
                        dateClick: function(info) {
                            console.log('clicked ' + info.dateStr);
                        },
                        select: function(info) {
                            booking(info)
                        },
                        validRange: function(nowDate) {
                            return {start: nowDate}
                        },
                    });
                    calendar.render();
                });


                function booking (data) {
                    $("#bookingForm").removeClass('d-none')
                    console.log('selected ' + data.startStr + ' to ' + data.endStr);
                }

            </script>

            

        </div>
    </section>


  <!-- Start Section -->
  <section class="SectionAbout text-center py-4">
    <div class="container">
      <h1 class="pb-2"><?php echo $lang['AboutHotel'] ?></h1>
      <div class="row">
        <div class="col">
            <p class="lead"><?php echo $lang['About'] ?></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section -->

  <?php
    require 'global/footer.php';
  ?>