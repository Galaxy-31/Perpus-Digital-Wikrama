<div class="dropdown">
    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuAction" data-bs-toggle="dropdown"
        aria-expanded="false">
        Action
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuAction">
        <li><a class="dropdown-item edit-btn" href="#" data-id="{{ $kategori->id }}">Edit</a></li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item delete-btn" data-id="{{ $kategori->id }}" href="#">Delete</a></li>
    </ul>
</div>