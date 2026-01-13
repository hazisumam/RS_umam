<?php
require('konfig.php');

// Proteksi: Jika limit tidak terbaca, paksa nilainya menjadi 5
if (!isset($limit) || $limit <= 0) { $limit = 5; }

$query = "SELECT COUNT(*) AS total FROM dokter";
$result = $koneksi->query($query);
$data = $result->fetch_assoc();
$total = $data['total'];

$pages = ceil($total / $limit);

echo "<nav aria-label='Page navigation example'>";
echo "<ul class='pagination'>";
for ($i = 1; $i <= $pages; $i++) {
    echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
}
echo "</ul>";
echo "</nav>";
?>