{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{!! Form::open(['action' => ['VentsController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Panier</span>
  
        </h3>
        <div class="card-toolbar">
            <a href="#" class="btn btn-success font-weight-bolder font-size-sm">
            <span class="svg-icon svg-icon-md svg-icon-white">
                <!--begin::Svg Icon | path:../../../../../../../metronic/themes/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/metronic/themes/metronic/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Double-check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002) "/>
                        <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002) "/>
                    </g>
                </svg><!--end::Svg Icon--></span>
                <!--end::Svg Icon-->
            </span>Finalise la Commande</a>
        </div>
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
                    <tr>
                        <td class="pl-0 py-8">
                            <div class="d-flex align-items-center">
                                
                                <div>
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Sant Extreanet Solution</a>
                                    <span class="text-muted font-weight-bold d-block">HTML, JS, ReactJS</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,790</span>
                            <span class="text-muted font-weight-bold">Paid</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
                            <span class="text-muted font-weight-bold">Paid</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Bradly Beal</span>
                            <span class="text-muted font-weight-bold">Insurance</span>
                        </td>
                        <td>
                            <span class="label label-lg label-light-success label-inline">En stock</span>
                        </td>
                      
                    </tr>
                  
                
                    
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>
{!! Form::close() !!}



@endsection

{{-- Scripts Section --}}
@section('scripts')


<script>
  
  

</script>


    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>


@endsection
