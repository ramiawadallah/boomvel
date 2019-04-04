@extends('layouts.backend')
@section('title') {{ trans('lang.settings') }}  @endsection
@section('content')

{!! bsForm::start(['route'=>['settings.update',1],'files'=>true,'method'=>'put']) !!}


<br>
<div class="row">
    <div class="col-lg-8">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">
                    {{ trans('lang.website-main-setting') }}
                </h3>
            </div>
            <div class="block-content block-content-full">
                
                {!! bsForm::translate(function($form,$lang){
                    $form->text('title',site('title',$lang));
                    $form->text('subtitle',site('subtitle',$lang));
                    $form->text('copyright',site('copyright',$lang));
                    $form->text('address',site('address',$lang));
                    $form->textarea('content',site('content',$lang));
                }) !!}

                {!! bsForm::text('mainvideo',site('mainvideo')) !!}

                {!! bsForm::text('email',site('email')) !!}
                
                {!! bsForm::text('phone',site('phone')) !!}

                {!! bsForm::text('fax',site('fax')) !!}

                {!! bsForm::text('pobox',site('pobox')) !!}

                {!! bsForm::text('map',site('map')) !!}

                {!! bsForm::tage('keywords',site('keywords')) !!}

                {!! bsForm::text('facebook',site('facebook')) !!}

                {!! bsForm::text('twitter',site('twitter')) !!}

                {!! bsForm::text('linkedin',site('linkedin')) !!}

                {!! bsForm::text('instagram',site('instagram')) !!}

                {!! bsForm::text('youtube',site('youtube')) !!}
                
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">{{ trans('lang.options') }}</h3>
            </div>
            <div class="block-content block-content-full">
                {!! bsForm::image('logo',$settings->logo) !!}
                <hr>
                {!! bsForm::radio('maintenance',[
                    'open'=> trans('lang.maintenance-open'),
                    'close'=> trans('lang.maintenance-close'),
                ],$settings->maintenance) !!}
            </div>
        </div>
    </div>
</div>


{!! Form::close() !!}


@endsection