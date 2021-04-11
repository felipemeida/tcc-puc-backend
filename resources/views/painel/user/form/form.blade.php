<div class="card-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               placeholder="Nome do usuário" value="{{ $user['name'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" id="email" name="email"
               placeholder="E-mail do usuário" value="{{ $user['email'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" name="password"
               placeholder="Senha do usuário">
    </div>
    <div class="form-group">
        <label for="summary">Resumo sobre o usuário</label>
        <input type="text" class="form-control" id="summary" name="summary"
               placeholder="Resumo sobre o usuário" value="{{ $user['summary'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="facebook">Facebook</label>
        <input type="text" class="form-control" id="facebook" name="facebook"
               placeholder="Facebook do usuário" value="{{ $user['facebook'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="instagram">Instagram</label>
        <input type="text" class="form-control" id="instagram" name="instagram"
               placeholder="Instagram do usuário" value="{{ $user['instagram'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="linkedin">Linkedin</label>
        <input type="text" class="form-control" id="linkedin" name="linkedin"
               placeholder="Linkedin do usuário" value="{{ $user['linkedin'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="twitter">Twitter</label>
        <input type="text" class="form-control" id="twitter" name="twitter"
               placeholder="Twitter do usuário" value="{{ $user['twitter'] ?? '' }}">
    </div>
    <div class="form-group">
        <label for="photo">Foto do usuário</label>
        <div class="input-group">
            <input type="file" id="photo" name="photo" required>
        </div>
        @isset($user['photo'])
            <div class="row mt-3">
                <img width="200" class="img-fluid "
                     src="{{ env('APP_URL') }}/storage/{{ $user['photo'] ?? ''  }}"
                     alt="{{ $user['photo'] }}">
            </div>
        @endisset
    </div>
</div>

