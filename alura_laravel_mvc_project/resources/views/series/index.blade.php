<x-layout title="Series">
    <a href="/series/criar"> Adicionar</a>
    <ul>
        @foreach ($series as $serie)
            <li>  {{$serie -> nome}} </li>
        @endforeach
    </ul>
</x-layout>
