<div class="card mb-3">
	<div class="card-header">
		Rechercher
	</div>
	<div class="card-body">
		<form action="<?php echo home_url(); ?>" >
			<div class="input-group mb-3">
				<input type="search" class="form-control" placeholder="Rechercher un article"
				       aria-label="Search article" aria-describedby="button-addon2"
				       value="<?php the_search_query(); ?>" name="s">
				<button class="btn " type="submit"
				        id="button-addon2">Search
				</button>
			</div>
		</form>
	</div>
</div>
<!--TODO-->
<!-- see how works search request and how get result-->