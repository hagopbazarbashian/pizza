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
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/pizza-1.jpg);"></a>
    					<div class="text p-4">
    						<h3>Italian Pizza</h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
    					</div>
    				</div>
    			</div>
    			
    			

    			
    			
    			
    		</div>
    	</div>

    	</div>
    </section>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                   <ul class="list-group">
                    <a href="{{ route('pizza.create') }}" class="list-group-item list-group-item-action">View</a>
                    <a href="" class="list-group-item list-group-item-action">Create</a>
                    <a href="{{ route('order-user') }}" class="list-group-item list-group-item-action">User Order</a>
                    <a href="{{ route('/customer') }}" class="list-group-item list-group-item-action">Show All Customers</a>
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
                            <input type="text" class="form-control" name="name">
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
</div> --}}
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
                        <p>{{$Pizza->description}}</p>
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







    <div class="container">
        <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-4">Our Menu Pricing</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
        <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url(images/pizza-1.jpg);"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                        <h3><span>Italian Pizza</span></h3>
                        <span class="price">$20.00</span>
                    </div>
                    <div class="d-block">
                        <p>A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url(images/pizza-2.jpg);"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                        <h3><span>Hawaiian Pizza</span></h3>
                        <span class="price">$29.00</span>
                    </div>
                    <div class="d-block">
                        <p>A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url(images/pizza-3.jpg);"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                        <h3><span>Greek Pizza</span></h3>
                        <span class="price">$20.00</span>
                    </div>
                    <div class="d-block">
                        <p>A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url(images/pizza-4.jpg);"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                        <h3><span>Bacon Crispy Thins</span></h3>
                        <span class="price">$20.00</span>
                    </div>
                    <div class="d-block">
                        <p>A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url(images/pizza-5.jpg);"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                        <h3><span>Hawaiian Special</span></h3>
                        <span class="price">$49.91</span>
                    </div>
                    <div class="d-block">
                        <p>A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url(images/pizza-6.jpg);"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                        <h3><span>Ultimate Overload</span></h3>
                        <span class="price">$20.00</span>
                    </div>
                    <div class="d-block">
                        <p>A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url(images/pizza-7.jpg);"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                        <h3><span>Bacon Pizza</span></h3>
                        <span class="price">$20.00</span>
                    </div>
                    <div class="d-block">
                        <p>A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url(images/pizza-8.jpg);"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                        <h3><span>Ham &amp; Pineapple</span></h3>
                        <span class="price">$20.00</span>
                    </div>
                    <div class="d-block">
                        <p>A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endif
@endsection

