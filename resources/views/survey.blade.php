<x-layout>
    <div class="container">
        <div class="survey">
            <h1>ID: {{ $survey->link }}</h1>
            <h2>Оцените компанию по 10 бальной шкале</h2>
            <div class="body">
                @for ($i = 1; $i <= 10; $i++)
                    <form action="{{ route('survey.vote', $survey) }}" method="post">
                        @csrf
                        <input name="score" type="number" hidden value="{{ $i }}">
                        <button type="submit">{{ $i }}</button>
                    </form>
                @endfor
            </div>
        </div>
    </div>
</x-layout>
