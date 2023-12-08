<table class="main_table">
    <thead class="table_head">
        <tr>
            <th>Titulo</th>
            <th>Tipo Publicacion</th>
            <th>DNI OPERADOR</th>
            <th>Estado</th>
            <th>Creado</th>
            <th>Caducidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($procedures as $procedure)
            <tr>
                <td>
                    <div class="d-flex align-items-center gap-2 title">
                        <input type="checkbox">
                        <span>Titulo</span>
                    </div>
                </td>
                <td>
                    @if ($procedure->type && $procedure->type->name)
                        {{ $procedure->type->name }}
                    @else
                        Tipo non disponibile
                    @endif
                </td>
                <td>{{ $procedure->employee_dni }}</td>
                <td>
                    <p class="status">
                        <i class="fa-solid fa-circle-dot"></i> {{ $procedure->status }}
                    </p>
                </td>
                <td>{{ $procedure->created_at }}</td>
                <td>2023-12-31</td>
                <td>
                    <div class="d-flex justify-content-center gap-3">
                        <div>
                            <i class="fa-solid fa-ellipsis"></i>
                        </div>
                        <div>
                            <i class="fa-solid fa-trash"></i>
                        </div>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse

    </tbody>
</table>
