Ext.define('Demo.model.Pessoa', {
	extend: 'Ext.data.Model',
	fields:
	[
		{ name: 'id', type: 'int' },
		{ name: 'nome', type: 'string' },
		{ name: 'cpfcnpj', type: 'string' },
		{ name: 'logradouro', type: 'string' },
		{ name: 'numero', type: 'string' },
		{ name: 'cep', type: 'string' },
		{ name: 'complemento', type: 'string' },
	]
});