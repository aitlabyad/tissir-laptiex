{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{!! Form::open(['action' => ['VentsController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


<div class="card card-custom">
    <div class="card-header">
        <div class="row">
            <h3 class="card-title">
                Selection des produits
            </h3>
        </div>
    </div>
    <!--begin::Form-->


        <div class="card-body">

            <div class="row">


			<div class="col-xl-3"></div>
				<div class="col-xl-6">

                            <select id="kt_dual_listbox_2" class="dual-listbox" multiple
                                    data-available-title="Produit on stock"
                                    data-selected-title="Panier"
                                    data-add="<i class='flaticon2-next'></i>"
                                    data-remove="<i class='flaticon2-back'></i>"
                                    data-add-all="<i class='flaticon2-fast-next'></i>"
                                    data-remove-all="<i class='flaticon2-fast-back'></i>" name="selected[]">
                                        @if(count($product) > 0)
                                        @foreach($product as $item)
                                        <option value="{{ $item->id }}">{{ $item->reference }}</option>
                                        @endforeach
                                        @endif
                            </select>
                 </div>
             <div class="col-xl-3"></div>



    </div>

    <div class="card-footer">
        {{ Form::submit('Continuer',['class'=>'btn btn-primary mr-2'])}}
      
        <button type="reset" class="btn btn-secondary">Annuler</button>
       </div>
   
    <!--end::Form-->
</div>

{!! Form::close() !!}




@endsection

{{-- Scripts Section --}}
@section('scripts')


<script>
  
  // Class definition
var KTDualListbox = function() {
    // Private functions
    var initDualListbox = function() {
        // Dual Listbox
        var listBoxes = $(".dual-listbox");

        listBoxes.each(function() {
            var $this = $(this);
            // get titles
            var availableTitle = ($this.attr("data-available-title") != null) ? $this.attr("data-available-title") : "Available options";
            var selectedTitle = ($this.attr("data-selected-title") != null) ? $this.attr("data-selected-title") : "Selected options";

            // get button labels
            var addLabel = ($this.attr("data-add") != null) ? $this.attr("data-add") : "Add";
            var removeLabel = ($this.attr("data-remove") != null) ? $this.attr("data-remove") : "Remove";
            var addAllLabel = ($this.attr("data-add-all") != null) ? $this.attr("data-add-all") : "Add All";
            var removeAllLabel = ($this.attr("data-remove-all") != null) ? $this.attr("data-remove-all") : "Remove All";

            // get options
            var options = [];
            $this.children("option").each(function() {
                var value = $(this).val();
                var label = $(this).text();
                options.push({
                    text: label,
                    value: value
                });
            });

            // get search option
            var search = ($this.attr("data-search") != null) ? $this.attr("data-search") : "";

            // init dual listbox
            var dualListBox = new DualListbox($this.get(0), {
                addEvent: function(value) {
                    console.log(value);
                },
                removeEvent: function(value) {
                    console.log(value);
                },
                availableTitle: availableTitle,
                selectedTitle: selectedTitle,
                addButtonText: addLabel,
                removeButtonText: removeLabel,
                addAllButtonText: addAllLabel,
                removeAllButtonText: removeAllLabel,
                options: options,
            });

            if (search == "false") {
                dualListBox.search.classList.add("dual-listbox__search--hidden");
            }
        });
    };

    return {
        // public functions
        init: function() {
            initDualListbox();
        },
    };
}();

jQuery(document).ready(function() {
    KTDualListbox.init();
});

</script>


    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>


@endsection
