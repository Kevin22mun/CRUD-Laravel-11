@extends('dashboard.master')

@section('content')

<a class="btn" href="{{route('category.create')}}">Create</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $c)
        <tr>
            <td>
                {{$c->id}}
            </td>
            <td>
                {{$c->title}}
            </td>

            <td>
                {{$c->slug}}
            </td>

            <td>
                <div class="flex justify-center items-center space-x-2">
                    <a class="btn btn-warning" href="{{route('category.edit',$c->id)}}">Edit</a>
                    <a class="btn btn-show" href="{{route('category.show',$c->id)}}">Show</a>
                    <form action="{{route('category.destroy',$c)}}" method="post">
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
    {{$categories->links()}}
  </div>

@endsection
