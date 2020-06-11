@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>All Resource</h2>
                        <div class="ml-auto">
                            <a href="{{ url('resouce') }}" class="btn btn-outline-secondary">Create Resouce</a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-info">
                            {{ session('success') }}
                        </div>
                    @endif
                    @foreach ($resouces as $resouce)
                    <div class="media">
                        <div class="media-body">
                            <div class="d-flex align-items-center">
                                <h3 class="mt-0"><a href="{{ $resouce->link }}">{{ $resouce->title }}</a></h3>
                                <div class="ml-auto">
                                    <div class="row">

                                        {{--  <div class="pr-1">
                                            @can ('update-question',$question)
                                                <a href="{{ route('questions.edit',$question->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
                                            @endcan
                                        </div>
                                        <div>
                                            @can ('delete-question',$question)
                                                <form class="form-delete" action="{{ route('questions.destroy',$question->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure to delete ?')">Delete</button>
                                                </form>
                                            @endcan
                                        </div>  --}}
                                    </div>
                                </div>
                            </div>
                            {{ $resouce->description}}
                        </div>
                    </div><hr>
                    @endforeach
                    <div class="mx-auto">
                        {{ $resouces->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

