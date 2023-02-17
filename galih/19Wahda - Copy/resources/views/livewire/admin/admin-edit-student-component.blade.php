<div>
    <div class="content-wrapper">
            <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="card mb-4">
            @if(Session::has('message'))
                <div class="alert alert-danger mt-3" role="alert">{{Session::get('message')}}</div>
            @endif
                <h5 class="card-header">Edit Murid</h5>
                <form action="" wire:submit.prevent="addStudent">
                    <div class="card-body">
                        <div>
                            <label for="name" class="form-label">Nama</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                placeholder="Name"
                                aria-describedby="defaultFormControlHelp"
                                wire:model="name"
                            />
                            @error('name')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="phone" class="form-label">Nomor Telfon</label>
                            <input
                                type="text"
                                class="form-control"
                                id="phone"
                                placeholder="phone"
                                aria-describedby="defaultFormControlHelp"
                                wire:model="phone"
                            />
                            @error('phone')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="img" class="form-label">Foto Murid</label>
                            <input
                                type="file"
                                class="form-control"
                                id="img"
                                placeholder="Image"
                                aria-describedby="defaultFormControlHelp"
                                wire:model="nwimg"
                            />
                            @if($nwimg)
                                <img src="{{$nwimg->temporaryUrl()}}" width=120>
                            @else
                                <img src="{{asset('assets/Student')}}/{{$img}}" width=120>
                            @endif
                            @error('nwimg')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="kelas_id" class="form-label mt-4">Kelas</label>
                            <select name="kelas_id" id="kelas_id" wire:model="kelas_id" class="form-control">
                                <option value="">Select Kelas</option>
                                @foreach($kelas as $m)
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                @endforeach
                            </select>
                            @error('kelas_id')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="subkelas_id" class="form-label mt-4">Sub Kelas</label>
                            <select name="subkelas_id" id="subkelas_id" wire:model="subkelas_id" class="form-control">
                                <option value="">Select Sub Kelas</option>
                                @foreach($subkelas as $m)
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                @endforeach
                            </select>
                            @error('subkelas_id')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <button class="btn btn-primary mt-4">Edit Murid</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>


