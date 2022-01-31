<?php
include "../db/koneksi.php";

session_start();
$nama = $_SESSION['pelanggan'];
$id_pelanggan = mysqli_query($koneksi, "SELECT id_pelanggan from pelanggan WHERE nama = '$nama'");

$id_pelanggan2 = $id_pelanggan->fetch_assoc();
$kode_pelanggan = $id_pelanggan2['id_pelanggan'];

$request = $_SERVER['REQUEST_METHOD'];

switch ($request) {
    case 'GET':
        $query = mysqli_query($koneksi, "SELECT id_cart FROM cart WHERE kode_pelanggan = '$kode_pelanggan'");
        $jumlah_id = 0;
        while ($row = $query->fetch_assoc()) {
            $jumlah_id = $jumlah_id + 1;
        }
        echo json_encode($jumlah_id);
        break;

    case 'POST' :
        switch ($_POST['proses']) {
            case 'add':
                $id = $_POST['id'];

                $query1 = mysqli_query($koneksi, "SELECT id_cart FROM cart WHERE kode_pelanggan = '$kode_pelanggan' AND kode_product = '$id'");
                $query2 = mysqli_query($koneksi, "SELECT * FROM cart WHERE kode_pelanggan = '$kode_pelanggan' AND kode_product = '$id'");
                $jumlah_id1 = 0;
                while ($row = $query1->fetch_assoc()) {
                    $jumlah_id1 = $jumlah_id1 + 1;
                }

                while($row2 = mysqli_fetch_object($query2)){
                    $qty = $row2->jumlah;
                }

                if($jumlah_id1 == 0){
                    $save = mysqli_query($koneksi, "INSERT INTO cart (kode_pelanggan, kode_product, jumlah) VALUES ('$kode_pelanggan', '$id', '1')");
            
                    if($save){
                        echo json_encode(["message" => "success"]);
                    } else {
                        echo json_encode(["message" => "failed"]);
                    }
                } else if ($jumlah_id1 > 0){

                    $qty = $qty + 1;

                    $update = mysqli_query($koneksi, "UPDATE cart SET jumlah = '$qty' WHERE kode_pelanggan = '$kode_pelanggan' AND kode_product = '$id'");
                
                    if($update){
                        echo json_encode(["message" => "success"]);
                    } else {
                        echo json_encode(["message" => "failed"]);
                    }
                }

                break;

            case 'delete' :
                $id = $_POST['id'];

                $delete = mysqli_query($koneksi, "DELETE FROM cart WHERE kode_pelanggan = '$kode_pelanggan' AND kode_product = '$id'");
                
                if($delete){
                    echo json_encode(["message" => "success"]);
                } else {
                    echo json_encode(["message" => "failed"]);
                }
                
                break;
            
            default:
                # code...
                break;
        }

    break;
    
    default:
        # code...
        break;
}
