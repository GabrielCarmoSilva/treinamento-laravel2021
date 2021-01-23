<div class="row">
    <div class="col-lg-4 col-md-12 form-group">
        <label for="name" class="required">Nome </label>
        <input name="name" id="name" required value="{{ old('name', $course->name) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-4 col-md-12 form-group">
        <label for="hours" class="required">Horas </label>
        <input name="hours" required id="hours" value="{{ old('hours', $course->hours) }}" type="number" step="1" class="form-control">
    </div>
    <div class="col-lg-4 col-md-12 form-group">
        <label for="category" class="required">Categoria </label>
        @if(!Route::is('courses.show'))
            <select required name="category_id" id="category" value="{{ old('category_id', $course->category) }}" class="form-control">
                <option></option>
                @foreach($categories as $category)
                    @if(Route::is('courses.edit'))
                        <option {{ old('category_id', $course->category->id) == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        @else
            <p>{{ $course->category->name }}</p>
        @endif
    </div>
</div>