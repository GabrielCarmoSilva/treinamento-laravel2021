<div class="row">
    <div class="col-lg-6 col-md-12 form-group">
        <label for="name" class="required">Nome </label>
        <input name="name" id="name" required value="{{ old('name', $person->name) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="age" class="required">Idade </label>
        <input name="age" required id="age" value="{{ old('age', $person->age) }}" type="number" step="1" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="profession" class="required">Profissão </label>
        <input name="profession" required id="profession" value="{{ old('profession', $person->profession) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="courses" class="required">Cursos </label>
        @if(!Route::is('people.show'))
            <select multiple name="courses[]" required id="courses" value="{{ json_encode(old('courses', $person->courses->pluck('id'))) }}" class="form-control">
                @foreach($courses as $course)
                    <option {{ collect(old('courses', $person->courses->pluck('id')))->contains($course->id) ? 'selected' : '' }}
                    value="{{ $course->id }}">
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
            @error('courses')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        @else
            @foreach($person->courses as $course)
                <p>{{ $course->name }}</p>
            @endforeach
        @endif
    </div>
</div>
