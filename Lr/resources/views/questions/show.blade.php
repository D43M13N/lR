<x-layout>
    <x-slot:heading>
        Question
    </x-slot:heading>

    <h1 class="font-bold text-xl">{{ $question->title }}</h1>

    <p>
        My Resolve: {{ $question->answer }}.
    </p>

    <p>
        My Resolve: {{ $question->uitleg }}.
    </p>
    <p class="mt-6">
        <x-button href="/questions/{{ $question->id }}/edit">Edit Question</x-button>
    </p>

</x-layout>
