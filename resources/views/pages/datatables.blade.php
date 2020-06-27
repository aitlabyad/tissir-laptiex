{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">La list des produit
                    <div class="text-muted pt-2 font-size-sm">Datatable product list</div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline mr-2">
                    
                    <!--begin::Dropdown Menu-->
               
                </div>
                <!--end::Dropdown-->
                <!--begin::Button-->
                <a href="http://tissir.cc/Products/create" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <circle fill="#000000" cx="9" cy="15" r="6"/>
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Ajouter</a>
                <!--end::Button-->
            </div>
        </div>

        <div class="card-body">

              <!--begin::Search Form-->
              {!! Form::open(['action' => 'ProductsController@look', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
              <div class="mt-2 mb-5 mt-lg-5 mb-lg-10">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    {{Form::text('look_for', '', ['class' => 'form-control form-control-solid','placeholder' => 'Search...','id'=>'kt_datatable_search_query'])}}
                               
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                            </div>

                            <div class="col-md-4 my-2 my-md-0">
                                {{Form::submit('Search', ['class'=>'btn btn-light-primary px-6 font-weight-bold'])}}
                               
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            <!--end::Search Form-->

            <table class="table table-bordered table-hover" id="kt_datatable">
                <thead>
                <tr>
                    <th></th>
                    <th>Referance</th>
                    <th>Marque</th>
                    <th>Stock</th>
                    <th>Prix d'achat</th>
                    <th>Prix de vente</th>
                    <th>date</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
              

                    @if(count($product) > 0)
                    @foreach($product as $item)
                    <tr>
                        <td></td>
                        <td>{{$item->reference}}</td>
                        <td>{{$item->marque}}</td>
                        <td>{{$item->stock}}</td>
                        <td>{{$item->prix_achat}}</td>
                        <td>{{$item->prix_vent}}</td>
                        <td>{{$item->created_at}}</td>
                        <td align="center">{{$item->type}}</td>
                        <td align="right">1</td>
                        <td nowrap></td>
                    </tr>
                    @endforeach
                @else
                    <p>No Product found</p>
                @endif



                 
                </tbody>
            </table>


            


        </div>

    </div>




    @if( count($productE) > 0)

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">La list des Equivalent
                    <div class="text-muted pt-2 font-size-sm">Equivalent product list</div>
                </h3>
            </div>
            
        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover" id="kt_datatable">
                <thead>
                <tr>
                    <th></th>
                    <th>Referance</th>
                    <th>Marque</th>
                    <th>Stock</th>
                    <th>Prix d'achat</th>
                    <th>Prix de vente</th>
                    <th>date</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                
                   
                    @foreach($productE as $item)
                    <tr>
                        <td></td>
                        <td>{{$item->reference}}</td>
                        <td>{{$item->marque}}</td>
                        <td>{{$item->stock}}</td>
                        <td>{{$item->prix_achat}}</td>
                        <td>{{$item->prix_vent}}</td>
                        <td>{{$item->created_at}}</td>
                        <td align="center">{{$item->type}}</td>
                        <td align="right">1</td>
                        <td nowrap></td>
                    </tr>
                    @endforeach
             



                 
                </tbody>
            </table>
        </div>

    </div>
  
@endif

@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

@endsection
