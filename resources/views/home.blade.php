@auth
<a href="" class="text-danger d-none" style="height:10px; width:10px; float:right">
  <form action="{{route('logout')}}" method="post">
    @csrf

    <button type="submit"><i class="fas fa-sign-out-alt mr-2"></i>Logout</button>
  </form>
</a>
@endauth
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@include('header')



<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="{{url('/images/gumba.jpg')}}" height="500" style="object-fit: cover;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="{{url('/images/himal.jpg')}}" height="500" style="object-fit: cover;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{url('/images/nepal_flag.jpg')}}" height="500" style="object-fit: cover;" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container">
  <div class="row">
    <div class="col-12 pt-4" style="display: inline-flex;">
      <div class="col-6">
        <h1 style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size:xxx-large"><strong>"Once In A Lifetime"</strong><sub>Destinations</sub></h1>
      </div>
      <div class="col-6" style="display: inline-flex">
        <figure style="margin: 10px;" class="mx-auto d-block text-center"><img src="{{url('/images/location.png')}}" alt="location-icon" style="width: 28px; height: 28px;" aria-label="Location">
          <figcaption>Location</figcaption>
        </figure>
        <figure style="margin: 10px;" class="mx-auto d-block text-center"><img src="{{url('/images/bed.png')}}" alt="accomodation-icon" style="width: 28px; height: 28px;" aria-label="Accomodation">
          <figcaption>Accomodation</figcaption>
        </figure>
        <figure style="margin: 10px;" class="mx-auto d-block text-center"><img src="{{url('/images/breakfast.png')}}" alt="breakfast-icon" style="width: 28px; height: 28px;" aria-label="Food">
          <figcaption>Food</figcaption>
        </figure>
        <figure style="margin: 10px;" class="mx-auto d-block text-center"><img src="{{url('/images/travel-icon.png')}}" alt="travel-icon" style="width: 28px; height: 28px;" aria-label="Travel">
          <figcaption>Travel</figcaption>
        </figure>
      </div>
    </div>
    <div class="destination-cards col-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 w-100">
            <img src="{{url('/images/phewa.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Pokhara</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="destination-cards col-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 w-100">
            <img src="{{url('/images/gumba.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Kathmandu</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="destination-cards col-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 w-100">
            <img src="{{url('/images/hill.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Mustang</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="destination-cards col-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 w-100">
            <img src="{{url('/images/sanjay-hona-2Q2dpVPY6XU-unsplash.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Chitwan</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-12 pt-2" style="display: inline-flex;">
      <div class="col-6">
        <h1 style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size:xxx-large"><strong>"Best Rated"</strong><sub>Packages</sub></h1>
      </div>
      <div class="col-6" style="display: inline-flex">
        <figure style="margin: 10px;" class="mx-auto d-block text-center"><img src="{{url('/images/location.png')}}" alt="location-icon" style="width: 28px; height: 28px;" aria-label="Location">
          <figcaption>Location</figcaption>
        </figure>
        <figure style="margin: 10px;" class="mx-auto d-block text-center"><img src="{{url('/images/bed.png')}}" alt="accomodation-icon" style="width: 28px; height: 28px;" aria-label="Accomodation">
          <figcaption>Accomodation</figcaption>
        </figure>
        <figure style="margin: 10px;" class="mx-auto d-block text-center"><img src="{{url('/images/breakfast.png')}}" alt="breakfast-icon" style="width: 28px; height: 28px;" aria-label="Food">
          <figcaption>Food</figcaption>
        </figure>
        <figure style="margin: 10px;" class="mx-auto d-block text-center"><img src="{{url('/images/travel-icon.png')}}" alt="travel-icon" style="width: 28px; height: 28px;" aria-label="Travel">
          <figcaption>Travel</figcaption>
        </figure>
      </div>
    </div>
    <div class="destination-cards col-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 w-100">
            <img src="{{url('/images/phewa.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">3-Days in Pokhara</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="destination-cards col-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 w-100">
            <img src="{{url('/images/gumba.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">7-Days in Kathmandu</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="destination-cards col-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 w-100">
            <img src="{{url('/images/hill.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">10-Days in Mustang</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="destination-cards col-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 w-100">
            <img src="{{url('/images/sanjay-hona-2Q2dpVPY6XU-unsplash.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">5-Days in Chitwan</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>