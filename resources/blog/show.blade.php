@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            {{ $post->title }}
                        </h2>
                    </div>
                    <p>
                        {{ $post->body }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection