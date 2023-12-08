<table class="main_table">
    <thead class="table_head">
        <tr>
            <th>Titulo</th>
            <th>Tipo Publicacion</th>
            <th>DNI OPERADOR</th>
            <th>Estado</th>
            <th class="active_text">Creado <i class="fa-solid fa-angle-down"></i></th>
            <th>Caducidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($procedures as $procedure)
            <tr class="position-relative">
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
                    <p
                        class="status @if ($procedure->status == 'pending') deleted
                                       @elseif($procedure->status == 'done') active
                                       @elseif($procedure->status == 'in_progress') scheduled @endif">
                        <i class="fa-solid fa-circle-dot"></i> {{ $procedure->status }}
                    </p>
                </td>
                <td>{{ $procedure->created_at }}</td>
                <td>2023-12-31</td>
                <td>
                    <div class="d-flex justify-content-center gap-3">
                        <div class="operation_trigger" onclick="toggleOperations(this)">
                            <i class="fa-solid fa-ellipsis"></i>
                        </div>
                        <div>
                            <i class="fa-solid fa-trash"></i>
                        </div>
                    </div>
                    <div class="operations">
                        <ul class="list-unstyled">
                            <li>Ver detalles</li>
                            <li>Copiar enlace web</li>
                            <li>Editar</li>
                            <li>Marcar como destaco</li>
                            <li>...</li>
                        </ul>
                    </div>
                </td>

            </tr>

        @empty
        @endforelse

    </tbody>
</table>

<script>
    function toggleOperations(trigger) {
        //take the specific <tr>
        let parentRow = trigger.parentNode.parentNode;
        let allOperations = document.querySelectorAll('.operations');

        //hide all the 'operation' elements that are not on the <tr>
        allOperations.forEach(function(operation) {
            if (operation !== parentRow.querySelector('.operations')) {
                operation.style.display = 'none';
            }
        });

        //the effective toggle
        let currentOperation = parentRow.querySelector('.operations');
        currentOperation.style.display = currentOperation.style.display === 'none' ? 'block' : 'none';
    }
</script>
