<div class="card-body">
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" id="title" name="title"
               placeholder="Insira o Título" value="{{ $post['title'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="category_id">Categorias</label>
        <select id="type" name="category_id" class="form-control">
            @foreach($categories as $category)
                <option value="{{ $category['id'] }}" {{ (isset($post['category_id']) && $category['id'] === $post['category_id']) ?? 'selected' }}>{{ $category['name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="user_id">Usuários</label>
        <select id="user_id" name="user_id" class="form-control">
            @foreach($users as $user)
                <option value="{{ $user['id'] }}" {{ (isset($post['user_id']) && $user['id'] === $post['user_id']) ?? 'selected' }}>{{ $user['name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="article">Article</label>
        <textarea class="form-control" id="article" name="article">{{ $post['article'] ?? '' }}</textarea>
    </div>
    <div class="form-group">
        <label for="photo">Foto do post</label>
        <div class="input-group">
            <input type="file" id="photo" name="photo" required>
        </div>
        @isset($post['photo'])
            <div class="row mt-3">
                <img width="200" class="img-fluid "
                     src="{{ env('APP_URL') }}/storage/{{ $post['photo'] ?? ''  }}"
                     alt="{{ $post['photo'] }}">
            </div>
        @endisset
    </div>
</div>

