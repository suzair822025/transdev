@extends('layouts.app')
@section('content')
<style>
        #card-button-container{
            margin-top: 12px;
            display:none;
        }
</style>
    <!-- Start Banner Area 
    ============================================= -->
    <div class="hero-cont text-light">
        <div class="container">
            <div class="row align-text-top">
                <div class="col-xl-5 col-lg-5">
                    <div class="content mt-5">
                        <h2 class="slider-title1"><span class="sm-sl-title">Experto lingüístico</span><br></bnr><strong>Servicios adaptados</strong> a sus necesidades.</h2>
                        <span class="mt-n4">Ofrecemos servicios de traducción certificados y comerciales que son confiables, asequibles y fáciles de solicitar, garantizando precisión y una entrega rápida.</span>
                        <ul class="my-2">
                            <li><i class="fa fa-check-circle"></i> Sobrealimentada por AI para traducciones rápidas.</li>
                            <li><i class="fa fa-check-circle"></i> Traducciones comerciales y legales expertas en las que puede confiar.</li>
                            <li><i class="fa fa-check-circle"></i> Apostilla y notarización internacional, gestionadas por usted.</li>
                            <li><i class="fa fa-check-circle"></i> Traducciones claras y precisas que no te <br>arruinarán, desde solo $2.</li>
                            <li><i class="fa fa-check-circle"></i> Transcripciones claras y confiables que <br>no cuestan una fortuna: solo $1 por minuto.</li>
                        </ul>
                        <div class="my-5"></div>
                        <button type="button" class="btn btn-primary" onclick="smoothScroll(event, 'getquoteForm')">Ordene ahora <i class="fa fa-arrow-to-right hero-ordr-btn"></i></button>
                    </div>
                </div>
                <div class="col-lg-7 mt-5" style="text-align:right;">
                    <img src="{{ asset('/assets/img/hro_img.avif') }}" alt="Translation windows empowering success in technology since 2014" class="img-fluid">
                    <p class="ajax-response"></p> 
                </div> <!-- ##signup-form -->
            </div>
        </div>
    </div>
    <!-- End banner-area -->

    <!-- Start Get Quote 
