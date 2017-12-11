import './sw-sidebar.less';
import template from './sw-sidebar.html.twig';

Shopware.Component.register('sw-sidebar', {
    inject: ['menuService', 'loginService'],
    template,

    computed: {
        mainMenuEntries() {
            return this.menuService.getMainMenu();
        }
    },

    methods: {
        getIconName(name) {
            return `icon-${name}`;
        },
        onLogoutUser() {
            this.loginService.clearBearerAuthentication();
            this.$router.push({
                name: 'sw.login.index'
            });
        }
    }
});
