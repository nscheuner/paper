@extends('canvas::backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | New Post</title>
@stop

@section('content')
    <section id="main">
        @include('canvas::backend.partials.sidebar-navigation')
        <section id="content">
            <div class="container">
                @include('canvas::backend.post.partials.form')
            </div>
        </section>
    </section>
@stop

@section('unique-js')
    @include('canvas::backend.post.partials.editor')
    @include('canvas::backend.shared.notifications.protip')
    @include('canvas::backend.shared.components.datetime-picker')
    @include('canvas::backend.shared.components.slugify')
    {!! JsValidator::formRequest('Canvas\Http\Requests\PostCreateRequest', '#postCreate') !!}
@stop
