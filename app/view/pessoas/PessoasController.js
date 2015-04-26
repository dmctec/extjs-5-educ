Ext.define('Demo.view.pessoas.PessoasController', {
	extend: 'Ext.app.ViewController',

	requires: [
		'Ext.window.MessageBox',
		'Ext.toolbar.Paging',
		'Ext.grid.plugin.RowEditing',
		'Demo.view.pessoas.FormularioPessoa',
	],

	alias: 'controller.pessoas',

	onClickAdicionarPessoa: function(btn, e, eOpts)
	{
		Ext.create('Demo.view.pessoas.FormularioPessoa', { title: 'Adicionar Pessoa' }).show();
	},

	onClickDeletarPessoa: function(btn, e, eOpts)
	{
		var modelSelected = Ext.getCmp('tabPessoas').getSelectionModel();
		var record = modelSelected.getSelection()[0];

		if(record !== undefined)
		{

			Ext.Ajax.request({
				url: 'php/clientes/deletar_cliente.php',
				params: {
					id: record.data.id
				},
				success: function(response){

					var obj = Ext.JSON.decode(response.responseText);
					if(obj.success == true)
					{
						Ext.getCmp('tabPessoas').getStore().reload();
						Ext.Msg.alert('Sucesso', 'Pessoa excluída com sucesso!');
					}
					else
						Ext.Msg.alert('Falha', obj.message);

				}
			});
			
		}
	},

	onDuploClickPessoa: function(grid, record, item, index, e, eOpts){
		var win  = Ext.create('Demo.view.pessoas.FormularioPessoa').show();
		win.setTitle("Editar Pessoa");
		var form = win.down('form');

		form.loadRecord(record);
	}

});