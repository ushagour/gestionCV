@extends("layout.page_master")


@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-12" id="tab">
        @if(session()->has('success'))
<div class="alert alert-info">
{{session()->get('success')}}
</div>
        @endif
        <p class="text-center"><em>{{__('home.mycvs')}} !</em></p>
         <div class="pull-right ">
         <a class=" btn butn" href="{{url('ajouterCV')}}">{{__('home.NewCV')}}</a>         
         </div>
         <br>
         <br>

            <table class="table table-bordered" >
                <thead>
                    <tr>
                        <td> id </td>
                        <td> type de CV  </td>
                        <td> name </td>
                        <td> date </td>
                        <td> utilisateure </td>
                        <td> operations  </td>
                    </tr>
                </thead>
                <tbody>

                   @foreach($liste as $row)
                    <tr>
                        <td> {{ $id= $row->id}}</td>
                        <td> {{ $row->typeCV}}</td>
                        <td> {{ $row->full_name}}</td>
                        <td> {{ $row->created_at}}</td>
                        <td> {{ $row->urname}} </td> 
                        <td> 

<a  data-toggle="modal" data-target="#myModal{{ $row->id}}" class="btn btn-primary  btn-sm"><i class="fa fa-eye"></i></a>              
<a href="{{url('/'.$row->id.'/modifier')}}" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"></i></a>              
<button  onclick="supprimer( {{ $row->id}})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
</button>       
       
          </td>
    
                    </tr>
  


                    @endforeach 
             
                </tbody>
            </table>
<center>{{ $liste->links() }}</center>
        </div>
    </div>
</div>
@foreach($liste as $row)

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="myModal{{ $row->id }}" role="">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <b>{{ $row->typeCV }}</b> 

          <button type="button" class="close" data-dismiss="modal">×</button>

        </div>
        <div class="modal-body">
     <div class="row">
    <div class="col-md-8">
    <div class="detailModal">
   <b>À propos de moi</b> 
<p>{{ $row->À_propos_de_moi }}</p>
 </div>
    <br>
    <div class="detailModal" >
    <b>Expérience professionnelle</b> 
<p>{{ $row->Expérience_professionnelle }}</p>
    </div>


    </div>
    <div class="col-md-4">
    <div class="detailModal" >
    <img src="{{asset('storage/'. $row->photo)}}" width="200" height="200" />
         </div>
<br>
    <div class="detailModal" >   <b>Formation</b> 
<p>{{ $row->Formation }}</p></div>
<br>
    <div class="detailModal" >   <b>Langues</b> 
    <p>{{ $row->Langues }}</p></div>
<br>
    </div>
     </div>

        </div>
        <!-- <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div> -->
      </div>
    </div>
  </div>
  @endforeach 


<script>

function supprimer(id) {
		//console.log(id)
		if (confirm("Voulez vous supprimer le CV"))
			jQuery.ajax({
				type: "get",
				url: "{{url('/delete')}}/"+id,

				success: function (data) {

				$('#tab').load(location.href + " #tab");


					console.log(data);
				},
				error: function (data) {
					alert("erreur !");
				}
			});

	}
</script>










@endsection
