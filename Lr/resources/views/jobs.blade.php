<x-layout>
    <x-slot:heading>
        About Page
    </x-slot:heading>
<ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}" class="text-blue-300 hover:underline">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </a>
        </li>
    @endforeach
</ul>
</x-layout>
