@extends('main')

@section('content')
 <div class="back-paralax">
  <div class="triangle tr1">
  </div>
 

      <div class="triangle tr2">
  </div>
  </div>
</div>
      <main>
 <div class="slider" style="max-width: 1170px;
    width: 100%;
    margin: 0 auto;"> 
         <div class="bottom-slider" style="padding-bottom: 40px">

             <div class="item"><img src="{{asset('images/banner/banner.jpg')}}" alt=""></div>
               <div class="item"><img src="http://tancy.pro/upload/iblock/35b/35b2eb91bd9250a866223defcbc320ba.jpg" alt=""></div>
   
             </div>

         </div>
<div class="size-container">
   <div class="main-articles">
      <div class="container">
         <div class="item">
            <div class="image">
 <a href="/artists/"><img src="http://ptagency.ru/local/templates/tancy_br/img/artists.jpg"></a>
            </div>
            <div class="desc">
               <div class="title">
 <a href="/artists/">Артисты</a>
               </div>
               <div class="intro">
                   Профессиональные танцовщики и хореографы, участники шоу «ТАНЦЫ» на ТНТ, танцевальные команды, которые имеют значимые достижения и престижные звания как в России, так и за рубежом.
               </div>
               <div class="button">
 <a href="/artists/" class="btn btn-whitenew btn-lg">Подробнее</a>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="image">
 <a href="/shows/"><img src="http://ptagency.ru/local/templates/tancy_br/img/show.jpg"></a>
            </div>
            <div class="desc">
               <div class="title">
 <a href="/shows/">Шоу-выступления</a>
               </div>
               <div class="intro">
                   Более 120 готовых номеров в исполнении популярных танцовщиков, а также оригинальные номера с проекта «ТАНЦЫ» на ТНТ, шоу-кейсы взрослых и детских команд от 6 до 40 человек, а также пластические современные театральные постановки.
               </div>
               <div class="button">
 <a href="/shows/" class="btn btn-whitenew btn-lg">Подробнее</a>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="image">
 <a href="/master-klass/"><img src="http://ptagency.ru/local/templates/tancy_br/img/workshop.jpg"></a>
            </div>
            <div class="desc">
               <div class="title">
 <a href="/master-klass/">Мастер-классы</a>
               </div>
               <div class="intro">
                   Хореографы, обладающие исключительным видением современных стилей танца, делятся многолетним опытом с участниками мастер-классов. Основная задача мастер-класса – развить и расширить возможности танцовщиков, поделиться новой информацией и вдохновить на новые эксперименты.
               </div>
               <div class="button">
 <a href="/master-klass/" class="btn btn-whitenew btn-lg">Подробнее</a>
               </div>
            </div>
         </div>
         <div class="item">
            <div class="image">
 <a href="/choreography/"><img src="http://ptagency.ru/local/templates/tancy_br/img/dance_and_show.jpg"></a>
            </div>
            <div class="desc">
               <div class="title">
 <a href="/choreography/">Постановка танцев и шоу</a>
               </div>
               <div class="intro">
                   Многолетний опыт в постановке танцев для музыкальных клипов, кино, шоу и телепрограмм позволяет нам быстро и качественно реализовывать многочисленные проекты любого уровня.
               </div>
               <div class="button">
 <a href="/choreography/" class="btn btn-whitenew btn-lg">Подробнее</a>
               </div>
            </div>
         </div>
      </div>
       <!-- eo .container -->
   </div>
    <!-- eo .main-articles -->
   <div class="partners">
      <h2>Наши партнеры</h2>
      <ul class="list_partners_slider" id="list_partners_slider">
       <li> <img src="{{asset('images/partners/1.jpg')}}" alt=""> </li>
       <li> <img src="{{asset('images/partners/2.jpg')}}" alt=""> </li>
  
 
      </ul>
   </div>
 
 <!-- eo .size-container --> </main>
@endsection

 @section('javascript')
  
 @endsection