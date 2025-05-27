<h1>Samenvattingen</h1>

<a href="{{ route('samenvattingen.create') }}">➕ Nieuwe Samenvatting</a>

@foreach($samenvattingen as $samenvatting)
        <h3>{{ $samenvatting->titel }} ({{ $samenvatting->vak }})</h3>
        <p>{{ $samenvatting->inhoud }}</p>
        <a href="{{ route('samenvattingen.show', $samenvatting) }}">🔍 Bekijk</a>
        <a href="{{ route('samenvattingen.edit', $samenvatting) }}">✏️ Bewerken</a>
@endforeach
