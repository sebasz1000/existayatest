<?php get_header(); ?>
<main>
<div class="container-fluid py-5 px-0">
    <div class="row">
        <div class="col-5 pr-5" style="background: url(<?php echo wp_upload_dir('2019/04')['url']; ?>/front-page-main-img.png);
                                       background-size: cover;">   
        </div>
        <article id="main-article" class="col-7 pt-5 pr-5">
            <h3 class="text-black-50">Cursos</h3>
            <h1>Inglés para Adultos</h1>
            <h3 class="text-primary">Este programa está dirigido para personas de los 15 años en adelante</h3>
            <p class="mt-5 text-dark">Es un programa de inglés comunicativo que consta de 16 niveles los cuales se dividen en 4 módulos, cada uno de 4 niveles. 
                Cada nivel es de 32 horas. Los resultados obtenidos están ligados al Marco Común Europeo de Referencia (MCER). <br>
                Nuestas clases son altamente participativas fomentando la interacción con tus compañeros de clase y docentes desde un enfoque comunicativo en
                contextos de la vida cotidiana. Aunque el énfasis es en la competencia comunicativa, se profundiza también en las estructuras gramaticales y vocabulario.
               
            </p>
            <button type="button" class="btn btn-primary rounded-0 py-3 px-4 mt-4">Más Información</button>
        </div>
    </div>
</div>
</main>
<?php get_footer(); ?>