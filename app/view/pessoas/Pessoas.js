Ext.define('Demo.view.pessoas.Pessoas', {
	extend: 'Ext.panel.Panel',
	xtype: 'pessoas',
	controller: 'pessoas',
	layout: 'fit',
	items:
	[

		{
			xtype: 'form',
			border: false,
			bodyPadding: 10,
			// url: 'php/view/NFe/salvarNFe',

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
							flex: 1,
							name: 'nome'
						},
						{
							xtype: 'splitter'
						},
						{
							xtype: 'textfield',
							minLength: 9,
							enforceMaxLength: true,
							maxLength: 14,
							fieldLabel: 'CNPJ/CPF',
							validator: function()
							{
								var valor = (this.value != null) ? this.value.toString() : "";
								if(valor.length == 11)
								{
									if(validarCPF(valor) == true)
									{
										Ext.getCmp('fieldContainerPessoaFisica').setHidden(false);
										Ext.getCmp('fieldContainerPessoaJuridica').setHidden(true);
										return true;
									}
									else
										return "CPF inválido!";
								}
								else if(valor.length == 14)
								{
									if(validarCNPJ(valor) == true)
									{
										Ext.getCmp('fieldContainerPessoaFisica').setHidden(true);
										Ext.getCmp('fieldContainerPessoaJuridica').setHidden(false);
										return true;
									}
									else
										return "CNPJ inválido!";
								}
								else
								{
									Ext.getCmp('fieldContainerPessoaFisica').setHidden(true);
									Ext.getCmp('fieldContainerPessoaJuridica').setHidden(true);
									return "Valor inválido!";
								}
							}
						},
					]
				},
				{
					xtype: 'fieldcontainer',
					id: 'fieldContainerPessoaJuridica',
					hidden: true,
					layout: 'hbox',
					items:
					[
						{
							xtype: 'textfield',
							fieldLabel: 'Nome Fantasia',
							flex: 1,
							name: 'nomefantasia'
						},
						{
							xtype: 'splitter'
						},
						{
							xtype: 'combobox',
							fieldLabel: 'Representante',
							name: 'representante',
							flex: 1,
						},
						{
							xtype: 'splitter'
						},
						{
							xtype: 'textfield',
							fieldLabel: 'IE',
							name: 'nomefantasia'
						},
					]
				},
				{
					xtype: 'fieldcontainer',
					id: 'fieldContainerPessoaFisica',
					layout:
					{
						type: 'vbox',
						align: 'stretch'
					},
					hidden: true,
					items:
					[
						{
							xtype: 'fieldcontainer',
							layout: 'hbox',
							items:
							[
								{
									xtype: 'textfield',
									fieldLabel: 'Pai',
									flex: 1
								},
								{
									xtype: 'splitter'
								},
								{
									xtype: 'textfield',
									fieldLabel: 'Mãe',
									name: 'mae',
									flex: 1
								},
								{
									xtype: 'splitter'
								},
								{
									xtype: 'datefield',
									fieldLabel: 'Nascimento',
									name: 'datanascimento',
									format: 'd/m/Y',
									flex: 0.5
								}
							]
						},
						{
							xtype: 'fieldcontainer',
							layout: 'hbox',
							items:
							[
								{
									xtype: 'textfield',
									fieldLabel: 'RG/Passaporte',
									name: 'rgpassaporte',
									flex: 0.5
								},
								{
									xtype: 'splitter'
								},
								{
									xtype: 'textfield',
									fieldLabel: 'Orgão Emissor',
									name: 'orgaoemissor',
									flex: 0.5
								},
								{
									xtype: 'splitter'
								},
								{
									xtype: 'textfield',
									fieldLabel: 'Profissão',
									flex: 0.5
								}
							]							
						}


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
							allowBlank: false,
							flex: 1
						},
						{
							xtype: 'splitter'
						},
						{
							xtype: 'textfield',
							fieldLabel: 'Número',
							allowBlank: false,
						},
						{
							xtype: 'splitter'
						},
						{
							xtype: 'textfield',
							fieldLabel: 'Complemento',
							flex: 0.5
						},
						{
							xtype: 'splitter'
						},
						{
							xtype: 'numberfield',
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
				},
				{
					text: 'Fechar',
					// iconCls: 'cancel',
				}
			]
		}
	]


});
