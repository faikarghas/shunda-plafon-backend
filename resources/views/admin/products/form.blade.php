@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'subTitle',
        'label' => 'Sub Title',
        'maxlength' => 200
    ])

    @formField('select', [
        'name' => 'category',
        'label' => 'Category',
        'placeholder' => 'Select category',
        'options' => [
            [
                'value' => 'green',
                'label' => 'Green Collection'
            ],
            [
                'value' => 'blue',
                'label' => 'Blue Collection'
            ],
            [
                'value' => 'violet',
                'label' => 'Violet Collection'
            ]
        ]
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ],'link','bold', 'italic', 'underline', 'image'],
        'maxlength' => 2000,
        'editSource' => true,
    ])

    @formField('wysiwyg', [
        'name' => 'tips',
        'label' => 'Tips',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ],'link','bold', 'italic', 'underline', ],
        'maxlength' => 2000,
        'editSource' => true,
    ])

    @formField('wysiwyg', [
        'name' => 'surfaces',
        'label' => 'Surfaces',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ],'link','bold', 'italic', 'underline', ],
        'maxlength' => 2000,
        'editSource' => true,
    ])

    @formField('input', [
        'name' => 'dry_process',
        'label' => 'Dry Process',
        'maxlength' => 200
    ])
    @formField('input', [
        'name' => 'net_weight',
        'label' => 'Net Weight',
        'maxlength' => 200
    ])
    @formField('input', [
        'name' => 'coverage',
        'label' => 'Coverage',
        'maxlength' => 200
    ])
    @formField('input', [
        'name' => 'application',
        'label' => 'Application',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'shopee_link',
        'label' => 'Shopee Link',
        'maxlength' => 200
    ])
    @formField('input', [
        'name' => 'tokopedia_link',
        'label' => 'Tokopedia Link',
        'maxlength' => 200
    ])
    @formField('input', [
        'name' => 'whatsapp_link',
        'label' => 'Whatsapp Link',
        'maxlength' => 200
    ])

    @formField('medias', [
        'name' => 'image',
        'label' => 'Image 1',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('medias', [
        'name' => 'image2',
        'label' => 'Image 2',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('medias', [
        'name' => 'image3',
        'label' => 'Image 3',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('medias', [
        'name' => 'image4',
        'label' => 'Image 4',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])


   
@stop
