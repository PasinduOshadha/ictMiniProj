<!doctype html>
<html lang="en">
  <head>
    <title>Booking Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- custom styles -->
    <link rel="stylesheet" href="css/booking-form.css">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

    <!-- timepicker CSS -->
    <!-- <link rel="stylesheet" href="./css/mdtimepicker.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/dmuy/MDTimePicker/mdtimepicker.css">

    <!-- datepicker -->
    <link rel="stylesheet" href="./css/mdDateTimePicker.css">
  </head>
  <body class="full-screen">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <div class="booking-header">
                        <h2 class="booking-title text-white">Book An Appointment</h2>
                        <p class="booking-desc text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, non! Excepturi, modi. Fuga, quaerat! Adipisci ut sequi, esse voluptatem quae optio laborum obcaecati natus quisquam iure! Officia expedita odio facilis.</p>
                  </div>
               </div>
          </div>
      </div>
      <div class="container-fluid pt-3 pb-4">
          <div class="row justify-content-center">
              <div class="col-md-10">
                  <div class="form-container">
                        <form id="booking-form" action="inc/book.inc.php" method="POST">
                            <div class="form-row justify-content-center">
                                <div class="col-md-12 text-center">
                                    <h2 class="booking-form-title">Booking Form</h2>
                                    <p class="booking-form-desc">Lorem ipsum, dolor sit amet<br> consectetur adipisicing elit</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile No.">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="nic" name="nic" placeholder="Your NIC">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="date" name="date" placeholder="Date" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="time" name="time" placeholder="Time" readonly>
                                </div>
                            </div>
                                <div class="w-100 text-center mt-5">
                                    <button type="submit" id ="book-now" name="book-now" class="btn btn-primary theme-btn booking-submit-btn">Book Now &nbsp;&nbsp;<i class="fas fa fa-arrow-right"></i></button>
                                </div>
                                
                              </form>
                  </div>
                
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script src="js/moment.min.js"></script>
    <!-- <script src="js/mdtimepicker.js"></script> -->
    <script src="https://cdn.jsdelivr.net/gh/dmuy/MDTimePicker/mdtimepicker.js"></script>
    <script src="js/mdDateTimePicker.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/timepicker.js"></script>
    <script src="js/main.js"></script>

    
  </body>
</html>