============================================= -->

    <div class="services-content bg-gray-secondary default-padding d-md-block">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h4 class="sub-title mb-5">Procedimiento sencillo para pedidos en línea</h4>
            </div>
            <div class="about-style-one-items">
                <div class="row my-5">
                    
                <div class="row">
                <div class="col-md-8">
                    <!-- <h2>Get a Quote & Place Your Order</h2> -->
                    <form id="QuoteForm">
                        
                    <input type="hidden" name="service_type_amount" class="service-type-amount" value="0" />
                        <input type="hidden" name="number_of_pages_anount" class="number-of-pages-amount" value="0" />
                        <input type="hidden" name="estimated_delivery_amount" class="estimated-delivery-amount" value="0" />
                        <input type="hidden" name="sum_of_all_amount" class="sum-of-all-amount" value="0" />
                       
                        <input type="hidden" name="request_reference" value="{{$randomString}}" />
                        <div class="row">
                            <div class="col-md-6" style="display:none;">
                                <label>Who You Are: <span style="color:red;">*</span></label><br>
                                <label class="radio-inline"><input type="radio" name="who_name" value="1" checked /> Individual</label>
                                <label class="radio-inline"><input type="radio" name="who_name" value="2" /> Business Customer</label>
                                <label class="radio-inline"><input type="radio" name="who_name" value="3" /> Translator</label>
                            </div>

                            <div class="col-md-6 form-check form-check-inline">
                                <label class="w-100">Tipo de servicio: <span style="color:red;">*</span></label><br>
                                <label class="radio-inline d-md-inline d-block"><input type="radio" class="service-type-cls w-100 align-middle cust-radios" name="service_type" value="1" required> <span class="">Traducir</span></label>
                                <label class="radio-inline d-md-inline d-block"><input type="radio" class="service-type-cls w-100 align-middle cust-radios" name="service_type" value="2" required> <span class="">Transcribir</span></label>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Traducir desde: <span style="color:red;">*</span></label>
                                <select name="translate_from" class="form-control" required>
                                    <option value="" selected>Seleccionar idioma</option>
                                    @forelse($languages as $l)
                                     <option value="{{$l->id}}">{{$l->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label>Traducir a: <span style="color:red;">*</span></label>
                                <select name="translate_to" class="form-control" required>
                                <option value="" selected>Seleccionar idioma</option>
                                    @forelse($languages as $l)
                                     <option value="{{$l->id}}">{{$l->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Número de páginas: <span style="color:red;">*</span></label>
                                <input type="number" name="page_number" class="page-number-clse form-control" placeholder="Ingrese el número de páginas" required>
                                <span>1 página = 250 palabras Max</span>
                                <span data-toggle="tooltip" data-placement="top" title="Ingrese el número de páginas que necesita para traducir.Una página es de aproximadamente 250 palabras."><i class="fa fa-info-circle"></i></span>

                            </div>

                            <div class="col-md-6">
                                <label>Archivo de carga: <span style="color:red;">*</span></label>
                                <input type="file" name="file_name" class="file-upload-cls form-control"  required>
                                <div id="uploadStatus" class="mt-3"></div>
                                <span>Información de carga de archivos </span><span data-toggle="tooltip" data-placement="top" title="Nuestra herramienta de conteo de palabras verifica los tipos de archivos compatibles y estima el número de palabras o páginas.Una página es de aproximadamente 250 palabras.Revise el recuento de palabras antes de realizar su pedido.Si nuestros gerentes de proyecto encuentran grandes diferencias en el recuento, pueden comunicarse con usted para actualizar su cotización.Tipos de archivos compatibles: DOCX, DOC, XLSX, PPTX, TXT, XLIFF, CSV, XML, HTML, PDF, JSON, BMP, PNM, PNG, JFIF, JPEG, TIFF, TIFF."><i class="fa fa-info-circle"></i></span>

                                <input type="hidden" name="file_id" class="record-file-id" value="0" />
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 form-check form-check-inline">
                                <label class="w-100">Entrega estimada: <span style="color:red;">*</span></label><br>
                                <label class="radio-inline d-md-inline d-blockw-25"><input type="radio" class="delivery-type-cls w-100 align-middle cust-radios" name="delivery_type" value="1" required> Estándar</label>
                                <label class="radio-inline d-md-inline d-block"><input type="radio" class="delivery-type-cls w-100 align-middle cust-radios" name="delivery_type" value="2" required> Prioridad</label>
                                <label class="radio-inline d-md-inline d-block"><input type="radio" class="delivery-type-cls w-100 align-middle cust-radios" name="delivery_type" value="3" required> Urgente</label>
                            </div>

                            <div class="col-md-6">
                                <label>Nombre: <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="customer_name" placeholder="Ingrese su nombre" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Correo electrónico: <span style="color:red;">*</span></label>
                                <input type="email" class="form-control" name="email" placeholder="Ingrese su correo electrónico" required>
                            </div>

                            <div class="col-md-6">
                                <label>Teléfono: <span style="color:red;">*</span></label>
                                <input type="tel" class="form-control" name="phone"  pattern="^\(\d{3}\) \d{3}-\d{4}$" placeholder="(123) 456-7890"  required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label>Comentario:</label>
                                <textarea class="form-control" name="comments" rows="3" placeholder="Ingrese sus comentarios"></textarea>
                            </div>
                        </div>

                        <input type="submit" id="HiddenSubmit" style="display:none;" /> 
                        <div class="text-center mt-4">
                        </div>
                    </form>
                    
                   
                </div>
                <div class="col-md-4">
                <div class="order-summary">
                        <h4>Resumen de pedido</h4>
                        <p><strong>Tipo de servicio:</strong> <span class="service-type-container"></span></p>
                        <p><strong>Número de páginas:</strong> <span class="pages-count">$0.00</span></p>
                        <p><strong>Enlace de descarga:</strong> <a href="javascript:;" class="uploaded-file-url" style="display:none;" target="_blank">Descargar archivo</a></p>
                        <p><strong>Entrega estimada:</strong> <span class="delivery-time">$0.00</span></p>
                        <p><strong>Cantidad total:</strong> <span class="total-amount">$0.00</span></p>       
                        <button type="button" class="btn-form-submit btn btn-primary">Orden</button>
                        <!-- <div id="paypal-button-container" data-id="0"></div> -->
                        <div id="card-button-container"  data-id="0"></div>
                        <div class="alert alert-success success-msg" style="display:none;font-size: 20px;font-family: ui-serif;"><h3 style="font-family: ui-serif;text-align:center;color:#3c763d;">Gracias</h3>¡Su pedido ha sido realizado con éxito!Gracias por elegirnos.Nuestro agente de traducción se comunicará con usted en breve.
                        
                    </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Get Quote -->    

    <!-- Start Services 
============================================= -->
    <div class="services-style-three-area default-padding bottom-less bg-gray-secondary bg-cover" style="background-image: url({{ asset('/assets/img/shape/24.png)') }};">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Nuestros servicios</h4>
                        <h2 class="title">Empodera tu negocio con nuestros servicios.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="services-style-three-item">
                       <div class="item-title">
                            <img src="{{ asset('/assets/img/icon/icon-1.webp') }}" alt="">
                            <h4><a href="av-translation.php">Traducción</a></h4>
                            <p>
                            Nosotros, en TradationWindows, entendemos completamente que la comunicación efectiva entre los idiomas va más allá de la traducción.
                            </p>
                            <div class="d-flex mt-30">
                                <a href="av-translation.php"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                 </div>
                <!-- End Single Item -->
                 <!-- Single Item -->
                 <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="services-style-three-item">
                       <div class="item-title">
                            <img src="{{ asset('/assets/img/icon/icon-2.webp') }}" alt="">
                            <h4><a href="av-transcription.php">Transcripción</a></h4>
                            <p>
                            TranslationWindows sobresale en proporcionar servicios integrales de transcripción en una multitud de idiomas, combinando una precisión incomparable.
                            </p>
                            <div class="d-flex mt-30">
                                <a href="av-transcription.php"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                 </div>
                <!-- End Single Item -->
                 <!-- Single Item -->
                 <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="services-style-three-item">
                       <div class="item-title">
                            <img src="{{ asset('/assets/img/icon/icon-3.webp') }}" alt="">
                            <h4><a href="subtitling.php">Subtitulación</a></h4>
                            <p>
                                En TradationWindows, ofrecemos servicios de subtitulación expertos para una amplia gama de contenido de audio y video en cada idioma.
                            </p>
                            <div class="d-flex mt-30">
                                <a href="subtitling.php"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                 </div>
                <!-- End Single Item -->
            </div>
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="services-style-three-item">
                       <div class="item-title">
                            <img src="{{ asset('/assets/img/icon/icon-4.webp') }}" alt="">
                            <h4><a href="proofreading-copy-editing.php">Profirer y copiar edición</a></h4>
                            <p>
                                Para asegurarse de que su texto sea claro, preciso y de un calibre profesional, TranslationWindows.com proporciona servicios profesionales de revisión y edición de copias.
                            </p>
                            <div class="d-flex mt-30">
                                <a href="proofreading-copy-editing.php"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                 </div>
                <!-- End Single Item -->
                 <!-- Single Item -->
                 <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="services-style-three-item">
                       <div class="item-title">
                            <img src="{{ asset('/assets/img/icon/icon-5.webp') }}" alt="">
                            <h4><a href="proofreading-translation.php">Revisión y traducción del contenido de IA</a></h4>
                            <p>
                                Nuestra especialidad en TranslationWindows.com es editar y traducir contenido generado por IA para asegurarse de que sea preciso, bien escrito y apropiado para la cultura objetivo.
                            </p>
                            <div class="d-flex mt-30">
                                <a href="proofreading-translation.php"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                 </div>
                <!-- End Single Item -->
                 <!-- Single Item -->
                 <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="services-style-three-item">
                       <div class="item-title">
                            <img src="{{ asset('/assets/img/icon/icon-6.webp') }}" alt="">
                            <h4><a href="industry-specific-services.php">Servicios específicos de la industria</a></h4>
                            <p>
                                Servicios de traducción y diseño personalizados realizados para adaptarse a los requisitos particulares de su sector.
                            </p>
                            <div class="d-flex mt-30">
                                <a href="industry-specific-services.php"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                 </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Services -->

<!-- CTA Starts -->
<div class="cta-bg pt-30 pb-30">
    <div class="container space-2">
    <div class="row justify-content-md-center align-items-md-center">
        <div class="col-md-4 col-lg-4 d-none d-md-inline-block">
        <img class="img-fluid" src="{{ asset('/assets/img/cta-img.avif') }}" alt="">
        </div>
        <div class="col-md-8 col-lg-6 offset-lg-1">
        <!-- Title -->
        <div class="mb-5">
            <h2 class="text-white mb-1">Empieza a hablar con nosotras hoy</h2>
            <p class="lead text-light">Contacto para más información en <a href="mailto:sales@translationwindows.com">sales@translationwindows.com</a>.<br><a href="tel:(254) 271-4094">(254) 271-4094</a></p>
        </div>
        <!-- End Title -->
        <!-- Button -->
        <a class="btn btn-xs btn-light text-left mb-2 mb-md-0 mr-md-2" href="javascript:void(Tawk_API.toggle())">
            <span class="media align-items-center">
            <span class="fa fa-regular fa-headset fa-3x mr-3"></span>
            <span class="d-block">
                <span class="d-block">Empiece a chatear ahora</span>
            </span>
            </span>
        </a>
        <!-- End Button -->
        <!-- Button -->
        <a class="btn btn-xs btn-light text-left mb-2 mb-md-0" href="tel:(254) 271-4094">
            <span class="media align-items-center">
            <span class="far fa-phone fa-3x mr-3"></span>
            <span class="d-block">
                <span class="d-block">Llamar ahora</span>
            </span>
            </span>
        </a>
        <!-- End Button -->
        </div>
    </div>
    </div>
</div>
    <!-- End CTA Section -->    

<!-- Start Translation Services 
    ============================================= -->
    <div class="speciality-style-one-area">
        <div class="container">
            <div class="row align-center my-5">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <h4 class="sub-title">Servicios de traducción</h4>
                    <h5>Brindamos servicios integrales en traducción y legalización para individuos y empresas..</h5>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-5"><img src="{{ asset('/assets/img/ct.webp') }}" alt=""></div>
                <div class="col-lg-7 px-5"><h2 class="title">Traducciones certificadas </h2>
                    <p class="card-text lead">Obtenga traducciones certificadas, notaradas, juradas y legalizadas, controladas y aceptadas en todo el mundo!</p>
                    <ul class="list-style-one">
                        <li>Documentos traducidos y certificados con precisión.</li>   
                        <li>Entrega de PDF digital seguro con la opción de envío mundial.</li>
                        <li>Servicios de apostilla y notarización de expertos, confianza en todo el mundo.</li>

                    </ul>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-5"><img src="{{ asset('/assets/img/pt.webp') }}" alt=""></div>
                <div class="col-lg-7 px-5"><h2 class="title">Traducciones profesionales </h2>
                    <p class="card-text lead">Traducciones estándar rápidas y confiables diseñadas para individuos y empresas!</p>
                    <ul class="list-style-one">
                        <li>Traductores expertos con conocimiento de materia especializada.</li>
                        <li>Asistencia de expertos para documentos comerciales, técnicos y legales.</li>
                        <li>Acelere sus traducciones con IA: más sencillo, más inteligente y más rentable!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Translation Services -->         
     
    <!-- Start About
    ============================================= -->
    <div class="about-style-three-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <div class="about-style-three-info">
                        <h4 class="sub-title">Sobre nosotras</h4>
                        <h1 class="title">Providing solutions for translation services</h1>
                        <p>Nuestro negocio se especializa en proporcionar soluciones de traducción exhaustivas que sean adecuadas para sus requisitos únicos.Nuestros lingüistas altamente calificados y tecnología de vanguardia garantizan traducciones precisas que son culturalmente apropiadas para una variedad de empresas.Ya sea que necesite localización, soporte multilingüe o traducción de documentos, podemos ayudarlo a cerrar las brechas de comunicación y llegar a una audiencia mundial con nuestros servicios confiables y efectivos..</p>
                        <div class="info-grid mt-50">
                            <div class="left-info">
                                <div class="fun-fact-card-two">
                                    <h4 class="sub-title">Nuestra experiencia</h4>
                                    <div class="counter-title">
                                        <div class="counter">
                                            <div class="timer" data-to="10" data-speed="2000">10</div>
                                            <div class="operator">+</div>
                                        </div>
                                    </div>
                                    <span class="medium">Años de experiencia</span>
                                </div>
                            </div>
                            <div class="right-info bg-gradient text-light">
                                <ul class="list-style-three">
                                    <li>Traducción de audio/video</li>
                                    <li>Traducción de documentos</li>
                                    <li>Transcripción de audio/video</li>
                                    <li>Subtitulación</li>
                                    <li>Profirer y copiar edición</li>
                                    <li>Traducción de creadación y AI</li>
                                    <li>Servicios específicos de la industria</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="thumb-style-two">
                        <img src="{{ asset('/assets/img/about/4.avif') }}" alt="Providing solutions for translation services
">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
    
    <!-- Start Why Choose Us 
    ============================================= -->
    <div class="choose-us-style-two-area relative bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 order-xl-last pl-80 pl-md-15 pl-xs-15 choose-us-style-two-content mt-5">
                    <div class="info-style-one">
                        <h4 class="sub-title">Por qué elegirnos</h4>
                        <h2 class="title">Empoderar el éxito en la tecnología desde 2014 </h2>
                        <p>
                        En TradationWindows, entendemos que cada proyecto y cliente tiene diferentes requisitos.Las principales causas de esto son las variaciones en el tamaño del proyecto, la industria y el idioma.Por lo tanto, abordamos cada orden con una técnica única.Nuestros traductores tienen experiencia en una variedad de campos, como la educación y la médica.Esto nos permite igualarlo con un traductor completamente calificado y proyectado en su industria particular, asegurando servicios de traducción profesional precisos y rápidos.
                        </p>
                        <a class="btn btn-md circle btn-gradient animation mt-20" href="javascript::">Obtenga más información</a>
                    </div>
                </div>
                <div class="col-xl-6 pt-5">
                    <div class="thumb-style-three">
                        <img src="{{ asset('/assets/img/illustration/7.avif') }}" alt="Translation windows empowering success in technology since 2014
" width="539">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us -->


    <!-- Start Speciality 
    ============================================= -->
    <div class="speciality-style-one-area default-padding-bottom">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4">
                    <img src="{{ asset('/assets/img/comit.webp') }}" alt="">
                </div>
                <div class="col-xl-7 offset-xl-1 col-lg-8">
                    <div class="speciality-items">
                        <h4 class="sub-title">Nuestra experiencia</h4>
                        <h2 class="title">Nuestro compromiso <br> es la satisfacción del cliente </h2>
                        <div class="d-grid mt-40">
                            <ul class="list-style-two">
                                <li>Traducción </li>
                                <li>Transcripción</li>
                                <li>Subtitulación</li>
                            </ul>
                            <div class="progress-items">
                                <div class="progress-box">
                                    <h5>Traducción</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="70">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Transcripción</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="95">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Subtitulación</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="95">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Speciality -->

    <!-- Start Gallery 
    ============================================= -->
    <div class="gallery-style-one-area bg-gray default-padding d-none">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-9">
                    <div class="site-heading">
                        <h4 class="sub-title">Case Studies</h4>
                        <h2 class="title">Have a view of our amazing projects with our clients</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-3">
                    <div class="project-navigation-items">
                        <!-- Navigation -->
                        <div class="project-swiper-nav">
                            <!-- Pagination -->
                            <div class="project-pagination"></div>
                            <div class="project-button-prev"></div>
                            <div class="project-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fill">
            <div class="row">
                <div class="gallery-style-one-carousel swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset('/assets/img/projects/5.jpg') }}" alt="Image Not Found">
                                <div class="overlay">
                                    <div class="info">
                                        <h4><a href="project-details.html">Cyber Security</a></h4>
                                        <span>Technology, IT</span>
                                        <p>
                                            Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.
                                        </p>
                                    </div>
                                    <a href="project-details.html">Explore <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset('/assets/img/projects/6.jpg') }}" alt="Image Not Found">
                                <div class="overlay">
                                    <div class="info">
                                        <h4><a href="project-details.html">IT Counsultancy</a></h4>
                                        <span>Security, Firewall</span>
                                        <p>
                                            Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.
                                        </p>
                                    </div>
                                    <a href="project-details.html">Explore <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset('/assets/img/projects/7.jpg') }}" alt="Image Not Found">
                                <div class="overlay">
                                    <div class="info">
                                        <h4><a href="project-details.html">Analysis of Security</a></h4>
                                        <span>Support, Tech</span>
                                        <p>
                                            Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.
                                        </p>
                                    </div>
                                    <a href="project-details.html">Explore <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                         <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset('/assets/img/projects/8.jpg') }}" alt="Image Not Found">
                                <div class="overlay">
                                    <div class="info">
                                        <h4><a href="project-details.html">Business Analysis</a></h4>
                                        <span>Network, Error</span>
                                        <p>
                                            Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.
                                        </p>
                                    </div>
                                    <a href="project-details.html">Explore <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <div class="services-content bg-white default-padding d-none d-md-block">
        <div class="container">
            <div class="about-style-one-items">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="thumb-style-one">
                            <img src="{{ asset('/assets/img/about/1.avif') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 pl-50 pl-md-15 pl-xs-15">
                        <div class="about-style-one-info">
                            <div class="content">
                                <h2 class="title">Con un equipo de más de 200 expertos, estamos con fluidez más de 100 idiomas y listos para ayudar.</h2>
                                <p>
                                Aumente la facilidad y efectividad de su comunicación.Semantix ofrece soluciones lingüísticas adaptadas para satisfacer todas las necesidades de su empresa.
                                </p>
                            </div>
                            <ul class="card-list">
                                <li>
                                    <img src="{{ asset('/assets/img/icon/4.png') }}" alt="Translationwindows">
                                    <h5>Empresa galardonada</h5>
                                </li>
                                <li>
                                    <h2>3.8 X</h2>
                                    <h5>Crecimiento económico </h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonial-style-two-area bg-dark default-padding text-light bg-cover d-none" style="background-image: url({{ asset('/assets/img/shape/5.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-two-info">
                        <div class="icon">
                            <img src="{{ asset('/assets/img/quote.png') }}" alt="Image Not Found">
                        </div>
                        <h2>Over 50K clients and 5,000 projects across the globe.</h2>
                        <div class="review-card">
                            <h6>Excellent 10,260+ Reviews</h6>
                            <div class="d-flex">
                                <div class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>4.8/5</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-60 pl-md-15 pl-xs-15">
                    <div class="testimonial-style-two-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">
                                    <div class="item">
                                        <div class="text-info">
                                            <p>
                                                “The accuracy and expertise of Translationwindows' medical translation service far above our expectations. The group ensured uniformity and clarity in all documents by precisely translating difficult medical content.
                                            </p>
                                        </div>
                                        <div class="content">
                                            <div class="thumb">
                                                <img src="{{ asset('/assets/img/team/v1.webp') }}" alt="Image Not Found">
                                            </div>
                                            <div class="info">
                                                <h4>Matthew J. Wyman</h4>
                                                <span>Office Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">
                                    <div class="item">
                                        <div class="text-info">
                                            <p>
                                                “Translationwindows offered quick and precise transcribing services to Mitchell, Sanders Law Firm. They are our first choice for legal transcriptions due to their dependability and meticulous attention to detail and professionalism.
                                            </p>
                                        </div>
                                        <div class="content">
                                            <div class="thumb">
                                                <img src="{{ asset('/assets/img/team/v2.webp') }}" alt="Image Not Found">
                                            </div>
                                            <div class="info">
                                                <h4>Isabella Bu Spar</h4>
                                                <span>Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
    
    <div class="modal fade" id="langModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-5 overflow-hidden">
                <div class="modal-body">
                    <div class="row text-center">
                        <div class="col">
                            <h5>Your journey starts here—what’s your first language?</h5>
                            <div class="flag-cont">
                                <a href="javascript:;" class="usflag" onclick="setLanguage('english', '/')">
                                    <img src="{{ asset('/assets/img/flag_us.avif') }}" alt="Translation windows empowering success in technology since 2014">English
                                </a>
                                <a class="spflag" onclick="setLanguage('español', '/es')" href="javascript:;">
                                    <img src="{{ asset('/assets/img/flag_sp.avif') }}" alt="Translation windows empowering success in technology since 2014">Española
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src ="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://sandbox.paypal.com/sdk/js?client-id=AcHr6j-cjCKAsuABcrFWm1i1HGstx6cKl_GfNie-Peskv3QVzmxAEjqr1g6rvgoj6LI-RaH5Hmmvc8A5&currency=USD"></script>

<script>

   
//$('[data-toggle="tooltip"]').tooltip(); 

paypal.Buttons({
    fundingSource: paypal.FUNDING.CARD, // Card payment button
    style: {
        layout: 'vertical',
        color: 'black', // Allowed values: 'black' or 'white'
        shape: 'rect',
        label: 'pay'
    },
    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: parseFloat($(".sum-of-all-amount").val())  // Payment amount in USD
                }
            }],
            application_context: {
                shipping_preference: "NO_SHIPPING" // Explicitly disable shipping
            }
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {

            Swal.fire({
  title: "Thank You!",
  text: "Your order has been successfully placed! Thank you for choosing us. Our translation agent will reach out to you shortly.",
  icon: "success"
});

            let payerName = details.payer.name.given_name + " " + details.payer.name.surname;
            let payerEmail = details.payer.email_address;
            let payerID = details.payer.payer_id;
            let transactionID = details.id;
            let status = details.status;
            let purchaseAmount = details.purchase_units[0].amount.value;
            let currencyCode = details.purchase_units[0].amount.currency_code;
            let createTime = details.create_time;
            let updateTime = details.update_time;
            let RequestID = $("#card-button-container").attr("data-id");

            $.ajax({
                type:'POST',
                url:"{{route('savepaymentinfo')}}",
                data:{
                    payerName:payerName,
                    payerEmail:payerEmail,
                    payerID:payerID,
                    transactionID:transactionID,
                    status:status,
                    purchaseAmount:purchaseAmount,
                    currencyCode:currencyCode,
                    createTime:createTime,
                    updateTime:updateTime,
                    RequestID:RequestID
                }
            }).done(function(resp){
                    // console.log(resp);

                    

                    $("#card-button-container").hide();

                    $(".success-msg").show();

                    $("#QuoteForm")[0].reset();

                    $("html, body").animate({ scrollTop: 0 }, "slow");

                    setTimeout(function(){

                        location.reload();

                    },10000);

                    // $("#QuoteForm input[type='file']").val('');
                    // $("#uploadStatus").hide();
                    // $(".file-upload-cls").removeAttr("disabled");
                    // $(".service-type-container").text('');
                    // $(".pages-count").text('');
                    // $(".uploaded-file-url").attr("javascript:;");
                    // $(".uploaded-file-url").hide();
                    // $(".delivery-time").text('');
                    // $(".total-amount").text('');
                    


            }).fail(function(resp){
                console.log(resp);
            });
            
            console.log("Request Id:", RequestID);
            console.log("Payer Name:", payerName);
            console.log("Payer Email:", payerEmail);
            console.log("Payer ID:", payerID);
            console.log("Transaction ID:", transactionID);
            console.log("Status:", status);
            console.log("Purchase Amount:", purchaseAmount);
            console.log("Currency Code:", currencyCode);
            console.log("Create Time:", createTime);
            console.log("Update Time:", updateTime);
        });
    },
    onError: function(err) {
        console.error('Error during transaction:', err);
    }
}).render('#card-button-container');


