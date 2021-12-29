import './component';
import './preview';

Shopware.Service('cmsService').registerCmsBlock({
    name: 'text-form-test',
    label: 'test form',
    category: 'text',
    component: 'sw-cms-block-text-test-form',
    previewComponent: 'sw-cms-preview-text-test-form',
    defaultConfig: {
        marginBottom: '20px',
        marginTop: '20px',
        marginLeft: '20px',
        marginRight: '20px',
        sizingMode: 'boxed',
    },
    slots: {
        content: 'text',
    },
});
