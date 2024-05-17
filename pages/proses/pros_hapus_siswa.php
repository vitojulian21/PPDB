<?php
include ('../../koneksi.php');
$id = $_GET['id'];

$id = mysqli_real_escape_string($koneksi, $id);

$delete_ortu_query = "DELETE FROM data_ortu WHERE id=(SELECT id FROM data_siswa WHERE id='$id')";
if (!mysqli_query($koneksi, $delete_ortu_query)) {
    echo "Error: " . $delete_wali_query . "<br>" .mysqli_error($koneksi);
}

$delete_siswa_query = "DELETE FROM data_siswa WHERE id='$id'";
if(mysqli_query($koneksi, $delete_siswa_query)) {

    header("location:../../pages/data_siswa.php");
} else {
    echo "Error: " . $delete_siswa_query . "<br>" . mysqli_error($koneksi);

}
?>
