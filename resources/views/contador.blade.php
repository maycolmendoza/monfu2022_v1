<?php

if (isset($_GET)) {
    # code...
    @include('models.contadordescargas');
}else{

    header('Location: /');
}
