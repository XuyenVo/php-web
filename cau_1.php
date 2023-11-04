<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include '../header.php'; ?>
    <form action="cau_1.php" method="post">
        Nhập chuỗi: <input type="text" name="a_str" placeholder="Nhập chuỗi" /><br />
        <input type="submit" value="Gửi">
    </form>
    <hr />
    <?php
    if (isset($_POST["a_str"])) {
        $a_str = $_POST["a_str"];
        $chuoiInHoa =  mb_strtoupper($a_str, 'UTF-8');
        echo "Chuỗi đã nhập là: " . $a_str . "<br>";
        echo "Chuỗi in hoa là: " . $chuoiInHoa;
    }
    ?>
</body>