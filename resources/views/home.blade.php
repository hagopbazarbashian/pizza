@extends('layouts.app')
@section('content')
@if(auth()->user()->is_admin == 1)
<style>
    .form-group{
        margin: 0 0 25px 0;
    }  
</style>
@if(Session::has('successful'))
<div class="alert alert-success">
  {{ Session::get('successful')}}
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                   <ul class="list-group">
                    <a href="{{ route('pizza.create') }}" class="list-group-item list-group-item-action">View</a>
                    <a href="" class="list-group-item list-group-item-action">Create</a>
                    <a href="{{ route('order-user') }}" class="list-group-item list-group-item-action">User Order</a>
                    <a href="{{ route('customer') }}" class="list-group-item list-group-item-action">Show All Customers</a>
                   </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                <div class="card-body">
                    <form action="{{ route('pizza.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name Of Pizza</label>
                            <input type="text"  class="form-control" style="background-color: #d1d1d1 !important;" name="name">
                            <span style="color:red">@error('name') {{ $message }}@enderror</span>
                           </div>
                        
                            <div class="form-group">
                             <label for="name">Description Of Pizza</label>
                             <textarea type="text" class="form-control" name="description"></textarea>
                             <span style="color:red">@error('description') {{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label >pizza price($)</label>
                                    <input type="number" class="form-control" name="small_pizza_price" placeholder="small pizza price">
                                    <span style="color:red">@error('small_pizza_price') {{ $message }}@enderror</span>
                                    <input type="number" class="form-control" name="medium_pizza_price" placeholder="medium pizza price">
                                    <span style="color:red">@error('medium_pizza_price') {{ $message }}@enderror</span>
                                    <input type="number" class="form-control" name="large_pizza_price" placeholder="larg pizza price">
                                    <span style="color:red">@error('large_pizza_price') {{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category" class="form-control">
                                    <option value="vegetarion">Vegetarion</option>
                                    <option value="nonvegetarion"> Non Vegetarion Pizza</option>
                                    <option value="traditional"> Traditional Pizza</option>
                                </select>
                                <span style="color:red">@error('category') {{ $message }}@enderror</span>
                            </div>
        
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                                <span style="color:red">@error('image') {{ $message }}@enderror</span>
                            </div>
        
                            <div class="form-group text-center">
                               <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                    </form>
                   
            </div>
        </div>
    </div>
</div>
@else
<style>
    .form-group{
        margin: 0 0 25px 0;
    }
    a.list-group-item{
        font-size: 18px
    }
    a.list-group-item:hover{
        background-color: red;
        color: #fff;
    }
    .card-header{
        background-color: red;
        color: #fff;
        font-size: 20px;
    }
</style>
@if(Session::has('successful'))
<div class="alert alert-success">
  {{ Session::get('successful')}}
</div>
@endif
<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">
    <div class="slider-item">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center" data-scrollax-parent="true">

          <div class="col-md-6 col-sm-12 ftco-animate">
              <span class="subheading">Delicious</span>
            <h1 class="mb-4">Italian Cuizine</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
          </div>
          <div class="col-md-6 ftco-animate">
              <img src="images/bg_1.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center" data-scrollax-parent="true">

          <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
              <span class="subheading">Crunchy</span>
            <h1 class="mb-4">Italian Pizza</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
          </div>
          <div class="col-md-6 ftco-animate">
              <img src="images/bg_2.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome</span>
            <h1 class="mb-4">We cooked your desired Pizza Recipe</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>000 (123) 456 7890</h3>
                            <p>A small river named Duden flows</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>198 West 21th Street</h3>
                            <p>Suite 721 New York NY 10016</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Open Monday-Friday</h3>
                            <p>8:00am - 9:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-md-flex pl-md-5 p-4 align-items-center">
                <ul class="social-icon">
          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    <div class="one-half ftco-animate">
    <div class="heading-section ftco-animate ">
      <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Pizza</span> A Restaurant</h2>
    </div>
    <div>
      <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
    </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Our Services</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
        <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-diet"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Healthy Foods</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-bicycle"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Fastest Delivery</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
          <div class="media-body">
            <h3 class="heading">Original Recipes</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>    
      </div>
    </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Hot Pizza Meals</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
    </div>
    <div class="container-wrap">
        <div class="row no-gutters d-flex">
            @if (count($Pizzas)>0)
            @foreach ($Pizzas as $Pizza)
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img" style="background-image: url({{ Storage::url($Pizza->image) }});"></a>
                    <div class="text p-4">
                        <h3>{{$Pizza->name}}</h3>
                        <p style="color:white">{{$Pizza->description}}</p>
                        <p class="price"><span>$2.90</span> <a href="{{ route('pizza',$Pizza->id) }}" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>No Pizza</p>
            @endif
        </div>
    </div>
</section>

<section class="ftco-gallery">
  <div class="container-wrap">
    <div class="row no-gutters">
      <div class="col-md-3 ftco-animate">
        <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon"><span class="flaticon-pizza-1"></span></div>
                <strong class="number" data-number="100">0</strong>
                <span>Pizza Branches</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon"><span class="flaticon-medal"></span></div>
                <strong class="number" data-number="85">0</strong>
                <span>Number of Awards</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon"><span class="flaticon-laugh"></span></div>
                <strong class="number" data-number="10567">0</strong>
                <span>Happy Customer</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon"><span class="flaticon-chef"></span></div>
                <strong class="number" data-number="900">0</strong>
                <span>Staff</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-menu">
  <div class="container-fluid">
    <div class="row d-md-flex">
      <div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/about.jpg);">
      </div>
      <div class="col-lg-8 ftco-animate p-md-5">
        <div class="row">
          <div class="col-md-12 nav-link-wrap mb-5">
            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pizza</a>

              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Burgers</a>

              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Pasta</a>
            </div>
          </div>
          <div class="col-md-12 d-flex align-items-center">
            
            <div class="tab-content ftco-animate" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                <div class="row">
                  @if (count($Pizzas)>0)
                  @foreach ($Pizzas as $Pizza)
                    <div class="col-md-4 text-center">
                      <div class="menu-wrap">
                        <a href="#" class="menu-img img mb-4" style="background-image: url({{ Storage::url($Pizza->image) }});"></a>
                        <div class="text">
                          <h3><a href="#">{{ $Pizza->name }}</a></h3>
                          <p style="color:white">{{ $Pizza->description }}</p>
                          <p class="price"><span>{{ $Pizza->small_pizza_price }} AMD</span></p>
                          <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    @else
                    <p>No pizza</p>
                    @endif
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                <div class="row">
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></a>
                      <div class="text">
                        <h3><a href="#">Lemonade Juice</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                        <p class="price"><span>$2.90</span></p>
                        <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                      </div>
                    </div>
                  </div>
                
                  
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                <div class="row">
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-1.jpg);"></a>
                      <div class="text">
                        <h3><a href="#">Itallian Pizza</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                        <p class="price"><span>$2.90</span></p>
                        <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                <div class="row">
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-1.jpg);"></a>
                      <div class="text">
                        <h3><a href="#">Itallian Pizza</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                        <p class="price"><span>$2.90</span></p>
                        <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('footer.footer')
@endif
@endsection

