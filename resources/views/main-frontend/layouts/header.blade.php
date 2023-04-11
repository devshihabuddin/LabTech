  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
      @foreach(\App\Models\Setting::all() as $setting)
        <a href="{{url('/')}}"><img src="/images/logo/{{$setting->image}}" alt="Lab Tech" ></a>
        @endforeach
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="{{route('/')}}">HOME</a></li>
          <li class="dropdown"><a href="#"><span>PRODUCTS</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            @foreach(\App\Models\Category::all() as $cat)
              <!-- <li><a href="#">dropdown</a></li> -->
              @php
                $subcategories = DB::table('subcategories')->where('category_id',$cat->id)->get();
              @endphp
              <li class="dropdown"><a href="{{route('product.category',$cat->slug)}}"><span>{{strtoupper($cat->category_name)}}</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  @foreach($subcategories as $sub)
                  <li><a href="{{route('product.subcategory',$sub->id)}}">{{strtoupper($sub->subcategory_name)}}</a></li>
                  @endforeach
                </ul>
              </li>
              @endforeach
            </ul>
          </li>
          <li><a href="{{route('company')}}">COMPANY</a></li>
          <!-- <li><a href="{{route('frontend.products')}}">PRODUCTS</a></li> -->
          <li><a href="{{route('traning')}}">TRANING</a></li>
          <li><a href="{{route('gallery')}}">GALLERY</a></li>
          <li><a href="{{route('client')}}">CLIENTS</a></li>
          <li><a href="{{route('contact')}}">CONTACT US</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->