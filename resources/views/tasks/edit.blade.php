<h1>Editar Tarefa</h1>
<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf @method('PUT')
    <input type="text" name="title" value="{{ $task->title }}" required>
    <textarea name="description">{{ $task->description }}</textarea>
    <select name="status">
        <option value="pendente" @if($task->status=='pendente') selected @endif>Pendente</option>
        <option value="em_andamento" @if($task->status=='em_andamento') selected @endif>Em andamento</option>
        <option value="concluida" @if($task->status=='concluida') selected @endif>Concluída</option>
    </select>
    <button type="submit">Salvar</button>
</form>
<a href="{{ route('tasks.index') }}">Voltar</a>
