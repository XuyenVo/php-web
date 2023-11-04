<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include '../header.php'; ?>
    <form action="cau_9.php" method="post">
        Nhập bảng cửu chương cần in: <input type="text" name="t_text" placeholder="Nhập bảng cửu chương cần in" /><br />
        <input type="submit" value="Gửi">
    </form>
    <hr />
    <table style='border:2px solid #dddddd'>
        <?php
        if (isset($_POST["t_text"])) {
            if (str_contains($_POST["t_text"], ' - ')) {
                $range = explode('-', $_POST["t_text"]);
                if ($range[0] < 1 || $range[1]>10) {
                    echo "Bảng cửu chương là từ 1 đến 9 nha.";
                } else{
                    for ($j = 1; $j <= 10; $j++){
                        echo "<tr>";
                        for ($i = $range[0]; $i <= $range[1]; $i++) {
                            echo "<td style='border-right:2px solid #dddddd; padding-right:30px'>". $i ." x ". $j ." = " . $i*$j . "</td>";
                        }
                        echo "</tr>";
                    }
                }
            } else {
                echo "Vui lòng nhập đúng định dạng. Ví dụ: 1 - 5 (có dấu cách kìa)";

            }
        }
        ?>
    </table>
</body>