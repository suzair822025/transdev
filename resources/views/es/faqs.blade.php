@extends('layouts.app')

@section('content')
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{asset("/assets/img/1920x1080/01.jpg")}}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">FAQS </h1>
        <p class="white-text">&nbsp;</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->

<div class="section-seperator my-5">
    <div class="content-lg container space20px">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Cómo puedo confiar en que sus traducciones serán precisas?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Al trabajar con Translationwindows, está en buenas manos. Nos enorgullece haber colaborado con importantes corporaciones e instituciones internacionales de todos los tamaños. La calidad y la precisión son nuestra prioridad, y siempre asignamos cada proyecto al equipo de traducción con la experiencia más adecuada en su campo.  </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Qué idiomas traduces?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Desde afrikáans hasta zulú, ofrecemos traducciones hacia y desde cualquier par de idiomas del mundo. </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Debo presentarles documentos originales?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>No. No es necesario presentar una copia original del documento. Basta con enviar una copia escaneada por correo electrónico, fax o fotografía. </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        ¿Cuales son sus condiciones y métodos de pago?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Aceptamos tarjetas de crédito, tarjetas de débito, PayPal, cheques y transferencias bancarias. El pago se realiza por adelantado.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                         ¿Qué monedas aceptan?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Aceptamos todas las monedas.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        ¿Su servicio de traducción proporciona una declaración jurada?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> No creemos en documentos ni sellos falsos. Nos comprometemos y ofrecemos un trabajo genuino.</p>
                            <strong>Pregunta:</strong><br>
                        <p>Actualmente estoy solicitando la residencia permanente en Canadá y, como parte del proceso, necesito traducir mi certificado de nacimiento malasio del malayo al inglés. También necesito una declaración jurada del traductor que acredite que el contenido de la traducción es fiel y representa el contenido del documento original. ¿Su servicio de traducción proporciona esta declaración jurada, además de una copia certificada o notariada del conjunto de traducciones? Me preguntaba cuánto costaría todo esto y cuánto tardaría. ¿Podría enviarles una copia escaneada de mi certificado de nacimiento?</p>
                        <p><strong>Respuesta:</strong> <br>
                             Ofrecemos servicios de traducción del malayo al inglés. Envíe sus documentos por correo electrónico o súbalos a nuestro sitio web y le proporcionaremos un presupuesto. Tenga en cuenta que solo adjuntamos una "declaración del traductor" a nuestras traducciones, lo cual es suficiente para sus necesidades, ya que somos una agencia de traducción muy reconocida en Columbia Británica. No proporcionamos copias certificadas. Solo notarios públicos y abogados ofrecen este tipo de servicio en Columbia Británica.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                         ¿Su servicio de traducción proporciona una declaración jurada?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> No creemos en documentos ni sellos falsos. Nos comprometemos y ofrecemos un trabajo genuino.</p>
                            <strong>Pregunta:</strong><br>
                        <p>Actualmente estoy solicitando la residencia permanente en Canadá y, como parte del proceso, necesito traducir mi certificado de nacimiento malasio del malayo al inglés. También necesito una declaración jurada del traductor que acredite que el contenido de la traducción es fiel y representa el contenido del documento original. ¿Su servicio de traducción proporciona esta declaración jurada, además de una copia certificada o notariada del conjunto de traducciones? Me preguntaba cuánto costaría todo esto y cuánto tardaría. ¿Podría enviarles una copia escaneada de mi certificado de nacimiento?</p>
                        <p><strong>Respuesta:</strong> <br>
                             Ofrecemos servicios de traducción del malayo al inglés. Envíe sus documentos por correo electrónico o súbalos a nuestro sitio web y le proporcionaremos un presupuesto. Tenga en cuenta que solo adjuntamos una "declaración del traductor" a nuestras traducciones, lo cual es suficiente para sus necesidades, ya que somos una agencia de traducción muy reconocida en Columbia Británica. No proporcionamos copias certificadas. Solo notarios públicos y abogados ofrecen este tipo de servicio en Columbia Británica.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                         ¿Cuáles son los pasos para mejorar el proceso de revisión?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> El objetivo del proceso colaborativo de revisión de traducciones por parte de pares expertos en el área temática, pero no en traducción propiamente dicha, es lograr la mejor calidad del material promocional mediante la verificación de la precisión de los datos y las cifras, así como de la terminología específica del tema en cuestión. A pesar de la debida investigación del área temática que los traductores siempre realizan, los revisores pares pueden estar más familiarizados con la terminología utilizada en el tema en cuestión (inmigración, asentamiento, cuidado infantil, etc.).</p>
                        <p> Dado que la traducción la realizan traductores profesionales, lingüistas o expertos en idiomas, es poco probable que un revisor tenga que revisar el estilo, la gramática o la puntuación. Los traductores también son hablantes nativos del idioma de destino, a menudo inmersos en su comunidad y conscientes de los matices que deben transmitirse a los lectores.</p>
                        <p> Es necesario distinguir claramente entre evaluación y revisión. La labor del revisor no consiste en mejorar una traducción que ya pueda ser buena. Por lo tanto, los revisores deben evitar la tentación de imponer sus preferencias personales a la traducción. Al evaluar errores, simplemente deben preguntarse: "¿Es adecuada la traducción?". Si consideran que no lo es, deben ser capaces de caracterizar o explicar el error. No basta con justificar la evaluación de un error diciendo: "Bueno, no suena bien". Si no se puede identificar el problema, quizás no sea un error después de todo./p>
                        <p> Please keep in mind that the literacy level of the source text will be reflected in the translation. Translators cannot and will not take the liberty to simplify the source text to adjust it to the literacy level of the readers. A plain language text will be translated into plain target language, just as a technical language text will retain its technical level in the translation. The writer of the original text will have to keep this in mind along with other issues that may affect potential readers (e.g. cultural sensitivity).</p>
                        <p> Al revisar un archivo PDF, se deben usar recuadros de texto (notas adhesivas amarillas) para escribir comentarios. Una vez impresa, se debe usar bolígrafo negro y letra legible, ya que las páginas corregidas probablemente se escanearán y enviarán por correo electrónico.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        ¿Los estándares y elementos gráficos se aplican a todos los idiomas de la misma manera que están concebidos para los documentos en inglés?
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Al procesar los materiales traducidos y producir el resultado final, en lugar de buscar una imagen uniforme para todos los idiomas de un proyecto, nos centramos en los idiomas en sí. Nos preocupa respetar la sensibilidad cultural de cada comunidad lingüística. Nuestros traductores nos guían en este proceso y nos mantienen enfocados. Por ejemplo, dado que el persa, el árabe, etc., se leen de derecha a izquierda, todo el texto, membrete y logotipos suelen estar invertidos.
                             Lo que es común en un idioma o comunidad puede no serlo en otro. Y lo que está destinado a un público objetivo ubicado en la provincia de Columbia Británica no necesariamente será adecuado para un público de otro lugar.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        ¿Es posible traducir documentos escritos a mano muy antiguos?
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Para proporcionar traducciones precisas, los traductores deben poder leer los textos originales. En muchos casos no es posible, pero a veces se pueden hacer conjeturas fundamentadas, y solo cuando el traductor tiene un nivel de certeza razonable de que la traducción es correcta. Un traductor experimentado sabe por experiencia cómo se realizan las entradas en documentos antiguos; sin embargo, cuando las entradas no son legibles o están abreviadas, es realmente imposible ofrecer una traducción fiel y precisa, y dado que la legibilidad suele ser un problema, los traductores prefieren o están legalmente obligados a optar por "ilegible" en lugar de conjeturar.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEleven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        ¿Cuál es la diferencia entre el chino simplificado y el chino tradicional?
                    </button>
                </h2>
                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> A pesar de su asombrosa complejidad, los caracteres chinos tienen la ventaja de posibilitar la comunicación escrita entre personas que hablan dialectos e idiomas mutuamente ininteligibles. Una palabra dada puede ser bastante diferente en mandarín y cantonés, pero se escribiría de forma idéntica en ambos dialectos. Dado que los caracteres chinos también se utilizan en japonés, cada idioma, al escribirse, es parcialmente inteligible para el hablante del otro, a pesar de que los dos idiomas hablados son totalmente distintos.
                         A lo largo de los años se han realizado numerosos intentos para simplificar el sistema de escritura chino. En 1955, la República Popular China inició un plan para simplificar más de 1700 caracteres, cifra que se incrementaría gradualmente hasta que más de la mitad de los símbolos más utilizados se simplificaran.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwelve">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                        Necesito una traducción al chino, ¿qué necesito saber?
                    </button>
                </h2>
                <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Para saber a qué escritura china traducir, es necesario conocer al público objetivo. El público de Hong Kong y Taiwán lee la escritura tradicional china. El público de China continental y Singapur lee el chino simplificado.
                            No es posible saber qué escritura usar solo indicando el idioma hablado por el público objetivo. El cantonés se habla en Hong Kong y el sur de China. El mandarín se habla en Taiwán, China continental y Singapur.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThirteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                        ¿Por qué hay diferencias en el idioma vietnamita utilizado en el norte y el sur del país?
                    </button>
                </h2>
                <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> Tiene que ver con la historia de Vietnam. Antes de 1975, Vietnam estaba dividido en dos partes. El norte estaba bajo el régimen comunista y el sur era una república libre. El idioma también cambió sustancialmente entre las dos regiones. El idioma puro (o "no politizado") se usaba en Vietnam del Sur, pero en el norte, el idioma fue reconfigurado y remodelado deliberadamente con fines propagandísticos y de control de masas.</p>
                    </div>
                </div>
            </div>
        </div> <!-- ##accordionExample ends -->
    </div> <!-- ..content-lg container space20px -->
</div> <!-- ..section-seperator my-5 -->

<!--========== END PAGE LAYOUT ==========-->
@endsection

@section('scripts')

@endsection