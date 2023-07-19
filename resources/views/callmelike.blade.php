<?php
$keyurljson = 'https://script.google.com/macros/s/AKfycbxHiBDCmC40kH93F9e2_Io1eT_Fn6pDfEKFikHTiDDECNlXs7X5ylu9jyYSPNPCAHqPqA/exec';
                                        $getdatajsoncoments = file_get_contents($keyurljson);
                                        $dataprocess = json_decode($getdatajsoncoments, true);
                                        $datosgetlivecoments = $dataprocess['user'];
                                        $existecomentarios = 0;
                                        $count = 0;
                                        $idf = $_GET['id'];
                                        foreach ($datosgetlivecoments as $comentarios) {
                                            if ($idf == $comentarios['post_id'] && $comentarios['ip_address']== $_SERVER['REMOTE_ADDR']) {
                                                $existecomentarios++;
                                                $updatereaccion= " ";
                                                $comentarios['reaccion']= $updatereaccion;
                 }
             }
             if ($comentarios['ip_address'] !== $_SERVER['REMOTE_ADDR'] && $idf == $comentarios['post_id'] ) {
                $existecomentarios++;
                 ?>
<p>Tú y <?php echo  $existecomentarios?> personas más, les gusta esto !</p>
<?php
             }
             ?>
