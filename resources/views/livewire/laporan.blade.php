<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Laporan</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-4">
                            <label for="tahun" class="form-label fw-bold">Tahun</label>
                            <select id="tahun" class="form-select" wire:model="tahun">
                                <option value="">Pilih Tahun</option>
                                @for ($i = 2018; $i < 2026; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            @error('tahun') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="kecamatan" class="form-label fw-bold">Kecamatan</label>
                            <select id="kecamatan" class="form-select" wire:model="kecamatan">
                                <option value="">Pilih Kecamatan</option>
                                @foreach ($kecamatans as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kecamatan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="desa" class="form-label fw-bold">Desa</label>
                            <select id="desa" class="form-select" wire:model="desa">
                                <option value="">Pilih Desa</option>
                                @foreach ($desas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_desa }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-end">
                            <button class="btn btn-primary" wire:click.prevent="cetakPdf()">
                                <i class="fas fa-print me-2"></i>Cetak
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>