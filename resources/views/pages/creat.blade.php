{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')



<div class="card card-custom card-sticky" id="kt_page_sticky_card">
	<div class="card-header">
		<div class="card-title">
			<h3 class="card-label">
				Ajouter un nouveau produit<i class="mr-2"></i>
				<small class=""> Produit</small>
			</h3>
        </div>
        {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

		<div class="card-toolbar">
			
			<div class="btn-group">
				<button type="button" class="btn btn-primary font-weight-bolder">
					<i class="ki ki-check icon-sm"></i>
					Enregistrer    
				</button>
				<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				</button>
				<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
					<ul class="nav nav-hover flex-column">
						<li class="nav-item">
							<a href="#" class="nav-link">
								
                                {{Form::submit('Enregistrer et Ajouter', ['class'=>'bg-transparent border-0'])}}
							</a>
                        </li>
                      
						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<!--begin::Form-->
		<form class="form" id="kt_form">
			<div class="row">
				<div class="col-xl-2"></div>
				<div class="col-xl-8">

					<div class="my-5">
                        <h3 class=" text-dark font-weight-bold mb-10">Product Details:</h3>
                        <div class="form-group row">
                            {{Form::label('title', '# Reference' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])}}
                            <div class="col-9">
                            {{Form::text('reference', '', ['class' => 'form-control form-control-solid','placeholder' => ''])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{Form::label('title', 'Prix d\'achate' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])}}
                            <div class="col-9">
                            {{Form::text('prixa', '', ['class' => 'form-control form-control-solid', 'placeholder' => ''])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{Form::label('title', 'Prix de vante' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])}}
                            <div class="col-9">
                            {{Form::text('prixv', '', ['class' => 'form-control form-control-solid', 'placeholder' => ''])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{Form::label('title', 'Type' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])}}
                            <div class="col-9">
                            {{Form::text('type', '', ['class' => 'form-control form-control-solid', 'placeholder' => ''])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{Form::label('title', 'Marque' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])}}
                            <div class="col-9">
                            {{Form::text('marque', '', ['class' => 'form-control form-control-solid', 'placeholder' => ''])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{Form::label('title', 'equivalent' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])}}
                            <div class="col-9">
                            {{Form::text('equivalent', '', ['class' => 'form-control form-control-solid', 'placeholder' => ''])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{Form::label('title', 'stock' ,['class' => 'col-3 col-form-label ', 'placeholder' => ''])}}
                            <div class="col-9">
                            {{Form::text('stock', '', ['class' => 'form-control form-control-solid', 'placeholder' => ''])}}
                            </div>
                        </div>
                
					
						
						<div class="form-group row">
							<label class="col-3"></label>
							<div class="col-9">
								<div class="checkbox-inline">
									<label class="checkbox">
										<input type="checkbox"/> 
                                        j'ai vérifié si ce reference existait avant.
										<span></span>
									</label>
								</div>
							</div>
                        </div>
                        

					</div>
					
				
				</div>
				<div class="col-xl-2"></div>
			</div>
		</form>
		<!--end::Form-->
    </div>
    


<!--close form here-->{!! Form::close() !!}

</div>
 




@endsection

{{-- Scripts Section --}}
@section('scripts')


    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>


@endsection
