<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="index.css" />
    <h1 style="padding: 5px; background-grey: red;">Data Mahasiswa</h1></title> 
</head>
<body>

    </header>
    
    <h4>Menu</h4>
    <nav>
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if($_GET['status'] == 'sukses') {
                    echo "pendaftaran berhasil";
                }   
                ?>
            </p>
        <?php endif; ?>
        <ul>
            <li><a href="daftar.php"><button style="color: red">Daftar Baru<button></a></li>
            <li><a href="list.php"><button style="color: blue; border: 2px solid green">List</button><?a></li>
        </ul>
    </nav>

</body>

</html>