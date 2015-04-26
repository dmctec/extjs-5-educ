Ext.define('Demo.view.pessoas.FormularioPessoa', {
	extend: 'Ext.window.Window',
	controller: 'pessoas',
	id: 'FormularioPessoa',
	width: 16*45,
	height: 9*45,
	modal: true,
	maximizable: true,
    layout: 'fit',
	items:
	[
		{
			xtype: 'form',
			border: false,
			bodyPadding: 10,
			url: 'php/clientes/salvar_cliente.php',
			fieldDefaults:
			{
				labelAlign: 'top',
				labelWidth: 30,
				labelStyle: 'font-weight: bold;'
			},
			layout:
			{
				type: 'vbox',
				align: 'stretch'
			},
			items:
			[
				{
					xtype: 'fieldcontainer',
					layout: 'hbox',
					items:
					[
						{
							xtype: 'hiddenfield',
							name: 'id',
							id: 'hiddenIdPessoa',
							value: 0
						},
						{
							xtype: 'textfield',
							fieldLabel: 'Nome',
							allowBlank: false,
							flex: 1,
							name: 'nome'
						},
						{
							xtype: 'splitter'
						},
						{
							xtype: 'textfield',
							minLength: 9,
							allowBlank: false,
							enforceMaxLength: true,
							maxLength: 14,
							name: 'cpfcnpj',
							fieldLabel: 'CPF/CNPJ'
						},
					]
				},
				{
					xtype: 'fieldcontainer',
					layout: 'hbox',
					items:
					[
						{
							xtype: 'textfield',
							fieldLabel: 'Logradouro',
							name: 'logradouro',
							allowBlank: false,
							flex: 1
						},
						{
							xtype: 'splitter'
						},
						{
							xtype: 'textfield',
							fieldLabel: 'Número',
							name: 'numero',
							allowBlank: false,
						},
						{
							xtype: 'splitter'
						},
						{
							xtype: 'textfield',
							fieldLabel: 'Complemento',
							name: 'complemento',
							flex: 0.5
						},
						{
							xtype: 'splitter'
						},
						{
							xtype: 'numberfield',
							name: 'cep',
							hideTrigger: true,
							minLength: 8,
							maxLength: 8,
							allowBlank: false,
							fieldLabel: 'CEP'
						}
					]
				}
			],
			bbar:
			[
				'->',
				{
					align: 'right',
					text: 'Salvar',
					// iconCls: 'disk',
					handler: function()
					{
						var form = this.up('form');

						if(form.isValid())
						{

							form.submit({
								success: function(form, action){

									Ext.Msg.alert('Sucesso', action.result.message);
									form.reset();

									var grid = Ext.getCmp('tabPessoas');
									grid.getStore().reload();

								},
								failure: function(form, action) {
									Ext.Msg.alert('Falha', action.result.message);
								}
							});
						}

					}
				},
				{
					text: 'Fechar',
					// iconCls: 'cancel',
					handler: function()
					{
						Ext.getCmp('FormularioPessoa').close();
					}
				}
			]
		}

	]
});