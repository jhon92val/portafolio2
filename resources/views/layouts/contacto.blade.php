<!-- Contact-->
<section class="module" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-title c-align">
                    <h2>¡Hablemos!</h2>
                    <h6>Será un placer conversar contigo</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form id="contact-form" method="post" novalidate>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <input class="form-control" type="text" name="name" placeholder="Nombre" required="">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-sm-4">
                            <input class="form-control" type="email" name="email" placeholder="Correo" required="">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-sm-4">
                            <input class="form-control" type="text" name="phone" placeholder="Telefono" required="">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-sm-12">
                            <textarea class="form-control" name="message" placeholder="Escribe tu mensaje..." rows="8" required="" style="height: 184px; ;"></textarea>
                        </div>
                        <div class="form-group col-sm-12">
                            <div class="text-center m-t-20">
                                <button class="btn btn-round btn-brand" type="submit"><span>Enviar</span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Ajax response-->
                <div class="ajax-response text-center" id="contact-response"></div>
            </div>
        </div>
    </div>
</section>