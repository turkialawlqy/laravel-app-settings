@component('app_settings::input_group', compact('field'))

    <textarea type="{{ $field['type'] }}"
              name="{{ $field['name'] }}"
              @if( $placeholder = Arr::get($field, 'placeholder') )
              placeholder="{{ __($placeholder) }}"
              @endif
              @if( $rows = Arr::get($field, 'rows') )
              rows="{{ $rows }}"
              @endif
              @if( $cols = Arr::get($field, 'cols') )
              cols="{{ $cols }}"
              @endif
              class="{{ Arr::get( $field, 'class', config('app_settings.ckeditor', 'form-control')) }}"
              @if( $styleAttr = Arr::get($field, 'style')) style="{{ $styleAttr }}" @endif
              id="{{ Arr::get($field, 'name') }}"
    >{{ old($field['name'], \setting($field['name'])) }}</textarea>

@endcomponent


@section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#about_body' ), {
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'fontColor',
                        'fontSize',
                        'fontBackgroundColor',
                        'fontFamily',
                        'highlight',
                        'subscript',
                        'superscript',
                        '|',
                        'bold',
                        'underline',
                        'strikethrough',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        'todoList',
                        '|',
                        'indent',
                        'outdent',
                        'alignment',
                        '|',
                        'MathType',
                        'codeBlock',
                        'code',
                        'ChemType',
                        '|',
                        'pageBreak',
                        'horizontalLine',
                        'comment',
                        'imageInsert',
                        'imageUpload',
                        'blockQuote',
                        'insertTable',
                        'mediaEmbed',
                        'undo',
                        'redo'
                    ]
                },
                language: 'ar',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:full',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells',
                        'tableCellProperties',
                        'tableProperties'
                    ]
                },
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>
@endsection
