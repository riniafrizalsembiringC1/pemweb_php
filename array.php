<?php

    //$buah[0] = "Apel";
   // $buah[1] = "Jeruk";


   // $mahasiswa[0] = "fulan";
    //$mahasiswa[1]=  "Eko";
    //$mahasiswa[2] = "Jhon Doe";
    //$mahasiswa[3] = "budi";
    //$mahasiswa[4] = "Fiki";
   // $mahasiswa[5] = "nana";
    //$mahasiswa[6] = "chandra";
   // $mahasiswa[7] = "iaa";
    //$mahasiswa[8] = "raka";
    //$mahasiswa[9] = "felix";
   // $mahasiswa[10] = "rini";


    //echo $mahasiswa[0], " ", $mahasiswa[1], " ", $mahasiswa[2]," ", $mahasiswa[3]," ", $mahasiswa[4]," ", 
   // $mahasiswa[5]," ", $mahasiswa[6]," ", $mahasiswa[7]," ", $mahasiswa[8]," ", $mahasiswa[9]," ", $mahasiswa[10];

   $mahasiswa = [
    "Fulan", "rini","budi", "dana"
   ];
   

   
   foreach($mahasiswa as $mhs)
   {
     echo $mhs,"<br>";
   }

   $i = 0;
   while(isset ($mahasiswa[$i]))
   {
    echo $mahasiswa[$i];
    $si++;
   }
