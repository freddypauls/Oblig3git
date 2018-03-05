
@foreach($listings as $listing)
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
				 <div class="panel-heading">
					
					<h3>{{ $listing->title }}</h3>


				 </div>
				 
				<div class="panel-body">
				
					{{ $listing->description }}
				
				</div>
		</div>
	</div>
@endforeach
