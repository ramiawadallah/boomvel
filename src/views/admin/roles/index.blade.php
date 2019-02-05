@extends('layouts.backend') 
@section('content')

<div class="block">
     <div class="block-content">
        <div class="block-header">
            <h3 class="block-title">
                Roles list
                <span class="float-right">
                    <a href="{{ route('admin.role.create') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> New role</a>
                </span>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-md-12">
                    <table id="datata" class="table table-bordered table-striped table-vcenter js-dataTable-buttons table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 70px;">
                                    <label class="check">
                                        <input type="checkbox" id="checkAll" name="check-all"><span class="checkmark"></span>
                                    </label>
                                </th>

                                <th>Name</th>

                                <th class="hidden-xs">Role</th>

                                <th class="text-center" style="width: 10%;">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($roles as $role)
                                <tr>

                                    <td class="text-center">
                                        <label class="check">
                                            <input type="checkbox" id="row_1" name="row_1"><span class="checkmark"></span>
                                        </label>
                                    </td>

                                    <td class="font-w600">{{ $role->name }}</td>

                                    <td class="hidden-xs">
                                        <span class="badge badge-primary badge-pill">
                                            {{ $role->admins->count() }} {{ ucfirst(config('multiauth.prefix')) }}
                                        </span>
                                    </td>

                                     <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-light js-tooltip-enabled" href="{{route('admin.role.edit',[$role->id])}}">
                                                <i class="fa fa-fw fa-pencil-alt text-info"></i>
                                            </a>

                                            <a class="btn btn-sm btn-light js-tooltip-enabled" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">
                                                <i class="fa fa-fw fa-times text-danger"></i>
                                            </a>

                                            <form id="delete-form-{{ $role->id }}" action="{{ route('admin.role.delete',$role->id) }}" method="POST" style="display: none;">
                                                @csrf @method('delete')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection