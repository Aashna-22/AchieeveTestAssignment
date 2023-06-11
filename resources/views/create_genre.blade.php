@extends('layouts.app')
@section('content')
<div class="container-fluid">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row"><!-- Basic Layout -->
                        <div class="col-xxl">
                            <div class="card mb-4">
                            @if (session()->get('success'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <div class="text-semibold">
                                        {{ session()->get('success') }}
                                    </div>
                                </div>
                            @endif
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Genre</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('genre.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="basic-default-name" name="name" placeholder="John Doe">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection
