<?php
  // include"../config/koneksi.php";
  
  // include_once 'fungsi.php';

  // if (isset($_SESSION['user_session'])) {
  //   header("location: ../operator/admin/index.php?penyewa");
  // }
  
?>
<!DOCTYPE html>
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

  <div class="container">

      <div class="judul" style="color: white;">
        THE FORMER HOME<br><br>
      </div>

      <?php
        //include map
        require 'map.php';
                      
     
      ?>

      <div class="form-login">

        <div class="form">
          <form action="action.php" method="post">
            <!-- <input type="text" id="mulai" name="mulai" placeholder="your position"/>
            <input type="text" id="tujuan" name="tujuan" placeholder="former home position "/> -->
            <select name="mulai">
              <?php foreach ($peta1 as $key => $value) { ?>
                
          	    <option value="<?php echo $key ?>"><?php echo $key ?></option>
              <?php } ?>
            </select>

            <select name="tujuan">
              <?php foreach ($peta1 as $key => $value) { 

                if($key == 'PATI'){ ?>              
                  <option value="<?php echo $key ?>" selected><?php echo $key ?></option>
                <?php }else{ ?>
                  <option value="<?php echo $key ?>"><?php echo $key ?></option>
                <?php } ?>
              <?php } ?>
            </select>
            <br>
            <select name="metode">
              
              <option value="bfs">BFS</option>
              <option value="dfs">DFS</option>
            </select>
            
            <button type="submit" name="cari" id="cari">SEARCH</button>
          </form>
        </div>
        <!-- <div class="lupa">
          <a href="#">Lupa Password?</a>
        </div>
 -->
    </div>

  </div>
</body>
</html>
