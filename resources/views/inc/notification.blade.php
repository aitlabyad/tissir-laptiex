@if(count($errors)> 0 )
    @foreach ($errors->all() as $error)
         <script>

            $.notify({
                // options
                message: '{{ $error }}' 
            },{
                // settings
                type: 'danger'
            });

        </script>
        
    @endforeach
@endif
@if(session('success') )
   
         <script>

            $.notify({
                // options
                message: '{{ session('success') }}' 
            },{
                // settings
                type: 'success'
            });

        </script>
        

@endif