{{--@extends('statamic::layout')--}}
{{--@section('title', __('Export entries'))--}}

{{--@section('content')--}}
{{--@stop--}}


<div class="card p-0 content">
    <div class="py-6 px-8 border-b">
        <h2>Robots.txt</h2>
        <p>Change content of robots.txt.</p>
    </div>

    <div class="flex flex-col p-4">

        <div>
            👋 I'm the Robots widget!
        </div>

        <div>
            <textarea class="w-full" rows="3">
                {{ $robotsTxt  }}
            </textarea>
        </div>

        <div>
            <button type="button" class="btn btn-secondary">Refresh</button>
            <button type="button" class="btn btn-primary">Save</button>
        </div>




{{--        <form method="POST" action="{{ cp_route('utilities.robots.test') }}">--}}
        <form method="POST" action="">
            <button type="submit" class="btn-primary mt-2">{{ __('Test') }}</button>
        </form>

    </div>

</div>
