<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Les évenements</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/blog_1.jpg" alt="">
              </a>
            </div>
            <div class="body">
            <h5 class="post-title"><a href="/Evenementdetail">{{$events[0]->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  
                </div>
                <span class="mai-time"></span> commencer le {{$events[0]->start}} Jusqu'ua le {{$events[0]->end}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
               
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/dpr_awb_fondation_imagine_ta_ville_linkedin_sept.png" alt="">
              </a>
            </div>
            <div class="body">
            <h5 class="post-title"><a href="/Evenementdetail">{{$events[1]->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  
                </div>
                <span class="mai-time"></span> commencer le {{$events[1]->start}} Jusqu'ua le {{$events[1]->end}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/blog_3.jpg" alt="">
              </a>
            </div>
            <div class="body">
            <h5 class="post-title"><a href="/Evenementdetail">{{$events[2]->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  
                </div>
                <span class="mai-time"></span> commencer le {{$events[2]->start}} Jusqu'ua le {{$events[2]->end}}
            </div>
          </div>
        </div>
</div>
        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="/Evenementdetail" class="btn btn-primary">Voir Plus</a>
        </div>

      </div>
    </div>
  </div>