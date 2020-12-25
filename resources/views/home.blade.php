@extends('layout.page_master')

@section('content')
<!--  -->

<section>
<!-- Container (The Band Section) -->
<div id="home" class="containerH">
<center>    <h3>{{__('home.the_band')}}</h3>
</center>
    <p class="my-element"><em>{{__('home.the_band_title')}}</em></p>

    <p class="my-element">{{__('home.the_band_content')}}</p>
    <br>
    <div class="row">
        <div class="col-sm-4 my-element">
            <p class="text-center"><strong>{{__('home.the_band_step1_title')}}</strong></p><br>
            <p>{{__('home.the_band_step1_content')}}</p>

            <a href="#demo"  class=" btn butn " data-toggle="collapse">
            {{__('home.readmore')}} 
            </a>
            <div id="demo" class="collapse">
                <p>Guitarist and Lead Vocalist</p>
            </div>
        </div>
        <div class="col-sm-4 my-element">
            <p class="text-center"><strong>{{__('home.the_band_step2_title')}}.</strong></p><br>
            <p>{{__('home.the_band_step2_content')}}.</p>
            <a href="#demo2"  class="btn butn" data-toggle="collapse">
            {{__('home.readmore')}} 
            </a>
            <div id="demo2" class="collapse">
                <p>Drummer</p>
             
            </div>
        </div>
        <div class="col-sm-4 my-element">
            <p class="text-center"><strong>{{__('home.the_band_step3_title')}}.</strong></p><br>
            <p>{{__('home.the_band_step3_content')}}.</p>
            <a href="#demo3" class="btn butn" data-toggle="collapse">
            {{__('home.readmore')}} 
            </a>
            <div id="demo3" class="collapse">
                <p>Bass player</p>
           
            </div>
        </div>
    </div>
</div>
</section>



<!-- Container (Contact Section) -->
<div id="contactUS" class="containerH">
  <h3 class="text-center">{{__('home.contactUS')}}</h3>
  <div class="row">
    <div class="col-md-4">
      <p><span class="glyphicon glyphicon-map-marker"></span> RABAT, MR</p>
      <p><span class="glyphicon glyphicon-phone"></span> {{__('home.contactUS')}}</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder=" {{__('home.info_name')}}" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder=" {{__('home.info_email')}}" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder=" {{__('home.info_content')}}" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">{{__('home.info_send')}}</button>
        </div>
      </div>
    </div>
  </div>

  <br>
  
  
  <!-- <h3 class="text-center">From The Blog</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
    <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
    <li><a data-toggle="tab" href="#menu2">Peter</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Mike Ross, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Chandler Bing, Guitarist</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Peter Griffin, Bass player</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div> -->
</div>








@endsection
