<?php
// ตั้งค่าข้อมูลยา (เป็นข้อมูลคงที่ในตัวอย่างนี้)
$medicines = [
    ['id' => 1, 'name' => 'Paracetamol', 'dosage' => '500mg'],
    ['id' => 2, 'name' => 'Amoxicillin', 'dosage' => '250mg'],
    ['id' => 3, 'name' => 'Ibuprofen', 'dosage' => '400mg']
];

// ตรวจสอบการส่งคำสั่งจ่ายยา
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['medicine_id']) && isset($_POST['dosage'])) {
    $medicineId = $_POST['medicine_id'];
    $dosage = $_POST['dosage'];

    // ค้นหายาจาก ID
    $selectedMedicine = null;
    foreach ($medicines as $med) {
        if ($med['id'] == $medicineId) {
            $selectedMedicine = $med;
            break;
        }
    }

    // แสดงข้อความการจ่ายยา
    if ($selectedMedicine) {
        echo "Prescription issued: {$selectedMedicine['name']} - Dosage: $dosage";
    } else {
        echo "Medicine not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Prescription</title>
</head>
<body>
    <h1>Doctor's Prescription</h1>
    <form method="POST">
        <label for="medicine">Select Medicine:</label>
        <select name="medicine_id" id="medicine">
            <?php foreach ($medicines as $med) : ?>
                <option value="<?= $med['id'] ?>"><?= $med['name'] ?> - <?= $med['dosage'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="dosage">Dosage:</label>
        <input type="text" name="dosage" id="dosage">
        <br>
        <button type="submit">Prescribe</button>
    </form>
</body>
</html>
