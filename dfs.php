<html >
<head>
  <meta charset="UTF-8">
  <title>THE FORMER HOME</title>
  
  <link rel="stylesheet" href="css/css-login.css">
  
  <style type="text/css">

    body {
    background: url(backg2.jpg) no-repeat fixed;
       -webkit-background-size: 100% 100%;
       -moz-background-size: 100% 100%;
       -o-background-size: 100% 100%;
       background-size: 100% 100%;
    }

  </style>

</head>

<body>
<?php

	require 'map.php';

	 
	//==================================================================
	//		CONTOH LOOP FO ARRAY
	//==================================================================
	// foreach($peta1 as $x => $uh ) {
	//     echo "Key=" . $x . ", Value=" .$uh[0];
	//     echo "<br>";
	// }
	//==================================================================	
	//==================================================================
	//		CONTOH ARRAY MULTIDIMENSI
	//==================================================================
    // $families = array(
    // 				"Griffin"=>array("Peter","Lois","Megan"),
    // 				"Quagmire"=>array("Glenn"),
    // 				"Brown"=>array("Cleveland","Loretta","Junior")
    // 				);
    // echo $families['Griffin'][1];
    //==================================================================

	

	class Graf {
		protected $peta1;
		protected $visited = array();

		public function __construct($peta1){
			$this->peta1 = $peta1;	//inisialisasi $peta1
			// $this->graf = $peta1;	//inisialisasi $peta1
		}

		public function DFS($mulai, $tujuan){

			$stack = array(array($mulai));
			$visited = array();

			while (!empty($stack)) {

				// masukkan antrian paling depan ke variabel jalur
				$jalur = array_pop($stack);


				// simpan node yang dipilih ke variabel state, misal jalur = C,B maka simpan B ke variabel state
        		$state = end($jalur); 

        		// cek state apakah sama dengan tujuan, jika ya maka return jalur
        		if($state == $tujuan){
        			return $jalur;
        		// jika state tidak sama dengan tujuan, maka cek apakah state tidak ada di visited
        		}elseif(!in_array($state, $visited)){
        			// jika state tidak ada di visited maka cek cabang
        			foreach ($this->peta1[$state] as $cabang) { //cek semua cabang dari state
        				$jalur_baru = $jalur; #masukkan isi dari variabel jalur ke variabel jalur_baru
		                array_push($jalur_baru,$cabang); #update/tambah isi jalur_baru dengan cabang
		                array_push($stack,$jalur_baru);  #update/tambah stack dengan jalur_baru
        			}

        			// tandai state yang sudah dikunjungi sebagai visited
        			array_push($visited,$state);

        		}

				#cek isi antrian
		        $isi = count($stack);
		        if ($isi == 0){
		            echo "Tidak ditemukan";
		        }

				// return;
			}

		}
	}

	//==================================================================
	$Start = $_POST['mulai'];
	$Finis = $_POST['tujuan'];
?>
  <div class="container">

      <div class="judul" style="color: white;">
        THE FORMER HOME<br><br>
      </div>

      <!-- Form Login-->
      <?php
        if (isset($_GET['cant'])) {
                      
        $message = "Username / Password Anda Salah";
        echo "<script type='text/javascript'>alert('$message');</script>";
                      
     }
      ?>

      <div class="form-login">

        <div class="form">
            <?php
            	$g = new Graf($peta1);
				
				$sep = '';
				foreach ($g->DFS($Start,$Finis) as $key => $value) {
					echo $sep, $value;
					$sep = ' -> ';
				}
				
            ?>
            <br><br><br>	
            <a href="index.php"><button>SEARCH AGAIN</button></a>
        </div>

        <!-- <div class="lupa">
          <a href="#">Lupa Password?</a>
        </div>
 -->
    </div>

  </div>
</body>
</html>



