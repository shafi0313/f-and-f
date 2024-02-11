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

                            <div class="col-md-3">
                                <img src="{{ imagePath('property', $property->image) }}" alt="" width="80px">
                            </div>
                            <div class="col-md-31">
                                <x-form-input type="file" name="image" label="image (Width: 360 px, Height: 260 px)" />
                            </div>
                            <div class="col-md-12">
                                <x-form-textarea name="description" label="description" />
                            </div>
                            {{-- Doc Start --}}
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <h5>Add Rooms or Others</h5>
                                    <table class="table table-bordered">
                                        {{-- <h2>Documents</h2> --}}
                                        <thead>
                                            <tr>
                                                <th>Name *</th>
                                                <th>Description</th>
                                                <th width="250px">Image *</th>
                                                <th style="width: 20px;text-align:center;">
                                                    <button class="btn btn-info btn-sm" style="padding: 4px 13px"><i
                                                            class="fas fa-mouse"></i></button>
                                                </th>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" name="doc_name[]" id="doc_name"
                                                        class="form-control" />
                                                </td>
                                                <td>
                                                    <textarea name="doc_description[]" id="doc_note" class="form-control"></textarea>
                                                </td>
                                                <td>
                                                    <input type="file" name="doc_image[]" multiple class="form-control"
                                                        style="width:250px" />
                                                </td>
                                                <td style="width: 20px">
                                                    <span class="btn btn-sm btn-success editDocRow"><i class="fa fa-plus"
                                                            aria-hidden="true"></i></span>
                                                </td>
                                            </tr>
                                        </thead>


                                        <tbody id="editShowDocRow"></tbody>
                                        @foreach ($property->rooms as $room)
                                            <tr>
                                                <td>
                                                    <input type="text" name="doc_name[]" value="{{ $room->name }}"
                                                        id="doc_name" class="form-control" />
                                                </td>
                                                <td>
                                                    <textarea name="doc_description[]" id="doc_note" class="form-control">{{ $room->description }}</textarea>
                                                </td>
                                                <td>
                                                    <img src="{{ imagePath('property', $room->image) }}" alt=""
                                                        width="60px">
                                                    <input type="file" name="doc_image[]" multiple class="form-control"
                                                        style="width:250px" />
                                                </td>
                                                <td style="width: 20px">
                                                    <span class="btn btn-sm btn-danger roomDelete"
                                                        data-id="{{ $room->id }}">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            {{-- Doc End --}}
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
<script>
    $(document).ready(function() {
        var ei = 1;

        // Function to add a new document row
        $('.editDocRow').click(function() {
            ei++;
            let html = `
                <tr id="editRemove_${ei}">
                    <td>
                        <input type="text" name="doc_name[]" class="form-control"/>
                    </td>
                    <td>
                        <textarea name="doc_description[]" class="form-control"></textarea>
                    </td>
                    <td>
                        <input type="file" name="doc_image[]" multiple class="form-control" style="width:250px"/>
                    </td>
                    <td style="width: 20px">
                        <span class="btn btn-sm btn-danger" onclick="editRemove(${ei})"><i class="fa fa-times" aria-hidden="true"></i></span>
                    </td>
                </tr>`;
            $('#editShowDocRow').append(html);
        });

        // Function to remove a document row
        window.editRemove = function(id) {
            $('#editRemove_' + id).remove();
        };

        // AJAX call to delete a room
        $(document).on('click', '.roomDelete', function() {
            let id = $(this).data('id');
            let row = $(this).closest('tr');
            $.ajax({
                url: "{{ route('admin.rooms.destroy') }}",
                type: 'get',
                data: {
                    id: id
                },
                success: function(data) {
                    row.remove();
                    toast('success', 'Room deleted successfully');
                }
            });
        });
    });
</script>