/*paypal.Buttons({
            
            style: {
                layout: 'vertical',
                color: 'blue',
                shape: 'rect',
                label: 'pay'
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: parseFloat($(".sum-of-all-amount").val()) // Set the payment amount
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    //alert('Transaction completed by ' + details.payer.name.given_name);
                    // console.log(details); // Log transaction details
            let payerName = details.payer.name.given_name + " " + details.payer.name.surname;
            let payerEmail = details.payer.email_address;
            let payerID = details.payer.payer_id;
            let transactionID = details.id;
            let status = details.status;
            let purchaseAmount = details.purchase_units[0].amount.value;
            let currencyCode = details.purchase_units[0].amount.currency_code;
            let createTime = details.create_time;
            let updateTime = details.update_time;
            let RequestID = $("#paypal-button-container").attr("data-id");

            $.ajax({
                type:'POST',
                url:"{{route('savepaymentinfo')}}",
                data:{
                    payerName:payerName,
                    payerEmail:payerEmail,
                    payerID:payerID,
                    transactionID:transactionID,
                    status:status,
                    purchaseAmount:purchaseAmount,
                    currencyCode:currencyCode,
                    createTime:createTime,
                    updateTime:updateTime,
                    RequestID:RequestID
                }
            }).done(function(resp){
                    console.log(resp);
            }).fail(function(resp){
                console.log(resp);
            });
            
            console.log("Request Id:", RequestID);
            console.log("Payer Name:", payerName);
            console.log("Payer Email:", payerEmail);
            console.log("Payer ID:", payerID);
            console.log("Transaction ID:", transactionID);
            console.log("Status:", status);
            console.log("Purchase Amount:", purchaseAmount);
            console.log("Currency Code:", currencyCode);
            console.log("Create Time:", createTime);
            console.log("Update Time:", updateTime);
                });
            },
            onError: function(err) {
                console.error('Error processing payment', err);
            }
        }).render('#paypal-button-container');
*/
   $(document).ready(function(){

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

        function Total()
        {
            var servicetype = parseInt($(".service-type-amount").val());
            var pagecount = parseInt($(".number-of-pages-amount").val());
            var estimateddelivery = parseInt($(".estimated-delivery-amount").val());

            var sum = servicetype + pagecount + estimateddelivery;

            $(".sum-of-all-amount").val(sum);

            $(".total-amount").text("$"+sum);
        }
    
        $(document).on('click','.btn-form-submit',function(){

            if ($("#QuoteForm")[0].checkValidity()) {
            
                $(".btn-form-submit").text("Processing...");

                
                $.ajax({
                    url: "{{ route('saverequest') }}", // Laravel route
                    type: "POST",
                    data: $("#QuoteForm").serialize(),
                    // processData: false,
                    // contentType: false,
                    // beforeSend: function() {
                    //     $("#uploadStatus").html("<p class='text-info'>Uploading...</p>");
                    // },
                    success: function(resp) {
                       $("#card-button-container").attr("data-id",resp.request_id);
                       $("#card-button-container").show();
                       $(".btn-form-submit").hide();
                       $(".btn-form-submit").text("Place Order");
                    },
                    error: function(xhr) {
                        $(".btn-form-submit").text("Place Order");
                        //$("#uploadStatus").html("<p class='text-danger'>Error: " + xhr.responseText + "</p>");
                    }
                });


                } else {
                    $(".btn-form-submit").text("Place Order");
                    $("#HiddenSubmit").trigger("click");
                }

        });

        $(".file-upload-cls").change(function() {
            $(".uploaded-file-url").hide();
                var formData = new FormData();
                var fileInput = this.files[0]; // Get the selected file

                if (!fileInput) {
                    $("#uploadStatus").html("<p class='text-danger'>Please select a file.</p>");
                    return;
                }
                var ReqRef = $("input[name=request_reference]").val();
                formData.append("request_reference", ReqRef);
                formData.append("file_name", fileInput);
               // formData.append("_token", "{{ csrf_token() }}"); // Laravel CSRF Token

                $.ajax({
                    url: "{{ route('uploadfile') }}", // Laravel route
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $("#uploadStatus").html("<p class='text-info'>Uploading...</p>");
                    },
                    success: function(response) {
                        if (response.success) {
                            $(".uploaded-file-url").attr("href",response.file_path);
                            $(".uploaded-file-url").show();
                            $(".record-file-id").val(response.file_id);
                            if(response.file_id > 0)
                        {
                            $(".file-upload-cls").removeAttr("required");
                            $(".file-upload-cls").attr("disabled",true);
                        }
                            $("#uploadStatus").html("<p class='text-success'>" + response.message + "</p>");
                        } else {
                            $("#uploadStatus").html("<p class='text-danger'>" + response.message + "</p>");
                        }
                    },
                    error: function(xhr) {
                        $("#uploadStatus").html("<p class='text-danger'>Error: " + xhr.responseText + "</p>");
                    }
                });
            });

        $(".service-type-cls").click(function(){

            var serviceAmount = 0;
            var serviceType = $(this).val();
            var text = "";
            if(serviceType == 1)
            {
                text = "Translate";
                serviceAmount = 0;
            }
            if(serviceType == 2)
            {
                text = "Transcribe";
                serviceAmount = 0;
            }

            $(".service-type-amount").val(serviceAmount);

            $(".service-type-container").text(text);

            Total();

        });

        $(document).on('input','.page-number-clse',function(){
           
            var page = parseInt($(this).val());
            var amount = 20;
            $(".pages-count").text("");
            $(".number-of-pages-amount").val('0');
            if(page > 0)
            {
                var cls= page * amount;
                $(".number-of-pages-amount").val(cls);
                $(".pages-count").text(page + " ( $"+cls+" )");
            }

            Total();

        });

        $(".delivery-type-cls").click(function(){

            var type = $(this).val();

            var txt ="";

            var amount = 0;

            if(type == 1)
            {
                txt ="Standard ( +$10 )";
                amount = 10;
            }
            if(type == 2)
            {
                txt ="Priority ( +$20 )";
                amount = 20;
            }
            if(type == 3)
            {
                txt ="Urgent ( +$30 )";
                amount = 30;
            }

            $(".estimated-delivery-amount").val(amount);

            $(".delivery-time").text(txt);

            Total();

        });

        
   });
</script>
@stop