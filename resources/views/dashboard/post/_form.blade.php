@csrf

<label for="">Title</label>
<input class= "form-control" type="text" name="title" value= "{{old('title',$post->title)}}">

<label for="">Slug</label>
<input class= "form-control" type="text" name="slug" value= "{{old('slug',$post->slug)}}">

<label for="">Content</label>
<textarea class= "form-control" name="content">{{old('content',$post->content)}}</textarea>

<label for="">Category</label>
<select class= "form-control" name="category_id">
    @foreach ($categories as $title => $id)
        <option {{old('category_id', $post->category_id) == $id ? 'selected' : ''}} value="{{$id}}">{{$title}}</option>
    @endforeach
</select>

<label for="">Description</label>
<textarea class= "form-control" name="description" >{{old('description',$post->description)}}</textarea>

<label for="">Posted</label>
<select class= "form-control" name="posted">
    <option {{old('posted',$post->posted) ==  'yes' ? 'selected' : ''}} value="yes">Yes</option>
    <option {{old('posted',$post->posted) ==  'not' ? 'selected' : ''}} value="not">Not</option>
</select>

@if (isset($task) && $task == 'edit')
    <label for="">Image</label>
    <input type="file" name="image" id="">

@endif
<div class="flex justify-center">
    <button class="btn btn-success" type="submit">Send</button>
</div>
