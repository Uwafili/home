@extends('layouts.layout')

@section('title', 'Messages')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Messages</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- Display Messages in a Table -->
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Received At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contact as $message)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->body }}</td>
                            <td>{{ $message->created_at->format('M d, Y h:i A') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No messages found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection