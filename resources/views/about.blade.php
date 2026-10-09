@extends('layouts.app')

@section('title', $studentInfo['title'])

@section('content')
<div class="bg-slate-800 p-6 rounded-xl border border-slate-700 shadow-lg">
    <h1 class="text-2xl font-bold text-pink-500 mb-4">{{ $studentInfo['title'] }}</h1>
    
    <div class="space-y-2 text-slate-300 mb-6">
        <p><strong class="text-white">Nama:</strong> {{ $studentInfo['nama'] }}</p>
        <p><strong class="text-white">NIM:</strong> {{ $studentInfo['nim'] }}</p>
        <p><strong class="text-white">Prodi:</strong> {{ $studentInfo['prodi'] }}</p>
        <p><strong class="text-white">Kampus:</strong> {{ $studentInfo['kampus'] }}</p>
    </div>

    <h2 class="text-lg font-semibold text-white mb-2">Tech Stack / Skills:</h2>
    <div class="flex flex-wrap gap-2">
        @foreach($studentInfo['skills'] as $skill)
            <span class="bg-slate-700 text-pink-300 text-sm px-3 py-1 rounded-full font-medium">{{ $skill }}</span>
        @endforeach
    </div>
</div>
@endsection