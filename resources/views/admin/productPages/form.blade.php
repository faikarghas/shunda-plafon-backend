@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'meta_title',
        'label' => 'Meta Title',
        'translated' => true,
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'meta_description',
        'label' => 'Meta Description',
        'translated' => true,
        'maxlength' => 200
    ])

    @formField('wysiwyg', [
        'name' => 'section1_title',
        'label' => 'Section 1 Title',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ],'link','bold', 'italic', 'underline', ],
        'maxlength' => 200,
        'editSource' => true,
        'translated' => true,
    ])

    @formField('wysiwyg', [
        'name' => 'section1_description',
        'label' => 'Section 1 Description',
        'toolbarOptions' => [ [ 'header' => [1, 2, 3, 4, 5, 6, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ],'link','bold', 'italic', 'underline', ],
        'maxlength' => 1000,
        'editSource' => true,
        'translated' => true,
    ])
@stop
