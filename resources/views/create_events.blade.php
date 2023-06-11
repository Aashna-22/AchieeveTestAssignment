 @extends('layouts.app')

@section('content')
<div class="container-fluid">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row"><!-- Basic Layout -->
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Default label</small>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="basic-default-name" name="name" placeholder="John Doe">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">Date</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="date" name="date"  id="html5-date-input">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">Genre</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" name="genre_id" id="exampleFormControlSelect1" aria-label="Default select example">
                                                    <option selected="">select genre </option>
                                                    @foreach($genres as $value)
                                                    <option value="{{ $value->id }}"> {{ $value->id .' : '. $value->genre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">Venue</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" name="venue_id" id="exampleFormControlSelect1" aria-label="Default select example">
                                                    <option selected="">select venue </option>
                                                    @foreach($venues as $value)
                                                    <option value="{{ $value->id }}"> {{ $value->id .' : '. $value->name }}</option>
                                                    @endforeach
                                                </select>                                   
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">Artist</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" name="artist_id" id="exampleFormControlSelect1" aria-label="Default select example">
                                                    <option selected="">select artist </option>
                                                    @foreach($artists as $value)
                                                    <option value="{{ $value->id }}"> {{ $value->id .' : '. $value->name }}</option>
                                                    @endforeach
                                                </select>                                   
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="formFile" class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-10">
                                            <input class="form-control" name="image" type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Amount</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="basic-default-phone" name="amount" class="form-control phone-mask" placeholder="in rupees" aria-label="in rupees" aria-describedby="basic-default-phone">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                                            <div class="col-sm-10">
                                                <textarea id="basic-default-message" class="form-control" name="description" placeholder="Write a short description about the event." aria-label="Write a short description about the event." aria-describedby="basic-icon-default-message2"></textarea>
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