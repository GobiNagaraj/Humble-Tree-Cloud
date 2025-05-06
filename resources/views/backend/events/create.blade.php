@extends('backend.layouts.app')

@section('main-content')

<div class="content">
    <div class="container-fluid">
        <h4 class="page-title">Event Create</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">{{ auth()->user()->name }}</h4>
                        <div class="card-category float-right">
                            <a href="{{ URL::to('/backend/event/type') }}" class="btn btn-primary btn-border btn-round"><i class="fa fa-arrow-left"></i> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="demo">
                            <form action="{{ URL::to('/backend/event/store') }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                  <label for="event_title">Event Title</label>
                                  <input type="text" class="form-control" id="event_title" value="{{ old('event_title') }}" name="event_title">
                                </div>
                                <div class="form-group">
                                  <label for="duration">Duration</label>
                                  <select name="event_duration" id="event_duration" value="{{ old('event_duration') }}" class="form-control">
                                    <option value="15">15 mins</option>
                                    <option value="30">30 mins</option>
                                    <option value="45">45 mins</option>
                                    <option value="60">60 mins</option>
                                    <option value="custom">Custom</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label for="event_location">Event Location</label>
                                    <input type="text" class="form-control" id="event_location" value="{{ old('event_location') }}" name="event_location">
                                </div>
                                <div class="form-group">
                                    <label for="availability">Availability</label>
                                    <input type="text" class="form-control" id="availability" value="{{ old('availability') }}" name="availability">
                                </div>
                                <div class="form-group">
                                    <label for="host">Host</label>
                                    <input type="text" class="form-control" id="host" name="host" value="{{ old('host', auth()->user()->name) }}">
                                </div>
                                <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
