/**
 * This class is the main view for the application. It is specified in app.js as the
 * "autoCreateViewport" property. That setting automatically applies the "viewport"
 * plugin to promote that instance of this class to the body element.
 *
 * TODO - Replace this content of this view to suite the needs of your application.
 */
Ext.define('Demo.view.main.Main', {
    extend: 'Ext.container.Container',
    requires: [
        'Demo.view.main.MainController',
        'Demo.view.main.MainModel',
        'Demo.view.pessoas.PessoasController',
        'Demo.view.pessoas.Pessoas'
    ],

    xtype: 'app-main',
    
    controller: 'main',
    viewModel: {
        type: 'main'
    },

    layout: {
        type: 'border'
    },

    items: [
        {
            xtype: 'panel',
            region: 'west',
            bodyStyle: 'background:#dfeaf2; padding:5px;',
            id: 'menu',
            width: 200,
            collapsible: true,
            bind: {
                title: 'Menu',
            },
            layout: {
                type: 'accordion'
            },
            listeners: {
                render: 'onBeforeRenderMenu'
            }            
        },
        {
            region: 'center',
            xtype: 'tabpanel',
            id: 'painel',
            items:
            [
                {
                    title: 'Sumário',
                    html: '<br><br><br><center><h2>Conteúdo</h2>'
                }
            ]
        }
    ]

    
    // items: [{
    //     xtype: 'panel',
    //     bind: {
    //         title: '{name}'
    //     },
    //     region: 'west',
    //     html: '<ul><li>This area is commonly used for navigation, for example, using a "tree" component.</li></ul>',
    //     width: 250,
    //     split: true,
    //     tbar: [{
    //         text: 'Button',
    //         handler: 'onClickButton'
    //     }]
    // },{
    //     region: 'center',
    //     xtype: 'tabpanel',
    //     items:[{
    //         title: 'Tab 1',
    //         html: '<h2>Content appropriate for the current navigation.</h2>'
    //     }]
    // }]

});
