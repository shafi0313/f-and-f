<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">Edit Property</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form onsubmit="ajaxStoreModal(event, this, 'editModal')"
                action="{{ route('admin.properties.update', $property->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="modal-body">
                    @bind($property)
                        <div class="row gy-2">
                            <div class="col-md-6">
                                <x-form-input name="name" label="Name *" />
                            </div>
                            <div class="col-md-6">
                                <x-form-input type="number" name="no_of_rooms" label="No of Rooms" />
                            </div>
                            <div class="col-md-6">
                                <x-form-input name="city" label="city" />
                            </div>
                            <div class="col-md-6">
                                <x-form-input name="state" label="state" />
                            </div>
                            <div class="col-md-6">
                                <x-form-input name="address" label="address" />
                            </div>

                            <div class="col-md-6">
                                <img src="{{ imagePath('property', $property->image) }}" alt="" width="200px">
                            </div>
                            <div class="col-md-6">
                                <x-form-input type="file" name="image" label="image (Width: 360 px, Height: 260 px)" />
                            </div>
                            <div class="col-md-12">
                                <x-form-textarea name="description" label="description" />
                            </div>
                            <div class="col-md-4 form-check form-switch">
                                <label for="is_active" class="form-label status_label d-block required">Status </label>
                                <input class="form-check-input" type="checkbox" id="is_active_input" value="1"
                                    name="is_active" checked>
                                <label class="form-check-label" for="is_active_input" id="is_active_label">Active</label>
                            </div>
                        </div>
                    @endbind
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
