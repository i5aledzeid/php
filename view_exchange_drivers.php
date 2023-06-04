<?php
    session_start();
    include('db_conn.php');
    if (isset($_POST['submit'])) {
        $car_number = $_POST['car_number'];
        $driver_name = $_POST['driver_name'];
        $factory = $_POST['factory'];
        $car_owner = $_POST['car_owner'];
        $trip = $_POST['trip'];
        $trip_value = $_POST['trip_value'];
        $trip_total = $_POST['trip_total'];
        $sql = "INSERT INTO `drivers` (`id`, `car_number`, `driver_name`, `factory`, `car_owner`, `trip`, `trip_value`, `trip_total`) VALUES(NULL, '$car_number', '$driver_name', '$factory', '$car_owner', '$trip', '$trip_value', '$trip_total')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          header("Location: home.php?msg=NEW");
        }
        else {
          echo "Failed: " . mysqli_error($conn);
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>صرف السائقين - إصافة فاتورة</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            direction: rtl;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">صرف السائقين</nav>
    <div class="container">
        <a href="home.php" class="btn btn-dark mb-3">الرئيسية</a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
</svg>
        <a href="add_exchange_drivers.php" class="btn btn-dark mb-3">إضافة فاتورة</a>
        <!--<a href="report_exchange_drivers.php" class="btn btn-dark mb-3">عرض تقارير</a>-->
        <a href="works.php" class="btn btn-dark mb-3">عرض تقارير</a>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col-6">رقم السيارة</th>
                    <th scope="col">المصنع</th>
                    <th scope="col">صاحب السيارة</th>
                    <th scope="col">إسم السائق</th>
                    <th scope="col">الترب</th>
                    <th scope="col">قيمة الترب</th>
                    <th scope="col">اإجمالي الترب</th>
                    <th scope="col">ديزل</th>
                    <th scope="col">نوع الخدمة</th>
                    <th scope="col">قيمة الخدمة</th>
                    <th scope="col">الحمولة</th>
                    <th scope="col">سعر الحمولة</th>
                    <th scope="col">إجمالي الحمولة</th>
                    <th scope="col">الخصومات</th>
                    <!--<th scope="col">Payments</th>
                    <th scope="col">Date</th>
                    <th scope="col">Month</th>
                    <th scope="col">Week</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Net Salary</th>-->
                    <!-- //////////////// ROLE /////////////// -->
                            <?php
                            if ($_SESSION['role'] == 1) {
                                echo '
                                    <th scope="col" style="width: 10%;">العمليات</th>
                                ';
                            }
                            else if ($_SESSION['role'] == 2) {
                                echo '
                                    <th>
                                    </th>
                                ';
                            }
                            ?>
                            <!-- //////////////// ROLE /////////////// -->
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    include('db_conn.php');
                    $sql = "SELECT * FROM `drivers`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['car_number']; ?></td>
                            <td><?php echo $row['factory']; ?></td>
                            <td><?php echo $row['car_owner']; ?></td>
                            <td><?php echo $row['driver_name']; ?></td>
                            <td><?php echo $row['trip']; ?></td>
                            <td><?php echo $row['trip_value']; ?></td>
                            <td><?php echo $row['trip_total']; ?></td>
                            <td><?php echo $row['diesel']; ?></td>
                            <td><?php echo $row['service_type']; ?></td>
                            <td><?php echo $row['service_value']; ?></td>
                            <td><?php echo $row['payload']; ?></td>
                            <td><?php echo $row['payload_price']; ?></td>
                            <td><?php echo $row['payload_total']; ?></td>
                            <td><?php echo $row['discounts']; ?></td>
                            <!-- //////////////// ROLE /////////////// -->
                            <?php
                            if ($_SESSION['role'] == 1) {
                                echo '
                                    <td>
                                        <a href="#" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                        <a href="#" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                                    </td>
                                ';
                            }
                            else if ($_SESSION['role'] == 2) {
                                echo '
                                    <td>
                                    </td>
                                ';
                            }
                            ?>
                            <!-- //////////////// ROLE /////////////// -->
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
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