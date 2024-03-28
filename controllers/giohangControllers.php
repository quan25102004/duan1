<?php
require_once "model/giohang.php";

function showGioHang()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['addcart']) && ($_POST['addcart'])) {
            $idKH = $_POST['idKH'];
            $idSP = $_POST['idSP'];
            $soluong = $_POST['soluong'];
            $sl = soLuongGioHang($idSP);
            $dongia = dongia($idSP);

            if ($sl == 0) {
                $soluong =  (int)$soluong;
                $tongtien = (int)$soluong * (float)$dongia[0];
                addGioHang($idKH, $idSP, $soluong, $tongtien);
            } else {
                $soluong = (int)$soluong + (float)$sl['soluong'];
                $tongtien = (int)$soluong * (float)$dongia[0];

                suaGioHang($soluong, $idSP, $tongtien);
                // var_dump($dongia);
                // var_dump($soluong);
            }
            $thanhtien = 0;
            $tongsp = 0;
            $tong = 0;
            $tt = thanhTien();
            if (!empty($idKH)) {
                foreach ($tt as $tien) {
                    $tong += (int)$tien;
                    $tongsp += (int)$tien["soluong"];
                    $thanhtien += (float)$tien["tongtien"];
                }
                suaChiTietDonHang($thanhtien, $tongsp, $idKH);
            }else{
                foreach ($tt as $tien) {
                    $tong += (int)$tien;
                    $tongsp += (int)$tien["soluong"];
                    $thanhtien += (float)$tien["tongtien"];
                    addChiTietDonHang($thanhtien, $tongsp, $idKH);
                }
            }
        } 
    }else {
        $thanhtien = 0;
        $tongsp = 0;
        $tong = 0;
        $userCookie = $_COOKIE['user'];
        $userLogin = unserialize($userCookie);
        $giohang = gioHang();
        foreach($giohang as $hang) {
            $tong += (int)$hang;
            $tongsp += (int)$hang["soluong"];
            $thanhtien += (float)$hang["tongtien"];
        }
    }
    $giohang = gioHang();
    include "view/xshop/giohang.php";
}
