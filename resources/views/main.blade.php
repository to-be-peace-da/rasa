<x-layout>
    <div class="container">
        <div class="main">
            <x-message/>
            <form action="{{ route('survey.begun') }}" method="post">
                @csrf
                <button type="submit">Начать опрос</button>
            </form>
        </div>
    </div>
</x-layout>
