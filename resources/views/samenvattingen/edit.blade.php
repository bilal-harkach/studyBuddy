<h1>Samenvatting bewerken</h1>

<form method="POST" action="{{ route('samenvattingen.index', $samenvatting) }}">
    @csrf
    @method('POST')

    <label>Titel:</label>
    <input type="text" name="titel" value="{{ old('titel', $samenvatting->titel) }}"><br>

    <label>Vak:</label>
    <input type="text" name="vak" value="{{ old('vak', $samenvatting->vak) }}"><br>

    <label>Inhoud:</label>
    <textarea name="inhoud">{{ old('inhoud', $samenvatting->inhoud) }}</textarea><br>

    <button type="submit">✅Opslaan</button>

    <button><a href="{{ route('samenvattingen.show', $samenvatting) }}">❌Annuleren</a></button>
</form>
