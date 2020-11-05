@extends("layout.page_master")


@section("container")

<!-- Container (Contact Section) -->
<div id="contact" class="container">
<div class="row">
<div class="col-md-6">
<h3 class="text-center">Ajouter  un nouveau Cv  </h3>
  <div class="row">


@if(count($errors))
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $message)

<li>{{$message}}</li>
@endforeach
</ul>

</div>
@endif


  <form action="{{ url('add') }}" method="POST">
  {{csrf_field()}}
    <div class="col-md-8">
        <input class="form-control" type="text" id="title" name="title" placeholder="title">
  
        <br>
        <textarea class="form-control" id="presontation	" name="presontation" placeholder="presontation" rows="5"></textarea>
 
      
      <br>
    </div>
    <div class="col-md-12 form-group">
          <button class="btn pull-left" type="submit">Send</button>
      </div>
      </form>
  </div>
</div>
<div class="col-md-6">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://img-corp.com/images/about/Financial-101.png" alt="New York" width="1200" height="700">
        <!-- <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>       -->
      </div>

      <div class="item">
        <img src="https://retailandhospitalityhub.com/wp-content/uploads/2018/11/img.jpg" alt="Chicago" width="1200" height="700">
          
      </div>
    
      <div class="item">
        <img src="https://i.cdn.newsbytesapp.com/images/160_6431550472438.jpg" alt="Los Angeles" width="1200" height="700">
       
    </div>

    <!-- Left and right controls -->
    <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> -->
</div>



</div>

</div>



</div>
</div>




@endsection