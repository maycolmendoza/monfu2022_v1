
 <div class="newsletter wow fadeInRight" data-wow-duration=".5s" id="registrate-para-el-evento">
     <div class="card-body">
         <div class="card-text">
             <h6 class="cb" style="color: #0067C0 ">Suscríbete a nuestro evento científico</h6>
             <p class="text-center text-flama-black"> Envía tu correo personal para que no te pierdas de las noticias y nuestra transmisión, participa completando tus datos y recibe una invitación a la transmisión en vivo por ZOOM EVENTS</p>
         </div>
         <form name="suscriptores" id="suscriptores" >
             <input type="email" class="nw-email" name="Emails" id="getemailsuscriptor" placeholder="🌍 Ingresa tu Email" required />
             <input type="hidden" id="Date" name="Date" value="<?php date_default_timezone_set('America/Lima');
                                                                $date = date('d-m-y');
                                                                echo $date ?>">
             <input type="hidden" id="Hora" name="Hora" value="<?php date_default_timezone_set('America/Lima');
                                                                $date = date('h:i:s A');
                                                                echo $date ?>">
             <input type="hidden" id="location" name="location">
             <script type="text/javascript">
                 document.getElementById("location").value = (Intl.DateTimeFormat().resolvedOptions().timeZone);
             </script>
                   <p id="valueInput"></p>
             <button class="btn-shared-posters btn-block  text-center" id="submitsuscrirtor"  type="submit">Suscribirse <i class="fa-solid fa-bell"></i></button>
         </form>
     </div>
 </div>



  <script>
  var _0xa18a=["\x72\x65\x73\x65\x74","\x73\x75\x73\x63\x72\x69\x70\x74\x6F\x72\x65\x73","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x73\x63\x72\x69\x70\x74\x2E\x67\x6F\x6F\x67\x6C\x65\x2E\x63\x6F\x6D\x2F\x6D\x61\x63\x72\x6F\x73\x2F\x73\x2F\x41\x4B\x66\x79\x63\x62\x79\x44\x53\x70\x50\x44\x6C\x37\x4E\x45\x38\x6F\x43\x4A\x4E\x71\x4D\x78\x62\x44\x4A\x66\x4A\x58\x6C\x77\x68\x63\x58\x5A\x53\x66\x50\x70\x38\x79\x38\x56\x4A\x5A\x58\x5A\x4D\x70\x4C\x36\x55\x51\x50\x32\x47\x67\x78\x33\x33\x5F\x49\x6B\x59\x41\x65\x54\x67\x46\x75\x74\x4C\x67\x2F\x65\x78\x65\x63","\x66\x6F\x72\x6D\x73","\x23\x73\x75\x62\x6D\x69\x74\x73\x75\x73\x63\x72\x69\x72\x74\x6F\x72","\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72","\x73\x75\x62\x6D\x69\x74","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x64\x69\x73\x61\x62\x6C\x65\x64","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x43\x61\x72\x67\x61\x6E\x64\x6F\x2E\x2E\x2E","\x45\x72\x72\x6F\x72\x21","\x6D\x65\x73\x73\x61\x67\x65","\x65\x72\x72\x6F\x72","\x63\x61\x74\x63\x68","\x53\x75\x73\x63\x72\xED\x62\x65\x74\x65\x20\x3C\x69\x20\x63\x6C\x61\x73\x73\x3D\x22\x66\x61\x2D\x73\x6F\x6C\x69\x64\x20\x66\x61\x2D\x62\x65\x6C\x6C\x22\x3E\x3C\x2F\x69\x3E","\x47\x72\x61\x63\x69\x61\x73","\x43\x65\x72\x72\x61\x72","\x73\x65\x74","\x4E\x6F\x74\x69\x66\x69\x63\x61\x63\x69\x6F\x6E","\x47\x72\x61\x63\x69\x61\x73\x20\uD83D\uDE03\x2C\x20\x74\x65\x20\x61\x63\x61\x62\x61\x73\x20\x64\x65\x20\x73\x75\x73\x63\x72\x69\x62\x69\x72\x20\x61\x20\x6E\x75\x65\x73\x74\x72\x6F\x20\x65\x76\x65\x6E\x74\x6F\x20\x63\x69\x65\x6E\x74\xED\x66\x69\x63\x6F\x2C\x20\x41\x74\x65\x6E\x74\x6F\x20\x61\x20\x74\x75\x20\x63\x6F\x72\x72\x65\x6F\x20\x21","\x61\x6C\x65\x72\x74","\x74\x68\x65\x6E","\x50\x4F\x53\x54","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72"];function limpiarFormulario(){document[_0xa18a[2]](_0xa18a[1])[_0xa18a[0]]()}const scriptURL=_0xa18a[3];const form=document[_0xa18a[4]][_0xa18a[1]];const btnsuscriptores=document[_0xa18a[6]](_0xa18a[5]);form[_0xa18a[25]](_0xa18a[7],(_0x24b5x5)=>{_0x24b5x5[_0xa18a[8]]();btnsuscriptores[_0xa18a[9]]= true;btnsuscriptores[_0xa18a[10]]= _0xa18a[11];fetch(scriptURL,{method:_0xa18a[24],body: new FormData(form)})[_0xa18a[23]]((_0x24b5x7)=>{btnsuscriptores[_0xa18a[9]]= false;btnsuscriptores[_0xa18a[10]]= `${_0xa18a[16]}`;alertify[_0xa18a[22]](_0xa18a[21])[_0xa18a[19]]({title:_0xa18a[20]})[_0xa18a[19]]({labels:{ok:_0xa18a[17],cancel:_0xa18a[18]}});limpiarFormulario()})[_0xa18a[15]]((_0x24b5x6)=>{return console[_0xa18a[14]](_0xa18a[12],_0x24b5x6[_0xa18a[13]])})})
     </script>



