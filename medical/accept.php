<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบเสร็จ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .receipt-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .receipt-item span {
            font-weight: bold;
        }

        .total {
            margin-top: 20px;
            text-align: right;
        }

        .print-button {
            margin-top: 20px;
            text-align: center;
        }

        .print-button button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .print-button button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ใบเสร็จ</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['medicine'])) {
                $medicine = $_POST['medicine'];
                switch ($medicine) {
                    case '1':
                        $medicine_name = 'ยาต้านความดันโลหิตสูง (Antihypertensive medications)';
                        break;
                    case '2':
                        $medicine_name = 'ยาลดน้ำตาลในเลือด (Antidiabetic medications)';
                        break;
                    case '3':
                        $medicine_name = 'ยาลดไขมันในเลือด (Lipid-lowering medications)';
                        break;
                    case '4':
                        $medicine_name = 'ยาต้านเป็นกรด (Antacids)';
                        break;
                    case '5':
                        $medicine_name = 'ยาแก้ปวด (Analgesics)';
                        break;
                    case '6':
                        $medicine_name = 'ยาต้านเชื้อ (Antibiotics)';
                        break;
                    default:
                        $medicine_name = 'ไม่มีข้อมูลในใบเสร็จ';
                }
            } else {
                $medicine_name = 'ไม่มีข้อมูลในใบเสร็จ';
            }

            // แสดงปริมาณยา
            if (isset($_POST['dosage1']) || isset($_POST['dosage2']) || isset($_POST['dosage3'])) {
                ?>
                <div class="receipt-item">
                    <span>ปริมาณยา (เม็ด):</span>
                    <span>
                        <?php
                        if (isset($_POST['dosage1'])) {
                            echo '6 เม็ด (แพ็ค)';
                        }
                        if (isset($_POST['dosage2'])) {
                            echo ', 12 เม็ด (แพ็ค)';
                        }
                        if (isset($_POST['dosage3'])) {
                            echo ', 28 เม็ด (แพ็ค)';
                        }
                        ?>
                    </span>
                </div>
                <?php
            }

            if (isset($_POST['type2']) || isset($_POST['type3']) || isset($_POST['type4'])) {
                ?>
                <div class="receipt-item">
                    <span>ปริมาณยา (ขวด):</span>
                    <span>
                        <?php
                        if (isset($_POST['type2'])) {
                            echo '100 มิลลิลิตร (ขวดเล็ก)';
                        }
                        if (isset($_POST['type3'])) {
                            echo ', 300 มิลลิลิตร (ขวดกลาง)';
                        }
                        if (isset($_POST['type4'])) {
                            echo ', 500 มิลลิลิตร (ขวดใหญ่)';
                        }
                        ?>
                    </span>
                </div>
                <?php
            }

            // แสดงวันที่และชื่อผู้ป่วย
            ?>
            <div class="receipt-item">
                <span>วันที่:</span>
                <span>
                    <?php
                    $day = $_POST['day'];
                    $month = $_POST['month'];
                    $year = $_POST['year'];
                    echo $day . '/' . $month . '/' . $year;
                    ?>
                </span>
            </div>
            <div class="receipt-item">
                <span>ชื่อผู้ป่วย:</span>
                <span><?php echo $_POST['patientName']; ?></span>
            </div>
            <?php
        } else {
            echo '<div class="receipt-item"><span>ไม่มีข้อมูลในใบเสร็จ</span></div>';
        }
        ?>

        <div class="total">
            <span>ยาที่เลือก:</span>
            <span><?php echo $medicine_name; ?></span>
        </div>

        <div class="print-button">
            <button onclick="window.print()">พิมพ์ใบเสร็จ</button>
        </div>
    </div>
</body>
</html>
