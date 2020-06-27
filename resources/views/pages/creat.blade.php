{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')


<div class="card card-custom">
	<div class="card-header">
		<h3 class="card-title">
			Ajouter un nouveau produit
		</h3>
	</div>
    <!--begin::Form-->
    


    {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class="card-body">

        <div class="form-group row">
            <label  class="col-2 col-form-label">Reference</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" id="example-text-input"/>
            </div>
        </div>

        <div class="form-group">
            {{Form::label('title', 'Reference' ,['class' => 'col-2 col-form-label', 'placeholder' => ''])}}
            <div class="col-10">
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
    </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}




</div>
 




@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
