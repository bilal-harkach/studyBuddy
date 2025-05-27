<h1>Nieuwe Samenvatting</h1>


<form method="POST" action="{{ route('samenvattingen.store') }}">
    @csrf
    <div>
        <label>Titel:</label><br>
        <input type="text" name="titel" value="{{ old('titel') }}">
    </div>
    <div>
        <label>Vak:</label><br>
        <input type="text" name="vak" value="{{ old('vak') }}">
    </div>
    <div>
        <label>Inhoud:</label><br>
        <textarea name="inhoud" rows="5">{{ old('inhoud') }}</textarea>
    </div>
    <button type="submit">Opslaan</button>
</form>
