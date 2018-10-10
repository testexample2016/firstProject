@extends('layouts.master')

@section('content')
  <section class="row new-post">
  	<div class="col-md-6 col-md-offset-3"> 
  		<header><h3>What do you have to say?</h3></header>
  		  <form action="#">
  		  	<div class="form-group">
  		  		<textarea class="form-control" name="new-post" id="new-post" rows="5" placeholder="Your Post"></textarea>
  		  	</div>
  		  	<button type="submit" class="btn btn-primary">Create post</button>
  		  	@csrf
  		  </form>

  	</div>
  </section>
  <section>
  	<div class="row posts">
  		<div class="col-md-6 col-md-offset-3">
  			<header><h3>What other people say...</h3></header>
  			<article class="post">
  				<p>Give me six hours to chop down a tree and I will spend the first four sharpening the axe. - Abraham Lincoln </p>
  				<div class="info">
  					Posted by Abhijit on 10 Oct 2018
  				</div>
  				<div class="interaction">
  					<a href="#">Like</a> |
  					<a href="#">Dislike</a> |
  					<a href="#">Edit</a> |
  					<a href="#">Delete</a>
  				</div>
  			</article>

  			<article class="post">
  				<p>Strive not to be a success, but rather to be of value. –Albert Einstein
 </p>
  				<div class="info">
  					Posted by Abhijit on 10 Oct 2018
  				</div>
  				<div class="interaction">
  					<a href="#">Like</a> |
  					<a href="#">Dislike</a> |
  					<a href="#">Edit</a> |
  					<a href="#">Delete</a>
  				</div>
  			</article>
  		</div>
  	</div>
  </section>
  @endsection