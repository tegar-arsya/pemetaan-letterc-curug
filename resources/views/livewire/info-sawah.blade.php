<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">{{ __('Informasi Tanah') }}</div>

                <div class="card-body">
                    {{-- add button --}}
                    <div class="row mb-3">
                        <div class="col-md-12 text-end">
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
                                <i class="bi bi-plus-circle"></i> Tambah
                            </a>
                        </div>
                    </div>
                    {{-- end add button --}}

                    {{-- perpage --}}
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <select wire:model="perPage" class="form-select">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" wire:model="search" class="form-control" placeholder="Search">
                        </div>
                    </div>

                    {{-- table --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis Tanah</th>
                                            <th>Ketinggian Tanah</th>
                                            <th>Kelembaban Tanah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($infotanahs as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->jenis_tanah }}</td>
                                            <td>{{ $item->ketinggian }} mdpl</td>
                                            <td>{{ $item->kelembaban }} %</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" wire:click="tanahId({{ $item->id }})">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" wire:click="tanahId({{ $item->id }})">
                                                    <i class="bi bi-trash"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- addModal --}}
    <div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="store">
                        <div class="mb-3">
                            <label for="jenis_tanah" class="form-label">{{ __('Jenis Tanah') }}</label>
                            <input id="jenis_tanah" type="text" class="form-control @error('jenis_tanah') is-invalid @enderror" wire:model="jenis_tanah" required autofocus>
                            @error('jenis_tanah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ketinggian_tanah" class="form-label">{{ __('Ketinggian Tanah') }}</label>
                            <input id="ketinggian_tanah" type="text" class="form-control @error('ketinggian_tanah') is-invalid @enderror" wire:model="ketinggian_tanah" required>
                            @error('ketinggian_tanah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kelembaban_tanah" class="form-label">{{ __('Kelembaban Tanah') }}</label>
                            <input id="kelembaban_tanah" type="text" class="form-control @error('kelembaban_tanah') is-invalid @enderror" wire:model="kelembaban_tanah" required>
                            @error('kelembaban_tanah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end addModal --}}

    {{-- editModal --}}
    <div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="update">
                        <div class="mb-3">
                            <label for="jenis_tanah" class="form-label">{{ __('Jenis Tanah') }}</label>
                            <input id="jenis_tanah" type="text" class="form-control @error('jenis_tanah') is-invalid @enderror" wire:model="jenis_tanah" required autofocus>
                            @error('jenis_tanah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ketinggian_tanah" class="form-label">{{ __('Ketinggian Tanah') }}</label>
                            <input id="ketinggian_tanah" type="text" class="form-control @error('ketinggian_tanah') is-invalid @enderror" wire:model="ketinggian_tanah" required>
                            @error('ketinggian_tanah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kelembaban_tanah" class="form-label">{{ __('Kelembaban Tanah') }}</label>
                            <input id="kelembaban_tanah" type="text" class="form-control @error('kelembaban_tanah') is-invalid @enderror" wire:model="kelembaban_tanah" required>
                            @error('kelembaban_tanah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end editModal --}}

    {{-- deleteModal --}}
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" wire:click="deleteData" data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end deleteModal --}}
</div>
