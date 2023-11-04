<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include '../header.php'; ?>
    <form action="cau_2.php" method="post">
        Nhập tháng: <input type="text" name="month" placeholder="Nhập tháng" /><br />
        <input type="submit" value="Gửi">
    </form>
    <hr />
    <?php
    if (isset($_POST["month"])) {
        $array = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        $month = $_POST["month"];
        echo "Tháng " . $month . " có " . $array[$month - 1] . " ngày";
    }
    ?>