<form
    id="create-category-form"
    method="POST"
    action="{{ route('categories.create') }}"
    style="display: none;"
>
    @csrf

    <label for="name">Naam</label>

    <input
        type="text"
        id="name"
        name="name"
        required
    >

    <button type="submit" class="btn">
        Opslaan
    </button>

    <button type="button" id="cancel-create-category" class="btn">
        Annuleren
    </button>
</form>