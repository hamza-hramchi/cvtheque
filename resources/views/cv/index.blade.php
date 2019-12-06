@extends('layouts.app')


@section('content')

	<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<div class="container">
	<div class="row">
		<div class="col-md-12">

			
			<h2 class="text-center text-primary">La liste de mes CV</h2>
			
			

			<div class="float-right">
				<a href="{{ url('cvs/create') }}" class="btn btn-success text-right">Nouveau Cv</a>
			</div>

			<!--search-->
			<div class="col-md-4">

			

				<form action="/search" method="get"> <!--action =/search --->
					<div class="form-group">
						<input type="search" name="search" class="form-control" value="" placeholder="search" >
						<span class="form-group-btn">
							<button type="submit" class="btn btn-primary">Search</button>
						</span>
					</div>
				</form>
			</div>
		<!--end serach-->



			<br>

	<!--	<table class="table">

			<head>
				<tr>
					<th>Title</th>
					<th>Presentation</th>
					<th>Date de création</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</head>


			<body>
				@foreach($cvs as $cv)
				<tr>
					<td>{{ $cv->titre }}</td>
					<td>{{ $cv->presentation }}</td>
					<td>{{ $cv->created_at }}</td>
					<td><img src="{{ asset('storage/'.$cv->image) }}" alt=""></td>
					<td> -->
						

		<!--					<form action="{{url('cvs/'.$cv->id)}}" mathod="POST">
Génerer les token, HTML a seulement 2 methodes pour les forms!
							{{ csrf_field() }}
							{{ method_field('DELETE') }}

CAN policy : masquer le bouton supprimer pour l'admin
							@can('delete',$cv)
							<button type="submit" class="btn btn-danger">Supprimer</button>
							@endcan

							<a href="{{ url('cvs/'.$cv->id.'/show') }}" class="btn btn-info">Details</a>
							<a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-warning">Editer</a>
							</form>

					</td>
				</tr>
				@endforeach
			</body>

			</table> -->

		<div class="row" >
			@foreach($cvs as $cv)
				<div class="col-sm-6 col-md-4" >
					<div class="thumbnail">
						<img src="{{ asset('storage/'.$cv->image) }}" alt="" class="img-thumbnail" width="200px" height="200px">
						<div class="caption">
							<h4>{{ $cv->titre }}</h4>
							<p  class="text-primary">{{ $cv->presentation }}</p>
							<p>
								<form action="{{url('cvs/'.$cv->id)}}" mathod="POST">

							{{ csrf_field() }}
							{{ method_field('DELETE') }}

							

							<a href="{{ url('cvs/'.$cv->id.'/show') }}" class="btn btn-info">Details</a>
							<a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-warning">Editer</a>
							@can('delete',$cv)
							<button type="submit" class="btn btn-danger">Supprimer</button>
							@endcan
							
								</form>

							</p>
						</div>
					</div>
					</div>
					@endforeach
				</div>






			
		</div>
	</div>
</div>
@endsection

