<div class="row">
    <div class="col-lg-4 col-md-12 form-group">
        <label for="name" class="required">Nome </label>
        <input name="name" id="name" required value="{{ old('name', $person->name) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-4 col-md-12 form-group">
        <label for="age" class="required">Idade </label>
        <input name="age" required id="age" value="{{ old('age', $person->age) }}" type="number" step="1" class="form-control">
    </div>
    <div class="col-lg-4 col-md-12 form-group">
        <label for="profession" class="required">Profissão </label>
        <input name="profession" required id="profession" value="{{ old('profession', $person->profession) }}" type="text" class="form-control">
    </div>
</div>