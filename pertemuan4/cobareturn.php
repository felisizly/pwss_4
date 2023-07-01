<?php
function laporan($bulan){
    if ($bulan < 3){
        $status = 'report belum tersedia';
    }else{
        $status = 'Report sudah tersedia';
    }
    return $status;
}
echo laporan(2);
?>