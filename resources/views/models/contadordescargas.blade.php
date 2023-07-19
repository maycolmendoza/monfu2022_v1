
      <?php                 //https://script.google.com/macros/s/AKfycbwuRz1yRH4FsT_JIBX0pJXmtcw9MAnXVDBCoNTSrCYuCepDEeqoTGUsdT1qChWWDd_i8Q/exec
      $enlacejsondescargas ='https://script.google.com/macros/s/AKfycbwuRz1yRH4FsT_JIBX0pJXmtcw9MAnXVDBCoNTSrCYuCepDEeqoTGUsdT1qChWWDd_i8Q/exec';
      $confgt = file_get_contents($enlacejsondescargas);
      $datadescargas = json_decode($confgt, true);
      $reportedatadescargas = $datadescargas['user'];
      $count = 0;
      foreach ($reportedatadescargas as $analisisdescargas) {


          if ("3" == $analisisdescargas['id_poster'] ) {

              $count++;
          }
      }
      echo "Descargas:".$count;





                                  ?>
