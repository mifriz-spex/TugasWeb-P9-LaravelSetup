@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="bg-slate-800 p-6 rounded-xl border border-slate-700 shadow-lg">
    <h1 class="text-3xl font-extrabold text-pink-500 mb-2">{{ $welcome_message }}</h1>
    <p class="text-slate-300 mb-6">Berikut adalah fitur utama yang diimplementasikan pada tugas ini:</p>

    <ul class="space-y-2">
        @foreach($features as $feature)
            <li class="flex items-center space-x-2 text-slate-200">
                <span class="text-emerald-400 font-bold">✓</span>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>
</div>
@endsection