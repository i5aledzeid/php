<?php 
// session_start();
// if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
require_once('db_conn.php');
require_once('database/functions.php');
// $result = display_data();
$result = display_sum_data();
$results = display_sum_where_data();
$resultss = display_sums_where_data();
$resultsss = display_sumss_where_data();
$resultssss = display_sumsss_where_data();
$result_ = display_sum_where_date(/*'diesel', 'drivers', 1, 2*/);

$payload_total1 = display_sum_where_data_payload_total();
$payload_total2 = display_sums_where_data_payload_total();
$payload_total3 = display_sumss_where_data_payload_total();
$payload_total4 = display_sumsss_where_data_payload_total();

$diesel1 = display_sum_where_data_diesel();
$diesel2 = display_sums_where_data_diesel();
$diesel3 = display_sumss_where_data_diesel();
$diesel4 = display_sumsss_where_data_diesel();

$trip_total1 = display_sum_where_data_trip_total();
$trip_total2 = display_sums_where_data_trip_total();
$trip_total3 = display_sumss_where_data_trip_total();
$trip_total4 = display_sumsss_where_data_trip_total();

$discounts1 = display_sum_where_data_discounts();
$discounts2 = display_sums_where_data_discounts();
$discounts3 = display_sumss_where_data_discounts();
$discounts4 = display_sumsss_where_data_discounts();

