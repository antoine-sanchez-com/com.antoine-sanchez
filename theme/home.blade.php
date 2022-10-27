@extends('layouts.app', ['language' => $language, 'seo' => $seo])

@section('content')
<div class="container w-full md:max-w-3xl mx-auto pt-20 pb-12">
    <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">



        <div class="font-sans">
            <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">Antoine Sanchez</h1>
        </div>


        <h2 class="py-2 font-sans">Install</h2>
        <pre class="bg-gray-900 rounded text-white font-mono text-base p-2 md:p-4">
            <code class="break-words whitespace-pre-wrap">composer require antoine/sanchez</code>
        </pre>



    </div>
</div>
@endsection
