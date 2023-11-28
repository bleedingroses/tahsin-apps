<div class="row justify-content-center">
    <form wire:submit.prevent="submit">
        @csrf
        @if ($currentPage === 1)
            <div class="card">
                <label for="todayDate" class="form-label text-center"><h5>Jadwal Kajian</h5></label>
                <input disabled wire:model.lazy="jadwal" type="text" class="form-control datepicker" id="todayDate" value=""><br>
                <label for="grup_id" class="form-label text-center"><h5>Grup</h5></label>
                <select id="grup_id" class="form-control" wire:model.lazy="grup_id" name="grup_id">
                    <option value="">Pilih Grup</option>
                        @foreach ($grup as $grp)
                            <option value="{{ $grp->id }}">{{ $grp->nama }}</option>                                            
                        @endforeach
                    </select><br>
                <label for="materi" class="form-label text-center"><h5>Materi</h5></label>
                <input type="text" class="form-control" id="materi" wire:model.lazy="materi">
            </div>
        @elseif ($currentPage === 2)
            <div class="card">
                <label class="form-label text-center"><h5>Santri</h5></label>
                @foreach ($santri as $absensi)
                    <input class="form-check-input" type="checkbox" name="absensi[]" id="absensi{{ $loop->iteration }}" wire:model.defer="absensi" value="{{ $absensi->nama }}"> 
                    <label for="absensi{{ $loop->iteration }}">{{ $absensi->nama }}</label>
                @endforeach
            </div><br>
        @endif
        <div class="flex items-center justify-between">
            @if ($currentPage === 1)
            <div></div>
            @else
                <button wire:click="goToPreviousPage" type="button" class="inline-flex justify-center btn btn-outline-info">Kembali</button>
            @endif
            @if ($currentPage === count($pages))
                <button type="submit" class="inline-flex justify-center btn btn-info">Submit</button>
            @else
                <button wire:click="goToNextPage" type="button" class="inline-flex justify-center btn btn-info">Lanjut</button><br><br>
            @endif
        </div>
    </form>
</div>   