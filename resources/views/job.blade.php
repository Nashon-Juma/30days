<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    @foreach($jobs as $job)
    <ol>
        <a href="job/{{ $job['id'] }}">
            <br>
            <li><strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary']}} per year.</li>
        </a>
    </ol>

    @endforeach
</x-layout>
