<h1>Nova Tarefa</h1>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Título" required>
    <textarea name="description" placeholder="Descrição"></textarea>
    <button type="submit">Salvar</button>
</form>
<a href="{{ route('tasks.index') }}">Voltar</a>
