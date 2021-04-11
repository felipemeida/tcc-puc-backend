<div class="card-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               placeholder="Insira o Objetivo" value="{{ $category['name'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="color">Cor</label>
        <input type="text" class="form-control" id="color" name="color"
               placeholder="Exemplo: #fff" value="{{ $category['color'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="type">Tipo</label>
        <select id="type" name="type" class="form-control">
            @foreach($categoryTypes as $key => $type)
                <option value="{{ $key }}" {{ (isset($category['type']) && $key === $category['type']) ?? 'selected' }}>{{ $type }}</option>
            @endforeach
        </select>
    </div>
</div>

