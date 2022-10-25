@php
    $setting = App\Models\SiteSetting::find(1);
@endphp
<!--::blog_part start::-->
<section class="blog_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section_tittle text-center">
                    <h2>Mise à jour du blog</h2>
                    <p>Notre Blog est géré par les administrateur de notre Applications</p>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($posts->count() > 0)
                @foreach ($posts as $post)
                    <div class="col-sm-6 col-lg-4 col-xl-4">
                        <div class="single-home-blog">
                            <div class="card">
                                <a href="{{ route('post.show', [$post->id, $post->slug]) }}" class="image-play">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt=""
                                        class="card-img-top">
                                </a>
                                <div class="card-body">
                                    <ul>
                                        <li> <span class="ti-user"></span>Administrateur</li>
                                        <li> <span class="ti-bookmark"></span></li>
                                    </ul>
                                    <a href="blog.html">
                                        <h5 class="card-title">{{ str_limit($post->content, 50) }}</h5>
                                    </a>
                                    <a href="{{ route('post.show', [$post->id, $post->slug]) }}" class="blog_btn">Plus
                                        d'info</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h4 class="text-danger text-center">Pas d'article pour ce moment</h4>
            @endif
        </div>
    </div>
</section>
<!--::blog_part end::-->
