Ext.define('Demo.view.pessoas.Pessoas', {
	extend: 'Ext.grid.Panel',
	xtype: 'pessoas',
	controller: 'pessoas',
	layout: 'fit',
	store: 'Demo.store.Pessoa',
	columns: [
		{ text: 'Id',  dataIndex: 'id' },
		{ text: 'Nome',  dataIndex: 'nome', flex: 1, },
		{ text: 'CNPJ/CPF', dataIndex: 'cpfcnpj' },
		{ text: 'Logradouro', dataIndex: 'logradouro' },
	],
	dockedItems:
	[
		{
			xtype: 'toolbar',
			dock: 'top',
			items:
			[
				{
					text: 'Adicionar',
					// iconCls: 'add',
					listeners:
					{
						click: 'onClickAdicionarPessoa'
					}
				},
				{
					text: 'Deletar',
					// iconCls: 'delete',
					listeners:
					{
						click: 'onClickDeletarPessoa'
					}
				},
				{
					xtype: 'textfield',
					width: 250,
					listeners:
					{
						change: 'onChangeBusca'
					}

				}
			]
		},
		{
			xtype: 'pagingtoolbar',
			store: 'Demo.store.Pessoa',
			dock: 'bottom',
			displayInfo: true,
			displayMsg: 'Mostrando {0} - {1} de {2}'
		}
	],
	listeners:
	{
		// itemdblclick: 'onDuploClickPessoa'
		itemclick: 'onDuploClickPessoa'
	}
});