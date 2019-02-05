@extends('layouts.backend') 
@section('content')

<div class="block">
     <div class="block-content">
        <div class="block-header">
            <h3 class="block-title">
                {{ ucfirst(config('multiauth.prefix')) }} List
                <span class="float-right">
                    <a href="{{route('admin.register')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> New {{ ucfirst(config('multiauth.prefix')) }}</a>
                </span>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped js-dataTable-full js-table-checkable">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 70px;">
                                    <label class="check">
                                        <input type="checkbox" id="checkAll" name="check-all"><span class="checkmark"></span>
                                    </label>
                                </th>
                                <th>Name</th>
                                <th class="hidden-xs">Email</th>
                                <th class="hidden-xs" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 10%;">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($admins as $admin)
                            <tr>
                                <td class="text-center">
                                    <label class="check">
                                        <input type="checkbox" id="row_1" name="row_1"><span class="checkmark"></span>
                                    </label>
                                </td>
                                <td class="font-w600">{{ $admin->name }}</td>
                                <td class="hidden-xs">{{ $admin->email }}</td>
                                <td class="hidden-xs">
                                    @foreach ($admin->roles as $role)
                                        <span class="label label-primary">{{ $role->name }}</span>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-light js-tooltip-enabled" href="{{route('admin.edit',[$admin->id])}}">
                                                <i class="fa fa-fw fa-pencil-alt text-info"></i>
                                            </a>

                                            <a class="btn btn-sm btn-light js-tooltip-enabled" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">
                                                <i class="fa fa-fw fa-times text-danger"></i>
                                            </a>

                                            <form id="delete-form-{{ $admin->id }}" action="{{ route('admin.delete',$admin->id) }}" method="POST" style="display: none;">
                                                @csrf @method('delete')
                                            </form>
                                        </div>
                                    </td>
                            </tr>
                            @endforeach 
                            @if($admins->count()==0)
                            <p>No {{ config('multiauth.prefix') }} created Yet, only super {{ config('multiauth.prefix') }} is available.</p>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection