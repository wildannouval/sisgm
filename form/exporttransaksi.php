<?php
    require('../fpdf185/fpdf.php');
    include('../koneksi.php');
  
    $server="localhost";
    $username="root";
    $password="";
    $db = "sisgm";
   
    //buka koneksi database
    mysqli_connect($server,$username,$password,$db);

    $query     = "SELECT * FROM transaksi";
    $db_query  = mysqli_query($conn,$query) or die("Query gagal");
   
    //Variabel untuk iterasi perulangan dimulai dari 0 untuk array
    $i = 0;
   
    //Mengambil nilai dari query database
    while($data=mysqli_fetch_row($db_query))
    {
        $cell[$i][1] = $data[0]; // data ke 0 pada sel tabel ke 1
        $cell[$i][2] = $data[1];
        $cell[$i][3] = $data[2];
        $cell[$i][4] = $data[3];
        $cell[$i][5] = $data[4];
        $cell[$i][6] = $data[5];
        $cell[$i][7] = $data[6];
        $cell[$i][8] = $data[7];
        $cell[$i][9] = $data[8];
  

        $i++;
    }
   
    //memulai pengaturan output PDF

    class PDF extends FPDF
    {
        //untuk pengaturan header halaman
        function Header()
        {
       //Pengaturan Font Header = jenis font : Times New Romans, Bold, ukuran 14
            $this->SetFont('Times','B',13);
            //untuk warna background Header
            $this->SetFillColor(255,255,255);

            //untuk warna text
            $this->SetTextColor(0,0,0);
            //Menampilkan tulisan di halaman = TBLR (untuk garis)=> B = Bottom,
            // L = Left, R = Right
            //untuk garis, C = center
            $this->Cell(28,1,'Laporan Data Transaksi','TBLR',0,'C',1);
        }
       
    }
    //pengaturan ukuran kertas P = Portrait
    $pdf = new PDF('L','cm','A4');
    $pdf->AddPage();
   
    //Ln() = untuk pindah baris
    $pdf->Ln();
    $pdf->SetFont('Times','B',11);
    
    $pdf->Cell(1,1,'No','LRTB',0,'C');
    $pdf->Cell(2,1,'No Invoice','LRTB',0,'C');
    $pdf->Cell(3,1,'Tanggal Invoice','LRTB',0,'C');
    $pdf->Cell(4,1,'Nama Customer','LRTB',0,'C');
    $pdf->Cell(4,1,'No Hp Customer','LRTB',0,'C');
    $pdf->Cell(3,1,'ID Produk','LRTB',0,'C');
    $pdf->Cell(3,1,'Nama Produk','LRTB',0,'C');
    $pdf->Cell(3,1,'Qty Produk','LRTB',0,'C');
    $pdf->Cell(3,1,'Harga Produk','LRTB',0,'C');
    $pdf->Cell(2,1,'Total','LRTB',0,'C');



    $pdf->Ln();
    $pdf->SetFont('Times',"",9);
   
       for($j=0;$j<$i;$j++)
    {   
              
        $pdf->Cell(1,1,$j+1,'LBTR',0,'C');
        $pdf->Cell(2,1,$cell[$j][1],'LBTR',0,'C');
        $pdf->Cell(3,1,$cell[$j][2],'LBTR',0,'C');
        $pdf->Cell(4,1,$cell[$j][3],'LBTR',0,'C');
        $pdf->Cell(4,1,$cell[$j][4],'LBTR',0,'C');
        $pdf->Cell(3,1,$cell[$j][5],'LBTR',0,'C');
        $pdf->Cell(3,1,$cell[$j][6],'LBTR',0,'C');
        $pdf->Cell(3,1,$cell[$j][7],'LBTR',0,'C');
        $pdf->Cell(3,1,$cell[$j][8],'LBTR',0,'C');
        $pdf->Cell(2,1,$cell[$j][9],'LBTR',0,'C');


           $pdf->Ln();
    }
   
    //menampilkan output berupa halaman PDF
    $pdf->Output();
?>