$total1 = display_sum_where_data_total();
$total2 = display_sums_where_data_total();
$total3 = display_sumss_where_data_total();
$total4 = display_sumsss_where_data_total();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exchange Drivers</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <!--<link rel="stylesheet" type="text/css" href="assets/css/style-drivers.css">-->
    <link rel="stylesheet" type="text/css" href="assets/css/style-workss.css">
        <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="tab-container">
        <div class="title">
            <!-- Tooltip -->
            <a href="home.php" class="hint-link" style="text-decoration: none;" placeholder="dddddd">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                </svg>
                <span id="tooltip">العودة للصفحة الرئيسية</span>
                <script>
                    var spanText = document.getElementById('tooltip');
                    window.onmousemove = function(e) {
                        var x = e.clientX,
                            y = e.clientY;
                        spanText.style.top = (y + 20) + 'px';
                        spanText.style.left = (x + 20) + 'px';
                    }
                </script>
            </a>
            تقرير سنة <?php echo date("Y"); ?>
        </div>
        <div class="tab-box">
            <button class="tab-button">شهر 1</button>
            <button class="tab-button">شهر 2</button>
            <button class="tab-button">شهر 3</button>
            <button class="tab-button">شهر 4</button>
            <button class="tab-button">شهر 5</button>
            <button class="tab-button">شهر 6</button>
            <button class="tab-button">شهر 7</button>
            <button class="tab-button">شهر 8</button>
            <button class="tab-button">شهر 9</button>
            <button class="tab-button">شهر 10</button>
            <button class="tab-button">شهر 11</button>
            <button class="tab-button active">شهر 12</button>
            <div class="line"></div>
        </div>
        <div class="content-box">
            <div class="content active">
                <h2>شهر 1</h2>
                <p>Lorem ima, iscipit nihil eius cumque quos, et fugit nulla!</p>
            </div>
            <div class="content">
                <h2>شهر 2</h2>
                <p>Lorem ima, iscipit nihil eius cumque quos, et fugit nulla!</p>
            </div>
            <div class="content">
                <h2>شهر 3</h2>
                <p>Lorem ipAccusamus minima, in veritaodit ad.it nulla!</p>
            </div>
            <div class="content">
                <h2>شهر 4</h2>
                <p>Lorem in vscipit nihil eius cumque quos, tenetet fugit nulla!</p>
            </div>
            <div class="content">
                <h2>شهر 5</h2>
                <table class="table table-dark table-hover">
                    <tr>
                        <th>#الأسبوع</th>
                        <th>الحمولة</th>
                        <th>قيمة الخدمة</th>
                        <th>ديزل</th>
                        <th>سعر الترب</th>
                        <th>الخصومات</th>
                        <th>المجموع</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <?php
                            while ($row = mysqli_fetch_assoc($results)) {
                            ?>
                            <!--<a><?php echo $row['id']; ?></a>-->
                            <a>
                                <?php
                                    if ($row['a'] != 0) {
                                        echo '' . $row['a'];
                                    }
                                    else {
                                        echo '' . '0.00';
                                    }
                                ?>
                            </a>
                            <?php } ?>
                        </td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>
                            <?php
                            while ($row = mysqli_fetch_assoc($result_)) {
                            ?>
                            <!--<a><?php echo $row['id']; ?></a>-->
                            <a>
                                <?php
                                    if ($row['x'] != 0) {
                                        echo '' . $row['x'];
                                    }
                                    else {
                                        echo '' . '0.00';
                                    }
                                ?>
                            </a>
                            <?php } ?>
                        </td>
                        <td>Value</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <?php
                                while ($row = mysqli_fetch_assoc($resultss)) {
                                ?>
                                <!--<a><?php echo $row['id']; ?></a>-->
                                <a>
                                    <?php
                                        if ($row['b'] != 0) {
                                            echo '' . $row['b'];
                                        }
                                        else {
                                            echo '' . '0.00';
                                        }
                                    ?>
                                </a>
                            <?php } ?>
                        </td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <?php
                            while ($row = mysqli_fetch_assoc($resultsss)) {
                            ?>
                            <!--<a><?php echo $row['id']; ?></a>-->
                            <a>
                                <?php
                                    if ($row['c'] != 0) {
                                        echo '' . $row['c'];
                                    }
                                    else {
                                        echo '' . '0.00';
                                    }
                                ?>
                            </a>
                            <?php } ?>
                        </td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <?php
                            while ($row = mysqli_fetch_assoc($payload_total4)) {
                            ?>
                            <!--<a><?php echo $row['id']; ?></a>-->
                            <a>
                                <?php
                                    if ($row['d'] != 0) {
                                        echo '' . $row['d'];
                                    }
                                    else {
                                        echo '' . '0.00';
                                    }
                                ?>
                            </a>
                            <?php } ?>
                        </td>
                        <td>
                            <?php
                            while ($row = mysqli_fetch_assoc($resultssss)) {
                            ?>
                            <!--<a><?php echo $row['id']; ?></a>-->
                            <a>
                                <?php
                                    if ($row['d'] != 0) {
                                        echo '' . $row['d'];
                                    }
                                    else {
                                        echo '' . '0.00';
                                    }
                                ?>
                            </a>
                            <?php } ?>
                        </td>
                        <td>
                            <?php
                            while ($row = mysqli_fetch_assoc($diesel4)) {
                            ?>
                            <!--<a><?php echo $row['id']; ?></a>-->
                            <a>
                                <?php
                                    if ($row['d'] != 0) {
                                        echo '' . $row['d'];
                                    }
                                    else {
                                        echo '' . '0.00';
                                    }
                                ?>
                            </a>
                            <?php } ?>
                        </td>
                        <td>
                            <?php
                            while ($row = mysqli_fetch_assoc($trip_total4)) {
                            ?>
                            <!--<a><?php echo $row['id']; ?></a>-->
                            <a>
                                <?php
                                    if ($row['d'] != 0) {
                                        echo '' . $row['d'];
                                    }
                                    else {
                                        echo '' . '0.00';
                                    }
                                ?>
                            </a>
                            <?php } ?>
                        </td>
                        <td>
                            <?php
                            while ($row = mysqli_fetch_assoc($discounts4)) {
                            ?>
                            <!--<a><?php echo $row['id']; ?></a>-->
                            <a>
                                <?php
                                    if ($row['d'] != 0) {
                                        echo '' . $row['d'];
                                    }
                                    else {
                                        echo '' . '0.00';
                                    }
                                ?>
                            </a>
                            <?php } ?>
                        </td>
                        <td>
                            <?php
                            $query = "SELECT SUM(payload_total) As sumOf FROM drivers WHERE `month`='5' AND `week`='4'";
                            $query2 = "SELECT SUM(trip_total) As sumOfIn FROM drivers WHERE `month`='5' AND `week`='4'";
                            $query3 = "SELECT SUM(diesel) As sumOfTo FROM drivers WHERE `month`='5' AND `week`='4'";
                            $query4 = "SELECT SUM(service_value) As sumOfFor FROM drivers WHERE `month`='5' AND `week`='4'";
                            $total = 0;
                            $result = mysqli_query($conn, $query);
                            $result2 = mysqli_query($conn, $query2);
                            $result3 = mysqli_query($conn, $query3);
                            $result4 = mysqli_query($conn, $query4);

                            while ($row = mysqli_fetch_assoc($result)) {
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    while ($row3 = mysqli_fetch_assoc($result3)) {
                                        while ($row4 = mysqli_fetch_assoc($result4)) {
                                            $total = $row['sumOf'] - ($row2['sumOfIn'] + $row3['sumOfTo'] + $row4['sumOfFor']);
                                            if ($total != 0) {
                                                echo '(' . number_format($total, 2) . ')';
                                             }
                                            else {
                                                echo '' . '0.00';
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                </table>
                <p>Lorem in vscipit nihil eius cumque quos, tenetet fugit nulla!</p>
            </div>
            <div class="content">
                <h2>شهر 6</h2>
                <table class="table table-dark table-hover">
                    <tr>
                        <th>الأسبوع#</th>
                        <th>الحمولة</th>
                        <th>قيمة الخدمة</th>
                        <th>ديزل</th>
                        <th>سعر الترب</th>
                        <th>الخصومات</th>
                        <th>المجموع</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                        <td>Value</td>
                    </tr>
                </table>
            </div>
            <div class="content">
                <h2>شهر 7</h2>
                <p>Lorem ipsum dve accusantium et fugit nulla!</p>
            </div>
            <div class="content">
                <h2>شهر 8</h2>
                <p>Lorem ipsum dolorlanditt nihil eiu fugit nulla!</p>
            </div>
            <div class="content">
                <h2>شهر 9</h2>
                <p>Lorem ipsum dolor ,ccusantium et fugit nulla!</p>
            </div>
            <div class="content">
                <h2>شهر 10</h2>
                <p>Lol eius cumque quos, tenetur accusantium et fugit nulla!</p>
            </div>
            <div class="content">
                <h2>شهر 11</h2>
                <p>Lorem inihil eius cumque quos, tenetur nulla!</p>
            </div>
            <div class="content">
                <h2>شهر 12</h2>
                <p>Lod. Suscipit nihil eius cumque quos, tenetur ugit nulla!</p>
            </div>
        </div>
        <a href="view_exchange_drivers.php">
            رؤية الجدول بالتفصيل
        </a>
    </div>
    
    <script>
        const tabs = document.querySelectorAll('.tab-button');
        const all_content = document.querySelectorAll('.content');
        tabs.forEach((tab, index) => {
            tab.addEventListener('click', (e) => {
                tabs.forEach(tab => {tab.classList.remove('active')});
                tab.classList.add('active');
                var line = document.querySelector('.line');
                line.style.width = e.target.offsetWidth + "px";
                line.style.left = e.target.offsetLeft + "px";
                // line.style.right = e.target.offsetRight + "px";
                all_content.forEach(content => {content.classList.remove('active')});
                all_content[index].classList.add('active');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>

<?php 
/*}else{
     header("Location: index.php");
     exit();
}*/
 ?>