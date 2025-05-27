<h1>{{ $samenvatting->titel }}</h1>
<p><strong>Vak:</strong> {{ $samenvatting->vak }}</p>
<p>{{ $samenvatting->inhoud }}</p>

<button>  <a href="{{ route('samenvattingen.edit', $samenvatting->id) }}">✏️ Bewerken</a></button>
<form action="{{ route('samenvattingen.destroy', $samenvatting->id) }}" method="POST" style="display:inline">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?')">🗑️ Verwijder</button>
    <button> <a href="{{ route('samenvattingen.index' , $samenvatting) }}">❌ Annuleer</a> </button>
</form>
