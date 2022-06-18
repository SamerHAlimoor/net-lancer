@extends('layouts.dashboard')

@section('page-title')
    Categories
    {{-- @if (Auth::user()->can('categories.create')) --}}
    
    <small><a href="{{ route('categories.create') }}" class="btn btn-sm btn-outline-primary">Create</a></small>
    
@endsection

@section('content')

<x-flash-message />
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Parent ID</th>
                <th>Created At</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td><a href="{{route('categories.show',$category->id)}}">{{ $category->name }}</a></td>
                <td>{{ $category->slug }}</td>
                <td>@if ($category->parent_id != null)
                    {{ $category->parent_id  }}
                @else
                    No Parent
                @endif</td>
                <td>{{ $category->created_at }}</td>
                <td>
                   
                    <a href="{{ route('categories.edit', [$category->id]) }}" class="btn btn-sm btn-dark">Edit</a>
                    
                </td>
                <td>
                    {{-- @if (Gate::allows('categories.delete')) --}}
                   
                    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection