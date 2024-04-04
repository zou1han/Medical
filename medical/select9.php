<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมเลือกโรคและยา</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 150px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
            font-size: 18px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 20px auto 0;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>โปรแกรมเลือกโรคและยา</h1>

        <form id="diseaseForm" action="accept.php" method="POST">
            <select id="disease" name="disease">
                <option value="โรคหัวใจ">โรคหัวใจ</option>
                <option value="โรคไต">โรคไต</option>
                <option value="โรคเบาหวาน">โรคเบาหวาน</option>
                <!-- เพิ่มโรคอื่นๆ ตามต้องการ -->
            </select>

            <select id="medicine" name="medicine">
                <option value="ยาหัวใจ">ยาหัวใจ</option>
                <option value="ยาไต">ยาไต</option>
                <option value="ยาเบาหวาน">ยาเบาหวาน</option>
                <!-- เพิ่มยาอื่นๆ ตามต้องการ -->
            </select>

            <select id="dosage" name="dosage">
                <option value="1 ชุด">1 ชุด</option>
                <option value="2 ชุด">2 ชุด</option>
                <option value="3 ชุด">3 ชุด</option>
                <!-- เพิ่มจำนวนชุดอื่นๆ ตามต้องการ -->
            </select>

            <button type="submit">บันทึกข้อมูล</button>
        </form>
    </div>
</body>
</html>
