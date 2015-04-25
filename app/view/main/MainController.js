Ext.define('Demo.view.main.MainController', {
	extend: 'Ext.app.ViewController',

     config: {
         control: {
             'app-main  treepanel': {
                 rowdblclick: 'onPanelRendered'
             }
          }
     },

	requires: [
		'Ext.window.MessageBox'
	],

	alias: 'controller.main',

	onPanelRendered: function(row, record, tr, rowIndex, e, eOpts) {
		var painel = Ext.getCmp('painel');
		var tab = record.data.tab;
		if(Ext.getCmp('tab'+tab) == undefined)
		{
			painel.add({
				title: tab,
				id: 'tab'+tab,
				closable: true,
				xtype: tab.toLowerCase()
			});
			painel.getLayout().setActiveItem('tab'+tab);
		}
		else
			painel.getLayout().setActiveItem('tab'+tab);
    },

	onClickButton: function () {
		Ext.Msg.confirm('Confirm', 'Are you sure?', 'onConfirm', this);
	},

	onConfirm: function (choice) {
		if (choice === 'yes') {
			//
		}
	},

	onBeforeRenderMenu: function(menu, eOpts){
		Ext.Ajax.request({
			url: 'php/menu/menu.php',
			success: function(response){
				var obj = Ext.JSON.decode(response.responseText);
				menu.add(obj);
			}
		});
	}

});
