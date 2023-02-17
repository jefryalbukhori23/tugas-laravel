<div>
    <div class="content-wrapper">
            <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="card mb-4">
                <h5 class="card-header">Tambah Kelas</h5>
                <form action="" wire:submit.prevent="addMateri">
                    <div class="card-body">
                        <div>
                            <label for="name" class="form-label">Nama Kelas</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                placeholder="Class Name"
                                aria-describedby="defaultFormControlHelp"
                                wire:model="name"
                            />
                            @error('name')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <button class="btn btn-primary mt-4">Tambah Kelas</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>

