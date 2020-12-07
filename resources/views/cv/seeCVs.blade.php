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
        <p class="text-center"><em>liste des CVs !</em></p>
         <div class="pull-right ">
         <a class=" btn butn" href="{{url('ajouterCV')}}">Nouveau CV</a>         
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
                        <td> operations  </td>
                    </tr>
                </thead>
                <tbody>

                   @foreach($liste as $row)
                    <tr>
                        <td> {{ $row->id}}</td>
                        <td> {{ $row->typeCV}}</td>
                        <td> {{ $row->name}}</td>
                        <td> {{ $row->created_at}}</td>
                        <td> 
              
                        
<a href="#" class="btn btn-primary  btn-sm">details</a>              
<a href="{{url('/'.$row->id.'/modifier')}}" class="btn btn-success btn-sm">edits</a>              
<button  onclick="supprimer( {{ $row->id}})" class="btn btn-danger btn-sm">delete</button>              
          </td>
                    </tr>
                    @endforeach 
             
                </tbody>
            </table>
<center>            {{ $liste->links() }}
</center>
        </div>
    </div>
</div>
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
