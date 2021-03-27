{{ $slot }}

<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="inputName">Nome</label>
        <input type="text" name="nome" id="inputName" class="form-control">
    </div>
    <div class="form-group">
        <label for="inputTelefone">Telefone</label>
        <input type="text" name="telefone" id="inputTelefone" class="form-control">
    </div>
    <div class="form-group">
        <label for="inputEmail">E-Mail</label>
        <input type="email" name="email" id="inputEmail" class="form-control">
    </div>
    <div class="form-group">
        <label for="inputSubject">Motivo</label>
        {{-- <input name="motivo_contato" type="text" id="inputSubject" class="form-control"> --}}
        <select name="motivo_contato" class="form-control select2" id="inputSubject">
            <option value="">Qual o motivo do contato?</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
        </select>
    </div>
    <div class="form-group">
        <label for="inputMessage">Mensagem</label>
        <textarea id="inputMessage" name="mensagem" class="form-control" rows="4"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-{{ isset($color_button) ? $color_button : 'secondary' }}"
            value="Enviar mensagem">
    </div>
</form>
