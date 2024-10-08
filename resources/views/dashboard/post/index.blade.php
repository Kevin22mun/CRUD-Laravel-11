@extends('dashboard.master')

@section('content')
<a class="btn" href="{{route('post.create')}}">Create</a>
  <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Posted</th>
            <th>Category</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $p)
        <tr>
            <td>
                {{$p->id}}
            </td>
            <td>
                {{$p->title}}
            </td>

            <td>
                {{$p->posted}}
            </td>

            <td>
                {{$p->category->title}}
            </td>
            <td>
                <div class="flex justify-center items-center space-x-2">
                    <a class="btn btn-warning" href="{{route('post.edit',$p->id)}}">Edit</a>
                    <a class="btn btn-show" href="{{route('post.show',$p->id)}}">Show</a>
                    <form action="{{route('post.destroy',$p)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="pagination">
    {{$posts->links()}}
  </div>

@endsection
