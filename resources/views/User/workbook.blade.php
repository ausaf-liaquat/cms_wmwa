@extends('User.layouts.master')
@section('title')
    Workbook
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>My Workbooks</h2>
            <p>Below are your workbooks.</p>

            <table class="table table-striped table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">Workbook Title</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Date sent</th>
                        <th scope="col">Notes from Practitioner</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($shareworkbook as $item)
                        <tr>
                            <th scope="row">{{ $item->workbook->workbook_title }}</th>
                            <td>{{ $item->topic->topic_title }}</td>
                            <td>{{ $item->sent_date->format('d/m/Y') }}</td>
                            <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalnotes" onclick="getPractitionernotes(event.target)" data-notes="{{$item->practitioner_notes}}">View Note</a></td>
                            <td>
                                @if ($item->status == 'inprocess')
                                    In Progress
                                @else
                                    {{ $item->status }}
                                @endif
                            </td>
                            <td><a href="{{route('serviceuser.workbookopen',['id'=>$item->topic->id])}}" target="_blank" class="btn btn-primary">Open
                                    Workbook</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="text-align: center">No data found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- NOTES MODAL -->
    <div class="modal fade" id="modalnotes" tabindex="-1" aria-labelledby="notesLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="notesLabel">Notes from your practitioner</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="p-2" id="notes"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extrajs')
    <script>
       function getPractitionernotes(e) {
        var notes = $(e).data("notes");
        $("#notes").html(notes);
        $('#modalnotes').modal('show');
       } 
    </script>
@endsection