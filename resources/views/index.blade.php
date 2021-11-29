@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">Running Events</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <td>Sl no.</td>
                                <td>Event</td>
                                <td>Action</td>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($events as $key => $event)
                                        <td>{{ $key + 1 }}</td>
                                        <td> <a href="">{{ Str::limit($event->event_name, 30, $end = '...') }}</a></td>
                                        <td><a href="" class="btn btn-info btn-sm">Donate</a></td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
