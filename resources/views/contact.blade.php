@extends('layouts.index')

@section('content')
<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>La forme de contact</h2>
					<div class="space20">&nbsp;</div>
					@if(isset($success))
					<div class="text-warning">{{$success}}</div>
					@endif
					<div class="space20">&nbsp;</div>
					<form action="{{route('post-contact')}}" method="post" class="contact-form">
					@csrf	
						<div class="form-block">
							<input name="name" type="text" placeholder="Votre nom *" required>
						</div>
						<div class="form-block">
							<input name="email" type="email" placeholder="Votre email *" required>
						</div>
						<div class="form-block">
							<input name="subject" type="text" placeholder="Le subjet *" required>
						</div>
						<div class="form-block">
							<textarea name="message" placeholder="Votre message *" required></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Envoyer message <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Les informations</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Adresse</h6>
					<p>
						15 Avenue du maréchal Foch<br>
						41000, Blois<br>
						France
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Email</h6>
					<p>
						<a href="mailto:nguyen.vo@insa-cvl.fr"><i class="fas fa-envelope"></i> nguyen.vo@insa-cvl.fr</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Téléphone</h6>
					<p>
						<p><i class="fas fa-phone-volume"></i> 07 67 17 94 26</p>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> 
@endsection