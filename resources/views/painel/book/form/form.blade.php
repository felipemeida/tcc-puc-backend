<div class="card-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               placeholder="Nome do livro" value="{{ $book['name'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="author">Autor</label>
        <input type="text" class="form-control" id="author" name="author"
               placeholder="Autor do livro" value="{{ $book['author'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="category_id">Categorias</label>
        <select id="type" name="category_id" class="form-control">
            @foreach($categories as $category)
                <option value="{{ $category['id'] }}" {{ (isset($book['category_id']) && $category['id'] === $book['category_id']) ?? 'selected' }}>{{ $category['name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="photo">Foto do livro</label>
        <div class="input-group">
            <input type="file" id="photo" name="photo" required>
        </div>
        @isset($book['photo'])
            <div class="row mt-3">
                <img width="200" class="img-fluid "
                     src="{{ env('APP_URL') }}/storage/{{ $book['photo'] ?? ''  }}"
                     alt="{{ $book['photo'] }}">
            </div>
        @endisset
    </div>
</div>

