<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createModalLabel">Add Property</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form onsubmit="ajaxStoreModal(event, this, 'createModal')" action="{{ route('admin.properties.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
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
                            <x-form-input type="file" name="image"
                                label="image * (Width: 360 px, Height: 260 px)" />
                        </div>
                        {{-- Doc Start --}}
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <h5>Add Rooms or Others</h5>
                            <table class="table table-bordered">
                                {{-- <h2>Documents</h2> --}}
                                <tr>
                                    <th>Name *</th>
                                    <th>Description</th>
                                    <th width="250px">Image *</th>
                                    <th style="width: 20px;text-align:center;">
                                        <button class="btn btn-info btn-sm" style="padding: 4px 13px"><i class="fas fa-mouse"></i></button>
                                    </th>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="text" name="doc_name[]" id="doc_name" class="form-control"/>
                                    </td>
                                    <td>
                                        <textarea name="doc_description[]" id="doc_note" class="form-control"></textarea>
                                    </td>
                                    <td>
                                        <input type="file" name="doc_image[]" multiple class="form-control" style="width:250px"/>
                                    </td>
                                    <td style="width: 20px">
                                        <span class="btn btn-sm btn-success addDocRow"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    </td>
                                </tr>
                                <tbody id="showDocRow"></tbody>
                            </table>
                        </div>
                    </div>
                    {{-- Doc End --}}
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
