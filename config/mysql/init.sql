-- ตั้งค่า default schema หรือข้อมูลเริ่มต้น
CREATE TABLE IF NOT EXISTS test_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);
