
@extends('blog.master')

@section('content')
<x-blog.show :post="$post" data-id='1' class='demo'/>
<x-dynamic-component component='blog.show' :post="$post"/>
@endsection


