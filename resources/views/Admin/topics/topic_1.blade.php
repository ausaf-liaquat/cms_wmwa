@extends('Admin.layouts.master')
@section('title')
    Topic 01 Workbook
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            @livewire('view-topic1',['userid'=>$userid])
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

$(document).ready(function() {
    $('input[type="checkbox"]').each(function() {
        if ($(this).is(':checked'))
            $(this).attr("disabled", false);
          //  
        else
            $(this).attr("disabled", true);
    });
}); 
   </script>
@endsection