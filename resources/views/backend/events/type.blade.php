@extends('backend.layouts.app')

@section('main-content')

<div class="content">
    <div class="container-fluid">
        <h4 class="page-title">Event Type</h4>
        @if( $message = Session::get('success') )
            <div class="row"><div class="alert alert-success">{{ $message }}</div></div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">{{ auth()->user()->name }}</h4>
                        <div class="card-category float-right">
                            <a href="{{ URL::to('/backend/event/create') }}" class="btn btn-primary btn-border btn-round"><i class="fa fa-plus"></i> New Event Type</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if( count($events) > 0 )
                            @foreach($events as $event)

                            <div class="col-md-3">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Title : {{ $event->event_title }}</h4>
										<p class="card-category">Duration : {{ $event->event_duration }}, One-to-One</p>
                                        <div class="legend"><i class="la la-circle text-primary"></i> Host : {{ $event->host }}</div>
									</div>
									<div class="card-footer">
										<div class="float-left"><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-share"></i></a></div>
										<div class="float-right"><a href="{{ URL::to('backend/event/'.$event->id.'/delete') }}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure want to delete this event type?')"><i class="fa fa-trash"></i></a></div>
									</div>
								</div>
							</div>

                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
