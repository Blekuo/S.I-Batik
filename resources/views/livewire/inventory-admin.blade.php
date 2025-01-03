<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <style>
        table tr th,
        table tr td {
            background: var(--card-color) !important;
        }

    </style>
    <div class="row mb-3">
        <div class="col">
            <button class="btn btn-primary" wire:click='See'>
                <i class="fas fa-plus"></i>
                Tambah Data Barang
            </button>

            <div class="modal modal-lg @if ($this->visible) show d-block @endif" tabindex="-1" style="margin-top: 7%;margin-left: -2%">
                <div class="card modal-dialog p-4" style="background: url('/img/box.png');background-repeat: no-repeat;background-size: cover;">
                    <div class="modal-content" style="background-color: #663300;"
                        >
                        <div class="row p-3">
                            <div class="col">
                                <h5 class="text-white">Tambah/Edit Data Barang</h5>
                            </div>
                            <div class="col">
                                <div class="float-sm-end">
                                    <button type="button" class="btn-close" wire:click='unSee'
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form wire:submit.prevents=''>
                                <div class="mb-3">
                                    <label for="" class="form-label text-white">Nama Barang</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                        placeholder="" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label text-white">Stock Barang</label>
                                    <input type="number" class="form-control" name="" id="" aria-describedby="helpId"
                                        placeholder="" />
                                </div>

                        </div>
                        <div class="row p-3">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                            <div class="col">
                                <button type="button" class="btn btn-secondary float-sm-end"
                                    wire:click='unSee'>Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <button class="btn btn-light float-sm-end" wire:click='$refresh' onclick="syncnimation()">
                <i class="fas fa-sync" id="synca"></i>
            </button>
            <script>
                function syncnimation() {
                    $("i#synca").addClass("fa-spin");
                }

            </script>
        </div>
    </div>
    <div class="mb-3">
        <input type="search" class="form-control" wire:model.live.debounce.150ms='search'>
    </div>
    <div class="table-responsive-lg">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $d)
                <tr class="">
                    <td scope="row">{{ $loop->index }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->stock }}</td>
                    <td>
                        <button class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                @empty

                @endforelse
                <tr>
                    <td>Jumlah: @if ($this->countTotal != 0)
                        {{ $this->countTotal }}
                    @else
                        Kosong.
                    @endif</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
