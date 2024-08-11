<x-layout>
    <x-slot:heading>
        Question
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($questions as $question)
            <a href="/questions/{{$question['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $question->title }}
                </div>

                <div>
                    <strong>{{ $question['title'] }}:</strong> Pays {{ $question['answer'] }} 
                </div>
            </a>
        @endforeach
        <div>
            {{ $questions->links() }}
        </div>

    </div>
</x-layout>
