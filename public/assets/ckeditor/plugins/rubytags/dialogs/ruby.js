CKEDITOR.dialog.add( 'rubyDialog', function( editor ) {
    return {
        title: 'Insert Ruby Rt html Tags',
        minWidth: 400,
        minHeight: 200,

        contents: [
            {
                id: 'tab-basic',
                label: 'Basic Settings',
                elements: [
                    {
                        type:           'text',
                        label:          'Dòng trên',
                        id:             'text_rt',
                        'default':      'Nội dung dòng trên?'
                    }
                ],
                validate: CKEDITOR.dialog.validate.notEmpty( "Dòng trên không để trống." ),
                setup: function( element ) {
                    this.setValue( element.getText() );
                },

                commit: function( element ) {
                    element.setText( this.getValue() );
                }
            }
        ],

        onShow: function() {
            var selection = editor.getSelection();
            var element = selection.getStartElement();

            if ( element )
                element = element.getAscendant( 'abbr', true );

            if ( !element || element.getName() != 'abbr' ) {
                element = editor.document.createElement( 'abbr' );
                this.insertMode = true;
            }
            else
                this.insertMode = false;

            this.element = element;
            if ( !this.insertMode )
                this.setupContent( this.element );
        },

        onOk: function() {
            var dialog = this;
            var abbr = this.element;
            this.commitContent( abbr );

            if ( this.insertMode )
                editor.insertElement( abbr );
        }

    };
} );