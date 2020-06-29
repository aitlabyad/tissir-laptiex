{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="card">
    <div class="card-body">

        <div class="form-group row">
            <label class="col-form-label col-lg-3 col-sm-12">Basic Example</label>
            <div class=" col-lg-4 col-md-9 col-sm-12">
                <select class="form-control kt-select2 select2" id="kt_select2_1" name="param">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
             
                </select>
            </div>
        </div>

    </div>
</div>


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection
