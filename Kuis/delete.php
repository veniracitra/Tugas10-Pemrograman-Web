<?php
include("koneksi.php");
$pengguna = $_GET["pengguna"];

                            if (isset($_GET["id"])) {
                                $id = $_GET["id"];

                                $sql = "DELETE FROM pesanalumni WHERE id= $id";
                                $array = mysqli_query($conn,$sql);

                                //cek query
                                if( $array ){
                                    header("location:  cetak data.php?idn=".$pengguna."");
                                } else {
                                    die("gagal menghapus...");
                                }
                            }

?>
