@extends('main')

@section('content')
 
   <main>
<div class="size-container">
   <div class="breadcrumbs" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
 <a href="/" itemprop="url"><span itemprop="title">Главная</span></a> <span class="separator">/</span> <span itemprop="title">Контакты</span>
   </div>
    <!-- eo .breadcrumbs -->
   <div class="article-info">
      <div class="article-info-container"> 
         <div class="article-left">
            <div class="article-slider">
               <div class="item">
 <a data-fancybox="gallery" href="{{asset('images/o-nas.jpg')}}"><img src="{{asset('images/o-nas.jpg')}}"></a>
               </div>
            </div>
             <!-- eo .article-slider -->
         </div>
          <!-- eo .article-left -->
         <div class="article-right">
          <p></p>
            <p>Танцевальное агентство в городе Днепр. Агентство создано для улучшения танцевальной индустрии в городе Днепр и Украине.</p>
            <p>
  Команда «DANCE PROMOTION» нацелена на создание качественного и профессионального обслуживания в танцевальной индустрии, для танцоров, хореографов, руководителей студий, а так же руководителей EVENT агентств и всех тех, кто соприкасается с танцевальным миром.  </p>

  <p>Наше агентство поможет создать стандарты и правила в танцевальных коммерческих студиях, коллективах и услугах.   </p>

  <p>Мы верим, что благодаря улучшению качества танцевальных услуг, предоставление заказов на работу артистам и шоу балетам, запуск новых форматов танцевальных проектов, продвижение танцевальных артистов, продюсирование и раскрытие новых талантов, танцевальный мир сможет шагнуть на новую ступень развития танцевального искусства в Украине.
            </p>

         </div>
          <!-- eo .article-right -->
      </div>
       <!-- eo .article-info-container -->
   </div>
    <!-- eo .article-info -->
</div>
 <!-- eo .size-contianer --> </main>
@endsection

 @section('javascript')
  
 @endsection