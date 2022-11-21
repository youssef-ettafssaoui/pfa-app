     <!-- ======= Recent Blog Posts Section ======= -->
     <section id="recent-blog-posts" class="recent-blog-posts">

         <div class="container" data-aos="fade-up">

             <header class="section-header">
                 <h2>publications</h2>
                 <p>Nos Dernières Nouvelles</p>
             </header>

             <div class="row">
                 @if ($posts->count() > 0)
                     @foreach ($posts as $post)
                         <div class="col-lg-4">
                             <div class="post-box">
                                 <div class="post-img">

                                     <img src="{{ asset('front/assets/img/blog.png') }}" class="img-fluid"
                                         alt="">


                                 </div>
                                 <span class="post-date">{{ $post->created_at->diffForHumans() }}</span>
                                 <h3 class="post-title">{{ $post->title }}
                                 </h3>
                                 <p>{{ str_limit($post->content, 50) }}</p>
                                 <a href="{{ route('post.show', [$post->id, $post->slug]) }}"
                                     class="readmore stretched-link mt-auto"><span>Plus d'infos</span><i
                                         class="bi bi-arrow-right"></i></a>
                             </div>
                         </div>
                     @endforeach
                 @else
                     <h2 class="text-danger
                                     text-center">Pas d'article pour ce
                         moment</h2>
                 @endif

             </div>

         </div>

     </section><!-- End Recent Blog Posts Section -->
