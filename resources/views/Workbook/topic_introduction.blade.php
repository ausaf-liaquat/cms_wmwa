@extends('User.layouts.master')
@section('title')
    Youth Workbook
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">


            @livewire('workbookintroduction')

        </div>
    </div>
@endsection
@section('extrajs')
<script type="text/javascript">
    $(window).on('load', function(){
        $('form').sisyphus();
    });
</script>
<script type="text/javascript">

   
   </script>
@endsection