@extends('layouts.app')

@section('title','投稿一覧')

@section('content')
<x-alert type="warning">
    これは警告メッセージ。
</x-alert>


<h1 class="text-center">index2のタイトルです</h1>
<h1 class="text-center text-4xl font-bold text-blue-600 bg-yellow-200 p-4">index2のタイトルです</h1>

@foreach ($posts as $post)
<div>
    <h2>タイトル名:{{$post->title}}</h2>
    <p>本文:{{$post->body}}</p>
</div>
@endforeach
@endsection
