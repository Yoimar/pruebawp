(function(){
	tinymce.create('tinymce.plugins.aplaceholder',{
		init: function(ed, url){
			ed.addButton('aplaceholder',{
				title: 'Agregar un PlaceHolder',
				image: url + '/placeholder.png',
				onclick: function() {
					tb_show('aplaceholder', '#TB_inline?inlineId=aplaceholder-form');
				}
			});
		},
		createControl: function(n, cm){
			return null;
		},
	});

	tinymce.PluginManager.add('aplaceholder', tinymce.plugins.aplaceholder);

	jQuery(function(){

		var form = jQuery('<div id="aplaceholder-form"><table id="aplaceholder-table" class="form-table"><tr><th><label for="aplaceholder-width"> Ancho</label></th><td><input type="text" id="aplaceholder-width" placeholder="200" /><br /><small>Especifique el ancho</small></td></tr><tr><th><label for="aplaceholder-height">Alto</label></th><td><input type="text" id="aplaceholder-height" placeholder="200" /> <br /><small>Especifique el Alto</small></td></tr></table><p class="submit"><input type="button" id="aplaceholder-submit" class="button-primary" value="Insertar Placeholder" name="submit" /></p></div>');

		var table = form.find('table');
		form.appendTo('body').hide();

		form.find('#aplaceholder-submit').click(function(){
		
			var shortcode = '[aplaceholder';
		
			if(table.find('#aplaceholder-width').val() != ''){
				shortcode += ' width=' +table.find('#aplaceholder-width').val();
			}
		
			if(table.find('#aplaceholder-height').val() != ''){
				shortcode += ' height=' +table.find('#aplaceholder-height').val();
			}
		
			shortcode += '][/aplaceholder]';
			tinyMCE.activeEditor.execCommand('mceInsertContent', 0, shortcode);
			tb_remove();
		});

	});

})();





