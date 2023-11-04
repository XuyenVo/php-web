<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include '../header.php'; ?>
    <form action="cau_6.php" method="post">
        Nhập số nguyên n: <input type="text" name="n_num" placeholder="Nhập số nguyên n" /><br />
        <input type="submit" value="Gửi">
    </form>
    <hr />
    <?php
    if (isset($_POST["n_num"])) {
        $n = $_POST["n_num"];
        function Kiem_Tra($num): bool
        {
            if ($num < 2) {
                return false;
            }
            if (round(sqrt($num), 0, PHP_ROUND_HALF_UP) ** 2 != $num) {
                return false;
            }
            return true;
        }

        echo "Số chính phương từ nhỏ hơn N là: <br/>";
        for ($i = 0; $i < $n; $i++) {
            if (Kiem_Tra($i)) {
                echo $i . ", ";
            }
        }
        echo "<br />";
    }
    ?>
</body>