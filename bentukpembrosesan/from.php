<form method="POST">
<input type="text" name="nama">
<button type="submit">Kirim</button>
</form>

<?php
if (isset($_POST['nama'])) {
    echo "Nama : " . $_POST['nama'];
}