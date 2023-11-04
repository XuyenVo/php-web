<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include '../header.php'; ?>
    <form action="cau_7.php" method="post">
        Nhập mảng số nguyên: <input type="text" name="n_array" placeholder="Nhập mảng số nguyên" /><br />
        <input type="submit" value="Gửi">
    </form>
    <hr />
    <?php
    if (isset($_POST["n_array"])) {
        $n_array = explode(',', $_POST["n_array"]);

        function swap(&$arr, $a, $b)
        {
            $temp = $arr[$a];
            $arr[$a] = $arr[$b];
            $arr[$b] = $temp;
        }

        for ($i = 0; $i < sizeof($n_array) - 1; $i++) {
            for ($j = $i + 1; $j < sizeof($n_array); $j++) {
                if ($n_array[$i] > $n_array[$j]) {
                    swap($n_array, $i, $j);
                }
            }
        }

        echo "Mảng đã được sắp xếp tăng dần là: ";
        foreach ($n_array as $value) {
            echo $value . ", ";
        }
    }
    ?>
</body>