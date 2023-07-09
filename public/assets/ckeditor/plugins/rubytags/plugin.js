CKEDITOR.plugins.add( 'rubytags', {
    icons: 'rubytags',
    init: function( editor ) {
        editor.addCommand( 'insertRubytag', new CKEDITOR.dialogCommand( 'rubyDialog' ));
        editor.ui.addButton( 'Rubytag', {
            label: 'Insert Rubytag',
            command: 'insertRubytag',
            toolbar: 'insert,0'
        });
    }
});

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
                        'default':      ''
                    },
                    {
                        type:           'text',
                        label:          'Dòng dưới',
                        id:             'text_ruby',
                        'default':      ''
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
                element = element.getAscendant( 'ruby', true );

            if ( !element || element.getName() != 'ruby' ) {
                element = editor.document.createElement( 'ruby' );
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
            console.log(abbr);

            var rubyText = dialog.getValueOf( 'tab-basic', 'text_ruby' );
            var rtText = dialog.getValueOf( 'tab-basic', 'text_rt' );
            abbr.setHtml(rubyText + '<rt>' + rtText + '</rt>');



            this.commitContent( abbr );

            if ( this.insertMode )
                editor.insertElement( abbr );
        }

    };
} );