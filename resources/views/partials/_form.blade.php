	@csrf



	<div class="form-group">
			<label for="url">Titulo</label> 
			<input class="form-control border-0 bg-light shadow-sm" 
				type="text" 
				name="title" 
				value="{{old('title', $project->title)}}">
	</div>		


	<div class="form-group">
			<label for="url">URL</label> 
			<input class="form-control border-0 bg-light shadow-sm" 
				type="text" 
				name="url" 
				value="{{old('url', $project->url)}}">
			
	</div>	

	<div class="form-group">
			<label for="description">Descripcion</label> 
			<input class="form-control border-0 bg-light shadow-sm" 
				type="text" 
				name="description" 
				value="{{old('description', $project->description)}}">
			
	</div>	


	
{{-- 	<label>Descripcion:<label> <textarea name="description" value="{{old('description', $project->description)}}"></textarea><br>
	<label>URL: <input type="text" name="url" value="{{old('url', $project->url)}}"><label><br>
 --}}

 
	<button class="btn-primary btn btn-lg btn-block">{{ $btnText }}</button>