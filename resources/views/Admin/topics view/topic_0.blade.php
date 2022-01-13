@extends('Admin.layouts.master')
@section('title')
    Topic Introduction Workbook
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            @livewire('view-topic0',['userid'=>$userid])
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

$('#workbookform input').attr('readonly', 'readonly');
   </script>
@endsection