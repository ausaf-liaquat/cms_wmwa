@extends('Admin.layouts.master')
@section('title')
    Topic 05 Workbook
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            @livewire('view-topic5',['userid'=>$userid])
        </div>
    </div>
@endsection
@section('extrajs')
<script type="text/javascript">
    // $(window).on('load', function(){
    //     $('form').sisyphus();
    // });
</script>
<script type="text/javascript">

$('#workbookform select').attr('disabled', 'disabled');
   </script>
@endsection