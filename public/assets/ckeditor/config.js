/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {

	config.removePlugins = 'exportpdf, flash';

	config.connectorPath='/ckfinder/connector';
	config.filebrowserBrowseUrl = '/js/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/js/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = '/js/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

	config.extraPlugins = 'mathjax, rubytags, html5audio';
	config.mathJaxLib = 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML';

	config.extraAllowedContent = 'ruby rt';
};
