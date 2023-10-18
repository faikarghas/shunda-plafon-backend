@extends('twill::layouts.form')

@section('contentFields')
    {{-- @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ],'link','bold', 'italic', 'underline', ],
        'maxlength' => 200,
        'editSource' => true,
        'translated' => true,
    ]) --}}

    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 200,
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'phone_number',
        'label' => 'Telp',
        'maxlength' => 200
    ])
@stop
