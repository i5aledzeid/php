<?php
    include "db_conn.php";
    $error = $SERVER["REDIRRECT_SATUS"];
    $error_title = '';
    $error_subtitle = '';
    if ($error == 404) {
        $error_title = 'الصفحة غير موجودة';
        $error_subtitle = 'الصفحة أو الملف غير موجودة بالسيرفر';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <div>
        <h2><?php echo $error_title; ?></h2>
        <p><?php echo $error_subtitle; ?></p>
    </div>
</body>
</html>