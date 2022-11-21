@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        Rendez-Vous ({{ $bookings->count() }})
                    </div>
                    <form action="{{ route('patient') }}" method="GET">

                        <div class="card-header">
                            Filtrer :
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="date" class="form-control datetimepicker-input" id="datepicker"
                                        data-toggle="datetimepicker" data-target="#datepicker" name="date">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">Chercher</button>

                                </div>
                            </div>

                        </div>
                    </form>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Patient</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Téléphone</th>
                                    <th scope="col">Horraire</th>
                                    <th scope="col">Médecin</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bookings as $key=>$booking)
                                    <tr>
                                        <td><img src="/profile/{{ $booking->user->image }}" width="80"
                                                style="border-radius: 50%;">
                                        </td>
                                        <td class="text-danger font-weight-bold">{{ $booking->date }}</td>
                                        <td class="text-primary font-weight-bold">{{ $booking->user->name }}</td>
                                        <td>{{ $booking->user->email }}</td>
                                        <td>{{ $booking->user->phone_number }}</td>
                                        <td>{{ $booking->time }}</td>
                                        <td class="text-primary font-weight-bold">Dr. {{ $booking->doctor->name }}</td>
                                        <td>
                                            @if ($booking->status == 0)
                                                <a href="{{ route('update.status', [$booking->id]) }}"><button
                                                        class="btn btn-primary"> En attente</button></a>
                                            @else
                                                <a href="{{ route('update.status', [$booking->id]) }}"><button
                                                        class="btn btn-success"> Vérifié</button></a>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <td class="text-danger">Il n'y a pas de rendez-vous !</td>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
