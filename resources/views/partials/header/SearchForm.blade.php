<div class="d-flex row-cols-5 align-items-center justify-content-between search_form">
    <form id="search_form" class="d-flex flex-column">
        <label for="search_input">Buscar</label>
        <input type="text" id="search_input" name="search" placeholder="Buscar por titulo">
    </form>
    <form id="status_form" class="d-flex flex-column">
        <label for="status_select">Estado</label>
        <select name="status" id="status_select">
            <option value="all">Todos los estados</option>
            <option value="pending">Pending</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </form>
    <form id="type_form" class="d-flex flex-column">
        <label for="type_select">Tipo de publicacion</label>
        <select name="type" id="type_select">
            <option value="all">Todas las publicaciones</option>
            <option value="tipo2">Tipo 2</option>
        </select>
    </form>
    <form id="checkbox_form" class="d-flex gap-2">
        <div>
            <input type="checkbox" id="recurrent_checkbox" name="recurrent">
        </div>
        <div> Solo Pubblicaciones Recurrentes </div>

</div>
