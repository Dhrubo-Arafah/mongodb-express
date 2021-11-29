@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Create Event Form
                    </div>
                    <div class="card-body">
                        <form action="{{route('save_event')}}" method="POST">
                            @csrf
                            <label for="event_name" class="form-label">Event name</label>
                            <input type="text" name="event_name" id="event_name" class="form-control mb-3" placeholder="Enter event name">
                            <label for="detail" class="form-label">Event detail</label>
                            <input type="text" name="detail" id="detail" class="form-control mb-3" placeholder="Add event detail">
                            <label for="asking_amount" class="form-label">Asking amount</label>
                            <input type="number" name="asking_amount" id="asking_amount" class="form-control mb-3" placeholder="Enter asking amount">
                            <input type="submit" value="Add event">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
