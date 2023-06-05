<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form wire:submit.prevent="saveData">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" wire:model="name" class="form-control">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Description address</label>
    <input type="text" wire:model="description" class="form-control">
    @error('description') <span class="text-danger" >{{ $message }}</span> @enderror
    </div>
 
    
    
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>