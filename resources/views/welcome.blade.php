<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    @foreach($kazi as $kazi)
    <ol>
        <a href="kazi/{{ $kazi['id'] }}">
            <br>
            <li><strong>{{ $kazi['title'] }}</strong>: Pays {{ $kazi['salary']}} per year.</li>
        </a>
    </ol>

    @endforeach

</x-layout>
