@extends('layout.app')
@section('title','home')

@section('content')

<div class="container-fluid parallax mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 text-center topDiv">
            <h1 class="text-white">Software Engineer</h1>
            <h3 class="text-white">Mobile & Web</h3>
            <button class="btn btn-primary">Learn More</button>
        </div>
    </div>
</div>

<div class="container mt-5 text-center">
    <h2>My Services</h2><br><br>
    <div class="row">
    <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
            <img src="{{asset('images/car.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Service Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           </div>
     </div>   
</div>
    <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
            <img src="{{asset('images/car.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Service Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           </div>
     </div>   
</div>
    <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
            <img src="{{asset('images/car.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Service Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           </div>
     </div>   
</div>
    </div>
</div>


<div class="container mt-5 text-center">
    <h2>Recent Projects</h2><br><br>
    <div class="row">
    <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
            <img src="{{asset('images/car.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Project Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button class="btn btn-info">Learn More</button>

           </div>
     </div>   
</div>
    <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
            <img src="{{asset('images/car.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Project Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button class="btn btn-info">Learn More</button>

           </div>
     </div>   
</div>
    <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
            <img src="{{asset('images/car.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Project Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button class="btn btn-info">Learn More</button>

           </div>
     </div>   
</div>
    </div>
</div>


<div class="container text-center mt-5 mb-5">
    <h2>Contact With Me</h2><br><br>
    <div class="row">
        <div class="col-md-6">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Your Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Your Mobile Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Your Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Your Message</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-block btn-primary">Send Now</button>
</form> 
        </div>
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8241995618173!2d90.35778151496793!3d23.753647694569153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5c7d2ad32d%3A0x4ad0ef1f2366fe9e!2zS2FkZXJhYmFkIEhvdXNpbmcgU29jaWV0eSDgppXgpr7gpqbgp4fgprDgpr7gpqzgpr7gpqYg4Ka54Ka-4KaJ4Kac4Ka_4KaCIOCmuOCni-CmuOCmvuCmh-Cmn-Cmvw!5e0!3m2!1sbn!2sbd!4v1644471671263!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>


@endsection