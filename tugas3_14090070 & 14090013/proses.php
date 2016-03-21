<?php
 
    $A = $_POST['A'];
 
    $B = $_POST['B'];
 
    if ($tambah = $_POST['tambah'])
 
    {
 
    $hasil = $A + $B ;
    }
 
    if ($kurang = $_POST['kurang'])
 
    {
  $hasil = $A - $B;
    }
 
    if ($kali = $_POST['kali'])
 
    {
 
    $hasil = $A * $B ;
 
    }
 
    if ($bagi = $_POST['bagi'])
 
    {$hasil = $A / $B ;
 
    }
  
 header ("location:index.php?C=$hasil");
  
 ?>
