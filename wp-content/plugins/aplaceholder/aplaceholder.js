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
})();

jQuery(function()){
	var form = jQuery('



		')
}

tinymce.PluginManager.add('aplaceholder', tinymce.plugins.aplaceholder);

