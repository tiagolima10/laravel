<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
    
    <ul class="list-group">
        <!-- Utilizar o @ pra usar o php -->
        @foreach ($series as $serie)
        <!-- Utilizar o \{} pra mascarar o echo -->
        <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>
</body>
</html>
</x-layout>