@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <script>
        toastr["error"]('<?php echo $error; ?>', "", {
            'progressBar': 'true',
        });
        </script>
    @endforeach
@endif

@if (session('success'))
    <script>
        toastr["error"]('<?php echo session('success'); ?>', "", {
            'progressBar': 'true',
        });
    </script>
@endif

@if (session('error'))
    <script>toastr.error('<?php echo session('error'); ?>')</script>
@endif