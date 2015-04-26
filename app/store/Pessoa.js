Ext.define('Demo.store.Pessoa', {
	extend: 'Ext.data.Store',
	model: 'Demo.model.Pessoa',
	pageSize: 10,
	remoteFilter: true,
	autoLoad: true,
	proxy:
	{
		type: 'ajax',
		url: 'php/clientes/selecionar_clientes.php',
		reader:
		{
			type: 'json',
			rootProperty: 'pessoas',
			totalProperty: 'total'
		}
	},	
});