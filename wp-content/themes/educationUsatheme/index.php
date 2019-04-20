<?php get_header(); ?>
<main>
    <!-- LANDING PAGE CAPTION AND IMAGE TEXT -->
    <section class="container-fluid py-5 px-0">
        <div class="row">
            <div class="col-6 col-md-6 col-lg-5 pr-5" style="background: url(<?php echo wp_upload_dir('2019/04')['url']; ?>/front-page-main-img.png);
                                        background-size: cover;">   
            </div>
            <article id="main-article" class="col-6 col-md-6 col-lg-6 py-5 pr-5">
                <h3 class="text-black-50 font-weight-bold">Cursos</h3>
                <h1>Inglés para Adultos</h1>
                <h3 class="text-primary font-weight-bold ">Este programa está dirigido para personas de los 15 años en adelante</h3>
                <p class="mt-5 text-dark d-none d-md-none d-lg-block">Es un programa de inglés comunicativo que consta de 16 niveles los cuales se dividen en 4 módulos, cada uno de 4 niveles. 
                    Cada nivel es de 32 horas. Los resultados obtenidos están ligados al Marco Común Europeo de Referencia (MCER). <br>
                    Nuestas clases son altamente participativas fomentando la interacción con tus compañeros de clase y docentes desde un enfoque comunicativo en
                    contextos de la vida cotidiana. Aunque el énfasis es en la competencia comunicativa, se profundiza también en las estructuras gramaticales y vocabulario.
                
                </p>
                <button type="button" class="btn btn-primary rounded-0 py-3 px-4 mt-4">Más Información</button>
            </div>
        </div>
    </section>

    <!-- SECOND ARTICLE -->
    <article class="container my-5 ">
        <h3 class="text-primary mb-5 text-center">Con nuestro programa de Inglés podrás:</h3>
        <div class="card w-100 rounded-0">
            <div class="card-body px-0 pt-0">
                <ul class="nav nav-tabs d-flex justify-content-around align-items-end" id="levels-tab" role="tablist">
                    <li class="nav-item w-25 text-center">
                        <a class="nav-link active" id="level1-tab" data-toggle="tab" href="#level1" role="tab" aria-controls="level1" aria-selected="true">Nivel 1 al 4</a>
                    </li>
                    <li class="nav-item w-25 text-center">
                        <a class="nav-link" id="level2-tab" data-toggle="tab" href="#level2" role="tab" aria-controls="level2" aria-selected="false">Nivel 5 al 8</a>
                    </li>
                    <li class="nav-item w-25 text-center">
                        <a class="nav-link" id="level3-tab" data-toggle="tab" href="#level3" role="tab" aria-controls="level3" aria-selected="false">Nivel 9 al 12</a>
                    </li>
                    <li class="nav-item w-25 text-center">
                        <a class="nav-link" id="level4-tab" data-toggle="tab" href="#level4" role="tab" aria-controls="level4" aria-selected="false">Nivel 13 al 16</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="level1" role="tabpanel" aria-labelledby="level1-tab">
                        <ul class="nav nav-tabs d-flex justify-content-around  align-items-end nav-secondary" id="level1-tabs" role="tablist">
                            <li class="nav-item w-25 text-center">
                                <a class="nav-link active" id="fundamental" data-toggle="tab" href="#fundamental" role="tab" aria-controls="fundamental" aria-selected="true">Fundamental</a>
                            </li>
                            <li class="nav-item w-25 text-center">
                                <a class="nav-link" id="fundamentalplus" data-toggle="tab" href="#fundamentalplus" role="tab" aria-controls="fundamentalplus" aria-selected="false">Fundamental Plus</a>
                            </li>
                            <li class="nav-item w-25 text-center">
                                <a class="nav-link" id="preindependet" data-toggle="tab" href="#preindependet" role="tab" aria-controls="preindependet" aria-selected="false">Pre Independent</a>
                            </li>
                            <li class="nav-item w-25 text-center">
                                <a class="nav-link" id="independent" data-toggle="tab" href="#independent" role="tab" aria-controls="independent" aria-selected="false">Independent</a>
                            </li>
                        </ul>
                        <div class="tab-content border-top py-4 px-4" id="level1TabContent">
                            <div class="tab-pane fade show active" id="fundamental-content" role="tabpanel" aria-labelledby="fundamental-tab">
                                <div class="container">
                                    <div class="row d-flex">
                                        <div class="col-md-5 order-1">
                                            <h4 class="extrabold-text mt-5">Fundamental</h4>
                                            <ul class="pl-3 mt-4 red-bullet">
                                                <li >Dar Información personal.</li>
                                                <li >Ir de compras.</li>
                                                <li >Hablar de tu familia.</li>
                                                <li >Escribir un correo electrónico corto.</li>
                                                <li >Seguir direcciones en un mapa.</li>
                                                <li >Hacer una reserva en un hotel.</li>
                                                <li >Hablar con alguien de algún viaje que realizaste.</li>
                                            </ul>
                                            <h2 class="text-500 bold-text mt-5" style="font-size:3.2em;">Nivel 1 al 4</h2>
                                        </div>
                                        <div class="col-md-7 order-2 ">
                                            <img src="<?php echo wp_upload_dir('2019/04')['url'];?>/fundamental-img.png" width="100%"/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="level2" role="tabpanel" aria-labelledby="level2-tab"></div>
                    <div class="tab-pane fade" id="level3" role="tabpanel" aria-labelledby="level3-tab"></div>
                </div>
            </div>
        </div>
    </article>

    <!-- MCER  -->
    <article class="container my-5 py-5" id="mcer">
       <h3 class="text-primary mb-5">Equivalencia con el Marco Común <br>Europeo de Referencia (MCER)</h3>
       <div class="row">
           <div class="col-12 col-md-12 col-lg-3 bold-text pb-4">
            Programa de Inglés para Adultos(Programa 4 días, Sábados e Intensivos) <br>
           </div>
           <div class="col-4 col-md-3  col-lg-3 bg-gray-200 pt-4 px-4 px-md-5 px-lg-5">
               <strong class="bold-text">Material de Estudio</strong>
               <ul class="py-4 pl-0">
                   <li>Libro Life 1</li>
                   <li>Libro Life 2</li>
                   <li>Libro Life 3</li>
                   <li>Libro Life 4</li>
               </ul>
           </div> 
           <div class="col-4 col-md-5 col-lg-4 bg-gray-300 pt-4 px-4 px-md-5 px-lg-5">
               <strong class="bold-text">Ciclo</strong>
               <ul class="py-4 pl-0">
                   <li>Fundamental 1-4</li>
                   <li>Fundamental Plus 1-4</li>
                   <li>Pre-Independent 1-4</li>
                   <li>Independent 4</li>
               </ul>
           </div> 
           <div class="col-2 col-md-2 col-lg-1 bg-gray-400 pt-4 px-2 px-md-3 px-lg-4">
               <strong class="bold-text text-center d-block">Horas</strong>
               <ul class="py-4 pl-0 text-center">
                   <li>128</li>
                   <li>128</li>
                   <li>128</li>
                   <li>128</li>
               </ul>
           </div> 
           <div class="col-2 col-md-2 col-lg-1 bg-gray-500 pt-4 px-2 px-md-3 px-lg-4">
               <strong class="bold-text text-center d-block">Nivel MCER</strong>
               <ul class="py-4 pl-0 text-center">
                   <li>A1</li>
                   <li>A2</li>
                   <li>B1</li>
                   <li>B1+</li>
               </ul>
           </div> 
       </div>
    </article>

    <!-- FORMAS DE PAGO -->
    <article class="container my-5 pb-5">
        <h3 class="text-primary mb-5">Formas de Pago</h3>
        <div class="card-deck">
            <div class="card py-4 px-lg-4  pb-5 bg-light rounded-0 border-top-0 border-left-0 border-right-0 border-8 border-primary">
                <img src="<?php echo wp_upload_dir('2019/04')['url'];?>/payment-icon-1.png" width="100px" class="ml-3">
                <div class="card-body">
                    <p class="card-text text-dark">Los pagos de los cursos se hacen por nivel. El Colombo no obliga a que se pague
                        todo el curso (16 niveles) por anticipado.
                    </p>
                </div>
            </div> 
            <div class="card  py-4 px-lg-4 pb-5  bg-light rounded-0 border-top-0 border-left-0 border-right-0 border-8 border-primary">
                <img src="<?php echo wp_upload_dir('2019/04')['url'];?>/payment-icon-2.png" width="100px" class="ml-3">
                <div class="card-body">
                    <p class="card-text text-dark">Los pagos de los cursos se hacen por nivel. El Colombo no obliga a que se pague
                        todo el curso (16 niveles) por anticipado.
                    </p>
                </div>
            </div> 
            <div class="card  py-4 px-lg-4 pb-5 bg-light rounded-0 border-top-0 border-left-0 border-right-0 border-8 border-primary">
                <img src="<?php echo wp_upload_dir('2019/04')['url'];?>/payment-icon-3.png" width="100px" class="ml-3">
                <div class="card-body">
                    <p class="card-text text-dark">Los pagos de los cursos se hacen por nivel. El Colombo no obliga a que se pague
                        todo el curso (16 niveles) por anticipado.
                    </p>
                </div>
            </div> 
        </div>
    </article>

    <!-- MIDE TU NIVEL DE INGLÉS -->
    <article class="container-fluid bg-primary mb-4 mt-5 pr-0 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-6  col-lg-4 py-8 pl-0 pr-6">
                    <h2 class="text-white mb-4 bold-text">¡Mide gratis tu nivel de inglés!</h2>
                    <small class="text-white">Este es el primer paso para iniciar tus estudios con nosotros.<br></small>
                    <button type="button" class="btn bg-light rounded-0 text-secondary mt-4">Realizar Test</button>
                </div>
            </div>
        </div><!--container -->
        <div class="w-50 position-absolute h-100 top-0 right-0" style="background: url(<?php echo wp_upload_dir('2019/04')['url']; ?>/front-page-main-img.png);
                                        background-size: cover;"></div>
    </article><!-- container-fluid -->
</main>
<?php get_footer(); ?>