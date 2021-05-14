<div>
<div class="card m-2 z-depth-2 bg-primary">
    <div wire:model="value" class="card-title d-flex justify-content-center align-item-center p-1 text-center text-white ">
        MAP
    </div>
    <div class="card-body" style="position:relative;">
        <div wire:ignore class="text-center text-white" id="map">PLASE WAIT...</div>
    </div>
</div>
</div>

@push('bottomlivewirescripts')
<!-- BOTTOMLIVEWIRESCRIPTS -->
<script>
Livewire.on('refreshMap', () => {
    alert('A post was added with the id of: ');
})
</script>
@endpush