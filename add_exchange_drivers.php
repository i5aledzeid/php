<?php
  include('db_conn.php');
  if (isset($_POST['submit'])) {
    $car_number = $_POST['car_number'];
    $driver_name = $_POST['driver_name'];
    $factory = $_POST['factory'];
    $car_owner = $_POST['car_owner'];
    $trip = $_POST['trip'];
    $trip_value = $_POST['trip_value'];
    $trip_total = $_POST['trip_total'];
    $diesel = $_POST['diesel'];
    $service_type = $_POST['service_type'];
    $service_value = $_POST['service_value'];
    $payload = $_POST['payload'];
    $payload_price = $_POST['payload_price'];
    $payload_total = $_POST['payload_total'];
    
    $discounts = $_POST['discounts'];
    $payments = $_POST['payments'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $week = $_POST['week'];
    
    $sql = "INSERT INTO `drivers` (`id`, `car_number`, `driver_name`, `factory`, `car_owner`, `trip`, `trip_value`, `trip_total`, `diesel`, `service_type`, `service_value`, `payload`, `payload_price`, `payload_total`, `discounts`, `payments`, `date`, `month`, `week`, `salary`, `net_salary`) VALUES(NULL, '$car_number', '$driver_name', '$factory', '$car_owner', '$trip', '$trip_value', '$trip_total', '$diesel', '$service_type', '$service_value', '$payload', '$payload_price', '$payload_total', $discounts, 0.0, 0.0, $month, $week, 0.0, 0.0)";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      header("Location: add_exchange_drivers.php?msg=NEW");
    }
    else {
      echo "Failed: " . mysqli_error($conn);
    }
  }
  //////////////// ROLE ///////////////
  session_start();
  if (isset($_SESSION['role']) && $_SESSION['role'] != 1) {
    header('location: home.php');
    die();
  }
  //////////////// ROLE ///////////////
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>صرف السائقين</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">Exchange Drivers</nav>
    <div class="container">
      
      <div class="text-center mb-4">
        <h3>إضافة فاتورة</h3>
        <p class="text-muted">أكمل البيانات التالية لإضافة فاتورة جديدة</p>
      </div><br>

      <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width: 80vw; min-width: 350px;">
          
          <div class="row">
            <div class="col">
              <label for="month" class="form-label">Month</label>
              <!--<input type="text" class="form-control" name="month" placeholder="Month" required>-->
              <select name="month" class="form-select" aria-label="Default select example" required>
                <option selected>Select month</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
            </div>
            <div class="col">
              <label for="week" class="form-label">Week</label>
              <!--<input type="text" class="form-control" name="week" placeholder="Week">-->
              <select name="week" class="form-select" aria-label="Default select example" required>
                <option selected>Select week</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div class="col">
              <label for="car_number" class="form-label">Car Number</label>
              <input type="text" class="form-control" name="car_number" placeholder="Car Number" required>
            </div>
            <div class="col">
              <label for="driver_name" class="form-label">Driver Name</label>
              <input type="text" class="form-control" name="driver_name" placeholder="Driver Name">
            </div>
            <div class="col">
              <label for="factory" class="form-label">Factory</label>
              <input type="text" class="form-control" name="factory" placeholder="Factory">
            </div>
            <div class="col">
              <label for="car_owner" class="form-label">Car Owner</label>
              <input type="text" class="form-control" name="car_owner" placeholder="Car Owner" required>
            </div>
          </div><br>

          <div class="row">
            <div class="col">
              <label for="trip" class="form-label">Trip</label>
              <input type="text" class="form-control" name="trip" id="trip" value="0" placeholder="Trip">
            </div>
            <div class="col">
              <label for="trip_value" class="form-label">Trip Value</label>
              <input type="text" class="form-control" name="trip_value" id="trip_value" value="0" onchange="findTotal()" placeholder="Trip Value">
            </div>
            <div class="col">
              <label for="trip_total" class="form-label">Trip Total</label>
              <input type="text" class="form-control" name="trip_total" id="trip_total" value="0" placeholder="Trip Total" readonly>
            </div>
            <div class="col">
              <label for="payload" class="form-label">Payload</label>
              <input type="text" class="form-control" name="payload" id="payload" value="0" placeholder="Payload">
            </div>
            <div class="col">
              <label for="payload_price" class="form-label">Payload Price</label>
              <input type="text" class="form-control" name="payload_price" value="0" id="payload_price" onchange="findPayloadTotal()" placeholder="Payload Price">
            </div>
            <div class="col">
              <label for="payload_total" class="form-label">Payload Total</label>
              <input type="text" class="form-control" name="payload_total" value="0" id="payload_total" placeholder="Payload Total" readonly>
            </div>
          </div><br>

          <div class="row">
            <div class="col-md-2">
              <label for="diesel" class="form-label">Diesel</label>
              <input type="text" class="form-control" name="diesel" value="0" placeholder="Diesel">
            </div>
            <div class="col-md-2">
              <label for="discounts" class="form-label">Discounts</label>
              <input type="text" class="form-control" name="discounts" value="0" placeholder="Discounts">
            </div>
            <div class="col-md-2">
              <label for="date" class="form-label">Date</label>
              <!--<input type="datetime" class="form-control" placeholder="<?php echo date('d-m-y H:i:s'); ?>" id="date" name="date">-->
              <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="date" name="date">
            </div>
            <div class="col">
              <label for="service_type" class="form-label">Service Type</label>
              <textarea name="service_type" class="form-control" placeholder="Service Type" cols="40" rows="3"></textarea>
            </div>
            <div class="col-md-2">
              <label for="service_value" class="form-label">Service Value</label>
              <input type="text" class="form-control" name="service_value" value="0" placeholder="Service Value">
            </div>
          </div><br>

          <div>
            <button type="submit" class="btn btn-success" name="submit">Save</button>
            <a href="view_exchange_drivers.php" class="btn btn-danger">Cancel</a>
          </div>

        </form>
      </div>
    </div>
    <script>
      function findTotal() {
        var tot = 0;
        var arr1 = document.getElementById('trip').value;
        var arr2 = document.getElementById('trip_value').value;
        tot = (arr1 * arr2);
        document.getElementById('trip_total').value = tot;
      }
      function findPayloadTotal() {
        var tot = 0;
        var arr3 = document.getElementById('payload').value;
        var arr4 = document.getElementById('payload_price').value;
        tot = (arr3 * arr4);
        document.getElementById('payload_total').value = tot;
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>