Ext.define('Demo.view.main.MainController', {
	extend: 'Ext.app.ViewController',
	alias: 'controller.main',
	requires: [
		'Ext.window.MessageBox',
		'Ext.tree.Panel'
	],

    config: {
        control: {
            'app-main  treepanel': {
                // rowdblclick: 'onPanelRendered'
                rowclick: 'onPanelRendered'
            }
        }
    },

	onPanelRendered: function(row, record, tr, rowIndex, e, eOpts) {
		var painel = Ext.getCmp('painel');
		var tab = record.data.tab;
		//console.log("valor>> " + tab);
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
				//console.log("valor>> " + obj);
				menu.add(obj);
			}
		});
	}

});
