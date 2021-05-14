<div class="modal fade" wire:ignore.self id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="text-white modal-title" id="exampleModalLabel">TEMPAT IBADAH</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div wire:offline class="text-danger text-center"> 
          Anda sedang offline
        </div>
        <div class="md-form">
            <input type="text" 
                wire:model.lazy="nama"
                id="nama_tempat_ibadah" 
                class="form-control"
                placeholder="Nama Tempat Ibadah"
                >
            <label for="inputIconEx1" class="active">Nama<span wire:loading wire:target="nama" class="spinner-border spinner-border-sm ml-3" role="status" aria-hidden="true"></span></label>
            @error('nama')
              <small class="text-danger">{{ $errors->first('nama') }}</small>
            @enderror
        </div>
        
        <label>Agama<span wire:loading wire:target="selected_agama" class="spinner-border spinner-border-sm ml-3" role="status" aria-hidden="true"></label>
        <select class="custom-select custom-select-sm" wire:model.lazy="selected_agama">
          @foreach($agamas as $index => $agama)
              <option>{{ $agama->agama }}</option>
          @endforeach
        </select>
        @error('selected_agama')
              <small class="text-danger">{{ $errors->first('selected_agama') }}</small>
            @enderror
        <div class="md-form">
            <input type="text" 
            wire:model.lazy="longtitude" 
            id="lat" 
            class="form-control disabled" 
            placeholder="Masukkan lantitude"
            >
            <label for="inputIconEx1" class="active">Longtitude</label>
            @error('longtitude')
              <small class="text-danger">{{ $errors->first('longtitude') }}</small>
            @enderror
        </div>

        <div class="md-form">
            <input type="text" 
            wire:model.lazy="latitude" 
            id="lng" 
            class="form-control disabled" 
            placeholder="Masukkan latitude"
            >
            <label for="inputIconEx1" class="active">Latitude</label>
            @error('latitude')
              <small class="text-danger">{{ $errors->first('latitude') }}</small>
            @enderror
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary m-2 z-depth-2" data-dismiss="modal" wire:click="clearProperty">CANCEL</button>
        <button type="button" class="btn btn-primary m-2 z-depth-2" wire:click="saveTempatIbadah" >Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL -->
@push('bottomlivewirescripts')
<!-- BOTTOMLIVEWIRESCRIPTS -->
<script>
  document.addEventListener('livewire:load', function () {
    formCreateTempatIbadah = @this;
  })
</script>
@endpush
