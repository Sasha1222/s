 
    <h1>Создать Новость</h1>
    {!! Form::open(['action' => 'NewsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Название')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div><br><br>

         <div class="form-group">
            {{Form::label('category', 'Категория')}}
            {{Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Category'])}}
         </div><br><br>
          <div class="form-group">
            {{Form::label('meta_text', 'Мета описание')}}
            {{Form::textarea('meta_text', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'meta_text'])}}
          </div><br><br>
        <div class="form-group">
            {{Form::label('text', 'Текст')}}
            {{Form::textarea('text', '', ['id' => 'article-ckeditor1', 'class' => 'form-control', 'placeholder' => 'text'])}}
        </div><br><br>
        
        <div class="form-group">
            {{Form::label('start_date', 'Начало')}}
            {{Form::date( 'start_date', '', ['class' => 'form-control', 'placeholder' => 'Category'])}}
         </div><br><br>
 
 
         <div class="form-group">
                 {{Form::file('image')}}
        </div><br><br>
       
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
     <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

      <script>
        CKEDITOR.replace( 'article-ckeditor1' );
    </script>

 