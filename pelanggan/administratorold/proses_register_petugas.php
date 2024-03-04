<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register Petugas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        .error-message {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Register Petugas</h2>
        <form action="proses_simpan_register_petugas.php" method="POST">
            <div>
                <label for="id_petugas">ID Petugas:</label>
                <input type="text" id="id_petugas" name="id_petugas" required>
            </div>
            <div>
                <label for="nama_petugas">Nama Petugas:</label>
                <input type="text" id="nama_petugas" name="nama_petugas" required>
            </div>
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="level">Level:</label>
                <select id="level" name="level" required>
                    <option value="1">Administrator</option>
                    <!-- Tambahkan opsi lain di sini jika diperlukan -->
                </select>
            </div>
            <button type="submit">Simpan</button>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error-message"><?php echo $_GET['error']; ?></p>
            <?php } ?>
        </form>
    </div>
</body>
</html>
