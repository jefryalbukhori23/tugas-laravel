<div>
    <div class="content-wrapper">
            <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="card mb-4">
                <h5 class="card-header">Tambah Bab</h5>
                <form action="" wire:submit.prevent="addMateri">
                    <div class="card-body">
                        <div>
                            <label for="name" class="form-label">Nama</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                placeholder="Materi Name"
                                aria-describedby="defaultFormControlHelp"
                                wire:model="name"
                            />
                            @error('name')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="desc" class="form-label mt-4">Deskripsi</label>
                            <textarea 
                                name="desc" 
                                id="desc"
                                class="form-control"
                                placeholder="Materi Description"
                                wire:model="desc">
                            </textarea>
                            @error('desc')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="img" class="form-label mt-4">File Bab</label>
                            <input
                                type="file"
                                class="form-control"
                                id="img"
                                placeholder="Materi Name"
                                aria-describedby="defaultFormControlHelp"
                                wire:model="file"
                            />
                            @error('file')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="materi_id" class="form-label mt-4">Materi</label>
                            <select name="materi_id" id="materi_id" wire:model="materi_id" class="form-control">
                                <option value="">Select Materi</option>
                                @foreach($materi as $m)
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                @endforeach
                            </select>
                            @error('materi_id')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <button class="btn btn-primary mt-4">Tambah Bab</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>

