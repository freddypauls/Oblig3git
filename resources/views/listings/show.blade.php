@extends('layouts.app')

@section('content')

	@if(Auth::Check() == true)

		<?php $id = Auth::User()->id; ?>

		<div class="container">

			 <div class="row">

				  <div class="col-md-8 col-md-offset-2">

						<div class="panel panel-default">

							 <div class="panel-heading">

								<h3>{{ $l->title }}</h3>


							 </div>


							 <div class="panel-body">

								{{ $l->description }}


								<hr>
								
								<div class="card">

									<div class="card-block">

										<form method="post" action="../listings/{{ $l->id }}/messages">
											
												{{ csrf_field() }}

												<div class="form-group">

													<textarea name="body" placeholder="Your message here..." class="form-control"></textarea>

												</div>

												<div class="form-group">

													<input class="button-btn" type="submit" value="Send Message">

												</div>

										</form>

									</div>

								</div>
								
								<hr>
								
								<div class="comments">
									<ul class="list-group">

										@foreach($l->messages as $message)
											@if($id == $l->user_id  || $id == $message->user_id)
											<li class="list-group-item">

												<strong>
												@foreach($users as $user)

													@if($user->id == $message->user_id)

														{{ $user->name }} 

													@endif

												@endforeach

													{{ $message->created_at->diffForHumans() }}: &nbsp;

												</strong>
												<article>

													{{ $message->body }}

												</article>
												<strong><h5 class="message-mail">
													@foreach($users as $user)
														@if($user->id == $message->user_id)

															{{ $user->email }} 

														@endif
													@endforeach
													
												</strong></h5>
											</li>	
											@endif	
										@endforeach

									</ul>
									
								</div>
								
								@include('layouts.errors')
								
							 </div>
							 
						</div>
						
				  </div>
				  
			 </div>
			 
		</div>
		
	@else
	
		<div class="container">
		 
			 <div class="row">
			  
				  <div class="col-md-8 col-md-offset-2">
				  
						<div class="panel panel-default">
						 
							 <div class="panel-heading">

								<h3>{{ $l->title }}</h3>


							 </div>


							 <div class="panel-body">

								{{ $l->description }}


								<hr>

								</div>
							 </div>
						</div>
				  </div>
			 </div>
		</div>
	@endif
@endsection