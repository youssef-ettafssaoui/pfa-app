@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">

                        Rendez-Vous ({{ $bookings->count() }})
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Patient</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Téléphone</th>
                                    <th scope="col">Sexe</th>

                                    <th scope="col">Horraire</th>
                                    <th scope="col">Médecin</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bookings as $key=>$booking)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td><img src="/profile/{{ $booking->user->image }}" width="80"
                                                style="border-radius: 50%;">
                                        </td>
                                        <td>{{ $booking->date }}</td>
                                        <td>{{ $booking->user->name }}</td>
                                        <td>{{ $booking->user->email }}</td>
                                        <td>{{ $booking->user->phone_number }}</td>
                                        <td>{{ $booking->user->gender }}</td>
                                        <td>{{ $booking->time }}</td>
                                        <td>{{ $booking->doctor->name }}</td>
                                        <td>
                                            @if ($booking->status == 0)
                                                <a href="{{ route('update.status', [$booking->id]) }}"><button
                                                        class="btn btn-primary"> Pending</button></a>
                                            @else
                                                <a href="{{ route('update.status', [$booking->id]) }}"><button
                                                        class="btn btn-success"> Cheked</button></a>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <td class="text-danger">Il n'y a pas de rendez-vous !</td>
                                @endforelse

                            </tbody>
                        </table>

                    </div>
                    {{ $bookings->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
