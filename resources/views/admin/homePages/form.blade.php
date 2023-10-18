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
        'name' => 'banner_title',
        'label' => 'Banner Title',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ],'link','bold', 'italic', 'underline', ],
        'maxlength' => 200,
        'editSource' => true,
        'translated' => true,
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


    @formField('wysiwyg', [
        'name' => 'section2_title',
        'label' => 'Section 2 Title',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ],'link','bold', 'italic', 'underline', ],
        'maxlength' => 200,
        'editSource' => true,
        'translated' => true,
    ])


    
    @formField('input', [
        'name' => 'ongrid',
        'label' => 'ongrid',
        'translated' => true,
        'maxlength' => 1000
    ])

    @formField('input', [
        'name' => 'offgrid',
        'label' => 'offgrid',
        'translated' => true,
        'maxlength' => 1000
    ])

    @formField('input', [
        'name' => 'hybrid',
        'label' => 'hybrid',
        'translated' => true,
        'maxlength' => 1000
    ])

    @formField('input', [
        'name' => 'contact_title',
        'label' => 'contact_title',
        'translated' => true,
        'maxlength' => 200
    ])


    @formField('input', [
        'name' => 'facebook',
        'label' => 'facebook',
        'translated' => true,
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'instagram',
        'label' => 'instagram',
        'translated' => true,
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'youtube',
        'label' => 'youtube',
        'translated' => true,
        'maxlength' => 200
    ])

    @formField('medias', [
        'name' => 'image',
        'label' => 'Image',
        'note' => 'Also used in listings',
        'max' => 5,
        'fieldNote' => 'Minimum image width: 1500px'
    ])
@stop
