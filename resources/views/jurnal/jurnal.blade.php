<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist Harian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .table-container {
            overflow-x: auto; /* Menambahkan scroll horizontal */
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            min-width: 800px; /* Minimum lebar tabel agar bisa scroll */
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f8b74a;
            color: #fff;
            position: sticky;
            top: 0;
        }

        td input[type="checkbox"] {
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>Checklist Harian</h2>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Bulan</th>
                <?php 
                // Loop untuk menampilkan nama bulan
                $bulan = "November";
                for ($i = 1; $i <= 30; $i++) { 
                    echo "<th colspan='1'>{$bulan}</th>";
                }
                ?>
            </tr>
            <tr>
                <th>Tanggal</th>
                <?php 
                // Loop untuk menampilkan tanggal
                for ($i = 1; $i <= 30; $i++) { 
                    echo "<th>{$i}</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Daftar kegiatan
            $kegiatan = [
                "1. Tahajud",
                "2. Subuh on time",
                "3. Qobliyah subuh",
                "4. Tilawah pagi",
                "5. Zikir pagi (Al Ma'tsurat)",
                "6. Sedekah subuh",
                "7. Dhuha",
                "8. Mendoakan org lain",
                "9. Zuhur on time"
            ];

            // Loop untuk setiap kegiatan
            foreach ($kegiatan as $item) {
                echo "<tr>";
                echo "<td>{$item}</td>";
                // Loop untuk setiap tanggal
                for ($i = 1; $i <= 30; $i++) {
                    echo "<td><input type='checkbox'></td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
