<form id="editform" action="/edit/{{$post->id}}" method="Post">
	{{csrf_field()}}
		<div class="form-group">
		<input type="text" name="edit_title" value="{{$post->title}}" class="form-control">
		</div>
		<div class="form-group">
		<textarea name="editbody" class="form-control">{{$post->body}}</textarea>
		</div>
		<input type="submit" name="save" value="Save" class="btn btn-success btn-sm">
		<input type="button" value="Cancel" class="btn btn-danger btn-sm" id="cancelEdit">
</form>