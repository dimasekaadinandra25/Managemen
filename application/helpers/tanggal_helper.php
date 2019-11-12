<?php
function date_now()
{
    $date_now = Date("Y-m-d");
    return $date_now;
}

function month()
{
    return Date("Y-m");
}

function prev1_month()
{
    return Date("Y-m", strtotime('-1 month'));
}

function prev2_month()
{
    return Date("Y-m", strtotime('-2 month'));
}

function prev3_month()
{
    return Date("Y-m", strtotime('-3 month'));
}

function prev4_month()
{
    return Date("Y-m", strtotime('-4 month'));
}

function option1()
{
    $bulan = Date("m");
    $tahun = Date("Y");
    return bulan($bulan, $tahun);
}

function option2()
{
    $bulan = Date("m", strtotime('-1 month'));
    $tahun = Date("Y", strtotime('-1 month'));
    return bulan($bulan, $tahun);
}
function option3()
{
    $bulan = Date("m", strtotime('-2 month'));
    $tahun = Date("Y", strtotime('-2 month'));
    return bulan($bulan, $tahun);
}
function option4()
{
    $bulan = Date("m", strtotime('-3 month'));
    $tahun = Date("Y", strtotime('-3 month'));
    return bulan($bulan, $tahun);
}
function option5()
{
    $bulan = Date("m", strtotime('-4 month'));
    $tahun = Date("Y", strtotime('-4 month'));
    return bulan($bulan, $tahun);
}

function bulan($bulan, $tahun)
{
    switch ($bulan) {
        case 1:
            $bulan = "Januari";
            break;
        case 2:
            $bulan = "Februari";
            break;
        case 3:
            $bulan = "Maret";
            break;
        case 4:
            $bulan = "April";
            break;
        case 5:
            $bulan = "Mei";
            break;
        case 6:
            $bulan = "Juni";
            break;
        case 7:
            $bulan = "Juli";
            break;
        case 8:
            $bulan = "Agustus";
            break;
        case 9:
            $bulan = "September";
            break;
        case 10:
            $bulan = "Oktober";
            break;
        case 11:
            $bulan = "November";
            break;
        case 12:
            $bulan = "Desember";
            break;
        default:
            $bulan = Date('F');
            break;
    }
    return $bulan . " " . $tahun;
}
