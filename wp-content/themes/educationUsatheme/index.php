<?php get_header(); ?>
<main>
    <!-- LANDING PAGE CAPTION AND IMAGE TEXT -->
    <div class="container-fluid py-5 px-0">
        <div class="row">
            <div class="col-5 pr-5" style="background: url(<?php echo wp_upload_dir('2019/04')['url']; ?>/front-page-main-img.png);
                                        background-size: cover;">   
            </div>
            <article id="main-article" class="col-7 pt-5 pr-5">
                <h3 class="text-black-50 font-weight-bold">Cursos</h3>
                <h1>Inglés para Adultos</h1>
                <h3 class="text-primary font-weight-bold">Este programa está dirigido para personas de los 15 años en adelante</h3>
                <p class="mt-5 text-dark">Es un programa de inglés comunicativo que consta de 16 niveles los cuales se dividen en 4 módulos, cada uno de 4 niveles. 
                    Cada nivel es de 32 horas. Los resultados obtenidos están ligados al Marco Común Europeo de Referencia (MCER). <br>
                    Nuestas clases son altamente participativas fomentando la interacción con tus compañeros de clase y docentes desde un enfoque comunicativo en
                    contextos de la vida cotidiana. Aunque el énfasis es en la competencia comunicativa, se profundiza también en las estructuras gramaticales y vocabulario.
                
                </p>
                <button type="button" class="btn btn-primary rounded-0 py-3 px-4 mt-4">Más Información</button>
            </div>
        </div>
    </div><!-- close landing caption img-->
    <!-- FORMAS DE PAGO -->
    <div class="container my-5">
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
    </div>
    <!-- MIDE TU NIVEL DE INGLÉS -->
    <div class="container-fluid bg-primary mb-2 mt-5 pr-0 position-relative">
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
    </div><!-- container-fluid -->
</main>
<?php get_footer(); ?>