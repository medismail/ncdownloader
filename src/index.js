import helper from './helper'
import eventHandler from './eventHandler'
import Http from './http'
import { translate as t, translatePlural as n } from '@nextcloud/l10n'
import updatePage from './updatePage'
import buttonActions from './buttonActions'
import './css/style.scss'
import './css/table.scss'
import { createApp } from 'vue'
import App from './App';

'use strict'
const basePath = "/apps/ncdownloader";

window.addEventListener('DOMContentLoaded', function () {

    // inputAction.run();
    updatePage.run();
    buttonActions.run();
    let container = 'ncdownloader-form-wrapper';
    let app = createApp(App);
    let vm = app.mount('#' + container);
    helper.addVue(vm.$options.name, vm);

    eventHandler.add("click","#start-aria2 button", function (e) {
        const path = basePath + "/aria2/start";
        let url = helper.generateUrl(path);
        Http.getInstance(url).setHandler(function (data) {
            helper.aria2Toggle(data);
        }).send();
    })
    eventHandler.add("click", '#ncdownloader-user-settings button', function (e) {
        let link = helper.generateUrl(e.target.getAttribute('path'));
        window.location.href = link;
    })
    eventHandler.add("click", "#app-navigation", "#search-download", helper.showDownload);

});




