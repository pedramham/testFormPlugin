import './component';
import './preview';

Shopware.Service('cmsService').registerCmsBlock({
    name: 'form-test-form',
    label: 'test-from',
    category: 'form',
    component: 'sw-cms-block-form-test-form',
    previewComponent: 'sw-cms-preview-form-test-form',
    defaultConfig: {
        marginBottom: '20px',
        marginTop: '20px',
        marginLeft: '20px',
        marginRight: '20px',
        sizingMode: 'boxed',
    },
    slots: {
        content: {
            type: 'form',
        },
    },
});
