@extends('admin.layout.app')
@section('content')
    <!-- users list start -->
    <section class="app-user-list">
        <!-- users filter start -->
        <div class="card">
            <h5 class="card-header">Users</h5>
            <div class="d-flex justify-content-between align-items-center mx-50 row pt-0 pb-2">
                <a href="{{ route('users.create') }}"><button type="reset"
                        class="btn btn-primary mr-1 waves-effect waves-float waves-light">Add New User</button></a>
            </div>
        </div>
        <!-- users filter end -->
        <!-- list section start -->
        <div class="card">
        <div class="card-header border-bottom">
                                    <h4 class="card-title">Advanced Search</h4>
                                </div>
                                <!--Search Form -->
                                <div class="card-body mt-2">
                                    <form class="dt_adv_search" method="POST">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-row mb-1">
                                                    <div class="col-lg-4">
                                                        <label>Name:</label>
                                                        <input type="text" class="form-control dt-input dt-full-name" data-column="1" placeholder="Alaric Beslier" data-column-index="0" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Email:</label>
                                                        <input type="text" class="form-control dt-input" data-column="2" placeholder="demo@example.com" data-column-index="1" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Post:</label>
                                                        <input type="text" class="form-control dt-input" data-column="3" placeholder="Web designer" data-column-index="2" />
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-lg-4">
                                                        <label>City:</label>
                                                        <input type="text" class="form-control dt-input" data-column="4" placeholder="Balky" data-column-index="3" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Date:</label>
                                                        <div class="form-group mb-0">
                                                            <input type="text" class="form-control dt-date flatpickr-range dt-input" data-column="5" placeholder="StartDate to EndDate" data-column-index="4" name="dt_date" />
                                                            <input type="hidden" class="form-control dt-date start_date dt-input" data-column="5" data-column-index="4" name="value_from_start_date" />
                                                            <input type="hidden" class="form-control dt-date end_date dt-input" name="value_from_end_date" data-column="5" data-column-index="4" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Salary:</label>
                                                        <input type="text" class="form-control dt-input" data-column="6" placeholder="10000" data-column-index="5" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
            <div class="card-datatable table-responsive pt-0">
                <table class="user-list-table table">
                    <thead class="thead-light">
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
        <!-- list section end -->
    </section>
    <!-- users list ends -->
@endsection

@section('extra-script')
    <script src="{{ asset('app-assets/js/scripts/pages/app-user-list.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            var table = $('.user-list-table').DataTable({
                processing: true,
                serverSide: true,
                searching: false,
                ajax: "{{ route('users.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'full_name',
                        name: 'full_name'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'user_status',
                        name: 'user_status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: true
                    },
                ],
                "createdRow": function(row, data, dataIndex) {
                    dtAnchorToForm(row);
                }
            }).on('click', '.delete_action', function(e) {
                e.preventDefault();

                var $this = $(this);

                /*swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will be able to recover!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        $this.find("form").trigger('submit');
                    } else {
                        return false;
                    }
                });*/
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        cancelButton: 'btn btn-outline-danger ml-1'
                    },
                    buttonsStyling: false
                }).then(function(result) {
                    if (result.value) {
                        $this.find("form").trigger('submit');
                    }
                });
            });

            function dtAnchorToForm($parent) {
                $('td:last', $parent).addClass('btn-td');

                $('[data-method]', $parent).append(function() {
                        if (!$(this).find('form').length > 0) {
                            var method = this.getAttribute('data-method'),
                                formName = this.getAttribute('data-form-name') || '';

                            if (method == 'delete') {
                                return "\n<form action='" + $(this).attr('href') +
                                    "' method='POST' name='delete_item' style='display:none'>\n" +
                                    "<input type='hidden' name='_method' value='" + $(this).attr(
                                    'data-method') + "'>\n" +
                                    "<input type='hidden' name='_token' value='" + $('meta[name="csrf-token"]')
                                    .attr('content') + "'>\n" +
                                    '</form>\n';
                            } else {
                                return "\n<form action='" + $(this).attr('href') + "' method='" + method +
                                    "' " + (formName ? "name='" + formName + "'" : '') +
                                    " style='display:none'>\n" +
                                    "<input type='hidden' name='_token' value='" + $('meta[name="csrf-token"]')
                                    .attr('content') + "'>\n" +
                                    '</form>\n';
                            }
                        } else {
                            return ''
                        }
                    })
                    .attr('href', '#')
                    .attr('style', 'cursor:pointer;');
            }
        });
    </script>
@endsection
