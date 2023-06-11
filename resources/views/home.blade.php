@extends('layouts.app')

<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

@section('content')
<div class="container">
    <div class="main main-app p-3 p-lg-4">
        @if (session()->get('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <div class="text-semibold">
                    {{ session()->get('success') }}
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('events') }}" class="btn btn-success" title="Add New Events">
                Add Events
            </a>
        </div>

        <div class="table-responsive">
            <table class="table-striped table-hover table-bordered table-compact" id="myTable" name="myTable">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Genre</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Artist</th>
                        <th>Venue</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->genre->genre }}</td>
                            <td>{{ $event->amount }}</td>
                            <td>{{ $event->date }}</td>
                            <td>{{ $event->artist->name }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                    Venue Details
                                </button>
                                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Venue</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Modal content goes here -->
                                            <p>{{ $event->venue->name . ' , ' . $event->venue->address . ' , ' . $event->venue->mobile}}</</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
     <script>
        
      $(document).ready( function () {
        $('#myTable').DataTable();
      } );
     </script>
@endsection

