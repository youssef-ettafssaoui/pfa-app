@extends('admin.layouts.master')

@section('content')
    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Contenu</th>
                                    <th scope="col">Satut</th>
                                    <th>Date</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td><img src="{{ asset('storage/' . $post->image) }}" width="80"></td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ str_limit($post->content, 20) }}</td>
                                        <td>
                                            @if ($post->status == '0')
                                                <a href="" class="badge badge-primary"> Desactivé</a>
                                            @else
                                                <a href="" class="badge badge-success"> Activé</a>
                                            @endif
                                        </td>
                                        <td>{{ $post->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('post.restore', [$post->id]) }}"><button
                                                    class="btn btn-info btn-sm">Restaurer</button></a>





                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $posts->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
