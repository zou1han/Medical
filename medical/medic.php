<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมเลือกแพทย์</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 200px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            font-size: 16px; /* ขนาดตัวหนังสือใน Dropdown */
            text-align-last: center; /* ตัวหนังสือใน Dropdown อยู่ตรงกลาง */
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 20px auto 0; /* ลดมาระหว่าง Dropdown กับปุ่ม */
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>โปรแกรมเลือกแพทย์</h1>

        <form id="selectForm">
            <select id="doctor" name="doctor">
                <option value="select1.php">แพทย์อายุรกรรม (Internist)</option>
                <option value="select2.php">หมอจิตแพทย์ (Psychiatrist)</option>
                <option value="select3.php">แพทย์ผิวหนัง (Dermatologist)</option>
                <option value="select4.php">แพทย์โรคหัวใจ (Cardiologist)</option>
                <option value="select5.php">หมอสมองและระบบประสาท (Neurologist)</option>
                <option value="select6.php">แพทย์โรคอ้วน (Bariatrician)</option>
                <option value="select7.php">แพทย์สิทธิเลือด (Hematologist)</option>
                <option value="select8.php">หมอทางเดินอาหาร (Gastroenterologist)</option>
                <option value="select9.php">แพทย์ออร์ทอปิดิกส์ (Ortopodist)</option>
                <option value="select10.php">แพทย์สุขภาพจิต (Psychiatrist)</option>
            </select>
            <button type="submit">เลือกแพทย์</button>
        </form>
    </div>

    <script>
        document.getElementById("selectForm").onsubmit = function() {
            var selectedOption = document.getElementById("doctor").value;
            window.location.href = selectedOption;
            return false; // เพื่อไม่ให้ฟอร์ม submit ไปยังหน้าใหม่
        };
    </script>
</body>
</html>
