@extends('twill::layouts.form')

@section('contentFields')
    @formField('medias', [
        'name' => 'image',
        'label' => 'Image 1',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'toolbarOptions' => [ [ 'header' => [1, 2, 3, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ],'link','bold', 'italic', 'underline', 'image'],
        'maxlength' => 10000,
        'editSource' => true,
    ])

    @formField('date_picker', [
        'name' => 'inspiration_date',
        'label' => 'Date',
        'minDate' => '2017-09-10 12:00',
        'maxDate' => '2100-12-10 12:00'
    ])

    {{-- @formField('repeater', ['type' => 'categories',]) --}}
    {{-- @formField('repeater', ['type' => 'tags',]) --}}
    @formField('input', [
        'name' => 'categories',
        'label' => 'Category',
        'maxlength' => 200
    ])
    @formField('input', [
        'name' => 'tags',
        'label' => 'Tag',
        'maxlength' => 200
    ])
    
    @formField('multi_select', [
        'name' => 'products',
        'label' => 'Products',
        'unpack' => false,
        'min' => 0,
        'max' => 5,
        'options' => $products
    ])

    {{-- @formField('tags') --}}
@stop
