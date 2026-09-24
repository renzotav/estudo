<x-layout> 
<x-slot:heading>
Vagas de emprego
</x-slot:heading>

<ul>

@foreach($jobs as $job)
<li>
    <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
        <strong> {{ $job ['title'] }}:</strong> Paga {{ $job ['salary'] }} por ano.
    </a>
</li>
@endforeach

</ul>

</x-layout>
