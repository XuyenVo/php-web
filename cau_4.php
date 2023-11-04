<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include '../header.php'; ?>
    <form action="cau_4.php" method="post">
        Nhập số tiền cần đổi: <input type="text" name="money" placeholder="" /><br />
        <input type="submit" value="Gửi">
    </form>
    <hr />
    <?php
    if (isset($_POST["money"])) {
        $money = $_POST["money"];
        $array_menhgia = [50000, 20000, 10000, 5000, 1000];
        $array_soto = [];
        for ($dem = 0; $dem < 5; $dem++) {
            if ($dem == 0) {
                $soto = intdiv($money, $array_menhgia[$dem]);
                $array_soto[$dem] = $soto;
                $tien_du = $money - ($soto * $array_menhgia[$dem]);
            } else {
                $soto = intdiv($tien_du, $array_menhgia[$dem]);
                $array_soto[$dem] = $soto;
                $tien_du = $tien_du - ($soto * $array_menhgia[$dem]);
            }
        }
        echo "$money = " . $array_soto[0] . " tờ 50.000, " . $array_soto[1] . " tờ 20.000, " . $array_soto[2] . " tờ 10.000, " . $array_soto[3] . " tờ 5.000, " . $array_soto[4] . " tờ 1.000";
    }

    ?>
    <!-- <?php 
        $array_menhgia = [50000, 20000, 10000, 5000, 1000];
        $array_soto = [];
        foreach ($array_menhgia as $value){
        $soto = intval($n/$value);
        echo $soto." tờ".$value.",";
        $money = $money%$value; 
    }
    ?> -->