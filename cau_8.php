<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include '../header.php'; ?>
    <form action="cau_8.php" method="post">
        Nhập email: <input type="text" name="t_email" placeholder="Nhập email" /><br />
        <input type="submit" value="Gửi">
    </form>
    <hr />
    <?php
    if (isset($_POST["t_email"])) {
        if (str_contains($_POST["t_email"], '@')) {
            $email = explode('@', $_POST["t_email"]);
            echo "Tên email: <b style='color:blue'>" . $email[0] . "</b> <br />";
            echo "Tên miền: <b style='color:green'>" . $email[1] . "</b>";
        } else {
            echo "Vui lòng nhập email đúng định dạng giùm cái.";
        }
    }
    ?>
</body>