{{-- se manda a llamar el template de la vista --}}
@extends('template.layout_cursos')

{{-- se manda a llamar el contenido de la vista --}}

@section('contenido_2')

<div class="section margin-top_50 silver_bg">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="full">
                <div class="heading_main text_align_center">
                   <h2><span>Negocios</span></h2>
                </div>
              </div>
        </div>
      </div>
   </div>
    </div>
    <h3><p style="text-align:center">En las negociaciones más efectivas no siempre se trata de ganar, de obtener buenos resultados para el interés propio y también</p>
     <p style="text-align: center"> el de nuestros socios, lo cual sirve para mantener relaciones de trabajo que pueden ser cruciales en el futuro. </p>

    <p style="text-align: center"> solo 4 semanas, este curso online de EducaNegocios te guiará a través del de beneficios mutuos (MGA), un procedimiento de eficacia </p>
     <p style="text-align: center"> basado en hallazgos experimentales y en cientos de estudios de caso reales. solo aprenderás los cuatro pasos para negociar </p>
      <p style="text-align: center"> resultados para todos los involucrados, sino que los pondrás en práctica un intercambio de roles online con tus compañeros.</p>
    </h3>
      <div class="full">
        <div class="heading_main text_align_center">
           <h2><span>Temas</span></h2>
        </div>
      </div>
      {{!!$contenido!!}}
        <div class="full">
            <a class="hvr-radial-out button-theme" href={{route('about')}}>Inscribirse</a>
         </div>
</div>
</div>

@endsection

