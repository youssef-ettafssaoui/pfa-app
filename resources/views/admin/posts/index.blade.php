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
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Contenu</th>
                                    <th scope="col">Statut</th>
                                    <th>Date</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td><img src="{{ asset('storage/' . $post->image) }}" width="60"></td>
                                        <td><a href="{{ route('post.show', [$post->id, $post->slug]) }}"
                                                target="_blank">{{ $post->title }}</a></td>
                                        <td>{{ str_limit($post->content, 10) }}</td>
                                        <td>
                                            @if ($post->status == '0')
                                                <a href="{{ route('post.toggle', [$post->id]) }}"
                                                    class="badge badge-danger">
                                                    Désactivé</a>
                                            @else
                                                <a href="{{ route('post.toggle', [$post->id]) }}"
                                                    class="badge badge-success"> Activé</a>
                                            @endif
                                        </td>
                                        <td>{{ $post->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('post.edit', [$post->id]) }}"><button
                                                    class="btn btn-warning">Modifier</button></a>

                                            <br><br>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#exampleModal{{ $post->id }}">
                                                Supprimer
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Supprimer
                                                                Publication</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Voulez-vous vraiment supprimer <b
                                                                style="color: red;">{{ $post->title }}</b> ?
                                                        </div>
                                                        <form action="{{ route('post.delete') }}" method="POST">@csrf
                                                            <div class="modal-footer">
                                                                <input type="hidden" name="id"
                                                                    value="{{ $post->id }}">
                                                                <button type="button" class="btn btn-dark btn-sm"
                                                                    data-dismiss="modal">Fermer</button>
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-sm">Supprimer</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>




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
