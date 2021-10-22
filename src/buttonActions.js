import Http from './http'
import helper from './helper'
import eventHandler from './eventHandler'
const buttonHandler = (event, type) => {
    let element = event.target;
    event.stopPropagation();
    event.preventDefault();
    let url = element.getAttribute("path");
    let row, data = {};
    let removeRow = true;
    if (row = element.closest('.table-row-search')) {
        data['text-input-value'] = row.dataset.link;
    } else {
        row = element.closest('.table-row')
        data = row.dataset;
        if (!data.gid) {
            console.log("gid is not set!");
        }
    }
    Http.getInstance(url).setErrorHandler(function (xhr, textStatus, error) {
        console.log(error);
    }).setHandler(function (data) {
        if (data.hasOwnProperty('error')) {
            helper.message(data['error']);
            return;
        }
        if (data.hasOwnProperty('result')) {
            helper.message("Success " + data['result']);
        }
        if (data.hasOwnProperty('message')) {
            helper.message(data.message);
        }
        if (row && removeRow)
            row.remove();
    }).setData(data).send();

}
export default {
    run: function () {
        eventHandler.add("click", "#ncdownloader-table-wrapper", ".table-cell-action-item .button-container button", e => buttonHandler(e, ''));
    }
}