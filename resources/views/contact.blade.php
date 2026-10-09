@extends('layouts.app')

@section('title', $contacts['title'])

@section('content')
<div class="bg-slate-800 p-6 rounded-xl border border-slate-700 shadow-lg">
    <h1 class="text-2xl font-bold text-pink-500 mb-4">{{ $contacts['title'] }}</h1>
    
    <div class="space-y-3 text-slate-300">
        <p><strong class="text-white">Email:</strong> {{ $contacts['email'] }}</p>
        <p><strong class="text-white">GitHub:</strong> <a href="{{ $contacts['github'] }}" class="text-pink-400 underline">{{ $contacts['github'] }}</a></p>
        <p><strong class="text-white">Lokasi:</strong> {{ $contacts['lokasi'] }}</p>
    </div>
</div>
@endsection