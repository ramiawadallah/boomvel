@extends('layouts.backend')
@section('title') {{ trans('lang.pages') }}  @endsection
@section('content')
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="col-lg-12">
    <div class="block block-mode-loading-oneui">
        <div class="block-header border-bottom">
            {{ trans('lang.pages') }}
            <hr>
            {!! Btn::create() !!} 
        </div>
        <div class="block-content block-content-full">
            {!! Form::open(['id'=>'form_data','url'=>aurl('pages/destroy/all'),'method'=>'delete']) !!}
                <table id="example-with-json-button" class="table table-hover table-vcenter js-dataTable-buttons" data-options='{"searching":true}'>
                    <thead>
                        <tr>
                            <th width="10">{!! bsForm::deleteAll() !!}</th>
                            <th>{{ trans('lang.name') }}</th>
                            <th>{{ trans('lang.uri') }}</th>
                            <th>{{ trans('lang.stutes') }}</th>
                            <th>{{ trans('lang.created-at') }}</th>
                            <th>{{ trans('lang.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td width="10">{!! bsForm::deleteSelect($page->id) !!}</td>
                                 <td>{{ $page->trans('title') }}</td>
                                 <td><a href="{{ url($page->uri)}}" >{{ $page->pretty_uri }}</a></td>
                                 <td>{{ $page->trans('stutes') }}</td>
                                 <td>{{ date('Y/m/d',strtotime($page->created_at)) }}</td>
                                 <td>
                                     {!! Btn::view($page->id) !!}
                                     {!! Btn::edit($page->id) !!}
                                     {!! Btn::delete($page->id,$page->trans('name')) !!}
                                 </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            {!! Form::close() !!}
        </div>
    </div>
</div>




@endsection