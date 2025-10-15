<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    @foreach ($jobs as $job)
        <li><a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}</a></li>
    @endforeach




</x-layout>
