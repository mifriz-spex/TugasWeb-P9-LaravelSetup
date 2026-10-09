@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="bg-slate-800 p-8 rounded-xl border border-slate-700 text-center shadow-lg">
    <h1 class="text-4xl font-extrabold text-pink-500 mb-4">Halo, {{ $nama }}! 👋</h1>
    <p class="text-slate-300">Ini adalah contoh implementasi <code class="bg-slate-700 text-pink-300 px-2 py-1 rounded">Route Parameter</code> di Laravel.</p>
</div>
@endsection