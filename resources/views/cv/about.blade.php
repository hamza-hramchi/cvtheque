@extends('layouts.app')


@section('content')

<div class="container mt-3">
  <h2>About Us</h2>
  <h4>Ce site a pour but de vous aider à créer des CV en ligne en ajoutant vos : expériences, compétences, formations, ...</h4>
  <p>Créateur de site</p>
  <div class="media border p-3">
    <div class="media-body">
      <h4>Hamza HRAMCHI <small><i>17 Octobre 1996</i></small></h4>
      <p>Etudiant ingénieur, dévéloppeur web et programmation d'un robot humanoîde.</p>      
    </div>
    <img src="{{ asset('image.jpg') }}" alt="John Doe" class="ml-3 mt-3 rounded-circle" style="width:60px;">
  </div>

  	<p>
  		<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos pariatur atque blanditiis molestiae enim laudantium architecto, excepturi fuga quasi, perspiciatis suscipit asperiores iusto, fugit praesentium nam, quidem repellendus illum eligendi?</span>
  		<span>Odio repellendus a inventore iste. Obcaecati in modi aspernatur quaerat, quam sequi inventore commodi, voluptate nesciunt deleniti delectus aut cupiditate. Sit, tenetur at recusandae quia quod incidunt mollitia voluptates a?</span>
  		<span>Consequatur minima reprehenderit nostrum ab assumenda! Ex est, ipsum maxime aperiam nulla dolorem laboriosam ea expedita qui beatae, quam sequi quae deleniti vitae! In tenetur, odio molestiae minus iste. Ex.</span>
  		<span>Numquam praesentium, illum omnis veritatis quaerat eum expedita nisi, molestiae magni ipsam assumenda velit placeat, illo? Deserunt quae ipsum, sunt ipsam vero nihil, molestias rerum. Voluptatem aperiam cumque autem, ratione.</span>
  		<span>Quasi molestiae et, iste earum, consectetur ratione nisi, voluptates libero quod, corporis labore facere eveniet! Dicta illum, odit culpa similique nostrum id vero vel veritatis sit rem, debitis et necessitatibus.</span>
  		<span>Vel, quae incidunt! Dicta aliquam animi placeat dolorem illo suscipit inventore ea dolore molestias! Necessitatibus odio debitis error illum repudiandae, minima, animi vero molestias excepturi ipsam deserunt unde commodi, consequatur.</span>
  		<span>Pariatur expedita, illum quibusdam! Magni distinctio ad, odio atque excepturi error explicabo porro, voluptate voluptas beatae, eaque nam repellat quaerat temporibus quo rerum reiciendis, vitae omnis eum! Quidem, vitae, placeat?</span>
  		<span>Totam ipsa optio eos perspiciatis maxime error porro eveniet quam maiores, voluptate ex perferendis nemo, neque distinctio illo quisquam aliquid quia excepturi tempora aspernatur cupiditate similique quos quod iste tenetur!</span>
  		<span>Saepe tenetur numquam eius, accusamus, ratione accusantium aut tempore ab earum voluptas ad illo dignissimos rerum, explicabo nemo corporis porro vitae provident omnis sequi commodi. Doloremque quam tempora molestiae a?</span>
  		<span>Obcaecati quas excepturi officia voluptates impedit optio quod, perspiciatis quidem quisquam facere quibusdam deleniti, amet eveniet unde saepe necessitatibus? Reiciendis porro veniam dolorum, perspiciatis nam eaque rerum ea perferendis iusto.</span>
  	</p>

  <div class="form-group">
					<a href="{{ url('cvs')}}" class="form-control btn btn-primary">Page d'accueil</a>
				</div>
</div>

@endsection