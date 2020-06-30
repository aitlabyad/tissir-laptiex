{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
@php
    
@endphp

{!! Form::open(['action' => ['VentsController@sell' ], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Panier</span>
  
        </h3>
     
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-0 pb-3">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                <thead>
                    <tr class="text-uppercase">
                        <th style="min-width: 250px" class="pl-7">
                            <span class="text-dark-75">Produit</span>
                        </th>
                        <th style="min-width: 100px">Prix d'achat</th>
                        <th style="min-width: 100px">Prix de vent</th>
                        <th style="min-width: 150px">Quantité</th>
                        <th style="min-width: 130px">Status</th>
                       
                    </tr>
                </thead>
                <tbody>
                   
                    
                    @if(count($product) > 0)
                    @foreach($product as $item)
                    <input type='hidden' name="sel[]"  value='{{$item->id}}'></input>
                   
                    <tr>
                        <td class="pl-11 py-8">
                            <div class="d-flex align-items-center">
                                
                                <div>
                                 
                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{$item->reference }}</a>
                                    <span class="text-muted font-weight-bold d-block">{{$item->type }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$item->prix_achat}}</span>
                            <span class="text-muted font-weight-bold">MAD</span>
                        </td>
                        <td>
                            {{Form::text('price[]', $item->prix_vent, ['class' => 'price text-dark-75 font-weight-bolder d-block font-size-lg'])}}

                            
                            <span class="text-muted font-weight-bold">MAD</span>
                        </td>
                        <td>
                            {{Form::text('Quantite[]', '', ['class' => 'qt text-dark-75 f d-block font-size-lg', 'placeholder'=> '1'])}}
                            <span class="text-muted font-weight-bold">  &nbsp;</span>
                           
                            
                        </td>
                        <td>
                            <span class="label label-lg label-light-success label-inline">En stock</span>
                            <span class="text-muted font-weight-bold">  &nbsp;</span>
                        </td>
                      
                    </tr>

                    @endforeach
                    @endif
                  
                
                    
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>

<div class="card card-custom gutter-b" style="height: 150px">
    <!--begin::Body-->
    <div class="card-body d-flex align-items-center justify-content-between ">
        <div class="mr-2">
            <h3 class="font-weight-bolder">TOTAL </h3>
            
            <div class="text-dark-50 display-2 mt-2" ><span id='tot'>0</span><span> MAD</span></div>
           
           
        </div>
        {{ Form::submit('Finalise la Commande',['class'=>'btn btn-success font-weight-bold py-3 px-6 center'])}}
      
    </div>
    <!--end::Body-->
</div>



{!! Form::close() !!}



@endsection

{{-- Scripts Section --}}
@section('scripts')


<script>



function get(){
    var ek = $('.price').map((_,el) => el.value).get()
    var el = $('.qt').map((_,el) => el.value).get()
    var sum = 0;

   

    for (var i = 0; i < ek.length; i++){
    
        console.table(ek);
        console.table(el);
        console.log();
        sum += Number(ek[i])  * Number(el[i]) ;
}


    $("#tot").text(sum);
};

get();
window.setInterval(function(){
    get();
}, 500);


</script>


    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>


@endsection
