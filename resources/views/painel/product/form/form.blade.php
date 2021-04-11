<div class="card-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               placeholder="Nome do produto" value="{{ $product['name'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="quantity">Quantidade</label>
        <input type="number" class="form-control" id="quantity" name="quantity"
               placeholder="Quantidade disponível" value="{{ $product['quantity'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="description">Descrição</label>
        <input type="text" class="form-control" id="description" name="description"
               placeholder="Descrição do produto" value="{{ $product['description'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="brand">Marca</label>
        <input type="text" class="form-control" id="brand" name="brand"
               placeholder="Marca do produto" value="{{ $product['brand'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="price">Preço</label>
        <input type="number" class="form-control" id="price" name="price"
               placeholder="Preço do produto" value="{{ $product['price'] ?? '' }}">
    </div>

    <div class="form-group">
        <label for="category_id">Categorias</label>
        <select id="type" name="category_id" class="form-control">
            @foreach($categories as $category)
                <option
                    value="{{ $category['id'] }}" {{ (isset($product['category_id']) && $category['id'] === $product['category_id']) ?? 'selected' }}>{{ $category['name'] }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="photo">Foto do produto</label>
        <div class="input-group">
            <input type="file" id="photo" name="photo" required>
        </div>
        @isset($product['photo'])
            <div class="row mt-3">
                <img width="200" class="img-fluid "
                     src="{{ env('APP_URL') }}/storage/{{ $product['photo'] ?? ''  }}"
                     alt="{{ $product['photo'] }}">
            </div>
        @endisset
    </div>
</div>

