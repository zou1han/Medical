<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมเลือกยา</title>
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
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .select-container {
            display: flex;
            flex-direction: column;
        }

        .select-container > div {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            margin-right: 10px;
            color: #333;
        }

        .choice-container {
            display: flex;
            align-items: center;
        }

        .choice-container input[type="checkbox"] {
            margin-right: 5px;
        }

        .date-input-container {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .date-input-container label {
            margin-right: 10px;
        }

        .date-input {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        .date-input input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: none;
            background-color: transparent;
            outline: none;
            width: 40px;
            text-align: center;
        }

        .name-input {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .name-input label {
            margin-right: 10px;
            width: 80px; /* ปรับความกว้างของ label ให้สั้นลง */
        }

        .name-input input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 150px;
        }

        .date-input input[type="text"] {
            width: 30px; /* ปรับความกว้างของ input ให้สั้นลง */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>จ่ายยาสำหรับคนไข้</h1>
        <form id="medicineForm" action="accept.php" method="POST">
            <div class="select-container">
                <div class="name-input">
                    <label for="patientName">ชื่อ:</label>
                    <input type="text" id="patientName" name="patientName" placeholder="ชื่อผู้ป่วย">
                </div>
                <div class="date-input-container">
                    <label for="date">วันที่:</label>
                    <div class="date-input">
                        <input type="text" id="day" name="day" maxlength="2" placeholder="วว" pattern="\d{1,2}" title="กรุณาใส่วันให้ถูกต้อง (เช่น 01, 15)">
                        <span>/</span>
                        <input type="text" id="month" name="month" maxlength="2" placeholder="ดด" pattern="\d{1,2}" title="กรุณาใส่เดือนให้ถูกต้อง (เช่น 01, 12)">
                        <span>/</span>
                        <input type="text" id="year" name="year" maxlength="4" placeholder="ปปปป" pattern="\d{4}" title="กรุณาใส่ปีให้ถูกต้อง (เช่น 2024)">
                    </div>
                </div>
                <div>
                    <label for="medicine">เลือกตัวยา:</label>
                    <select id="medicine" name="medicine">
                        <option value="1">ยาต้านความดันโลหิตสูง (Antihypertensive medications)</option>
                        <option value="2">ยาลดน้ำตาลในเลือด (Antidiabetic medications)</option>
                        <option value="3">ยาลดไขมันในเลือด (Lipid-lowering medications)</option>
                        <option value="4">ยาต้านเป็นกรด (Antacids) (Antihypertensive medications)</option>
                        <option value="5">ยาแก้ปวด (Analgesics) (Antihypertensive medications)</option>
                        <option value="6">ยาต้านเชื้อ (Antihypertensive medications)</option> 
                    </select>
                </div>
                <div class="choice-container">
                    <label>เลือกปริมาณยา:</label>
                    <input type="checkbox" id="dosage1" name="dosage1" value="6">
                    <label for="dosage1">6 เม็ด (แพ็ค)</label>
                    <input type="checkbox" id="dosage2" name="dosage2" value="12">
                    <label for="dosage2">12 เม็ด (แพ็ค)</label>
                    <input type="checkbox" id="dosage3" name="dosage3" value="28">
                    <label for="dosage3">28 เม็ด (แพ็ค)</label>
                </div>
                <div class="choice-container">
                    <label>เลือกปริมาณยา (ขวด):</label>
                    <input type="checkbox" id="type2" name="type2" value="100">
                    <label for="type2">100 มิลลิลิตร (ขวดเล็ก)</label>
                    <input type="checkbox" id="type3" name="type3" value="300">
                    <label for="type3">300 มิลลิลิตร (ขวดกลาง)</label>
                    <input type="checkbox" id="type4" name="type4" value="500">
                    <label for="type4">500 มิลลิลิตร (ขวดใหญ่)</label>
                </div>
                <button type="submit">บันทึกข้อมูล</button>
            </div>
        </form>
    </div>
</body>
</html>
