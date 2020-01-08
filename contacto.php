<?php
    //importamos el head , con los css 
    include('head.php');
?>
<body>

<div id="wrapper">
    <?php
        //importamos el header y el menu 
        include('menu.php');
    ?>
<div class="inner-page-banner-area" style="background-image: url('img/laboratorio2.jpg');"></div>
            
<!-- Contact Us Page 1 Area Start Here -->
<div class="contact-us-page1-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="contact-us-info1">
                    <ul>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h3>Tel&eacute;fono</h3>
                            <p>(+504) 2221-4488 /  2236-7302</p> 
                           
                        </li>
                        <li>
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            <h3>WhatsApp</h3>
                            <p>(+504) 999-9999</p>
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h3>Direcci&oacute;n</h3>
                            <p>Col. Lara No.636, Av. José Martín</p>
                            <p>Apartado 759 </p>
                            <p>Tegucigalpa, M.D.C., Honduras, C.A.</p>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h3>E-mail</h3>
                            <p>info@colegioquimicohn.com</p>
                        </li>
                        <li>
                            <h3>Nuestra Red Social</h3>
                            <ul class="contact-social">
                                <li><a target="_blank" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title-default-left title-bar-high">Cont&aacute;ctanos</h2>
                        <p>Puedes dejarnos tus consultas o comentarios en el siguiente formulario.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="contact-form1">
                        <form id="contact-form" action="php/contacto.php" method="POST">
                            <fieldset>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nombre*" class="form-control" name="name" id="form-name" data-error="El Campo Nombre es requerido" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Campo E-mail es requerido" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea placeholder="Mensaje*" class="textarea form-control" name="comments" id="form-message" rows="8" cols="20" data-error="Texto de mensaje es requerido" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                    <div class="form-group margin-bottom-none">
                                        <button type="submit" class="default-big-btn">Enviar Mensaje</button>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                    <div class='form-response'></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="google-map-area">
                <div id="googleMap" style="width:100%; height:395px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15478.199237651994!2d-87.178414!3d14.1037324!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x21da8d13cefaf972!2sColegio%20de%20Qu%C3%ADmico%20Farmac%C3%A9uticos%20de%20Honduras!5e0!3m2!1ses-419!2shn!4v1578448480578!5m2!1ses-419!2shn" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Page 1 Area End Here -->

</div> <!--End Of Wraper-->

</body>

 <!-- Main Body Area End Here -->
 <?php
        //importamos el footer con los js 
        include('footer.php');
    ?>
</html>
          
    