<?php
 
 //function tglidn($tgl) {
 function tanggal_hari_ini() {
 
 /*
   $tanggal=substr($tgl,8,2);
   $bulan=getbulan(substr($tgl,5,2));
   $tahun=substr($tgl,0,4);
   return $tanggal.' '.$bulan.' '.$tahun;
 */

  $hari=date(w,time());
  $tanggal=date(d,time());
  $bln=date(m,time());
  $tahun=date(Y,time()); 
  $jam=date(H,time());
  $menit=date(i,time());
  $detik=date(s,time());

 
 switch ($hari) {
    case 0:$hari="Minggu";
	break;
	 case 1:$hari="Senin";
	break;
	 case 2:$hari="Selasa";
	break;
	 case 3:$hari="Rabu";
	break;
	 case 4:$hari="Kamis";
	break;
	 case 5:$hari="Jum'at";
	break;
	 case 6:$hari="Sabtu";
	break;
 
 }
 
 
   switch ($bln) {
	 case 01: $bln="Januari";
	 break;
	 case 02: $bln="Februari";
	 break;
	 case 03: $bln="Maret";
	 break;
	 case 04: $bln="April";
	 break;
	 case 05: $bln="Mei";
	 break;
	 case 06: $bln="Juni";
	 break;
	 case 07: $bln="Juli";
	 break;
	 case 8: $bln="Agustus";
	 break;
	 case 9: $bln="September";
	 break;
	 case 10: $bln="Oktober";
	 break;
	 case 11: $bln="November";
	 break;
	 case 12: $bln="Desember";
	 break;
	 
	}
	 //return $tanggal.'' ''.$bulan.'' ''.$tahun;  
	return $hari.", ".$tanggal." ".$bln." ".$tahun;
  
 }
?>