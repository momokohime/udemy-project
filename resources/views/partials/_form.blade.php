	@csrf

	<label12>Titulo: <input type="text	" name="title" value="{{old('title', $project->title)}}"><label12><br>
	<label12>Descripcion:<label12> <textarea name="description" value="{{old('description', $project->description)}}"></textarea><br>
	<label12>URL: <input type="text" name="url" value="{{old('url', $project->url)}}"><label12><br>

	<button>{{ $btnText }}</button>