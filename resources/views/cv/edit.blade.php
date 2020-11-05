@extends("layout.page_master")


@section("container")

<!-- Container (Contact Section) -->
<div id="contact" class="container">

  <h3 class="text-center"> modifier le cv numero {{ $cv_to_edit->id}}</h3>
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
  <form action="{{ url('update') }}" method="POST">
  {{csrf_field()}}
    <div class="col-md-8">
<input type="text" name="idcv" value="{{ $cv_to_edit->id}}" hidden> 
<input type="text" class="form-control" id="title" name="title" value=" {{ $cv_to_edit->title}}" >
<br>

       <textarea class="form-control" id="presontation	" name="presontation"  rows="5"> {{ $cv_to_edit->presontation}}</textarea>
       
      <br>
    </div>
    <div class="col-md-12 form-group">
          <button class="btn btn-success pull-left" type="submit">Send</button>
      </div>
      </form>
  </div>


</div>




@endsection