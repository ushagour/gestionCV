@extends("layout.page_master")


@section("content")

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
<input type="text" class="form-control" id="typeCV" name="typeCV" value=" {{ $cv_to_edit->typeCV}}" >
<br>

       <textarea class="form-control" id="name" name="name"  rows="5"> {{ $cv_to_edit->name}}</textarea>
       
      <br>
    </div>
    <div class="col-md-12 form-group">
          <button class="btn btn-success pull-left" type="submit">Send</button>
      </div>
      </form>
  </div>


</div>




@endsection