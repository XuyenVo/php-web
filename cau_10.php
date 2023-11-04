<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include '../header.php'; ?>
    <form action="cau_10.php" method="post">
        Nhập các số nguyên: <input type="text" name="n_array" placeholder="Nhập các số nguyên" /><br />
        <input type="submit" value="Gửi">
    </form>
    <hr />
    <?php
    if (isset($_POST["n_array"])) {
        $n_array = explode(',', $_POST["n_array"]);

        function Is_Odd($n){
            return $n % 2 ? "blue" : "red"; 
        }

        foreach($n_array as $value){
            echo "<span style='color:" . Is_Odd($value) . "'>". $value . "</span>, ";
        }
    }
    ?>
</body>