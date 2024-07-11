@extends('dashboard.master')

@section('content')

<a href="{{route('category.create')}}">Create</a>
  <table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Slug</td>
            <td>Options</td>
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
                <a href="{{route('category.edit',$c->id)}}">Edit</a>
                <a href="{{route('category.show',$c->id)}}">Show</a>
                <form action="{{route('category.destroy',$c)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{$categories->links()}}
@endsection
