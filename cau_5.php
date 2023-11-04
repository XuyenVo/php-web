<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include '../header.php'; ?>
    <form action="cau_5.php" method="post">
        Nhập mảng số nguyên: <input type="text" name="n_array" placeholder="Nhập mảng số nguyên" /><br />
        <input type="submit" value="Gửi">
    </form>
    <hr />
    <?php
    if (isset($_POST["n_array"])) {
        $n_array = explode(';', $_POST["n_array"]);
        function Tim_Max($n_array)
        {
            $n_max = $n_array[0];
            foreach ($n_array as $value) {
                if ($n_max < $value) {
                    $n_max = $value;
                }
            }
            return $n_max;
        }
        function Tim_Min($n_array)
        {
            $n_min = $n_array[0];
            foreach ($n_array as $value) {
                if ($n_min > $value) {
                    $n_min = $value;
                }
            }
            return $n_min;
        }
        echo "Số lớn nhất là: " . Tim_Max($n_array) . "<br />";
        echo "Số nhỏ nhất là: " . Tim_Min($n_array) . "<br />";
    }
    ?>
</body>